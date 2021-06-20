 <!-- ======= Landing Section ======= -->
 <section id="landing" class="landing section-bg">
   <div class="container-fluid">
    <div class="topBox row">
     <div class="logo col-lg-8 col-12"></div>
     <div class="col-lg-4 col-12 right padder">
      <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'" style="overflow : hidden">
       <img src="assets/img/home-reel.JPG" style="cursor:pointer" class="thumbnail"/>
     </div>
     <div class='youtube-video-container' style="display:none">
       <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.youtube-nocookie.com/embed/kRIo2UgWEGs?&autoplay=0&mute=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <div class="intro" style="margin-top:3vh;">
      <div class="title">What´s this?</div>
      <div class="intro-text" style="height:30vh">
        <p>ROCKNROLLA no es una agencia de publicidad. 
ROCKNROLLA es una mesa de trabajo. Cinco directores. Psicólogos, facilitadores, diseñadores, redactores, arquitectos, directores audiovisuales, ilustradores, animadores, fotógrafos, desarrolladores de tecnologías y decenas de otros talentos de todas partes del mundo sumándose para enriquecer la creación de cada proyecto. 
Experiencia, frescura y recursos específicamente seleccionados al servicio de la definición, creación y ejecución de proyectos de branding, ideas o entretenimiento. 
Desde el diseño de una etiqueta, hasta el diseño de experiencia, concepto de valor, arquitectura y mobiliario de un restaurante; series originales para youtube; video clips musicales con estrellas a nivel global o una colección ilustrada de stickers de whatsapp. Un app que transforme el ahorro en un juego. Un website que no se parece a otro que hayas visto. Definición de arquetipos de personalidad y de un nuevo y honesto propósito para una marca, y luego, la creación de sus toolkits de comunicación adaptados a todos los mercados donde participa. 
Ya lo hemos hecho, y lo seguiremos haciendo cada vez mejor. Sin repetirnos, ni traicionarnos. 
Acá el target es lo más importante, la idea es lo más importante y la ejecución es lo más importante. Por todos los medios, más allá de los medios y a pesar de los medios. 
Aprendemos la receta, solo para poder romperla. Vamos muchas veces contra la razón, y nos dejamos llevar por la emoción. 
Sabemos que la data y la tecnología nos necesitan más a nosotros que nosotros a ellas. 
Cobramos por lo que realmente tiene valor y muchas veces decimos: “no”. 
Nuestro trabajo nos define, por eso nos juntamos con los mejores del mundo para que cada proyecto sea mejor que el último. 
#weareROCKNROLLA
#RocktheTalk</p>
      </div>
    </div>
		</div>
</div>
<div class="bottomBox col-12">
 <div class="title">What´s new?</div>
 <div class="videoContainer row">
  <?php  
  foreach ($destacados as $destacado) {
    echo '<div class="col-lg-4 col-12 reel">
    <div onclick="this.nextElementSibling.style.display=\'block\'; this.style.display=\'none\'">
    <img src="assets/img/'.$destacado->thumbnail.'" style="cursor:pointer" class="thumbnail"/>
    </div>
    <div class="youtube-video-container" style="display:none">
    <div class="embed-responsive embed-responsive-16by9">
    <iframe src="https://www.youtube-nocookie.com/embed/'.$destacado->videoId.'?&autoplay=0&mute=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
    </div>';
  }; 
  ?>

</div>
</div>

