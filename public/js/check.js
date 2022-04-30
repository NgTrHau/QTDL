
		
		$(document).ready(function () {
			$("#signupForm").validate({
				rules: {
					txtUsername: {required: true},
			
	
					txtPassword: {required: true, minlength:5},
				},
				messages: {
					txtUsername : { required: "Bạn chưa nhập vào tên đăng nhập" },
					txtPassword: {
						required: "Bạn chưa nhập vào mật khẩu",
						minlength: "Mat khau phai co it nhat 5 ky tu"
					},
				},
				errorElement: "div",
				errorPlacement: function(error, element) {
					error.addClass("invalid-feedback");
					if(element.prop("type") === "checkbox") {
						error.insertAfter(element.siblings("label"));
					} else {
						error.insertAfter(element);
					}

				},
				highlight: function(element, errorClass,vaildClass) {
					$(element).addClass("is-invalid").removeClass("is-valid");
					
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).addClass("is-vaild").removeClass("is-invalid");
				}
			})
		}) 