$(document).ready(function() {
    $('#summernote').summernote(
    {
        tabsize: 3,
        fontNames: ['Arial', 'Arial Black','Westmount','Courier New'],
        fontNamesIgnoreCheck: ['Westmount'],
        fontSizeUnits: ['vh'],
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']],
        ]
    });

    try{
        if(post_data[0]){
            $('#blog-title-input').val(post_data[0].titulo)
            $('#summernote').summernote('code',post_data[0].html_text)
        }
    }catch{
        console.log('New blogpost')
    }

}); 

function submitHmtl(){
    $('#summernote').summernote('code');
}