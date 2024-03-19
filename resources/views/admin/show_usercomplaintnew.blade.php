<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
   

    <style>
    
    
    .centerform{
            margin:auto;
            text-align:right;
           
            
            padding-top:15px;
            padding-bottom:10px;
          }


.swal2-title {
  color: red;
}
            table,td,th{
              margin:auto;
              text-align:center;
                color:white;
              
              
            }
            
          
       .th_des{
           color:#FFFFFF;
           font-weight:bold;
           background-color:#7B3F00;
          margin:auto;
              text-align:center;
           
           font-size:35px;
       }
       
       .input-box {
  position: relative;
  height: 46px;
 
  width: 60%;
  background: #fff;
  margin: 0;
  border-radius: 8px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.input-box i,
.input-box .button {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.input-box i {
  left: 20px;
  font-size: 30px;
  color: #707070;
}
.input-box input {
  height: 100%;
  width: 80%;
  outline: none;
  
  margin-left:-20px;
  font-size: 18px;
  font-weight: 400;
  border: none;
  padding: 0 155px 0 65px;
  background-color: transparent;
}
.input-box .button {
  
  font-size: 16px;
  font-weight: 400;
  color: #fff;
  border: none;
  
  border-radius: 6px;
  background-color: #4070f4;
  cursor: pointer;
}
.input-box .button:active {
  transform: translateY(-50%) scale(0.98);
}
/* Responsive */
@media screen and (max-width: 500px) {
  .input-box {
    height: 66px;
    margin: 0 8px;
  }
  .input-box i {
    left: 12px;
    font-size: 25px;
  }
  .input-box input {
   
  }
  .input-box .button {
    right: 12px;
    font-size: 14px;
    padding: 8px 18px;
  } 
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebarnew')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->

        @include('admin.navbarnew')
        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          
          
            
          <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                      @if(session()->has('message'))

          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >X</button>
            {{session()->get('message')}}

          </div>
          @endif
          
          
          
            @include('sweetalert::alert')
          
    
    
    
                    <h4 class="card-title" style="margin:auto;text-align:center;font-size:25px;font-weight:bold;margin-bottom:10px;">New/Accepted Complaints</h4>
                    
                    
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr class="th_des">
                            
                            <td class="th_des"> ID </td>
                            <td class="th_des"> Name </td>
                            
                            <td class="th_des"> Accept </td>
                            <td class="th_des"> Decline </td>
                            <td class="th_des"> Complete </td>
                            <td class="th_des"> Handled By </td>
                            <td class="th_des"> Registered at </td>
                            
                          
                            
                            
                            
                             
                            
                          </tr>
                        </thead>
                        <tbody style="background-color:#858275;">
                            
                            @forelse($data as $key => $datas)
                          <tr>
                            
                            <td style="color:white;">{{$data->firstItem() + $key }}</td>
                   
                    <td><a href="{{url('/update_complaint',$datas->id)}}" style="color:white;">{{$datas->company}}</a></td>
                   
                    
                    


                    @if($datas->complaint_status=="Rejected")
                        <td>
                            <button type="button" class="btn btn-danger" style="background:indigo;">Unable to Accept</button>
                    </td>
                       

                    
                    @elseif($datas->complaint_status=="Completed")
                        <td>
                            <button type="button" class="btn btn-danger" style="background:indigo;">Already Completed</button>
                    </td>
                    
                   

                    @elseif($datas->complaint_status=="Accepted")
                        <td>
                            <button type="button" class="btn btn-danger" style="background:indigo;">Already Accepted</button>
                    </td>
                    
                    
                    
                    @else
                        <td><a href="{{url('/accept_complaintdet',$datas->id)}}" onclick="return confirm ('Are sure to accept the request?')" class="btn btn-success">Accept</a></td>
                        

                    
                    @endif


                   
                    
                    
                    @if($datas->complaint_status=="Accepted")
                        <td>
                            <button type="button" class="btn btn-danger" style="background:red;">Unable to Decline</button>
                    </td>
                    
                     
                    
                       

                    
                    @elseif($datas->complaint_status=="Completed")
                        <td>
                            <button type="button" class="btn btn-danger" style="background:red;">Unable to Decline</button>
                    </td>
                    @elseif($datas->complaint_status=="Rejected")
                        <td>
                            <button type="button" class="btn btn-danger" style="background:indigo;">Already Declined</button>
                    </td>
                    
                    @else
                        <td ><a href="{{url('/reject_complaintdet',$datas->id)}}" onclick="return confirm ('Are sure to reject the request?')"class="btn btn-danger">Decline</a></td>

                    
                    @endif



                    @if($datas->complaint_status=="Rejected")
                        <td>
                            <button type="button" class="btn btn-danger" style="background:red;">Unable to Complete</button>
                    </td>
                       

                    

                    @elseif($datas->complaint_status=="Completed")
                        <td>
                            <button type="button" class="btn btn-danger" style="background:orange;">Already Completed</button>
                    </td>

                    

                    
                    
                    @else
                        <td><a href="{{url('/complete_complaintdet',$datas->id)}}" onclick="return confirm ('Are sure to update the status to completed?')"class="btn btn-info">Complete</a></td>
                        
                        

                    
                    @endif
                    
                    
                    
                        <td>
                            <button class="btn btn-info">{{$datas->handle}}</button>
                        </td>
                        
                        
                        
                        
                           
                            <td>
                            {{ $datas->created_at->diffForHumans() }}
                        </td>
                        
                   

                    
                    
                    
                     @empty
                     <tr>
                         
                         <td colspan="16">
                             
                             No more Registered Complaints Yet !!
                         </td>
                     </tr>
                
                    

                   
                </tr>
           
                @endforelse
                
                
                
               
                 
                
                
                          
                        </tbody>
                      </table>
                       {!! $data->links() !!}
                     
                    </div>
                     
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
    
   
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scriptnew')
    <!-- End custom js for this page -->
  </body>
</html>