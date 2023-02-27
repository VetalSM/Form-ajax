$(document).ready(function () {
    $("form").submit(function (event) {
        $(".form-group").removeClass("has-error");
        $(".help-block").remove();
        var formData = {
            name: $("#name").val(),
            lastName: $("#lastName").val(),
            email: $("#email").val(),
            password: $("#password").val(),
            password2: $("#password2").val(),
        };

        $.ajax({
            type: "POST",
            url: "process.php",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function (data) {
            console.log(data);

            if (!data.success) {
                if (data.errors.name) {
                    $("#name-group").addClass("has-error");
                    $("#name-group").append(
                        '<div class="help-block">' + data.errors.name + "</div>"
                    );
                }
                if (data.errors.name) {
                    $("#lastName-group").addClass("has-error");
                    $("#lastName-group").append(
                        '<div class="help-block">' + data.errors.lastName + "</div>"
                    );
                }

                if (data.errors.email) {
                    $("#email-group").addClass("has-error");
                    $("#email-group").append(
                        '<div class="help-block">' + data.errors.email + "</div>"
                    );
                }

                if (data.errors.password) {
                    $("#password-group").addClass("has-error");
                    $("#password-group").append(
                        '<div class="help-block">' + data.errors.password + "</div>"
                    );
                }
            } else {
                $("form").html(
                    '<div class="alert alert-success">' + data.message + "</div>"
                );
            }

        });

        event.preventDefault();
    });
});