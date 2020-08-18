$(function () {
    $('.js-sweetalert').on('click', function () {
        var type = $(this).data('type');
        if (type === 'basic') {
            showBasicMessage();
        }
        else if (type === 'with-title') {
            showWithTitleMessage();
        }
        else if (type === 'success') {
            showSuccessMessage();
        }
        else if (type === 'confirm') {
            showConfirmMessage();
        }
        else if (type === 'cancel') {
            showCancelMessage();
        }
        else if (type === 'with-custom-icon') {
            showWithCustomIconMessage();
        }
        else if (type === 'html-message') {
            showHtmlMessage();
        }
        else if (type === 'autoclose-timer') {
            showAutoCloseTimerMessage();
        }
        else if (type === 'prompt') {
            showPromptMessage();
        }
        else if (type === 'ajax-loader') {
            showAjaxLoaderMessage();
        }
    });
});

//These codes takes from http://t4t5.github.io/sweetalert/
function showBasicMessage() {
    swal("در اینجا یک پیام است!");
}

function showWithTitleMessage() {
    swal("در اینجا یک پیام است!", "این خیلی خوبه یا نه؟");
}

function showSuccessMessage() {
    swal("آفرین!", "شما دکمه را کلیک کرده اید!", "success");
}

function showConfirmMessage() {
    swal({
        title: "شما مطمئن هستید؟",
        text: "شما نمیتوانید این فایل خیالی را بازیابی کنید!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#dc3545",
        confirmButtonText: "بله، آن را حذف کنید!",
        closeOnConfirm: false
    }, function () {
        swal("حذف شده!", "فایل خیالی شما حذف شده است.", "success");
    });
}

function showCancelMessage() {
    swal({
        title: "شما مطمئن هستید؟",
        text: "شما نمیتوانید این فایل خیالی را بازیابی کنید!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#dc3545",
        confirmButtonText: "بله، آن را حذف کنید!",
        cancelButtonText: "نه، لغو لطفا!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            swal("حذف شده!", "فایل خیالی شما حذف شده است.", "success");
        } else {
            swal("لغو شد", "فایل خیالی شما امن است :)", "error");
        }
    });
}

function showWithCustomIconMessage() {
    swal({
        title: "شیرین!",
        text: "در اینجا یک تصویر سفارشی است.",
        imageUrl: "https://via.placeholder.com/128x128"
    });
}

function showHtmlMessage() {
    swal({
        title: "عنوان <small>HTML</small>!",
        text: "یک پیام <span style=\"color: #CC0000\">html<span> سفارشی.",
        html: true
    });
}

function showAutoCloseTimerMessage() {
    swal({
        title: "هشدار خودکار بسته شده!",
        text: "من در عرض 2 ثانیه بسته خواهم شد.",
        timer: 2000,
        showConfirmButton: false
    });
}

function showPromptMessage() {
    swal({
        title: "یک ورودی!",
        text: "چیزی جالب بنویسید:",
        type: "input",
        showCancelButton: true,
        closeOnConfirm: false,
        animation: "slide-from-top",
        inputPlaceholder: "چیزی بنویسید"
    }, function (inputValue) {
        if (inputValue === false) return false;
        if (inputValue === "") {
            swal.showInputError("شما باید چیزی بنویسید!"); return false
        }
        swal("عالی!", "تو نوشتی: " + inputValue, "success");
    });
}

function showAjaxLoaderMessage() {
    swal({
        title: "مثال درخواست آژاکس",
        text: "ارسال به اجرا درخواست آژاکس",
        type: "info",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
    }, function () {
        setTimeout(function () {
            swal("درخواست آژاکس به پایان رسید!");
        }, 2000);
    });
}