@extends('layouts.master')
@section('content')

    <!-- Mobile Menu Area end -->
    <div class="breadcrumb-area bg-overlay-dark bg-6" data-load="true" data-to=".userpanel-area" data-top="100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text text-left">
                        <h2>{{Auth::user()->name}}</h2>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb">
                                <li><a href="{{'/'}}">HOME</a></li>
                                <li>USERPANEL</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-section pt-20 pb-115 sidebar userpanel-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <aside class="single-sidebar-widget fix">
                        <nav class="sidebar-nav">
                            <div class="mofile-u-nav"><i class="fa fa-bars"></i> My Menu</div>
                            <ul class="metismenu" id="user-panel-menu">
                                <li><a href="{{'dashboard'}}"><i class="fa fa-dashboard"></i> &nbsp;
                                        Dashboard</a></li>
                                <li><a href="{{'buy-shares'}}"><i class="fa fa-money"></i>
                                        &nbsp; Buy Shares</a></li>

                                <li class="active">
                                    <a href="http://pakshares.com/userpanel?p=profile" class="has-arrow"><i
                                                class="fa fa-user-circle-o"></i> &nbsp; Profile</a>
                                    <ul aria-expanded="true" class="collapse in" style="">
                                        <li><a href="http://pakshares.com/userpanel?p=profile">Update Personal Data</a>
                                        </li>
                                        <li><a href="http://pakshares.com/userpanel?p=password">Update Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="http://pakshares.com/userpanel?p=logout"><i class="fa fa-sign-out"></i>
                                        &nbsp; Logout</a>
                                    <form action="{{'logout'}}" method="post">
                                        @csrf
                                        <button type="submit" class="fa fa-sign-out" name="logout" >$nbsp; Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </nav>
                    </aside>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 upanel-right">
                    <div class="">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="sub_title">
                                <h3>Investment for Bright Future</h3>
                            </div>
                            <span class="buy" s="">
        	<h3 style="font-family:arial;line-height:26px;font-size:20px;">
						With rising costs, managing your household expenses can become challenging.
						So Secure your own and your family's future with secure investment plan..</h3>
						 <div class="col-md-12">
						 	<img src="{{URL::asset('public/images/invest-plans.png')}}"
                                 class="img-responsive">
							<p>&nbsp;</p>
							<p class="text-center">
								<a href="{{'buy-shares'}}" class="btn btn-success btn-lg"
                                   style="font-size:24px;padding:15px; height:auto;line-height:auto;">Buy Shares</a>
							</p>
						 </div>


        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fb-root" class=" fb_reset">
        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div>
                <iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true"
                        scrolling="no" id="fb_xdm_frame_http" aria-hidden="true"
                        title="Facebook Cross Domain Communication Frame" tabindex="-1"
                        src="./PakShares _ Invest in Pak Shares to Earn Money Online_files/Nh1oH0K63yz.html"
                        style="border: none;"></iframe>
                <iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true"
                        scrolling="no" id="fb_xdm_frame_https" aria-hidden="true"
                        title="Facebook Cross Domain Communication Frame" tabindex="-1"
                        src="./PakShares _ Invest in Pak Shares to Earn Money Online_files/Nh1oH0K63yz(1).html"
                        style="border: none;"></iframe>
            </div>
        </div>
        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div></div>
        </div>
    </div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=145847865464466";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

@endsection