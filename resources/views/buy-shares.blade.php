@extends('layouts.master')
@section('content')

		</header><div class="breadcrumb-area bg-overlay-dark bg-6">	
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text text-left">
                    <h2>BUY SHARES</h2>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <li><a href="{{'user'}}">HOME</a></li>
                            <li>BUY SHARES</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-three-area" style="padding-top:75px;">
    <div class="container">
        <div class="row">
<div class="col-md-8 col-xs-12">
    <form method="post" action="#" enctype="multipart/form-data">
        <ul>
    	<li class="step1 b-step" data-status="open" data-step="1" data-fill="false" data-checked="true">
        	<div class="s-header" data-step="1">Enter Detail</div>
        	<div class="s-body">
            	<div class="p-info">
                    <div class="form-group">
                        <label class="req">Full Name</label>
                        <input type="text" name="name" placeholder="Full Name" class="form-control" 
                        value="" autocomplete="off"/> 
                    </div>
                    
                                        <div class="form-group" >
                        <label>Ref By (Referral Username)</label>
                        <input type="text" name="ref" placeholder="Referral Username" class="form-control" 
                        value="" autocomplete="off"/> 
                    </div>
                    
                    <div class="form-group">
                        <label>Username (If you have already)</label>
                        <input type="text" name="username" placeholder="Username" class="form-control" 
                        value="" autocomplete="off"/> 
                    </div>
                    
                    <div class="form-group">
                        <label class="req">Email</label>
                        <input type="text" name="email" placeholder="Email" class="form-control" 
                        value="" autocomplete="off"/> 
                    </div>
                    
                    <div class="form-group">
                        <label class="req">Phone No.</label>
                        <input type="text" name="phone" placeholder="Phone No" class="form-control" 
                        value="" autocomplete="off"/> 
                    </div>
                    
                    <div class="form-group">
                        <label class="req">Country</label>
                        <select name="country" class="form-control sel_ct_p">
                        <option value='Afghanistan' >Afghanistan</option><option value='African Republic' >African Republic</option><option value='Albania' >Albania</option><option value='Algeria' >Algeria</option><option value='American Samoa' >American Samoa</option><option value='Andorra' >Andorra</option><option value='Angola' >Angola</option><option value='Antarctica' >Antarctica</option><option value='Argentina' >Argentina</option><option value='Armenia' >Armenia</option><option value='Aruba' >Aruba</option><option value='Australia' >Australia</option><option value='Austria' >Austria</option><option value='Azerbaijan' >Azerbaijan</option><option value='Bahamas' >Bahamas</option><option value='Bahrain' >Bahrain</option><option value='Bangladesh' >Bangladesh</option><option value='Barbados' >Barbados</option><option value='Belarus' >Belarus</option><option value='Belgium' >Belgium</option><option value='Belize' >Belize</option><option value='Benin' >Benin</option><option value='Bermuda' >Bermuda</option><option value='Bhutan' >Bhutan</option><option value='Bolivia' >Bolivia</option><option value='Bosnia' >Bosnia</option><option value='Botswana' >Botswana</option><option value='Brazil' >Brazil</option><option value='Brunei' >Brunei</option><option value='Bulgaria' >Bulgaria</option><option value='Burkina Faso' >Burkina Faso</option><option value='Burundi' >Burundi</option><option value='Cambodia' >Cambodia</option><option value='Cameroon' >Cameroon</option><option value='Canada' >Canada</option><option value='Chad' >Chad</option><option value='Chile' >Chile</option><option value='China' >China</option><option value='Colombia' >Colombia</option><option value='Comoros' >Comoros</option><option value='Congo' >Congo</option><option value='Costa Rica' >Costa Rica</option><option value='Croatia' >Croatia</option><option value='Cuba' >Cuba</option><option value='Cyprus' >Cyprus</option><option value='Czech Republic' >Czech Republic</option><option value='Denmark' >Denmark</option><option value='Djibouti' >Djibouti</option><option value='Dominica' >Dominica</option><option value='Dominican Republic' >Dominican Republic</option><option value='East Timor' >East Timor</option><option value='Ecuador' >Ecuador</option><option value='Egypt' >Egypt</option><option value='El Salvador' >El Salvador</option><option value='Eritrea' >Eritrea</option><option value='Estonia' >Estonia</option><option value='Ethiopia' >Ethiopia</option><option value='Faroe Islands' >Faroe Islands</option><option value='Fiji Islands' >Fiji Islands</option><option value='Finland' >Finland</option><option value='France' >France</option><option value='French Guiana' >French Guiana</option><option value='French Polynesia' >French Polynesia</option><option value='Gabon' >Gabon</option><option value='Gambia' >Gambia</option><option value='Georgia' >Georgia</option><option value='Germany' >Germany</option><option value='Ghana' >Ghana</option><option value='Greece' >Greece</option><option value='Greenland' >Greenland</option><option value='Grenada' >Grenada</option><option value='Guadeloupe' >Guadeloupe</option><option value='Guam' >Guam</option><option value='Guatemala' >Guatemala</option><option value='Guinea' >Guinea</option><option value='Guinea-Bissau' >Guinea-Bissau</option><option value='Guyana' >Guyana</option><option value='Haiti' >Haiti</option><option value='Honduras' >Honduras</option><option value='Hungary' >Hungary</option><option value='Iceland' >Iceland</option><option value='India' >India</option><option value='Indonesia' >Indonesia</option><option value='Iran' >Iran</option><option value='Iraq' >Iraq</option><option value='Ireland' >Ireland</option><option value='Israel' >Israel</option><option value='Italy' >Italy</option><option value='Jamaica' >Jamaica</option><option value='Japan' >Japan</option><option value='Jordan' >Jordan</option><option value='Kazakhstan' >Kazakhstan</option><option value='Kenya' >Kenya</option><option value='Kiribati' >Kiribati</option><option value='Korea North' >Korea North</option><option value='Kuwait' >Kuwait</option><option value='Kyrgyzstan' >Kyrgyzstan</option><option value='Laos' >Laos</option><option value='Latvia' >Latvia</option><option value='Lebanon' >Lebanon</option><option value='Lesotho' >Lesotho</option><option value='Liberia' >Liberia</option><option value='Libya' >Libya</option><option value='Liechtenstein' >Liechtenstein</option><option value='Lithuania' >Lithuania</option><option value='Luxembourg' >Luxembourg</option><option value='Madagascar' >Madagascar</option><option value='Malawi' >Malawi</option><option value='Malaysia' >Malaysia</option><option value='Maldives' >Maldives</option><option value='Mali' >Mali</option><option value='Malta' >Malta</option><option value='Martinique' >Martinique</option><option value='Mauritania' >Mauritania</option><option value='Mauritius' >Mauritius</option><option value='Mayotte' >Mayotte</option><option value='Mexico' >Mexico</option><option value='Micronesia' >Micronesia</option><option value='Moldova' >Moldova</option><option value='Monaco' >Monaco</option><option value='Mongolia' >Mongolia</option><option value='Montserrat' >Montserrat</option><option value='Morocco' >Morocco</option><option value='Mozambique' >Mozambique</option><option value='Myanmar' >Myanmar</option><option value='Namibia' >Namibia</option><option value='Nauru' >Nauru</option><option value='Nepal' >Nepal</option><option value='Netherlands' >Netherlands</option><option value='New Zealand' >New Zealand</option><option value='Nicaragua' >Nicaragua</option><option value='Niger' >Niger</option><option value='Nigeria' >Nigeria</option><option value='Niue' >Niue</option><option value='Norway' >Norway</option><option value='Oman' >Oman</option><option value='Pakistan' >Pakistan</option><option value='Palau' >Palau</option><option value='Panama' >Panama</option><option value='Paraguay' >Paraguay</option><option value='Peru' >Peru</option><option value='Philippines' >Philippines</option><option value='Pitcairn Island' >Pitcairn Island</option><option value='Poland' >Poland</option><option value='Portugal' >Portugal</option><option value='Qatar' >Qatar</option><option value='Reunion' >Reunion</option><option value='Romania' >Romania</option><option value='Russia' >Russia</option><option value='Rwanda' >Rwanda</option><option value='Saint Kitts' >Saint Kitts</option><option value='Saint Lucia' >Saint Lucia</option><option value='Samoa' >Samoa</option><option value='San Marino' >San Marino</option><option value='Saudi Arabia' >Saudi Arabia</option><option value='Senegal' >Senegal</option><option value='Seychelles' >Seychelles</option><option value='Sierra Leone' >Sierra Leone</option><option value='Singapore' >Singapore</option><option value='Slovakia' >Slovakia</option><option value='Somalia' >Somalia</option><option value='South Arica' >South Arica</option><option value='Spain' >Spain</option><option value='Sri Lanka' >Sri Lanka</option><option value='Sudan' >Sudan</option><option value='Suriname' >Suriname</option><option value='Svalbard' >Svalbard</option><option value='Swaziland' >Swaziland</option><option value='Sweden' >Sweden</option><option value='Switzerland' >Switzerland</option><option value='Syria' >Syria</option><option value='Taiwan' >Taiwan</option><option value='Tajikistan' >Tajikistan</option><option value='Tanzania' >Tanzania</option><option value='Thailand' >Thailand</option><option value='Togo' >Togo</option><option value='Tonga' >Tonga</option><option value='Trinidad' >Trinidad</option><option value='Tunisia' >Tunisia</option><option value='Turkey' >Turkey</option><option value='Turkmenistan' >Turkmenistan</option><option value='Tuvalu' >Tuvalu</option><option value='UAE' >UAE</option><option value='Uganda' >Uganda</option><option value='Ukraine' >Ukraine</option><option value='United Kingdom' >United Kingdom</option><option value='United States' selected>United States</option><option value='United States Minor' >United States Minor</option><option value='Uruguay' >Uruguay</option><option value='Uzbekistan' >Uzbekistan</option><option value='Vanuatu' >Vanuatu</option><option value='Vatican City' >Vatican City</option><option value='Venezuela' >Venezuela</option><option value='Vietnam' >Vietnam</option><option value='Wallis' >Wallis</option><option value='Western Sahara' >Western Sahara</option><option value='Yemen' >Yemen</option><option value='Yugoslavia' >Yugoslavia</option><option value='Zambia' >Zambia</option><option value='Zimbabwe' >Zimbabwe</option><option value='korea' >korea</option>                        </select>
                    </div>
                    
                    <div class="form-group points-group">
                        <label class="req"> 1 PS Share = <span class='sl_c_ct'>10.27 USD</span></label>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <div class="input-group">
                                    <div class="input-group-addon">Shares</div>
                                    <input type="text" name="points" placeholder="0" class="form-control b-convert" 
                                    value="" autocomplete="off"/> 
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <div class="input-group">
                                    <div class="input-group-addon">Amount</div>
                                    <input type="text" name="btc" placeholder="0" class="form-control b-convert"
                                    value = "" autocomplete="off"/> 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group" style="margin-top:10px;">
                        <label>Note</label>
                        <textarea name="note" class="form-control" rows="5"></textarea>
                    </div>
                    
                    <div class="form-group text-right">
                        <input type="submit" name="deposit" value="Send Request" class="btn btn-primary btn-lg" 
                        style="width:auto;font-size:20px; height:auto;padding:5px 20px;" data-move="2"/> 
                    </div>
                    
                </div>
            </div>
        </li>
        
        <!--
        <li class="step2 b-step" data-status="close" data-step="2" data-fill="false" data-checked="false">
        	<div class="s-header" data-step="2">Deposit Payment</div>
        	<div class="s-body">
                <div class="buy-block">
                    <div class="row">
                        <div class="col-md-12"><p style="margin-top:12px;">
                        	 Please deposit  <span class="btc-v" style="font-weight:bold;"></span> <strong>USD</strong> in below given wallet address. 
                        </p></div>
                        
                        <div class="row"></div>
                        <!--
                        <div class="qrcode qrcode-desktop">
                            <div class="col-md-4 col-xs-4 text-center">
                                <strong>Deposit funds by scanning below</strong>
                            </div>
                            <div class="col-md-8 col-xs-8 text-center w2">
                                <strong>Or Direct Deposit to</strong>
                            </div>
                        </div>
                        <div class="row"></div>
                        <div class="qrcode">
                            <div class=" qrcode-mobile">
                                <div class="col-xs-12">
                                    <strong>Deposit funds by scanning below</strong>
                                </div>
                            </div>
                            <div class="image col-md-4 col-xs-4">
                                <img src='http://pakshares.com/images/qcode.png?1519323716' style='width:120px;height:120px;'>                            </div>
                            <div class="qrcode-mobile">
                                <div class="col-xs-12">
                                    <strong>Or Direct Deposit to</strong>
                                </div>
                            </div>
                            <div class="data col-md-8 col-xs-8">
                                    <span class="copyc">Fahad Hussain</span><br />
                                    <!--
                                    <a href="#" class="copyb">Copy</a>
                                   
                            </div>
                       </div>
                       
                       <div class="clear"></div>
                    </div>
                    <div class="para-black">
                        <p>Please sure your deposit equals or exceeds the minimum purchase amount 
                        (at the current exchange rate it is <strong>10.27 USD</strong></p>
                    </div>
                    <div class="para">
                        <p>Please note that your funds will appear in your account wallets only after a transaction gets  confirmations for any transfers of funds.</p>
                    </div>
                    
                    <div class="form-group text-right">
                        <input type="submit" name="verify" value="Verify Payment" class="btn btn-primary btn-lg" 
                        style="width:auto;font-size:20px; height:auto;padding:5px 20px;" data-move="3"/> 
                    </div>
                    
                </div>
             </div>
        </li>
        
        <li class="step3 b-step" data-status="close" data-step="3" data-fill="false" data-checked="false">
        	<div class="s-header" data-step="3">Verify Payment</div>
        	<div class="s-body">
                <div class="buy-block">
                	
                    <div class="form-group">
                        <label class="req">Enter Source of Payment title</label>
                        <input type="text" name="wallet" placeholder="e.g Bank Account" class="form-control" 
                        value="" autocomplete="off"/> 
                    </div>
                    <p style="margin-top:12px;">Attach proof of payment &nbsp;&nbsp;
                        <strong>Note:</strong> Only jpg, png, jpeg is allowed.
                        <div>
                        	<label class="req">Upload Payment Screenshot</label>
                            <div class="input-group">
                                <input id="uploadFile" placeholder="Choose File" disabled="disabled" 
                                style="border:1px solid #ccc;"/>
                                <div class="input-group-addon" style="padding:0px; border:none;">
                                    <div class="fileUpload btn btn-primary">
                                        <span>Upload</span>
                                        <input type="file" class="upload upload-buy-btn" name="upload"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group" style="margin-top:10px;">
                                <label>Note</label>
                                <textarea name="note" class="form-control" rows="5"></textarea>
                            </div>
                            
                        </div>
                        
                        <div class="form-group text-right" style="margin-top:30px;">
                            <input type="submit" name="send_req" value="Send Request" class="btn btn-success btn-lg" 
                            style="width:auto;font-size:20px; height:auto;padding:5px 20px;" data-move="3"/> 
                        </div>
                        
                    </p>
                </div>
            </div>
        </li>
        -->
        
    </ul>
    </form></div>

<div class="col-md-4 col-xs-12">
       <div class="buy-point-right">
        <div class="single-sidebar-widget fix bg-8">
            <div class="sidebar-contact-info">
                <h4>Need Any Help?</h4>
                <p>Our team of finance experts, business mentors & smart technologist in the field of IT is 24/7 available via email. Please let us know about your query and we will contact you as soon as possible with the solution of your query. Thanks :)</p>
                <a href="http://pakshares.com/contact" class="default-button">Contact</a>
            </div>
        </div>
    </div>
    </div>

</div>
    </div>
</div>
  
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=145847865464466";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

@endsection