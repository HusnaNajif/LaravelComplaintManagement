<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Events\UserRegistration;
use Socialite;
use Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\category;
use App\Models\complaint;
use App\Models\contactemail;
use Exception;
use Validator;
use Stevebauman\Location\Facades\Location;
use RealRashid\SweetAlert\Facades\Alert;
use Twilio\Rest\Client;



class HomeController extends Controller
{
    public function redirect(){
        $user=Auth::user()->usertype;
        if($user==1){

            $complaint=complaint::all();

            $user=User::all();
            $user_count=user::where('usertype','=','0')->get()->count();
             $exceptThisUserIds = "Completed";
     $reject="Rejected";

             $complaint_count=complaint::whereNotIn('complaint_status', [$exceptThisUserIds,$reject])->get()->count();
            $category_count=category::all()->count();
            $accept_complaints=complaint::where('complaint_status','=','Accepted')->get()->count();
            $reject_complaints=complaint::where('complaint_status','=','Rejected')->get()->count();
            $complete_complaints=complaint::where('complaint_status','=','Completed')->get()->count();
            
            return view('admin.home',compact('user_count','complaint_count','category_count','accept_complaints','reject_complaints','complete_complaints'));
        }
        else{
            return view('home.userpage');
        }
    }

    public function index(){

        return view('home.userpage');
    }
    
    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function form_complaint(Request $request){
        
            
        $data=category::all();
        
        
        return view('home.make_complaint',compact('data'));
        
       
    }

    

   

    public function add_complaint(Request $request)
    {


        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'company'=>'required',
            'phone'=>'required',
            
            'category'=>'required',
            
            'lat'=>'required',
            'lng'=>'required',
            'emirate'=>'required',



        ]);
        

        
        $complaint=new complaint;
        $complaint->name=$request->name;
        $complaint->email=$request->email;
        $complaint->company=$request->company;
        $complaint->phone=$request->phone;
        
        $complaint->category=$request->category;
        $complaint->complaint_details=$request->complaint_details;
        $complaint->lat=$request->lat;
        $complaint->lng=$request->lng;
        $complaint->Emirates=$request->emirate;
        $complaint->complaint_status="Processing";
        $complaint->handle="Not Handled Yet";
        $complaint->handlephone="Null";
       
         $complaint->remark="Not Added Yet";
        $complaint->save();
        
        
        
       
        Alert::success('Your Complaint/Enquiry has been Registered.','Our Team will contact you shortly.We will charge Aed 100 once we reach at your Location.Thank You');
        
         
       
       


        return redirect()->back();
    }

    public function mycomplaint(){
        if(Auth::id()){

            $user=Auth::user()->id;

           
            $user_data=complaint::where('user_id','=',$user)->get();

           
                return view('home.mycomplaint2',compact('user_data'))->with('message','message sent successfullly');    

           
        
}
        else
        {
            return redirect('login');
        }
    }


    public function update_complaint_confirm($id,Request $request)
    {
        $complaint=complaint::find($id);
        $complaint->name=$complaint->name;
        $complaint->email=$complaint->email;
        $complaint->phone=$request->phone;
        
        $complaint->lat=$request->lat;
        $complaint->lng=$request->lng;
        $complaint->Emirates=$request->emirate;
        $complaint->category=$request->category;
        $complaint->complaint_details=$request->complaint_details;
        $complaint->save();
        Alert::success('Your Complaint has been Updated','',);
        return redirect('/mycomplaint');
        

    }

    public function update_complaint($id){
        $complaint=complaint::find($id);
        $data=category::all();
        return view('home.updatecomplaint',compact('complaint','data'));
    }

    public function delete_complaint($id){
        $complaint=complaint::find($id);
        $complaint->delete();
        return redirect()->back();
    }

    public function servicepage(){

        return view('home.service2full');
    }

    public function aboutus(){

        return view('home.aboutus');
    }

    public function postcontact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);
  
        contactemail::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
    
    
    public function login_google(){
        return socialite::driver('google')->redirect();
    }
    public function redirect_google(){
        try{
            $user=Socialite::driver('google')->user();
            $existinguser=User::where('google_id',$user->id)->first();
            
            if($existinguser)
            {
            Auth::login($existinguser);
            return redirect()->intended('/redirect');
        }
            
            else{
                $newuser=User::create([
                'name'=>$user->name,
                'email'=>$user->email,
                'google_id'=>$user->id,
                'password'=>encrypt('123456dummy')
                ]);
                
                Auth::login($newuser);
        
        return redirect()->intended('/redirect');
                
                
            }
        }
            
        catch(Exception $e){
          
        }
        
        
        
       
            
    }
    
    
    public function login_facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    
     public function redirect_facebook()
    {
        try {
        
            $user = Socialite::driver('facebook')->user();
         
            $finduser = User::where('facebook_id', $user->id)->first();
         
            if($finduser){
         
                Auth::login($finduser);
       
                return redirect()->intended('redirect');
         
            }else{
                $newUser = User::updateOrCreate(['email' => $user->email],[
                        'name' => $user->name,
                        'facebook_id'=> $user->id,
                        'password' => encrypt('123456dummy')
                    ]);
        
                Auth::login($newUser);
        
                return redirect()->intended('redirect');
            }
       
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    
    
    
    public function reg_complaintdet($id,Request $request){


   $data=complaint::find($id);

   $offerrData=[
       'id'=>$data->id,

      'name'=>$data->name,
      'complaint_details'=>$data->complaint_details,
      
      
     


  ];
  Notification::send($data,new regNotification($offerrData));
  
   $data->save();
   
   
   return redirect()->back()->with('message','Complaint Successfully Registere..Mail has been sent to user');
  
  
}
}



