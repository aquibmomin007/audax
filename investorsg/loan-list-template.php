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
		                        <div class="filters-table-content not-sponsored box "  name="div-results" data-bank="OCBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3151" data-monthly-instalments=" $1,121,059">
		                           <div class="row row-content table-data-row" style="text-align: center;">
		                              <div class="col-md-12 col-sm-12 table-data-row-item">
		                                 <div class="row">
		                                    <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
		                                       <img src="https://mortgage.redbrick.sg/dist/img/ocbc.png" alt="OCBC 1 Mth SIBOR Rate Package">
		                                    </div>
		                                    <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
		                                       <span class="type sm-size">
		                                       <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
		                                       <b class="package-result-font">1-mth SIBOR</b>
		                                       </span>
		                                    </div>
		                                    <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
		                                       <span class="lock sm-size">
		                                       <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
		                                       <b class="package-result-font">2 years</b>
		                                       </span>
		                                    </div>
		                                    <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
		                                       <span class="rate">
		                                       <span class="year-ave">
		                                       <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
		                                       <b class="package-result-font">1.32%</b>
		                                       <br>(First year)
		                                       </span>
		                                       </span>
		                                    </div>
		                                    <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
		                                       <span class="instalment">
		                                       <span class="monthly-ave">
		                                       <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
		                                       <b class="package-result-font"> $1,121,059</b>
		                                       <br>(First year)
		                                       </span>
		                                       </span>
		                                    </div>
		                                    <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
		                                       <span class="instalment">
		                                          <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails106" disabled="true" name="more_details" data-more="more" >
		                                             <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
		                                          </div>
		                                       </span>
		                                    </div>
		                                 </div>
		                              </div>
		                           </div>
		                           <div class="row row-footer">
		                              <div class="col-md-12 summary-details collapse" id="viewdetails106">
		                                 <div class="row mbm mbm-custom">
		                                    <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
		                                       <span class="lock">
		                                       <b class="package-result-font">2 years
		                                       </b> Lock-in Period</span>
		                                    </div>
		                                    <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
		                                       <span class="type">
		                                       <b class="package-result-font">1-mth SIBOR</b> Rate Type</span>
		                                    </div>
		                                 </div>
		                                 <legend class="seperator-style"></legend>
		                                 <div class="row">
		                                    <div class="col-md-4 bottom-row-sm">
		                                       <div class="requirments-box">
		                                          <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
		                                          <ul class="checklist">
		                                             <li>Minimum loan: $100,000</li>
		                                          </ul>
		                                          <ul class="checklist">
		                                             <li>With legal subsidy</li>
		                                          </ul>
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
		                                                      <label for="">Rate</label>1-mth SIBOR + 0.60%
		                                                      = 1.32%
		                                                   </li>
		                                                   <li class="list-table-item-pament package-result-payments">
		                                                      <label for="">Payment</label> $1,121,059/mth
		                                                   </li>
		                                                </ul>
		                                             </li>
		                                             <li>
		                                                <ul class="list-table-height">
		                                                   <li class="list-table-item-year">Year 2</li>
		                                                   <li class="list-table-item-rate">
		                                                      <label for="">Rate</label>1-mth SIBOR + 0.70%
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
		                                                      <label for="">Rate</label>1-mth SIBOR + 0.70%
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
		                                                      <label for="">Rate</label>1-mth SIBOR + 0.70%
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
		                                                      <label for="">Rate</label>1-mth SIBOR + 0.70%
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
		                                                      <label for="">Rate</label>1-mth SIBOR + 0.85%
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
		                        <div class="filters-table-content not-sponsored box "  name="div-results" data-bank="HSBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3651" data-monthly-instalments=" $1,128,947">
		                           <div class="row row-content table-data-row" style="text-align: center;">
		                              <div class="col-md-12 col-sm-12 table-data-row-item">
		                                 <div class="row">
		                                    <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
		                                       <img src="https://mortgage.redbrick.sg/dist/img/hsbc.png" alt="HSBC 1 Mth SIBOR Rate Package">
		                                    </div>
		                                    <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
		                                       <span class="type sm-size">
		                                       <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
		                                       <b class="package-result-font">1-mth SIBOR</b></span>
		                                    </div>
		                                    <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
		                                       <span class="lock sm-size">
		                                       <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
		                                       <b class="package-result-font">2 years
		                                       </b></span>
		                                    </div>
		                                    <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
		                                       <span class="rate">
		                                       <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
		                                       <b class="package-result-font">1.37%</b><br>(First year)</span></span>
		                                    </div>
		                                    <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment no-side-padding hidden-xs sm-size" data-toggle="tooltip" data-placement="top" title="">
		                                       <span class="instalment">
		                                       <span class="monthly-ave">
		                                       <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
		                                       <b class="package-result-font"> $1,128,947</b>
		                                       <br>(First year)
		                                       </span>
		                                       </span>
		                                    </div>
		                                    <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
		                                       <span class="instalment">
		                                          <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails31" disabled="true" name="more_details" data-more="more" >
		                                             <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
		                                          </div>
		                                       </span>
		                                    </div>
		                                 </div>
		                              </div>
		                           </div>
		                           <div class="row row-footer">
		                              <div class="col-md-12 summary-details collapse" id="viewdetails31">
		                                 <div class="row mbm mbm-custom">
		                                    <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
		                                       <span class="lock">
		                                       <b class="package-result-font">2 years
		                                       </b> Lock-in Period</span>
		                                    </div>
		                                    <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
		                                       <span class="type">
		                                       <b class="package-result-font">1-mth SIBOR</b> Rate Type</span>
		                                    </div>
		                                 </div>
		                                 <legend class="seperator-style"></legend>
		                                 <div class="row">
		                                    <div class="col-md-4 bottom-row-sm">
		                                       <div class="requirments-box">
		                                          <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
		                                          <ul class="checklist">
		                                             <li>Minimum loan: $1,500,000</li>
		                                          </ul>
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
		                                                      <label for="">Rate</label>1-mth SIBOR + 0.65%
		                                                      = 1.37%
		                                                   </li>
		                                                   <li class="list-table-item-pament package-result-payments">
		                                                      <label for="">Payment</label> $1,128,947/mth
		                                                   </li>
		                                                </ul>
		                                             </li>
		                                             <li>
		                                                <ul class="list-table-height">
		                                                   <li class="list-table-item-year">Year 2</li>
		                                                   <li class="list-table-item-rate">
		                                                      <label for="">Rate</label>1-mth SIBOR + 0.70%
		                                                      = 1.42%
		                                                   </li>
		                                                   <li class="list-table-item-pament package-result-payments">
		                                                      <label for="">Payment</label> $1,136,625/mth
		                                                   </li>
		                                                </ul>
		                                             </li>
		                                             <li>
		                                                <ul class="list-table-height">
		                                                   <li class="list-table-item-year">Year 3</li>
		                                                   <li class="list-table-item-rate">
		                                                      <label for="">Rate</label>1-mth SIBOR + 0.70%
		                                                      = 1.42%
		                                                   </li>
		                                                   <li class="list-table-item-pament package-result-payments">
		                                                      <label for="">Payment</label> $1,136,625/mth
		                                                   </li>
		                                                </ul>
		                                             </li>
		                                             <li>
		                                                <ul class="list-table-height">
		                                                   <li class="list-table-item-year">Year 4</li>
		                                                   <li class="list-table-item-rate">
		                                                      <label for="">Rate</label>1-mth SIBOR + 0.75%
		                                                      = 1.47%
		                                                   </li>
		                                                   <li class="list-table-item-pament package-result-payments">
		                                                      <label for="">Payment</label> $1,143,839/mth
		                                                   </li>
		                                                </ul>
		                                             </li>
		                                             <li>
		                                                <ul class="list-table-height">
		                                                   <li class="list-table-item-year">Year 5</li>
		                                                   <li class="list-table-item-rate">
		                                                      <label for="">Rate</label>1-mth SIBOR + 0.75%
		                                                      = 1.47%
		                                                   </li>
		                                                   <li class="list-table-item-pament package-result-payments">
		                                                      <label for="">Payment</label> $1,143,839/mth
		                                                   </li>
		                                                </ul>
		                                             </li>
		                                             <li>
		                                                <ul class="list-table-height">
		                                                   <li class="list-table-item-year">Year 6+</li>
		                                                   <li class="list-table-item-rate">
		                                                      <label for="">Rate</label>1-mth SIBOR + 0.75%
		                                                      = 1.47%
		                                                   </li>
		                                                   <li class="list-table-item-pament package-result-payments">
		                                                      <label for="">Payment</label> $1,143,839/mth
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
		                        <div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3651" data-monthly-instalments=" $1,128,947">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI 1 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">1-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.37%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,128,947</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails13" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails13">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">1-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $1,500,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>1-mth SIBOR + 0.65%
								                              = 1.37%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,128,947/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.65%
								                              = 1.37%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,128,947/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.70%
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
								                              <label for="">Rate</label>1-mth SIBOR + 0.90%
								                              = 1.62%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,165,399/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.90%
								                              = 1.62%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,165,399/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.90%
								                              = 1.62%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,165,399/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="MB" data-rate-type="FDMR36" data-lock-in="3 years" data-interest-rate="1.38" data-monthly-instalments=" $1,131,305">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/mbb.png" alt="MB FDMR36 Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">FDMR36</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">3 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.38%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,131,305</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails126" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails126">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">3 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">FDMR36</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $200,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>FDMR36 + 0.18%
								                              = 1.38%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,131,305/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDMR36 + 0.28%
								                              = 1.48%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,146,712/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDMR36 + 0.38%
								                              = 1.58%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,161,750/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDMR36 + 0.60%
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,194,146/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDMR36 + 0.60%
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,194,146/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDMR36 + 0.60%
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,194,146/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="ANZ" data-rate-type="3-mth SOR" data-lock-in="0" data-interest-rate="1.393" data-monthly-instalments=" $1,133,364">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/anz.png" alt="ANZ 3 Mth SOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">															   No Lock-in
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.39%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,133,364</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails20" disabled="true" name="more_details" data-more="more">
								                     <input type="button" value="Less Details" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails20">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">															   No Lock-in
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SOR + 0.65%
								                              = 1.39%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,133,364/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SOR + 0.65%
								                              = 1.39%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,133,364/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SOR + 0.65%
								                              = 1.39%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,133,364/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SOR + 0.65%
								                              = 1.39%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,133,364/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SOR + 0.65%
								                              = 1.39%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,133,364/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SOR + 0.65%
								                              = 1.39%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,133,364/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="SCB" data-rate-type="1-mth SIBOR" data-lock-in="0" data-interest-rate="1.3951" data-monthly-instalments=" $1,133,697">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/scb.png" alt="SCB 1 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">1-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">															   No Lock-in
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.40%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,133,697</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails18" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails18">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">															   No Lock-in
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">1-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>1-mth SIBOR + 0.68%
								                              = 1.40%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,133,697/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.68%
								                              = 1.40%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,133,697/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.68%
								                              = 1.40%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,133,697/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.88%
								                              = 1.60%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,162,677/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.88%
								                              = 1.60%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,162,677/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.88%
								                              = 1.60%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,162,677/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="UOB" data-rate-type="1-mth SIBOR" data-lock-in="1 year" data-interest-rate="1.4151" data-monthly-instalments=" $1,136,870">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/uob.png" alt="UOB 1 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">1-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">1 year
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.42%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,136,870</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails35" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails35">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">1 year
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">1-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $400,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>1-mth SIBOR + 0.70%
								                              = 1.42%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,136,870/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.70%
								                              = 1.42%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,136,870/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.70%
								                              = 1.42%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,136,870/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.70%
								                              = 1.42%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,136,870/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.70%
								                              = 1.42%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,136,870/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.70%
								                              = 1.42%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,136,870/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.4151" data-monthly-instalments=" $1,136,870">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI 1 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">1-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.42%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,136,870</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails1" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails1">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">1-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $750,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>1-mth SIBOR + 0.70%
								                              = 1.42%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,136,870/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.70%
								                              = 1.42%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,136,870/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.70%
								                              = 1.42%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,136,870/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.90%
								                              = 1.62%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,165,903/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.90%
								                              = 1.62%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,165,903/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.90%
								                              = 1.62%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,165,903/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="ANZ" data-rate-type="3-mth SOR" data-lock-in="0" data-interest-rate="1.443" data-monthly-instalments=" $1,141,306">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/anz.png" alt="ANZ 3 Mth SOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">															   No Lock-in
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.44%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,141,306</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails22" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails22">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">															   No Lock-in
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SOR + 0.70%
								                              = 1.44%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,141,306/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SOR + 0.70%
								                              = 1.44%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,141,306/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SOR + 0.70%
								                              = 1.44%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,141,306/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SOR + 0.70%
								                              = 1.44%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,141,306/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SOR + 0.70%
								                              = 1.44%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,141,306/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SOR + 0.70%
								                              = 1.44%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,141,306/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.4651" data-monthly-instalments=" $1,144,827">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI 1 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">1-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.47%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,144,827</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails5" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails5">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">1-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $300,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>1-mth SIBOR + 0.75%
								                              = 1.47%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,144,827/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.75%
								                              = 1.47%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,144,827/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.75%
								                              = 1.47%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,144,827/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.10%
								                              = 1.82%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,196,159/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.10%
								                              = 1.82%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,196,159/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.10%
								                              = 1.82%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,196,159/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="SCB" data-rate-type="FDR" data-lock-in="2 years" data-interest-rate="1.48" data-monthly-instalments=" $1,147,204">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/scb.png" alt="SCB FDR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">FDR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.48%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,147,204</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails101" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails101">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">FDR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>FDR + 0.98%
								                              = 1.48%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,147,204/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDR + 0.98%
								                              = 1.48%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,147,204/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDR + 0.98%
								                              = 1.48%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,147,204/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDR + 1.08%
								                              = 1.58%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,161,750/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDR + 1.08%
								                              = 1.58%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,161,750/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDR + 1.08%
								                              = 1.58%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,161,750/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="DBS" data-rate-type="18mth FHR" data-lock-in="2 years" data-interest-rate="1.48" data-monthly-instalments=" $1,147,204">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/dbs.png" alt="DBS 18mth FHR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">18mth FHR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.48%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,147,204</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails108" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails108">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">18mth FHR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>18mth FHR + 0.88%
								                              = 1.48%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,147,204/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 0.88%
								                              = 1.48%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,147,204/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 0.88%
								                              = 1.48%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,147,204/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 0.88%
								                              = 1.48%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,147,204/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 0.88%
								                              = 1.48%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,147,204/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 0.88%
								                              = 1.48%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,147,204/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="BOC" data-rate-type="Fixed" data-lock-in="3 years" data-interest-rate="1.5" data-monthly-instalments=" $1,150,401">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/boc.png" alt="BOC Fixed Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Fixed</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">3 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.50%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,150,401</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails89" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails89">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">3 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Fixed</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $500,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.50%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,150,401/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.65%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,173,801/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,196,738/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,221/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,221/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,221/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.5151" data-monthly-instalments=" $1,152,817">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI 1 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">1-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.52%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,152,817</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails9" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails9">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">1-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $1,000,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>1-mth SIBOR + 0.80%
								                              = 1.52%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,152,817/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.80%
								                              = 1.52%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,152,817/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.80%
								                              = 1.52%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,152,817/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.80%
								                              = 1.52%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,152,817/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.80%
								                              = 1.52%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,152,817/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.80%
								                              = 1.52%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,152,817/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="SCB" data-rate-type="3-mth SIBOR" data-lock-in="0" data-interest-rate="1.5414" data-monthly-instalments=" $1,157,034">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/scb.png" alt="SCB 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">															   No Lock-in
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.54%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,157,034</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails19" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails19">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">															   No Lock-in
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.58%
								                              = 1.54%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,157,034/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.58%
								                              = 1.54%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,157,034/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.58%
								                              = 1.54%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,157,034/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.88%
								                              = 1.84%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,201,250/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.88%
								                              = 1.84%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,201,250/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.88%
								                              = 1.84%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,201,250/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="OCBC" data-rate-type="36mth FDMR" data-lock-in="2 years" data-interest-rate="1.58" data-monthly-instalments=" $1,163,240">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/ocbc.png" alt="OCBC 36mth FD Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">36mth FDMR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.58%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,163,240</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails104" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails104">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">36mth FDMR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>36mth FDMR + 0.93%
								                              = 1.58%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,163,240/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>36mth FDMR + 0.97%
								                              = 1.62%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,169,495/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>36mth FDMR + 0.97%
								                              = 1.62%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,169,495/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>36mth FDMR + 0.97%
								                              = 1.62%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,169,495/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>36mth FDMR + 0.97%
								                              = 1.62%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,169,495/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>36mth FDMR + 0.97%
								                              = 1.62%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,169,495/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="MB" data-rate-type="Fixed" data-lock-in="1 year" data-interest-rate="1.59" data-monthly-instalments=" $1,164,851">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/mbb.png" alt="MB Fixed Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Fixed</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">1 year
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.59%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,164,851</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails74" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails74">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">1 year
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Fixed</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $200,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.59%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,164,851/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDMR36 + 0.28%
								                              = 1.48%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,147,740/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDMR36 + 0.38%
								                              = 1.58%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,162,792/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDMR36 + 0.60%
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,195,217/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDMR36 + 0.60%
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,195,217/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDMR36 + 0.60%
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,195,217/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CIMB" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.5951" data-monthly-instalments=" $1,165,673">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/cimb.png" alt="CIMB 1 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">1-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.60%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,165,673</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails64" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails64">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">1-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
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
								                              <label for="">Rate</label>1-mth SIBOR + 0.88%
								                              = 1.60%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,165,673/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 0.88%
								                              = 1.60%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,165,673/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.75%
								                              = 2.47%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,301,881/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.75%
								                              = 2.47%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,301,881/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.75%
								                              = 2.47%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,301,881/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.75%
								                              = 2.47%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,301,881/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="UOB" data-rate-type="FDPR" data-lock-in="2 years" data-interest-rate="1.6" data-monthly-instalments=" $1,166,463">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/uob.png" alt="UOB FDPR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">FDPR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.60%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,166,463</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails44" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails44">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">FDPR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>FDPR + 0.95%
								                              = 1.60%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,166,463/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 0.95%
								                              = 1.60%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,166,463/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 0.95%
								                              = 1.60%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,166,463/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 0.95%
								                              = 1.60%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,166,463/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 0.95%
								                              = 1.60%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,166,463/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 0.95%
								                              = 1.60%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,166,463/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="3-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.6114" data-monthly-instalments=" $1,168,303">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.61%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,168,303</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails14" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails14">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $1,500,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.65%
								                              = 1.61%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,168,303/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.65%
								                              = 1.61%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,168,303/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,175,898/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,205,565/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,205,565/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,205,565/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="HSBC" data-rate-type="3-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.6114" data-monthly-instalments=" $1,168,303">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/hsbc.png" alt="HSBC 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.61%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,168,303</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails32" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails32">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $1,500,000</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.65%
								                              = 1.61%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,168,303/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,146/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,146/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.75%
								                              = 1.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,183,523/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.75%
								                              = 1.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,183,523/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.75%
								                              = 1.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,183,523/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="HSBC" data-rate-type="3-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.6114" data-monthly-instalments=" $1,168,303">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/hsbc.png" alt="HSBC 1 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.61%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,168,303</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails29" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails29">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $200,000</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.65%
								                              = 1.61%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,168,303/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,146/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.75%
								                              = 1.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,183,773/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.85%
								                              = 1.81%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,613/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.85%
								                              = 1.81%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,613/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.85%
								                              = 1.81%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,613/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="HSBC" data-rate-type="3-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.6114" data-monthly-instalments=" $1,168,303">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/hsbc.png" alt="HSBC 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.61%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,168,303</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails30" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails30">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $200,000</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.65%
								                              = 1.61%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,168,303/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,146/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.75%
								                              = 1.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,183,773/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.85%
								                              = 1.81%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,613/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.85%
								                              = 1.81%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,613/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.85%
								                              = 1.81%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,613/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="Fixed" data-lock-in="2 years" data-interest-rate="1.65" data-monthly-instalments=" $1,174,546">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI Fixed Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Fixed</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.65%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,174,546</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails91" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails91">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Fixed</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $1,000,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>CITIGOLD Customer</li>
								                  </ul>
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
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.65%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,174,546/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.65%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,174,546/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,473/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,473/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,473/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,473/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="UOB" data-rate-type="3-mth SIBOR" data-lock-in="0" data-interest-rate="1.6614" data-monthly-instalments=" $1,176,393">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/uob.png" alt="UOB 1 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">															   No Lock-in
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.66%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,176,393</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails115" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails115">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">															   No Lock-in
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="UOB" data-rate-type="3-mth SIBOR" data-lock-in="0" data-interest-rate="1.6614" data-monthly-instalments=" $1,176,393">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/uob.png" alt="UOB 1 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">															   No Lock-in
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.66%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,176,393</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails103" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails103">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">															   No Lock-in
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.80%
								                              = 1.76%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,192,178/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,207,590/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,207,590/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,207,590/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,207,590/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="3-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.6614" data-monthly-instalments=" $1,176,393">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.66%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,176,393</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails2" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails2">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $750,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,206,073/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,206,073/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,206,073/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="BOC" data-rate-type="3-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.6614" data-monthly-instalments=" $1,176,393">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/boc.png" alt="BOC 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.66%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,176,393</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails28" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails28">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="BOC" data-rate-type="3-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.6614" data-monthly-instalments=" $1,176,393">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/boc.png" alt="BOC 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.66%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,176,393</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails25" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails25">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.70%
								                              = 1.66%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,176,393/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.25%
								                              = 2.21%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,259,088/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.25%
								                              = 2.21%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,259,088/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.25%
								                              = 2.21%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,259,088/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="DBS" data-rate-type="18mth FHR" data-lock-in="2 years" data-interest-rate="1.68" data-monthly-instalments=" $1,179,411">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/dbs.png" alt="DBS 18mth FHR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">18mth FHR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.68%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,179,411</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails109" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails109">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">18mth FHR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>18mth FHR + 1.08%
								                              = 1.68%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,179,411/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.08%
								                              = 1.68%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,179,411/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.08%
								                              = 1.68%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,179,411/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.08%
								                              = 1.68%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,179,411/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.08%
								                              = 1.68%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,179,411/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.08%
								                              = 1.68%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,179,411/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="UOB" data-rate-type="FDPR" data-lock-in="1 year" data-interest-rate="1.68" data-monthly-instalments=" $1,179,411">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/uob.png" alt="UOB FDPR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">FDPR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">1 year
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.68%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,179,411</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails45" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails45">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">1 year
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">FDPR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>FDPR + 1.03%
								                              = 1.68%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,179,411/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 1.03%
								                              = 1.68%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,179,411/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 1.03%
								                              = 1.68%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,179,411/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 1.03%
								                              = 1.68%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,179,411/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 1.03%
								                              = 1.68%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,179,411/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 1.03%
								                              = 1.68%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,179,411/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="ANZ" data-rate-type="Combo" data-lock-in="0" data-interest-rate="1.7" data-monthly-instalments=" $1,182,662">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/anz.png" alt="ANZ Combo Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Combo</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">															   No Lock-in
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.70%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,182,662</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails21" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails21">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">															   No Lock-in
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Combo</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>Combo + 0.65%
								                              = 1.70%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,182,662/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Combo + 0.65%
								                              = 1.70%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,182,662/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Combo + 0.65%
								                              = 1.70%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,182,662/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Combo + 0.65%
								                              = 1.70%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,182,662/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Combo + 0.65%
								                              = 1.70%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,182,662/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Combo + 0.65%
								                              = 1.70%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,182,662/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="Fixed" data-lock-in="2 years" data-interest-rate="1.7" data-monthly-instalments=" $1,182,662">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI Fixed Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Fixed</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.70%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,182,662</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails84" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails84">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Fixed</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $500,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>CITIGOLD Customer</li>
								                  </ul>
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
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.70%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,182,662/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.70%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,182,662/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,970/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,970/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,970/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,970/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="BOC" data-rate-type="3-mth SIBOR" data-lock-in="0" data-interest-rate="1.7114" data-monthly-instalments=" $1,184,517">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/boc.png" alt="BOC 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">															   No Lock-in
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.71%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,184,517</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails26" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails26">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">															   No Lock-in
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.75%
								                              = 1.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,517/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.75%
								                              = 1.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,517/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.75%
								                              = 1.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,517/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.75%
								                              = 1.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,517/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.75%
								                              = 1.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,517/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.75%
								                              = 1.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,517/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="3-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.7114" data-monthly-instalments=" $1,184,517">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.71%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,184,517</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails6" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails6">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $300,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.75%
								                              = 1.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,517/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.75%
								                              = 1.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,517/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.75%
								                              = 1.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,184,517/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.10%
								                              = 2.06%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,236,979/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.10%
								                              = 2.06%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,236,979/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.10%
								                              = 2.06%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,236,979/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CIMB" data-rate-type="1-mth SIBOR" data-lock-in="0" data-interest-rate="1.7151" data-monthly-instalments=" $1,185,119">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/cimb.png" alt="CIMB 1 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">1-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">															   No Lock-in
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.72%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,185,119</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails62" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails62">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">															   No Lock-in
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">1-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
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
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,185,119/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.30%
								                              = 2.02%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,233,071/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.75%
								                              = 2.47%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,304,804/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.75%
								                              = 2.47%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,304,804/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.75%
								                              = 2.47%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,304,804/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.75%
								                              = 2.47%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,304,804/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="ANZ" data-rate-type="Combo" data-lock-in="0" data-interest-rate="1.75" data-monthly-instalments=" $1,190,811">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/anz.png" alt="ANZ Combo Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Combo</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">															   No Lock-in
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.75%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,190,811</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails23" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails23">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">															   No Lock-in
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Combo</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>Combo + 0.70%
								                              = 1.75%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,190,811/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Combo + 0.70%
								                              = 1.75%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,190,811/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Combo + 0.70%
								                              = 1.75%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,190,811/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Combo + 0.70%
								                              = 1.75%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,190,811/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Combo + 0.70%
								                              = 1.75%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,190,811/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Combo + 0.70%
								                              = 1.75%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,190,811/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="Fixed" data-lock-in="2 years" data-interest-rate="1.75" data-monthly-instalments=" $1,190,811">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI Fixed Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Fixed</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.75%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,190,811</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails83" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails83">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Fixed</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $1,000,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.75%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,190,811/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.75%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,190,811/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.05%
								                              = 1.77%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,193,130/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.05%
								                              = 1.77%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,193,130/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.05%
								                              = 1.77%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,193,130/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.05%
								                              = 1.77%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,193,130/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="HSBC" data-rate-type="Fixed" data-lock-in="2 years" data-interest-rate="1.75" data-monthly-instalments=" $1,190,811">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/hsbc.png" alt="HSBC Fixed Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Fixed</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.75%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,190,811</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails34" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails34">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Fixed</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $800,000</li>
								                  </ul>
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
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.75%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,190,811/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.75%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,190,811/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.75%
								                              = 2.47%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,303,573/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.15%
								                              = 1.87%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,211,465/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.15%
								                              = 1.87%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,211,465/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.15%
								                              = 1.87%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,211,465/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="DBS" data-rate-type="3-mth SIBOR" data-lock-in="0" data-interest-rate="1.7614" data-monthly-instalments=" $1,192,674">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/dbs.png" alt="DBS 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">															   No Lock-in
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.76%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,192,674</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails17" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails17">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">															   No Lock-in
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.80%
								                              = 1.76%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,192,674/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.80%
								                              = 1.76%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,192,674/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.80%
								                              = 1.76%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,192,674/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.25%
								                              = 2.21%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,260,671/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.25%
								                              = 2.21%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,260,671/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.25%
								                              = 2.21%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,260,671/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="3-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.7614" data-monthly-instalments=" $1,192,674">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.76%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,192,674</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails10" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails10">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $1,000,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.80%
								                              = 1.76%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,192,674/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.80%
								                              = 1.76%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,192,674/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.80%
								                              = 1.76%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,192,674/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.80%
								                              = 1.76%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,192,674/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.80%
								                              = 1.76%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,192,674/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.80%
								                              = 1.76%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,192,674/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="DBS" data-rate-type="18mth FHR" data-lock-in="2 years" data-interest-rate="1.78" data-monthly-instalments=" $1,195,718">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/dbs.png" alt="DBS 18mth FHR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">18mth FHR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.78%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,195,718</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails110" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails110">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">18mth FHR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>18mth FHR + 1.18%
								                              = 1.78%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,195,718/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.18%
								                              = 1.78%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,195,718/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.18%
								                              = 1.78%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,195,718/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.18%
								                              = 1.78%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,195,718/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.18%
								                              = 1.78%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,195,718/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.18%
								                              = 1.78%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,195,718/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="Fixed" data-lock-in="2 years" data-interest-rate="1.78" data-monthly-instalments=" $1,195,718">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI Fixed Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Fixed</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.78%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,195,718</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails82" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails82">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Fixed</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $500,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.78%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,195,718/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.78%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,195,718/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.05%
								                              = 1.77%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,193,427/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.05%
								                              = 1.77%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,193,427/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.05%
								                              = 1.77%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,193,427/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.05%
								                              = 1.77%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,193,427/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="RHB" data-rate-type="Board Rate" data-lock-in="3 years" data-interest-rate="1.78" data-monthly-instalments=" $1,195,718">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/rhb.png" alt="RHB Board Rate Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Board Rate</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">3 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.78%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,195,718</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails42" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails42">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">3 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Board Rate</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>Board Rate
								                              = 1.78%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,195,718/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Board Rate
								                              = 1.98%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,227,732/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Board Rate
								                              = 2.28%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,275,170/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Board Rate
								                              = 3.38%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,452,129/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Board Rate
								                              = 3.38%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,452,129/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Board Rate
								                              = 3.38%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,452,129/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="UOB" data-rate-type="Fixed" data-lock-in="2 years" data-interest-rate="1.8" data-monthly-instalments=" $1,198,995">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/uob.png" alt="UOB Fixed Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Fixed</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.80%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,198,995</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails117" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails117">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Fixed</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,995/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,995/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 1.15%
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,995/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 1.35%
								                              = 2.00%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,229,037/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 1.35%
								                              = 2.00%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,229,037/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 1.35%
								                              = 2.00%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,229,037/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="DBS" data-rate-type="18mth FHR" data-lock-in="0" data-interest-rate="1.8" data-monthly-instalments=" $1,198,995">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/dbs.png" alt="DBS 18mth FHR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">18mth FHR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">															   No Lock-in
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.80%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,198,995</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails37" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails37">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">															   No Lock-in
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">18mth FHR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>18mth FHR + 1.20%
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,995/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.20%
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,995/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.20%
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,995/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.20%
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,995/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.20%
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,995/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.20%
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,995/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="HSBC" data-rate-type="Fixed" data-lock-in="2 years" data-interest-rate="1.8" data-monthly-instalments=" $1,198,995">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/hsbc.png" alt="HSBC Fixed Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Fixed</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.80%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,198,995</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails33" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails33">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Fixed</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $200,000</li>
								                  </ul>
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
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,995/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,995/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.15%
								                              = 1.87%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,209,052/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.15%
								                              = 1.87%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,209,052/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.15%
								                              = 1.87%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,209,052/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.15%
								                              = 1.87%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,209,052/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="UOB" data-rate-type="Fixed" data-lock-in="2 years" data-interest-rate="1.83" data-monthly-instalments=" $1,203,921">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/uob.png" alt="UOB Fixed Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Fixed</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.83%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,203,921</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails116" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails116">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Fixed</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.83%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,203,921/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 1.83%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,203,921/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 1.18%
								                              = 1.83%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,203,921/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 1.18%
								                              = 1.83%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,203,921/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 1.18%
								                              = 1.83%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,203,921/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>FDPR + 1.18%
								                              = 1.83%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,203,921/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CIMB" data-rate-type="3-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.8614" data-monthly-instalments=" $1,209,090">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/cimb.png" alt="CIMB 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.86%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,209,090</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails65" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails65">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,209,090/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.15%
								                              = 2.11%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,249,458/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.75%
								                              = 2.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,346,406/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.75%
								                              = 2.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,346,406/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.75%
								                              = 2.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,346,406/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.75%
								                              = 2.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,346,406/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="OCBC" data-rate-type="3-mth SIBOR" data-lock-in="3 years" data-interest-rate="1.8614" data-monthly-instalments=" $1,209,090">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/ocbc.png" alt="OCBC 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">3 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.86%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,209,090</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails39" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails39">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">3 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,209,090/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,209,090/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,209,090/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.25%
								                              = 2.21%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,262,238/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.25%
								                              = 2.21%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,262,238/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.25%
								                              = 2.21%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,262,238/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="MB" data-rate-type="3-mth SIBOR" data-lock-in="3 years" data-interest-rate="1.8614" data-monthly-instalments=" $1,209,090">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/mbb.png" alt="MB 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">3 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.86%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,209,090</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails24" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails24">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">3 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,209,090/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,209,090/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 0.90%
								                              = 1.86%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,209,090/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.75%
								                              = 2.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,340,520/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.75%
								                              = 2.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,340,520/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.75%
								                              = 2.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,340,520/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="RHB" data-rate-type="Board Rate" data-lock-in="2 years" data-interest-rate="1.88" data-monthly-instalments=" $1,212,159">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/rhb.png" alt="RHB Board Rate Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Board Rate</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.88%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,212,159</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails41" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails41">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Board Rate</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>Board Rate
								                              = 1.88%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,212,159/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Board Rate
								                              = 1.98%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,228,236/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Board Rate
								                              = 2.48%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,307,922/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Board Rate
								                              = 3.38%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,453,864/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Board Rate
								                              = 3.38%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,453,864/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Board Rate
								                              = 3.38%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,453,864/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="6-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.897" data-monthly-instalments=" $1,214,967">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI 6 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">6-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.90%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,214,967</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails15" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails15">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">6-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $1,500,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>6-mth SIBOR + 0.65%
								                              = 1.90%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,214,967/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.65%
								                              = 1.90%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,214,967/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.70%
								                              = 1.95%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,222,751/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.90%
								                              = 2.15%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,253,165/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.90%
								                              = 2.15%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,253,165/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.90%
								                              = 2.15%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,253,165/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="DBS" data-rate-type="18mth FHR" data-lock-in="0" data-interest-rate="1.9" data-monthly-instalments=" $1,215,463">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/dbs.png" alt="DBS 18mth FHR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">18mth FHR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">															   No Lock-in
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.90%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,215,463</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails38" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails38">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">															   No Lock-in
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">18mth FHR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>18mth FHR + 1.30%
								                              = 1.90%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,215,463/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.30%
								                              = 1.90%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,215,463/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.30%
								                              = 1.90%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,215,463/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.30%
								                              = 1.90%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,215,463/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.30%
								                              = 1.90%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,215,463/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.30%
								                              = 1.90%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,215,463/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="6-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.947" data-monthly-instalments=" $1,223,249">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI 6 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">6-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.95%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,223,249</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails3" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails3">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">6-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $750,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>6-mth SIBOR + 0.70%
								                              = 1.95%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,223,249/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.70%
								                              = 1.95%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,223,249/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.70%
								                              = 1.95%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,223,249/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.90%
								                              = 2.15%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,253,675/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.90%
								                              = 2.15%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,253,675/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.90%
								                              = 2.15%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,253,675/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CIMB" data-rate-type="3-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.9614" data-monthly-instalments=" $1,225,641">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/cimb.png" alt="CIMB 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.96%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,225,641</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails102" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails102">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 1.00%
								                              = 1.96%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,225,641/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.30%
								                              = 2.26%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,274,574/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.75%
								                              = 2.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,347,755/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.75%
								                              = 2.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,347,755/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.75%
								                              = 2.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,347,755/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.75%
								                              = 2.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,347,755/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CIMB" data-rate-type="3-mth SIBOR" data-lock-in="0" data-interest-rate="1.9614" data-monthly-instalments=" $1,225,641">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/cimb.png" alt="CIMB 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">3-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">															   No Lock-in
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">1.96%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,225,641</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails63" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails63">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">															   No Lock-in
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">3-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
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
								                              <label for="">Rate</label>3-mth SIBOR + 1.00%
								                              = 1.96%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,225,641/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.30%
								                              = 2.26%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,274,574/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.75%
								                              = 2.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,347,755/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.75%
								                              = 2.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,347,755/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.75%
								                              = 2.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,347,755/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>3-mth SIBOR + 1.75%
								                              = 2.71%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,347,755/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="6-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.997" data-monthly-instalments=" $1,231,565">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI 6 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">6-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">2.00%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,231,565</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails7" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails7">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">6-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $300,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>6-mth SIBOR + 0.75%
								                              = 2.00%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,231,565/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.75%
								                              = 2.00%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,231,565/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.75%
								                              = 2.00%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,231,565/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 1.10%
								                              = 2.35%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,285,331/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 1.10%
								                              = 2.35%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,285,331/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 1.10%
								                              = 2.35%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,285,331/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="BOC" data-rate-type="12-mth SIBOR" data-lock-in="0" data-interest-rate="2.035" data-monthly-instalments=" $1,237,907">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/boc.png" alt="BOC 12 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">12-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">															   No Lock-in
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">2.04%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,237,907</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails27" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails27">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">															   No Lock-in
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">12-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
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
								                              <label for="">Rate</label>12-mth SIBOR + 0.60%
								                              = 2.04%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,237,907/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.70%
								                              = 2.14%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,254,190/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.70%
								                              = 2.14%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,254,190/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.70%
								                              = 2.14%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,254,190/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.70%
								                              = 2.14%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,254,190/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.70%
								                              = 2.14%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,254,190/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="6-mth SIBOR" data-lock-in="2 years" data-interest-rate="2.047" data-monthly-instalments=" $1,239,914">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI 6 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">6-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">2.05%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,239,914</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails11" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails11">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">6-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $1,000,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>6-mth SIBOR + 0.80%
								                              = 2.05%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,239,914/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.80%
								                              = 2.05%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,239,914/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.80%
								                              = 2.05%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,239,914/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.80%
								                              = 2.05%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,239,914/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.80%
								                              = 2.05%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,239,914/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>6-mth SIBOR + 0.80%
								                              = 2.05%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,239,914/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="12-mth SIBOR" data-lock-in="2 years" data-interest-rate="2.085" data-monthly-instalments=" $1,246,282">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI 12 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">12-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">2.09%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,246,282</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails16" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails16">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">12-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $1,500,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>12-mth SIBOR + 0.65%
								                              = 2.09%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,246,282/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.65%
								                              = 2.09%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,246,282/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.70%
								                              = 2.14%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,254,189/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.90%
								                              = 2.34%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,285,093/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.90%
								                              = 2.34%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,285,093/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.90%
								                              = 2.34%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,285,093/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="HLF" data-rate-type="Board Rate" data-lock-in="2 years" data-interest-rate="2.1" data-monthly-instalments=" $1,248,801">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/hlf.png" alt="HLF Board Rate Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Board Rate</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">2.10%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,248,801</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails40" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails40">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Board Rate</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
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
								                              <label for="">Rate</label>Board Rate
								                              = 2.10%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,248,801/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Board Rate
								                              = 2.10%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,248,801/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Board Rate
								                              = 2.43%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,301,603/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Board Rate
								                              = 3.33%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,447,228/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Board Rate
								                              = 3.33%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,447,228/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Board Rate
								                              = 3.33%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,447,228/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="12-mth SIBOR" data-lock-in="2 years" data-interest-rate="2.135" data-monthly-instalments=" $1,254,690">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI 12 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">12-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">2.14%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,254,690</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails4" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails4">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">12-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $750,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>12-mth SIBOR + 0.70%
								                              = 2.14%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,254,690/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.70%
								                              = 2.14%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,254,690/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.70%
								                              = 2.14%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,254,690/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.90%
								                              = 2.34%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,285,605/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.90%
								                              = 2.34%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,285,605/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.90%
								                              = 2.34%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,285,605/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="DBS" data-rate-type="Fixed" data-lock-in="3 years" data-interest-rate="2.18" data-monthly-instalments=" $1,262,285">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/dbs.png" alt="DBS Fixed Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Fixed</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">3 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">2.18%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,262,285</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails107" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails107">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">3 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Fixed</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>Fixed Rate
								                              = 2.18%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,262,285/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 2.18%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,262,285/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 2.18%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,262,285/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.20%
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,204,556/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.20%
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,204,556/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>18mth FHR + 1.20%
								                              = 1.80%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,204,556/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="12-mth SIBOR" data-lock-in="2 years" data-interest-rate="2.185" data-monthly-instalments=" $1,263,131">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI 12 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">12-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">2.19%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,263,131</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails8" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails8">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">12-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $300,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>12-mth SIBOR + 0.75%
								                              = 2.19%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,263,131/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.75%
								                              = 2.19%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,263,131/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.75%
								                              = 2.19%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,263,131/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 1.10%
								                              = 2.54%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,317,751/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 1.10%
								                              = 2.54%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,317,751/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 1.10%
								                              = 2.54%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,317,751/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="12-mth SIBOR" data-lock-in="2 years" data-interest-rate="2.235" data-monthly-instalments=" $1,271,605">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI 12 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">12-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">2 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">2.24%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,271,605</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails12" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails12">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">2 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">12-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $1,000,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>12-mth SIBOR + 0.80%
								                              = 2.24%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,271,605/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.80%
								                              = 2.24%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,271,605/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.80%
								                              = 2.24%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,271,605/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.80%
								                              = 2.24%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,271,605/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.80%
								                              = 2.24%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,271,605/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 0.80%
								                              = 2.24%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,271,605/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="Fixed" data-lock-in="3 years" data-interest-rate="2.28" data-monthly-instalments=" $1,279,260">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI Fixed Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Fixed</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">3 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">2.28%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,279,260</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails94" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails94">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">3 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Fixed</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $1,500,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>Fixed Rate
								                              = 2.28%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,279,260/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 2.28%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,279,260/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 2.28%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,279,260/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,193,293/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,193,293/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,193,293/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="BOC" data-rate-type="12-mth SIBOR" data-lock-in="0" data-interest-rate="2.435" data-monthly-instalments=" $1,305,832">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/boc.png" alt="BOC 3 Mth SIBOR Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">12-mth SIBOR</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">															   No Lock-in
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">2.44%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,305,832</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails54" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails54">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">															   No Lock-in
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">12-mth SIBOR</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $100,000</li>
								                  </ul>
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
								                              <label for="">Rate</label>12-mth SIBOR + 1.00%
								                              = 2.44%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,305,832/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 1.00%
								                              = 2.44%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,305,832/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 1.00%
								                              = 2.44%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,305,832/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 1.00%
								                              = 2.44%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,305,832/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 1.00%
								                              = 2.44%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,305,832/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>12-mth SIBOR + 1.00%
								                              = 2.44%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,305,832/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="Fixed" data-lock-in="3 years" data-interest-rate="2.48" data-monthly-instalments=" $1,313,606">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI Fixed Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Fixed</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">3 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">2.48%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,313,606</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails93" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails93">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">3 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Fixed</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $900,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>Fixed Rate
								                              = 2.48%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,313,606/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 2.48%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,313,606/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 2.48%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,313,606/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,196,074/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,196,074/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,196,074/mth
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
								<div class="filters-table-content not-sponsored box "  name="div-results" data-bank="CITI" data-rate-type="Fixed" data-lock-in="3 years" data-interest-rate="2.68" data-monthly-instalments=" $1,348,476">
								   <div class="row row-content table-data-row" style="text-align: center;">
								      <div class="col-md-12 col-sm-12 table-data-row-item">
								         <div class="row">
								            <div class="col-md-2 col-xs-12 col-sm-2 no-side-padding sm-size-logo logo-block">
								               <img src="https://mortgage.redbrick.sg/dist/img/citibank.png" alt="CITI Fixed Rate Package">
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__type no-side-padding hidden-xs package-type sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type sm-size">
								               <span class="sm-rate-typr sm-table-head hidden-md hidden-lg">Rate Type</span>
								               <b class="package-result-font">Fixed</b></span>
								            </div>
								            <div class=" center-block col-md-3 col-xs-6 col-sm-3 box__lock no-side-padding hidden-xs package-lockin sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock sm-size">
								               <span class="sm-lock-period sm-table-head hidden-md hidden-lg">Lock in Period</span>
								               <b class="package-result-font">3 years
								               </b></span>
								            </div>
								            <div class="center-block col-md-2 col-xs-6 col-sm-2 box__rate no-side-padding hidden-xs sm-size package-rate" data-toggle="tooltip" data-placement="top" title="">
								               <span class="rate">
								               <span class="year-ave">
								               <span class="interest-rate-desc sm-table-head hidden-md hidden-lg">Interest Rate</span>
								               <b class="package-result-font">2.68%</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="center-block col-md-3 col-xs-6 col-sm-3 box__instalment hidden-xs no-side-padding sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								               <span class="monthly-ave">
								               <span class="monthly-installment-desc sm-table-head hidden-md hidden-lg">Monthly Instalments</span>
								               <b class="package-result-font"> $1,348,476</b>
								               <br>(First year)
								               </span>
								               </span>
								            </div>
								            <div class="expand-btn box__instalment no-side-padding more-details-box sm-size" data-toggle="tooltip" data-placement="top" title="">
								               <span class="instalment">
								                  
								                  <div class="input-group expand-input"  data-toggle="collapse" data-target="#viewdetails92" disabled="true" name="more_details" data-more="more" >
								                     <input type="button" value="" class="form-control package-submit color-scheme-result-btn">
								                     <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-expand"></span></span>
								                  </div>
								               </span>
								            </div>
								         </div>
								      </div>
								   </div>
								   <div class="row row-footer">
								      <div class="col-md-12 summary-details collapse" id="viewdetails92">
								         <div class="row mbm mbm-custom">
								            <div class="col-md-2 col-xs-6 box__lock" data-toggle="tooltip" data-placement="top" title="">
								               <span class="lock">
								               <b class="package-result-font">3 years
								               </b> Lock-in Period</span>
								            </div>
								            <div class="col-md-2 col-xs-6 box__type" data-toggle="tooltip" data-placement="top" title="">
								               <span class="type">
								               <b class="package-result-font">Fixed</b> Rate Type</span>
								            </div>
								         </div>
								         <legend class="seperator-style"></legend>
								         <div class="row">
								            <div class="col-md-4 bottom-row-sm">
								               <div class="requirments-box">
								                  <h4 class="package-result-font package-result-summary-box">FEATURES</h4>
								                  <ul class="checklist">
								                     <li>Minimum loan: $500,000</li>
								                  </ul>
								                  <ul class="checklist">
								                     <li>With legal subsidy</li>
								                  </ul>
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
								                              <label for="">Rate</label>Fixed Rate
								                              = 2.68%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,348,476/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 2</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 2.68%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,348,476/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 3</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>Fixed Rate
								                              = 2.68%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,348,476/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 4</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,796/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 5</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,796/mth
								                           </li>
								                        </ul>
								                     </li>
								                     <li>
								                        <ul class="list-table-height">
								                           <li class="list-table-item-year">Year 6+</li>
								                           <li class="list-table-item-rate">
								                              <label for="">Rate</label>1-mth SIBOR + 1.00%
								                              = 1.72%
								                           </li>
								                           <li class="list-table-item-pament package-result-payments">
								                              <label for="">Payment</label> $1,198,796/mth
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
		                     </div>
		                  </div>
		               </div>
		            </div>
		         </div>
		      </div>
		   </div>
		</div>
<?php get_footer(); 