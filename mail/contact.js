$(function () {

    $("#runnersRegForm input__, #runnersRegForm textarea__").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function ($form, event, errors) {
        },
        submitSuccess: function ($form, event) {
            event.preventDefault();
            let firstName = $("input#firstName").val();
            let lastName = $("input#lastName").val();
            let email = $("input#email").val();
            let dateInput = $("input#date").val();
            let state = $("input#state").val();
            let phone = $("input#phone").val();
            let contactPhone = $("input#contactPhone").val();
            let address = $("textarea#address").val();
            let sex = $("select#sex").val();
            let country = $("select#country").val();
            let visitedOpobo = $("select#visitedOpobo").val();
            let raceChoice = $("select#raceChoice").val();

            $this = $("#registerButton");
            $this.prop("disabled", true);

            $.ajax({
                url: '',
                type: "POST",
                data: {
                    firstName,
                    lastName,
                    email,
                    dateInput,
                    state,
                    phone,
                    contactPhone,
                    address,
                    sex,
                    country,
                    visitedOpobo,
                    raceChoice,
                },
                cache: false,
                success: function () {
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                    $('#success > .alert-success')
                            .append("<strong>Your message has been sent. </strong>");
                    $('#success > .alert-success')
                            .append('</div>');
                    $('#contactForm').trigger("reset");
                },
                error: function () {
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                    $('#success > .alert-danger').append($("<strong>").text("Sorry " + name + ", it seems that our mail server is not responding. Please try again later!"));
                    $('#success > .alert-danger').append('</div>');
                    $('#contactForm').trigger("reset");
                },
                complete: function () {
                    setTimeout(function () {
                        $this.prop("disabled", false);
                    }, 1000);
                }
            });
        },
        filter: function () {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function (e) {
        e.preventDefault();
        $(this).tab("show");
    });

});


$('#firstName').focus(function () {
    // console.log($('#firstName').val('world'))
    $('#success').html('hello');
});
