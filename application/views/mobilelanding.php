 <!-- ======= Landing Section ======= -->
 <section id="landing" class="landing section-bg">
   <div class="container-fluid">
    <div class="topBox row">
     <div class="logo col-md-8 col-12"></div>
     <div class="col-md-4 col-12 right padder">
      <div onclick="this.nextElementSibling.style.display='block'; this.style.display='none'" style="overflow : hidden">
       <img src="assets/img/home-reel.jpg" style="cursor:pointer" class="thumbnail"/>
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
#weareRocknrolla
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
    echo '<div class="col-md-4 col-12 reel">
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
                <div class="height35 col-12 d-block d-md-none sectionTitle"> 
                            <div class="title">Branding</div>
                            <div class="intro-text">
                                <p>Investigar y conocer al consumidor, sus emociones y necesidades; y así definir y dar vida a marcas honestas.
                                    Nos gusta conocer muy bien a quienes vamos a motivar con nuestras marcas.
                                    Nos gusta definir marcas que signifiquen algo positivo y relevante para la vida de la gente.
                                    Y darles vida a través de una experiencia única. Darles una voz con identidad. Antes de los medios, por todos los medios y a pesar de los medios.
                                Las marcas que son honestas con su propósito inicial en todo lo que hacen, conectan. Las otras, no.</p>
                            </div>
                    </div><div class="col-xs-12 d-none d-md-block col-md-12">
                    
                    <div class="height50 projectContainer col-md-3 col-6 left">
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
                    <div class="height30 projectContainer col-md-3 col-6 left">
                        <a href="brandingCafeBarista">
                        <div class="projectName">
                            CAFE BARISTA<br>
                            FULL BRANDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding6-cafe.png">
                        </a>
                    </div>

                    <div class="height35 projectContainer col-md-3 col-6 left">
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
                    <div class="height35 projectContainer projectDescription col-md-3 col-6 left d-none d-md-block" style="padding: 2vh 5vh 5vh 5vh;"> 
                            <div class="title">Branding</div>
                            <div class="intro-text">
                                <p>Investigar y conocer al consumidor, sus emociones y necesidades; y así definir y dar vida a marcas honestas.
                                    Nos gusta conocer muy bien a quienes vamos a motivar con nuestras marcas.
                                    Nos gusta definir marcas que signifiquen algo positivo y relevante para la vida de la gente.
                                    Y darles vida a través de una experiencia única. Darles una voz con identidad. Antes de los medios, por todos los medios y a pesar de los medios.
                                Las marcas que son honestas con su propósito inicial en todo lo que hacen, conectan. Las otras, no.</p>
                            </div>
                    </div>

                    <div class="height35 projectContainer col-md-3 col-6 left">
                        <a href="brandingPolloGranjero">
                        <div class="projectName right">
                            POLLO GRANJERO<br>
                            FULL BRANDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding7-pollo.png">
                        </a>
                    </div>

                    <div class="height50 projectContainer col-md-3 col-6 left marTop15">
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
                    <div class="height35 projectContainer col-md-3 col-6 left">
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
            <div class="col-xs-12 d-block d-md-none col-12">
                    
                    <div class="height50 projectContainer col-md-3 col-6 left">
                        <a href="branding-yolo">
                        <div class="projectName">
                            YOLO<br>
                            FULL BRANDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding1-yolo2.png">
                        </a>
                    </div>
                    <div class="height35 projectContainer col-md-3 col-6 left">
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
                    </div><div class="height50 projectContainer col-md-3 col-6 left marTop15">
                        <a href="brandingAMP">
                        <div class="projectName">
                            AMP<br>
                            FULL BRANDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding2-amp2.png">
                        </a>
                    </div><div class="height35 projectContainer col-md-3 col-6 left">
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
                    </div><div class="height30 projectContainer col-md-3 col-6 left">
                        <a href="brandingCafeBarista">
                        <div class="projectName">
                            CAFE BARISTA<br>
                            FULL BRANDING<br>
                            PROJECT
                        </div>
                        <img class="project" src="assets/img/portfolio/branding6-cafe2.png">
                        </a>
                    </div>

                    
                    <div class="height35 projectContainer projectDescription col-md-3 col-6 left d-none d-md-block" style="padding: 2vh 5vh 5vh 5vh;"> 
                            <div class="title">Branding</div>
                            <div class="intro-text">
                                <p>Investigar y conocer al consumidor, sus emociones y necesidades; y así definir y dar vida a marcas honestas.
                                    Nos gusta conocer muy bien a quienes vamos a motivar con nuestras marcas.
                                    Nos gusta definir marcas que signifiquen algo positivo y relevante para la vida de la gente.
                                    Y darles vida a través de una experiencia única. Darles una voz con identidad. Antes de los medios, por todos los medios y a pesar de los medios.
                                Las marcas que son honestas con su propósito inicial en todo lo que hacen, conectan. Las otras, no.</p>
                            </div>
                    </div>

                    

                    
                    
                    <div class="height35 projectContainer col-md-3 col-6 left">
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
                <div class="height35 d-block d-md-none col-12 sectionTitle">
                    <div class="title">Ideas</div>
                    <div class="intro-text">
                        <p>Nos gustan las marcas que se animan a hacer cosas que otras no.<br>
                            Las que generan noticias.<br>
                            Las que usan tecnología y data, pero de una forma que nadie más las usaría.<br>
                            Las que prefieren fallar a repetir la receta que siguen todas las demás.<br>
                            Las que a veces van contra la razón y se dejan llevar por la emoción.<br>
                        Nos gustan las marcas que refrescan su camino de brand building con ideas increíbles e inesperadas.</p>
                    </div>
                </div><div class="d-none d-md-block col-md-12">

                
                <div class="height50 projectContainer col-md-3 col-6 left">
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
                <div class="height30 projectContainer col-md-3 col-6 left">
                    <a href="ideasMountain">
                    <div class="projectName">
                        MOUNTAIN DEW<br>
                        GANEMOS LA CALLE
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas6-dew.png">
                        </a>
                </div>
                    <div class="projectContainer projectDescription height35 d-none d-md-block col-md-3 col-6 left" style="padding: 2vh 5vh 5vh 5vh;">
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
                  <div class="height35 projectContainer col-md-3 col-6 left">
                    <a href="ideasAdrenaline">
                    
                        <div class="projectName">
                            ADRENALINE RUSH<br>
                            DISEÑADAS CON MÜSICA
                        </div>
                        <img class="project" src="assets/img/portfolio/ideas4-adrenaline.png">
                        </a>
                    <div class="centerProject"></div>
                </div>

                <div class="height35 projectContainer col-md-3 col-6 left">
                    <a href="ideasConversation">
                    <div class="projectName">
                        be<br>
                        a part of<br>
                        the conversation
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas7-conversation.png">
                        </a>
                </div>

                <div class="height50 projectContainer col-md-3 col-6 left marTop15">
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
                <div class="height35 projectContainer col-md-3 col-6 left">
                    <a href="ideasTapTap">
                    <div class="projectName">
                        tap tap<br>
                        the home supplier
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas8-taptap.png">
                        </a>
                </div>
            </div>

