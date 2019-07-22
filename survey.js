var survey = {
    isSubmit : false
};

jQuery(function ($) {
    $(document).ready(function () {
        $("form").on('submit', (function (e) {
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
                        $('#myModal').modal('hide');
                        console.log(data);
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
        $('#btn-submit-form').trigger('click');
    });
}
