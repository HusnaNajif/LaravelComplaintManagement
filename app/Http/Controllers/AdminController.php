<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\category;
use App\Models\feedback;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Notification;
use App\Notifications\AcceptNotification;
use App\Notifications\RejectNotification;
use App\Notifications\CompleteNotification;

use App\Models\complaint;

class AdminController extends Controller
{
 public function view_category(){
    $data=category::orderBy('id', 'desc')->get();
    return view('admin.add_category2',compact('data'));

 }

 public function add_category(Request $request){

    $data=new category;
    $data->category_name=$request->category;
    $data->save();
    return redirect()->back()->with('message','Category addedd successfully');
 }

 public function delete_category($id){
    $category=category::find($id);
    $category->delete();
    return redirect()->back()->with('message','Category Deleted Successfully');
 }


 public function show_usercomplaintnew(){
    
     
     
     $exceptThisUserIds = "Completed";
     $reject="Rejected";
     
   
     
   
   $data=complaint::whereNotIn('complaint_status', [$exceptThisUserIds,$reject])->orderBy('id', 'desc')->paginate(15);
   return view('admin.show_usercomplaintnew',compact('data'));
 }

 public function logout(Request $request) {
   Auth::logout();
   return redirect('/login');
}

public function view_users(){
   $user=User::all();
   $user_result=User::where('usertype','=','0')->get();


   return view('admin.viewusers',compact('user_result'));


}

public function show_dashboard(){
   
   $complaint=complaint::all();
    $exceptThisUserIds = "Completed";
     $reject="Rejected";

            $user=User::all();
            $user_count=user::where('usertype','=','0')->get()->count();

            $complaint_count=complaint::whereNotIn('complaint_status', [$exceptThisUserIds,$reject])->get()->count();
            $category_count=category::all()->count();
            $accept_complaints=complaint::where('complaint_status','=','Accepted')->get()->count();
            $reject_complaints=complaint::where('complaint_status','=','Rejected')->get()->count();
            $complete_complaints=complaint::where('complaint_status','=','Completed')->get()->count();
            
            return view('admin.home',compact('user_count','complaint_count','category_count','accept_complaints','reject_complaints','complete_complaints'));

}

public function searchuser(Request $request){
   $user_text=$request->search;
   $user_result=User::where('name','LIKE',"%$user_text%")->get();
   return view('admin.viewusers',compact('user_result'));
}

public function searchcomplaint(Request $request){
   $com_text=$request->search;
  
     
   
     
   
   $data=complaint::where('complaint_status','=','Completed')->where('company','LIKE',"%$com_text%")->paginate(15);
     
   
   
   
   return view('admin.completetablenew',compact('data'));
}

public function complaint_details($id){

   

   $user=complaint::all();
           
   $complaint_data=complaint::where('id','=',$id)->get();
   
   return view('admin.complaint_detnew',compact('complaint_data'));


}


public function complete_complaint_details($id){

   

   $user=complaint::all();
           
   $complaint_data=complaint::where('id','=',$id)->get();
   
   return view('admin.complete_complaint_detnew',compact('complaint_data'));


}

public function accept_complaint_details($id){

   

   $user=complaint::all();
           
   $complaint_data=complaint::where('id','=',$id)->get();
   
   return view('admin.accept_complaint_detnew',compact('complaint_data'));


}

public function reject_complaint_details($id){

   

   $user=complaint::all();
           
   $complaint_data=complaint::where('id','=',$id)->get();
   
   return view('admin.reject_complaint_detnew',compact('complaint_data'));


}


public function accepttable(){

   

   $user=complaint::all();
           
   $data=complaint::where('complaint_status','=','accepted')->orderBy('id', 'desc')->paginate(15);
   
   return view('admin.accepttablenew',compact('data'));


}

public function rejecttable(){

   

   $user=complaint::all();
           
   $data=complaint::where('complaint_status','=','rejected')->orderBy('id', 'desc')->paginate(15);
   
   
   return view('admin.rejecttablenew',compact('data'));


}
public function completetable(){

   

   $user=complaint::all();
           
   $data=complaint::where('complaint_status','=','completed')->orderBy('id', 'desc')->paginate(15);
   
   
   return view('admin.completetablenew',compact('data'));


}

public function accept_complaintdet($id,Request $request){


   $data=complaint::find($id);
   

   $offerData=[
       'id'=>$data->id,

      'name'=>$data->name,
      'phone'=>$data->phone,
      'complaint_details'=>$data->complaint_details,
      'category'=>$data->category,
      'handle'=>$data->handle,
      
     


  ];

 
  $data->complaint_status="Accepted";
  $data->handle=Auth::user()->name;
   $data->handlephone=Auth::user()->phone;
  
   $data->save();
   
   
   return redirect("https://api.ultramsg.com/instance47559/messages/chat?token=k4u5egz6ylnkj819&to={{$data->phone}}&body=Thanks+for+Visiting+Laravel CMS+.+Your+Complaint/Enquiry+has+been+successfully+Accepted+by+$data->handle.+Contact+Number+$data->handlephone+.+We+will+solved+your+complaint+within+24+hours+.+You+will+receive+an+email+for+further+details&priority=10")->with('message','Complaint Accepted Successfully..Mail and whatsapp message has been sent to user');
  
  
}


public function retrive_accept_complaintdet($id){


   $data=complaint::find($id);
   

   
  $data->complaint_status="Processing";
  $data->handle="Not Handled Yet";
  
  
   $data->save();
   
   
   return redirect('/show_usercomplaintnew')->with('message','Complaint Status Changed Successfully.');
  
  
  
}



public function reject_complaint($id){
   $data=complaint::find($id);
   return view('admin.reject_complaintdet',compact('data'));


}

public function accept_complaint($id){
   $data=complaint::find($id);
   return view('admin.accept_complaint',compact('data'));


}

public function reject_complaintdet($id){
   $data=complaint::find($id);

   $offersData=[

      'id'=>$data->id,
      'complaint_details'=>$data->complaint_details,
      'category'=>$data->category,
      


  ];
  
   $data->complaint_status="Rejected";
   $data->save();
   return redirect("https://api.ultramsg.com/instance47559/messages/chat?token=k4u5egz6ylnkj819&to={{$data->phone}}&body=Thanks+for+Visiting+Laravel CMS+Your+complaint/Enquiry+has+been+Rejected+by+our+team+You+will+receive+an+email+for+further+details&priority=10")->with('message','Complaint Rejected..Mail and whatsapp message has been sent to user');
}

public function complete_complaint($id){

   $data=complaint::find($id);
   return view('admin.completecomplaint',compact('data'));
}


public function complete_complaintdet($id){
   $data=complaint::find($id);
   $phone=$data->phone;
  
   

   $completeData=[
         'id'=>$data->id,

      'name'=>$data->name,

      'complaint_details'=>$data->complaint_details,
      'category'=>$data->category,
            'handle'=>$data->handle,
      
      


  ];

   $data->complaint_status="Completed";
   $data->save();
   
   
   return redirect("https://api.ultramsg.com/instance47559/messages/chat?token=k4u5egz6ylnkj819&to={{$data->phone}}&body=Thanks+for+Visiting+Laravel CMS+Your+complaint/Enquiry+has+been+successfully+completed+by+$data->handle.+Contact+Number+$data->handlephone+.+You+will+receive+an+email+for+further+details+.+Rate+our+service+through+below+link+https://g.page/r/CVAwNeS6mxkiEB0/review&priority=10")->with('message','Complaint Completed Successfully..Mail and whatsapp message has been sent to user');
   
}

public function feedback($id){
    $user=complaint::all();
    $complaint_data=complaint::where('id','=',$id)->get();
    
   
   return view('admin.feedback',compact('complaint_data'));
   
}

public function feedback_user($id,Request $request)
    {
        $request->validate([
            'rating1' => 'required',
            'rating2' => 'required',
            'textcomment' => 'required'
        ]);
        
        $data=complaint::find($id);
        $feedback=new feedback;
        $feedback->compid=$data->id;
        $feedback->rating1=$request->rating1;
        $feedback->rating2=$request->rating2;
        $feedback->textcomment=$request->textcomment;
        $feedback->save();
       
  
        Alert::success('Your Feedback has been Recorded.','Thanks');

        
        


        return redirect()->back();
    }

public function show_feedback($id){
    $user=feedback::all();
    $complaint_data=feedback::where('compid','=',$id)->get();
    
   
   return view('admin.show_feedback',compact('complaint_data'));
   
}
public function usercomplaint($id){

   

   $user=complaint::all();
           
   $complaint_data=complaint::where('id','=',$id)->get();
   
   return view('admin.usercomplaint',compact('complaint_data'));


}

