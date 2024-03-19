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
                    <h4 class="card-title" style="margin:auto;text-align:center;font-size:20px;font-weight:bold;margin-bottom:10px;"> REJECTED COMPLAINTS</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr class="th_des">
                            
                            <td class="th_des"> ID </td>
                            <td class="th_des"> Company Name </td>
                          
                             
                            
                            
                          </tr>
                        </thead>
                        <tbody style="background-color:#858275;">
                            
                            @forelse($data as $key => $datas)
                          <tr>
                            
                            <td style="color:white;">{{$data->firstItem() + $key}}</td>
                    
                   
                     <td><a href="{{url('/reject_update_complaint',$datas->id)}}" style="color:white;">{{$datas->company}}</a></td>
                    
                   


                    
                    
                     @empty
                <tr>
                         
                         <td colspan="16">
                             
                             No more Completed Complaints Yet !!
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