<<<<<<< HEAD
function readURL(input,img) {

    if (input.files && input.files[0]) {
        var file=input.files[0];
        var reader = new FileReader();

        reader.onload = async function(e) {
            //console.log(file.name,file.type,e.target.result);
           // @this.carica(5);
            data = await e.target.result;
            //console.log(data);
            img.css("background-image",'url(' + data +')');
            //file.content=e.target.result;
            img.data('filename',file.name);

        }

        reader.readAsDataURL(file); // convert to base64 string
    }
}
/*
$(".xtimage").change(function() {
    var img=$(this).parent().parent();
    readURL(this,img);
});
*/
=======
function readURL(input,img) {

    if (input.files && input.files[0]) {
        var file=input.files[0];
        var reader = new FileReader();

        reader.onload = async function(e) {
            //console.log(file.name,file.type,e.target.result);
           // @this.carica(5);
            data = await e.target.result;
            //console.log(data);
            img.css("background-image",'url(' + data +')');
            //file.content=e.target.result;
            img.data('filename',file.name);

        }

        reader.readAsDataURL(file); // convert to base64 string
    }
}
/*
$(".xtimage").change(function() {
    var img=$(this).parent().parent();
    readURL(this,img);
});
*/
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
