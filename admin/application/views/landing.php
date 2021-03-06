<script>
    var message = <?php echo '"'.$message.'"' ?>
</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Detalles Home
        <small></small>
    </h1>
</section>

<section class="content">

    <div class="row">
        <!-- left column -->
        <div class="col-12 col-md-8">
          <!-- general form elements -->



          <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Insertar detalles</h3>
            </div><!-- /.box-header -->
            <!-- form start -->

            <div class="box-body">

                <?php  
                foreach ($destacados as $destacado) {
                    echo form_open_multipart("home/editDestacados");
                    echo '
                    <div class="row">
                    <div class="col-12 col-md-6">                                
                    <div class="form-group">
                    <label for="fname">ID '.$destacado->nombre.'</label>
                    <input type="text" class="form-control" id="fname" placeholder="Inserte ID de video" name="fname" value="'.$destacado->videoId.'" maxlength="128">
                    <input type="hidden" value="'.$destacado->id.'" name="id" id="userId'.$destacado->id.'" />    
                    </div>

                    </div>
                    <div class="col-12 col-md-6">
                    <div class="form-group">
                    <label for="pic_file">Thumbnail '.$destacado->nombre.'</label>
                    <input type="file" name="pic_file" class="form-control"  id="pic_file"">
                    </div>
                    </div></div>    
                    <div class="box-footer">
                    <input type="submit" class="btn btn-primary" value="Submit" />
                    <input type="reset" class="btn btn-default" value="Reset" />
                    </div>
                    </form>';
                }; 
                ?>



            </div><!-- /.box-body -->

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
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
                <?php echo $this->session->flashdata('error'); ?>                    
            </div>
        <?php } ?>
        <?php  
        $success = $this->session->flashdata('success');
        if($success)
        {
            ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>

        <div class="row">
            <div class="col-md-12">
                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button></div>'); ?>
            </div>
        </div>
    </div>
</div>    
</section>
</div>

<script src="<?php echo base_url(); ?>assets/js/editUser.js" type="text/javascript"></script>