<div class="d-block d-md-none col-xs-12">

                
                <div class="height50 projectContainer col-md-3 col-6 left">
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
                <div class="height30 projectContainer col-md-3 col-6 left">
                    <a href="ideasMountain">
                    <div class="projectName">
                        MOUNTAIN DEW<br>
                        GANEMOS LA CALLE
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas6-dew.png">
                        </a>
                </div>
                    <div class="height35 projectContainer col-md-3 col-6 left">
                    <a href="ideasTapTap">
                    <div class="projectName">
                        tap tap<br>
                        the home supplier
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas8-taptap2.png">
                        </a>
                </div>
                  <div class="height35 projectContainer col-md-3 col-6 left">
                    <a href="ideasAdrenaline">
                    
                        <div class="projectName">
                            ADRENALINE RUSH<br>
                            DISEÑADAS CON MÜSICA
                        </div>
                        <img class="project" src="assets/img/portfolio/ideas4-adrenaline.png">
                        </a>
                    <div class="centerProject"></div>
                </div>

                <div class="height35 projectContainer col-md-3 col-6 left">
                    <a href="ideasConversation">
                    <div class="projectName">
                        be<br>
                        a part of<br>
                        the conversation
                    </div>
                    <img class="project" src="assets/img/portfolio/ideas7-conversation.png">
                        </a>
                </div>

                <div class="height50 projectContainer col-md-3 col-6 left marTop15">
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
                <div class="col-xs-12">
                    <div class="height35 col-12 left d-block d-md-none sectionTitle">
                        <div class="title">Entretenimiento</div>
                        <div class="intro-text">
                            <p>Estamos convencidos que la gente odia la publicidad y que el entretenimiento es la forma más relevante en que las marcas pueden conectarse con sus audiencias.
                                Short Video Clips. Branded Music. Juegos. Merchandising. Contenido Cultural. Series Originales.
                            Nos gusta pensar que algún día vamos a convertirnos en Pixar, Universal, Youtube o Netflix, Toys r us, EA Sports o Epic Games... (o por lo menos que vamos a trabajar gran parte de nuestro tiempo para ellos).</p>
                        </div>
                    </div>
                    <div class="height50 projectContainer d-none d-md-block col-md-3 col-6 left">
                        <a href="entreEscape">
                        <div class="projectName">
                            ESCAPE<br>
                            EL JUEGO
                        </div>
                        <img class="project" src="assets/img/portfolio/ent1-escape.png">
                    </a>
                    </div>
                    <div class="height30 projectContainer d-none d-md-block col-6 left">
                        <a href="entreArturo">
                        <div class="projectName">
                            arturo y los frumojis<br>
                            youtube original serie
                        </div>
                        <img class="project" src="assets/img/portfolio/ent3-arturo.png">
                        </a>
                    </div>

                    <div class="height30 d-none d-md-block projectContainer col-md-3 col-6 left">
                        <a href="entreManos">
                        <div class="projectName">
                            MAS DE MIL MANOS<br>
                            BRANDED SHORT FILM
                        </div>
                        <img class="project" src="assets/img/portfolio/ent6-manos.png">
                        </a>
                    </div>


                    <div class="height35 projectContainer d-none d-md-block col-md-3 col-6 centerProject left">
                        <a href="entreTacTac">
                        <div class="projectName">
                            TAC TAC<br>
                            BRANDED MUSIC VIDEO
                        </div>
                        <img class="project" src="assets/img/portfolio/ent4-tactac.png">
                        </a>
                    </div>
                    <div class="height35 projectContainer projectDescription col-md-3 col-6 left d-none d-md-block" style="padding: 2vh 5vh 5vh 5vh">
                        <div class="title">Entretenimiento</div>
                        <div class="intro-text">
                            <p>Estamos convencidos que la gente odia la publicidad y que el entretenimiento es la forma más relevante en que las marcas pueden conectarse con sus audiencias.
                                Short Video Clips. Branded Music. Juegos. Merchandising. Contenido Cultural. Series Originales.
                            Nos gusta pensar que algún día vamos a convertirnos en Pixar, Universal, Youtube o Netflix, Toys r us, EA Sports o Epic Games... (o por lo menos que vamos a trabajar gran parte de nuestro tiempo para ellos).</p>
                        </div>
                    </div>


                    <div class="height35 projectContainer d-none d-md-block col-md-3 col-6 left">
                        <a href="entreStickers">
                        <div class="projectName">
                            STICKERS EMBARAZOSOS<br>
                            BY NATELE
                        </div>
                        <img class="project" src="assets/img/portfolio/ent7-stickers.png">
                        </a>
                    </div>
                    <div class="height50 projectContainer d-none d-md-block marTop15 col-md-3 col-6 left">
                        <a href="entreNicky">
                        <div class="projectName">
                            NICKY JAM<br>
                            BRANDED MUSIC VIDEO
                        </div>
                        <img class="project" src="assets/img/portfolio/ent2-nicky.png">
                        </a>
                    </div>

                    <div class="height35 projectContainer d-none d-md-block col-md-3 col-6 left">
                        <a href="entreDespedida">
                        <div class="projectName">
                            LA DESPEDIDA<br>
                            BRANDED SHORT FILM
                        </div>
                        <img class="project" src="assets/img/portfolio/ent5-despedida.png">
                        </a>
                    </div>
                    <div class="height35 projectContainer d-none d-md-block col-6 left">
                        <a href="entreChiripa">
                        <div class="projectName">
                            LA CHIRIPA F.C.<br>
                            YOUTUBE ORIGINAL SERIE
                        </div>
                        <img class="project" src="assets/img/portfolio/ent8-chiripa.png">
                        </a>
                    </div>
                </div>

