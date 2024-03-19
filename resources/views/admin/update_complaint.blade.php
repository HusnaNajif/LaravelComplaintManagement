<!DOCTYPE html>
<html lang="en">
  <head>
      <base href='/public'>
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
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

   


    <style type="text/css">
     #map {
          width:100%;
          height: 400px;
        }

  .tb_clr{
    color:black;
    font-size:20px;
  }
    
    .mainform{
    margin: 40px 200px 40px 200px;
    padding: 2rem;
    
    border: 1px solid rgb(224,224,224) ;
    border-radius: 15px;
    box-shadow: 10px 7px 0 rgb(224,224,224);
    background-color: white;
    display: flex;
    }

    .header{
        font-size: 17px;
        font-family: candara;
        display: flex-end;
    }

    input[type=text], select, textarea {
    display: flex;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 4px;
    margin-bottom: 10px;
    resize: vertical;
}

@media screen and (max-width: 680px) {
  .header, .mainform, input[type=submit] {
    margin: 0px 0px 0px 0px;
    
  }
}



.topnav {
 overflow: hidden;
 background-color: skyblue;
}

.topnav a {
 float: left;
 display: block;
 color: #f2f2f2;
 text-align: center;
 padding: 14px 16px;
 text-decoration: none;
 font-size: 17px;
}

.topnav a:hover {
 background-color: #ddd;
 color: black;
}

.topnav a.active {
 background-color: #4CAF50;
 color: white;
}

.topnav .icon {
 display: none;
}

@media screen and (max-width: 600px) {
 .topnav a:not(:first-child) {display: none;}
 .topnav a.icon {
   float: right;
   display: block;
 }
}

@media screen and (max-width: 600px) {
 .topnav.responsive {position: relative;}
 .topnav.responsive .icon {
   position: absolute;
   right: 0;
   top: 0;
 }
 .topnav.responsive a {
   float: none;
   display: block;
   text-align: left;
 }
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
          <div class="content-wrapper" style="background-color:white;color:black;">





          
            <!-- row -->
            

<form action="{{url('/update_complaint_confirm',$complaint->id)}}"  method="POST">
      @csrf


    <!--Header-->

    <div class = "header">
    <h3><b>View & Update Complaint</b></h3>
        
          <hr/>
    </div>
    
    

    <br><br>
    <!-- Name-->

    <div class="form-group">
        <label for="name"><b>Name:</b></label>
        <input type="text" style="color:white;" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$complaint->name}}">
        
      </div>

      <span style="color:red">
      @error('name')
          {{$message}}

          @enderror
          

        </span>

     <br>

      <div class="form-group">
        <label for="email"><b>Email:</b></label> 
        <input type="email" style="color:white;" class="form-control" id="email" placeholder="Enter Email" name="email"value="{{$complaint->email}}">
      </div>
      <span style="color:red">
          @error('email')
          {{$message}}

          @enderror

        </span>
   
      <br>
      
      <div class="form-group">
        <label for="company"><b>Name of Organization:</b></label> 
        
        <input type="text" style="color:white;"class="form-control" id="company"  name="company"value="{{$complaint->company}}">
       
      
   
      <br>

    <!-- Phone number-->
    
    <div class="form-group">
        <label for="phone"> <b>Phone Number: </b> </label>
        <input type="number" style="color:white;" id="phone" class="form-control" placeholder="Enter Number" name = "phone" value="{{$complaint->phone}}">
      </div>
      <span style="color:red">
          @error('phone')
          {{$message}}

          @enderror

        </span>
    
      <br>
      <div class="form-group">
        
        <input type="hidden" name="lat" id="lat" class="form-control"  value="{{$complaint->lat}}">
        
      </div>

      <div class="form-group" >
      
        <input type="hidden" name="lng" id="lng" class="form-control" value="{{$complaint->lng}}">
        
      </div>

      <div id="map"></div>
      <script type="text/javascript">
        function initMap() {
    // Latitude and longitude of the selected location
    myLatLng = { lat: {{$complaint->lat}}, lng: {{$complaint->lng}} };

    // The map, centered at selected location
     map = new google.maps.Map(document.getElementById("map"), {
        zoom: 13,
        center: myLatLng
    });
	
    // Info window content
    var contentString = 
                '<p><a href="https://www.google.com/maps/dir/?api=1&destination={{$complaint->lat}},{{$complaint->lng}}&travelmode=driving">View on GoogleMap</a>.</p>'
            

    // Add info window
    const infowindow = new google.maps.InfoWindow({
        content: contentString
    });
	
    // The marker, positioned at selected location
   
     marker = new google.maps.Marker({ map, position:myLatLng});


    // Marker click event: open info window
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
        title: "Hello Rajkot!"
    });

    // Open info window on load
    infowindow.open(map, marker);
}

