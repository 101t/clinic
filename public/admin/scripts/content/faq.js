(function($){
	var icon_list = ['fa-glass', 'fa-music', 'fa-search', 'fa-envelope-o', 'fa-heart', 'fa-star', 'fa-star-o', 'fa-user', 'fa-film', 'fa-th-large', 'fa-th', 'fa-th-list', 'fa-check', 'fa-times', 'fa-search-plus', 'fa-search-minus', 'fa-power-off', 'fa-signal', 'fa-cog', 'fa-trash-o', 'fa-home', 'fa-file-o', 'fa-clock-o', 'fa-road', 'fa-download', 'fa-arrow-circle-o-down', 'fa-arrow-circle-o-up', 'fa-inbox', 'fa-play-circle-o', 'fa-repeat', 'fa-refresh', 'fa-list-alt', 'fa-lock', 'fa-flag', 'fa-headphones', 'fa-volume-off', 'fa-volume-down', 'fa-volume-up', 'fa-qrcode', 'fa-barcode', 'fa-tag', 'fa-tags', 'fa-book', 'fa-bookmark', 'fa-print', 'fa-camera', 'fa-font', 'fa-bold', 'fa-italic', 'fa-text-height', 'fa-text-width', 'fa-align-left', 'fa-align-center', 'fa-align-right', 'fa-align-justify', 'fa-list', 'fa-outdent', 'fa-indent', 'fa-video-camera', 'fa-picture-o', 'fa-pencil', 'fa-map-marker', 'fa-adjust', 'fa-tint', 'fa-pencil-square-o', 'fa-share-square-o', 'fa-check-square-o', 'fa-arrows', 'fa-step-backward', 'fa-fast-backward', 'fa-backward', 'fa-play', 'fa-pause', 'fa-stop', 'fa-forward', 'fa-fast-forward', 'fa-step-forward', 'fa-eject', 'fa-chevron-left', 'fa-chevron-right', 'fa-plus-circle', 'fa-minus-circle', 'fa-times-circle', 'fa-check-circle', 'fa-question-circle', 'fa-info-circle', 'fa-crosshairs', 'fa-times-circle-o', 'fa-check-circle-o', 'fa-ban', 'fa-arrow-left', 'fa-arrow-right', 'fa-arrow-up', 'fa-arrow-down', 'fa-share', 'fa-expand', 'fa-compress', 'fa-plus', 'fa-minus', 'fa-asterisk', 'fa-exclamation-circle', 'fa-gift', 'fa-leaf', 'fa-fire', 'fa-eye', 'fa-eye-slash', 'fa-exclamation-triangle', 'fa-plane', 'fa-calendar', 'fa-random', 'fa-comment', 'fa-magnet', 'fa-chevron-up', 'fa-chevron-down', 'fa-retweet', 'fa-shopping-cart', 'fa-folder', 'fa-folder-open', 'fa-arrows-v', 'fa-arrows-h', 'fa-bar-chart', 'fa-twitter-square', 'fa-facebook-square', 'fa-camera-retro', 'fa-key', 'fa-cogs', 'fa-comments', 'fa-thumbs-o-up', 'fa-thumbs-o-down', 'fa-star-half', 'fa-heart-o', 'fa-sign-out', 'fa-linkedin-square', 'fa-thumb-tack', 'fa-external-link', 'fa-sign-in', 'fa-trophy', 'fa-github-square', 'fa-upload', 'fa-lemon-o', 'fa-phone', 'fa-square-o', 'fa-bookmark-o', 'fa-phone-square', 'fa-twitter', 'fa-facebook', 'fa-github', 'fa-unlock', 'fa-credit-card', 'fa-rss', 'fa-hdd-o', 'fa-bullhorn', 'fa-bell', 'fa-certificate', 'fa-hand-o-right', 'fa-hand-o-left', 'fa-hand-o-up', 'fa-hand-o-down', 'fa-arrow-circle-left', 'fa-arrow-circle-right', 'fa-arrow-circle-up', 'fa-arrow-circle-down', 'fa-globe', 'fa-wrench', 'fa-tasks', 'fa-filter', 'fa-briefcase', 'fa-arrows-alt', 'fa-users', 'fa-link', 'fa-cloud', 'fa-flask', 'fa-scissors', 'fa-files-o', 'fa-paperclip', 'fa-floppy-o', 'fa-square', 'fa-bars', 'fa-list-ul', 'fa-list-ol', 'fa-strikethrough', 'fa-underline', 'fa-table', 'fa-magic', 'fa-truck', 'fa-pinterest', 'fa-pinterest-square', 'fa-google-plus-square', 'fa-google-plus', 'fa-money', 'fa-caret-down', 'fa-caret-up', 'fa-caret-left', 'fa-caret-right', 'fa-columns', 'fa-sort', 'fa-sort-desc', 'fa-sort-asc', 'fa-envelope', 'fa-linkedin', 'fa-undo', 'fa-gavel', 'fa-tachometer', 'fa-comment-o', 'fa-comments-o', 'fa-bolt', 'fa-sitemap', 'fa-umbrella', 'fa-clipboard', 'fa-lightbulb-o', 'fa-exchange', 'fa-cloud-download', 'fa-cloud-upload', 'fa-user-md', 'fa-stethoscope', 'fa-suitcase', 'fa-bell-o', 'fa-coffee', 'fa-cutlery', 'fa-file-text-o', 'fa-building-o', 'fa-hospital-o', 'fa-ambulance', 'fa-medkit', 'fa-fighter-jet', 'fa-beer', 'fa-h-square', 'fa-plus-square', 'fa-angle-double-left', 'fa-angle-double-right', 'fa-angle-double-up', 'fa-angle-double-down', 'fa-angle-left', 'fa-angle-right', 'fa-angle-up', 'fa-angle-down', 'fa-desktop', 'fa-laptop', 'fa-tablet', 'fa-mobile', 'fa-circle-o', 'fa-quote-left', 'fa-quote-right', 'fa-spinner', 'fa-circle', 'fa-reply', 'fa-github-alt', 'fa-folder-o', 'fa-folder-open-o', 'fa-smile-o', 'fa-frown-o', 'fa-meh-o', 'fa-gamepad', 'fa-keyboard-o', 'fa-flag-o', 'fa-flag-checkered', 'fa-terminal', 'fa-code', 'fa-reply-all', 'fa-star-half-o', 'fa-location-arrow', 'fa-crop', 'fa-code-fork', 'fa-chain-broken', 'fa-question', 'fa-info', 'fa-exclamation', 'fa-superscript', 'fa-subscript', 'fa-eraser', 'fa-puzzle-piece', 'fa-microphone', 'fa-microphone-slash', 'fa-shield', 'fa-calendar-o', 'fa-fire-extinguisher', 'fa-rocket', 'fa-maxcdn', 'fa-chevron-circle-left', 'fa-chevron-circle-right', 'fa-chevron-circle-up', 'fa-chevron-circle-down', 'fa-html5', 'fa-css3', 'fa-anchor', 'fa-unlock-alt', 'fa-bullseye', 'fa-ellipsis-h', 'fa-ellipsis-v', 'fa-rss-square', 'fa-play-circle', 'fa-ticket', 'fa-minus-square', 'fa-minus-square-o', 'fa-level-up', 'fa-level-down', 'fa-check-square', 'fa-pencil-square', 'fa-external-link-square', 'fa-share-square', 'fa-compass', 'fa-caret-square-o-down', 'fa-caret-square-o-up', 'fa-caret-square-o-right', 'fa-eur', 'fa-gbp', 'fa-usd', 'fa-inr', 'fa-jpy', 'fa-rub', 'fa-krw', 'fa-btc', 'fa-file', 'fa-file-text', 'fa-sort-alpha-asc', 'fa-sort-alpha-desc', 'fa-sort-amount-asc', 'fa-sort-amount-desc', 'fa-sort-numeric-asc', 'fa-sort-numeric-desc', 'fa-thumbs-up', 'fa-thumbs-down', 'fa-youtube-square', 'fa-youtube', 'fa-xing', 'fa-xing-square', 'fa-youtube-play', 'fa-dropbox', 'fa-stack-overflow', 'fa-instagram', 'fa-flickr', 'fa-adn', 'fa-bitbucket', 'fa-bitbucket-square', 'fa-tumblr', 'fa-tumblr-square', 'fa-long-arrow-down', 'fa-long-arrow-up', 'fa-long-arrow-left', 'fa-long-arrow-right', 'fa-apple', 'fa-windows', 'fa-android', 'fa-linux', 'fa-dribbble', 'fa-skype', 'fa-foursquare', 'fa-trello', 'fa-female', 'fa-male', 'fa-gratipay', 'fa-sun-o', 'fa-moon-o', 'fa-archive', 'fa-bug', 'fa-vk', 'fa-weibo', 'fa-renren', 'fa-pagelines', 'fa-stack-exchange', 'fa-arrow-circle-o-right', 'fa-arrow-circle-o-left', 'fa-caret-square-o-left', 'fa-dot-circle-o', 'fa-wheelchair', 'fa-vimeo-square', 'fa-try', 'fa-plus-square-o', 'fa-space-shuttle', 'fa-slack', 'fa-envelope-square', 'fa-wordpress', 'fa-openid', 'fa-university', 'fa-graduation-cap', 'fa-yahoo', 'fa-google', 'fa-reddit', 'fa-reddit-square', 'fa-stumbleupon-circle', 'fa-stumbleupon', 'fa-delicious', 'fa-digg', 'fa-pied-piper-pp', 'fa-pied-piper-alt', 'fa-drupal', 'fa-joomla', 'fa-language', 'fa-fax', 'fa-building', 'fa-child', 'fa-paw', 'fa-spoon', 'fa-cube', 'fa-cubes', 'fa-behance', 'fa-behance-square', 'fa-steam', 'fa-steam-square', 'fa-recycle', 'fa-car', 'fa-taxi', 'fa-tree', 'fa-spotify', 'fa-deviantart', 'fa-soundcloud', 'fa-database', 'fa-file-pdf-o', 'fa-file-word-o', 'fa-file-excel-o', 'fa-file-powerpoint-o', 'fa-file-image-o', 'fa-file-archive-o', 'fa-file-audio-o', 'fa-file-video-o', 'fa-file-code-o', 'fa-vine', 'fa-codepen', 'fa-jsfiddle', 'fa-life-ring', 'fa-circle-o-notch', 'fa-rebel', 'fa-empire', 'fa-git-square', 'fa-git', 'fa-hacker-news', 'fa-tencent-weibo', 'fa-qq', 'fa-weixin', 'fa-paper-plane', 'fa-paper-plane-o', 'fa-history', 'fa-circle-thin', 'fa-header', 'fa-paragraph', 'fa-sliders', 'fa-share-alt', 'fa-share-alt-square', 'fa-bomb', 'fa-futbol-o', 'fa-tty', 'fa-binoculars', 'fa-plug', 'fa-slideshare', 'fa-twitch', 'fa-yelp', 'fa-newspaper-o', 'fa-wifi', 'fa-calculator', 'fa-paypal', 'fa-google-wallet', 'fa-cc-visa', 'fa-cc-mastercard', 'fa-cc-discover', 'fa-cc-amex', 'fa-cc-paypal', 'fa-cc-stripe', 'fa-bell-slash', 'fa-bell-slash-o', 'fa-trash', 'fa-copyright', 'fa-at', 'fa-eyedropper', 'fa-paint-brush', 'fa-birthday-cake', 'fa-area-chart', 'fa-pie-chart', 'fa-line-chart', 'fa-lastfm', 'fa-lastfm-square', 'fa-toggle-off', 'fa-toggle-on', 'fa-bicycle', 'fa-bus', 'fa-ioxhost', 'fa-angellist', 'fa-cc', 'fa-ils', 'fa-meanpath', 'fa-buysellads', 'fa-connectdevelop', 'fa-dashcube', 'fa-forumbee', 'fa-leanpub', 'fa-sellsy', 'fa-shirtsinbulk', 'fa-simplybuilt', 'fa-skyatlas', 'fa-cart-plus', 'fa-cart-arrow-down', 'fa-diamond', 'fa-ship', 'fa-user-secret', 'fa-motorcycle', 'fa-street-view', 'fa-heartbeat', 'fa-venus', 'fa-mars', 'fa-mercury', 'fa-transgender', 'fa-transgender-alt', 'fa-venus-double', 'fa-mars-double', 'fa-venus-mars', 'fa-mars-stroke', 'fa-mars-stroke-v', 'fa-mars-stroke-h', 'fa-neuter', 'fa-genderless', 'fa-facebook-official', 'fa-pinterest-p', 'fa-whatsapp', 'fa-server', 'fa-user-plus', 'fa-user-times', 'fa-bed', 'fa-viacoin', 'fa-train', 'fa-subway', 'fa-medium', 'fa-y-combinator', 'fa-optin-monster', 'fa-opencart', 'fa-expeditedssl', 'fa-battery-full', 'fa-battery-three-quarters', 'fa-battery-half', 'fa-battery-quarter', 'fa-battery-empty', 'fa-mouse-pointer', 'fa-i-cursor', 'fa-object-group', 'fa-object-ungroup', 'fa-sticky-note', 'fa-sticky-note-o', 'fa-cc-jcb', 'fa-cc-diners-club', 'fa-clone', 'fa-balance-scale', 'fa-hourglass-o', 'fa-hourglass-start', 'fa-hourglass-half', 'fa-hourglass-end', 'fa-hourglass', 'fa-hand-rock-o', 'fa-hand-paper-o', 'fa-hand-scissors-o', 'fa-hand-lizard-o', 'fa-hand-spock-o', 'fa-hand-pointer-o', 'fa-hand-peace-o', 'fa-trademark', 'fa-registered', 'fa-creative-commons', 'fa-gg', 'fa-gg-circle', 'fa-tripadvisor', 'fa-odnoklassniki', 'fa-odnoklassniki-square', 'fa-get-pocket', 'fa-wikipedia-w', 'fa-safari', 'fa-chrome', 'fa-firefox', 'fa-opera', 'fa-internet-explorer', 'fa-television', 'fa-contao', 'fa-500px', 'fa-amazon', 'fa-calendar-plus-o', 'fa-calendar-minus-o', 'fa-calendar-times-o', 'fa-calendar-check-o', 'fa-industry', 'fa-map-pin', 'fa-map-signs', 'fa-map-o', 'fa-map', 'fa-commenting', 'fa-commenting-o', 'fa-houzz', 'fa-vimeo', 'fa-black-tie', 'fa-fonticons', 'fa-reddit-alien', 'fa-edge', 'fa-credit-card-alt', 'fa-codiepie', 'fa-modx', 'fa-fort-awesome', 'fa-usb', 'fa-product-hunt', 'fa-mixcloud', 'fa-scribd', 'fa-pause-circle', 'fa-pause-circle-o', 'fa-stop-circle', 'fa-stop-circle-o', 'fa-shopping-bag', 'fa-shopping-basket', 'fa-hashtag', 'fa-bluetooth', 'fa-bluetooth-b', 'fa-percent', 'fa-gitlab', 'fa-wpbeginner', 'fa-wpforms', 'fa-envira', 'fa-universal-access', 'fa-wheelchair-alt', 'fa-question-circle-o', 'fa-blind', 'fa-audio-description', 'fa-volume-control-phone', 'fa-braille', 'fa-assistive-listening-sys', 'fa-deaf', 'fa-glide', 'fa-glide-g', 'fa-sign-language', 'fa-low-vision', 'fa-viadeo', 'fa-viadeo-square', 'fa-snapchat', 'fa-snapchat-ghost', 'fa-snapchat-square', 'fa-pied-piper', 'fa-first-order', 'fa-yoast', 'fa-themeisle', 'fa-google-plus-official', 'fa-font-awesome'];
	var _token = $("meta[name=_token]").attr("content");
	var url2action = $("input[name=url2action]").val();
	function loaddataselect(){
		var output = "";
		$.each(icon_list, function(i, val){
			output += '<option value="'+val+'">'+val+'</option>';
		});
		$("#aem_lang").html(output);
	}
	loaddataselect();
	window.collection_manage = function(cmd, index){
		if (cmd == "list") {
			$.ajax({
				type: "POST",
				url: url2action,
				data: {
					_token: _token,
					s: 'list',
				},
				dataType:'json',
				cache:false,
				success: function(data){
					var value = data;var output = "";
					$.each(value, function(i, val){
						output += '<tr>';
						output += '<td>'+(i+1)+'</td>';
						output += '<td>'+val.name+'</td>';
						output += '<td><i class="fa '+val.icon+'"></i></td>';
						output += '<td>'+val.lang+'</td>';
						output += '<td class="text-center">'+
							'<span style="overflow: visible; width: 110px;">'+
								'<div class="dropdown">'+
									'<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown"><i class="la la-ellipsis-h"></i></a>'+
									'<div class="dropdown-menu dropdown-menu-right">'+
										'<a class="dropdown-item" href="javascript:void(0)" onclick="return collection_manage(\'edit\', '+val.id+')"><i class="la la-edit"></i> '+main_trans['edit']+'</a>'+
										'<a class="dropdown-item" href="javascript:void(0)" onclick="return collection_manage(\'delete\', '+val.id+')"><i class="la la-trash"></i> '+main_trans['delete']+'</a>'+
									'</div>'+
								'</div>'+
							'</span>'+
						'</td>';
						output += '</tr>';
					});
					$("#collectionlist").html(output);
				},
				error: function(jqXHR, textStatus, errorThrown){
					toastr.error(JSON.parse(jqXHR.responseText)["message"], {closeButton: true, progressBar: true,});
				}
			});
		} else if (cmd == "add") {
			$("#addeditmodal .modal-title").html(main_trans["addfaq"]);
			$("#addeditmodal input[name=id]").val(-1);
			$("#addeditmodal input[name=s]").val('add');
			$("#addeditmodal").modal("show");
		} else if (cmd == "edit") {
			$.ajax({
				type: "POST",
				url: url2action,
				data: {
					_token: _token,
					s: "read",
					id: index,
				},
				cache: false,
				dataType: "json",
				success: function(data){
					var value = data;
					$("#addeditmodal .modal-title").html(main_trans["editfaq"]);
					$("#addeditmodalform input[name=name]").val(value.name);
					$("#addeditmodalform textarea[name=body]").val(value.body);
					$("#addeditmodalform input[name=icon]").val(value.icon);
					$("#addeditmodalform select[name=lang]").val(value.lang);
					$("#addeditmodalform input[name=s]").val("edit");
					$("#addeditmodalform input[name=id]").val(value.id);
					$("#addeditmodal").modal("show");
				},
				error: function(jqXHR, textStatus, errorThrown){
					toastr.error(JSON.parse(jqXHR.responseText)["message"], {closeButton: true, progressBar: true,});
				}
			});
		} else if (cmd == "delete") {
			swal({
                title: main_trans["areyousuretodelete"],
                text: main_trans["youwontabletorevertthis"],
                type: 'warning',
                showCancelButton: true,
                cancelButtonClass: "btn btn-secondary m-btn m-btn--pill m-btn--icon",
                cancelButtonText: "<span><i class='la la-close'></i><span>"+main_trans["no"]+"</span>",
                confirmButtonClass: "btn btn-danger m-btn m-btn--pill m-btn--air m-btn--icon",
                confirmButtonText: "<span><i class='la la-trash-o'></i><span>"+main_trans["yes"]+"</span></span>",
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                    	type: "POST",
                    	url: url2action,
                    	data: {
                    		_token: _token,
                    		s: cmd,
                    		id: index,
                    	},
                    	dataType: "json",
                    	beforeSend: function(){},
						success: function(data){
							toastr.success(data["message"], {closeButton: true, progressBar: true,});
							collection_manage("list", -1);
						},
						error: function(jqXHR, textStatus, errorThrown){
							toastr.error(JSON.parse(jqXHR.responseText)["message"], {closeButton: true, progressBar: true,});
						}
                    })
                }
            });
		}
	}
	collection_manage("list", -1);
	$("#addeditmodalform").on("submit", function(e){
		e.preventDefault();
		var serializeform = new FormData(this);//$(this).serialize();
		var inputs = $(this).find("input, select, button, textarea");
		inputs.prop("disabled", true);
		$.ajax({
			type: "POST",
			url: $(this).attr("action"),
			data: serializeform,
			cache: false,
            contentType: false,
            processData: false,
			beforeSend: function(){},
			success: function(data){
				toastr.success(data["message"], {closeButton: true, progressBar: true,});
				inputs.prop("disabled", false);
				$(".modal").modal("hide");
				collection_manage("list", -1);
			},
			error: function(jqXHR, textStatus, errorThrown){
				toastr.error(JSON.parse(jqXHR.responseText)["message"], {closeButton: true, progressBar: true,});
				inputs.prop("disabled", false);
			}
		});
	});
})(jQuery);