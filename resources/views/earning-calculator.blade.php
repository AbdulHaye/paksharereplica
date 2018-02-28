@extends('layouts.master')
@section('content')

		</header><div class="breadcrumb-area bg-overlay-dark bg-6">	
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text text-left">
                    <h2>EARNING CALCULATOR</h2>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <li><a href="{{'home'}}">HOME</a></li>
                            <li>EARNING CALCULATOR</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="service-main-area pt-100 pb-105 bg-calculator">
  <div class="service-banner">
      <div class="container">
      	<div class="row">
        	<div class="col-md-8">
            	<div class="col-md-12 col-sm-12">
                    <h3>Share Growth Graph</h3>
                    <div id="morris-one-line-chart"></div>
                </div>
            	                 <script>
					$(document).ready(function(){
						var ulocation = "";
						Number.prototype.formatMoney = function(c, d, t){
						var n = this, 
							c = isNaN(c = Math.abs(c)) ? 2 : c, 
							d = d == undefined ? "." : d, 
							t = t == undefined ? "," : t, 
							s = n < 0 ? "-" : "", 
							i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))), 
							j = (j = i.length) > 3 ? j % 3 : 0;
						   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
						 };
						$(function() {
							Morris.Line({
								element: 'morris-one-line-chart',
								data:[{"day":"01 Dec 2017","price":8},{"day":"02 Dec 2017","price":8},{"day":"03 Dec 2017","price":8},{"day":"04 Dec 2017","price":8},{"day":"05 Dec 2017","price":8},{"day":"06 Dec 2017","price":8.3},{"day":"07 Dec 2017","price":8.3},{"day":"08 Dec 2017","price":8.3},{"day":"09 Dec 2017","price":8.3},{"day":"10 Dec 2017","price":8.3},{"day":"11 Dec 2017","price":9.06},{"day":"12 Dec 2017","price":9.06},{"day":"13 Dec 2017","price":9.06},{"day":"14 Dec 2017","price":9.06},{"day":"15 Dec 2017","price":9.06},{"day":"16 Dec 2017","price":9.7},{"day":"17 Dec 2017","price":9.7},{"day":"18 Dec 2017","price":9.7},{"day":"19 Dec 2017","price":9.7},{"day":"20 Dec 2017","price":9.7},{"day":"21 Dec 2017","price":9.7},{"day":"22 Dec 2017","price":9.7},{"day":"23 Dec 2017","price":9.7},{"day":"24 Dec 2017","price":9.7},{"day":"25 Dec 2017","price":9.7},{"day":"26 Dec 2017","price":9.7},{"day":"27 Dec 2017","price":9.7},{"day":"28 Dec 2017","price":9.7},{"day":"29 Dec 2017","price":9.7},{"day":"30 Dec 2017","price":9.7},{"day":"31 Dec 2017","price":9.7},{"day":"01 Jan 2018","price":9.96},{"day":"02 Jan 2018","price":9.97},{"day":"03 Jan 2018","price":10},{"day":"04 Jan 2018","price":10.01},{"day":"05 Jan 2018","price":10.01},{"day":"06 Jan 2018","price":10.01},{"day":"07 Jan 2018","price":10.01},{"day":"12 Jan 2018","price":10.01},{"day":"08 Jan 2018","price":10.01},{"day":"09 Jan 2018","price":10.01},{"day":"10 Jan 2018","price":10.01},{"day":"11 Jan 2018","price":10.01},{"day":"13 Jan 2018","price":10.01},{"day":"14 Jan 2018","price":10.01},{"day":"15 Jan 2018","price":10.01},{"day":"16 Jan 2018","price":10.01},{"day":"17 Jan 2018","price":10.01},{"day":"18 Jan 2018","price":10.01},{"day":"19 Jan 2018","price":10.01},{"day":"20 Jan 2018","price":10.01},{"day":"21 Jan 2018","price":10.01},{"day":"22 Jan 2018","price":10.01},{"day":"23 Jan 2018","price":10.01},{"day":"24 Jan 2018","price":10.01},{"day":"25 Jan 2018","price":10.01},{"day":"26 Jan 2018","price":10.01},{"day":"27 Jan 2018","price":10.01},{"day":"28 Jan 2018","price":10.01},{"day":"29 Jan 2018","price":10.01},{"day":"30 Jan 2018","price":10.01},{"day":"31 Jan 2018","price":10.01},{"day":"01 Feb 2018","price":10.01},{"day":"02 Feb 2018","price":10.01},{"day":"03 Feb 2018","price":10.01},{"day":"04 Feb 2018","price":10.01},{"day":"05 Feb 2018","price":10.01},{"day":"06 Feb 2018","price":10.01},{"day":"07 Feb 2018","price":10.01},{"day":"08 Feb 2018","price":10.01},{"day":"09 Feb 2018","price":10.01},{"day":"10 Feb 2018","price":10.01},{"day":"11 Feb 2018","price":10.01},{"day":"12 Feb 2018","price":10.01},{"day":"13 Feb 2018","price":10.01},{"day":"14 Feb 2018","price":10.01},{"day":"15 Feb 2018","price":10.01},{"day":"16 Feb 2018","price":10.01},{"day":"17 Feb 2018","price":10.01},{"day":"18 Feb 2018","price":10.01},{"day":"19 Feb 2018","price":10.01},{"day":"20 Feb 2018","price":10.01},{"day":"21 Feb 2018","price":10.27},{"day":"22 Feb 2018","price":10.27}],
								xkey: 'day',
								ykeys: ['price'],
								xLabelFormat: function (d) {
									//return d.getDate();
									return "";
								},
								hoverCallback: function(index, options, content) {
									var d = options.data[index];
									var dy = new Date(d.day);
									var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Satureday"];
									var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
									dy = days[dy.getDay()]+", "+dy.getDate()+" "+months[dy.getMonth()]+" "+dy.getFullYear();
									var price = (d.price).formatMoney(2, '.', ',');
									var cur = (ulocation=="Pakistan") ? "PKR" : "USD";
									dt = "<div class='moris-custim-data'>"+
										  "<span class='moris-inner'>"+
										  "<span class='m-date'>"+dy+"</span><br>"+
										  "<span class='m-price'>"+price+" <small>"+cur+"</small></span>"+
										"</span></div>";
									return(dt);
								},
								yLabelFormat: function (y) {
									var parts = y.toString().split(".");
									parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
									return parts.join(",");
								},
								xLabelAngle: 0,
								ymin:parseInt(8),
								ymax : parseInt(10.27 + 30),
								resize: true,
								stacked: true,
								lineWidth:4,
								labels: ['Price'],
								lineColors: ['#002e5b'],
								pointSize:5,
							});
						});
					});
				</script>
            </div>
            
            <div class="col-md-4">
            	<div class="row">
                	<div class="col-md-12 col-xs-12">
                        <div class="_calc_res">
                            <div class='_calc_per'>
                              <h3>Estimated Earning</h3>
                              <h4 style='color:#C00;'>Today Share Rate: <span class="ct_rate">
                                10.27 
                                USD                                </span></h4>
                              <hr />
                              <div>
                                <strong>Investment </strong> <span>= &nbsp;0</span>
                              </div>
                              <div>
                                <strong>Minimum Earning </strong> <span>= &nbsp;0</span>
                              </div> 
                              <div>
                                <strong>Maximum Earning </strong>  <span>= &nbsp;0</span>
                              </div>
                             </div>
                        </div>
                    </div>
                	<div class="col-md-12 col-xs-12">
                        <form method="post" action="#">
                          <div class="form-group">
                              <label>Country</label>
                              <select name="country" class="form-control sl_ct_rate">
                                <option value="">Any</option>
                              <option value='Afghanistan' >Afghanistan</option><option value='African Republic' >African Republic</option><option value='Albania' >Albania</option><option value='Algeria' >Algeria</option><option value='American Samoa' >American Samoa</option><option value='Andorra' >Andorra</option><option value='Angola' >Angola</option><option value='Antarctica' >Antarctica</option><option value='Argentina' >Argentina</option><option value='Armenia' >Armenia</option><option value='Aruba' >Aruba</option><option value='Australia' >Australia</option><option value='Austria' >Austria</option><option value='Azerbaijan' >Azerbaijan</option><option value='Bahamas' >Bahamas</option><option value='Bahrain' >Bahrain</option><option value='Bangladesh' >Bangladesh</option><option value='Barbados' >Barbados</option><option value='Belarus' >Belarus</option><option value='Belgium' >Belgium</option><option value='Belize' >Belize</option><option value='Benin' >Benin</option><option value='Bermuda' >Bermuda</option><option value='Bhutan' >Bhutan</option><option value='Bolivia' >Bolivia</option><option value='Bosnia' >Bosnia</option><option value='Botswana' >Botswana</option><option value='Brazil' >Brazil</option><option value='Brunei' >Brunei</option><option value='Bulgaria' >Bulgaria</option><option value='Burkina Faso' >Burkina Faso</option><option value='Burundi' >Burundi</option><option value='Cambodia' >Cambodia</option><option value='Cameroon' >Cameroon</option><option value='Canada' >Canada</option><option value='Chad' >Chad</option><option value='Chile' >Chile</option><option value='China' >China</option><option value='Colombia' >Colombia</option><option value='Comoros' >Comoros</option><option value='Congo' >Congo</option><option value='Costa Rica' >Costa Rica</option><option value='Croatia' >Croatia</option><option value='Cuba' >Cuba</option><option value='Cyprus' >Cyprus</option><option value='Czech Republic' >Czech Republic</option><option value='Denmark' >Denmark</option><option value='Djibouti' >Djibouti</option><option value='Dominica' >Dominica</option><option value='Dominican Republic' >Dominican Republic</option><option value='East Timor' >East Timor</option><option value='Ecuador' >Ecuador</option><option value='Egypt' >Egypt</option><option value='El Salvador' >El Salvador</option><option value='Eritrea' >Eritrea</option><option value='Estonia' >Estonia</option><option value='Ethiopia' >Ethiopia</option><option value='Faroe Islands' >Faroe Islands</option><option value='Fiji Islands' >Fiji Islands</option><option value='Finland' >Finland</option><option value='France' >France</option><option value='French Guiana' >French Guiana</option><option value='French Polynesia' >French Polynesia</option><option value='Gabon' >Gabon</option><option value='Gambia' >Gambia</option><option value='Georgia' >Georgia</option><option value='Germany' >Germany</option><option value='Ghana' >Ghana</option><option value='Greece' >Greece</option><option value='Greenland' >Greenland</option><option value='Grenada' >Grenada</option><option value='Guadeloupe' >Guadeloupe</option><option value='Guam' >Guam</option><option value='Guatemala' >Guatemala</option><option value='Guinea' >Guinea</option><option value='Guinea-Bissau' >Guinea-Bissau</option><option value='Guyana' >Guyana</option><option value='Haiti' >Haiti</option><option value='Honduras' >Honduras</option><option value='Hungary' >Hungary</option><option value='Iceland' >Iceland</option><option value='India' >India</option><option value='Indonesia' >Indonesia</option><option value='Iran' >Iran</option><option value='Iraq' >Iraq</option><option value='Ireland' >Ireland</option><option value='Israel' >Israel</option><option value='Italy' >Italy</option><option value='Jamaica' >Jamaica</option><option value='Japan' >Japan</option><option value='Jordan' >Jordan</option><option value='Kazakhstan' >Kazakhstan</option><option value='Kenya' >Kenya</option><option value='Kiribati' >Kiribati</option><option value='Korea North' >Korea North</option><option value='Kuwait' >Kuwait</option><option value='Kyrgyzstan' >Kyrgyzstan</option><option value='Laos' >Laos</option><option value='Latvia' >Latvia</option><option value='Lebanon' >Lebanon</option><option value='Lesotho' >Lesotho</option><option value='Liberia' >Liberia</option><option value='Libya' >Libya</option><option value='Liechtenstein' >Liechtenstein</option><option value='Lithuania' >Lithuania</option><option value='Luxembourg' >Luxembourg</option><option value='Madagascar' >Madagascar</option><option value='Malawi' >Malawi</option><option value='Malaysia' >Malaysia</option><option value='Maldives' >Maldives</option><option value='Mali' >Mali</option><option value='Malta' >Malta</option><option value='Martinique' >Martinique</option><option value='Mauritania' >Mauritania</option><option value='Mauritius' >Mauritius</option><option value='Mayotte' >Mayotte</option><option value='Mexico' >Mexico</option><option value='Micronesia' >Micronesia</option><option value='Moldova' >Moldova</option><option value='Monaco' >Monaco</option><option value='Mongolia' >Mongolia</option><option value='Montserrat' >Montserrat</option><option value='Morocco' >Morocco</option><option value='Mozambique' >Mozambique</option><option value='Myanmar' >Myanmar</option><option value='Namibia' >Namibia</option><option value='Nauru' >Nauru</option><option value='Nepal' >Nepal</option><option value='Netherlands' >Netherlands</option><option value='New Zealand' >New Zealand</option><option value='Nicaragua' >Nicaragua</option><option value='Niger' >Niger</option><option value='Nigeria' >Nigeria</option><option value='Niue' >Niue</option><option value='Norway' >Norway</option><option value='Oman' >Oman</option><option value='Pakistan' >Pakistan</option><option value='Palau' >Palau</option><option value='Panama' >Panama</option><option value='Paraguay' >Paraguay</option><option value='Peru' >Peru</option><option value='Philippines' >Philippines</option><option value='Pitcairn Island' >Pitcairn Island</option><option value='Poland' >Poland</option><option value='Portugal' >Portugal</option><option value='Qatar' >Qatar</option><option value='Reunion' >Reunion</option><option value='Romania' >Romania</option><option value='Russia' >Russia</option><option value='Rwanda' >Rwanda</option><option value='Saint Kitts' >Saint Kitts</option><option value='Saint Lucia' >Saint Lucia</option><option value='Samoa' >Samoa</option><option value='San Marino' >San Marino</option><option value='Saudi Arabia' >Saudi Arabia</option><option value='Senegal' >Senegal</option><option value='Seychelles' >Seychelles</option><option value='Sierra Leone' >Sierra Leone</option><option value='Singapore' >Singapore</option><option value='Slovakia' >Slovakia</option><option value='Somalia' >Somalia</option><option value='South Arica' >South Arica</option><option value='Spain' >Spain</option><option value='Sri Lanka' >Sri Lanka</option><option value='Sudan' >Sudan</option><option value='Suriname' >Suriname</option><option value='Svalbard' >Svalbard</option><option value='Swaziland' >Swaziland</option><option value='Sweden' >Sweden</option><option value='Switzerland' >Switzerland</option><option value='Syria' >Syria</option><option value='Taiwan' >Taiwan</option><option value='Tajikistan' >Tajikistan</option><option value='Tanzania' >Tanzania</option><option value='Thailand' >Thailand</option><option value='Togo' >Togo</option><option value='Tonga' >Tonga</option><option value='Trinidad' >Trinidad</option><option value='Tunisia' >Tunisia</option><option value='Turkey' >Turkey</option><option value='Turkmenistan' >Turkmenistan</option><option value='Tuvalu' >Tuvalu</option><option value='UAE' >UAE</option><option value='Uganda' >Uganda</option><option value='Ukraine' >Ukraine</option><option value='United Kingdom' >United Kingdom</option><option value='United States' >United States</option><option value='United States Minor' >United States Minor</option><option value='Uruguay' >Uruguay</option><option value='Uzbekistan' >Uzbekistan</option><option value='Vanuatu' >Vanuatu</option><option value='Vatican City' >Vatican City</option><option value='Venezuela' >Venezuela</option><option value='Vietnam' >Vietnam</option><option value='Wallis' >Wallis</option><option value='Western Sahara' >Western Sahara</option><option value='Yemen' >Yemen</option><option value='Yugoslavia' >Yugoslavia</option><option value='Zambia' >Zambia</option><option value='Zimbabwe' >Zimbabwe</option><option value='korea' >korea</option>                              </select>
                          </div>
                          <div class="form-group">
                              <label>How many shares you can buy?</label>
                              <input type="number" name="q1" placeholder="10 shares" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>How much period you want to invest (in months)?</label>
                              <input type="number" name="q2" placeholder="12 months" class="form-control">
                          </div>
                          <div class="form-group text-right">
                              <input type="submit" name="calc"  value="Calculate" class="btn btn-primary _calculate">
                          </div>
                        </form>
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