<div class="height30 projectContainer d-block d-md-none col-6 left">
                        <a href="entreArturo">
                        <div class="projectName">
                            arturo y los frumojis<br>
                            youtube original serie
                        </div>
                        <img class="project" src="assets/img/portfolio/ent3-arturo2.png">
                        </a>
                    </div><div class="height50 projectContainer d-block d-md-none marTop15 col-md-3 col-6 left">
                        <a href="entreNicky">
                        <div class="projectName">
                            NICKY JAM<br>
                            BRANDED MUSIC VIDEO
                        </div>
                        <img class="project" src="assets/img/portfolio/ent2-nicky2.png">
                        </a>
                    </div><div class="height50 projectContainer d-block d-md-none col-md-3 col-6 left">
                        <a href="entreEscape">
                        <div class="projectName">
                            ESCAPE<br>
                            EL JUEGO
                        </div>
                        <img class="project" src="assets/img/portfolio/ent1-escape2.png">
                    </a>
                    </div><div class="height35 projectContainer d-block d-md-none col-6 left">
                        <a href="entreChiripa">
                        <div class="projectName">
                            LA CHIRIPA F.C.<br>
                            YOUTUBE ORIGINAL SERIE
                        </div>
                        <img class="project" src="assets/img/portfolio/ent8-chiripa2.png">
                        </a>
                    </div>
                    

                    <div class="height35 projectContainer col-md-3 col-6 left">
                        <a href="entreStickers">
                        <div class="projectName">
                            STICKERS EMBARAZOSOS<br>
                            BY NATELE
                        </div>
                        <img class="project" src="assets/img/portfolio/ent7-stickers2.png">
                        </a>
                    </div><div class="height35 projectContainer d-block d-md-none col-md-3 col-6 left">
                        <a href="entreDespedida">
                        <div class="projectName">
                            LA DESPEDIDA<br>
                            BRANDED SHORT FILM
                        </div>
                        <img class="project" src="assets/img/portfolio/ent5-despedida2.png">
                        </a>
                    </div><div class="height30 projectContainer d-block d-md-none col-md-3 col-6 left">
                        <a href="entreManos">
                        <div class="projectName">
                            MAS DE MIL MANOS<br>
                            BRANDED SHORT FILM
                        </div>
                        <img class="project" src="assets/img/portfolio/ent6-manos2.png">
                        </a>
                    </div>


                    <div class="height35 projectContainer d-block d-md-none col-md-3 col-6 centerProject left">
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
</section><!-- End Blog Section -->

