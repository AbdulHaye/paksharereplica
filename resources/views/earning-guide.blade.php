@extends('layouts.master')
@section('content')

            <!-- Mobile Menu Area end --> 
		</header><div class="breadcrumb-area bg-overlay-dark bg-6">	
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text text-left">
                    <h2>Earning Guide</h2>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <li><a href="{{'home'}}">HOME</a></li>
                            <li>Earning Guide</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
         
<div class="projects-area ptb-60">
            
    <div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="cat-grid">
                    <ul>
                                            </ul>
                </div>
            </div>
        </div>
        <div class="row custom-row">
            <div class="grid fix">
                
                
							<div class='guide-no-found'>
								<img src='http://pakshares.com/images/coming-soon.png' class='img-responsive'>
							</div>
						            </div>
        </div>
    </div>
</div><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=145847865464466";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

@endsection