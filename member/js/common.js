function loadNotification() {


    $.ajax({
        url: './actions/fetchnotification.php',
        method: 'GET',
        success: function (data) {

            
            $('#rm-noti').removeClass('d-none');
            $('#all_notification').html(data);

            $('[data-toggle="popover"]').popover({
                html: true,
                container: 'body',
                content: function () {
                    return $('#all_notification').html();
                }

            });

            $('[data-toggle="popover"]').click(function () {
                $('#rm-noti').addClass('d-none');
            });

            
            setTimeout(function () {
                $('#rm-noti').addClass('d-none');
            }, 10000);

        }
    });

}

function profile_photo() {
    $.ajax({
        url: './actions/fetchprofile.php',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            var profile = data.profile_photo;
            var change_profile = profile.replace("../../", "../");
            document.getElementById('main-profile-pic').src = change_profile;
        }
    });
}

setInterval(function () {
    var date = new Date();
    var hour = date.getHours();
    if (hour >= 1 && hour < 7) {
        $('#offcanvasExample').removeClass('bg-primary').addClass('bg-dark');
        $('#navbar').removeClass('bg-primary').addClass('bg-dark');
    }
    else if (hour >= 7 && hour < 19) {
        $('#offcanvasExample').removeClass('bg-dark').addClass('bg-primary');
        $('#navbar').removeClass('bg-dark').addClass('bg-primary');
    }
    else {
        $('#offcanvasExample').removeClass('bg-primary').addClass('bg-dark');
        $('#navbar').removeClass('bg-primary').addClass('bg-dark');
    }
}, 1000);


$(function () {
    $('#img_file').change(function (e) {
        var x = URL.createObjectURL(e.target.files[0]);
        $('#admin-profile').attr("src", x);

    });
});

function wishBirthday(){
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    if(day < 10)
    {
      day = '0' + day;
    }
    if(month < 10)
    {
      month = '0' + month;
    }
    var local = year + '-' + month + '-' + day;
    
    $.ajax({
        url: './actions/fetchprofile.php',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            var profile = data.dob;
            var name = data.name;
            
            if(local == profile)
            {

                setTimeout(function(){
                    $("#myModal").modal("show");
                    $('#wish_name').text(name);
                    $(".audioDemo").trigger('play');
                },2000);


            }
            
        }
    });
    

    $('#jj').click(function(){
        $("#myModal").modal("hide");
        $(".audioDemo").trigger('pause');
                
    });
}

$('#profile').click(function () {
    $.ajax({
        url: './actions/fetchprofile.php',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            var profile = data.profile_photo;
            var change_profile = profile.replace("../../", "../");
            document.getElementById('admin-profile').src = change_profile;
            profile_photo(change_profile);
            $('#name').val(data.name);
            $('#email').val(data.email);
            $('#phone').val(data.phone);
            $('#address').val(data.address);

            if (data.identity_photo != "none" && data.identity_number != "none" && data.occupation != "none" && data.occupation_details != "none") {
                $('#occupation').val(data.occupation);
                $('#occu-detail').val(data.occupation_details);
                $('#identity').val(data.identity_number);

            }

        }
    });
});


$('#form-5').on("submit", function (e) {
    e.preventDefault();
    var form = new FormData(this);
    // console.log(form);
    $.ajax({
        url: './actions/update-profile.php',
        method: 'POST',
        data: form,
        contentType: false,
        processData: false,
        success: function (data) {
            document.getElementById('main-profile-pic').src = "../media/" + data;

        }
    });
});



$(document).on("click", ".remove-notification", function () {
    var id = $(this).attr('id');
    $.ajax({
        url: './actions/delete-notification.php',
        method: 'POST',
        data: { id: id },
        success: function (data) {
            console.log(data);
        }
    });
});