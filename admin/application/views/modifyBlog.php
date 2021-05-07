<?php 
    echo '<script>var post_data = '.json_encode($post).'</script>';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Blog Management
        <small>Edit Blog</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
            
              <div class="col-md-8">
              <!-- general form elements -->
                <div class='blog-title' style="margin-bottom: 2vh;">
                    <h3>Titulo del Articulo</h3>
                    <input id='blog-title-input' placeholder='Titulo de Articulo'/>
                </div>

                <div class='blog-autor' style="margin-bottom: 2vh;">
                    <h3>Nombre del autor</h3>
                    <input id='blog-autor-input' placeholder='Autor'/>
                </div>
                
                <div class='blog-author-img' style="margin-bottom: 2vh;">
                    <h3>Foto del autor en la seccion blog</h3>
                    <img id='uploaded_authorimg' src='' style='width: 15vh;heigth : 15vh'/>
                    <input id='blog-author-input' type='file' placeholder='Miniatura' accept="image/x-png,image/gif,image/jpeg" onchange="modifyImg(this)"/>
                </div>

                <div class='blog-miniature' style="margin-bottom: 2vh;">
                    <h3>Miniature / Foto del articulo en la seccion blog</h3>
                    <img id='uploaded_img' src='' style='width: 15vh;heigth : 15vh'/>
                    <input id='blog-miniature-input' type='file' placeholder='Miniatura' accept="image/x-png,image/gif,image/jpeg" onchange="modifyImg(this)"/>
                </div>

                <div class='blog-banner' style="margin-bottom: 2vh;">
                    <h3>Banner / Foto principal del articulo</h3>
                    <img id='uploaded_bannerimg' src='' style='width: 15vh;heigth : 15vh'/>
                    <input id='blog-banner-input' type='file' placeholder='Banner' accept="image/x-png,image/gif,image/jpeg" onchange="modifyImg(this)"/>
                </div>

                <div class='blog-date' style="margin-bottom: 2vh;">
                    <h3>Fecha del Articulo</h3>
                    <input id='blog-date-input' type='date'/>
                </div>
                
                <div class='blog-resumen' style="margin-bottom: 2vh;">
                    <h3>Resumen del articulo a mostrar en la seccion de blog</h3>
                    <input id='blog-resumen-input' placeholder='Resumen del Articulo'/>
                </div>
                
                <h3>Cuerpo del articulo</h3>
                <div id="summernote" style="margin-bottom: 2vh;"></div>
            
                <div class='save-blog'
                style="margin-top: 2vh;">
                    <button type="button" class="btn btn-primary" type='button' id='submit-blog'>Guardar Blog</button>
                </div>
                
            </div>


            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/blogManager.js" type="text/javascript"></script>