</div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="branding" class="branding section-bg">
    	<div class="container-fluid">
    		<div class="row">
                <div class="height35 col-12 d-block d-lg-none sectionTitle"> 
                            <div class="title">Branding</div>
                            <div class="intro-text">
                                <p>Investigar y conocer al consumidor, sus emociones y necesidades; y así definir y dar vida a marcas honestas.
                                    Nos gusta conocer muy bien a quienes vamos a motivar con nuestras marcas.
                                    Nos gusta definir marcas que signifiquen algo positivo y relevante para la vida de la gente.
                                    Y darles vida a través de una experiencia única. Darles una voz con identidad. Antes de los medios, por todos los medios y a pesar de los medios.
                                Las marcas que son honestas con su propósito inicial en todo lo que hacen, conectan. Las otras, no.</p>
                            </div>
                    </div><div class="col-lg-12 d-none d-lg-block col-lg-12">
                    
                    <div class="height50 projectContainer col-lg-3 col-6 left">
                        <a href="branding-yolo">
                        <div class="projectName">
                            YOLO<br>
                            FULL BRANDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding1-yolo.png">
                        </a>
                    </div>
                    <div class="height30 projectContainer col-6 left">
                        <a href="brandingBantrab">
                        <div class="projectName">
                            BANTRAB<br>
                            BRAND BUILDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding3-bantrab.png">
                        </a>
                    </div>
                    <div class="height30 projectContainer col-lg-3 col-6 left">
                        <a href="brandingCafeBarista">
                        <div class="projectName">
                            CAFE BARISTA<br>
                            FULL BRANDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding6-cafe.png">
                        </a>
                    </div>

                    <div class="height35 projectContainer col-lg-3 col-6 left">
                        <a href="brandingAdrenaline">
                        </a><a href="brandingAdrenaline">
                            <div class="projectName">
                                ADRENALINE RUSH<br>
                                FULL BRANDING<br>
                                PROJECT
                            </div>
                            <img class="project" src="assets/img/portfolio/branding4-adrenaline.png">
                        </a>
                        <div class="centerProject"></div>
                    </div>
                    <div class="height35 projectContainer projectDescription col-lg-3 col-6 left d-none d-lg-block" style="padding: 2vh 2vh 3vh 2.5vh;"> 
                            <div class="title">Branding</div>
                            <div class="intro-text">
                                <p>Investigar y conocer al consumidor, sus emociones y necesidades; y así definir y dar vida a marcas honestas.
                                    Nos gusta conocer muy bien a quienes vamos a motivar con nuestras marcas.
                                    Nos gusta definir marcas que signifiquen algo positivo y relevante para la vida de la gente.
                                    Y darles vida a través de una experiencia única. Darles una voz con identidad. Antes de los medios, por todos los medios y a pesar de los medios.
                                Las marcas que son honestas con su propósito inicial en todo lo que hacen, conectan. Las otras, no.</p>
                            </div>
                    </div>

                    <div class="height35 projectContainer col-lg-3 col-6 left">
                        <a href="brandingPolloGranjero">
                        <div class="projectName right">
                            POLLO GRANJERO<br>
                            FULL BRANDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding7-pollo.png">
                        </a>
                    </div>

                    <div class="height50 projectContainer col-lg-3 col-6 left marTop15">
                        <a href="brandingAMP">
                        <div class="projectName">
                            AMP<br>
                            FULL BRANDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding2-amp.png">
                        </a>
                    </div>
                    <div class="height35 projectContainer col-6 left">
                        <a href="brandingMagiaBlanca">
                        <div class="projectName">
                            MAGIA BLANCA<br>
                            FULL BRANDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding5-magia.png">
                        </a>
                    </div>
                    <div class="height35 projectContainer col-lg-3 col-6 left">
                        <a href="brandingNissan">
                        <div class="projectName">
                            NISSAN<br>
                            BRAND BUILDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding8-nissan.png">
                        </a>
                    </div>
                </div>
            <div class="col-lg-12 d-block d-lg-none col-12">
                    
                    <div class="height50 projectContainer col-lg-3 col-6 left">
                        <a href="branding-yolo">
                        <div class="projectName">
                            YOLO<br>
                            FULL BRANDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding1-yolo2.png">
                        </a>
                    </div>
                    <div class="height35 projectContainer col-lg-3 col-6 left">
                        <a href="brandingAdrenaline">
                        </a><a href="brandingAdrenaline">
                            <div class="projectName">
                                ADRENALINE RUSH<br>
                                FULL BRANDING<br>
                                PROJECT
                            </div>
                            <img class="project" src="assets/img/portfolio/branding4-adrenaline2.png">
                        </a>
                        <div class="centerProject"></div>
                    </div><div class="height50 projectContainer col-lg-3 col-6 left marTop15">
                        <a href="brandingAMP">
                        <div class="projectName">
                            AMP<br>
                            FULL BRANDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding2-amp2.png">
                        </a>
                    </div><div class="height35 projectContainer col-lg-3 col-6 left">
                        <a href="brandingPolloGranjero">
                        <div class="projectName right">
                            POLLO GRANJERO<br>
                            FULL BRANDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding7-pollo2.png">
                        </a>
                    </div><div class="height30 projectContainer col-6 left">
                        <a href="brandingBantrab">
                        <div class="projectName">
                            BANTRAB<br>
                            BRAND BUILDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding3-bantrab2.png">
                        </a>
                    </div>
                    <div class="height35 projectContainer col-6 left">
                        <a href="brandingMagiaBlanca">
                        <div class="projectName">
                            MAGIA BLANCA<br>
                            FULL BRANDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding5-magia2.png">
                        </a>
                    </div><div class="height30 projectContainer col-lg-3 col-6 left">
                        <a href="brandingCafeBarista">
                        <div class="projectName">
                            CAFE BARISTA<br>
                            FULL BRANDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding6-cafe2.png">
                        </a>
                    </div>

                    
                    <div class="height35 projectContainer projectDescription col-lg-3 col-6 left d-none d-lg-block" style="padding: 2vh 2vh 3vh 2.5vh;"> 
                            <div class="title">Branding</div>
                            <div class="intro-text">
                                <p>Investigar y conocer al consumidor, sus emociones y necesidades; y así definir y dar vida a marcas honestas.
                                    Nos gusta conocer muy bien a quienes vamos a motivar con nuestras marcas.
                                    Nos gusta definir marcas que signifiquen algo positivo y relevante para la vida de la gente.
                                    Y darles vida a través de una experiencia única. Darles una voz con identidad. Antes de los medios, por todos los medios y a pesar de los medios.
                                Las marcas que son honestas con su propósito inicial en todo lo que hacen, conectan. Las otras, no.</p>
                            </div>
                    </div>

                    

                    
                    
                    <div class="height35 projectContainer col-lg-3 col-6 left">
                        <a href="brandingNissan">
                        <div class="projectName">
                            NISSAN<br>
                            BRAND BUILDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding8-nissan2.png">
                        </a>
                    </div>
                </div></div>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="ideas" class="ideas section-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="height35 d-block d-lg-none col-12 sectionTitle">
                    <div class="title">Ideas</div>
                    <div class="intro-text">
                        <p>Nos gustan las marcas que se animan a hacer cosas que otras no.<br>
                            Las que generan noticias.<br>
                            Las que usan tecnología y data, pero de una forma que nadie más las usaría.<br>
                            Las que prefieren fallar a repetir la receta que siguen todas las demás.<br>
                            Las que a veces van contra la razón y se dejan llevar por la emoción.<br>
                        Nos gustan las marcas que refrescan su camino de brand building con ideas increíbles e inesperadas.</p>
                    </div>
                </div><div class="d-none d-lg-block col-lg-12">

                
                <div class="height50 projectContainer col-lg-3 col-6 left">
                    <a href="ideasIorra">
                    <div class="projectName">
                        IORRA<br>
                        NUNCA APP
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas1-ahora.png">
                        </a>
                </div>
                <div class="height30 projectContainer col-6 left">
                    <a href="ideasBaristaBeneficio">
                    <div class="projectName">
                        CAFÉ BARISTA<br>
                        EL BENEFICIO
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas3-cafebarista.png">
                        </a>
                </div>
                <div class="height30 projectContainer col-lg-3 col-6 left">
                    <a href="ideasMountain">
                    <div class="projectName">
                        MOUNTAIN DEW<br>
                        GANEMOS LA CALLE
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas6-dew.png">
                        </a>
                </div>
                    <div class="projectContainer projectDescription height35 d-none d-lg-block col-lg-3 col-6 left" style="padding: 2vh 2vh 3vh 2.5vh;">
                        <div class="title">Ideas</div>
                        <div class="intro-text">
                            <p>Nos gustan las marcas que se animan a hacer cosas que otras no.<br>
                                Las que generan noticias.<br>
                                Las que usan tecnología y data, pero de una forma que nadie más las usaría.<br>
                                Las que prefieren fallar a repetir la receta que siguen todas las demás.<br>
                                Las que a veces van contra la razón y se dejan llevar por la emoción.<br>
                            Nos gustan las marcas que refrescan su camino de brand building con ideas increíbles e inesperadas.</p>
                        </div>
                    </div>
                  <div class="height35 projectContainer col-lg-3 col-6 left">
                    <a href="ideasAdrenaline">
                    
                        <div class="projectName">
                            ADRENALINE RUSH<br>
                            DISEÑADAS CON MÜSICA
                        </div>
                        <img class="project" src="assets/img/portfolio/ideas4-adrenaline.png">
                        </a>
                    <div class="centerProject"></div>
                </div>

                <div class="height35 projectContainer col-lg-3 col-6 left">
                    <a href="ideasConversation">
                    <div class="projectName">
                        be<br>
                        a part of<br>
                        the conversation
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas7-conversation.png">
                        </a>
                </div>

                <div class="height50 projectContainer col-lg-3 col-6 left marTop15">
                    <a href="ideasBaristaEnCasa">
                    <div class="projectName">
                        CAFÉ BARISTA<br>
                        EN CASA PROJECT
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas2-cafebarista.png">
                        </a>
                </div>

                <div class="height35 projectContainer col-6 left">
                    <a href="ideasCovidflix">
                    <div class="projectName">
                        COVIDFLIX/<br>
                        mensajes para<br>
                        motivar superviviencia,<br>
                        adaptación y optimismo
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas5-covidflix.png">
                        </a>
                </div>
                <div class="height35 projectContainer col-lg-3 col-6 left">
                    <a href="ideasTapTap">
                    <div class="projectName">
                        tap tap<br>
                        the home supplier
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas8-taptap.png">
                        </a>
                </div>
            </div>

