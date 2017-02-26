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
		<div class="fusion-row">
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="OCBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3151" data-monthly-instalments=" $1,121,059">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="HSBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3651" data-monthly-instalments=" $1,128,947">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="OCBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3151" data-monthly-instalments=" $1,121,059">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="HSBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3651" data-monthly-instalments=" $1,128,947">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="OCBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3151" data-monthly-instalments=" $1,121,059">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="HSBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3651" data-monthly-instalments=" $1,128,947">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="OCBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3151" data-monthly-instalments=" $1,121,059">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="HSBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3651" data-monthly-instalments=" $1,128,947">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="OCBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3151" data-monthly-instalments=" $1,121,059">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="HSBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3651" data-monthly-instalments=" $1,128,947">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="OCBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3151" data-monthly-instalments=" $1,121,059">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="HSBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3651" data-monthly-instalments=" $1,128,947">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="OCBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3151" data-monthly-instalments=" $1,121,059">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="HSBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3651" data-monthly-instalments=" $1,128,947">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="OCBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3151" data-monthly-instalments=" $1,121,059">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="HSBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3651" data-monthly-instalments=" $1,128,947">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="OCBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3151" data-monthly-instalments=" $1,121,059">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="HSBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3651" data-monthly-instalments=" $1,128,947">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="OCBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3151" data-monthly-instalments=" $1,121,059">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="HSBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3651" data-monthly-instalments=" $1,128,947">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="OCBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3151" data-monthly-instalments=" $1,121,059">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                        <div class="filters-table-content not-sponsored box"  name="div-results" data-bank="HSBC" data-rate-type="1-mth SIBOR" data-lock-in="2 years" data-interest-rate="1.3651" data-monthly-instalments=" $1,128,947">
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
		                                             <span class="input-group-addon-custom btn-addon" style="cursor:pointer;"><span class="glyphicon glyphicon-plus"></span></span>
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
		                     </div>
		                  </div>
		               </div>
		            </div>
		         </div>
		      </div>
		   </div>
		</div>
<?php get_footer(); 