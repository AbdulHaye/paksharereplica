@extends('layouts.master')
@section('content')
            <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="mobile-menu">
                      <nav id="dropdown" style="display: block;">
                          <ul>
                                <li><a href="http://pakshares.com/">HOME</a></li>
                                <li><a href="http://pakshares.com/how-it-works">HOW IT WORKS</a></li>
                                <li><a href="http://pakshares.com/buy-shares">BUY SHARES</a></li>
                                <li><a href="http://pakshares.com/earning-calculator">EARNING CALCULATOR</a></li>
                                <li><a href="http://pakshares.com/earning-guide">EARNING GUIDE</a></li>
                                <li><a href="http://pakshares.com/contact">CONTACT US</a></li>
                            </ul>
                      </nav>
                  </div>					
              </div>
          </div>
      </div>
  </div>
            <!-- Mobile Menu Area end --> 
		</header><div class="breadcrumb-area bg-overlay-dark bg-6">	
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text text-left">
                    <h2>HOW IT WORKS</h2>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <li><a href="http://pakshares.com/">HOME</a></li>
                            <li>HOW IT WORKS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->
        <!-- Services Area Start -->
        <div class="service-main-area pt-70 pb-105 bg-rotate">
            <div class="service-banner">
            	<div class="container">
                	<div class="col-md-12">
                    	<h1 class="text-center">How PakShares work?</h1>
                    </div>
                </div>
                <div class="container">
                	<!--
                    <div class="service-banner-left">
                        <img src="" alt="How it works">
                    </div>
                    -->
                    <div class="service-banner-right">
                    	<!--
                        <div class="information-text">
                            <h2>&nbsp;</h2>
<p>.</p>                        </div>
                        -->
                        <div class="col-md-12 pt-0 text-center">
                        	<img src="http://pakshares.com/images/how-to-work.png?v1" style="max-width:100%;"/>
                        </div>
                    </div>
                </div>
            </div>
         </div>
<!-- Breadcrumb Area End -->
        <!-- Services Area Start -->  
 <!--
 <div class="container">
 	<div class="row">
    	   
   </div>
</div> 
-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=145847865464466";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
            @endsection