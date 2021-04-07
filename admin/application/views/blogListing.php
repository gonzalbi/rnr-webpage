<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Blog Management
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addNew"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
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
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Post List</h3>
                    <div class="box-tools">
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    
                  <table class="table table-hover">
                    <tr>
                        <th>Titulo</th>
                        <th>Actions</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php 
                        foreach($posts as $post){
                            $publishStatus = $post["published"] ? true : false;
                            $publishColor = $publishStatus ? "btn-secondary" : "btn-success";
                            $publishText = $publishStatus ? 'Despublicar' : 'Publicar';

                            $trColor = $publishStatus ? 'style="background-color: #6bc17f;"' : '';

                            echo '<tr '.$trColor.' ><td blog-id='.$post["id"].'>'.$post["titulo"].'</td>
                            <td><a class="btn btn-primary" href="'.base_url().'modifyBlog?id='.$post["id"].'"><i class="fa fa-plus"></i> Editar</a></td>
                            <td>
                                <a class="btn '.$publishColor.'" onClick="publishBlog('.$post["id"].','.json_encode($publishStatus).')" href="#">
                                <i class="fa fa-plus"></i>
                                '.$publishText.'
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="#">
                                <i class="fa fa-trash"></i>
                                    Eliminar
                                </a>
                            </td>
                            </tr>';
                        }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php //echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "userListing/" + value);
            jQuery("#searchList").submit();
        });
    });

    
    function publishBlog(id,status){
        $.ajax({
        url : baseURL+'api/blogapi',
        type : 'put',
        data : {id : id, status : status},
        success : function(datos){
            window.location.reload()
        }
    })
    }

</script>
