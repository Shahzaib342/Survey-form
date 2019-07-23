var survey = {
    isSubmit: false
};

jQuery(function ($) {
    $(document).ready(function () {
        $("form").on('submit', (function (e) {
            $('#myModal').modal('hide');
            $("html, body").animate({scrollTop: 0}, "slow");
            $('.alert-success').show();
            var form = $(this);
            e.preventDefault();
            $.ajax({
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                url: '/wp-content/themes/twentyseventeen/Survey/survey_submit.php',
                success: function (data) {
                }
            });
        }));
    });
});

function submitForm() {
    jQuery(function ($) {
        $('#myModal').modal('show');
    });
}

function submitData() {
    jQuery(function ($) {
        $('#email').val($('#modal-email').val());
        $('.btn-submit-form').trigger('click');
    });
}
