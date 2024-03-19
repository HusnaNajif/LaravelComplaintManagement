
                    
        
        
        <style>
    
    
    .fa {
     
      
      margin:auto;
     
      
       text-align: center;
      text-decoration: none;
      
    }
    
    .fa:hover {
        opacity: 0.7;
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
     <a href="https://truelink.me">
              <img src="home/assets/images/connected you.png" style="width:175px;height:60px" alt=""></a>
              
              
              <a href="{{url('show_dashboard')}}" style="color:white;font-weight:600;margin-top:14px;">
                                    <i class="fas fa-tachometer-alt"></i>
                                    Dashboard
                                    
                                </a>
              
             <a href="{{url('show_usercomplaint2')}}" style="color:white;font-weight:600;margin-top:14px;">
                                    <i class='far fa-list-alt'></i>
                                    View User Complaints
                                    
                                </a>
              
              <a href="{{url('/view_category')}}" style="color:white;font-weight:600;margin-top:14px;">
                                    <i class="fas fa-list-alt"></i>
                                    Add Category
                                </a>
              @if (Route::has('login'))
                            @auth
                            
                            <a href="{{route('logout')}}" style="color:white;font-weight:600;"><i class="fa fa-sign-out" title="Logout from Truelink.me" style="color:white;
        font-size: 20px;font-weight:600;margin-top:14px;"></i>
                  Logout</a>
                            
                           
                            
                            
                            
                            @else
                           
                                
                  <a href="{{route('login')}}" style="color:white;font-weight:600;"><i class="fa fa-user" title="Login with Truelink.me" style="color:white;margin-right: 2px;
        font-size: 20px;font-weight:600;"></i>
                  Account Login</a>
                  
                  
                  
                 
                  
                
              
                            @endauth
                @endif
                
                
                
                
              
              
              
             
              
             
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
      