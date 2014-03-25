jQuery(function(){
	
	// fns
	function getMetadata(el){
		if(jQuery().metadata)
			return el.metadata();
		return {};
	}
	
	function imagesFolderPath(){
		return 'images/';
	}
	
	$('li a[href="#"]').click(function(e){ e.preventDefault(); });
	
	$('.quick-actions .alt').each(function(){
		$(this).append('<span class="pointer" />');
	});
	
	
	$('#top-scroller').click(function(e){
		$('html, body').animate({
			scrollTop: 0
		}, 1000);
		e.preventDefault();
	});
	
	$(window).scroll(function(){
		if($(window).scrollTop() > 200){
			$('#top-scroller').fadeIn();
		}else{
			$('#top-scroller').fadeOut();
		}
	}).resize(function(){
		if($(window).width() < 580){
			$('.menus > nav:nth-child(odd)').addClass('each2');
		}else{
			$('.each2').removeClass('each2');
		}
	}).resize().scroll();
	
	$('.menus ul li').each(function(){
		var $this = $(this), $submenu = $this.find('nav');
		
		if($submenu[0]){
			$this.addClass('with-submenu');
			
			if($this.is('.active'))
				$this.addClass('open');
				
			$this.find('> a').click(function(){
				var $this = $(this).closest('.with-submenu');
				
				if($this.is('.open')){
					$submenu.slideUp();
					$this.removeClass('open');
				}else{
					$submenu.slideDown();
					$this.addClass('open');
				}
			});
		}
	});
	
	// Form
    if(jQuery().uniform)
		$('input[type=radio], input[type=checkbox], select:not([multiple], .chosen)').watch(function(){			
			if(jQuery().uniform)
				this.uniform();
		});
	
    if(jQuery().uniform)
		$('input[type=file]').watch(function(){
			var $this = this;
			$this.uniform(getMetadata(this));
			var $parent = $this.parent().mousemove(function(e){
				if(!$(e.target).is('input')){
					$this.css({
						left: e.pageX - $parent.offset().left - $this.width() + 15,
						top: e.pageY - $parent.offset().top - 15
					});
				}
			});
		}, true);
	
    if(jQuery().chosen)
		$('.chosen').watch(function(){
			this.chosen().next().removeAttr('style').find('.chzn-search input[type=text]').removeAttr('style');
		}, true);

    if(jQuery().spinner)
		$('.spinner').watch(function(){
			this.spinner(getMetadata(this)).removeAttr('style');
			this.next().removeAttr('style');
			this.next().find('*').removeAttr('style');
		}, true);
		
	if(jQuery().elastic)
		$('.elastic').watch(function(){
			this.elastic();
		});
		
	if(jQuery().miniColors){
		$('.colorpicker').watch(function(){
			this.miniColors(getMetadata(this));
		}, true);
		
		$('.miniColors-trigger').watch(function(){
			if(this.prev().is('input[type=text]')){
				this.prev().css('float', 'left').css('margin-right', -29);
				this.css({position: 'relative', top: 3});
			}
		}, true);
	}
	
    if(jQuery().datepicker)
		$('input.datepicker').watch(function(){
			var $this = this, options = getMetadata(this);
			if(this.is('.inline')){
				var other = $('<div />', {'class': 'datepicker'});
				$this.after(other).hide();
				options.altField = $this;
				$this = other;
			}
			$this.datepicker(options);
		}, true);
		
	if(jQuery().reportprogress){
		$('.progressbar').watch(function(){
			var opts = getMetadata(this);
			
			this.reportprogress(opts.value ? opts.value : 0);
		}, true);
	}

    if(jQuery().slider){
		$('.slider').watch(function(){
			var opts = {}, $this = this;
			if($this.attr('id')){
				opts.slide = function( event, ui ) {
					var value, before = '', after = '', value = '';
					
					if(opts.outputBefore){
						before = opts.outputBefore;
					}
					if(opts.outputAfter){
						after = opts.outputAfter;
					}
					
					if(opts.range){
						value = before + ui.values[0] + after + ' - ' + before + ui.values[1] + after;
					}else{
						value = before + ui.value + after;
					}
					
					$('output[for=' + $this.attr('id') + ']').html(value);
				}
			}
			
			opts = $.extend({}, opts, getMetadata(this));
			$this.slider(opts);
		}, true);
	}
	
	// tooltip
	if(jQuery().tipsy){
		$('.tip').watch(function(){
			if(!this.attr('original-title')){
				var gravity = this.attr('data-position');

				if(!gravity)
					gravity = $.fn.tipsy.autoNS;
					
				this.tipsy({gravity: gravity});
			}
		}, true);
	}
	
	// gallery
	
	function filterGallery(type){
		var $list = $('.gallery .media-list article');
	
		if(type === undefined)
			type = 'all';
			
		$list.removeClass('inactive');
		
		if(type != 'all'){
			$list.filter('[data-category!=' + type + ']').addClass('inactive');
		}
	}
	
	$('.gallery .media-list article').watch(function(){
		var $title = this.find('.title');
		
		$title.css('bottom', -$title.outerHeight()).data('org-bottom', $title.outerHeight());
		
		this.mouseenter(function(){
			$title.stop(true, true).animate({bottom: 0});
		}).mouseleave(function(){
			$title.stop(true, true).animate({bottom: -$title.outerHeight()});
		});
	}, true);
	
	$('.gallery .filter-list li').each(function(){
		var $this = $(this), $a = $this.find('a');
		
		$a.click(function(e){
			$(this).parent().addClass('active').siblings().removeClass('active');
			filterGallery($(this).attr('href').replace('#', ''));
			e.preventDefault();
		});
		
		if($this.is('.active'))
			$a.click();
	});
	
	// notifications
	$('.msg-box').watch(function(){
		var $box = this;
		
		if(this.is('.closeable')){
			var $close = $('<span class="close">\'</span>');
			
			this.prepend($close);
			
			$close.click(function(){
				$box.slideUp(function(){
					$box.remove();
				});
			});
		}
	}, true);


	if(jQuery().mask){
		// masks
		$.mask.definitions['~'] = '[+-]';
		$('.mask-date').mask('99/99/9999');
		$('.mask-expiration-date').mask('99/99');
		$('.mask-phone').mask('(999) 999-9999');
		$('.mask-phoneext').mask("(999) 999-9999? x99999");
		$(".mask-tin").mask("99-9999999");
		$(".mask-ssn").mask("999-99-9999");
		$(".mask-product").mask("a*-999-a999",{placeholder:" "});
		$(".mask-eyescript").mask("~9.99 ~9.99 999");
	}
	
	if(jQuery().elrte){
		$('textarea.editor').watch(function(){
			if($.browser.msie && $.browser.version < 9){
				this.html('Content');
			}
			
			this.elrte({
				toolbar: 'normal',
				styleWithCSS : false,
				height: 250
			});
			
		}, true)
		
	}
	
	// Validation
	if(jQuery().validate){
		$('.js-validate').watch(function(){
			
			this.validate({
				onclick: false,
				onkeyup: false,
				onfocusout: false,
				meta: 'validate',
				success: function(label){
					var c = label.closest('.field');
					
					if(!c[0])
						c = label.parent();
						
					c.removeClass('error-container');
				},
				errorPlacement: function(error, element) {						
					element.closest('.field').addClass('error-container').append(error);
				}
			});
		});
		
		// bugfix
		setInterval(function(){ $('label.error').each(function(){ if($(this).html() != '') $(this).closest('.field').addClass('error-container'); });}, 500);
	}
	
	// Icon
	$('[class^="fugue-"], [class*=" fugue-"]').watch(function(){
		this.css('background', 'url(' + imagesFolderPath() + 'fugue/' + this.attr('class').match(/fugue-([a-zA-Z0-9_-]+)/)[1]  + '.png)');
	}, true);
	
	// DataTable
	
	if(jQuery().dataTable){
		(function(){
			$.fn.wrapInnerTexts = function($with){
				if(!$with)
					$with = $('<span class="textnode" />');

				$(this).each(function(){
					var kids = this.childNodes;
							for (var i=0,len=kids.length;i<len;i++){
								if (kids[i].nodeName == '#text'){
									$(kids[i]).wrap($with.clone().addClass('i-' + i));
								}
							}
				});
				return $(this);
			};
			
			$('.datatable').watch(function(){
				this.dataTable({
					sPaginationType: 'full_numbers',
					sDom: '<"header-table"lf>rt<"footer-table"ip>',
					oLanguage: { oPaginate: {
						sFirst: '&lsaquo; first',
						sPrevious: '&laquo; previous',
						sNext: 'next &raquo;',
						sLast: 'last &rsaquo;'
					}},
					fnInitComplete: function(t){
						var $table = $(t.nTable), $head = $table.prev();
						setTimeout(function(){
							$head.find('.selector').wrap('<div class="entry" />');
						}, 400);
						$table.wrap('<div class="table-wrapper"></div>');
						$head.find('.dataTables_length label').wrapInnerTexts();
						$head.find('.dataTables_filter label').wrapInnerTexts();
						$head.find('input[type=text]').wrap('<div class="entry with-icon"></div>').parent().prepend('<div class="icon-wrapper"><i class="fugue-magnifier"></i></div>');
						$table.find('.sorting, .sorting_asc, .sorting_desc').wrapInner($('<div class="parentsort" />')).find('.parentsort').append('<div class="sorticon" />');
					}
				});
			});
		})();
	}
	
	if(jQuery().windowModal){
		// open link as modal
		$('.modal-trigger').watch(function(){
			this.click(function(e){
				var modal = $($(this).attr('href')).windowModal({top: 100});
				e.preventDefault();
			});
		}, true)
	}
	
	
	if(jQuery().validationEngine){
		$('.validate-engine').each(function(){
			var $form = $(this),
				options = {
					promptPosition: 'centerRight',
					autoHideDelay: 30000,
					binded: false,
					autoPositionUpdate: true
				};
			
			if($form.closest('.single')[0]){
				options.onValidationComplete = function(form, success){
					var _this = this;
					if($(form).closest('.single')[0]){
							$('.single label').each(function(){
								var $label = $(this), $input = $label.find("["+_this.validateAttribute+"*=validate]");
								
								if($input[0]){
									if($.inArray($label.find('input')[0], _this.InvalidFields) === -1){
										$label.removeClass('ve-error-container').addClass('ve-success-container');
									}else{
										$label.removeClass('ve-success-container').addClass('ve-error-container');
									}
								}
							});
					
							if(success){
								$(form).validationEngine('detach').submit();
							}
						}
				}
			}
			
			$form.validationEngine(options);
		});
	}
	
	$('.alt .pointer').click(function(){
		var $this = $(this), $nav = $this.closest('li').find('nav:not(.submenu)').clone();
		
		if($this.closest('li').find('.submenu')[0])
			$this.closest('li').find('.submenu').fadeIn();
		else
			$this.after($nav.addClass('submenu'));
	});
	
	if(jQuery().fullCalendar){
		// full calendar
		$('.fullcalendar').fullCalendar({
			editable: true,
			header: {
				left: 'prev,next',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			}
		});
	}
	
	if(jQuery().elfinder){
		// filemanger
		$('.filemanager').elfinder({
			url : 'connectors/php/connector.php',
			toolbar : [
				['back', 'reload'],
				['select', 'open'],
				['quicklook', 'rename'],
				['resize', 'icons', 'list']
			],
			contextmenu : {
				cwd : ['reload', 'delim', 'info'], 
				file : ['select', 'open', 'rename'], 
			}
		});
	}
	
	
	// Widget
	$('.widget').watch(function(){
		var $widget = this,
			$widgetHeader = this.find('> header'),
			$widgetH2 = $widgetHeader.find('h2'),
			$icon = $widgetHeader.find('> i'),
			$widgetTabs = $widgetHeader.find('nav'),
			$widgetContent = this.find('.content'),
			$widgetSection = this.find('> header nav, .widget-section'),
			$bg = $('<div class="bg" />').height($widgetH2.outerHeight()-1);
		
		$widget.addClass('js-init');
		$widgetH2.before($bg);
		
		if($icon[0]){
			this.addClass('with-icon');
			$icon.append('<div class="shadow" />');
		}
		
		if(this.is('.minimizable')){
			$widgetHeader.append('<div class="collapse-bt" />');
			
			$widgetHeader.find('.collapse-bt').click(function(){
				$widgetSection.slideToggle();
				$widget.toggleClass('close');
			});
			
			if(this.is('.close'))
				$widgetHeader.click();
		}
			
		if($widgetTabs[0] && $widgetTabs.is('.tabbed')){
			var currentActiveTab = $widgetTabs.find('li.active a').attr('href'), auto;
			$widgetContent.find('> section:not(' + currentActiveTab + ')').hide();
			$widgetTabs.find('a').click(function(e){
				var $self = $(this), is = $self.is($('a[href=' + currentActiveTab + ']')), tabsHeight = $widgetTabs.height();
				if($self.attr('href')[0] == '#'){
					var cur = $(currentActiveTab);
					var origHeight = cur.css('height');
					cur.hide();
					currentActiveTab = $self.attr('href');
					cur = $(currentActiveTab);
					var realHeight = cur.show().height('auto').height(); cur.hide();
					$self.closest('nav').find('li').removeClass('active').filter($self.parent()).addClass('active');
					
					if($widget.is('.tabbed-vertical') && realHeight < tabsHeight){
						realHeight = tabsHeight;
						auto = false;
					}else{
						auto = true;
					}
					
					cur.show().css('opacity', 0).height(origHeight).animate({height: realHeight}, function(){
						if(auto)
							cur.height('auto');
							
						cur.css('opacity', '1').hide().fadeIn();
					});
				
					e.preventDefault();
				}else if(is){
					e.preventDefault();
				}
			});
		}
	}, true);
	
	// bugfix
	setInterval(function(){
		$('.widget').each(function(){
			var $h2 = $(this).find('> header > h2'), $bg = $(this).find('> header > .bg');
			
			if($bg[0] != undefined && $bg.height() != $h2.outerHeight()){
				$bg.height($h2.outerHeight()-1);
			}
		});
	}, 1000);
		
	// submenu
	(function(){
	
		function open(submenu){
			submenu.closest('.with-submenu').addClass('open').removeClass('close');
			submenu.fadeIn();
		}
	
		function close(){
			$('.submenu').fadeOut(function(){
				$(this).css('style', '').addClass('close');
			}).closest('.with-submenu').removeClass('open');
		}
		
		function isSubmenu(el){
			return $(el).closest('.with-submenu')[0];
		}
	
		$('.with-submenu').watch(function(){
			var self = (this.find('.pointer')[0] ? this.find('.pointer') : this), submenu = this.find('.submenu');
			
			submenu.addClass('close');
			self.click(function(){
				open(submenu);
			});
			
		}, true);

		$('body').click(function(e){
			if(!isSubmenu(e.target) )
				close();

		});
	})();
});