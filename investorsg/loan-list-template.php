<?php
/**
 * Template Name: Loan List Template
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

		<div class="fusion-row list-container">
			<a href="https://mortgage.redbrick.sg/package/1">
				<div class="input-group pull-left package-result-btn-size back-btn" id="package_submit_div" style="z-index:100001;">
					<span class="input-group-addon btn-addon package-result-btn-size"><span class="glyphicon glyphicon-menu-left"></span></span>
					<input type="button" value="BACK" class="form-control package-submit package-result-btn-size color-scheme-result-btn">
				</div>
			</a>
			<div class="addthis"></div>
		   <div class="clearfix nlf-result-content">
		      <div class="col-md-12 col-sm-12 no-side-padding">
		         <div class="filters-table-container">
		            <div class="filters-table-body" style="margin-top: 0px;">
		               <div class="filters-table-row">
		                  <div class="filters-table-contents">
		                     <div class="filters-table-content filter-table-header not-sponsored box hidden-xs package-result-header color-scheme-result-header">
		                        <div class="row row-content">
		                           <div class="col-md-12 col-sm-12">
		                              <div class="row loan-head">
		                                 <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding package-result-header-content sm-size head-block" id="sort_bank" data-sort="desc">
		                                    BANK<span class="glyphicon glyphicon-menu-up sort-result"></span>
		                                 </div>
		                                 <div class="col-md-2 col-xs-6 col-sm-2 no-side-padding package-result-header-content sm-size head-block" data-toggle="tooltip" data-placement="top" title="" id="sort_rate_type" data-sort="asc">
		                                    RATE TYPE<span class="glyphicon glyphicon-menu-down sort-result"></span>
		                                 </div>
		                                 <div class="col-md-3 col-xs-6 col-sm-3 no-side-padding package-result-header-content sm-size package-lockin head-block" data-toggle="tooltip" data-placement="top" title="" id="sort_lock_in" data-sort="asc">
		                                    LOCK IN PERIOD<span class="glyphicon glyphicon-menu-down sort-result"></span>
		                                 </div>
		                                 <div class="col-md-2 col-xs-6 col-sm-2 no-side-padding package-result-header-content sm-size package-rate head-block" data-toggle="tooltip" data-placement="top" title="" id="sort_interest_rate" data-sort="desc">
		                                    INTEREST RATE<span class="glyphicon glyphicon-menu-up sort-result"></span>
		                                 </div>
		                                 <div class="col-md-3 col-xs-6 col-sm-3 no-side-padding package-result-header-content sm-size head-block" data-toggle="tooltip" data-placement="top" title="" id="sort_monthly_instalments" data-sort="desc">
		                                    MONTHLY INSTALMENTS<span class="glyphicon glyphicon-menu-up sort-result"></span>
		                                 </div>
		                              </div>
		                           </div>
		                        </div>
		                     </div>
		                     <div id="sort-container" class="package-result-div">
		                        
		                     </div>
		                  </div>
		               </div>
		            </div>
		         </div>
		      </div>
		   </div>
		</div>
		<script id="document-template" type="text/x-handlebars-template">
		        {{#each this}}
		        	<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="{{BankName}}" data-rate-type="{{rateType}}" data-lock-in="{{lockIn}}" data-interest-rate="{{interestRate}}" data-monthly-instalments=" ${{amount}}">
					   <div class="row row-content table-data-row" style="text-align: center;">
					      <div class="col-md-12 col-sm-12 table-data-row-item">
					         <div class="row">
					            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
					               <img src="{{imgUrl}}" alt="OCBC 1 Mth SIBOR Rate Package">
					            </div>
					            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
					               <span class="type sm-size">
					               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
					               <b class="package-result-font">{{rateType}}</b>
					               </span>
					            </div>
					            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
					               <span class="lock sm-size">
					               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
					               <b class="package-result-font">{{lockIn}}</b>
					               </span>
					            </div>
					            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
					               <span class="rate">
					               <span class="year-ave">
					               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
					               <b class="package-result-font">{{interestRate}}%</b>
					               <br>(First year)
					               </span>
					               </span>
					            </div>
					            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
					               <span class="instalment">
					               <span class="monthly-ave">
					               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
					               <b class="package-result-font"> ${{amount}}</b>
					               <br>(First year)
					               </span>
					               </span>
					            </div>
					            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
					               <span class="instalment">
					                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#{{id}}" disabled="true" name="more_details" data-more="more" >
					                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
					                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
					                  </div>
					               </span>
					            </div>
					         </div>
					      </div>
					   </div>
					   <div class="row row-footer">
					      <div class="col-md-12 summary-details collapse" id="{{id}}">
					         <div class="row mbm mbm-custom">
					            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
					               <span class="lock">
					               <b class="package-result-font">{{lockIn}}
					               </b> Lock-in Period</span>
					            </div>
					            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
					               <span class="type">
					               <b class="package-result-font">{{rateType}}</b> Rate Type</span>
					            </div>
					         </div>
					         <legend class="seperator-style"></legend>
					         <div class="row">
					            <div class="col-md-4 bottom-row-sm">
					               <div class="requirments-box">
					                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
					                  {{#each featureText}}
									    <ul class="checklist">
						                    <li>{{this}}</li>
						                </ul>
									  {{/each}}
					               </div>
					            </div>
					            <div class="col-md-8 bottom-row-sm">
					               <div class="summary-box">
					                  <h4 class="package-result-font package-result-summary-box">RATES AND PAYMENTS</h4>
					                  <ul class="list-table-head clearfix hidden-xs package-result-rates-payments">
					                     <li class="summary-box-header">PERIOD</li>
					                     <li class="summary-box-header">RATE</li>
					                     <li class="summary-box-header">PAYMENT</li>
					                  </ul>
					                  <ul class="list-table-content clearfix">
					                     <li>
					                        <ul class="list-table-height">
					                           <li class="list-table-item-year">Year 1</li>
					                           <li class="list-table-item-rate">
					                              <label for="">Rate</label>{{rateType}} + 0.60%
					                              = 1.32%
					                           </li>
					                           <li class="list-table-item-pament package-result-payments">
					                              <label for="">Payment</label> ${{amount}}/mth
					                           </li>
					                        </ul>
					                     </li>
					                     <li>
					                        <ul class="list-table-height">
					                           <li class="list-table-item-year">Year 2</li>
					                           <li class="list-table-item-rate">
					                              <label for="">Rate</label>{{rateType}} + 0.70%
					                              = 1.42%
					                           </li>
					                           <li class="list-table-item-pament package-result-payments">
					                              <label for="">Payment</label> $1,136,378/mth
					                           </li>
					                        </ul>
					                     </li>
					                     <li>
					                        <ul class="list-table-height">
					                           <li class="list-table-item-year">Year 3</li>
					                           <li class="list-table-item-rate">
					                              <label for="">Rate</label>{{rateType}} + 0.70%
					                              = 1.42%
					                           </li>
					                           <li class="list-table-item-pament package-result-payments">
					                              <label for="">Payment</label> $1,136,378/mth
					                           </li>
					                        </ul>
					                     </li>
					                     <li>
					                        <ul class="list-table-height">
					                           <li class="list-table-item-year">Year 4</li>
					                           <li class="list-table-item-rate">
					                              <label for="">Rate</label>{{rateType}} + 0.70%
					                              = 1.42%
					                           </li>
					                           <li class="list-table-item-pament package-result-payments">
					                              <label for="">Payment</label> $1,136,378/mth
					                           </li>
					                        </ul>
					                     </li>
					                     <li>
					                        <ul class="list-table-height">
					                           <li class="list-table-item-year">Year 5</li>
					                           <li class="list-table-item-rate">
					                              <label for="">Rate</label>{{rateType}} + 0.70%
					                              = 1.42%
					                           </li>
					                           <li class="list-table-item-pament package-result-payments">
					                              <label for="">Payment</label> $1,136,378/mth
					                           </li>
					                        </ul>
					                     </li>
					                     <li>
					                        <ul class="list-table-height">
					                           <li class="list-table-item-year">Year 6+</li>
					                           <li class="list-table-item-rate">
					                              <label for="">Rate</label>{{rateType}} + 0.85%
					                              = 1.57%
					                           </li>
					                           <li class="list-table-item-pament package-result-payments">
					                              <label for="">Payment</label> $1,156,590/mth
					                           </li>
					                        </ul>
					                     </li>
					                  </ul>
					               </div>
					            </div>
					         </div>
					      </div>
					   </div>
					</div>
		        {{/each}}
		</script>
<?php get_footer(); 