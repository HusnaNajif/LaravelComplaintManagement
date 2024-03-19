<!DOCTYPE html>
<html lang="en">
<head>
    <base href='/public'>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <title>Complaint/Enquiry Form</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
     <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
   


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
     <link rel="stylesheet" href="home/assets/css/fontawesome.css">
    <link rel="stylesheet" href="home/assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="home/assets/css/owl.css">
    <style type="text/css">
        
          
        }
    </style>
</head>

<style>
 .fa-facebook {
  background: #3B5998;
  color: white;
}



.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {

  background: #3B5998;
  color: white;
}

  .tb_clr{
    color:black;
    font-size:20px;
  }
    
    .mainform{
    
    padding: 2rem;
    
    border-radius: 15px;
    
    background-color: white;
    display:flex;
    }

    .header{
        font-size: 17px;
        font-family: candara;
        background:skyblue;
        height:100px;
        width:100%;
    }

    input[type=text], select, textarea  {
    display: flex;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    
    margin-bottom: 16px;
    resize: vertical;
}

@media screen and (max-width: 680px) {
  .header, .mainform, input[type=submit] {
    margin: 0px 0px 0px 0px;
     
    
  }
}


</style>

<body>
    
    
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    
    


    <style>
.fa {
 
  
  margin:auto;
  padding: 10px;
  width:40px;
  color:white;
   text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}



.fa-google {
  background: #dd4b39;
  color: white;
}



.fa-instagram {
  background: #125688;
  color: white;
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




            
          
          
               <div class="topnav" id="myTopnav">
 <a href="{{url('/')}}">
          <img src="home/assets/images/cms.jfif" style="width:175px;height:70px" alt=""></a>
          <a href="tel:+971-000000000"><i class="fa fa-phone" style="color:black;"></i>Call me<br></a>
          
          <a href="//api.whatsapp.com/send?phone=+971-569651886&text=Hai Iam new user.."><i class="fa fa-whatsapp" style="color:black;"></i>Whatsapp<br></a>
          
          <a href="mailto:husnaubaid.com?Subject=Iam%20new%20User"><i class="fa fa-envelope" style="color:black;"></i>Talk to Us<br></a>
          
          
          <a href="/service_page"><i class="fa fa-briefcase" style="color:black;"></i>our services<br></a>
          
         
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
              
              
              
               
             

    
      <br>
      <br>
    

    
    <div class= "mainform">
      
    @include('sweetalert::alert')

    
    <form action="{{url('/add_complaint')}}" method="POST">
      @csrf


    <!--Header-->

   
          
    <h3 style="text-align:center;margin:auto;margin-bottom:20px;size:30px;font-style:bold;"><b>Complaint/Enquiry Form</b></h3>
        <p style="justify-content:center;text-align: justify;
  text-justify: inter-word;">Please send us details about the complaint/Enquiry you would like to report. Our Team will analyze your complaint/Enquiry and take the appropriate measures 
            in order that the reported situation will not occur at any other
            time in the future.</p>
          <hr/>
    
    
    
    

    <br>
    <!-- Name-->

    <div class="form-group">
        <label for="name"><b>Name:</b></label>
        
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{old('name')}}" >
        
      </div>

      <span style="color:red">
      @error('name')
          {{$message}}

          @enderror
          

        </span>

     <br>

      <div class="form-group">
        <label for="email"><b>Email:</b></label> 
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{old('email')}}">
      </div>
     
      <span style="color:red">
          @error('email')
          {{$message}}

          @enderror

        </span>
   
      <br>

    <!-- Phone number-->
    
    <div class="form-group">
        <label for="company"> <b>Name of Organization: </b> </label>
        <input type="text" id="company" class="form-control" placeholder="Enter Company Name" name = "company" value="{{old('company')}}">
      </div>
      <span style="color:red">
          @error('company')
          {{$message}}

          @enderror

        </span>
    
      <br>
      
      
       <div class="form-group">
        <label for="phone"><b>Phone:</b></label> 
        <input type="number" class="form-control" id="phone" placeholder="971*********" name="phone" value="{{old('phone')}}">
      </div>
     
      <span style="color:red">
          @error('phone')
          {{$message}}

          @enderror

        </span>
   
      <br>
      
      
      
        <label></label>
        <input type="hidden" name="lat" id="lat" class="form-control">
        
      

      
        <label></label>
        <input type="hidden" name="lng" id="lng" class="form-control" >
        
      
      <label ><b>Customer Location:</b></label>
      <div id="map" style="width:100%;height:550px" class="my-3">
          
      </div>
      
      
      <script>
      const createMap = ({ lat, lng }) => {
  return new google.maps.Map(document.getElementById('map'), {
    center: { lat, lng },
    zoom: 15
  });
};

