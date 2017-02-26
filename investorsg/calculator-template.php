<?php
/**
 * Template Name: Calculator Template
 * This tempalte file is used for contact pages.
 */

?>

<?php
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>

<?php get_header();?>
		<form method="get" onsubmit="_gaq.push(['_trackEvent','mortgageform','submitted','redbrick'])" class="" name="package-form" autocomplete="on" id="package-form" action="">
			<input type="hidden" id="refreshed" value="yes">
			<input type="hidden" name="_token" value="Bb5pTDI7pp0jxSkVWDfNQkLrTpNtcPO5TZ2c6OgO" id="_token">
			<input type="hidden" id="current_tab" name="current_tab" value="new_loan_tab">
			<input type="hidden" id="current_property" name="current_property" value="commercial">
			<input type="text" hidden="" onkeypress="return false;" id="current_financer_ddl" name="current_financer_ddl" value="" style="z-index:-1; position:absolute;">
			<div class="p-form p-shadowed p-form-lg p-form-custom p-shadowed-custom">

				<div id="" class="col-sm-12">
					<div class="row-block clearfix">
					   <div id="loan_type_id" >
					      <div class="col-sm-6 no-side-padding field-area">
					         <div class="form-group form-group-custom">
					            <div class="col-sm-12 col-md-12 radio-blocks-label">
					               <label class="radio-blocks-custom" for="radio-blocks">Loan Type *</label>
					            </div>
					            <div class="col-sm-12 col-md-12 no-side-padding-custom field-block clearfix">
					               <div class="p-form-cg pt-form-inline">
					                  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-4 no-side-padding radio">
					                     <label>
					                     <input class="package-radio-input update-tab" type="radio" id="loan_type_radio-1" name="loan_type_radio" value="new_loan_tab" checked="checked" data-page-type="new_loan_tab">
					                     <div class="check"></div>
					                     <span class="radio-label">New Loan</span>
					                     </label>
					                  </div>
					                  <div class="col-xs-6 col-sm-5 col-md-4 col-lg-4 no-side-padding radio">
					                     <label>
					                     <input class="package-radio-input update-tab" type="radio" id="loan_type_radio-2" name="loan_type_radio" value="refinance_tab" data-page-type="refinance_tab">
					                     <div class="check"></div>
					                     <span class="radio-label">Refinance</span>
					                     </label>
					                  </div>
					                  
					               </div>
					            </div>
					         </div>
					      </div>
					   </div>
					   <div id="property_type_id">
					      <div class="col-sm-6 no-side-padding field-area">
					         <div class="form-group form-group-custom">
					            <div class="col-sm-12 col-md-12 radio-blocks-label no-side-padding-right-col">
					               <label class="radio-blocks-custom" for="radio-blocks">Property Type *</label>
					            </div>
					            <div class="col-sm-12 col-md-12 no-side-padding-custom field-block clearfix no-side-padding-right-col">
					               <div class="p-form-cg pt-form-inline">
					                  <div class="col-xs-8 col-sm-6 col-md-4 col-lg-5 no-side-padding radio private-radio">
					                     <label>
					                     <input class="package-radio-input" type="radio" id="property_type_radio-1" name="property_type_radio" value="private" checked="checked">
					                     <div class="check"></div>
					                     <span class="radio-label">Private Residential</span>
					                     </label>
					                  </div>
					                  <div class="col-xs-4 col-sm-5 col-md-2 col-lg-3 no-side-padding radio">
					                     <label>
					                     <input class="package-radio-input" type="radio" id="property_type_radio-2" name="property_type_radio" value="hdb">
					                     <div class="check"></div>
					                     <span class="radio-label">HDB</span>
					                     </label>
					                  </div>
					                  <div class="col-xs-6 col-sm-5 col-md-3 col-lg-4 no-side-padding radio">
					                     <label>
					                     <input class="package-radio-input" type="radio" id="property_type_radio-3" name="property_type_radio" value="commercial">
					                     <div class="check"></div>
					                     <span class="radio-label">Commercial</span>
					                     </label>
					                  </div>
					                  
					               </div>
					            </div>
					         </div>
					      </div>
					   </div>
					</div>   
					<div class="row-block clearfix">   
					   <div id="construction_status_id">
					      <div class="col-sm-6 no-side-padding field-area">
					         <div class="form-group form-group-custom">
					            <div class="col-sm-12 col-md-12 radio-blocks-label">
					               <label class="radio-blocks-custom" for="radio-blocks">Construction Status *</label>
					            </div>
					            <div class="col-sm-12 col-md-12 no-side-padding-custom field-block clearfix">
					               <div class="p-form-cg pt-form-inline">
					                  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-4 no-side-padding radio">
					                     <label>
					                     <input class="package-radio-input" type="radio" id="construction_status_radio-1" name="construction_status_radio" value="completed" checked="checked">
					                     <div class="check"></div>
					                     <span class="radio-label">Completed</span>
					                     </label>
					                  </div>
					                  <div class="col-xs-6 col-sm-5 col-md-4 col-lg-4 no-side-padding radio">
					                     <label>
					                     <input class="package-radio-input" type="radio" id="construction_status_radio-2" name="construction_status_radio" value="under-construction">
					                     <div class="check"></div>
					                     <span class="radio-label">Uncompleted</span>
					                     </label>
					                  </div>
					               </div>
					            </div>
					            <div class="col-xs-12 col-sm-12">
					               <span class="p-field-sub-text package-radio-desc">Is the property already built or under construction?</span>
					            </div>
					         </div>
					         <br>
					      </div>
					   </div>
					   <div id="property_purchase_id">
					      <div class="col-sm-6 no-side-padding field-area">
					         <div class="form-group form-group-custom">
					            <div class="col-sm-12 col-md-12 radio-blocks-label no-side-padding-right-col">
					               <label class="radio-blocks-custom" for="radio-blocks">Property Purchase *</label>
					            </div>
					            <div class="col-sm-12 col-md-12 no-side-padding-custom field-block clearfix no-side-padding-right-col">
					               <div class="p-form-cg pt-form-inline">
					                  <div class="col-xs-6 col-sm-5 col-md-3 col-lg-4 no-side-padding radio">
					                     <label>
					                     <input class="package-radio-input" type="radio" id="property_purchase_radio-1" name="property_purchase_radio" value="yes" checked="checked">
					                     <div class="check"></div>
					                     <span class="radio-label">Yes</span>
					                     </label>
					                  </div>
					                  <div class="col-xs-6 col-sm-5 col-md-2 col-lg-3 no-side-padding radio">
					                     <label>
					                     <input class="package-radio-input" type="radio" id="property_purchase_radio-2" name="property_purchase_radio" value="no">
					                     <div class="check"></div>
					                     <span class="radio-label">No</span>
					                     </label>
					                  </div>
					               </div>
					            </div>
					            <div class="col-xs-12 col-sm-12 no-side-padding-right-col">
					               <span class="p-field-sub-text package-radio-desc">Have you purchased your property?</span>
					            </div>
					         </div>
					         <br>
					      </div>
					   </div>
					</div>
					<div class="row-block clearfix">   
					   <div id="rates_id">
					      <div class="col-sm-6 no-side-padding field-area">
					         <div class="form-group form-group-custom">
					            <div class="col-sm-12 col-md-12 radio-blocks-label">
					               <label class="radio-blocks-custom" for="radio-blocks">Fixed or Floating Rates *</label>
					            </div>
					            <div class="col-sm-12 col-md-12 no-side-padding-custom field-block clearfix">
					               <div class="p-form-cg pt-form-inline">
					                  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-4 no-side-padding radio">
					                     <label>
					                     <input class="package-radio-input" type="radio" id="rates_radio-3" name="rates_radio" value="unknown" checked="checked">
					                     <div class="check"></div>
					                     <span class="radio-label">Both</span>
					                     </label>
					                  </div>
					                  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-4 no-side-padding radio">
					                     <label>
					                     <input class="package-radio-input" type="radio" id="rates_radio-1" name="rates_radio" value="fixed">
					                     <div class="check"></div>
					                     <span class="radio-label">Fixed</span>
					                     </label>
					                  </div>
					                  <div class="col-xs-5 col-sm-4 col-md-3 col-lg-3 no-side-padding radio">
					                     <label>
					                     <input class="package-radio-input" type="radio" id="rates_radio-2" name="rates_radio" value="floating">
					                     <div class="check"></div>
					                     <span class="radio-label">Floating</span>
					                     </label>
					                  </div>
					               </div>
					            </div>
					            <div class="col-xs-12 col-sm-12">
					               <span class="p-field-sub-text package-radio-desc">Do you prefer fixed or floating rates?</span>
					            </div>
					         </div>
					         <br>
					      </div>
					   </div>
					   <div class="hide" id="individual_or_company_radio_id">
					      <div class="col-sm-6 no-side-padding field-area">
					         <div class="form-group form-group-custom">
					            <div class="col-sm-12 col-md-12 radio-blocks-label no-side-padding-right-col">
					               <label class="radio-blocks-custom" for="radio-blocks">Individual or Company *</label>
					            </div>
					            <div class="col-sm-12 col-md-12 no-side-padding-custom field-block clearfix no-side-padding-right-col">
					               <div class="p-form-cg pt-form-inline">
					                  <div class="col-xs-6 col-sm-5 col-md-3 col-lg-4 no-side-padding radio">
					                     <label>
					                     <input class="package-radio-input"  type="radio" id="individual_or_company_radio-1" name="individual_or_company_radio" value="individual" checked="checked">
					                     <div class="check"></div>
					                     <span class="radio-label">Individual</span>
					                     </label>
					                  </div>
					                  <div class="col-xs-6 col-sm-5 col-md-4 col-lg-4 no-side-padding radio">
					                     <label>
					                     <input class="package-radio-input"  type="radio" id="individual_or_company_radio-2" name="individual_or_company_radio" value="company">
					                     <div class="check"></div>
					                     <span class="radio-label">Company</span>
					                     </label>
					                  </div>
					               </div>
					            </div>
					            <div class="col-xs-12 col-sm-12 no-side-padding-right-col">
					               <span class="p-field-sub-text package-radio-desc">Is the property owned by an individual or a company?</span>
					            </div>
					         </div>
					         <br>
					      </div>
					   </div>
					</div>
					<div class="row-block clearfix modern-p-form input-block">
						<div class="hide" id="existing_loan_amount_id">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="form-label">Existing Loan Amount</label>
									<div class="input-group p-has-icon color-scheme-group">
										<input class="form-control number center-input color-scheme-input" name="existing_loan_amount_txt" maxlength="17" placeholder="Existing Loan Amount" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" type="tel"id="existing_loan_amount_txt">
										<span class="input-group-state">
											<span class="p-position">
												<span class="p-text">
													<span class="p-valid-text"><i class="fa fa-check"></i></span>
													<span class="p-error-text"><i class="fa fa-times"></i></span>
												</span>
											</span>
										</span>
										<span class="p-field-cb"></span>
										<span class="input-group-icon"><i class="fa fa-home"></i></span>
									</div>
									<span class="p-field-sub-text text-error"></span>
								</div>
							</div>
						</div>
						<div id="current_financer_id" class="hide">
							<div class="col-sm-6">
								<div class="form-group">
									<div class="col-sm-12 no-side-padding">
										<label class="form-label" for="select-show-hide">Current Financer</label>
									</div>
									<div class="input-group p-custom-arrow form-group-financer color-scheme-group dropdown-block">
										<div class="dropdown input-group-btn select form-control dropdown-div" id="select1">
											<button type="button" style="background:white;" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<span class="selected selected-custom"><span class="dropdown-span-left">RHB</span><span><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/rhb.png"></span></span></button>
												<ul class="dropdown-menu option" role="menu">
													<li value="" class="option-disable"><span>-- Please Select --</span></li>
													<li data-toggle="dropdown" id="5">
														<span class="dropdown-span-left">ANZ</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/anz.png" alt="ANZ"></span>
													</li>

													<li data-toggle="dropdown" id="15">
														<span class="dropdown-span-left">BEA</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/bea.png" alt="BEA"></span>
													</li>

													<li data-toggle="dropdown" id="13">
														<span class="dropdown-span-left">BOC</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/boc.png" alt="BOC"></span>
													</li>

													<li data-toggle="dropdown" id="9">
														<span class="dropdown-span-left">CIMB</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/cimb.png" alt="CIMB"></span>
													</li>

													<li data-toggle="dropdown" id="1">
														<span class="dropdown-span-left">CITI</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI"></span>
													</li>

													<li data-toggle="dropdown" id="3">
														<span class="dropdown-span-left">DBS</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/dbs.png" alt="DBS"></span>
													</li>

													<li data-toggle="dropdown" id="10">
														<span class="dropdown-span-left">HLF</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/hlf.png" alt="HLF"></span>
													</li>

													<li data-toggle="dropdown" id="8">
														<span class="dropdown-span-left">HSBC</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/hsbc.png" alt="HSBC"></span>
													</li>

													<li data-toggle="dropdown" id="6">
														<span class="dropdown-span-left">MB</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/mbb.png" alt="MB"></span>
													</li>

													<li data-toggle="dropdown" id="16">
														<span class="dropdown-span-left">NAB </span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/nab.png" alt="NAB "></span>
													</li>

													<li data-toggle="dropdown" id="7">
														<span class="dropdown-span-left">OCBC</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/ocbc.png" alt="OCBC"></span>
													</li>

													<li data-toggle="dropdown" id="17">
														<span class="dropdown-span-left">POSB</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/posb.png" alt="POSB"></span>
													</li>

													<li data-toggle="dropdown" id="14">
														<span class="dropdown-span-left">RHB</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/rhb.png" alt="RHB"></span>
													</li>

													<li data-toggle="dropdown" id="18">
														<span class="dropdown-span-left">SBI</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/sbi.png" alt="SBI"></span>
													</li>

													<li data-toggle="dropdown" id="4">
														<span class="dropdown-span-left">SCB</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/scb.png" alt="SCB"></span>
													</li>

													<li data-toggle="dropdown" id="12">
														<span class="dropdown-span-left">SF</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/Singapura-Finance.png" alt="SF"></span>
													</li>

													<li data-toggle="dropdown" id="11">
														<span class="dropdown-span-left">SIF</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/Sing-Investment.png" alt="SIF"></span>
													</li>

													<li data-toggle="dropdown" id="2">
														<span class="dropdown-span-left">UOB</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/uob.png" alt="UOB"></span>
													</li>

													<li data-toggle="dropdown" id="19">
														<span class="dropdown-span-left">WESTPAC</span>
														<span class="dropdown-span-left"><img class="dropdown-img" src="https://mortgage.redbrick.sg/dist/img/westpac.png" alt="WESTPAC"></span>
													</li>

													<li value="Others">
														<span class="dropdown-span-left">Others</span>
														<span class="dropdown-span-left"></span>
													</li>
												</ul>

										</div>
										<span class="input-group-state">
											<span class="p-position">
												<span class="p-text">
													<span class="p-valid-text"><i class="fa fa-check"></i></span>
													<span class="p-error-text"><i class="fa fa-times"></i></span>
												</span>
											</span>
										</span>
										<span class="p-field-cb" style="z-index:-1;"></span>
										<span class="p-select-arrow p-select-arrow-custom" style="z-index:11;"><i class="fa fa-suitcase"></i></span>
										<span class="p-select-arrow dd" style="z-index:11;"><i class="fa fa-caret-down"></i></span>

									</div>
									<span class="p-field-sub-text text-error"></span>
								</div>
							</div>
						</div>
						<div id="current_interest_rate_id" class="hide">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="form-label">Current Interest  Rate</label>
									<div class="input-group p-has-icon color-scheme-group">
										<input class="form-control center-input color-scheme-input" maxlength="7" name="current_interest_rate_txt" placeholder="Current Interest Rate" type="tel" id="current_interest_rate_txt">
										<span class="input-group-state">
											<span class="p-position">
												<span class="p-text">
													<span class="p-valid-text"><i class="fa fa-check"></i></span>
													<span class="p-error-text"><i class="fa fa-times"></i></span>
												</span>
											</span>
										</span>
										<span class="p-field-cb"></span>
										<span class="input-group-icon"><i class="fa fa-percent"></i></span>
									</div>
									<span class="p-field-sub-text text-error"></span>
								</div>
							</div>
						</div>
						<div id="loan_ammount_id">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="form-label">Loan Amount</label>
									<div class="input-group p-has-icon color-scheme-group">
										<input class="form-control number center-input color-scheme-input" name="loan_amount_txt" maxlength="17" placeholder="Loan Amount" type="tel" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" id="loan_amount_txt">
										<span class="input-group-state">
											<span class="p-position">
												<span class="p-text">
													<span class="p-valid-text"><i class="fa fa-check"></i></span>
													<span class="p-error-text"><i class="fa fa-times"></i></span>
												</span>
											</span>
										</span>
										<span class="p-field-cb"></span>
										<span class="input-group-icon"><i class="fa fa-home"></i></span>
									</div>
									<span class="p-field-sub-text text-error"></span>
								</div>
							</div>
						</div>
						<div id="loan_tenure_id">
							<div class="col-sm-6">
								<div class="form-group" style="max-width: 300px !important;">
									<label class="form-label">Loan Tenure (Years)</label>
									<div class="input-group p-has-icon color-scheme-group">
										<input class="form-control center-input color-scheme-input" name="loan_tenure_txt" min="0" max="50" placeholder="Loan Tenure (Years)" onkeyup="loanTenure(this)" type="number" id="loan_tenure_txt">
										<span class="input-group-state">
											<span class="p-position">
												<span class="p-text">
													<span class="p-valid-text"><i class="fa fa-check"></i></span>
													<span class="p-error-text"><i class="fa fa-times"></i></span>
												</span>
											</span>
										</span>
										<span class="p-field-cb" id="loan_field"></span>
										<span class="input-group-icon tenure-button" id="tenure_minus"><i class="fa fa-minus"></i></span>
										<span class="input-group-addon tenure-button" id="tenure_plus">
											<span class="p-addon-bg" id="plus_bg" style="height:44px;"><i class="fa fa-plus"></i></span>
										</span>
									</div>
									<span class="p-field-sub-text text-error"></span>
								</div>
							</div>
						</div>
						<div id="contact_name_id">
							<div class="col-sm-6">
								<div class="form-group" >
									<label class="form-label">Name</label>
									<div class="input-group p-has-icon color-scheme-group">
										<input class="form-control center-input color-scheme-input" name="contact_name_txt" maxlength="50" placeholder="Contact Name" type="text" id="contact_name_txt">
										<span class="input-group-state">
											<span class="p-position">
												<span class="p-text">
													<span class="p-valid-text"><i class="fa fa-check"></i></span>
													<span class="p-error-text"><i class="fa fa-times"></i></span>
												</span>
											</span>
										</span>
										<span class="p-field-cb"></span>
										<span class="input-group-icon"><i class="fa fa-user"></i></span>
									</div>
									<span class="p-field-sub-text text-error"></span>
								</div>
							</div>
						</div>
						<div id="phone_id">
							<div class="col-sm-6">
								<div class="form-group" >
									<label class="form-label">Contact Number</label>
									<div class="input-group p-has-icon color-scheme-group">
									<input class="form-control center-input color-scheme-input" name="phone_txt" maxlength="15" type="tel" placeholder="Contact Number" id="phone_txt" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">
										<span class="input-group-state">
											<span class="p-position">
												<span class="p-text">
													<span class="p-valid-text"><i class="fa fa-check"></i></span>
													<span class="p-error-text"><i class="fa fa-times"></i></span>
												</span>
											</span>
										</span>
										<span class="p-field-cb"></span>
										<span class="input-group-icon"><i class="fa fa-phone"></i></span>
									</div>
									<span class="p-field-sub-text text-error"></span>
								</div>
							</div>
						</div>
						<div id="email_id">
							<div class="col-sm-6">
								<div class="form-group" >
									<label class="form-label">Email</label>
									<div class="input-group p-has-icon color-scheme-group">
										<input class="form-control center-input color-scheme-input" name="email_txt" maxlength="100" placeholder="Contact Email" type="text" id="email_txt">
										<span class="input-group-state">
											<span class="p-position">
												<span class="p-text">
													<span class="p-valid-text"><i class="fa fa-check"></i></span>
													<span class="p-error-text"><i class="fa fa-times"></i></span>
												</span>
											</span>
										</span>
										<span class="p-field-cb"></span>
										<span class="input-group-icon"><i class="fa fa-envelope"></i></span>
									</div>
									<span class="p-field-sub-text text-error"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 modern-p-form submit-block">
					<div class="p-block col-md-12">
						<div class="form-group">
							<div class="checkbox checkbox-custom">
								<label>
									<input type="checkbox" id="show-template-block" name="terms_checkbox">
									<span class="p-check-icon color-scheme-icon">
										<span class="p-check-block p-check-block-custom color-scheme-checkblock"></span>
									</span>
									<span class="p-label p-label-custom">I have read and agree with
										<label for="popup-form-id"><a href="#\" data-toggle="modal" data-target="#myModal" class="terms color-scheme-font">Terms of service</a></label>
									</span>
								</label>
							</div>
							<span class="p-field-sub-text text-error"></span>
						</div>
					</div>
					<div class="preview-btn text-left p-buttons submit_div">
						<div class="col-xs-12 col-sm-6">
						<button class="btn btn-custom btn-custom-submit color-scheme-background" id="submit" type="submit" form="package-form"><i class="fa fa-check-square-o" id="tick"></i> Compare rates</button>
						</div>
					</div>
				</div>
			</div>
		</form>	
<?php get_footer(); 