 <!-- ======= Blog Section ======= -->
 <section id="blog" class="blog section-bg">
    <div class="title-blog">ROCKNROLLAFUTURE</div>
    	<div id='blog-scroll' class="container-fluid" style="max-height: 100%;position: relative;margin-top: 4vh;">
    		<div class="row" style="height: 100%;">
                <div class="col-xs-12" style="height: 100%;overflow: auto;padding-bottom: 12vh;">
                    <?php 
                    
                        foreach($blogEntries as $blogEntry){
                            $parsedDate = date("d F Y", strtotime($blogEntry["date"]));
                            echo "
                                <div class='blog-entry-container'>
                                    <div class='blog-image-container'>
                                        <img src='assets/img/blogminiatures/".$blogEntry["miniature"]."' />
                                    </div>
                                    <div class='blog-text-container'>
                                        <p class='blog-title'>".$blogEntry["titulo"]."</p>
                                        <p class='blog-description'>
                                        ".$blogEntry["resumen"]."
                                        </p>
                                        <div class='blog-btn-date-container'>
                                            <div class='blog-read-more-container'>
                                                <a href='blogEntry?id=".$blogEntry["id"]."'><p>READ MORE</p></a>
                                            </div>
                                            <div class='blog-date-container'>
                                                <p class='blog-date' style='width: 15vh'> ".$parsedDate."</p>
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