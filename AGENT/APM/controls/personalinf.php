<?php
require('zdze8efzedzdeezd/de5.php');
$idag=$_POST['idag'];

$showpers=$cdb->prepare("SELECT * FROM agents WHERE ag_id='$idag'");
$showpers->execute();
if ($showpers===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resinfo=$showpers->get_result();
  	while ($showinfo=$resinfo->fetch_row()) {?>
		<div class="tab-pane fade show active" id="kt_profile_tab_personal_information" role="tabpanel">
													<div class="kt-portlet">
														<div class="kt-portlet__head">
															<div class="kt-portlet__head-label">
																<h3 class="kt-portlet__head-title">Personal Information <small>update your personal informations</small></h3>
															</div>
														</div>
														<form  class="forminfo kt-form kt-form--label-right">
															<div class="kt-portlet__body">
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">
																		<div class="row">
																			<label class="col-xl-3"></label>
																			<div class="col-lg-9 col-xl-6">
																				<h3 class="kt-section__title kt-section__title-sm">Customer Info:</h3>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
																			<div class="col-lg-9 col-xl-6">
																				<div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_profile_avatar">
																					<div class="kt-avatar__holder" style="background-image: url(img/agents/agent1.png)"></div>
																					<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Change avatar">
																						<i class="fa fa-pen"></i>
																						<input type='file' name="profile_avatar" />
																					</label>
																					<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel avatar">
																						<i class="fa fa-times"></i>
																					</span>
																				</div>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
																			<div class="col-lg-9 col-xl-6">
																				<input class="form-control" name="upname" type="text" value="<?php echo $showinfo[1];?>">
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
																			<div class="col-lg-9 col-xl-6">
																				<input class="form-control" name="upnamelast" type="text" value="">
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Company Name</label>
																			<div class="col-lg-9 col-xl-6">
																				<input class="form-control" type="text" readonly="readonly" value="GENIWORKS Inc.">
																				<span class="form-text text-muted">blabla here</span>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
																			<div class="col-lg-9 col-xl-6">
																				<div class="input-group">
																					<div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
																					<input type="text" class="form-control" name="upphone" value="<?php echo $showinfo[2];?>" placeholder="Phone" aria-describedby="basic-addon1">
																				</div>
																				<span class="form-text text-muted">bla bla here</span>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
																			<div class="col-lg-9 col-xl-6">
																				<div class="input-group">
																					<div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
																					<input type="text" class="form-control" name="upemail" value="...@geniworks.com" placeholder="Email" aria-describedby="basic-addon1">
																				</div>
																			</div>
																		</div>
																		<div class="form-group form-group-last row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Active On</label>
																			<div class="col-lg-9 col-xl-6">
																				<?php if ($showinfo[9]=='11') {
																				
																				?>
																				<div class="input-group">
																					<input type="text" class="form-control" name="upsite" placeholder="APM TERMINAL" value="APM-1">
																					<div class="input-group-append"><span class="input-group-text">APM TERMINAL</span></div>
																				</div>
																			<?php }?>
																			<?php if ($showinfo[9]=='12') {
																				
																				?>
																				<div class="input-group">
																					<input type="text" class="form-control" name="upsite" placeholder="APM TERMINAL" value="APM-2">
																					<div class="input-group-append"><span class="input-group-text">APM TERMINAL</span></div>
																				</div>
																			<?php }?>
																			<?php if ($showinfo[9]=='21') {
																				
																				?>
																				<div class="input-group">
																					<input type="text" class="form-control" name="upsite" placeholder="EUROGATE" value="EUROGATE">
																					<div class="input-group-append"><span class="input-group-text">EUROGATE</span></div>
																				</div>
																			<?php }?>
																			<?php if ($showinfo[9]=='31') {
																				
																				?>
																				<div class="input-group">
																					<input type="text" class="form-control" name="upsite" placeholder="MARSA MAROC" value="MM-DE">
																					<div class="input-group-append"><span class="input-group-text">MARSA MAROC</span></div>
																				</div>
																			<?php }?>
																			<?php if ($showinfo[9]=='32') {
																				
																				?>
																				<div class="input-group">
																					<input type="text" class="form-control" name="upsite" placeholder="MARSA MAROC" value="MM-TC3">
																					<div class="input-group-append"><span class="input-group-text">MARSA MAROC</span></div>
																				</div>
																			<?php }?>
																			<?php if ($showinfo[9]=='41') {
																				
																				?>
																				<div class="input-group">
																					<input type="text" class="form-control" name="upsite" placeholder="BMCI" value="BMCI">
																					<div class="input-group-append"><span class="input-group-text">BMCI</span></div>
																				</div>
																			<?php }?>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
																<div class="kt-section kt-section--first">
																	<div class="kt-section__body">
																		<div class="row">
																			<label class="col-xl-3"></label>
																			<div class="col-lg-9 col-xl-6">
																				<h3 class="kt-section__title kt-section__title-sm">Address Details:</h3>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Country</label>
																			<div class="col-lg-9 col-xl-6">
																				<select class="form-control"  name="upcountry">
																					<option value="AF">Afghanistan</option>
																					<option value="AX">??land Islands</option>
																					<option value="AL">Albania</option>
																					<option value="DZ">Algeria</option>
																					<option value="AS">American Samoa</option>
																					<option value="AD">Andorra</option>
																					<option value="AO">Angola</option>
																					<option value="AI">Anguilla</option>
																					<option value="AQ">Antarctica</option>
																					<option value="AG">Antigua and Barbuda</option>
																					<option value="AR">Argentina</option>
																					<option value="AM">Armenia</option>
																					<option value="AW">Aruba</option>
																					<option value="AU">Australia</option>
																					<option value="AT">Austria</option>
																					<option value="AZ">Azerbaijan</option>
																					<option value="BS">Bahamas</option>
																					<option value="BH">Bahrain</option>
																					<option value="BD">Bangladesh</option>
																					<option value="BB">Barbados</option>
																					<option value="BY">Belarus</option>
																					<option value="BE">Belgium</option>
																					<option value="BZ">Belize</option>
																					<option value="BJ">Benin</option>
																					<option value="BM">Bermuda</option>
																					<option value="BT">Bhutan</option>
																					<option value="BO">Bolivia, Plurinational State of</option>
																					<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																					<option value="BA">Bosnia and Herzegovina</option>
																					<option value="BW">Botswana</option>
																					<option value="BV">Bouvet Island</option>
																					<option value="BR">Brazil</option>
																					<option value="IO">British Indian Ocean Territory</option>
																					<option value="BN">Brunei Darussalam</option>
																					<option value="BG">Bulgaria</option>
																					<option value="BF">Burkina Faso</option>
																					<option value="BI">Burundi</option>
																					<option value="KH">Cambodia</option>
																					<option value="CM">Cameroon</option>
																					<option value="CA">Canada</option>
																					<option value="CV">Cape Verde</option>
																					<option value="KY">Cayman Islands</option>
																					<option value="CF">Central African Republic</option>
																					<option value="TD">Chad</option>
																					<option value="CL">Chile</option>
																					<option value="CN">China</option>
																					<option value="CX">Christmas Island</option>
																					<option value="CC">Cocos (Keeling) Islands</option>
																					<option value="CO">Colombia</option>
																					<option value="KM">Comoros</option>
																					<option value="CG">Congo</option>
																					<option value="CD">Congo, the Democratic Republic of the</option>
																					<option value="CK">Cook Islands</option>
																					<option value="CR">Costa Rica</option>
																					<option value="CI">C??te d'Ivoire</option>
																					<option value="HR">Croatia</option>
																					<option value="CU">Cuba</option>
																					<option value="CW">Cura??ao</option>
																					<option value="CY">Cyprus</option>
																					<option value="CZ">Czech Republic</option>
																					<option value="DK">Denmark</option>
																					<option value="DJ">Djibouti</option>
																					<option value="DM">Dominica</option>
																					<option value="DO">Dominican Republic</option>
																					<option value="EC">Ecuador</option>
																					<option value="EG">Egypt</option>
																					<option value="SV">El Salvador</option>
																					<option value="GQ">Equatorial Guinea</option>
																					<option value="ER">Eritrea</option>
																					<option value="EE">Estonia</option>
																					<option value="ET">Ethiopia</option>
																					<option value="FK">Falkland Islands (Malvinas)</option>
																					<option value="FO">Faroe Islands</option>
																					<option value="FJ">Fiji</option>
																					<option value="FI">Finland</option>
																					<option value="FR">France</option>
																					<option value="GF">French Guiana</option>
																					<option value="PF">French Polynesia</option>
																					<option value="TF">French Southern Territories</option>
																					<option value="GA">Gabon</option>
																					<option value="GM">Gambia</option>
																					<option value="GE">Georgia</option>
																					<option value="DE">Germany</option>
																					<option value="GH">Ghana</option>
																					<option value="GI">Gibraltar</option>
																					<option value="GR">Greece</option>
																					<option value="GL">Greenland</option>
																					<option value="GD">Grenada</option>
																					<option value="GP">Guadeloupe</option>
																					<option value="GU">Guam</option>
																					<option value="GT">Guatemala</option>
																					<option value="GG">Guernsey</option>
																					<option value="GN">Guinea</option>
																					<option value="GW">Guinea-Bissau</option>
																					<option value="GY">Guyana</option>
																					<option value="HT">Haiti</option>
																					<option value="HM">Heard Island and McDonald Islands</option>
																					<option value="VA">Holy See (Vatican City State)</option>
																					<option value="HN">Honduras</option>
																					<option value="HK">Hong Kong</option>
																					<option value="HU">Hungary</option>
																					<option value="IS">Iceland</option>
																					<option value="IN">India</option>
																					<option value="ID">Indonesia</option>
																					<option value="IR">Iran, Islamic Republic of</option>
																					<option value="IQ">Iraq</option>
																					<option value="IE">Ireland</option>
																					<option value="IM">Isle of Man</option>
																					<option value="IL">Israel</option>
																					<option value="IT">Italy</option>
																					<option value="JM">Jamaica</option>
																					<option value="JP">Japan</option>
																					<option value="JE">Jersey</option>
																					<option value="JO">Jordan</option>
																					<option value="KZ">Kazakhstan</option>
																					<option value="KE">Kenya</option>
																					<option value="KI">Kiribati</option>
																					<option value="KP">Korea, Democratic People's Republic of</option>
																					<option value="KR">Korea, Republic of</option>
																					<option value="KW">Kuwait</option>
																					<option value="KG">Kyrgyzstan</option>
																					<option value="LA">Lao People's Democratic Republic</option>
																					<option value="LV">Latvia</option>
																					<option value="LB">Lebanon</option>
																					<option value="LS">Lesotho</option>
																					<option value="LR">Liberia</option>
																					<option value="LY">Libya</option>
																					<option value="LI">Liechtenstein</option>
																					<option value="LT">Lithuania</option>
																					<option value="LU">Luxembourg</option>
																					<option value="MO">Macao</option>
																					<option value="MK">Macedonia, the former Yugoslav Republic of</option>
																					<option value="MG">Madagascar</option>
																					<option value="MW">Malawi</option>
																					<option value="MY">Malaysia</option>
																					<option value="MV">Maldives</option>
																					<option value="ML">Mali</option>
																					<option value="MT">Malta</option>
																					<option value="MH">Marshall Islands</option>
																					<option value="MQ">Martinique</option>
																					<option value="MR">Mauritania</option>
																					<option value="MU">Mauritius</option>
																					<option value="YT">Mayotte</option>
																					<option value="MX">Mexico</option>
																					<option value="FM">Micronesia, Federated States of</option>
																					<option value="MD">Moldova, Republic of</option>
																					<option value="MC">Monaco</option>
																					<option value="MN">Mongolia</option>
																					<option value="ME">Montenegro</option>
																					<option value="MS">Montserrat</option>
																					<option value="MA" selected="selected">Morocco</option>
																					<option value="MZ">Mozambique</option>
																					<option value="MM">Myanmar</option>
																					<option value="NA">Namibia</option>
																					<option value="NR">Nauru</option>
																					<option value="NP">Nepal</option>
																					<option value="NL">Netherlands</option>
																					<option value="NC">New Caledonia</option>
																					<option value="NZ">New Zealand</option>
																					<option value="NI">Nicaragua</option>
																					<option value="NE">Niger</option>
																					<option value="NG">Nigeria</option>
																					<option value="NU">Niue</option>
																					<option value="NF">Norfolk Island</option>
																					<option value="MP">Northern Mariana Islands</option>
																					<option value="NO">Norway</option>
																					<option value="OM">Oman</option>
																					<option value="PK">Pakistan</option>
																					<option value="PW">Palau</option>
																					<option value="PS">Palestinian Territory, Occupied</option>
																					<option value="PA">Panama</option>
																					<option value="PG">Papua New Guinea</option>
																					<option value="PY">Paraguay</option>
																					<option value="PE">Peru</option>
																					<option value="PH">Philippines</option>
																					<option value="PN">Pitcairn</option>
																					<option value="PL">Poland</option>
																					<option value="PT">Portugal</option>
																					<option value="PR">Puerto Rico</option>
																					<option value="QA">Qatar</option>
																					<option value="RE">R??union</option>
																					<option value="RO">Romania</option>
																					<option value="RU">Russian Federation</option>
																					<option value="RW">Rwanda</option>
																					<option value="BL">Saint Barth??lemy</option>
																					<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
																					<option value="KN">Saint Kitts and Nevis</option>
																					<option value="LC">Saint Lucia</option>
																					<option value="MF">Saint Martin (French part)</option>
																					<option value="PM">Saint Pierre and Miquelon</option>
																					<option value="VC">Saint Vincent and the Grenadines</option>
																					<option value="WS">Samoa</option>
																					<option value="SM">San Marino</option>
																					<option value="ST">Sao Tome and Principe</option>
																					<option value="SA">Saudi Arabia</option>
																					<option value="SN">Senegal</option>
																					<option value="RS">Serbia</option>
																					<option value="SC">Seychelles</option>
																					<option value="SL">Sierra Leone</option>
																					<option value="SG">Singapore</option>
																					<option value="SX">Sint Maarten (Dutch part)</option>
																					<option value="SK">Slovakia</option>
																					<option value="SI">Slovenia</option>
																					<option value="SB">Solomon Islands</option>
																					<option value="SO">Somalia</option>
																					<option value="ZA">South Africa</option>
																					<option value="GS">South Georgia and the South Sandwich Islands</option>
																					<option value="SS">South Sudan</option>
																					<option value="ES">Spain</option>
																					<option value="LK">Sri Lanka</option>
																					<option value="SD">Sudan</option>
																					<option value="SR">Suriname</option>
																					<option value="SJ">Svalbard and Jan Mayen</option>
																					<option value="SZ">Swaziland</option>
																					<option value="SE">Sweden</option>
																					<option value="CH">Switzerland</option>
																					<option value="SY">Syrian Arab Republic</option>
																					<option value="TW">Taiwan, Province of China</option>
																					<option value="TJ">Tajikistan</option>
																					<option value="TZ">Tanzania, United Republic of</option>
																					<option value="TH">Thailand</option>
																					<option value="TL">Timor-Leste</option>
																					<option value="TG">Togo</option>
																					<option value="TK">Tokelau</option>
																					<option value="TO">Tonga</option>
																					<option value="TT">Trinidad and Tobago</option>
																					<option value="TN">Tunisia</option>
																					<option value="TR">Turkey</option>
																					<option value="TM">Turkmenistan</option>
																					<option value="TC">Turks and Caicos Islands</option>
																					<option value="TV">Tuvalu</option>
																					<option value="UG">Uganda</option>
																					<option value="UA">Ukraine</option>
																					<option value="AE">United Arab Emirates</option>
																					<option value="GB">United Kingdom</option>
																					<option value="US">United States</option>
																					<option value="UM">United States Minor Outlying Islands</option>
																					<option value="UY">Uruguay</option>
																					<option value="UZ">Uzbekistan</option>
																					<option value="VU">Vanuatu</option>
																					<option value="VE">Venezuela, Bolivarian Republic of</option>
																					<option value="VN">Viet Nam</option>
																					<option value="VG">Virgin Islands, British</option>
																					<option value="VI">Virgin Islands, U.S.</option>
																					<option value="WF">Wallis and Futuna</option>
																					<option value="EH">Western Sahara</option>
																					<option value="YE">Yemen</option>
																					<option value="ZM">Zambia</option>
																					<option value="ZW">Zimbabwe</option>
																				</select>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Address Line 1</label>
																			<div class="col-lg-9 col-xl-6">
																				<input class="form-control" type="text" name="upadress1" value="<?php echo $showinfo[4];?>">
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Address Line 2</label>
																			<div class="col-lg-9 col-xl-6">
																				<input class="form-control" type="text" name="upadress2" value="Somewhere Here 2">
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">City</label>
																			<div class="col-lg-9 col-xl-6">
																				<input class="form-control" type="text" name="upcity" value="Tangier">
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">State / Province / Region</label>
																			<div class="col-lg-9 col-xl-6">
																				<input class="form-control" type="text"  name="upregion" value="Tangier - Tetouan - ELhouceima">
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">Zip / Postal Code</label>
																			<div class="col-lg-9 col-xl-6">
																				<input class="form-control" type="text" name="uppcode" value="90000">
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label"></label>
																			<div class="col-lg-9 col-xl-6">
																				<div class="kt-checkbox-single">
																					<label class="kt-checkbox">
																						<input type="checkbox"> Send Message To Him
																						<span></span>
																					</label>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="kt-portlet__foot">
																<div class="kt-form__actions">
																	<div class="row">
																		<div class="col-lg-3 col-xl-3">
																		</div>
																		<div class="col-lg-9 col-xl-9">
																			<input type="hidden" name="agentid" value="<?php echo $showinfo[0];?>">
																			<button type="Submit" class="btn btn-brand">Submit</button>&nbsp;
																			<button type="reset" class="btn btn-secondary">Cancel</button>
																		</div>
																	</div>
																</div>
															</div>
														</form>
													</div>
												</div>


<script>
      $(function () {
        $('.forminfo<?php echo  "$showinfo[0]";?>').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'post',
            url: 'controls/updateinfo.php',
            data: $('.forminfo<?php echo  "$showinfo[0]";?>').serialize(),
            success: function () {
              alert('<?php echo  "$showinfo[1] ";?> Personal Informations Successfully Updated. ');
            }
          });

        });

      });
</script>

<?php }}?>