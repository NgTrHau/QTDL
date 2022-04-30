
$(document).ready(function () {
    $("#signupForm").validate({
        rules: {
            txtUsername: {required: true, minlength:2},
            txtEmail: {required: true, email: true},
            txtPassword: {required: true, minlength:5},
            confirm_password: {required: true,minlength: 5, equalTo: '#txtPassword'},
        },
        messages: {
         
            txtUsername: {
                required: "Ban chua nhap vao ten dang nhap",
                minlength: "Ten dang nhap phai co it nhat 2 ky tu"
            },
            txtPassword: {
                required: "Ban chua nhap vao mat khau",
                minlength: "Mat khau phai co it nhat 5 ky tu"
            },
            confirm_password: {
                required:" Bna chua nhap mat khau",
                minlength: "Mat khau phai co it nhat 5 ky tu",
                equalTo: "Mat khau khong trung khop voi mat khau da nhap"

            },
            txtEmail: "Hop thu dien tu khong hop le",
          
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