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

    $('#submit-blog').on('click',submitHmtl);
}); 

function submitHmtl(){
    var html_text = $('#summernote').summernote('code')
    var title = $('#blog-title-input').val()
    var id = new URL(window.location.href).searchParams.get('id')

    if(title == ''){
        alert('Ingrese un titulo para el blog')
        return;
    }

    $.ajax({
        url : baseURL+'api/BlogAPI',
        type : 'post',
        data : {id : id, 'titulo' : title,'html_text' : html_text},
        success : function(datos){
            alert('Blog guardado')
        },
        error : function(error){
            alert(error.responseText)
        }
    })
}
