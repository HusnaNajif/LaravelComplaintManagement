<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>LaravelHome</title>

    <!-- Bootstrap core CSS -->
    <link href="public/home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="home/assets/css/fontawesome.css">
    <link rel="stylesheet" href="home/assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="home/assets/css/owl.css">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('914dff04499bec6d0751', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('popup-channel');
    channel.bind('user-register', function(data) {
        
        
        toastr.success(JSON.stringify(data.name) + 'has registered a Complaint/Enquiry.', 'New Message', {timeOut: 30000});
          
       
      
    });
    
  </script>
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    @include('home.header2')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    @include('home.body2')


    <!-- @include('home/partners') -->
    <br>
    <br>

    


    <!-- Footer Starts Here -->
    @include('home.footer2')

    @include('home.script2')
   

  </body>
  
</html>