window.initMap = initMap;
</script>
    
  
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
  
      
        

      
      <br>

      <div class="form-group">
        <label for="emirates"> <b>Choose Your Emirate: </b> </label>

        <select name="emirate" style="color:white;"class="form-control"  id="platform" placeholder = "Emirate" value="{{$complaint->Emirates}}">
                            <option value="Dubai">Dubai</option>
                            <option value="Abu Dhabi">Abu Dhabi</option>
                            <option value="Sharjah">Sharjah</option>
                            <option value="Ajman">Ajman</option>
                            <option value="Umm Al-Quwain">Umm Al-Quwain</option>
                            <option value="Fujairah">Fujairah</option>
                            <option value="Ras Al Khaimah">Ras Al Khaimah</option>
    </select>

        
      </div>
      <span style="color:red">
          @error('emirate')
          {{$message}}

          @enderror

        </span>
      <br>

      
      

      
    <!-- Select your area-->
    <!-- Category of complaint-->
    
    <div>
      <label >Complaint Category</label>
      <select name="category">
      <option  value="{{$complaint->category}}"selected="">{{$complaint->category}}</option>

@foreach($data as $data)
    
<option class="tb_color" value="{{$data->category_name}}">{{$data->category_name}}</option>

@endforeach
      </select>
    </div>
    <span style="color:red">
          @error('category')
          {{$message}}

          @enderror

        </span>
    

    <br>
    <!-- Complaint Details-->
<div>


   <label for="complaint_details"><b>Complaint Details:</b></label>
    
    <input type="text" style="color:white;"id="complaint_details" class="form-control" name = "complaint_details" value="{{$complaint->complaint_details}}">
</div>
<span style="color:red">
          @error('complaint_details')
          {{$message}}

          @enderror

        </span>

        <br>
        
        
        <div class="form-group">


    <label for="remark"><b>Remarks:</b></label>
    
    <input type="text" style="color:white;"id="remark" class="form-control" name = "remark" value="{{$complaint->remark}}">
   
</div>
<br>


    <!--Submit Button-->
    <div class="row">
    <button type="submit" class="btn btn-primary">Submit</button>
   
    <a href="{{url('/show_usercomplaintnew')}}" class="btn btn-info" style="margin-left:6px;">Back</a>
    
    
     @if(Auth::user()->name=="nezza")
                    
                    
                        <a href="{{url('/delete_complaint',$complaint->id)}}" onclick="return confirm ('Are sure to delete the Complaint/Enquiry?')" class="btn btn-danger" style="margin-left:6px;">Delete</a>
                    
                   
                    @endif
                    
                    
                     @if($complaint->complaint_status=="Accepted" and Auth::user()->name=="nezza")
                        
                          
                            <a href="{{url('/retrive_accept_complaintdet',$complaint->id)}}" onclick="return confirm ('Are sure to change the status fom Accept to Proceesing?')" class="btn btn-success" style="margin-left:6px;";>Status</a>
                    @endif
    
   
    </div>
    
    

    </form>
</div>




</body>

</html>
</html>