<div class="d-block d-lg-none col-lg-12">

                
                <div class="height50 projectContainer col-lg-3 col-6 left">
                    <a href="ideasIorra">
                    <div class="projectName">
                        IORRA<br>
                        NUNCA APP
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas1-ahora2.png">
                        </a>
                </div>
                <div class="height30 projectContainer col-6 left">
                    <a href="ideasBaristaBeneficio">
                    <div class="projectName">
                        CAFÉ BARISTA<br>
                        EL BENEFICIO
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas3-cafebarista2.png">
                        </a>
                </div>
                <div class="height30 projectContainer col-lg-3 col-6 left">
                    <a href="ideasMountain">
                    <div class="projectName">
                        MOUNTAIN DEW<br>
                        GANEMOS LA CALLE
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas6-dew.png">
                        </a>
                </div>
                    <div class="height35 projectContainer col-lg-3 col-6 left">
                    <a href="ideasTapTap">
                    <div class="projectName">
                        tap tap<br>
                        the home supplier
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas8-taptap2.png">
                        </a>
                </div>
                  <div class="height35 projectContainer col-lg-3 col-6 left">
                    <a href="ideasAdrenaline">
                    
                        <div class="projectName">
                            ADRENALINE RUSH<br>
                            DISEÑADAS CON MÜSICA
                        </div>
                        <img class="project" src="assets/img/portfolio/ideas4-adrenaline.png">
                        </a>
                    <div class="centerProject"></div>
                </div>

                <div class="height35 projectContainer col-lg-3 col-6 left">
                    <a href="ideasConversation">
                    <div class="projectName">
                        be<br>
                        a part of<br>
                        the conversation
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas7-conversation.png">
                        </a>
                </div>

                <div class="height50 projectContainer col-lg-3 col-6 left marTop15">
                    <a href="ideasBaristaEnCasa">
                    <div class="projectName">
                        CAFÉ BARISTA<br>
                        EN CASA PROJECT
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas2-cafebarista2.png">
                        </a>
                </div>

                <div class="height35 projectContainer col-6 left">
                    <a href="ideasCovidflix">
                    <div class="projectName">
                        COVIDFLIX/<br>
                        mensajes para<br>
                        motivar superviviencia,<br>
                        adaptación y optimismo
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas5-covidflix2.png">
                        </a>
                </div>
                
            </div>
        </div>
        </div>
    </section><!-- End Portfolio Section -->


     <!-- ======= Portfolio Section ======= -->
     <section id="entretenimiento" class="entretenimiento section-bg">
    	<div class="container-fluid">
    		<div class="row">
                <div class="col-lg-12">
                    <div class="height35 col-12 left d-block d-lg-none sectionTitle">
                        <div class="title">Entretenimiento</div>
                        <div class="intro-text">
                            <p>Estamos convencidos que la gente odia la publicidad y que el entretenimiento es la forma más relevante en que las marcas pueden conectarse con sus audiencias.
                                Short Video Clips. Branded Music. Juegos. Merchandising. Contenido Cultural. Series Originales.
                            Nos gusta pensar que algún día vamos a convertirnos en Pixar, Universal, Youtube o Netflix, Toys r us, EA Sports o Epic Games... (o por lo menos que vamos a trabajar gran parte de nuestro tiempo para ellos).</p>
                        </div>
                    </div>
                    <div class="height50 projectContainer d-none d-lg-block col-lg-3 col-6 left">
                        <a href="entreEscape">
                        <div class="projectName">
                            ESCAPE<br>
                            EL JUEGO
                        </div>
                        <img class="project" src="assets/img/portfolio/ent1-escape.png">
                    </a>
                    </div>
                    <div class="height30 projectContainer d-none d-lg-block col-6 left">
                        <a href="entreArturo">
                        <div class="projectName">
                            arturo y los frumojis<br>
                            youtube original serie
                        </div>
                        <img class="project" src="assets/img/portfolio/ent3-arturo.png">
                        </a>
                    </div>

                    <div class="height30 d-none d-lg-block projectContainer col-lg-3 col-6 left">
                        <a href="entreManos">
                        <div class="projectName">
                            MAS DE MIL MANOS<br>
                            BRANDED SHORT FILM
                        </div>
                        <img class="project" src="assets/img/portfolio/ent6-manos.png">
                        </a>
                    </div>


                    <div class="height35 projectContainer d-none d-lg-block col-lg-3 col-6 centerProject left">
                        <a href="entreTacTac">
                        <div class="projectName">
                            TAC TAC<br>
                            BRANDED MUSIC VIDEO
                        </div>
                        <img class="project" src="assets/img/portfolio/ent4-tactac.png">
                        </a>
                    </div>
                    <div class="height35 projectContainer projectDescription col-lg-3 col-6 left d-none d-lg-block" style="padding: 2vh 2vh 3vh 2vh">
                        <div class="title">Entretenimiento</div>
                        <div class="intro-text">
                            <p>Estamos convencidos que la gente odia la publicidad y que el entretenimiento es la forma más relevante en que las marcas pueden conectarse con sus audiencias.
                                Short Video Clips. Branded Music. Juegos. Merchandising. Contenido Cultural. Series Originales.
                            Nos gusta pensar que algún día vamos a convertirnos en Pixar, Universal, Youtube o Netflix, Toys r us, EA Sports o Epic Games... (o por lo menos que vamos a trabajar gran parte de nuestro tiempo para ellos).</p>
                        </div>
                    </div>


                    <div class="height35 projectContainer d-none d-lg-block col-lg-3 col-6 left">
                        <a href="entreStickers">
                        <div class="projectName">
                            STICKERS EMBARAZOSOS<br>
                            BY NATELE
                        </div>
                        <img class="project" src="assets/img/portfolio/ent7-stickers.png">
                        </a>
                    </div>
                    <div class="height50 projectContainer d-none d-lg-block marTop15 col-lg-3 col-6 left">
                        <a href="entreNicky">
                        <div class="projectName">
                            NICKY JAM<br>
                            BRANDED MUSIC VIDEO
                        </div>
                        <img class="project" src="assets/img/portfolio/ent2-nicky.png">
                        </a>
                    </div>

                    <div class="height35 projectContainer d-none d-lg-block col-lg-3 col-6 left">
                        <a href="entreDespedida">
                        <div class="projectName">
                            LA DESPEDIDA<br>
                            BRANDED SHORT FILM
                        </div>
                        <img class="project" src="assets/img/portfolio/ent5-despedida.png">
                        </a>
                    </div>
                    <div class="height35 projectContainer d-none d-lg-block col-6 left">
                        <a href="entreChiripa">
                        <div class="projectName">
                            LA CHIRIPA F.C.<br>
                            YOUTUBE ORIGINAL SERIE
                        </div>
                        <img class="project" src="assets/img/portfolio/ent8-chiripa.png">
                        </a>
                    </div>
                </div>

