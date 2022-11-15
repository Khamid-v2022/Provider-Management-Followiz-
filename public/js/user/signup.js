$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $("#submit_form").on("submit", function(e){
        e.preventDefault();
        const user_name = $("#user_name").val();
        const email = $("#email").val();
        const password = $("#password").val();
        const password_c = $("#password_confirm").val();
        if(!user_name || !email || !password){
            alert("Please fill out the following form");
            return;
        }

        if(password != password_c){
            alert("Make sure your password");
            return;
        }
        
        let _url = "/registration";
        let data = {
            user_name,
            email,
            password,
        };

        $.ajax({
            url: _url,
            type: "POST",
            data: data,
            success: function (response) {
                if (response.code == 200) {
                    location.href = "/login";
                }  else {
                    alert(response.message);
                }
            },
            error: function (response) {
                alert("Something went wrong. Please try again later");
            },
        });
    })
})