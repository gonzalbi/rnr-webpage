 <!-- ======= Blog Section ======= -->
 <section id="blog" class="blog section-bg">
    	<div class="container-fluid">
            <div class="title-blog">
                    ROCKNROLLAFUTURE
            </div>
    		<div class="row">
                <div class="col-xs-12">
                    <?php 
                    
                        foreach($blogEntries as $blogEntry){
                            echo "
                                <div class='blog-entry-container'>
                                    <div class='blog-image-container'>
                                        <img src='assets/img/rnrteam/".$blogEntry["autor_img"]."' />
                                    </div>
                                    <div class='blog-text-container'>
                                        <p class='blog-title'>".$blogEntry["titulo"]."</p>
                                        <p class='blog-description'>
                                        ".$blogEntry["resumen"]."
                                        </p>
                                        <div class='blog-btn-date-container'>
                                            <div class='blog-read-more-container'>
                                                <a><p>READ MORE</p></a>
                                            </div>
                                            <div class='blog-date-container'>
                                                <p class='blog-date' style='width: 15vh'> ".$blogEntry["date"]."</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Blog Section -->