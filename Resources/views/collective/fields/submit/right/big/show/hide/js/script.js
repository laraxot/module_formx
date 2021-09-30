$('#mainForm input').not('#mainForm input[type="checkbox"]').on('input', () => {

    let emptyInputsNumber = $('#mainForm input').not('#mainForm input[type="checkbox"]').filter(function () {
        return !this.value;
    });

    if (emptyInputsNumber.length === 0) {
        $("#submitButton").removeAttr('disabled');
    } else {
        $("#submitButton").attr('disabled', 'disabled');
    }

});

$('#mainForm input').not('#mainForm input[type="checkbox"]').on('change', () => {

    let emptyInputsNumber = $('#mainForm input').not('#mainForm input[type="checkbox"]').filter(function () {
        return !this.value;
    });

    if (emptyInputsNumber.length === 0) {
        $("#submitButton").removeAttr('disabled');
    } else {
        $("#submitButton").attr('disabled', 'disabled');
    }

});
