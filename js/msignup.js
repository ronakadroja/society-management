$(document).ready(function () {

   function fetchData(){

    var sid = $('#sid').val();
    $.ajax({
        url:'./actions/fetchflattype.php',
        method:'POST',
        data:{sid:sid},
        success:function(data){
            $('#mflat_type').html(data);
        }
    });
   }
   
    $('#next-button').click(function () {
        var sid = $('#sid').val();
        $('#sid').attr('readonly',true);
        $.ajax({
            url: './actions/checksid.php',
            method: 'POST',
            data: { sid: sid },
            success: function (data) {
                if (data == "Building") {

                    $('#username').removeClass("d-none");
                    $('#name').removeClass("d-none");
                    $('#email').removeClass("d-none");
                    $('#phone').removeClass("d-none");
                    $('#address').removeClass("d-none");
                    $('#dob').removeClass("d-none");
                    $('#flat_type').removeClass("d-none");
                    $('#house_no').removeClass("d-none");
                    $('#isOwner').removeClass("d-none");
                    $('#password').removeClass("d-none");
                    $('#cpassword').removeClass("d-none");
                    $('#buttons').removeClass("d-none");
                    $('#next-button').addClass("d-none");
                    $('#response').addClass("d-none");
                    fetchData();

                    

                }
                else if (data == "Row House") {
                    $('#username').removeClass("d-none");
                    $('#name').removeClass("d-none");
                    $('#email').removeClass("d-none");
                    $('#phone').removeClass("d-none");
                    $('#address').removeClass("d-none");
                    $('#dob').removeClass("d-none");
                    $('#house_no').removeClass("d-none");
                    $('#isOwner').removeClass("d-none");
                    $('#password').removeClass("d-none");
                    $('#cpassword').removeClass("d-none");
                    $('div#flat_type').remove();
                    $('#buttons').removeClass("d-none");
                    $('#next-button').addClass("d-none");
                    $('#response').addClass("d-none");

                }
                else {
                    $('#sid').attr('readonly',false);
                    var html = '<div class="alert alert-danger text-center">' + data + '</div>';
                    $('#response').html(html);
                }
            }
        });
    });


    $('#msubmit').click(function(e){
        e.preventDefault();
        var showAlert = `<div class="alert alert-danger alert-dismissible fade show" role="alert">All fields are required!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><img src="https://image.flaticon.com/icons/png/128/1828/1828778.png" height=17 width=17></button>
</div>`;
        var sid=$('#sid').val();
        var username=$('#muser').val();
        var name=$('#mname').val();
        var email=$('#memail').val();
        var phone=$('#mphone').val();
        var address=$('#maddress').val();
        var bdate=$('#mbdate').val();
        var flat_type=$('#mflat_type').val();
        var houseno=$('#mhouseno').val();
        var pass=$('#mpass').val();
        var cpass=$('#mcpass').val();

        if(sid=="" || username=="" || name=="" || email=="" || phone=="" || address=="" || !$('input:radio[name=is_owner]').is(':checked') || bdate=="" || flat_type=="" || houseno=="" || pass=="" || cpass=="")
        {
            document.getElementById('alert1').innerHTML = showAlert;
        }
        else if (email.indexOf("@") < 0 || email.indexOf(".") < 0) 
        {
            document.getElementById('alert1').innerHTML =   `<div class="alert alert-danger alert-dismissible fade show" role="alert">Invalid Email Id<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><img src="https://image.flaticon.com/icons/png/128/1828/1828778.png" height=17 width=17></button></div>`;
            $('#memail').css('border', '1px solid red');
        }
        else
        {
           $.ajax({
            url:'msignupaction.php',
            method:'POST',
            data:$('#form2').serialize(),
            beforeSend: function () {
                $('.loading-spinner').removeClass('d-none');
                $('#msubmit').attr('disabled', true);
            },
            complete: function () {
                $('.loading-spinner').addClass('d-none');
                $('#msubmit').attr('disabled', false);
            },
            success:function(response){
                $('#memail').removeAttr('style');
                $('#alert1').fadeIn();
                $('#alert1').removeClass('alert alert-danger').addClass('alert alert-primary').html(response);
                if (response == "Mail send successfully") {
                    window.location.href = "otp-page.php";
                }
            }
           });
        }


    });
});