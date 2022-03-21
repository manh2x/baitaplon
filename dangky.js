// -------------script đăng ký ---------------------
//xác định chức năng để hiện thi thông bóa lỗi 
//hàm error:in lỗi elemid(id để in lỗi) Msg(nội dung báo lỗi)
function error(elemid, MSg) {
    document.getElementById(elemid).innerHTML = Msg
}
// xác định tạo phòng với form validataform()
function validataform() {
    // truy xuất giá trịu các phần tử ở biểu mẫu
    var name = document.contactform.name.value;
    var email = document.contactform.email.value;
    var number = document.contactform.number.value;
    var contry = document.contactform.contry.value;
    var gender = document.contactform.gender.value;
    var hobbise = [];
    var checkbox = document.getElementsByName("hobbise");
    for (var i = 0; i < checkbox.length; i++) {
        hobbise.push(checkbox[i].value);
    }
    // xác định biến lỗi với giá trị mặc định


}
var nameerror = emailerror = numbererror = contryerror = gendererror = true;
// validate name(xác đinh tên)
if (name == "") {
    error("nameerror", "please enter your name"); //in error(elemid,Msg)
} else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(name) == false) {
        error("nameerror", "please enter ä valid name");
    } else {
        error("nameerror", "");

        nameerror = false;
    }
}
if (email == "") {
    error("emailerror", "please enter your email"); //in error(elemid,Msg)
} else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(email) == false) {
        error("emailerror", "please enter ä valid name");
    } else {
        error("emailerror", "");

        emailerror = false;
    }
}
if (number == "") {
    error("numbererror", "please enter your phone number"); //in error(elemid,Msg)
} else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(number) == false) {
        error("numbererror", "please enter ä valid phone number");
    } else {
        error("numbererror", "");

        numbererror = false;
    }
}
if (contry == "") {
    error("contryerror", "please enter your contry"); //in error(elemid,Msg)
} else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(contry) == false) {
        error("contryerror", "please enter ä valid contry");
    } else {
        error("contryerror", "");

        contryerror = false;
    }
}
if (gender == "") {
    error("gendererror", "please enter your gender"); //in error(elemid,Msg)
} else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(gender) == false) {
        error("gendererror", "please enter ä valid gender");
    } else {
        error("gendererror", "");

        contryerror = false;
    }
}
// prevent the form from being submitted if there are any error(ngăn ngữ form đc gửi nếu có bất kỳ lỗi nào)
if (nameerror || numbererror || emailerror || contryerror || gendererror == true) {
    return false
}