<!-- ======= Portfolio Section ======= -->
<section id="guatemala" class="guatemala section-bg">
    <div class="container d-none d-md-block">
        <div class="row">
            <div class="col-12 col-md-4 partner left">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/rnrteam/rnrteam1.png);">
                    <div class="bio">
                    <div class="title">Fede<br>
                    ahunchain</div>
                    <div class="intro-text" style="height:20vh;">
                        <p>Director at ROCKNROLLA. Trabajó para marcas como Peugeot, Volkswagen y Nissan; Pepsi, Adrenaline Rush, AMP 365, Petit, Salutaris y Grapette; Axe, Magia Blanca y Henkel. Banco G&amp;T Continental y BANTRAB; entre muchas otras marcas y categorías en sus más de 20 años de carrera. Director General y guionista de las exitosas y multipremiadas series animadas de youtube Arturo y Los Frumojis y La Chiripa F.C. <br>
                        CCO Global de RR GROUP.</p>
                    </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 partner left">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/rnrteam/rnrteam2.png);">
                    <div class="bio">
                    <div class="title">Diego<br> Castillo</div>
                    <div class="intro-text" style="height:20vh;">
                        <p>Director at ROCKNROLLA. 
                        Trabajó para marcas como  AMP365, Banco G&amp;T Continental, Seguros G&amp;T, Café Barista, Bayer, Salutaris, Grapette, Yamaha, Pollo Campero, Pollo Granjero, Tortrix, Nissan y Magia Blanca entre muchas otras en sus más de 10 años de carrera.</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-4 partner left">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/rnrteam/rnrteam3.png);">
                    <div class="bio">
                    <div class="title">Santi <br>Dobrich</div>
                    <div class="intro-text" style="height:20vh;">
                        <p>Director at RocknRolla
                        Trabajó para marcas como Nestlé, CocaCola, Shell, Volkswagen, Banco G&amp;T, PepsiCo, Pollo Campero, Beiersdorf, Johnson&amp;Johnson, Bantrab, entre muchas otras marcas y categorías, en sus más de 15 años de carrera. Director Integral, copywriter, fanático de las ideas diferentes, consciente de la responsabilidad social de los comunicadores.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:30px;">
            <div class="col-12 col-md-4 partner left">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/rnrteam/rnrteam5.png);">
                    <div class="bio">
                    <div class="title">Gato <br>Ortiz Molina</div>
                    <div class="intro-text" style="height:20vh;">
                        <p>Director de diseño ROCKNROLLA. 
                            Trabajó para marcas como  Volkswagen, Claro, Goodyear, Cementos Progreso, PepsiCo, Bayer, Zurich Seguros, Cerveza Paeña, Café Barista, Fundación Ayuvi, Adrenaline Rush
                        a lo largo de 15 años de trayectoria.</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-4 partner">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/rnrteam/rnrteam4.png);">
                    <div class="bio">
                    <div class="title">Leo <br>Cornejo</div>
                    <div class="intro-text" style="height:20vh;">
                        <p>DDirector audiovisual at ROCKNROLLA. 
                        Trabajó para marcas como Cerveza Brahva, Grapette, Pepsi, AMP 365, Tortrix, Lays, Pollo campero, Toledo, Wendy’s, P&amp;G, Volkswagen, Nissan, Banco G&amp;T, Bantrab, Adrenaline Rush, Lipton, Aqua, Salutaris, Café Barista, Bayer, Magia blanca y Néctares Petit entre muchas otras en sus más de 25 años de carrera. </p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-4 partner">
                <div class="heightauto projectContainer centerProject left">

                    <div class="title">Rockandrolla Guatemala City</div>
                    <div class="intro-text">
                        <p>hola@wearerocknrolla.com<br>
                            +502 2261.8932<br> 
                            Diagonal 6 12-42, Zona 10.<br>
                            Edificio Design Center<br>
                            Torre 2, Oficina 1003<br>
                        Guatemala, Centro América</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

