function x_alert_switch(n,title,text,type){
	title = title.toString().replace(/\\/g, '\\').replace(/\n/g, '<br />').replace(/\r/g, '<br />');
	text = text.toString().replace(/\\/g, '\\').replace(/\n/g, '<br />').replace(/\r/g, '<br />');
	type = type.toString().replace(/\\/g, '\\').replace(/\n/g, '<br />').replace(/\r/g, '<br />');
	
	
	switch(n)
	{
		case 1:
		
		swal(title,text);
	break;
	
	case 2:
		
		swal(title,text,type);
	break;
	
	case 3:
		
		swal(title,text,type);
	break;
	
	case 4:
		
			swal({
			title: title, 
			text: text, 
			type: type,
			showCancelButton: true,
			closeOnConfirm: false,
			confirmButtonText: "是的，我要删除",
			confirmButtonColor: "#ec6c62"
			}, function() {
				$.ajax({
					url: "./qtimages/do.php",
					type: "DELETE"
				}).done(function(data) {
					swal("操作成功!", "已成功删除数据！", "success");
				}).error(function(data) {
					swal("OMG", "删除操作失败了!", "error");
				});
			});
			
			
			
			
			
	break;
	
	case 5:
		swal({   
			title: title,   
			text: text,   
			imageUrl: type,
			html: true,
			timer: 5000,   
			showConfirmButton: false
		});
	break;
	
	case 6:

		swal({   
			title: title,   
			text: text,   
			type: "input",   
			showCancelButton: true,   
			closeOnConfirm: false,   
			animation: "slide-from-top",   
			inputPlaceholder: "填点东西到这里面吧" 
		}, function(inputValue){   
			if (inputValue === false) return false;      
			if (inputValue === "") {     
				swal.showInputError("请输入!");     
				return false   
			}      
			swal("棒极了!", "您填写的是: " + inputValue, "success"); 
		});
		
		
	break;
	
	default:break;
	}
};
function x_alert_switch_s(n){
	switch(n)
	{
		case 1:
		swal("这是一个信息提示框!");
	break;
	
	case 2:
		swal("Good!", "弹出了一个操作成功的提示框", "success");
	break;
	
	case 3:
		swal("OMG!", "弹出了一个错误提示框", "error");
	break;
	
	case 4:
		 swal({
			title: "您确定要删除吗？", 
			text: "您确定要删除这条数据？", 
			type: "warning",
			showCancelButton: true,
			closeOnConfirm: false,
			confirmButtonText: "是的，我要删除",
			confirmButtonColor: "#ec6c62"
			}, function() {
				$.ajax({
					url: "./qtimages/do.php",
					type: "DELETE"
				}).done(function(data) {
					swal("操作成功!", "已成功删除数据！", "success");
				}).error(function(data) {
					swal("OMG", "删除操作失败了!", "error");
				});
			});
	
			
	break;
	
	case 5:
		swal({   
			title: "Good!",   
			text: '自定义<span style="color:red">图片</span>、<a href="">HTML内容</a>。<br/>5秒后自动关闭。',   
			imageUrl: "images/thumbs-up.jpg",
			html: true,
			timer: 5000,   
			showConfirmButton: false
		});

	break;
	
	case 6:
		swal({   
			title: "输入框来了",   
			text: "这里可以输入并确认:",   
			type: "input",   
			showCancelButton: true,   
			closeOnConfirm: false,   
			animation: "slide-from-top",   
			inputPlaceholder: "填点东西到这里面吧" 
		}, function(inputValue){   
			if (inputValue === false) return false;      
			if (inputValue === "") {     
				swal.showInputError("请输入!");     
				return false   
			}      
			swal("棒极了!", "您填写的是: " + inputValue, "success"); 
		});
		
	break;
	
	default:break;
	}
};