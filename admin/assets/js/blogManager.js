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
            //['fontname', ['fontname']],
            //['fontsize', ['fontsize']],
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
            $('#blog-autor-input').val(post_data[0].autor)
            $('#blog-autor-picture').val(post_data[0].autor_img)
            $('#blog-resumen-input').val(post_data[0].resumen)
            $('#blog-date-input').val(post_data[0].date)
            $('#blog-miniature-input').val(post_data[0].miniature)
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
    var autor = $('#blog-autor-input').val()
    var autorpic = $('#blog-autor-picture option:selected').text()
    var miniature = $('#blog-miniature-input').val()
    var date = $('#blog-date-input').val()
    var resumen = $('#blog-resumen-input').val()

    if(title == ''){
        alert('Ingrese un titulo para el blog')
        return;
    }

    $.ajax({
        url : baseURL+'api/BlogAPI',
        type : 'post',
        data : {
            id : id, 
            'titulo' : title,
            'html_text' : html_text,
            'autor' : autor,
            'autor_img' : autorpic,
            'date' : date,
            'miniature' : miniature,
            'resumen' : resumen
        },
        success : function(datos){
            alert('Blog guardado')
        },
        error : function(error){
            alert(error.responseText)
        }
    })
}
