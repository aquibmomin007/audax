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
			                     <input class="package-radio-input" type="radio" id="loan_type_radio-1" name="loan_type_radio" value="new_loan_tab" checked="checked">
			                     <div class="check"></div>
			                     <span class="radio-label">New Loan</span>
			                     </label>
			                  </div>
			                  <div class="col-xs-6 col-sm-5 col-md-4 col-lg-4 no-side-padding radio">
			                     <label>
			                     <input class="package-radio-input" type="radio" id="loan_type_radio-2" name="loan_type_radio" value="refinance_tab" >
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
			                     <input class="package-radio-input" type="radio" id="individual_or_company_radio-1" name="individual_or_company_radio" value="individual" checked="checked">
			                     <div class="check"></div>
			                     <span class="radio-label">Individual</span>
			                     </label>
			                  </div>
			                  <div class="col-xs-6 col-sm-5 col-md-4 col-lg-4 no-side-padding radio">
			                     <label>
			                     <input class="package-radio-input" type="radio" id="individual_or_company_radio-2" name="individual_or_company_radio" value="company">
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
		</div>

<?php get_footer(); 