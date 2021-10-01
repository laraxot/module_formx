$(function () {
    // Custom example logic

    var uploader = new plupload.Uploader({
        runtimes: 'html5,flash,silverlight,html4',
        chunk_size: '1024kb',
        browse_button: 'pickfiles', // you can pass in id...
        container: document.getElementById('container'), // ... or DOM Element itself

        url: "/upload?_token=" + $('meta[name="csrf-token"]').attr('content'),

        filters: {
            max_file_size: '100mb',
            mime_types: [{
                title: "PDF files",
                extensions: "pdf"
            }]
        },

        // Flash settings
        flash_swf_url: base_url + '/bc/plupload/js/Moxie.swf',

        // Silverlight settings
        silverlight_xap_url: base_url + '/bc/plupload/js/Moxie.xap',


        init: {
            PostInit: function () {
                document.getElementById('filelist').innerHTML = '';

                document.getElementById('uploadfiles').onclick = function () {
                    uploader.start();
                    return false;
                };
            },

            FilesAdded: function (up, files) {
                plupload.each(files, function (file) {
                    document.getElementById('filelist').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
                });
            },

            UploadProgress: function (up, file) {
                document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
            },

            Error: function (up, err) {
                document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
            }
        }
    });

    uploader.init();
});
