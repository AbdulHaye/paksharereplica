@extends('layouts.master')
@section('content')

</header><div class="breadcrumb-area bg-overlay-dark bg-6" data-load='true' data-to=".account-area" data-top="100">
<!--Start Contact Form Area-->
        <div class="contact-form-area fix pb-120">
            <div class="container">
                <div class="contact-form-left">
                    <h4 class="details-title">Leave a Message</h4>
                    <div class="c_msg">
                    	                     </div>
                   
                    <form  action="#" method="post">
                    	<label class="req">Your Name</label>
                        <input type="text" name="name" placeholder="Your name" value="">
                        <label class="req">Your Email</label>
                        <input type="text" name="email" placeholder="Email here" value="">
                        <label class="req">Message</label>
                        <p style="font-size:13px;"><strong>Note:</strong> Message must be greater than 50 characters.</p>
                        <textarea name="message" cols="30" rows="10" placeholder="Write here"
                        ></textarea>
                        <div class="form-group">
                           	<div class="g-recaptcha" data-sitekey="6LcWCz4UAAAAAHG1GSjfDP1qpNWFJetLTWU5Fmcr"></div>
                           </div>
                        <div class="col-10 fix">
                            <button type="submit" name="submit" class="default-button submit-btn _send_cn">SUBMIT</button>
                        </div>
                        <p class="form-messege"></p>
                    </form>
                </div>
                
                                <div class="contact-form-right">
                    <div class="single-sidebar-widget fix bg-8">
                        <div class="sidebar-contact-info">
                            <h4>Need Any Help?</h4>
                            <p>Our team of finance experts, business mentors & smart technologist in the field of IT is 24/7 available via email. Please let us know about your query and we will contact you as soon as possible with the solution of your query. Thanks :)</p>
                        </div>
                    </div>
                </div>
                            </div>
        </div>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <!--End of Contact Form Area-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=145847865464466";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@endsection