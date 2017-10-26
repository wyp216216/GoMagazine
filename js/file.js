$(function(){
	$.cookie
	var timer;
	function uuid(){
		var uid = $.cookie('uuid');
		if(uid==null){
		$.ajax({
			url:"uuid.php",
			type:"post",
			data:{"uuid":$.cookie('uuid')},
			success:function(res){
				$.cookie('uuid',res);
				console.log(res);
				dir();
			}
		})}else{
			$.cookie('uuid');
		}
	};
	console.log($.cookie('uuid'))
	function dir(){
		$.ajax({
			url:'mkdir.php',
			type:"post",
			data:{"uuid":$.cookie('uuid')},
			success:function(r){
				console.log(r)
//				console.log($.cookie('uuid'));
			},
			errror:function(r){
				console.log(r);
			}
		})
	};
	function fle(){
		var picData = new FormData($('#FormData')[0]);
		$.ajax({
			url:"file.php",
			type:"post",
			data:picData,
			async:false,
			cache:false,
			contentType:false,
			processData:false
		}).done(function(res){
			console.log(res)
		}).fail(function(err){
			console.log(err)
		});
	};
	uuid();
	$('.btn').click(function ajax(){
				fle();
				window.location.href="http://www.xuanxiaoyunyou.cn/pic/load.html";
		}
	);
	$('.file').change(function(){
		$('.btn').css('z-index','10').text('确认提交');
	})
})
