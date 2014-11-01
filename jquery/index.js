$(document).ready(function(){
	var left = $('#box').position().left;
	var top = $('#box').position().top;
	var width = $('#box').width();

	$('#search_result').css('left', left).css('top', top+32).css('width', width);
	

	$('#search_box').keyup(function(){
		var value = $(this).val();

		if(value != ''){

			var send = {
				action : "go_search",
				value : value
			};

			$.ajax({
				type : 'GET',
				url : 'search.php',
				data : send,
				success:function(r){
					$('#search_result').html(r);
				}
			}) 
		}
	})
})