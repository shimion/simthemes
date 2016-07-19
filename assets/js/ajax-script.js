jQuery(document).ready(function($) {


				$(".yith-wcwl-add-button" ).on('click', '.add_to_wishlist', function() {
							//alert($(this).attr( "date" ));
							$('.st_count').addClass("animated shake");
							$(this).parent().parent().find('.yith-wcwl-wishlistaddedbrowse').show().removeClass("hide").addClass("show");
							$(this).hide().addClass("hide").removeClass("show");
				
							var data_product_id = $(this).attr('data-product-id');
								var var_st_add_to_wishlist = {action: "st_add_to_wishlist", product_id: data_product_id};	
								$.post(_appointments_data.ajax_url, var_st_add_to_wishlist, function(response) {
										
											if ( response && response.error ){
												alert(response.error);
												
											}else{
												
												
												//alert(response.data);
												$('.st_wishlist_menu').prepend(response.data);
												$('.st_count').replaceWith(response.count);
												$('.st_count').removeClass("animated pulse");
											}
									
									},'json');
									
									

						});						
	


				 $(document).on( 'click', '.remove_from_wishlist', function( ev ){
							//alert($(this).attr( "date" ));
							$('.st_count').addClass("animated shake");
				
							var data_product_id = $(this).parent().parent().parent().attr('data-row-id');
												//alert(data_product_id);
							var remove_product_id = ".remove_product_id_"+ data_product_id;
								var var_remove_count_down_cart_item = {action: "remove_count_down_cart_item", product_id: data_product_id};	
								$.post(_appointments_data.ajax_url, var_remove_count_down_cart_item, function(response) {
										
											if ( response && response.error ){
												alert(response.error);
												
											}else{
												
												
												//alert(data_product_id);
												//$('.st_wishlist_menu').prepend(response.data);
												$('.st_count').replaceWith(response.count);
												$('.st_count').removeClass("animated pulse");
												$( remove_product_id ).remove();
											}
									
									},'json');
									
									 ev.preventDefault();

						});						








	$('#ajax-load').click(function(e){
		e.preventDefault();
		//alert("Shimion");
		$(this).html('<i class="fa fa-spinner fa-spin"></i>Loading');
		
		//var moreLink = 'more_projects_'+moreSet+'.html';
        
/*        $.get(moreLink, function(data){
			
			//$('#ajax-load').html('<i class="fa fa-plus-circle"></i>Load More');
		
            $('.projects-container .row').append(data);
			
			var currFilter = $('#filter-works .active a').data('filter');
			$('.projects-container .loaded-item').each(function(){
				$(this).addClass('filtered');
				if ($(this).is(currFilter)){
					$(this).removeClass('filtered');
				}
			});
			
			$('.projects-container .loaded-item .enlarge').colorbox({ maxWidth:"85%", maxHeight:"85%"});
			
			var i = 1,
			delay = [];
			$('.loaded-item .project-thumb').each(function(i){
				i++;
				var elem = $(this);
				delay[i] = setTimeout(function(){
					elem.addClass('in');
				},200*i);
			})
			
			$('.projects-container .loaded-item').removeClass('loaded-item')
				.find('.project-thumb .main-link,.project-thumb .link').click(function(e){
				e.preventDefault();
				
				
				var elem =$(this).parents('.project-item');
		
				if (elem.find('.link').length < 1){
					justEnlarge(elem);
					return false;
				}
				
				if($(this).parents('.project-item').is('.filtered')){return false;}
				
				$('html,body').scrollTo(0,'#preview-scroll',
					{
						gap:{y:-120},
						animation:{
							duration:500
						}
				});
				
				if(elem.is('.active')){return false;}
				
				else if($('#project-preview').is('.open')){
					closePreview();
					elem.addClass('active');
					setTimeout(function(){
						buildPreview(elem);
						openPreview();
					},500);
				}
				
				else{
					elem.addClass('active');
					buildPreview(elem);
					openPreview();
				}
			});
			
			scrollSpyRefresh();
			waypointsRefresh();
			
		}) .fail(function() {
				$('#ajax-load').html('No More Projects');
			});*/	
		
		//moreSet=moreSet+1;
		var available = $(this).attr('data-load');
		var portfolio_column = $(this).attr('data-column');
		var portfolio_num = $('.projects-container').attr('data-pass');
		var currFilter = $('#filter-works .active a').data('filter');
		var portfolio_num =  Number(portfolio_num) + Number(available);
        $.ajax({
            type: 'POST',
           dataType: 'json',
            url: ajax_load_portfolio_object.ajaxurl,
            data: { 
                'action': 'ajax_load_portfolio', //calls wp_ajax_nopriv_ajaxlogin
                'number': portfolio_num, 	
				'portfolio_column': portfolio_column,
				'currFilter': currFilter			
				
				},
            success: function(data){
			//alert(portfolio_num);
            //$('#count_total').text(data.total_user);   
			$('#portfolio-container-row').html(data.massage) ;   
		   $("#ajax-load").html('<i class="fa fa-plus-circle"></i>LOAD MORE');  
		   $('.projects-container .loaded-item').removeClass('loaded-item')
            $('.projects-container').attr({"data-pass" : portfolio_num  });
			
			
			
			
			var currFilter = $('#filter-works .active a').data('filter');
			$('.projects-container .loaded-item').each(function(){
				$(this).addClass('filtered');
				if ($(this).is(currFilter)){
					$(this).removeClass('filtered');
				}
			});

			
			
			
			$('.projects-container .loaded-item .enlarge').colorbox({ maxWidth:"85%", maxHeight:"85%"});
            },
			error: function(data) 
			{
            // $('#portfolio-container').append('sorry') ;   
        
			}
			
			
        });
        e.preventDefault();		
		
		
		
		
		
		
		
		
		
    });


});
