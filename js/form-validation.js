jQuery(document).ready(function($) {

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
                digits: true,
                minlength: 4
            },
            Message: {
                required: true,
                minlength: 5,
                maxlength: 100,

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

            Phone: "Please enter a valid phone number",
            Message: "Please write something between 5 to 100 chars"
        },


        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },

    });

    $.fn.btn_loading = function($target) {
        var btn_icons_load = '<i class="fa fa-spinner fa-spin"></i>';
        if ($target == 'reset') {
            var reset_text = $(this).data('reset-text');
            $(this).html(reset_text);
            $(this).removeAttr('disabled');
        } else if ($target == 'loading') {
            var reset_text = $(this).html();
            $(this).data('reset-text', reset_text);
            var load_text = (typeof $(this).data('loading-text') !== 'undefined') ? $(this).data('loading-text') : '';
            $(this).html(btn_icons_load + ' ' + load_text);
            $(this).attr('disabled', true);
        }
    };

    $("form[name='ContactForm']").on('submit', function(e) {

        e.preventDefault();
        if ($(this).valid()) {
            var that = $(this)
            var btn = $('#btn_submit_form');

            var data = that.serialize();
            console.log(data);
            btn.btn_loading('loading');
            $.ajax({
                type: 'POST',
                url: '/contact_add',
                data: data,
                success: function(response) {
                    if (response) {
                        btn.btn_loading('reset');
                        that.html("Faleminderit qe keni gjetur kohen per te na kontaktuar");
                        alert("success")
                    } else {
                        alert('this email exist');
                        btn.btn_loading('reset');
                    }
                },
                error: function(e) {
                    btn.btn_loading('reset');
                    alert("Failed");
                }
            });
        }
    });


});