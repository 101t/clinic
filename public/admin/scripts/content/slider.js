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
						output += '<td>'+val.img+'</td>';
						output += '<td>'+val.lang+'</td>';
						output += '<td class="text-center">'+
							'<div class="dropdown">'+
								'<button type="button" class="btn btn-default px-1 py-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
									'<i class="fa fa-cog"></i>'+
								'</button>'+
								'<div class="dropdown-menu dropdown-menu-right">'+
									'<a class="dropdown-item" href="javascript:void(0)" onclick="return collection_manage(\'edit\', '+val.id+')">'+main_trans['edit']+'</a>'+
									'<a class="dropdown-item" href="javascript:void(0)" onclick="return collection_manage(\'delete\', '+val.id+')">'+main_trans['delete']+'</a>'+
								'</div>'+
							'</div>'+
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
			$("#addeditmodal .modal-title").html(main_trans["addslide"]);
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
					$("#addeditmodal .modal-title").html(main_trans["editslide"]);
					$("#addeditmodalform input[name=name]").val(value.name);
					$("#addeditmodalform textarea[name=body]").val(value.body);
					$("#addeditmodalform input[name=float]").val(value.done == 1 ? 'true': 'false');
					$("#addeditmodalform input[name=url]").val(value.url);
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
                cancelButtonClass: "btn btn-default btn-sm",
                cancelButtonHtml: main_trans["no"],
                confirmButtonClass: "btn btn-danger btn-sm",
                confirmButtonHtml: main_trans["yes"],
            }, (function(result) {
                if (result) {
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
            }));
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