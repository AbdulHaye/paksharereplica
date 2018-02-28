@extends('layouts.master')
@section('content')
    <!-- Mobile Menu Area end -->
    </header>
    <div class="breadcrumb-area bg-overlay-dark bg-6" data-load='true' data-to=".account-area" data-top="100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text text-left">
                        <h2>LOGIN / REGISTRATION</h2>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb">
                                <li><a href="{{'home'}}">HOME</a></li>
                                <li>LOGIN / REGISTRATION</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form-area account-area fix pb-120">
        <div class="container">

            <div class="col-md-6">
                <div class="col-md-12" style="padding-left:0px;">
                    <div class="col-md-12" style="padding-left:0px;">
                        <h4 class='details-title'>Login Here</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="req">Email / Username</label>
                                <input type="text" name="username" placeholder="Email / Username">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="req">Password</label>
                                    <input type="password" name="password" placeholder="Password here">
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="default-button submit-btn" name="login">LOGIN</button>
                                <a href="http://pakshares.com/account?forget=true" class="pull-right"
                                   style="display:inline-block; margin-top:40px;">Forgot Password</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6 register-form">
                <h4 class="details-title">Register your account</h4>
                <form action="{{ route('register') }}" method="post">
                    <div class="form-group">
                        @csrf
                        <label class="req">Full Name</label>
                        <input type="text" name="name" placeholder="Enter your Full Name"
                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                               value="{{ old('name') }}">

                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <!--
                    <div class="form-group">
                        <label class="req">Date of Birth</label>
                        <div id="datetimepicker1">
                            <input type="text" name="birth" placeholder="Date of Birth" value="">
                        </div>
                    </div>
                    -->
                    <div class="form-group">
                        <label class="req">Gender</label>
                        <div style="margin-left:12px;">
                            <input type="radio" name="gender" value="m"
                                   class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}">
                            Male &nbsp; &nbsp;
                            <input type="radio" name="gender" value="f"
                                   class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}">
                            Female
                        </div>
                        @if ($errors->has('gender'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" name="mob" placeholder="Enter your Mobile No."
                               class="form-control{{ $errors->has('mob') ? ' is-invalid' : '' }}"
                               value="{{ old('mob') }}">
                        @if ($errors->has('mob'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mob') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="form-group">
                        <label class="req">Country</label>
                        <select name="country" class="form-control">
                            <option value='Afghanistan'>Afghanistan</option>
                            <option value='African Republic'>African Republic</option>
                            <option value='Albania'>Albania</option>
                            <option value='Algeria'>Algeria</option>
                            <option value='American Samoa'>American Samoa</option>
                            <option value='Andorra'>Andorra</option>
                            <option value='Angola'>Angola</option>
                            <option value='Antarctica'>Antarctica</option>
                            <option value='Argentina'>Argentina</option>
                            <option value='Armenia'>Armenia</option>
                            <option value='Aruba'>Aruba</option>
                            <option value='Australia'>Australia</option>
                            <option value='Austria'>Austria</option>
                            <option value='Azerbaijan'>Azerbaijan</option>
                            <option value='Bahamas'>Bahamas</option>
                            <option value='Bahrain'>Bahrain</option>
                            <option value='Bangladesh'>Bangladesh</option>
                            <option value='Barbados'>Barbados</option>
                            <option value='Belarus'>Belarus</option>
                            <option value='Belgium'>Belgium</option>
                            <option value='Belize'>Belize</option>
                            <option value='Benin'>Benin</option>
                            <option value='Bermuda'>Bermuda</option>
                            <option value='Bhutan'>Bhutan</option>
                            <option value='Bolivia'>Bolivia</option>
                            <option value='Bosnia'>Bosnia</option>
                            <option value='Botswana'>Botswana</option>
                            <option value='Brazil'>Brazil</option>
                            <option value='Brunei'>Brunei</option>
                            <option value='Bulgaria'>Bulgaria</option>
                            <option value='Burkina Faso'>Burkina Faso</option>
                            <option value='Burundi'>Burundi</option>
                            <option value='Cambodia'>Cambodia</option>
                            <option value='Cameroon'>Cameroon</option>
                            <option value='Canada'>Canada</option>
                            <option value='Chad'>Chad</option>
                            <option value='Chile'>Chile</option>
                            <option value='China'>China</option>
                            <option value='Colombia'>Colombia</option>
                            <option value='Comoros'>Comoros</option>
                            <option value='Congo'>Congo</option>
                            <option value='Costa Rica'>Costa Rica</option>
                            <option value='Croatia'>Croatia</option>
                            <option value='Cuba'>Cuba</option>
                            <option value='Cyprus'>Cyprus</option>
                            <option value='Czech Republic'>Czech Republic</option>
                            <option value='Denmark'>Denmark</option>
                            <option value='Djibouti'>Djibouti</option>
                            <option value='Dominica'>Dominica</option>
                            <option value='Dominican Republic'>Dominican Republic</option>
                            <option value='East Timor'>East Timor</option>
                            <option value='Ecuador'>Ecuador</option>
                            <option value='Egypt'>Egypt</option>
                            <option value='El Salvador'>El Salvador</option>
                            <option value='Eritrea'>Eritrea</option>
                            <option value='Estonia'>Estonia</option>
                            <option value='Ethiopia'>Ethiopia</option>
                            <option value='Faroe Islands'>Faroe Islands</option>
                            <option value='Fiji Islands'>Fiji Islands</option>
                            <option value='Finland'>Finland</option>
                            <option value='France'>France</option>
                            <option value='French Guiana'>French Guiana</option>
                            <option value='French Polynesia'>French Polynesia</option>
                            <option value='Gabon'>Gabon</option>
                            <option value='Gambia'>Gambia</option>
                            <option value='Georgia'>Georgia</option>
                            <option value='Germany'>Germany</option>
                            <option value='Ghana'>Ghana</option>
                            <option value='Greece'>Greece</option>
                            <option value='Greenland'>Greenland</option>
                            <option value='Grenada'>Grenada</option>
                            <option value='Guadeloupe'>Guadeloupe</option>
                            <option value='Guam'>Guam</option>
                            <option value='Guatemala'>Guatemala</option>
                            <option value='Guinea'>Guinea</option>
                            <option value='Guinea-Bissau'>Guinea-Bissau</option>
                            <option value='Guyana'>Guyana</option>
                            <option value='Haiti'>Haiti</option>
                            <option value='Honduras'>Honduras</option>
                            <option value='Hungary'>Hungary</option>
                            <option value='Iceland'>Iceland</option>
                            <option value='India'>India</option>
                            <option value='Indonesia'>Indonesia</option>
                            <option value='Iran'>Iran</option>
                            <option value='Iraq'>Iraq</option>
                            <option value='Ireland'>Ireland</option>
                            <option value='Israel'>Israel</option>
                            <option value='Italy'>Italy</option>
                            <option value='Jamaica'>Jamaica</option>
                            <option value='Japan'>Japan</option>
                            <option value='Jordan'>Jordan</option>
                            <option value='Kazakhstan'>Kazakhstan</option>
                            <option value='Kenya'>Kenya</option>
                            <option value='Kiribati'>Kiribati</option>
                            <option value='Korea North'>Korea North</option>
                            <option value='Kuwait'>Kuwait</option>
                            <option value='Kyrgyzstan'>Kyrgyzstan</option>
                            <option value='Laos'>Laos</option>
                            <option value='Latvia'>Latvia</option>
                            <option value='Lebanon'>Lebanon</option>
                            <option value='Lesotho'>Lesotho</option>
                            <option value='Liberia'>Liberia</option>
                            <option value='Libya'>Libya</option>
                            <option value='Liechtenstein'>Liechtenstein</option>
                            <option value='Lithuania'>Lithuania</option>
                            <option value='Luxembourg'>Luxembourg</option>
                            <option value='Madagascar'>Madagascar</option>
                            <option value='Malawi'>Malawi</option>
                            <option value='Malaysia'>Malaysia</option>
                            <option value='Maldives'>Maldives</option>
                            <option value='Mali'>Mali</option>
                            <option value='Malta'>Malta</option>
                            <option value='Martinique'>Martinique</option>
                            <option value='Mauritania'>Mauritania</option>
                            <option value='Mauritius'>Mauritius</option>
                            <option value='Mayotte'>Mayotte</option>
                            <option value='Mexico'>Mexico</option>
                            <option value='Micronesia'>Micronesia</option>
                            <option value='Moldova'>Moldova</option>
                            <option value='Monaco'>Monaco</option>
                            <option value='Mongolia'>Mongolia</option>
                            <option value='Montserrat'>Montserrat</option>
                            <option value='Morocco'>Morocco</option>
                            <option value='Mozambique'>Mozambique</option>
                            <option value='Myanmar'>Myanmar</option>
                            <option value='Namibia'>Namibia</option>
                            <option value='Nauru'>Nauru</option>
                            <option value='Nepal'>Nepal</option>
                            <option value='Netherlands'>Netherlands</option>
                            <option value='New Zealand'>New Zealand</option>
                            <option value='Nicaragua'>Nicaragua</option>
                            <option value='Niger'>Niger</option>
                            <option value='Nigeria'>Nigeria</option>
                            <option value='Niue'>Niue</option>
                            <option value='Norway'>Norway</option>
                            <option value='Oman'>Oman</option>
                            <option value='Pakistan'>Pakistan</option>
                            <option value='Palau'>Palau</option>
                            <option value='Panama'>Panama</option>
                            <option value='Paraguay'>Paraguay</option>
                            <option value='Peru'>Peru</option>
                            <option value='Philippines'>Philippines</option>
                            <option value='Pitcairn Island'>Pitcairn Island</option>
                            <option value='Poland'>Poland</option>
                            <option value='Portugal'>Portugal</option>
                            <option value='Qatar'>Qatar</option>
                            <option value='Reunion'>Reunion</option>
                            <option value='Romania'>Romania</option>
                            <option value='Russia'>Russia</option>
                            <option value='Rwanda'>Rwanda</option>
                            <option value='Saint Kitts'>Saint Kitts</option>
                            <option value='Saint Lucia'>Saint Lucia</option>
                            <option value='Samoa'>Samoa</option>
                            <option value='San Marino'>San Marino</option>
                            <option value='Saudi Arabia'>Saudi Arabia</option>
                            <option value='Senegal'>Senegal</option>
                            <option value='Seychelles'>Seychelles</option>
                            <option value='Sierra Leone'>Sierra Leone</option>
                            <option value='Singapore'>Singapore</option>
                            <option value='Slovakia'>Slovakia</option>
                            <option value='Somalia'>Somalia</option>
                            <option value='South Arica'>South Arica</option>
                            <option value='Spain'>Spain</option>
                            <option value='Sri Lanka'>Sri Lanka</option>
                            <option value='Sudan'>Sudan</option>
                            <option value='Suriname'>Suriname</option>
                            <option value='Svalbard'>Svalbard</option>
                            <option value='Swaziland'>Swaziland</option>
                            <option value='Sweden'>Sweden</option>
                            <option value='Switzerland'>Switzerland</option>
                            <option value='Syria'>Syria</option>
                            <option value='Taiwan'>Taiwan</option>
                            <option value='Tajikistan'>Tajikistan</option>
                            <option value='Tanzania'>Tanzania</option>
                            <option value='Thailand'>Thailand</option>
                            <option value='Togo'>Togo</option>
                            <option value='Tonga'>Tonga</option>
                            <option value='Trinidad'>Trinidad</option>
                            <option value='Tunisia'>Tunisia</option>
                            <option value='Turkey'>Turkey</option>
                            <option value='Turkmenistan'>Turkmenistan</option>
                            <option value='Tuvalu'>Tuvalu</option>
                            <option value='UAE'>UAE</option>
                            <option value='Uganda'>Uganda</option>
                            <option value='Ukraine'>Ukraine</option>
                            <option value='United Kingdom'>United Kingdom</option>
                            <option value='United States' selected>United States</option>
                            <option value='United States Minor'>United States Minor</option>
                            <option value='Uruguay'>Uruguay</option>
                            <option value='Uzbekistan'>Uzbekistan</option>
                            <option value='Vanuatu'>Vanuatu</option>
                            <option value='Vatican City'>Vatican City</option>
                            <option value='Venezuela'>Venezuela</option>
                            <option value='Vietnam'>Vietnam</option>
                            <option value='Wallis'>Wallis</option>
                            <option value='Western Sahara'>Western Sahara</option>
                            <option value='Yemen'>Yemen</option>
                            <option value='Yugoslavia'>Yugoslavia</option>
                            <option value='Zambia'>Zambia</option>
                            <option value='Zimbabwe'>Zimbabwe</option>
                            <option value='korea'>korea</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="req">City</label>
                        <input type="text" name="city" placeholder="Enter your City"
                               class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"
                               value="{{ old('city') }}">
                        @if ($errors->has('city'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <!--
                    <div class="form-group">
                        <label>Referred by:</label>
                        <div class="input-group">
                        <input type="text" name="ref" placeholder="Enter referral ID by whom you have been referred."
                        value="admin" autocomplete="off" class="chk-ref">
                            <div class="input-group-addon add-check" style="border:1px solid #dbdbdb;border-left:none;overflow:hidden;"><span class='chk-suc'><i class='fa fa-check'></i></span></div>
                        </div>
                    </div>
                    -->

                    <div class="form-group">
                        <label class="req">Email ID</label>
                        <input type="text" name="email" placeholder="Enter your Email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="form-group">
                        <label class="req">Username</label>
                        <div class="input-group">
                            <input type="text" name="username" placeholder="Choose your username" autocomplete="off"
                                   class="chk-usr"
                                   class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                   value="{{ old('username') }}">
                            @if ($errors->has('username'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                            @endif
                            <div class="input-group-addon "
                                 style="border:1px solid #dbdbdb;border-left:none;overflow:hidden;"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="req">Password</label>
                        <input type="password" name="password" placeholder="Choose your password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                               required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label class="req">Confirm Password</label>
                            <input placeholder="Confirm Password" id="password-confirm" type="password"
                                   class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="default-button submit-btn" name="register">REGISTER</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=145847865464466";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'))


        function copy(textToCopy) {
            $("body")
                .append($('<input type="text" name="fname" class="textToCopyInput"/>')
                    .val(textToCopy))
                .find(".textToCopyInput")
                .select();
            try {
                var successful = document.execCommand('copy');
                var msg = successful ? 'successful' : 'unsuccessful';
                alert('Text copied to clipboard!');
            } catch (err) {
                window.prompt("To copy the text to clipboard: Ctrl+C, Enter", textToCopy);
            }
            $(".textToCopyInput").remove();
        }

        $(".copy-ref").click(function () {
            var t = $(".copy-from").html();
            copy(t);
        });

    </script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-61317768-5', 'auto');
        ga('send', 'pageview');

    </script>
    <a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;" rel="nofollow">Scroll to
        top</a>


    </body>
    <!-- Mirrored from pakshares.com/account by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Feb 2018 18:24:03 GMT -->
    </html>

@endsection