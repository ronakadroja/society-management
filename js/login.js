$(document).ready(function(){

    $('#next-button').click(function(e){
        e.preventDefault();
        var user = $('#useremail').val();
        var pass = $('#pass').val();
        var showAlert = `<div class="alert alert-danger alert-dismissible fade show" role="alert">All fields are required!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><img src="https://image.flaticon.com/icons/png/128/1828/1828778.png" height=17 width=17></button>
      </div>`;
        if(user=="" || pass=="")
        {
            document.getElementById('alert1').innerHTML = showAlert;
        }
        else
        {
            $.ajax({
                url:'loginaction.php',
                method:'POST',
                data:$('#form3').serialize(),
                beforeSend: function () {
                    $('.loading-spinner').removeClass('d-none');
                    $('#next-button').attr('disabled', true);
                },
                complete: function () {
                    $('.loading-spinner').addClass('d-none');
                    $('#next-button').attr('disabled', false);
                },
                success:function(response){
                    
                    if(response == "Login as Admin")
                    {
                        window.location.href = './admin/admindashboard.php';
                    }
                    else if(response == "Login as Member")
                    {
                        window.location.href = './member/memberdashboard.php';
                    }
                    else
                    {
                        $('#alert1').fadeIn();
                        $('#alert1').removeClass('alert alert-danger').addClass('alert alert-primary').html(response);
                    }
                }
            });
        }
    });

    $('#forgotbtn').click(function(e){
        e.preventDefault();
        var emailid = $('#femail').val();
        var password = $('#fpass').val();
        var cpassword = $('#fcpass').val();
        var showAlert = `<div class="alert alert-danger alert-dismissible fade show" role="alert">All fields are required!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><img src="https://image.flaticon.com/icons/png/128/1828/1828778.png" height=17 width=17></button>
      </div>`;
        if(emailid=="" || password=="" || cpassword=="")
        {
            document.getElementById('alertmsg').innerHTML = showAlert;
        }
        else if (emailid.indexOf("@") < 0 || emailid.indexOf(".") < 0)
        {
            $('#alertmsg').removeClass('alert alert-danger').addClass('alert alert-primary').html("Invalid Email Id");
            $('#femail').css('border', '1px solid red');
        }
        else
        {
            $.ajax({
                url:'forgot.php',
                method:'POST',
                data:$('#form4').serialize(),
                beforeSend: function () {
                    $('.forgot-spinner').removeClass('d-none');
                    $('#forgotbtn').attr('disabled',true);
                },
                complete: function () {
                    $('.forgot-spinner').addClass('d-none');
                    $('#forgotbtn').attr('disabled',false);
                },
                success:function(response){
                    $('#femail').removeAttr('style');
                    $('#alertmsg').fadeIn();
                    $('#alertmsg').removeClass('alert alert-danger').addClass('alert alert-primary').html(response);
                    if(response=="we send otp to registered email id to change password")
                    {
                        $('div#rm_email').remove();
                        $('div#rm_pass').remove();
                        $('div#rm_cpass').remove();
                        $('div#rm_update_btn').remove();

                        $('.modal-body').html(`<div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span><img src="https://image.flaticon.com/icons/png/128/3064/3064211.png" height="20" width="20"></span>
                                </span>
                            </div>
                            <input type="text" id="fotp" class="form-control" name="fotp" placeholder="Enter OTP" required>
                        </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="modal-footer">
                                <button id="verify" type="submit" class="btn btn-primary">Verify</button>
                            </div>
                        </div>`);
                        
                        
                        
                    }
                    
                    
                }
               });
        }
    });


    $(document).on("click","#verify",function(e){
        e.preventDefault();
        var otp = $('#fotp').val();
        if(otp=="")
        {
            $('#alertmsg').fadeIn();
            $('#alertmsg').removeClass('alert alert-danger').addClass('alert alert-primary').html("Enter OTP.....!!");
        }
        else
        {
            $.ajax({
                url:'change-password.php',
                method:'POST',
                data:{otp:otp},
                success:function(data){
                    $('#alertmsg').fadeIn();
                    $('#alertmsg').removeClass('alert alert-danger').addClass('alert alert-primary').html(data);
                    $('#form4').trigger('reset');
                   
                }
            });
        }
    });
    
});