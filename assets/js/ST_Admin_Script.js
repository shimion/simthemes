jQuery(document).ready(function($) {
  $('#contact_form_id option-tree-ui-select').change(function () {
    var val = $(this).val();

    if (val === 'textarea') {
      $('#contact_form_id textarea').show();
      $('#additional_values_7').show();
      $('#additional_values_10').hide();
      $('#additional_values_11').hide();
      $('#additional_values_12').hide();
      $('#additional_values_15').hide();
      $('#additional_values_16').hide();

    }
    else if (val === 'EBIX Smartoffice') {
      $('#additional_values_6').hide();
      $('#additional_values_7').hide();
      $('#additional_values_10').show();
      $('#additional_values_11').show();
      $('#additional_values_12').hide();
      $('#additional_values_15').hide();
      $('#additional_values_16').hide();

    }
    else if (val === 'Advisors Assistant') {
      $('#additional_values_6').hide();
      $('#additional_values_7').hide();
      $('#additional_values_10').hide();
      $('#additional_values_11').hide();
      $('#additional_values_12').show();
      $('#additional_values_15').hide();
      $('#additional_values_16').hide();

    }
    else if (val === 'Redtail') {
      $('#additional_values_6').hide();
      $('#additional_values_7').hide();
      $('#additional_values_10').hide();
      $('#additional_values_11').hide();
      $('#additional_values_12').hide();
      $('#additional_values_15').show();
      $('#additional_values_16').show();

    }
    else if (val === 'Pareto Platform') {
      $('#additional_values_6').hide();
      $('#additional_values_7').hide();
      $('#additional_values_10').hide();
      $('#additional_values_11').hide();
      $('#additional_values_12').hide();
      $('#additional_values_15').hide();
      $('#additional_values_16').hide();

    }
  });  


/*$('#setting_show_or_hide_slider_featured input').change(function() {
   var val = $('input[name=show_or_hide_slider_featured]:checked', '#setting_show_or_hide_slider_featured').val(); 
   //alert(val); 
    if (val === 'off') {
      $('#setting_show_slider').hide();
      $('#setting_select_slider').hide();
		}
});
*/
	$('.theme_icon_color_footer-wrap').hide();

	var val = $( ".footer_menu_or_social_icon option:selected" ).val();  
    if (val === 'social') {
      $('.theme_icon_color_footer-wrap').show('slow');
		}



  $('.footer_menu_or_social_icon').change(function () {
    var val = $(this).val();
    if (val === 'menu') {
      $('.theme_icon_color_footer-wrap').hide('slow');
		}else if(val === 'social'){
      $('.theme_icon_color_footer-wrap').show('hide');
		}

	 });


/*//Header Nevigation Section
	$('.header_top_selection-wrap').hide();

	var val = $( ".header_top option:selected" ).val();  
    if (val === 'show') {
      $('.header_top_selection-wrap').show('slow');
		}



  $('.header_top').change(function () {
    var val = $(this).val();
    if (val === 'hide') {
      $('.header_top_selection-wrap').hide('slow');
		}else if(val === 'show'){
      $('.header_top_selection-wrap').show('hide');
		}

	 });

*/

  
 });
 
 
 
 