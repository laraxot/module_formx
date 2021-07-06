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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
