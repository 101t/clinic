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
						output += '<td>'+(val.img ?'<a href="'+val.img+'" target="_blank">'+val.img+'</a>':main_trans["noimage"])+'</td>';
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
			$("#addeditmodal .modal-title").html(main_trans["addhairtrans"]);
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
					$("#addeditmodal .modal-title").html(main_trans["edithairtrans"]);
					$("#addeditmodalform input[name=name]").val(value.name);
					$("#addeditmodalform textarea[name=body]").val(value.body);
					$("#img_url").html(value.img ? '<a href="'+value.img+'" target="_blank">'+main_trans["preview"]+'</a>': main_trans["noimage"]);
					$("#addeditmodalform input[name=lang]").val(value.lang);
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