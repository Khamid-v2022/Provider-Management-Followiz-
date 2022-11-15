$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $("#submit_form").on("submit", function(e){
        e.preventDefault();
        const email = $("#email").val();
        const password = $("#password").val();
        if(!email || !password){
            alert("Please fill out the following form");
            return;
        }
        console.log(email, password);
        
        let _url = "/login";
        let data = {
            email,
            password,
        };

        $.ajax({
            url: _url,
            type: "POST",
            data: data,
            success: function (response) {
                console.log(response);

                if (response.code == 200) {
                    location.href = "/";
                }  else {
                    alert("Wrong info");
                }
            },
            error: function (response) {
                alert("Something went wrong. Please try again later");
            },
        });
    })
})