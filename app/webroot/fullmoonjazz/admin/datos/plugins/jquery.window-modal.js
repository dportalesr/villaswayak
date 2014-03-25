/* ------------------------------------------------------------------------
	Author: Lucas Pelegrino
	Version: 1.0
------------------------------------------------------------------------- */
(function(){
    $.fn.windowModal = function(options) {
            if(options == 'close'){
                close();            
            }else if(options == 'current'){
                return getCurrentModal();            
            }else{
                var defaults = {
                    top: '200px',
					draggable: true,
                    overlayOpacity: 0.5,
                    closeSelector: '.close'
                }, $overlay = null, $modal = null, $btClose = $('<div class="bt-close">\'</div>');

                if(this[0]){
                    options = $.extend(defaults, options);

                    if($('#overlay')[0])
                        $overlay = $('#overlay');
                    else
                        $overlay = $('<div id="overlay"></div>');

                    $overlay.css({background: 'black', width: '100%', height: '100%', position: 'fixed', zIndex: 99998, top: 0, left: 0}).hide();
                    $('body').append($overlay);

                    
                  	$modal = $(this).removeAttr('hidden').prependTo($('body'));
                    $modal.append($btClose).find(options.closeSelector + ', .bt-close').click(function(e){ return false; }).click(close);
                    $overlay.click(close).fadeTo(350, options.overlayOpacity);
					
                    
					function modalPos(){
						var width = $modal.outerWidth(),
							height = $modal.outerHeight(),
							cssOptions = { 
								position: 'fixed',
								zIndex: 99999999,
								left: '50%',
								marginLeft: -($modal.outerWidth()/2) + 'px',
								top: options.top
							};
					
						if(options.top == 'center'){
							options.top = '50%';
							options.marginTop = -(height/2) + 'px';
						}
						$modal.css(cssOptions);
					}
					
					$(window).resize(modalPos);
					modalPos();
            		$modal.hide().fadeIn().addClass('window-modal').removeClass('window-modal-hidden');
                }
                return this;
            }

			function close(){
        		$overlay.fadeOut(200);
        		$modal.removeClass('window-modal').addClass('window-modal-hidden').hide();
			}
            function getCurrentModal(){
                return $modal;
            }
        }
})(jQuery);