<div class="container-fluid d-block d-md-none">
        <div class="col-12 p-0" style="margin-top:20vh;">
    <div class="col-12 p-0" style="margin-bottom:5vh;">
    <div class="col-12 p-0" style="font-size:3vw!important;">
        <div class="col-4 left title border" style="background:white;height:11vw">
    <a href="guatemala"><span style="color:black!important;">Guatemala <br>city</span></a>
    </div>
<div class="col-4 left title p-0" style="background:black;padding-left:1vw!important;">
    <div class="col-12 border" style="height:11vw;">
    <a href="barcelona" stye="color:white;"> <span>Barcelona</span></a>
    </div>
    </div>
<div class="col-4 left title p-0 " style="background:black;padding-left:1vw!important;">
    <div class=" col-12 border" style="height:11vw;">
    <a href="panama"><span>Panama <br>city</span></a>
    </div></div>

    </div>
    </div>
    
            <div class="col-12 col-md-4 partner left" style="padding: 5vh 5vh 5vh 5vh;">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/rnrteam/rnrteam1.png);">
                    <div class="bio">
                    <div class="title" style="font-size:2vh;">Fede<br>
                    ahunchain</div>
                    <div class="intro-text" style="height:38vw;font-size:2vh;">
                        <p>Director at ROCKNROLLA. Trabajó para marcas como Peugeot, Volkswagen y Nissan; Pepsi, Adrenaline Rush, AMP 365, Petit, Salutaris y Grapette; Axe, Magia Blanca y Henkel. Banco G&amp;T Continental y BANTRAB; entre muchas otras marcas y categorías en sus más de 20 años de carrera. Director General y guionista de las exitosas y multipremiadas series animadas de youtube Arturo y Los Frumojis y La Chiripa F.C.
                        <br>CCO Global de RR GROUP.</p>
                    </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 partner left" style="padding: 0vh 5vh 5vh 5vh;">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/rnrteam/rnrteam2.png);">
                    <div class="bio">
                    <div class="title" style="font-size:2vh;">Diego <br>Castillo</div>
                    <div class="intro-text" style="height:38vw;font-size:2vh;">
                        <p>Director at ROCKNROLLA. 
                        Trabajó para marcas como  AMP365, Banco G&amp;T Continental, Seguros G&amp;T, Café Barista, Bayer, Salutaris, Grapette, Yamaha, Pollo Campero, Pollo Granjero, Tortrix, Nissan y Magia Blanca entre muchas otras en sus más de 10 años de carrera.</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-4 partner left" style="padding: 0vh 5vh 5vh 5vh;">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/rnrteam/rnrteam3.png);">
                    <div class="bio">
                    <div class="title" style="font-size:2vh;">Santi <br>Dobrich</div>
                    <div class="intro-text" style="height:38vw;font-size:2vh;">
                        <p>Director at RocknRolla
                        Trabajó para marcas como Nestlé, CocaCola, Shell, Volkswagen, Banco G&amp;T, PepsiCo, Pollo Campero, Beiersdorf, Johnson&amp;Johnson, Bantrab, entre muchas otras marcas y categorías, en sus más de 15 años de carrera. Director Integral, copywriter, fanático de las ideas diferentes, consciente de la responsabilidad social de los comunicadores.</p>
                    </div>
                </div>
                </div>
            </div>
        
        
            <div class="col-12 col-md-4 partner left" style="padding: 0vh 5vh 5vh 5vh;">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/rnrteam/rnrteam5.png);">
                    <div class="bio">
                    <div class="title" style="font-size:2vh;">Gato <br>Ortiz Molina</div>
                    <div class="intro-text" style="height:38vw;font-size:2vh;">
                        <p>Director de diseño ROCKNROLLA. 
                            Trabajó para marcas como  Volkswagen, Claro, Goodyear, Cementos Progreso, PepsiCo, Bayer, Zurich Seguros, Cerveza Paeña, Café Barista, Fundación Ayuvi, Adrenaline Rush
                        a lo largo de 15 años de trayectoria.</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-4 partner left" style="padding: 0vh 5vh 5vh 5vh;">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/rnrteam/rnrteam4.png);">
                    <div class="bio">
                    <div class="title" style="font-size:2vh;">Leo <br>Cornejo</div>
                    <div class="intro-text" style="height:38vw;font-size:2vh;">
                        <p>DDirector audiovisual at ROCKNROLLA.<br> 
                        Trabajó para marcas como Cerveza Brahva, Grapette, Pepsi, AMP 365, Tortrix, Lays, Pollo campero, Toledo, Wendy’s, P&amp;G, Volkswagen, Nissan, Banco G&amp;T, Bantrab, Adrenaline Rush, Lipton, Aqua, Salutaris, Café Barista, Bayer, Magia blanca y Néctares Petit entre muchas otras en sus más de 25 años de carrera. </p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-4 partner left" style="padding: 0vh 5vh 5vh 5vh;">
                <div class="heightauto projectContainer centerProject left">

                    <div class="title">Rockandrolla <br>Guatemala City</div>
                    <div class="intro-text" style="height:38vw;font-size:2vh;">
                        <p>hola@wearerocknrolla.com<br>
                            +502 2261.8932 <br>
                            Diagonal 6 12-42, Zona 10.<br>
                            Edificio Design Center<br>
                            Torre 2, Oficina 1003<br>
                        Guatemala, Centro América</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Section -->


