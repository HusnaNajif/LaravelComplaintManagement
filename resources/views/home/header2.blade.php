
<style>
    
   
.div-design{
  float: center;
}
    
    
    .fa {
 
  
  margin:auto;
  padding: 10px;
  width:40px;
   text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}


.topnav {
  overflow: hidden;
  width:100%;
  
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
          
 <a href="">
          <img src="home/assets/images/cms.jfif" style="width:195px;height:70px;margin-right:15px;" alt=""></a>
          
          
     
         
          <div class="div-design">


          <a href=""><i class="fa fa-home" style="color:black;"></i>Home<br></a>
           <!-- <a href=""><i class="fa fa-building" style="color:black;"></i>About<br></a> -->
          
            <a href="/service_page"><i class="fa fa-briefcase" aria-hidden="true" style="color:black;"></i>Service<br></a>
             
          
          
          <a href="//api.whatsapp.com/send?phone=+971-569651886&text=Hai Iam new user.."><i class="fa fa-whatsapp" style="color:black;"></i>Whatsapp<br></a>
          
          <a href="mailto:husnaubaid@gmail.com?Subject=Iam%20new%20User"><i class="fa fa-envelope" style="color:black;"></i>Talk to Us<br></a>
          
          @if (Route::has('login'))
                        @auth
                        
                        <!-- <a href="{{route('logout')}}" style="color:white;font-weight:600;"><i class="fa fa-sign-out" title="Logout from site" style="color:white;margin-right: 2px;
	font-size: 20px;font-weight:600;margin-top:18px;"></i>
              Logout</a> -->
              <a href="{{route('logout')}}"><i class="fa fa-sign-out" aria-hidden="true" style="color:black;"></i>Logout</a>
                        
                       
                        
                        
              
                        @else
                       
                            
             
                   <!-- <a href="{{route('login')}}" class="btn btn-info" style="margin-left:10px;margin-top:18px;background:#ffffff;color:blue;width:100px;">Sign up </a> -->
                   <a href="{{route('login')}}"><i class="fa fa-sign-in" aria-hidden="true" style="color:black;"></i>LogIn</a>
             
              
              
              
              
              
             
              
            
          
                        @endauth
            @endif
            
            
            
            
          
          
          </div>
          
         
          
       
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
  
             
             
             
          

    
              
             
              
              
              
            