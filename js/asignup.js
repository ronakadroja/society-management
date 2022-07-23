
const a = document.getElementById("Page1");
const b = document.getElementById("Page2");
const c = document.getElementById("Page3");
const d = document.getElementById("Building");
const e = document.getElementById("Row");
const x = document.getElementById("selection");
const raw = document.getElementById('ifRowHouse');
const building_form = document.getElementById('ifBuilding');
var s;
var building;
var rowhouse;
var rowHouseAdminForm;
var buildingAdminForm;
var showAlert = `<div class="alert alert-danger alert-dismissible fade show" role="alert">All fields are required!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><img src="https://image.flaticon.com/icons/png/128/1828/1828778.png" height=17 width=17></button>
</div>`;


function sd() {
    const A = document.getElementById("sr_name").value;
    const B = document.getElementById("sr_add").value;
    const C = document.getElementById("sr_city").value;
    const D = document.getElementById("sr_state").value;
    const E = document.getElementById("sr_pin").value;
    const F = document.getElementById("sr_country").value;

    if (A == "" || B == "" || C == "" || D == "" || E == "" || F == "") {
        document.getElementById('alert1').innerHTML = showAlert;
    } else {
        a.style.display = "none";
        b.style.display = "inherit";
    }
}

function ad() {

    const C = document.getElementById("sd_house").value;

    if (C == "") {
        document.getElementById('alert2').innerHTML = showAlert;
    } else {


        b.style.display = "none";
        c.style.display = "inherit";
    }

}

function loadData() {
    var flatOfAdmin = [];
    $('.type-of-flat').each(function () {
        if ($(this).is(':checked')) {
            flatOfAdmin.push($(this).val());
        }
    });
    var lengthA = flatOfAdmin.length;
    for (var j = 0; j < lengthA; j++) {
        $('#aflat_type').append(`<option value="${flatOfAdmin[j]}">${flatOfAdmin[j]}</option>`);
    }
}

function ad1() {
    const B = document.getElementById("sd_floor").value;
    var count = 0;
    for (var i = 1; i <= 10; i++) {
        if (document.getElementById(i).checked == true) {
            count++;
        }
    }
    if (B == "" || count == 0) {
        document.getElementById('alert2').innerHTML = showAlert;
    } else {
        loadData();
        b.style.display = "none";
        c.style.display = "inherit";
    }
}

function take() {
    return x.options[x.selectedIndex].text;
}

function select(s) {
    if (s == "Select") {
        building = "";
        rowhouse = "";
        d.innerHTML = "";
        e.innerHTML = "";
        d.style.display = "none";
        e.style.display = "none";

    } else if (s == "Appartment/Flats") {

        building = `<div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span><img src="https://image.flaticon.com/icons/png/128/61/61078.png" height="20" width="20"></span>
                                    </span>
                                </div>
                                <input type="number" min="1" name="sd_floor" id="sd_floor" class="form-control" placeholder="Number of flats" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label for="stype" style="font-size: 17px; font-weight: bold; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Flat Type : <br></label>
                                </div>
                            </div>
                            <div class="multipleSelection">
                                <div class="selectBox" onclick="showCheckboxes()">
                                    <select>
                                        <option>Select options</option>
                                    </select>
                                    <div class="overSelect"></div>
                                </div>

                                <div id="checkBoxes">
                                    <label for="first" class="select-option">
                                        <input type="checkbox" class="type-of-flat" name=flat_type[] value="1BHK" id="1">
                                        1BHK
                                    </label>

                                    <label for="second" class="select-option">
                                        <input type="checkbox" class="type-of-flat" name=flat_type[] value="2BHK" id="2">
                                        2BHK
                                    </label>
                                    <label for="third" class="select-option">
                                        <input type="checkbox" class="type-of-flat" name=flat_type[] value="3BHK" id="3">
                                        3BHK
                                    </label>
                                    <label for="fourth" class="select-option">
                                        <input type="checkbox" class="type-of-flat" name=flat_type[] value="4BHK" id="4">
                                        4BHK
                                    </label>
                                    <label for="fifth" class="select-option">
                                        <input type="checkbox" class="type-of-flat" name=flat_type[] value="5BHK" id="5">
                                        5BHK
                                    </label>
                                    <label for="sixth" class="select-option">
                                        <input type="checkbox" class="type-of-flat" name=flat_type[] value="6BHK" id="6">
                                        6BHK
                                    </label>
                                    <label for="seventh" class="select-option">
                                        <input type="checkbox" class="type-of-flat" name=flat_type[] value="7BHK" id="7">
                                        7BHK
                                    </label><label for="eight" class="select-option">
                                        <input type="checkbox" class="type-of-flat" name=flat_type[] value="8BHK" id="8">
                                        8BHK
                                    </label>
                                    <label for="ninth" class="select-option">
                                        <input type="checkbox" class="type-of-flat" name=flat_type[] value="9BHK" id="9">
                                        9BHK
                                    </label>
                                    <label for="tenth" class="select-option">
                                        <input type="checkbox" class="type-of-flat" name=flat_type[] value="10BHK" id="10">
                                        10BHK
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <a onclick="gopage1()" class="butn">
                                        Back
                                    </a>
                                </div>
                                <button class="btn btn-primary btn-lg b1" style="min-width: 100px; margin-left: 28%;" onclick="ad1()">Next</button>
                            </div>
                        </div>`;
        buildingAdminForm = `<div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label for="stype" style="font-size: 17px; font-weight: bold; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Flat Type: <br></label>
                            </div>
                            <br>
                            <select name="aflat_type" id="aflat_type" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; border-radius: 5px; margin-left:10px; outline:none; border:1px solid #e1e1e1; width:65%; padding:3px">
                                <option value="Select" disabled>Flat Type</option>
                                
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span><img src="https://image.flaticon.com/icons/png/128/4293/4293053.png" height="20" width="20"></span>
                                </span>
                            </div>
                            <input id="aflat_no" type="text" class="form-control" name="aflat_no" placeholder="Flat No." required>
                        </div>
                    </div>`;
        rowHouseAdminForm = "";
        rowhouse = "";
        d.innerHTML = building;
        e.innerHTML = rowhouse;
        building_form.innerHTML = buildingAdminForm;
        raw.innerHTML = rowHouseAdminForm;


        e.style.display = "none";
        d.style.display = "inherit";



    } else if (s == "Raw House/Tenament") {

        rowhouse = `<div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span><img src="https://image.flaticon.com/icons/png/128/61/61078.png" height="20" width="20"></span>
                                    </span>
                                </div>
                                <input type="number" min="1" id="sd_house" class="form-control" name="no_of_house" placeholder="No. Of House" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <a onclick="gopage1()" class="butn">
                                        Back
                                    </a>
                                </div>
                                <button class="btn btn-primary btn-lg b1" style="min-width: 100px; margin-left: 28%;" onclick="ad()">Next</button>
                            </div>
                        </div>`;
        rowHouseAdminForm = `<div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span><img src="https://image.flaticon.com/icons/png/128/4293/4293053.png" height="20" width="20"></span>
                                </span>
                            </div>
                            <input id="ahouse_no" type="text" class="form-control" name="shouse_no" placeholder="House No." required>
                        </div>
                    </div>`;
        buildingAdminForm = "";
        building = "";

        e.innerHTML = rowhouse;
        d.innerHTML = building;
        raw.innerHTML = rowHouseAdminForm;
        building_form.innerHTML = buildingAdminForm;
        d.style.display = "none";
        e.style.display = "inherit";



    }
}

