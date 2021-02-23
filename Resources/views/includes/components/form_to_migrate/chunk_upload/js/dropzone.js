<<<<<<< HEAD
$(function () {
//var $ = window.$; // use the global jQuery instance

if ($("#my-awesome-dropzone").length > 0) {
    var token = $('input[name=_token]').val();

    // A quick way setup
    var myDropzone = new Dropzone("#my-awesome-dropzone", {
        // Setup chunking
        chunking: true,
        method: "POST",
        maxFilesize: 400000000,
        chunkSize: 1000000,
        // If true, the individual chunks of a file are being uploaded simultaneously.
        parallelChunkUploads: true
    });

    // Append token to the request - required for web routes
    myDropzone.on('sending', function (file, xhr, formData) {
        formData.append("_token", token);
    })
}

=======
$(function () {
//var $ = window.$; // use the global jQuery instance

if ($("#my-awesome-dropzone").length > 0) {
    var token = $('input[name=_token]').val();

    // A quick way setup
    var myDropzone = new Dropzone("#my-awesome-dropzone", {
        // Setup chunking
        chunking: true,
        method: "POST",
        maxFilesize: 400000000,
        chunkSize: 1000000,
        // If true, the individual chunks of a file are being uploaded simultaneously.
        parallelChunkUploads: true
    });

    // Append token to the request - required for web routes
    myDropzone.on('sending', function (file, xhr, formData) {
        formData.append("_token", token);
    })
}

>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
});