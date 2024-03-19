<footer>
    <style>{
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
</style>
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer-item">
            <h4 style="font-size:30px;color:skyblue;">Laravel CMS</h4>
            <p align:"justify" style="font-size:16px;">We are leading provider of advanced security, automation, IT, and telecommunications systems in Dubai,Uae</p>
            <ul class="row">
              <li style="margin-left:10px;margin-right:10px;"><a href=""><i class="fa fa-facebook"></i></a></li>
              <li style="margin-right:10px;"><a href=""><i class="fa fa-instagram"></i></a></li>
              <li><a href=""><i class="fa fa-linkedin"></i></a></li>
              
            </ul>
          </div>
          
          <div class="col-md-4">
            <div class="contact-item">
              <h4 style="font-size:30px;color:skyblue;">Our Location</h4>
              <p style="font-size:16px;">Shop No.xxxx,Opp xxxxx<br>Dubai <br>Uae
              <br>
              <a href="tel:+971-569651886">+971-xxxxxxxxx</a></p>
             
            </div>
          </div>
          <div class="col-md-4 footer-item last-item">
            <h4 style="font-size:30px;color:skyblue;">Contact Us</h4>
            <div class="contact-form">

            @if(Session::has('success'))
                            <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>
                                {{Session::get('success')}}
                            </div>
                        @endif
                     
              <form id="contact footer-contact" action="{{url('/postcontact')}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-lg-12 col-lg-12 col-lg-12">
                    <fieldset">
                      <input style="font-size:16px;padding:10px;height:35px;"name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input style="font-size:16px;padding:10px;height:35px;" name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>


                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input style="font-size:16px;padding:10px;height:35px;" name="phone" type="number" class="form-control" id="phone"  placeholder="Phone Number" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea style="font-size:16px;padding:10px;height:35px;" name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button  style="font-size:16px;margin:auto;color:black;" type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>