 public function update_complaint($id){
        $complaint=complaint::find($id);
        $data=category::all();
        return view('admin.update_complaint',compact('complaint','data'));
    }
    
     public function update_complaint_confirm($id,Request $request)
    {
        $complaint=complaint::find($id);
        $complaint->name=$request->name;
        $complaint->email=$request->email;
        $complaint->phone=$request->phone;
         $complaint->company=$request->company;
        
        $complaint->lat=$request->lat;
        $complaint->lng=$request->lng;
        $complaint->Emirates=$request->emirate;
        $complaint->category=$request->category;
        $complaint->complaint_details=$request->complaint_details;
         $complaint->remark=$request->remark;
        $complaint->save();
        Alert::success('','Complaint has been Updated.');
        return redirect('/show_usercomplaintnew');
        

    }


public function accept_update_complaint($id){
        $complaint=complaint::find($id);
        $data=category::all();
        return view('admin.accept_update_complaint',compact('complaint','data'));
    }
    
     public function accept_update_complaint_confirm($id,Request $request)
    {
        $complaint=complaint::find($id);
        $complaint->name=$request->name;
        $complaint->email=$request->email;
        $complaint->phone=$request->phone;
         $complaint->company=$request->company;
        
        $complaint->lat=$request->lat;
        $complaint->lng=$request->lng;
        $complaint->Emirates=$request->emirate;
        $complaint->category=$request->category;
        $complaint->complaint_details=$request->complaint_details;
         $complaint->remark=$request->remark;
        $complaint->save();
        Alert::success('','Complaint has been Updated.');
        return redirect('/accepttable');
        

    }


public function  reject_update_complaint($id){
        $complaint=complaint::find($id);
        $data=category::all();
        return view('admin.reject_update_complaint',compact('complaint','data'));
    }
    
