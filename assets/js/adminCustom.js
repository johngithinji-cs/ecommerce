$(function (){
	$(document).ready(function (){
		$('.delcat').click(function (){
			var id = $(this).data('id');
			var text = $(this).data('text');
			$.ajax({
				type : 'POST',
				url : surl + 'admin/deleteCategory',
				data: {
					id: id,
					text:text
				},
				success:function(data){
					var ndata = JSON.parse(data);
					if(ndata.return == true){
						$('.error').text(ndata.message);
						$('.ccat'+id).fadeOut();

					}
					else if (ndata.return == false){
						$('.error').text(ndata.message);

					}else{
						$('.error').text('something went wrong');

					}
				},
				error:function () {
					$('.error').text('something went wrong');
				}
			});

		});
		$('.delproduct').click(function (){
			var id = $(this).data('id');
			var text = $(this).data('text');
			$.ajax({
				type : 'POST',
				url : surl + 'admin/deleteProduct',
				data: {
					id: id,
					text:text
				},
				success:function(data){
					var ndata = JSON.parse(data);
					if(ndata.return == true){
						$('.error').text(ndata.message);
						$('.ccat'+id).fadeOut();

					}
					else if (ndata.return == false){
						$('.error').text(ndata.message);

					}else{
						$('.error').text('something went wrong');

					}
				},
				error:function () {
					$('.error').text('something went wrong');
				}
			});

		});
		$('.delmodel').click(function (){
			var id = $(this).data('id');
			var text = $(this).data('text');
			$.ajax({
				type : 'POST',
				url : surl + 'admin/deleteModel',
				data: {
					id: id,
					text:text
				},
				success:function(data){
					var ndata = JSON.parse(data);
					if(ndata.return == true){
						$('.error').text(ndata.message);
						$('.delmodel'+id).fadeOut();

					}
					else if (ndata.return == false){
						$('.error').text(ndata.message);

					}else{
						$('.error').text('something went wrong');

					}
				},
				error:function () {
					$('.error').text('something went wrong');
				}
			});

		});
		$(function (){
			$('.add_spec').click(function(){
				var sp_count = $('.sp_cn').length;
				var items = "";
				items +="<div class='form-group contspecal rmov"+sp_count+"'>";
				items +="<input type='text' name='sp_value[]',class='form-control sp_cn' placeholder='spec value'>";
				items +="<a href='javascript:void(0)' class='remov_spec' data-id="+sp_count+">-</a>";
				items +="</div>";
				console.log(sp_count);
				if(sp_count <= 5){
					$('.htmlitems').append(items);
				}
			});
		});
		$('body').on("click",".remov_spec",function (){
			var curnt = $(this).data('id');
			console.log(curnt);
			$('.rmov'+curnt).remove();
		});
		$('.delSpec').click(function (){
			var id = $(this).data('id');
			var text = $(this).data('text');
			$.ajax({
				type : 'POST',
				url : surl + 'admin/deleteSpec',
				data: {
					id: id,
					text:text
				},
				success:function(data){
					var ndata = JSON.parse(data);
					if(ndata.return == true){
						$('.error').text(ndata.message);
						$('.delSpec'+id).fadeOut();

					}
					else if (ndata.return == false){
						$('.error').text(ndata.message);

					}else{
						$('.error').text('something went wrong');

					}
				},
				error:function () {
					$('.error').text('something went wrong');
				}
			});

		});
	});//ready ends here
});
