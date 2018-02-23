var action = "ajaxreqeust";
var ajax_url = base_url + action;

function isJSON(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

function validSrc(oForm) {
    var _validFileExtensions = [".jpg", ".jpeg", ".png"];
    var arrInputs = oForm.getElementsByTagName("input");
    blnValid = true;
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
            }
        }
    }

    return blnValid;
}

function isInt(value) {
    return !isNaN(value) && (function(x) { return (x | 0) === x; })(parseFloat(value))
}

function roundNumber (num, dp) {
    if (arguments.length != 2) throw new Error("2 arguments required");

    num = String(num);
    if (num.indexOf('e+') != -1) {
        // Can't round numbers this large because their string representation
        // contains an exponent, like 9.99e+37
        throw new Error("num too large");
    }
    if (num.indexOf('.') == -1) {
        // Nothing to do
        return num;
    }

    var parts = num.split('.'),
        beforePoint = parts[0],
        afterPoint = parts[1],
        shouldRoundUp = afterPoint[dp] >= 5,
        finalNumber;

    afterPoint = afterPoint.slice(0, dp);
    if (!shouldRoundUp) {
        finalNumber = beforePoint + '.' + afterPoint;
    } else if (/^9+$/.test(afterPoint)) {
        // If we need to round up a number like 1.9999, increment the integer
        // before the decimal point and discard the fractional part.
        finalNumber = Number(beforePoint)+1;
    } else {
        // Starting from the last digit, increment digits until we find one
        // that is not 9, then stop
        var i = dp-1;
        while (true) {
            if (afterPoint[i] == '9') {
                afterPoint = afterPoint.substr(0, i) +
                    '0' +
                    afterPoint.substr(i+1);
                i--;
            } else {
                afterPoint = afterPoint.substr(0, i) +
                    (Number(afterPoint[i]) + 1) +
                    afterPoint.substr(i+1);
                break;
            }
        }

        finalNumber = beforePoint + '.' + afterPoint;
    }

    // Remove trailing zeroes from fractional part before returning
    return finalNumber.replace(/0+$/, '')
}

