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
            text-align:center;
            
            padding-top:15px;
            padding-bottom:10px;
          }
            td,th,table{
              margin:auto;
            text-align:center;
            font-size:20px;
            font-weight:bold;
            color:white;
            border:1px solid white;


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

          <h2 style="margin:auto;text-align:center;color:white;">Add Category</h2>


          <div class="centerform">
          <form action="{{url('/add_category')}}" method="POST">
            @csrf
            <input type="text" name='category' placeholder='Enter Category'>
            <input type="submit" class="btn btn-primary" value="Add Category">
          </form>
          </div>
          <br>




          
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="margin:auto;text-align:center;font-size:20px;font-weight:bold;margin-bottom:10px;">Categories</h4>
                    <div class="table-responsive">
                      <br>
                      <table class="table">
                        <thead>
                          <tr style="color:white">
                            
                            <th class="th_des"> Category Name </th>
                            <th class="th_des"> Action </th>
                            
                            
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                          <tr>
                            
                            <td>
                              {{$data->category_name}}
                            </td>
                            
                            <td><a onClick='return confirm("Are you sure to delete?")' href="{{url('/delete_category',$data->id)}}" class="btn btn-danger">Delete</a>
                               </td>
                            
                          
                            
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
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