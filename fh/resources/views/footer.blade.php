<div class="footer">
<!-- <img src="images/bg-imgs/bg-4.jpg"> -->
<div class="footer-contacts">
  <div class="title m-b-md">
      Need a Business Advice?
  </div>
  <div class="footer-contact-stmnt"><p>Whether you want to discuss an upcoming project or explore future possibilities, leave us a message and we’ll get straight back to you.</p></div>
</div>

                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif

  <form action="{{url('sendemail/send')}}" class="footer-container" method="post">
    
    <p>For Any Instant Query, Contact:<strong style="font-weight: 900; margin-left: 5%; border-radius: 2%; border: solid black; background-color: black; color: white;"> (+254)-715-785-163</strong> .</p>

    {{ csrf_field() }} 

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Full Names" name="name" required>

    <label for="phone"><b>Phone Number</b></label>
    <input type="text" pattern="[0-9]{10}" maxlength="10" placeholder="Enter 10-digits Phone Number e.g 07XXXXXXXX" name="phone" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="subject"><b>Subject</b></label>
    <input type="text" placeholder="What ould you like to know?" name="subject" required>

    <label for="message"><b>Message</b></label>
    <!-- <input type="textarea" placeholder="Write something for us" name="message" cols="60" rows="6" required> -->
    <textarea name="message" id="message" cols="60" rows="6"></textarea>


    <button type="submit" name="send" class="btn">SUBMIT</button>
  </form>
  <div class="footer-copyright">
    <div class="footer-media">
    <i class="fa fa-facebook"></i>
    <i class="fa fa-linkedin"></i>
    <i class="fa fa-whatsapp"></i>(+254)715-785-163
    <i class="fa fa-phone"></i>(+254)715-785-163
  </div>
  <div class="copyright">© 2023 Fair Havens Digital. All Rights Reserved. Privacy Policy</div>
  </div>
  
</div>