$(document).ready(function() {
    function windowScroll(des, speed, m){
        m = (m=="undefined") ? 0 : m;
        $('html, body').animate({
            scrollTop: $(des).offset().top - m
        }, speed);
    }
    $(window).on('load', function () {
        var ld = $(".breadcrumb-area").attr("data-load");
        var elm = $(".breadcrumb-area").attr("data-to");
        var tp = $(".breadcrumb-area").attr("data-top");
        tp = (tp=="undefined") ? 0 : parseInt(tp);
        if (ld == "true"){
            windowScroll(elm, 100, tp);
        }
    });

    function sendData(url, obj) {
        var smVaribale;
        $.ajax({
            "async": false,
            "type": "POST",
            "global": false,
            "dataType": "html",
            "url": url,
            "data": obj,
            "success": function(data) {
                smVaribale = data;
            }
        });
        return smVaribale;
    }
    $(".chk-ref").keyup(function() {
        var _this = $(this);
        var ref = _this.val();
        _this.next().addClass("add-check");
        $.post(ajax_url, {
            action: "_valid_ref",
            id: ref
        }, function(result) {
            _this.next().html(result);
        });
    });

    $(".chk-usr").keyup(function() {
        var _this = $(this);
        var ref = _this.val();
        _this.next().addClass("add-check");
        $.post(ajax_url, {
            action: "_valid_username",
            id: ref
        }, function(result) {
            _this.next().html(result);
        });
    });

    $(".chk-reff").keyup(function() {
        var _this = $(this);
        var ref = _this.val();
        _this.next().addClass("add-check");
        $.post(ajax_url, {
            action: "_valid_ref2",
            id: ref
        }, function(result) {
            _this.next().html(result);
        });
    });

    function conf(title, msg, href) {
        var get = true;
        swal({
            title: title,
            text: msg,
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: true,
            closeOnCancel: true,
            html: true,
        }, function(isConfirm) {
            if (isConfirm) {
                if (href != "") {
                    window.location = href;
                }
            } else {}
        });
    }
    $(".buy-package-0").click(function() {
        var ref = $("input[name='ref']").val();
        if (ref == "") {
            swal("Something is wrong, try again.");
        }
        var res = sendData(ajax_url, {
            action: "_buy_package",
            ref: ref
        });
        if (res == "invalid") {
            swal("Something is wrong, try again.");
        } else if (res == "error") {
            swal("Something is wrong, try again.");
        } else {
            $(".invoice").html(res);
        }
        return false;
    });
    $(document).on("click", ".send-buy-package", function() {
        var ref = $("input[name='ref']").val();
        $(this).attr("disabled", true);
        var res = sendData(ajax_url, {
            action: "_buy_package",
            ref: ref,
            "snd": true
        });
        if (res == "success") {
            window.location = base_url + "userpanel";
        }
    });
    $(".transfer-point-0").click(function() {
        var ref = $("input[name='ref']").val();
        var point = $("input[name='point']").val();
        var mn = $("input[name='min']").val();
        if (ref == "") {
            swal("Enter Reference ID.");
        } else if (parseInt(point) < parseInt(mn)) {
            swal("Minimum transfer points " + mn + " are required.");
        } else {
            var res = sendData(ajax_url, {
                action: "_transfer_points",
                ref: ref,
                point: point
            });
            var j = JSON.parse(res);
            if (j.resp == "invalid") {
                swal(j.msg);
            } else if (j.resp == "error") {
                swal(j.msg);
            } else if (j.resp == "success") {
                window.location = base_url+"userpanel?p=transfer-points&token="+j.msg;

                /*
                 swal({
                 title: "Are you sure?",
                 text: j.msg,
                 showCancelButton: true,
                 confirmButtonColor: "#DD6B55",
                 confirmButtonText: "Yes",
                 cancelButtonText: "No",
                 closeOnConfirm: false,
                 closeOnCancel: true,
                 html: true,
                 }, function(isConfirm) {
                 if (isConfirm) {
                 var action = "action=_transfer_points&ref=" + ref + "&point=" + point + "&snd=ok";
                 var jj = sendData(ajax_url, action);
                 jj = JSON.parse(jj);
                 if (jj.resp == "error") {
                 swal(jj.msg);
                 } else {
                 swal({
                 title: "Successfull",
                 text: jj.msg,
                 html: true
                 });
                 $("input[name='ref']").val("");
                 $("input[name='point']").val("10");
                 }
                 } else {}
                 });
                 */}
        }
        return false;
    });

    $(document).on("keyup", ".enc-code", function(){
        var v = $(this).val();
        var res = sendData(ajax_url, {
            action: "_transfer_points_v",
            code : v
        });
        var j = JSON.parse(res);
        if (j.resp=="success"){
            $(".enc-msg").html("");
            $(".transfer-point-sd").css("display","block");
        }else{
            $(".enc-msg").html("<div class='alert alert-danger'>Code is invalid.</div>");
            $(".transfer-point-sd").css("display", "none");
        }
    });

    $(".table-checks input[type='checkbox']").click(function() {
        var len = $(".table-checks input[type='checkbox']:checked").length;
        if (len > 0) {
            $(".note-msg-del").removeClass("disabled");
            $(".note-msg-restore").removeClass("disabled");
        } else {
            $(".note-msg-del").addClass("disabled");
            $(".note-msg-restore").addClass("disabled");
        }
        var title = "Delete Message";
        if (len == 0 || len == 1) {
            $(".note-msg-del").attr("title", "Delete Message");
        } else if (len > 1) {
            $(".note-msg-del").attr("title", "Delete Messages");
        } else {
            $(".note-msg-del").attr("title", title);
        }
        if (len == 1) {
            $(".note-msg-view").removeClass("disabled");
            var href = $(this).parent().next().find("a").attr("href");
            $(".note-msg-view").attr("data-href", href);
        } else {
            $(".note-msg-view").addClass("disabled");
            $(".note-msg-view").removeAttr("data-href");
        }
    });
    $(".note-msg-del").click(function() {
        var _this = $(this);
        var type = (_this.attr("data-type") == "trash") ? "trash" : "del";
        swal({
            title: "Are you sure?",
            text: "Do you want to delete the notifications",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: true,
            closeOnCancel: true,
            html: true,
        }, function(isConfirm) {
            if (isConfirm) {
                var v = [];
                $(".table-checks input[type='checkbox']").each(function() {
                    var chk = $(this).is(":checked");
                    if (chk) {
                        var t = $(this).attr("data-status");
                        v.push($(this).val() + "-" + t);
                        $(this).parent().parent().remove();
                        _this.addClass("disabled");
                        $(".note-msg-view").addClass("disabled");
                    }
                });
                if (v.length > 0) {
                    var action = "action=_delete_notification&ids=" + v + "&type=" + type;
                    var m = sendData(ajax_url, action);
                }
            }
        });
        return false;
    });
    $(".note-msg-restore").click(function() {
        var _this = $(this);
        var type = (_this.attr("data-type") == "trash") ? "trash" : "del";
        swal({
            title: "Are you sure?",
            text: "Do you want to restore the notifications",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: true,
            closeOnCancel: true,
            html: true,
        }, function(isConfirm) {
            if (isConfirm) {
                var v = [];
                $(".table-checks input[type='checkbox']").each(function() {
                    var chk = $(this).is(":checked");
                    if (chk) {
                        var t = $(this).attr("data-status");
                        v.push($(this).val() + "-" + t);
                        $(this).parent().parent().remove();
                        _this.addClass("disabled");
                        $(".note-msg-view").addClass("disabled");
                    }
                });
                if (v.length > 0) {
                    var action = "action=_restore_notification&ids=" + v + "&type=" + type;
                    var m = sendData(ajax_url, action);
                }
            }
        });
        return false;
    });
    $(".note-msg-view").click(function() {
        var href = $(this).attr("data-href");
        window.location = href;
    });
    $(".confirm").click(function() {
        var href = $(this).attr("data-href");
        var msg = $(this).attr("data-msg");
        swal({
            title: "Are you sure?",
            text: msg,
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: true,
            closeOnCancel: true,
            html: true,
        }, function(isConfirm) {
            if (isConfirm) {
                window.location = href;
            } else {}
        });
        return false;
    });
    var selc = false;
    $("select[name='category']").change(function() {
        var id = $(this).val();
        var action = "action=_get_sub_category&id=" + id;
        var m = sendData(ajax_url, action);
        if (m == "") {
            $("select[name='sub-category']").css("display", "none");
            selc = false;
        } else {
            $("select[name='sub-category']").html(m);
            selc = true;
        }
    });
    $(".btn-search-pr").click(function() {
        var m = $("select[name='category']").val();
        var s = $("select[name='sub-category']").val();
        if ((m == "" || s == "") && selc == true) {
            swal("Please select category.");
        } else {
            window.location = base_url + "userpanel?p=products&s=" + s;
        }
        return false;
    });
    $(".width_draw_request").click(function() {
        var p = $("input[name='point']").val();
        if (p == "") {
            swal("Enter the shares, those you want to sell.");
        } else {
            var action = "action=_withdraw_request&point=" + p;
            var m = sendData(ajax_url, action);
            var j = JSON.parse(m);
            if (j.resp == "error") {
                swal(j.msg);
            }else if(j.resp=="success") {
                window.location = base_url+"userpanel?p=withdraw-option&token="+j.msg;
            }
        }
    });

    function checkEmail(email) {
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(email)) {
            return false;
        }
        return true;
    }
    $(".news-send").click(function() {
        var email = $("#mc-email").val();
        if (!checkEmail(email)) {
            $(".n-msg").html("<div class='alert alert-danger'>Enter valid email.</div>");
        } else {
            var action = "action=_subscribe_new&email=" + email;
            var m = sendData(ajax_url, action);
            if (isJSON(m)) {
                var j = JSON.parse(m);
                if (j.resp == "error") {
                    $(".n-msg").html("<div class='alert alert-danger'>" + j.msg + "</div>");
                } else if (j.resp == "success") {
                    $(".n-msg").html("<div class='alert alert-success'>" + j.msg + "</div>");
                    $("#mc-email").val("");
                }
            } else {
                $(".n-msg").html("<div class='alert alert-watning'>Something is wrong.</div>");
            }
        }
        return false;
    });
    $(".tdsp_count").keyup(function() {
        var v = $(this).val();
        $(".tdsp_limit").html(v.length);
    });

    $(".btc-point").keyup(function(){
        var v = $(this).val();
        if (isInt(v)){
            var action  = "action=_btc_rate&point="+v;
            var m = sendData(ajax_url, action);
            $(".btc-msg").html("<strong>Total BTC:</strong> " + m);
        }
    });

    $("._calculate").click(function(){
        var q1 = $("input[name='q1']").val();
        var q2 = $("input[name='q2']").val();
        var country = $("select[name='country']").val();
        if (q1=="" || q2==""){
            $("._calc_res").html("<div class='alert alert-danger'>Please enter both values.</div>");
        }else{
            var action = "action=_earning_calc&q1=" + q1+"&q2="+q2+"&country="+country;
            var m = sendData(ajax_url, action);
            $("._calc_res").html(m);
        }

        return false;
    });

    $(".sl_ct_rate").change(function(){
        var v = $(this).val();
        if (v=="Pakistan"){
            $(".ct_rate").html(ps_equal_pkr+" PKR");
        }else{
            $(".ct_rate").html(ps_equal+" USD");
        }
    });

    $("._send_cn").click(function(){
        var name, email, text;
        name = $(".contact-form-area input[name='name']").val();
        email = $(".contact-form-area input[name='email']").val();
        text = $(".contact-form-area textarea[name='message']").val();
        error = "";
        error +=(name=="") ? "Please enter your name.<br>" : "";
        error += (!checkEmail(email)) ? "Please enter valid email.<br>" : "";
        error += (text.length < 50) ? "Message is too short.<br>" :  "";
        error +=(grecaptcha.getResponse() == "") ? "Please check the captcha." : "" ;
        if (error==""){
            return true;
        }else{
            windowScroll(".c_msg",100,100);
            $(".c_msg").html("<div class='alert alert-danger'>"+error+"</div>");
        }
        return false;
    });

    $(".b-convert").keyup(function(){
        var label = $(this).attr("name");
        var country = $("select[name='country']").val();
        var v = $(this).val();
        v = (Number(v)=="NaN" || v.trim()=="") ? 0 : v;
        var rate = (country=="Pakistan") ? ps_equal_pkr : ps_equal;

        if (label=="btc"){
            v = parseFloat(v) / parseFloat(rate);
            $("input[name='points']").val(roundNumber(v,2));
        }else if (label=="points"){
            v = parseFloat(v) * parseFloat(rate);
            $("input[name='btc']").val(roundNumber(v,2));
        }
    });

    $(".sel_ct_p").change(function(){
        var v = $(this).val();
        if (v=="Pakistan"){
            $(".sl_c_ct").html(ps_equal_pkr+" PKR");
        }else{
            $(".sl_c_ct").html(ps_equal+" USD");
        }

        var rate = (v=="Pakistan") ? ps_equal_pkr : ps_equal;
        var shares = $("input[name='points']").val();
        var amount = $("input[name='btc']").val();
        shares = (Number(shares)=="NaN" || shares.trim()=="") ? 0 : shares;
        amount = (Number(amount)=="NaN" || amount.trim()=="") ? 0 : amount;

        if (parseFloat(shares) > 0){
            var p1 = parseFloat(shares) * parseFloat(rate);
            $("input[name='btc']").val(roundNumber(p1,2));
        }else if(parseFloat(amount) > 0){
            var p2 = parseFloat(amount) / parseFloat(rate);
            $("input[name='points']").val(roundNumber(p2,2));
        }

    });

    $("input[name='deposit']").click(function(){
        var name, username, email, phone, country, shares, amount, notes;
        name = $("input[name='name']").val();
        username = $("input[name='username']").val();
        email = $("input[name='email']").val();
        phone = $("input[name='phone']").val();
        country = $("select[name='country']").val();
        shares = $("input[name='points']").val();
        amount = $("input[name='btc']").val();
        notes = $("textarea[name='note']").val();

        shares = (parseFloat(shares)=="NaN") ? 0 : parseFloat(shares);
        amount = (parseFloat(amount)=="NaN") ? 0 : parseFloat(amount);

        error = "";
        error += (name.trim()=="") ? "Please enter your name. \n" : "";
        error += (phone.trim()=="") ? "Please enter your Phone. \n" : "";
        error += (checkEmail(email)==false) ? "Please enter valid email. \n" : "";
        error += (country.trim()=="") ? "Please select your country. \n" : "";
        //error += (wallet.trim()=="") ? "Please enter your Wallet address. \n" : "";
        error += (shares == 0) ? "Please enter shares. \n" : "";
        if (error==""){
            return true;
        }else{
            alert(error);
        }
        return false;
    });

    /*$("input[name='verify']").click(function(){
     var step = $(this).attr("data-move");
     $(".step"+step).find(".s-body").slideDown();
     $(".step"+step).attr("data-status", "open");
     $(".step"+step).attr("data-checked", "true");

     $(".step"+(parseInt(step)-1)).find(".s-body").slideUp();
     $(".step"+(parseInt(step)-1)).attr("data-status", "close");
     $(".step"+(parseInt(step)-1)).attr("data-fill", "true");

     return false;
     });

     $("input[name='send_req']").click(function(){
     var wallet = $("input[name='wallet']").val();
     var error = (wallet.trim()=="") ? "Please enter your Wallet address. \n" : "";
     if (error == ""){
     return true;
     }else{
     alert(error);
     }
     return false;

     });*/

    $(".s-header").click(function(){
        var status, fill, step;
        step = $(this).attr("data-step");
        check = $(".step"+step).attr("data-checked");
        status = $(".step"+step).attr("data-status");

        if (status=="close" && check=="true"){
            $(".s-body").parent().attr("data-status", "close");
            $(".step"+step).attr("data-status", "open");

            $(".s-body").slideUp();
            $(this).parent().find(".s-body").slideDown();
        }
    });

    $(".mofile-u-nav").click(function(){
        $(this).next().slideToggle();
    });

    $(".upload-buy-btn").change(function(){
        $("#uploadFile").val($(this).val());
    });

    $(".copyb").click(function(){
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(".copyc").text()).select();
        document.execCommand("copy");
        $temp.remove();
        return false
    });

    $('[data-toggle="tooltip"]').tooltip();

});