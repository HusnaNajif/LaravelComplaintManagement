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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    
    <style>
    .card1{
        background:cyan;
    }
    .card2{
        background:#FFA07A;
    }
    .card3{
        background:#CCCCFF;
    }
    .card4{
        background:#9FE2BF;
    }
    .card5{
        background:#DE3163;
    }
    .card6{
        background:#40E0D0;
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
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" style="background-color:#B49137;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0" style="margin:auto;text-align:center;">
                          {{$complaint_count}}
                        </h3>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <a href="{{url('show_usercomplaintnew')}}" style="color:white;"><i class="mdi mdi-comment"style="color:black;margin-right:8px;font-size:25px;"></i>Complaints</a>
                    
                  </div>
                </div>
              </div>
             
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" style="background-color:#4FB06D;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0" style="margin:auto;text-align:center;">
                          {{$accept_complaints}}
                        </h3>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-danger">
                          <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <a href="{{url('/accepttable')}}" style="color:white;"><i class="mdi mdi-check-circle" style="color:black;margin-right:8px;font-size:25px;margin-top:10px;"></i>Accepted Complaints</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" style="background-color:#BF2C34;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0" style="margin:auto;text-align:center;">
                          {{$reject_complaints}}
                        
                        </h3> 
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <a href="{{url('/rejecttable')}}" style="color:white;"><i class="mdi mdi-cancel" style="color:black;margin-right:8px;font-size:25px;"></i>Rejected Complaints</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" style="background-color:#FF69B4;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0" style="margin:auto;text-align:center;">
                          {{$complete_complaints}}
                          
                        </h3> 
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                   <a href="{{url('/completetable')}}" style="color:white;"><i class="mdi mdi-check-circle" style="color:black;margin-right:2px;font-size:25px;"></i>Completed Complaints</a>
                  </div>
                </div>
              </div>
               <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" style="background-color:skyblue;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0" style="margin:auto;text-align:center;">
                          {{$category_count}}
                        </h3>
                         
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    
                    <a href="{{url('/view_category')}}" style="color:white;"><i class="mdi mdi-view-list" style="color:black;margin-right:8px;font-size:25px;"></i>Complaint Category</a>
                    
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
    </body>
</html>

