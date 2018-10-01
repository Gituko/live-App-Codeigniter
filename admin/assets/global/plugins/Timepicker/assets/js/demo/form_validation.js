/*
 * MoonCake v1.3 - Form Validation Demo JS
 *
 * This file is part of MoonCake, an Admin template build for sale at ThemeForest.
 * For questions, suggestions or support request, please mail me at maimairel@yahoo.com
 *
 * Development Started:
 * July 28, 2012
 * Last Update:
 * November 14, 2012
 *
 */

;(function( $, window, document, undefined ) {
			
	var demos = {
	};

	$(document).ready(function() {
							   
		if($.fn.select2) {
			
			$( '.select2-select' ).select2();
			
		}
		
		if( $.fn.validate ) {
			
			
			$("#validate-1").validate({
				rules: {
					req1: {
						required: true
					}, 
					email1: {
						required: true, 
						email: true
					}, 
					url1: {
						required: true, 
						url: true
					}, 
					pass1: {
						required: true, 
						minlength: 5
					}, 
					cpass1: {
						required: true, 
						minlength: 5, 
						equalTo: '[name="pass1"]'
					}, 
					digits1: {
						required: true, 
						digits: true
					}
				}, 
				invalidHandler: function(form, validator) {
					var errors = validator.numberOfInvalids();
					if (errors) {
						var message = errors == 1
						? 'You missed 1 field. It has been highlighted'
						: 'You missed ' + errors + ' fields. They have been highlighted';
						$("#da-ex-val1-error").html(message).show();
					} else {
						$("#da-ex-val1-error").hide();
					}
				}
			});
			
			$("#validate-2").validate({
				rules: {
					minl1: {
						required: true, 
						minlength: 5
					}, 
					maxl1: {
						required: true, 
						maxlength: 5
					}, 
					rangel1: {
						required: true, 
						rangelength: [5, 10]
					}, 
					min1: {
						required: true, 
						digits: true, 
						min: 5
					}, 
					max1: {
						required: true, 
						digits: true, 
						max: 5
					}, 
					range1: {
						required: true, 
						digits: true, 
						range: [5, 10]
					}
				}, 
				invalidHandler: function(form, validator) {
					var errors = validator.numberOfInvalids();
					if (errors) {
						var message = errors == 1
						? 'You missed 1 field. It has been highlighted'
						: 'You missed ' + errors + ' fields. They have been highlighted';
						$("#da-ex-val2-error").html(message).show();
					} else {
						$("#da-ex-val2-error").hide();
					}
				}
			});
			
			$("#validate-3").validate({
				ignore: '.ignore', 
				rules: {
					gender: {
						required: true
					}, 
					sport: {
						required: true
					}, 
					file1: {
						required: true, 
						accept: ['.jpeg']
					}, 
					dd1: {
						required: true
					}, 
					chosen1: {
						required: true
					}, 
					spin1: {
						required: true, 
						min: 5, 
						max: 10
					}
				}
			});
			
			$("#validate-4").validate({
				rules: {
					email: {
						required: true, 
						email: true
					}, 
					pass2: {
						required: true, 
						minlength: 5
					}, 
					cpass2: {
						required: true, 
						minlength: 5, 
						equalTo: '#pass2'
					}, 
					address: {
						required: "#souvenirs:checked"
					}
				}
			});
			$("#validate-subject").validate({
				rules: {
					subject_name: {
						required: true
					},
					title: {
						required: true
					},
					matatag: {
						required: true
					},
					subject_image: {
						required: true
					},
					
				}
			});
			$("#validate-pages").validate({
				rules: {
					title: {
						required: true
					},
					
					metatag: {
						required: true
					},
					subject_id: {
						required: true
					},
					category_id: {
						required: true
					},
					chapter_id: {
						required: true
					},
					page_name: {
						required: true
				},
				
				}
			});
			$("#validate-Page").validate({
				rules: {
					merchant_email: {
						required: true
					},
					
					merchant_password: {
						required: true
					},
					merchant_name: {
						required: true
						
					},
					merchant_company_name: {
						required: true
					},
					merchant_company_registration_num: {
						required: true
					},
					merchant_company_start_business_date: {
						required: true
				},
				
				merchant_company_phone: {
						required: true
				},
				
				}
			});
			
			$("#validate-Subject_Category").validate({
				rules: {
					subject_id: {
						required: true
					},
					metatag: {
						required: true
					},
					title: {
						required: true
					},
					category_name: {
						required: true
					},
					chapter_name: {
						required: true
					},
					category_image: {
						required: true
					},
					cleditor: {
						required: true
					},
				}
			});
			
			
	
			
			
			
			$("#validate-Add_Chapter").validate({
				rules: {
					subject_id: {
						required: true
					},
					metatag: {
						required: true
					},
					title: {
						required: true
					},
					category_id: {
						required: true
					},
					chapter_name: {
						required: true
					},
				}
			});
			
			$("#validate-Exams_Category").validate({ 
				rules: {
					exm_title: {
						required: true
					},
					exm_name: {
						required: true
					},
					title: {
						required: true
					},
					exm_detail: {
						required: true
					},
					exm_syllabus: {
						required: true
					},
					exm_notice: {
						required: true
					},
					metatag: {
						required: true
					},
					/*pdf_upload: {
						required: true
					},
					word_upload: {
						required: true
					},
					exm_pdf: {
						required: true
					},*/
					exm_date: {
						required: true
					},
				}
			});
			
			$("#validate-Model_Paper").validate({
				rules: {
					exm_cat_id: {
						required: true
					},
					paper_name: {
						required: true
					},
					metatag: {
						required: true
					},
					title: {
						required: true
					},
					paper_set: {
						required: true
					},
					paper_desc: {
						required: true
					},
					paper_part: {
						required: true
					},
					paper_type: {
						required: true
					},
					paper_date: {
						required: true
					},
				}
			});
			
			$("#validate-Upcoming_Exams").validate({
				rules: {
					subject_name: {
						required: true
					},
					how_many_position: {
						required: true
					},
					minimum_qualification: {
						required: true
					},
					exm_venue: {
						required: true
					},
					model_qus: {
						required: true
					},
					answer: {
						required: true
					},
					exam1: {
						required: true
					},
					exam: {
						required: true
					},
				}
			});
			
			$("#validate-Model_Question").validate({
				rules: {
					exm_cat_id: {
						required: true
					},
					model_paper_id: {
						required: true
					},
					question_part: {
						required: true
					},
					question: {
						required: true
					},
					question_option: {
						required: true
					},
					answer: {
						required: true
					},
					question_image: {
						required: true
					},
					question_type: {
						required: true
					},
					explanation: {
						required: true
					},
				}
			
			});
			
			$("#validate-Add_Banner").validate({
				rules: {
					banner_name: {
						required: true
					},
					banner_type: {
						required: true
					},
					banner_position: {
						required: true
					},
					banner_size: {
						required: true
					},
					banner_msg: {
						required: true
					
					},
					banner_image: {
						required: true
					
					},
				}
			
			});
			 $("#validate-Gallery").validate({
				rules: {
					gallery_title: {
						required: true
					},
					name_gallery: {
						required: true
					},
					res_logo_image: {
						required: true
					},
					gallery_link: {
						required: true
					},
				}
			
			});
			  
			  $("#validate-Add_Managment").validate({
				rules: {
					banner_image: {
						required: true
					},
					banner_type: {
						required: true
					},
					banner_position: {
						required: true
					},
					banner_position: {
						required: true
					},
					
					
				}
			
			});
			  
			  $("#validate-News").validate({
				rules: {
					news_title: {
						required: true
					},
					gallery_name: {
						required: true
					},
					news_link: {
						required: true
									
					},
					news_post_date: {
						required: true
									
					},
					news_post_buy: {
						required: true
									
					},
				}
			
			});
				$("#validate-Add_Question_Answer").validate({
				rules: {
					subject_id: {
						required: true
					},
					category_id: {
						required: true
					},
					chapter_id: {
						required: true
					},
					question: {
						required: true
					},
					question_option: {
						required: true
					},
					answer: {
						required: true
					},
					question_image: {
						required: true
					},
					question_type: {  
						required: true
					},
					question_ans_post_date: {
						required: true
					},
					question_ans_type2: {
						required: true
					},
					special_qus_type: {
						required: true
					},
					question_ans_type1: {
						required: true
					},
					
					
				}
			});
				$("#validate-Job_Category").validate({
				rules: {
					job_title: {
						required: true
					},
				}
			});
				$("#validate-Add_Job").validate({
				rules: {
					job_category_id: {
						required: true
					},
					job_company: {
						required: true
					},
					job_place: {
						required: true
					},
				    job_post_date: {
						required: true
					},
				}
			});
				$("#validate-Add_Shop").validate({
				rules: {
					shop_image: {
						required: true
					},
					title: {
						required: true
					},
					shop_overview: {
						required: true
					},
				    pdf_upload: {
						required: true
					},
					 shop_cost: {
						required: true
					},
					shop_post_date: {
						required: true
					},
				}
			});
				
			$("#validate-user").validate({
				rules: {
					res_user_name: {
						required: true 
						}, 
					res_logo_image: {
						required: true 
						},
					res_address: {
						required: true 
						},
					res_phone: {
						required: true 
						},
					res_email: {
						required: true,
						email: true
						}, 
					res_password: {       
						required: true 
						},
				}
			});
			$("#validate-changepassword").validate({
				rules: {
					password: {
						required: true, 
						}, 
					npassword: {
						required: true, 
						minlength: 6
					}, 
					cpassword: {
						required: true, 
						minlength: 6, 
						equalTo: '[name="npassword"]'
					},
				}
				
			});

			
		}
		
	});
	
	$(window).load(function() {
		
		// When all page resources has finished loading
	});
	
}) (jQuery, window, document);