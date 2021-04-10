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
            $('#blog-miniature-input')[0].files[0]
            $('#blog-resumen-input').val(post_data[0].resumen)
            $('#blog-date-input').val(post_data[0].date)
            $('#uploaded_img').attr('src','../assets/img/blogminiatures/'+post_data[0].miniature)
            $('#uploaded_bannerimg').attr('src','../assets/img/blogbanner/'+post_data[0].banner)
        }
    }catch{
        console.log('New blogpost')
    }

    $('#submit-blog').on('click',submitHmtl);
}); 

function submitHmtl(){

    var miniature = post_data[0] ? post_data[0]['miniature'] :""
    var banner = post_data[0] ? post_data[0]['banner'] : ""

    var html_text = $('#summernote').summernote('code')
    var title = $('#blog-title-input').val()
    var id = new URL(window.location.href).searchParams.get('id')
    var autor = $('#blog-autor-input').val()
    var autorpic = $('#blog-autor-picture option:selected').text()
    var miniature = $('#blog-miniature-input')[0].files[0] ?? miniature
    var banner = $('#blog-banner-input')[0].files[0] ?? banner
    var date = $('#blog-date-input').val()
    var resumen = $('#blog-resumen-input').val()

    var fd = new FormData();

    fd.append('id',id)
    fd.append('titulo',title)
    fd.append('html_text',html_text)
    fd.append('autor',autor)
    fd.append('autor_img',autorpic)
    fd.append('resumen',resumen)
    fd.append('date',date)
    fd.append('miniature',miniature)
    fd.append('banner',banner) 

    $.ajax({
        url : baseURL+'api/BlogAPI',
        type : 'post',
        processData: false,
        contentType: false,
        data : fd,
        success : function(datos){
            alert('Blog guardado')
            if(datos.id)window.location.replace(window.location.href+'?id='+datos.id)
            
        },
        error : function(error){
            alert(error.responseText)
        }
    })
}


function modifyImg(input){
    
    if (input.files && input.files[0]) {
        var reader = new FileReader();            
        reader.onload = (function(i){
            return function(e){
                $('#'+i.id).prev().attr('src', e.target.result);
            };
        })(input);

        reader.readAsDataURL(input.files[0]);
    }

}
