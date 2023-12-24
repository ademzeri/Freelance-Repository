@extends('layouts.default')
@section('content')
<div>
   <div class="alert-section pt-3 px-4">
      <div class="alert alert-danger alert-dismissible fade show">
         <div class="d-flex flex-row">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
               <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
               <line x1="15" y1="9" x2="9" y2="15"></line>
               <line x1="9" y1="9" x2="15" y2="15"></line>
            </svg>
            <p class="inline"><strong>Alert! </strong> Blocker type 'No Blocked' will causing all bots can access your site.</p>
         </div>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
         </button>
      </div>
   </div>
   <div class="form-section px-4">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               <h4 class="card-title">Condition</h4>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-12 col-xl-6 col-xxl-6 mb-3">
                     <label class="form-label">URL to Short / Visitor Redirection</label>
                     <div class="input-group " data-placement="bottom" data-align="top" data-autobtn-close="true">
                        <input type="text" class="form-control input-default " placeholder="htttps://example.com/path" required>
                     </div>
                  </div>
                  <div class="col-md-12 col-xl-3 col-xxl-6 mb-3">
                     <label class="form-label">Custom Keyname (Optional)</label>
                     <div class="input-group " data-placement="bottom" data-align="top" data-autobtn-close="true">
                        <input type="text" class="form-control input-default " placeholder="xRffyhr">
                     </div>
                  </div>
                  <div class="col-md-12 col-xl-3 col-xxl-6 mb-3">
                     <label class="form-label">Bot Redirection (<a href="#" class="text-blue-500">Custom</a>) </label>
                     <div class="input-group w-full" data-placement="bottom" data-align="top" data-autobtn-close="true">
                        <select name="" id="" class="form-control input-default">
                           <option value="">KILLBOT 404 NOT FOUND</option>
                           <option value="">KILLBOT 403 FORBIDDEN</option>
                           <option value="">KILLBOT HUMAN VERIFICATION</option>
                           <option value="">GOOGLE</option>
                           <option value="">BING</option>
                           <option value="">YAHOO</option>
                           <option value="">YANDEX</option>
                           <option value="">RANDOM WEBSITE</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-12 col-xl-2 col-xxl-2 mb-3">
                     <label class="form-label">Device allowed</label>
                     <div class="input-group w-full" data-placement="bottom" data-align="top" data-autobtn-close="true">
                        <select name="" id="" class="form-control input-default">
                           <option value="">ALL DEVICE</option>
                           <option value="">MOBILE ONLY</option>
                           <option value="">DESKTOP ONLY</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-12 col-xl-2 col-xxl-2 mb-3">
                     <label class="form-label">Blocker type</label>
                     <div class="input-group w-full" data-placement="bottom" data-align="top" data-autobtn-close="true">
                        <select name="" id="" class="form-control input-default">
                           <option value="">NO BLOCKED</option>
                           <option value="">BLOCK TYPE IP PROXY</option>
                           <option value="">BLOCK TYPE IP NON-ISP + PROXY</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-12 col-xl-2 col-xxl-2 mb-3">
                     <label class="form-label">Blocker Level</label>
                     <div class="input-group w-full" data-placement="bottom" data-align="top" data-autobtn-close="true">
                        <select name="" id="" class="form-control input-default">
                           <option value="">LOW</option>
                           <option value="">MEDIUM</option>
                           <option value="">VERY SENSITIVE</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-12 col-xl-2 col-xxl-2 mb-3">
                     <label class="form-label">COUNTRY</label>
                     <div class="input-group w-full" data-placement="bottom" data-align="top" data-autobtn-close="true">
                        <select name="" id="" class="form-control input-default">
                           <option value="Afghanistan">Afghanistan</option>
                           <option value="Åland Islands">Åland Islands</option>
                           <option value="Albania">Albania</option>
                           <option value="Algeria">Algeria</option>
                           <option value="American Samoa">American Samoa</option>
                           <option value="Andorra">Andorra</option>
                           <option value="Angola">Angola</option>
                           <option value="Anguilla">Anguilla</option>
                           <option value="Antarctica">Antarctica</option>
                           <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                           <option value="Argentina">Argentina</option>
                           <option value="Armenia">Armenia</option>
                           <option value="Aruba">Aruba</option>
                           <option value="Australia">Australia</option>
                           <option value="Austria">Austria</option>
                           <option value="Azerbaijan">Azerbaijan</option>
                           <option value="Bahamas">Bahamas</option>
                           <option value="Bahrain">Bahrain</option>
                           <option value="Bangladesh">Bangladesh</option>
                           <option value="Barbados">Barbados</option>
                           <option value="Belarus">Belarus</option>
                           <option value="Belgium">Belgium</option>
                           <option value="Belize">Belize</option>
                           <option value="Benin">Benin</option>
                           <option value="Bermuda">Bermuda</option>
                           <option value="Bhutan">Bhutan</option>
                           <option value="Bolivia">Bolivia</option>
                           <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                           <option value="Botswana">Botswana</option>
                           <option value="Bouvet Island">Bouvet Island</option>
                           <option value="Brazil">Brazil</option>
                           <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                           <option value="Brunei Darussalam">Brunei Darussalam</option>
                           <option value="Bulgaria">Bulgaria</option>
                           <option value="Burkina Faso">Burkina Faso</option>
                           <option value="Burundi">Burundi</option>
                           <option value="Cambodia">Cambodia</option>
                           <option value="Cameroon">Cameroon</option>
                           <option value="Canada">Canada</option>
                           <option value="Cape Verde">Cape Verde</option>
                           <option value="Cayman Islands">Cayman Islands</option>
                           <option value="Central African Republic">Central African Republic</option>
                           <option value="Chad">Chad</option>
                           <option value="Chile">Chile</option>
                           <option value="China">China</option>
                           <option value="Christmas Island">Christmas Island</option>
                           <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                           <option value="Colombia">Colombia</option>
                           <option value="Comoros">Comoros</option>
                           <option value="Congo">Congo</option>
                           <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                           <option value="Cook Islands">Cook Islands</option>
                           <option value="Costa Rica">Costa Rica</option>
                           <option value="Cote D'ivoire">Cote D'ivoire</option>
                           <option value="Croatia">Croatia</option>
                           <option value="Cuba">Cuba</option>
                           <option value="Cyprus">Cyprus</option>
                           <option value="Czech Republic">Czech Republic</option>
                           <option value="Denmark">Denmark</option>
                           <option value="Djibouti">Djibouti</option>
                           <option value="Dominica">Dominica</option>
                           <option value="Dominican Republic">Dominican Republic</option>
                           <option value="Ecuador">Ecuador</option>
                           <option value="Egypt">Egypt</option>
                           <option value="El Salvador">El Salvador</option>
                           <option value="Equatorial Guinea">Equatorial Guinea</option>
                           <option value="Eritrea">Eritrea</option>
                           <option value="Estonia">Estonia</option>
                           <option value="Ethiopia">Ethiopia</option>
                           <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                           <option value="Faroe Islands">Faroe Islands</option>
                           <option value="Fiji">Fiji</option>
                           <option value="Finland">Finland</option>
                           <option value="France">France</option>
                           <option value="French Guiana">French Guiana</option>
                           <option value="French Polynesia">French Polynesia</option>
                           <option value="French Southern Territories">French Southern Territories</option>
                           <option value="Gabon">Gabon</option>
                           <option value="Gambia">Gambia</option>
                           <option value="Georgia">Georgia</option>
                           <option value="Germany">Germany</option>
                           <option value="Ghana">Ghana</option>
                           <option value="Gibraltar">Gibraltar</option>
                           <option value="Greece">Greece</option>
                           <option value="Greenland">Greenland</option>
                           <option value="Grenada">Grenada</option>
                           <option value="Guadeloupe">Guadeloupe</option>
                           <option value="Guam">Guam</option>
                           <option value="Guatemala">Guatemala</option>
                           <option value="Guernsey">Guernsey</option>
                           <option value="Guinea">Guinea</option>
                           <option value="Guinea-bissau">Guinea-bissau</option>
                           <option value="Guyana">Guyana</option>
                           <option value="Haiti">Haiti</option>
                           <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                           <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                           <option value="Honduras">Honduras</option>
                           <option value="Hong Kong">Hong Kong</option>
                           <option value="Hungary">Hungary</option>
                           <option value="Iceland">Iceland</option>
                           <option value="India">India</option>
                           <option value="Indonesia">Indonesia</option>
                           <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                           <option value="Iraq">Iraq</option>
                           <option value="Ireland">Ireland</option>
                           <option value="Isle of Man">Isle of Man</option>
                           <option value="Israel">Israel</option>
                           <option value="Italy">Italy</option>
                           <option value="Jamaica">Jamaica</option>
                           <option value="Japan">Japan</option>
                           <option value="Jersey">Jersey</option>
                           <option value="Jordan">Jordan</option>
                           <option value="Kazakhstan">Kazakhstan</option>
                           <option value="Kenya">Kenya</option>
                           <option value="Kiribati">Kiribati</option>
                           <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                           <option value="Korea, Republic of">Korea, Republic of</option>
                           <option value="Kuwait">Kuwait</option>
                           <option value="Kyrgyzstan">Kyrgyzstan</option>
                           <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                           <option value="Latvia">Latvia</option>
                           <option value="Lebanon">Lebanon</option>
                           <option value="Lesotho">Lesotho</option>
                           <option value="Liberia">Liberia</option>
                           <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                           <option value="Liechtenstein">Liechtenstein</option>
                           <option value="Lithuania">Lithuania</option>
                           <option value="Luxembourg">Luxembourg</option>
                           <option value="Macao">Macao</option>
                           <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                           <option value="Madagascar">Madagascar</option>
                           <option value="Malawi">Malawi</option>
                           <option value="Malaysia">Malaysia</option>
                           <option value="Maldives">Maldives</option>
                           <option value="Mali">Mali</option>
                           <option value="Malta">Malta</option>
                           <option value="Marshall Islands">Marshall Islands</option>
                           <option value="Martinique">Martinique</option>
                           <option value="Mauritania">Mauritania</option>
                           <option value="Mauritius">Mauritius</option>
                           <option value="Mayotte">Mayotte</option>
                           <option value="Mexico">Mexico</option>
                           <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                           <option value="Moldova, Republic of">Moldova, Republic of</option>
                           <option value="Monaco">Monaco</option>
                           <option value="Mongolia">Mongolia</option>
                           <option value="Montenegro">Montenegro</option>
                           <option value="Montserrat">Montserrat</option>
                           <option value="Morocco">Morocco</option>
                           <option value="Mozambique">Mozambique</option>
                           <option value="Myanmar">Myanmar</option>
                           <option value="Namibia">Namibia</option>
                           <option value="Nauru">Nauru</option>
                           <option value="Nepal">Nepal</option>
                           <option value="Netherlands">Netherlands</option>
                           <option value="Netherlands Antilles">Netherlands Antilles</option>
                           <option value="New Caledonia">New Caledonia</option>
                           <option value="New Zealand">New Zealand</option>
                           <option value="Nicaragua">Nicaragua</option>
                           <option value="Niger">Niger</option>
                           <option value="Nigeria">Nigeria</option>
                           <option value="Niue">Niue</option>
                           <option value="Norfolk Island">Norfolk Island</option>
                           <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                           <option value="Norway">Norway</option>
                           <option value="Oman">Oman</option>
                           <option value="Pakistan">Pakistan</option>
                           <option value="Palau">Palau</option>
                           <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                           <option value="Panama">Panama</option>
                           <option value="Papua New Guinea">Papua New Guinea</option>
                           <option value="Paraguay">Paraguay</option>
                           <option value="Peru">Peru</option>
                           <option value="Philippines">Philippines</option>
                           <option value="Pitcairn">Pitcairn</option>
                           <option value="Poland">Poland</option>
                           <option value="Portugal">Portugal</option>
                           <option value="Puerto Rico">Puerto Rico</option>
                           <option value="Qatar">Qatar</option>
                           <option value="Reunion">Reunion</option>
                           <option value="Romania">Romania</option>
                           <option value="Russian Federation">Russian Federation</option>
                           <option value="Rwanda">Rwanda</option>
                           <option value="Saint Helena">Saint Helena</option>
                           <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                           <option value="Saint Lucia">Saint Lucia</option>
                           <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                           <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                           <option value="Samoa">Samoa</option>
                           <option value="San Marino">San Marino</option>
                           <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                           <option value="Saudi Arabia">Saudi Arabia</option>
                           <option value="Senegal">Senegal</option>
                           <option value="Serbia">Serbia</option>
                           <option value="Seychelles">Seychelles</option>
                           <option value="Sierra Leone">Sierra Leone</option>
                           <option value="Singapore">Singapore</option>
                           <option value="Slovakia">Slovakia</option>
                           <option value="Slovenia">Slovenia</option>
                           <option value="Solomon Islands">Solomon Islands</option>
                           <option value="Somalia">Somalia</option>
                           <option value="South Africa">South Africa</option>
                           <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                           <option value="Spain">Spain</option>
                           <option value="Sri Lanka">Sri Lanka</option>
                           <option value="Sudan">Sudan</option>
                           <option value="Suriname">Suriname</option>
                           <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                           <option value="Swaziland">Swaziland</option>
                           <option value="Sweden">Sweden</option>
                           <option value="Switzerland">Switzerland</option>
                           <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                           <option value="Taiwan">Taiwan</option>
                           <option value="Tajikistan">Tajikistan</option>
                           <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                           <option value="Thailand">Thailand</option>
                           <option value="Timor-leste">Timor-leste</option>
                           <option value="Togo">Togo</option>
                           <option value="Tokelau">Tokelau</option>
                           <option value="Tonga">Tonga</option>
                           <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                           <option value="Tunisia">Tunisia</option>
                           <option value="Turkey">Turkey</option>
                           <option value="Turkmenistan">Turkmenistan</option>
                           <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                           <option value="Tuvalu">Tuvalu</option>
                           <option value="Uganda">Uganda</option>
                           <option value="Ukraine">Ukraine</option>
                           <option value="United Arab Emirates">United Arab Emirates</option>
                           <option value="United Kingdom">United Kingdom</option>
                           <option value="United States">United States</option>
                           <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                           <option value="Uruguay">Uruguay</option>
                           <option value="Uzbekistan">Uzbekistan</option>
                           <option value="Vanuatu">Vanuatu</option>
                           <option value="Venezuela">Venezuela</option>
                           <option value="Viet Nam">Viet Nam</option>
                           <option value="Virgin Islands, British">Virgin Islands, British</option>
                           <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                           <option value="Wallis and Futuna">Wallis and Futuna</option>
                           <option value="Western Sahara">Western Sahara</option>
                           <option value="Yemen">Yemen</option>
                           <option value="Zambia">Zambia</option>
                           <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-12 col-xl-2 col-xxl-2 mb-3">
                     <label class="form-label">Firewall</label>
                     <div class="input-group w-full" data-placement="bottom" data-align="top" data-autobtn-close="true">
                        <select name="" id="" class="form-control input-default">
                           <option value="off">OFF</option>
                           <option value="on">ON</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-12 col-xl-2 col-xxl-2 mb-3 d-flex align-items-end">    
                     <button type="button" class="bg-primary w-100 rounded-2 py-2 mb-1 px-button border-transparent text-white"  >Generate</button>                  
                  </div>
               </div>
            </div>
            <div class="btns-section d-flex flex-row justify-content-center justify-content-lg-start gap-2 pb-2 px-4 mx-2">
            <button class="bg-button-red text-white px-4 py-1-5 rounded-2 ">
                  <a href="#" class="d-flex flex-row gap-1 align-items-center text-white">
                     <i class="fa-solid fa-link"></i>
                     TUTORIAL
                  </a>
               </button>
                              
               <button class="bg-button-orange text-white px-4 py-1-5 rounded-2">
                  <a href="" class="flex flex-row gap-1 align-items-center text-white">
                     <i class="fa-solid fa-download"></i>
                     DOWNLOAD SHORTLINK v1.0.1
                  </a></button>

            </div>
            <div class="static my-2">
               <div class="page-titles d-flex flex-lg-row flex-column gap-lg-0 gap-2 justify-content-between border border-secondary mx-4 py-3 align-items-center">
                  <div class="mb-lg-0 ">
                     <h5 class="dark:text-white text-black h6">Blocker Statistics</h5>
                     <p>Last Update : Wed, 18 Oct 2023 - 07:42:43 PM</p>
                  </div>
                  <table class="table-fixed text-center">
                     <thead>
                        <tr class="">
                           <th class="pr-1 p-lg-2 px-2">Real visitors</th>
                           <th class="pr-1 p-lg-2 px-2">Bots</th>
                           <th class="pr-1 p-lg-2 px-2">Total Visitor</th>
                        </tr>
                     </thead>
                     <tbody class="dark:text-white text-black h5">
                        <tr>
                           <td class="pr-1 p-lg-2 px-2">129</td>
                           <td class="pr-1 p-lg-2 px-2">38</td>
                           <td class="pr-1 p-lg-2 px-2">167</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
               <div class="col-12">
                  <div class="card">
                     <div class="card-header">
                        <h4 class="card-title">Data</h4>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                           <div id="example_wrapper" class="dataTables_wrapper">
                              <table id="example" class="display dataTable w-full" style="min-width: 845px" aria-describedby="example_info">
                                 <thead>
                                    <tr class="font-weight-normal h-6">
                                       <th class="fw-normal	 sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" >CREATED UPDATED</th>
                                       <th class="fw-normal	 sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">KEYNAME</th>
                                       <th class="fw-normal sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">VISITOR REDIRECTION</th>
                                       <th class="fw-normal sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">REAL VISITOR</th>
                                       <th class="fw-normal sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >BOT</th>
                                       <th class="fw-normal sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">TOTAL VISITORS</th>
                                       <th class="fw-normal sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">STATUS</th>
                                       <th class="fw-normal sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1">ACTION</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr class="font-weight-normal h-6 text-center">

                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection