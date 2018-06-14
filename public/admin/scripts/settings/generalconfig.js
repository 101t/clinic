(function($){
	var _token = $("meta[name=_token]").attr("content");
	var url2action = $("input[name=url2action]").val();
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
						output += '<td>'+val.website+'</td>';
						output += '<td>'+val.email+'</td>';
						output += '<td>'+val.lang+'</td>';
						output += '<td class="text-center">'+
							'<div class="dropdown">'+
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
			if ($("#collectionlist tr").length > 0) {
				toastr.error(main_trans["youcannotaddmorethanoneserver"], {closeButton: true, progressBar: true,});
				return false;
			}
			$("#addeditmodal .modal-title").html(main_trans["addemailserver"]);
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
					$("#addeditmodal .modal-title").html(main_trans["editemailserver"]);
					$("#addeditmodalform input[name=name]").val(value.name);
					$("#logo_url").html(value.logo ? '<a href="/'+value.logo+'" target="_blank">'+main_trans["preview"]+'</a>': main_trans["noimage"]);
					$("#logo2_url").html(value.logo2 ? '<a href="/'+value.logo2+'" target="_blank">'+main_trans["preview"]+'</a>': main_trans["noimage"]);
					$("#favicon_url").html(value.favicon ? '<a href="/'+value.favicon+'" target="_blank">'+main_trans["preview"]+'</a>': main_trans["noimage"]);
					$("#footer_url").html(value.footer ? '<a href="/'+value.footer+'" target="_blank">'+main_trans["preview"]+'</a>': main_trans["noimage"]);
					$("#addeditmodalform textarea[name=short_about]").val(value.short_about);
					$("#addeditmodalform textarea[name=short_services]").val(value.short_services);
					$("#addeditmodalform textarea[name=short_blog]").val(value.short_blog);
					$("#addeditmodalform textarea[name=short_faq]").val(value.short_faq);
					$("#addeditmodalform textarea[name=meta_description]").val(value.meta_description);
					$("#addeditmodalform textarea[name=meta_keywords]").val(value.meta_keywords);
					$("#addeditmodalform textarea[name=google_analytics]").val(value.google_analytics);
					$("#addeditmodalform textarea[name=about]").val(value.about);
					$("#addeditmodalform textarea[name=address]").val(value.address);

					$("#addeditmodalform input[name=phone1]").val(value.phone1);
					$("#addeditmodalform input[name=phone2]").val(value.phone2);
					$("#addeditmodalform input[name=mobile]").val(value.mobile);
					$("#addeditmodalform input[name=fax]").val(value.fax);
					$("#addeditmodalform input[name=website]").val(value.website);
					$("#addeditmodalform input[name=email]").val(value.email);
					$("#addeditmodalform input[name=reset_password]").prop('checked', value.reset_password);
					$("#addeditmodalform input[name=theme]").val(value.theme);
					$("#addeditmodalform input[name=welcome]").val(value.welcome);
					$("#addeditmodalform input[name=facebook]").val(value.facebook);
					$("#addeditmodalform input[name=whatsapp]").val(value.whatsapp);
					$("#addeditmodalform input[name=viber]").val(value.viber);
					$("#addeditmodalform input[name=skype]").val(value.skype);
					$("#addeditmodalform input[name=linkedin]").val(value.linkedin);
					$("#addeditmodalform input[name=twitter]").val(value.twitter);
					$("#addeditmodalform input[name=instagram]").val(value.instagram);
					$("#addeditmodalform input[name=google]").val(value.google);
					$("#addeditmodalform input[name=youtube]").val(value.youtube);
					$("#addeditmodalform input[name=vimeo]").val(value.vimeo);
					$("#addeditmodalform textarea[name=useterms]").val(value.useterms);
					$("#addeditmodalform textarea[name=privacypolicy]").val(value.privacypolicy);
					$("#addeditmodalform input[name=latitude]").val(value.latitude);
					$("#addeditmodalform input[name=longitude]").val(value.longitude);
					$("#addeditmodalform textarea[name=copyright]").val(value.copyright);

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