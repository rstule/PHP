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
			confirmButtonText: "�ǵģ���Ҫɾ��",
			confirmButtonColor: "#ec6c62"
			}, function() {
				$.ajax({
					url: "./qtimages/do.php",
					type: "DELETE"
				}).done(function(data) {
					swal("�����ɹ�!", "�ѳɹ�ɾ�����ݣ�", "success");
				}).error(function(data) {
					swal("OMG", "ɾ������ʧ����!", "error");
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
			inputPlaceholder: "��㶫�����������" 
		}, function(inputValue){   
			if (inputValue === false) return false;      
			if (inputValue === "") {     
				swal.showInputError("������!");     
				return false   
			}      
			swal("������!", "����д����: " + inputValue, "success"); 
		});
		
		
	break;
	
	default:break;
	}
};
function x_alert_switch_s(n){
	switch(n)
	{
		case 1:
		swal("����һ����Ϣ��ʾ��!");
	break;
	
	case 2:
		swal("Good!", "������һ�������ɹ�����ʾ��", "success");
	break;
	
	case 3:
		swal("OMG!", "������һ��������ʾ��", "error");
	break;
	
	case 4:
		 swal({
			title: "��ȷ��Ҫɾ����", 
			text: "��ȷ��Ҫɾ���������ݣ�", 
			type: "warning",
			showCancelButton: true,
			closeOnConfirm: false,
			confirmButtonText: "�ǵģ���Ҫɾ��",
			confirmButtonColor: "#ec6c62"
			}, function() {
				$.ajax({
					url: "./qtimages/do.php",
					type: "DELETE"
				}).done(function(data) {
					swal("�����ɹ�!", "�ѳɹ�ɾ�����ݣ�", "success");
				}).error(function(data) {
					swal("OMG", "ɾ������ʧ����!", "error");
				});
			});
	
			
	break;
	
	case 5:
		swal({   
			title: "Good!",   
			text: '�Զ���<span style="color:red">ͼƬ</span>��<a href="">HTML����</a>��<br/>5����Զ��رա�',   
			imageUrl: "images/thumbs-up.jpg",
			html: true,
			timer: 5000,   
			showConfirmButton: false
		});

	break;
	
	case 6:
		swal({   
			title: "���������",   
			text: "����������벢ȷ��:",   
			type: "input",   
			showCancelButton: true,   
			closeOnConfirm: false,   
			animation: "slide-from-top",   
			inputPlaceholder: "��㶫�����������" 
		}, function(inputValue){   
			if (inputValue === false) return false;      
			if (inputValue === "") {     
				swal.showInputError("������!");     
				return false   
			}      
			swal("������!", "����д����: " + inputValue, "success"); 
		});
		
	break;
	
	default:break;
	}
};