<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{URL::asset('theme/bower_components/bootstrap/dist/css/bootstrap.min.css')}}"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::asset('theme/bower_components/font-awesome/css/font-awesome.min.css')}}"/>
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{URL::asset('theme/bower_components/Ionicons/css/ionicons.min.css')}}"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset('theme/dist/css/AdminLTE.min.css')}}"/>
    <!-- iCheck -->
    <link rel="stylesheet" href="{{URL::asset('theme/plugins/iCheck/square/blue.css')}}"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('theme/plugins/custom/html5shiv.min.js')}}"></script>
    <script src="{{asset('theme/plugins/custom/respond.min.js')}}"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>LMS</b> by CrecenTech</a>

    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"><b>Sign-in</b><br>You have more than one companies associated with your sign in information. Select a company to Sign in.</p>




            @foreach($companies as $company)
                <a href="/lms-web-serv/public/">
                <div class="user-panel customstyle " style="margin-bottom: 1px">

                    <div class="pull-left image">
                        <img src="theme/dist/img/user2-160x160.jpg" class="img-circle img-responsive" alt="Company Logo">
                    </div>
                    <div class="pull-left info" style="padding: 5px 5px 5px 33px;">
                        <p>{{$company->title}}</p>
                        <p> {{$company->companyUrl}}</p>
                        <p style="display: none">Company's ID:{{$company->id}}</p>
                    </div>

                </div>
                </a>

            @endforeach


        <!-- /.social-auth-links -->

    </div>

</div>
<!-- /.login-box -->
<!-- /.login-box -->


<!-- jQuery 3 -->
<script src="{{asset('theme/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('theme/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('theme/plugins/iCheck/icheck.min.js')}}"></script>
<!--Validator-->
<script src="{{asset('theme/plugins/validator/validator.min.js')}}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });


</script>
<style>
    .customstyle{
        background-color:#F7F7F7;
        text-decoration: none;
        color: #666;
    }
    .customstyle:hover{
        background-color:#D8D8D8;
    }

</style>
</body>
</html>
