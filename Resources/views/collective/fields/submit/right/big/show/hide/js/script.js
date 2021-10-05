$('#mainForm input').not('#mainForm input[type="checkbox"]').on('input', () => {

    let emptyInputsNumber = $('#mainForm input').not('#mainForm input[type="checkbox"]').not('[id^=html5]').filter(function () {
        return !this.value;
    });

    if (emptyInputsNumber.length === 0) {
        $("#submitButton").removeAttr('disabled');
    } else {
        $("#submitButton").attr('disabled', 'disabled');
    }

});

$('#mainForm input').not('#mainForm input[type="checkbox"]').on('change', () => {

    let emptyInputsNumber = $('#mainForm input').not('#mainForm input[type="checkbox"]').not('[id^=html5]').filter(function () {
        return !this.value;
    });

    if (emptyInputsNumber.length === 0) {
        $("#submitButton").removeAttr('disabled');
    } else {
        $("#submitButton").attr('disabled', 'disabled');
    }

});

$('#mainForm').submit(function (event) {

    event.preventDefault();

    upload_files_old($(this));

});

function upload_files_old(form) {
    let i = 0;

    function run() {

        if (generalUploader[i] !== undefined && generalUploader[i].files !== undefined && generalUploader[i].files.length > 0) {

            generalUploader[i].start();

            generalUploader[i].bind('UploadComplete', function (up, file) {

                let percentage = 8.33 * (i + 1);

                percentage = percentage.toFixed(2);

                $('.progress-bar').css('width', percentage + "%");
                $('.progress-bar').html(percentage + "%");

                i++;

                run();

            });
        } else {
            form.unbind('submit').submit();
        }
    }


    $("#submitButton").addClass('d-none');
    $('#upload_progress').removeClass('d-none');
    $('#upload_tab').addClass('d-none');

    let percentage = 8.33;

    percentage = percentage.toFixed(2);

    $('.progress-bar').css('width', percentage + "%");
    $('.progress-bar').html(percentage + "%");

    run();
}
