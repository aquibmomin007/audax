(function ($, undefined) {
    'use strict';
    $(function () {
				var default_tab = "new_loan_tab";
				var new_loan_tab = "new_loan_tab";
				var refinance_tab = "refinance_tab";
				var more_details = 'More Details';
				var less_details = 'Less Details';
				var $divs = $("div[name='div-results']");
				var privateChoice = "private";
				var hdbChoice = "hdb";
				var commercialChoice = "commercial";
				var isSessionSupported = true;
				function plainNumber(number) {
				number = number.replace("-","");
				 return number.split('.').join('');
				}

				function percent(input) {
					var value = input.value,
						value = plainNumber(value);
					if(value.length >= 5){
						value = value.substring(0, 4);
					}
					value = value + " %";
					input.value = value;
				}

				function loanTenure(input){
					var value = input.value,
						value = plainNumber(value);
					if(parseInt(value) > 30){
						value = 30;
					}else if(parseInt(value) <= 0){
						value = 30;
					}
					if(value.length >= 3){
						value = value.substring(0, 2);
					}
					
					input.value = value;
				}

				$(document).ready(function(){

					if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))){ 
						$("#submit").mouseenter(function(){
							$("#tick").show();
							setTimeout(function(){
								$("#submit").click();
							}
							, 500);
						}).mouseleave(function(){
							$("#tick").hide();
						});
					}
					$("#submit").mouseenter(function(){
						$("#tick").css("visibility", "visible");
					}).mouseleave(function(){
						$("#tick").css("visibility", "hidden");
					});
					
				    $('#current_interest_rate_txt').on('keyup change',function(event){
						$(this).val($(this).val().replace(/[^0-9\. %]/g,''));
						if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
							event.preventDefault();
						}
						var val= $('#current_interest_rate_txt').val();

						if(val.length > 0){
							if(val.includes("%")){
								val = val.replace("%", "");
								val = val.replace(".", "");
								val = val.replace(" ", "");
								if(val.length >= 5){
									val = val.substring(0,5);
								}
								if(val.length > 2){
									val = val.substring(0,val.length-2) +"."+ val.substring(val.length-2, val.length);
								}
								if(val.length > 0 ){
									val = val + " %";
								}	
							}else{
								if(val != " "){
									var hasPercentage = false;
									if(val.includes(" ")){
										hasPercentage = true;
									}
									val = val.replace("%", "");
									val = val.replace(".", "");
									val = val.replace(" ", "");
									var length = 0;
									if(val.length == 1){
										if(hasPercentage){
											length = 0;
										}else{
											length = 1;
										}		
									}else{
										if(hasPercentage){
											length = val.length-1;
										}else{
											length = val.length;
										}						
									}
									val = val.substring(0, length);
									if(val.length >= 5){
										val = val.substring(0,5);
									}
									if(val.length > 2){
										val = val.substring(0,val.length-2) +"."+ val.substring(val.length-2, val.length);
									}
									if(val.length > 0 ){
										val = val + " %";
									}	
								}else{
									val = "";
								}
							}
						}

						$('#current_interest_rate_txt').val(val);
						if(isSessionSupported)
							sessionStorage.setItem(this.getAttribute("current_interest_rate_txt"), val);
				    });
						
					$('input.number').bind('keyup change',function(event) {
					  // skip for arrow keys
					  if(event.which >= 37 && event.which <= 40) return;

					  // format number
					  $(this).val(function(index, value) {
						var val = value.replace(/\D/g, "");
						if(val.length >= 11){
							val = val.substring(0, 10);
						}
						val = val
						.replace(/\D/g, "")
						.replace(/\B(?=(\d{3})+(?!\d))/g, ",")
						;

						if(val != ""){
							val = "SGD " + val;
						}
						if(isSessionSupported)
							sessionStorage.setItem(this.getAttribute("name"), val);
						
						return val;
					  });
					 
					});
					
					$( window ).load(function(){
						try{
							sessionStorage.setItem("isSessionSupported", true);
						}catch(err){
							isSessionSupported = false;
						}
						if(sessionStorage.getItem("loan_type_radio") != null && isSessionSupported){	
							$("#"+sessionStorage.getItem("loan_type_radio")).click();
						}
						if(sessionStorage.getItem("property_type_radio") != null && isSessionSupported){	
							$("#"+sessionStorage.getItem("property_type_radio")).click();
						}
						resetToDefault();
					});

					$("[name='property_type_radio']").click(function(){
						if(($('input#loan_type_radio-2').is(':checked') && this.value == "commercial") || 
						   ($('input#loan_type_radio-1').is(':checked') && this.value == "commercial")){
							$("#cashout_div_label").attr("style","padding-left:15px!important");
							$("#cashout_div_radio").attr("style","padding-left:15px!important");
							$("#cashout_div_desc").attr("style","padding-left:15px!important");
						}else{
							$("#cashout_div_label").attr("style","");
							$("#cashout_div_radio").attr("style","");
							$("#cashout_div_desc").attr("style","");
						}
					});	
					
					$('body').on('click','.option li',function(){
						var i = $(this).parents('.select').attr('id');
						var v = $(this).children().text();
						var o = this.getAttribute('id');
						if(v == "-- Please Select --")
							return;
						$('#'+i+' .selected').attr('id',o);
						if(v != "Others"){
							$('#'+i+' .selected').html('<span class="dropdown-span-left">'+v+"</span><span><img class='dropdown-img' src='"+$(this).find("img")[0].src+"'></span>");
						}else{
							$('#'+i+' .selected').html('<span class="dropdown-span-left">'+v+"</span>");
						}
						$(".selected").attr("class", "selected selected-custom");
						$("#current_financer_ddl").val(v);
						if(isSessionSupported){
							sessionStorage.setItem('current_financer_ddl', v);
							sessionStorage.setItem('current_financer_selected', $('#'+i+' .selected').html());
						}
					});

					$("#tenure_minus").click(function(){
						var value;
						if($("#loan_tenure_txt").val() != ""){
							value = parseInt($("#loan_tenure_txt").val()) - 1;
							if(value < 1){
								value = 1;
							}
						}else{
							value = 1;
						}
						$("#loan_tenure_txt").val(value);
						if(isSessionSupported){
							sessionStorage.setItem("loan_tenure_txt", value);
						}
					});
					
					$("#tenure_plus").click(function(){
						var value;
						if($("#loan_tenure_txt").val() != ""){
							value = parseInt($("#loan_tenure_txt").val()) + 1;
							if(value > 30){
								value = 30;
							}
						}else{
							value = 1;
						}

						$("#loan_tenure_txt").val(value);
						if(isSessionSupported){
							sessionStorage.setItem("loan_tenure_txt", value);
						}
					});
					
					$("#package_submit_addon").click(function(){
						$("#package_submit_btn").click();
					});

					$('#package_form input[type="radio"]').on('click',function(){
						if(isSessionSupported){
							sessionStorage.setItem(this.getAttribute("name"), this.getAttribute("id"));
						}
					});
					
					$('#package_form input:not([type="radio"])').bind('keyup change',function(){
						if(isSessionSupported){
							sessionStorage.setItem(this.getAttribute("name"), this.value);
						}
					});
					
					$("#scroll_top_btn").click(function(){
						$('body').scrollTop(0);
					});
					
					$('#sort_bank').click(function () {
						var sort = this.getAttribute("data-sort");
						for (var i = 0; i < $divs.length - 1; i++) {
							var min = i;
							for (var j = i + 1; j < $divs.length; j++) {
								if(sort == "asc"){
									if ($divs[j].getAttribute("data-bank") < $divs[min].getAttribute("data-bank")) {
										min = j;
									}
									this.setAttribute("data-sort","desc");
									$(this).find("span").attr("class","glyphicon glyphicon-menu-up sort-result");
								}else{
									if ($divs[j].getAttribute("data-bank") > $divs[min].getAttribute("data-bank")) {
										min = j;
									}
									this.setAttribute("data-sort","asc");
									$(this).find("span").attr("class","glyphicon glyphicon-menu-down sort-result");
								}
							}
							if(min != i) {
								var target = $divs[i];
								$divs[i] = $divs[min];
								$divs[min] = target;
							}
						}
						
						$("#sort-container").html($divs);
					});
					$('#sort_rate_type').click(function () {
						var sort = this.getAttribute("data-sort");
						for (var i = 0; i < $divs.length - 1; i++) {
							var min = i;
							for (var j = i + 1; j < $divs.length; j++) {
								if(sort == "asc"){
									if ($divs[j].getAttribute("data-rate-type") < $divs[min].getAttribute("data-rate-type")) {
										min = j;
									}
									this.setAttribute("data-sort","desc");
									$(this).find("span").attr("class","glyphicon glyphicon-menu-up sort-result");
								}else{
									if ($divs[j].getAttribute("data-rate-type") > $divs[min].getAttribute("data-rate-type")) {
										min = j;
									}
									this.setAttribute("data-sort","asc");
									$(this).find("span").attr("class","glyphicon glyphicon-menu-down sort-result");
								}
							}
							if(min != i) {
								var target = $divs[i];
								$divs[i] = $divs[min];
								$divs[min] = target;
							}
						}
						
						$("#sort-container").html($divs);
					});
					$('#sort_lock_in').click(function () {
						var sort = this.getAttribute("data-sort");
						for (var i = 0; i < $divs.length - 1; i++) {
							var min = i;
							for (var j = i + 1; j < $divs.length; j++) {
								if(sort == "asc"){
									if ($divs[j].getAttribute("data-lock-in") < $divs[min].getAttribute("data-lock-in")) {
										min = j;
									}
									this.setAttribute("data-sort","desc");
									$(this).find("span").attr("class","glyphicon glyphicon-menu-up sort-result");
								}else{
									if ($divs[j].getAttribute("data-lock-in") > $divs[min].getAttribute("data-lock-in")) {
										min = j;
									}
									this.setAttribute("data-sort","asc");
									$(this).find("span").attr("class","glyphicon glyphicon-menu-down sort-result");
								}
							}
							if(min != i) {
								var target = $divs[i];
								$divs[i] = $divs[min];
								$divs[min] = target;
							}
						}
						
						$("#sort-container").html($divs);
					});
					$('#sort_interest_rate').click(function () {
						var sort = this.getAttribute("data-sort");
						for (var i = 0; i < $divs.length - 1; i++) {
							var min = i;
							for (var j = i + 1; j < $divs.length; j++) {
								if(sort == "asc"){
									if ($divs[j].getAttribute("data-interest-rate") < $divs[min].getAttribute("data-interest-rate")) {
										min = j;
									}
									this.setAttribute("data-sort","desc");
									$(this).find("span").attr("class","glyphicon glyphicon-menu-up sort-result");
								}else{
									if ($divs[j].getAttribute("data-interest-rate") > $divs[min].getAttribute("data-interest-rate")) {
										min = j;
									}
									this.setAttribute("data-sort","asc");
									$(this).find("span").attr("class","glyphicon glyphicon-menu-down sort-result");
								}
							}
							if(min != i) {
								var target = $divs[i];
								$divs[i] = $divs[min];
								$divs[min] = target;
							}
						}
						
						$("#sort-container").html($divs);
					});
					$('#sort_monthly_instalments').click(function () {
						var sort = this.getAttribute("data-sort");
						for (var i = 0; i < $divs.length - 1; i++) {
							var min = i;
							for (var j = i + 1; j < $divs.length; j++) {
								if(sort == "asc"){
									if ($divs[j].getAttribute("data-monthly-instalments") < $divs[min].getAttribute("data-monthly-instalments")) {
										min = j;
									}
									this.setAttribute("data-sort","desc");
									$(this).find("span").attr("class","glyphicon glyphicon-menu-up sort-result");
								}else{
									if ($divs[j].getAttribute("data-monthly-instalments") > $divs[min].getAttribute("data-monthly-instalments")) {
										min = j;
									}
									this.setAttribute("data-sort","asc");
									$(this).find("span").attr("class","glyphicon glyphicon-menu-down sort-result");
								}
							}
							if(min != i) {
								var target = $divs[i];
								$divs[i] = $divs[min];
								$divs[min] = target;
							}
						}
						
						$("#sort-container").html($divs);
					});


					// $("#existing_loan_amount_txt").attr("required", false);
					// $("#current_financer_ddl").attr("required", false);
					// $("#current_interest_rate_txt").attr("required", false);
					// $("#loan_amount_txt").attr("required", true);
					
					//Private Residential
					$("#property_type_radio-1").click(function(){
						document.getElementById("current_property").value = privateChoice;
						if(default_tab == new_loan_tab){
							showNewLoanTabForm();
						}else if(default_tab == refinance_tab){
							showRefinanceTabForm();
						}else{
							return;
						}
						resetToDefault();
					});
					
					//HDB
					$("#property_type_radio-2").click(function(){
						document.getElementById("current_property").value = hdbChoice;
						if(default_tab == new_loan_tab){
							showNewLoanTabForm();
						}else if(default_tab == refinance_tab){
							showRefinanceTabHDBForm();
						}else{
							return;
						}
						resetToDefault();
					});
					
					//Commercial
					$("#property_type_radio-3").click(function(){
						document.getElementById("current_property").value = commercialChoice;
						if(default_tab == new_loan_tab){
							showNewLoanTabForm();
						}else if(default_tab == refinance_tab){
							showRefinanceTabCommercialForm();
						}else{
							return;
						}
						resetToDefault();
					});	
				});

				function updateMoreDetailsButton(btn, btnObj){
					var value = btn.getAttribute("data-more"),
						$parentBlock = btnObj.closest('.filters-table-content');
					if(value == "more"){
						$(btn).find("input").val("");
						var span = $(btn).find("span")[1];
						span.setAttribute("class","glyphicon glyphicon-minus")
						btn.setAttribute("data-more","less");
						if($(window).width() < 767){
							$parentBlock.addClass('expanded');
						}
					}else{
						$(btn).find("input").val("");
						var span = $(btn).find("span")[1];
						span.setAttribute("class","glyphicon glyphicon-plus")
						btn.setAttribute("data-more","more");
						if($(window).width() < 767){
							$parentBlock.removeClass('expanded');
						}	
					}
				}

				//Update which tab choosed New loan / Refinance
				function updateTab(tab) {
					var tab = tab.getAttribute("data-page-type");
					document.getElementById("current_tab").value = tab;
					if(tab == new_loan_tab){
						default_tab = new_loan_tab;
						if(sessionStorage.getItem("property_type_radio") != null && isSessionSupported){	
							$("#"+sessionStorage.getItem("property_type_radio")).click();
						}else{
							$("#property_type_radio-1").click();
						}
						resetToDefault();
					}else if(tab == refinance_tab){
						default_tab = refinance_tab;
						if(sessionStorage.getItem("property_type_radio") != null && isSessionSupported){	
							$("#"+sessionStorage.getItem("property_type_radio")).click();
						}else{
							$("#property_type_radio-1").click();
						}
						resetToDefault();
					}else{
						return;
					}
				}

				// Refinance private residential form
				function showRefinanceTabForm(){
					// $("#existing_loan_amount_txt").attr("required", true);
					//$("#current_financer_ddl").attr("required", true);
					// $("#current_interest_rate_txt").attr("required", true);
					// $("#loan_amount_txt").attr("required", false);
					$("#construction_status_id").attr("class","hide");
					$("#property_purchase_id").attr("class","hide");
					$("#rates_id").attr("class","show");
					$("#individual_or_company_radio_id").attr("class","hide");
					$("#cashout_radio_id").attr("class","show");
					$("#existing_loan_amount_id").attr("class","show");
					$("#current_financer_id").attr("class","show");
					$("#current_interest_rate_id").attr("class","show");
					$("#loan_ammount_id").attr("class","hide");	
				}

				// Refinance HDB form
				function showRefinanceTabHDBForm(){
					// $("#existing_loan_amount_txt").attr("required", true);
					//$("#current_financer_ddl").attr("required", true);
					// $("#current_interest_rate_txt").attr("required", true);
					// $("#loan_amount_txt").attr("required", false);
					$("#construction_status_id").attr("class","hide");
					$("#property_purchase_id").attr("class","hide");
					$("#rates_id").attr("class","show");
					$("#individual_or_company_radio_id").attr("class","hide");
					$("#cashout_radio_id").attr("class","hide");
					$("#existing_loan_amount_id").attr("class","show");
					$("#current_financer_id").attr("class","show");
					$("#current_interest_rate_id").attr("class","show");
					$("#loan_ammount_id").attr("class","hide");
				}

				// Refinance Commercial form
				function showRefinanceTabCommercialForm(){
					// $("#existing_loan_amount_txt").attr("required", true);
					//$("#current_financer_ddl").attr("required", true);
					// $("#current_interest_rate_txt").attr("required", true);
					// $("#loan_amount_txt").attr("required", false);
					$("#construction_status_id").attr("class","hide");
					$("#property_purchase_id").attr("class","hide");
					$("#rates_id").attr("class","show");
					$("#individual_or_company_radio_id").attr("class","show");
					$("#cashout_radio_id").attr("class","show");
					$("#existing_loan_amount_id").attr("class","show");
					$("#current_financer_id").attr("class","show");
					$("#current_interest_rate_id").attr("class","show");
					$("#loan_ammount_id").attr("class","hide");
				}

				// New loan private residential & HDB & commercial form
				function showNewLoanTabForm(){
					// $("#existing_loan_amount_txt").attr("required", false);
					// $("#current_financer_ddl").attr("required", false);
					// $("#current_interest_rate_txt").attr("required", false);
					// $("#loan_amount_txt").attr("required", true);
					$("#construction_status_id").attr("class","show");
					$("#property_purchase_id").attr("class","show");
					$("#rates_id").attr("class","show");
					$("#individual_or_company_radio_id").attr("class","hide");
					$("#cashout_radio_id").attr("class","hide");
					$("#existing_loan_amount_id").attr("class","hide");
					$("#current_financer_id").attr("class","hide");
					$("#current_interest_rate_id").attr("class","hide");
					$("#loan_ammount_id").attr("class","show");
				}

				// // New loan private commercial form
				// function showNewLoanTabCommercialForm(){
					// // $("#existing_loan_amount_txt").attr("required", true);
					// //$("#current_financer_ddl").attr("required", true);
					// // $("#current_interest_rate_txt").attr("required", true);
					// // $("#loan_amount_txt").attr("required", false);
					// $("#construction_status_id").attr("class","hide");
					// $("#property_purchase_id").attr("class","hide");
					// $("#rates_id").attr("class","show");
					// $("#individual_or_company_radio_id").attr("class","show");
					// $("#cashout_radio_id").attr("class","show");
					// $("#existing_loan_amount_id").attr("class","show");
					// $("#current_financer_id").attr("class","show");
					// $("#current_interest_rate_id").attr("class","show");
					// $("#loan_ammount_id").attr("class","hide");
				// }


				//reset all radio input to first choice
				function resetToDefault(){
					// $("#loan_tenure_txt").val("");
					// $("#existing_loan_amount_txt").val("");
					// $("#current_financer_ddl").val("");
					// $("#current_interest_rate_txt").val("");
					// $("#property_value_txt").val("");
					// $("#loan_amount_txt").val("");
					// $("#contact_name_txt").val("");
					// $("#phone_txt").val("");
					// $("#email_txt").val("");
					if(sessionStorage.getItem("construction_status_radio") != null && isSessionSupported){	
						$("#"+sessionStorage.getItem("construction_status_radio")).click();
					}else{
						$("#construction_status_radio-1").prop("checked",true);
					}
					if(sessionStorage.getItem("property_purchase_radio") != null && isSessionSupported){	
						$("#"+sessionStorage.getItem("property_purchase_radio")).click();
					}else{
						$("#property_purchase_radio-1").prop("checked",true);
					}
					if(sessionStorage.getItem("rates_radio") != null && isSessionSupported){	
						$("#"+sessionStorage.getItem("rates_radio")).click();
					}else{
						$("#rates_radio-3").prop("checked",true);
					}
					if(sessionStorage.getItem("individual_or_company_radio") != null && isSessionSupported){	
						$("#"+sessionStorage.getItem("individual_or_company_radio")).click();
					}else{
						$("#individual_or_company_radio-1").prop("checked",true);
					}
					if(sessionStorage.getItem("cashout_radio") != null && isSessionSupported){	
						$("#"+sessionStorage.getItem("cashout_radio")).click();
					}else{
						$("#cashout_radio-1").prop("checked",true);
					}
					if(sessionStorage.getItem("current_financer_ddl") != null && isSessionSupported){	
						$("#current_financer_ddl").val(sessionStorage.getItem("current_financer_ddl"));
					}
					if(sessionStorage.getItem("current_financer_selected") != null && isSessionSupported){	
						$(".selected").html(sessionStorage.getItem("current_financer_selected"));
						$(".selected").attr("class", "selected selected-custom");
					}
					if(sessionStorage.getItem("existing_loan_amount_txt") != null && isSessionSupported){	
						$("#existing_loan_amount_txt").val(sessionStorage.getItem("existing_loan_amount_txt"));
					}
					if(sessionStorage.getItem("current_interest_rate_txt") != null && isSessionSupported){	
						$("#current_interest_rate_txt").val(sessionStorage.getItem("current_interest_rate_txt"));
					}
					if(sessionStorage.getItem("property_value_txt") != null && isSessionSupported){	
						$("#property_value_txt").val(sessionStorage.getItem("property_value_txt"));
					}
					if(sessionStorage.getItem("loan_amount_txt") != null && isSessionSupported){	
						$("#loan_amount_txt").val(sessionStorage.getItem("loan_amount_txt"));
					}

					if(sessionStorage.getItem("loan_tenure_txt") != null && isSessionSupported){	
						if(sessionStorage.getItem("loan_tenure_txt") == ""){
							$("#loan_tenure_txt").val(30);
							sessionStorage.setItem("loan_tenure_txt", 30);
						}else{
							$("#loan_tenure_txt").val(sessionStorage.getItem("loan_tenure_txt"));	
						}		
					}else{	
						$("#loan_tenure_txt").val(30);
						if(sessionStorage != null && isSessionSupported){		
							sessionStorage.setItem("loan_tenure_txt", 30);
						}
					}

					if(sessionStorage.getItem("contact_name_txt") != null && isSessionSupported){	
						$("#contact_name_txt").val(sessionStorage.getItem("contact_name_txt"));
					}

					if(sessionStorage.getItem("phone_txt") != null && isSessionSupported){	
						$("#phone_txt").val(sessionStorage.getItem("phone_txt"));
					}

					if(sessionStorage.getItem("email_txt") != null && isSessionSupported){	
						$("#email_txt").val(sessionStorage.getItem("email_txt"));
					}

				}

				$('.expand-input').on('click', function(){
					updateMoreDetailsButton($(this)[0], $(this));
				});
		});
}(jQuery));				