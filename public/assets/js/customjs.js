$(document).ready(function(){
    $('#smartwizard').smartWizard({
        theme: 'arrows',
        transitionEffect: 'fade',
        transitionSpeed: '400',
        toolbarSettings: {
            toolbarPosition: 'bottom'
        }
    });

    $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
        if(stepNumber === 3){
            $(".sw-btn-group").hide();
        }
    });

    $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
        var elmForm = $("#form-step-" + stepNumber);
        if(stepDirection === 'forward' && elmForm){
            elmForm.validator('validate');
            var elmErr = elmForm.children('.has-error');
            if(elmErr && elmErr.length > 0){
                return false;
            }
        }
        return true;
    });

    // for applicant
    $(".app-sn").hide();
    $("#namelastfirst").click(function () {
        if ($(this).is(":checked")) {
            $(".app-sn").show();
            $(".app-lm").hide();
        } else {
            $(".app-sn").hide();
            $(".app-lm").show();
        }
    });
    $(".court-file").hide();
    $(".divorced-country").hide();
    $("input[name=app_marital_stat]").change(function () {
        if ($("#divorced_canada").is(":checked")) {
            $(".court-file").show();
        } else {
            $(".court-file").hide();
        }

        if ($("#canada_outside").is(":checked")) {
            $(".divorced-country").show();
        } else {
            $(".divorced-country").hide();
        }
    });

    $(".permanent_val").hide();
    $("#permanentcheck").click(function () {
        if ($(this).is(":checked")) {
            $(".permanent_val").show();
        } else {
            $(".permanent_val").hide();
        }
    });

    // For joint applicant
    $(".japp-sn").hide();
    $("#jnamelastfirst").click(function () {
        if ($(this).is(":checked")) {
            $(".japp-sn").show();
            $(".japp-lm").hide();
        } else {
            $(".japp-sn").hide();
            $(".japp-lm").show();
        }
    });
    $(".jcourt-file").hide();
    $(".jdivorced-country").hide();
    $("input[name=japp_marital_stat]").change(function () {
        if ($("#jdivorced_canada").is(":checked")) {
            $(".jcourt-file").show();
        } else {
            $(".jcourt-file").hide();
        }

        if ($("#jcanada_outside").is(":checked")) {
            $(".jdivorced-country").show();
        } else {
            $(".jdivorced-country").hide();
        }
    });

    $(".jpermanent_val").hide();
    $("#jpermanentcheck").click(function () {
        if ($(this).is(":checked")) {
            $(".jpermanent_val").show();
        } else {
            $(".jpermanent_val").hide();
        }
    });

    // for applicant parents
    $(".prapp-sn").hide();
    $("#prnamelastfirst").click(function () {
        if ($(this).is(":checked")) {
            $(".prapp-sn").show();
            $(".prapp-lm").hide();
        } else {
            $(".prapp-sn").hide();
            $(".prapp-lm").show();
        }
    });

    $(".pr2app-sn").hide();
    $("#pr2namelastfirst").click(function () {
        if ($(this).is(":checked")) {
            $(".pr2app-sn").show();
            $(".pr2app-lm").hide();
        } else {
            $(".pr2app-sn").hide();
            $(".pr2app-lm").show();
        }
    });


    // for joint applicant parents
    $(".prjapp-sn").hide();
    $("#prjnamelastfirst").click(function () {
        if ($(this).is(":checked")) {
            $(".prjapp-sn").show();
            $(".prjapp-lm").hide();
        } else {
            $(".prjapp-sn").hide();
            $(".prjapp-lm").show();
        }
    });

    $(".pr2japp-sn").hide();
    $("#pr2jnamelastfirst").click(function () {
        if ($(this).is(":checked")) {
            $(".pr2japp-sn").show();
            $(".pr2japp-lm").hide();
        } else {
            $(".pr2japp-sn").hide();
            $(".pr2japp-lm").show();
        }
    });


    // Country & Province Selected
    $('#placeof_birth').change(function() {
        if($(this).val() == "Canada"){
            $('.control-prov').show();
        }
        else{
            $('.control-prov').hide();
        }
    });

    $('#parplaceof_birth').change(function() {
        if($(this).val() == "Canada"){
            $('.control-provpar1').show();
        }
        else{
            $('.control-provpar1').hide();
        }
    });

    $('#parplaceof_birth2').change(function() {
        if($(this).val() == "Canada"){
            $('.control-provpar2').show();
        }
        else{
            $('.control-provpar2').hide();
        }
    });

    $('#app_country').change(function() {
        if($(this).val() == "Canada"){
            $('.control-appprov').show();
        }
        else{
            $('.control-appprov').hide();
        }
    });

    $('#app_country-p').change(function() {
        if($(this).val() == "Canada"){
            $('.control-parper').show();
        }
        else{
            $('.control-parper').hide();
        }
    });



    // Country & Province Selected for Step 3
    $('#jplaceof_birth').change(function() {
        if($(this).val() == "Canada"){
            $('.jcontrol-prov').show();
        }
        else{
            $('.jcontrol-prov').hide();
        }
    });

    $('#jparplaceof_birth').change(function() {
        if($(this).val() == "Canada"){
            $('.jcontrol-provpar1').show();
        }
        else{
            $('.jcontrol-provpar1').hide();
        }
    });

    $('#jparplaceof_birth').change(function() {
        if($(this).val() == "Canada"){
            $('.jcontrol-provpar2').show();
        }
        else{
            $('.jcontrol-provpar2').hide();
        }
    });

    $('#japp_country').change(function() {
        if($(this).val() == "Canada"){
            $('.jcontrol-appprov').show();
        }
        else{
            $('.jcontrol-appprov').hide();
        }
    });

    $('#japp_country-p').change(function() {
        if($(this).val() == "Canada"){
            $('.jcontrol-parper').show();
        }
        else{
            $('.jcontrol-parper').hide();
        }
    });

    $('.p-code').keyup(function() {
        var foo = $(this).val().split(" ").join(""); // remove hyphens
        if (foo.length > 0) {
            foo = foo.match(new RegExp('.{1,3}', 'g')).join(" ");
        }
        $(this).val(foo);
    });


});

function submitBday() {
    var Q4A = "";
    var Bdate = document.getElementById('app-dob').value;
    var Bday = +new Date(Bdate);
    Q4A += ~~ ((Date.now() - Bday) / (31557600000));
    var theBday = document.getElementById('app-age');
    theBday.value = Q4A;
}

function submitBday3() {
    var Q4A = "";
    var Bdate = document.getElementById('japp-dob').value;
    var Bday = +new Date(Bdate);
    Q4A += ~~ ((Date.now() - Bday) / (31557600000));
    var theBday = document.getElementById('japp-age');
    theBday.value = Q4A;
}
