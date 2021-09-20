$('#mainForm input').not('#mainForm input[type="checkbox"]').on('input', () => {

    let emptyInputsNumber = $('#mainForm input').not('#mainForm input[type="checkbox"]').filter(function () {
        return !this.value;
    });

    if (emptyInputsNumber.length === 0) {
        $("#submitButton").show();
    } else {
        $("#submitButton").hide();
    }

});

$('#mainForm input').not('#mainForm input[type="checkbox"]').on('change', () => {

    let emptyInputsNumber = $('#mainForm input').not('#mainForm input[type="checkbox"]').filter(function () {
        return !this.value;
    });

    if (emptyInputsNumber.length === 0) {
        $("#submitButton").show();
    } else {
        $("#submitButton").hide();
    }

});
