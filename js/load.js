$(function(){
	var timer;
	var x = 'uuid/'+$.cookie('uuid')+'/ajax.json';
	console.log($.cookie('uuid'));
	function ajax(){
		$.ajax({
			url:x,
			type:"post",
			success:function(res){
				var json = eval(res);
				$('.pic').css({'background':'url('+json.src+') no-repeat','background-size':'cover'})
			}
		})
	}
//	timer=setInterval(ajax,1000);
	ajax();
})