const createMarker = ({ map, position }) => {
  return new google.maps.Marker({ map, position });
};

const getCurrentPosition = ({ onSuccess, onError = () => { } }) => {
  if ('geolocation' in navigator === false) {
    return onError(new Error('Geolocation is not supported by your browser.'));
  }

  return navigator.geolocation.getCurrentPosition(onSuccess, onError);
};

const getPositionErrorMessage = code => {
  switch (code) {
    case 1:
      return 'Permission denied.Kindly Turn on Location access and refresh the page inorder to track your current Location';
    case 2:
      return 'Position unavailable.';
    case 3:
      return 'Timeout reached.';
    default:
      return null;
  }
}

function init() {
  const initialPosition = { lat:25.276987 ,lng:55.296249 };
  const map = createMap(initialPosition);
  const marker = createMarker({ map, position: initialPosition });

  getCurrentPosition({
    onSuccess: ({ coords: { latitude: lat, longitude: lng } }) => {
      marker.setPosition({ lat, lng });
      map.panTo({ lat, lng });
    },
    onError: err =>
      alert(`Error: ${getPositionErrorMessage(err.code) || err.message}`)
  });
  
  
  
  google.maps.event.addListener(marker,'position_changed',
            function(){
              let lat=marker.position.lat()
              let lng=marker.position.lng()
              $('#lat').val(lat)
              $('#lng').val(lng)

            })

            google.maps.event.addListener(map,'click',
            function(event){
              pos=event.latLng 
              marker.setPosition(pos)
            })
}
      </script>
        <script async defer  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZuO1Hn9z8gGBGi9rbfN6Fdue-dKoWwro&callback=init">
  
  type="text/javascript"</script>
 

      
        
       
        
  
        

      

      <div class="form-group">
        <label for="emirates"> <b>Choose Your Emirate: </b> </label>

        <select name="emirate" class="form-control"  id="platform" placeholder = "Emirate" value="{{old('emirate')}}">
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
      <label ><b>Complaint/Enquiry Category</b></label>
      <select name="category">
        <option class="tb_clr"value="" selected="" >Choose Category</option>
        @foreach($data as $data)
        <option>{{$data->category_name}}</option>
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


    <label for="subject"><b>Complaint/Enquiry Details:</b></label>
    <textarea id="subject" name="complaint_details" placeholder="Enter your complaint/Enquiry details......." style="height:200px">{{old('complaint_details')}}</textarea>
</div>


        <br>

        


    <!--Submit Button-->
    <button type="submit"  class="btn btn-danger" style="float: right;">Submit</button>
    

    </form>
    

    
</div>









  

    






  

  


  

  



</body>
<footer>
    
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer-item">
            <h4 style="font-size:30px;color:skyblue;">About Us</h4>
            <p align:"justify" style="font-size:16px;">We are leading provider of advanced security, automation, IT, and telecommunications systems in Dubai,Uae</p>
            
          </div>
          
          <div class="col-md-4">
            <div class="contact-item">
              <h4 style="font-size:30px;color:skyblue;">Location</h4>
              <p style="font-size:16px;">Shop No.xxxx,Opp xxxxxxx<br>Dubai<br>Uae
              <br>
              <a href="tel:+971-45669092">+971-xxxxxxxxx</a></p>
             
            </div>
          </div>
          
          <div class="col-md-4 footer-item last-item">
              <a href="{{url('/')}}"><img src="home/assets/images/cms.jfif"  style="width:200px;height:80px;text-align:center;"/></a>
              <ul class="row">
              <li style="margin-left:30px;margin-right:10px;"><a href=""><i class="fa fa-facebook"></i></a></li>
              <li style="margin-right:10px;"><a href=""><i class="fa fa-instagram"></i></a></li>
              <li><a href=""><i class="fa fa-linkedin"></i></a></li>
              
            </ul>
            

          </div>
        </div>
      </div>
    </footer>

</html>