<!-- ======= Portfolio Section ======= -->
<section id="guatemala" class="guatemala section-bg">
    <div class="container d-none d-md-block">
        <div class="row">
            <div class="col-12 col-md-4 partner left">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/barcelona_sup_izq.JPG);">
                    
                </div>
            </div>
            <div class="col-12 col-md-4 partner left">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/barcelona_sup_med.JPG);">
                    
                </div>
            </div>
            <div class="col-12 col-md-4 partner left">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/barcelona_sup_der.JPG);">
                    
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:30px;">
            <div class="col-12 col-md-4 partner left">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/barcelona_inf_izq.JPG);">
                    
                </div>
            </div>
            <div class="col-12 col-md-4 partner">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/barcelona_inf_med.JPG);">
                    
                </div>
            </div>
            <div class="col-12 col-md-4 partner">
                <div class="heightauto projectContainer centerProject left">

                    <div class="title">Rockandrolla <br>Panama City</div>
                    <div class="intro-text">
                        <p>bcn@wearerocknrolla.com<br>
                   
                    </div>

                </div>
            </div>
        </div>
    </div>

<div class="container-fluid d-block d-md-none">
        <div class="col-12 p-0" style="margin-top:20vh;">
    <div class="col-12 p-0" style="margin-bottom:5vh;">
    <div class="col-12 p-0" style="font-size:3vw!important;">
        <div class="col-4 left title border" style="height:11vw">
    <a href="guatemala"><span>Guatemala <br>city</span></a>
    </div>
