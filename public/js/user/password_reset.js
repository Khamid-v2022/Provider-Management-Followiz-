$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $("#submit_form").on("submit", function(e){
        e.preventDefault();
        const email = $("#email").val();
        
        if(!email){
            alert("Please fill out the following form");
            return;
        }
        
        let _url = "/password_reset";
        let data = {
            email,
        };

        $.ajax({
            url: _url,
            type: "POST",
            data: data,
            success: function (response) {
                if (response.code == 200) {
                    alert("Please check out your email box");
                    location.href = "/";
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