var show = true;

function showCheckboxes() {
    var checkboxes =
        document.getElementById("checkBoxes");

    if (show) {
        checkboxes.style.display = "block";
        show = false;
    } else {
        checkboxes.style.display = "none";
        show = true;
    }
}

function gopage1() {
    b.style.display = "none";
    a.style.display = "inherit";
}

function gopage2() {
    c.style.display = "none";
    b.style.display = "inherit";
}




$(document).ready(function () {

    $('#selection').change(function () {
        var selectData = $(this).val();
        $('#hidden').val(selectData);
    });


    $('#submitdata').click(function (event) {
        event.preventDefault();
        var auser = $('#auser').val();
        var aname = $('#aname').val();
        var aemail = $('#aemail').val();
        var aphone = $('#aphone').val();
        var aadd = $('#aaddress').val();
        var abdate = $('#abdate').val();
        var apass = $('#apass').val();
        var acpass = $('#acpass').val();
        var hiddenData = $('#hidden').val();

        if (hiddenData == "Building") {
            var aflat_no = $('#aflat_no').val();
            if (auser == "" || aname == "" || aemail == "" || aphone == "" || aadd == "" || abdate == "" || aflat_no == "" || !$('input:radio[name=is_owner]').is(':checked') || apass == "" || acpass == "") {
                $('#alert3').html(showAlert);
            }
            else if (aemail.indexOf("@") < 0 || aemail.indexOf(".") < 0) {
                $('#alert3').removeClass('alert alert-danger').addClass('alert alert-primary').html("Invalid Email Id");
                $('#aemail').css('border', '1px solid red');
            }
            else {
                $.ajax({
                    url: 'asignupaction.php',
                    type: 'POST',
                    data: $('#form1').serialize(),
                    beforeSend: function () {
                        $('.loading-spinner').removeClass('d-none');
                        $('#submitdata').attr('disabled', true);
                    },
                    complete: function () {
                        $('.loading-spinner').addClass('d-none');
                        $('#submitdata').attr('disabled', false);
                    },
                    success: function (response) {
                        $('#aemail').removeAttr('style');
                        $('#alert3').fadeIn();
                        $('#alert3').removeClass('alert alert-danger').addClass('alert alert-primary').html(response);
                        if (response == "Mail send successfully") {
                            window.location.href = "otp-page.php";
                        }
                    }
                });

            }
        }
        else {
            var ahouse_no = $('#ahouse_no').val();
            if (auser == "" || aname == "" || aemail == "" || aphone == "" || aadd == "" || abdate == "" || ahouse_no == "" || !$('input:radio[name=is_owner]').is(':checked') || apass == "" || acpass == "") {
                $('#alert3').html(showAlert);
            }
            else if (aemail.indexOf("@") < 0 || aemail.indexOf(".") < 0) {
                $('#alert3').removeClass('alert alert-danger').addClass('alert alert-primary').html("Invalid Email Id");
                $('#aemail').css('border', '1px solid red');
            }
            else {
                $.ajax({
                    url: 'asignupaction.php',
                    type: 'POST',
                    data: $('#form1').serialize(),
                    beforeSend: function () {
                        $('.loading-spinner').removeClass('d-none');
                        $('#submitdata').attr('disabled', true);
                    },
                    complete: function () {
                        $('.loading-spinner').addClass('d-none');
                        $('#submitdata').attr('disabled', false);
                    },
                    success: function (response) {
                        $('#aemail').removeAttr('style');
                        $('#alert3').fadeIn();
                        $('#alert3').removeClass('alert alert-danger').addClass('alert alert-primary').html(response);
                        if (response == "Mail send successfully") {
                            window.location.href = "otp-page.php";
                        }
                    }
                });

            }
        }



    });

});


