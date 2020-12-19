// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration

    $("form[name='ContactForm']").validate({

        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            Name: {
                required: true,
                minlength: 3,

            },

            Address: {
                required: true,
                minlength: 3,
            },
            Email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
            Phone: {
                required: true,
                tel: true
            }
        },
        // Specify validation error messages
        messages: {
            Name: {
                required: "Please enter your name",
                minlength: "Your name should have at least three chars"


            },
            Address: {
                required: "Please enter your address",
                minlength: "Your name should have at least three chars"
            },

            Email: "Please enter a valid email address",

            Phone: "Please enter a valid phone number"
        },


        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });
});