     public function reject_update_complaint_confirm($id,Request $request)
    {
        $complaint=complaint::find($id);
        $complaint->name=$request->name;
        $complaint->email=$request->email;
        $complaint->phone=$request->phone;
         $complaint->company=$request->company;
        
        $complaint->lat=$request->lat;
        $complaint->lng=$request->lng;
        $complaint->Emirates=$request->emirate;
        $complaint->category=$request->category;
        $complaint->complaint_details=$request->complaint_details;
         $complaint->remark=$request->remark;
        $complaint->save();
        Alert::success('','Complaint has been Updated.');
        return redirect('/rejecttable');
        

    }


public function complete_update_complaint($id){
        $complaint=complaint::find($id);
        $data=category::all();
        return view('admin.complete_update_complaint',compact('complaint','data'));
    }
    
     public function complete_update_complaint_confirm($id,Request $request)
    {
        $complaint=complaint::find($id);
        $complaint->name=$request->name;
        $complaint->email=$request->email;
        $complaint->phone=$request->phone;
         $complaint->company=$request->company;
        
        $complaint->lat=$request->lat;
        $complaint->lng=$request->lng;
        $complaint->Emirates=$request->emirate;
        $complaint->category=$request->category;
        $complaint->complaint_details=$request->complaint_details;
         $complaint->remark=$request->remark;
        $complaint->save();
        Alert::success('','Complaint has been Updated.');
        return redirect('/completetable');
        

    }
    
     public function delete_complaint($id){
        $complaint=complaint::find($id);
        $complaint->delete();
        Alert::success('','Complaint has been Deleted.');
        return redirect('/show_usercomplaintnew');
    }




}