<div class="height30 projectContainer d-block d-lg-none col-6 left">
                        <a href="entreArturo">
                        <div class="projectName">
                            arturo y los frumojis<br>
                            youtube original serie
                        </div>
                        <img class="project" src="assets/img/portfolio/ent3-arturo2.png">
                        </a>
                    </div><div class="height50 projectContainer d-block d-lg-none marTop15 col-lg-3 col-6 left">
                        <a href="entreNicky">
                        <div class="projectName">
                            NICKY JAM<br>
                            BRANDED MUSIC VIDEO
                        </div>
                        <img class="project" src="assets/img/portfolio/ent2-nicky2.png">
                        </a>
                    </div><div class="height50 projectContainer d-block d-lg-none col-lg-3 col-6 left">
                        <a href="entreEscape">
                        <div class="projectName">
                            ESCAPE<br>
                            EL JUEGO
                        </div>
                        <img class="project" src="assets/img/portfolio/ent1-escape2.png">
                    </a>
                    </div><div class="height35 projectContainer d-block d-lg-none col-6 left">
                        <a href="entreChiripa">
                        <div class="projectName">
                            LA CHIRIPA F.C.<br>
                            YOUTUBE ORIGINAL SERIE
                        </div>
                        <img class="project" src="assets/img/portfolio/ent8-chiripa2.png">
                        </a>
                    </div>
                    

                    <div class="height35 projectContainer d-block d-lg-none col-lg-3 col-6 left">
                        <a href="entreStickers">
                        <div class="projectName">
                            STICKERS EMBARAZOSOS<br>
                            BY NATELE
                        </div>
                        <img class="project" src="assets/img/portfolio/ent7-stickers2.png">
                        </a>
                    </div><div class="height35 projectContainer d-block d-lg-none col-lg-3 col-6 left">
                        <a href="entreDespedida">
                        <div class="projectName">
                            LA DESPEDIDA<br>
                            BRANDED SHORT FILM
                        </div>
                        <img class="project" src="assets/img/portfolio/ent5-despedida2.png">
                        </a>
                    </div><div class="height30 projectContainer d-block d-lg-none col-lg-3 col-6 left">
                        <a href="entreManos">
                        <div class="projectName">
                            MAS DE MIL MANOS<br>
                            BRANDED SHORT FILM
                        </div>
                        <img class="project" src="assets/img/portfolio/ent6-manos2.png">
                        </a>
                    </div>


                    <div class="height35 projectContainer d-block d-lg-none col-lg-3 col-6 centerProject left">
                        <a href="entreTacTac">
                        <div class="projectName">
                            TAC TAC<br>
                            BRANDED MUSIC VIDEO
                        </div>
                        <img class="project" src="assets/img/portfolio/ent4-tactac2.png">
                        </a>
                    </div>
                
            </div>
        </div>
    </section><!-- End Portfolio Section -->

