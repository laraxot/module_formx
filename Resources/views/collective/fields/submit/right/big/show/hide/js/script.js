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

                i++;

                run();

            });
        } else {
            form.unbind('submit').submit();
        }
    }

    run();
}