<div class="col-4 left title p-0" style="background:black;padding-left:1vw!important;">
    <div class="col-12 border" style="height:11vw;background:white;">
    <a href="barcelona" style="color:black!important;"> <span style="color:black!important;">Barcelona</span></a>
    </div>
    </div>
<div class="col-4 left title p-0 " style="background:black;padding-left:1vw!important;">
    <div class="col-12 border" style="height:11vw;background:black;">
    <a href="panama" style="color:black!important;"> <span style="color:white!important;">Panama<br>City</span></a>
    </div>
    </div>
    
            <div class="col-12 col-md-4 partner left" style="padding: 5vh 5vh 5vh 5vh;">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/barcelonasup.png);">
                    
                </div>
            </div>
       
            <div class="col-12 col-md-4 partner left" style="padding: 0vh 5vh 5vh 5vh;">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/barcelonainf.png);">
                    
                </div>
            </div>
            
            <div class="col-12 col-md-4 partner left" style="padding: 0vh 5vh 5vh 5vh;">
                <div class="heightauto projectContainer centerProject left">

                    <div class="title">Rockandrolla <br>Barcelona</div>
                    <div class="intro-text">
                       <p>bcn@wearerocknrolla.com<br>
                    <br>
                    <br>
                    <br>
                    <br>
                    </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div></div></section>
<!-- End Portfolio Section -->

