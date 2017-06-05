/**
 * Created by marcusdalgren on 2017-04-25.
 */
//

//Om du ska jobba med bilder tex.
$("body").on("load", function () {
    console.log("Body loaded");
});

//Allting annat typ
$(document).ready(function () {
    var fields = $(this).find("input:text");
    var checkField = function (field) {
        var fieldValue = $.trim($(field).val());
        return (fieldValue !== "");
    };

    $.getJSON('/get-artist?id=1', function (response) {
     console.log(response);
     });


    //Keyup sker efter tangenttryck
    fields.on("keyup", function (e) {
        if (checkField(this)) {
            $(this).removeClass("error");
            $(this).addClass("done");
        }
    });

    //När ett formulär får fokus
    fields.on("focus", function (e) {
        console.log("FOCUS");
    });

    //När ett formulärfält tappar fokus
    fields.on("blur", function (e) {
        console.log("BLUR", checkField(this));
        if (!checkField(this)) {
            $(this).addClass("error");
        }
    });

    $("#create-artist").on("submit", function (e) {
        var valid = true;


//Nollställ formuläret
        $("#error-message").hide();
        fields.removeClass("error");

        //Gå igenom fälten och se om de ät ifyllda
        fields.each(function() {
            var fieldValue = $.trim($(this).val());
            if (fieldValue === "") {
                valid = false;
                $(this).addClass("error");
            }
        });


        //Skicka inte formuläret om inte alla fält är ifyllda
        if (!valid) {
            e.preventDefault();
            $("#error-message").show();
        }/*
        else {
            $.post("/create-artist",
                $(this).serialize(),
                function (response) {
                    alert("Konstnären har sparats!");
                    window.location = "/";
                }
            );
        }*/
    });
});

/*

 $("p .btn-primary").on("click", function (e) {
 // e.preventDefault();
 var element = $(this);
 });

 else{
 $(this).addClass("error");
 }

 */