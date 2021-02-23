<<<<<<< HEAD
Dropzone.autoDiscover = true;

$(function () {
    Dropzone.options.myAwesomeDropzone = {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 2, // MB
        accept: function(file, done) {
          if (file.name == "justinbieber.jpg") {
            done("Naha, you don't.");
          }
          else { done(); }
        }
      };

});
=======
Dropzone.autoDiscover = true;

$(function () {
    Dropzone.options.myAwesomeDropzone = {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 2, // MB
        accept: function(file, done) {
          if (file.name == "justinbieber.jpg") {
            done("Naha, you don't.");
          }
          else { done(); }
        }
      };

});
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