<!-- ======= Portfolio Section ======= -->
<section id="guatemala" class="guatemala section-bg">
    <div class="container d-none d-md-block">
        <div class="row">
            <div class="col-12 col-md-4 partner left">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/panama_sup_izq.JPG);">
                    
                </div>
            </div>
            <div class="col-12 col-md-4 partner left">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/panama_sup_der.JPG);">
                    
                </div>
            </div>
            <div class="col-12 col-md-4 partner left">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/german.JPG);">
                    <div class="bio">
                    <div class="title">German <br>White</div>
                    <div class="intro-text" style="height:20vh;">
                        <p>Argentino radicado en Panamá desde el 2010. Trabajó en agencias como BBDO, Leo Burnet, Publicis, DDB, entre otras en Argentina, Venezuela y Panamá. Ha colaborado con marcas como Movistar, Nestlé, HSBC, Kia, Chevrolet, Johnnie Walker, Coca-Cola, Master Card, Pepsi, Digicel, entre otras. Creativo y director de arte multipremiado en los festivales más relevantes del mundo.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:30px;">
            <div class="col-12 col-md-4 partner left">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/panama_inf_izq.JPG);">
                    
                </div>
            </div>
            <div class="col-12 col-md-4 partner">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/panama_inf_der.JPG);">
                    
                </div>
            </div>
            <div class="col-12 col-md-4 partner">
                <div class="heightauto projectContainer centerProject left">

                    <div class="title">Rockandrolla <br>Panama City</div>
                    <div class="intro-text">
                        <p>pty@wearerocknrolla.com<br>
                    +507 6400.0466 <br>
                    PH Courtyard View 7A.<br>
                    Punta Pacífica. Calle 73 A este.<br>
                    Ciudad de Panamá,<br>
                    Centro América</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

<div class="container-fluid d-block d-md-none">
        <div class="col-12 p-0" style="margin-top:20vh;">
    <div class="col-12 p-0" style="margin-bottom:5vh;">
    <div class="col-12 p-0" style="font-size:3vw!important;">
        <div class="col-4 left title border" style="height:11vw">
    <a href="guatemala"><span>Guatemala <br>city</span></a>
    </div>
<div class="col-4 left title p-0" style="background:black;padding-left:1vw!important;">
    <div class="col-12 border" style="height:11vw;background:black;">
    <a href="barcelona" style="color:black!important;"> <span style="color:white!important;">Barcelona</span></a>
    </div>
    </div>
<div class="col-4 left title p-0 " style="background:black;padding-left:1vw!important;">
    <div class="col-12 border" style="height:11vw;background:white;">
    <a href="panama" style="color:black!important;"> <span style="color:black!important;">Panama<br>City</span></a>
    </div>
    </div>
    
            <div class="col-12 col-md-4 partner left" style="padding: 5vh 5vh 5vh 5vh;">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/panamacity.png);">
                    
                </div>
            </div>
            <div class="col-12 col-md-4 partner left" style="padding: 0vh 5vh 5vh 5vh;">
                <div class="heightauto projectContainer centerProject left" style="background-image: url(assets/img/german.JPG);">
                    <div class="bio">
                    <div class="title">German <br>White</div>
                    <div class="intro-text" style="height:20vh;">
                        <p>Argentino radicado en Panamá desde el 2010. Trabajó en agencias como BBDO, Leo Burnet, Publicis, DDB, entre otras en Argentina, Venezuela y Panamá. Ha colaborado con marcas como Movistar, Nestlé, HSBC, Kia, Chevrolet, Johnnie Walker, Coca-Cola, Master Card, Pepsi, Digicel, entre otras. Creativo y director de arte multipremiado en los festivales más relevantes del mundo.</p>
                    </div>
                </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4 partner left" style="padding: 0vh 5vh 5vh 5vh;">
                <div class="heightauto projectContainer centerProject left">

                    <div class="title">Rockandrolla <br>Panama City</div>
                    <div class="intro-text">
                       <p>pty@wearerocknrolla.com<br>
                    +507 6400.0466 <br>
                    PH Courtyard View 7A.<br>
                    Punta Pacífica. Calle 73 A este.<br>
                    Ciudad de Panamá,<br>
                    Centro América</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div></div></section>
<!-- End Portfolio Section -->