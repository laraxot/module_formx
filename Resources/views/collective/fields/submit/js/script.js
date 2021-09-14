$("#mainForm input").on('input', () => {

    let emptyInputsNumber = $("#mainForm input").filter(function () {
        return !this.value;
    });

    if (emptyInputsNumber.length === 0) {
        $("#submitButton").show();
    } else {
        $("#submitButton").hide();
    }

});

$("#mainForm input").on('change', () => {

    let emptyInputsNumber = $("#mainForm input").filter(function () {
        return !this.value;
    });

    if (emptyInputsNumber.length === 0) {
        $("#submitButton").show();
    } else {
        $("#submitButton").hide();
    }

});
