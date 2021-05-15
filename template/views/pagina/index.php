<?php
$title = "Inicio - Aventurate y vive tours";
require_once MODULOS_PAGE . 'header_section.php'
?>

<body>
    <!-- section menu contact -->
    <?php require_once MODULOS_PAGE . 'nav_contact.php' ?>
    <!-- section menu main -->
    <?php
    $page_main = true;
    require_once MODULOS_PAGE . 'nav_menu_main.php'
    ?>
    <!-- Section background hero -->
    <section class="background_hero">
        <video src="<?php echo IMAGES . 'web/'; ?>Pexels_Videos_2169880.mp4" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="text">
            <h1>Vive la experiencia</h1>
            <p>Pase el dia explorando los impresionates paisajes del Ecuador como nunca antes lo ha hecho</p>
        </div>
        <div class="estadistic">
            <span class="estadistic_text">18 <strong>tours</strong></span>
            <span class="estadistic_text">36 <strong>lugares</strong></span>
            <span class="estadistic_text">234 <strong>viajeros</strong></span>
            <span class="estadistic_text">123 <strong>opiniones</strong></span>
        </div>
    </section>
    <!-- section about -->
    <section class="about_me container">
        <article class="about_me_contenedor">
            <h2 class="subtitle">Quienes <strong>Somos</strong></h2>
            <p class="about_me_description">
                Somos una agencia de turismo dedicada a brindar un servicio de calidad de turismo por este bello Paìs
                <br><br>
                Descubra las maravillas naturales, la cultura y los destinos vibrantes de Argentina en una visita guiada
                con los especialistas en viajes más experimentados.
            </p>
        </article>
        <div class="about_me_image">
            <img class="perfil" src="<?php echo IMAGES . 'web/'; ?>perfil.png" alt="grupo aventurate y vive tours">
            <img class="rectangulo" src="<?php echo IMAGES . 'web/'; ?>Rectangle_11.png" alt="rectangulo rayado">
        </div>
    </section>
    <!-- section tourist -->
    <section class="tourist_type container" id="turismo">
        <h2 class="tourist_type_title subtitle">Tipos de <strong>turismo</strong></h2>
        <article class="tourist_type_card">
            <div class="card_icono">
                <span class="material-icons icono_type">directions_bike</span>
            </div>
            <h3 class="card_titulo">ciclismo</h3>
            <p class="card_description">excursiones guiadas a distintos sitios de la ciudad a través de rutas marcadas y
                seguras</p>
        </article>
        <article class="tourist_type_card">
            <div class="card_icono">
                <span class="material-icons icono_type">hiking</span>
            </div>
            <h3 class="card_titulo">montañismo</h3>
            <p class="card_description">Excursiones guiadas a distintos sitios de la ciudad a través de rutas marcadas y
                seguras</p>
        </article>
        <article class="tourist_type_card">
            <div class="card_icono">
                <span class="material-icons icono_type">directions_walk</span>
            </div>
            <h3 class="card_titulo">caminata</h3>
            <p class="card_description">Excursiones guiadas a distintos sitios de la ciudad a través de rutas marcadas y
                seguras</p>
        </article>
    </section>
    <section class="galeria" id="galeria">
        <div class="galeria_top">
            <div class="box_galery">
                <img class="lightbox" data-caption_light="Hola" src="<?php echo IMAGES . 'web/'; ?>foto1.jpg" alt="amanecer guayaquil">
            </div>
            <div class="box_galery">
                <img class="lightbox" data-caption_light="atardacer chimborazo" src="<?php echo IMAGES . 'web/'; ?>chimborazo.jpg" alt="atardacer chimborazo">
            </div>
            <div class="box_galery">
                <img class="lightbox" src="<?php echo IMAGES . 'web/'; ?>foto2.jpg" alt="arbol del culumpio Baños">
            </div>
        </div>
        <div class="description_galery">
            <h2 class="subtitle">Visita Nuestra <strong>Galeria</strong></h2>
            <p class="description">
                Visita los lugares más icónicos de nuestro país y descubre como cientos de viajantes comparten sus
                aventuras con nosotros
            </p>
            <a class="btn btn_galery" href="#">vamos!</a>
        </div>
        <div class="galeria_bottom">
            <div class="box_galery">
                <img class="lightbox" src="<?php echo IMAGES . 'web/'; ?>cotopaxi.jpg" alt="amanecer guayaquil">
            </div>
            <div class="box_galery">
                <img class="lightbox" src="<?php echo IMAGES . 'web/'; ?>galapagos.jpg" alt="atardacer chimborazo">
            </div>
            <div class="box_galery">
                <img class="lightbox" src="<?php echo IMAGES . 'web/'; ?>quito.jpg" alt="Atardecer quito">
            </div>
        </div>
    </section>
    <main class="our_package container">
        <h2 class="subtitle our_title">Nuestros <strong>Paquetes</strong></h2>
        <div class="card_package">
            <div class="card_package_image">
                <img class="lightbox" src="<?php echo IMAGES . 'web/'; ?>excursion.jpg" alt="foto de excursión">
            </div>
            <article class="card_package_description">
                <h3 class="title">Excursión guiada</h3>
                <p class="descripcion">Aprende sobre los lugares más visitados en esta zona con un excelente precio</p>
                <p class="package_precio">45</p>
                <a href="tour_especifico.html" class="btn">ver más</a>
            </article>
        </div>
        <div class="card_package">
            <div class="card_package_image">
                <img class="lightbox" src="<?php echo IMAGES . 'web/'; ?>comida_viaje.jpg" alt="foto de comida exótica">
            </div>
            <article class="card_package_description">
                <h3 class="title">viaje y comida</h3>
                <p class="descripcion">Aprende sobre los lugares más visitados en esta zona con un excelente precio</p>
                <p class="package_precio">545</p>
                <a href="tour_especifico.html" class="btn">ver más</a>
            </article>
        </div>
        <div class="card_package">
            <div class="card_package_image">
                <img class="lightbox" src="<?php echo IMAGES . 'web/'; ?>/foto3.1.webp" alt="">
            </div>
            <article class="card_package_description">
                <h3 class="title">Estadía 3 noches</h3>
                <p class="descripcion">Aprende sobre los lugares más visitados en esta zona con un excelente precio</p>
                <p class="package_precio">425</p>
                <a href="tour_especifico.html" class="btn">ver más</a>
            </article>
        </div>
        <div class="cont_btn_package">
            <a href="./tours.html" class="btn btn_all_package">Ver todos los paquetes</a>
        </div>
    </main>
    <section class="testimonales container">
        <div class="contenedor_testimoniales">
            <div class="sub_cont_test" id="sub_cont_test">
                <div class="testimonial">
                    <div class="testimonial_comilla">
                        <svg class="quote" width="60" height="60" viewBox="0 0 63 50" fill="#F8565D" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.056 23.048C23.456 24.104 25.328 25.688 26.672 27.8C28.016 29.912 28.688 32.408 28.688 35.288C28.688 39.416 27.392 42.776 24.8 45.368C22.208 47.864 18.896 49.112 14.864 49.112C10.832 49.112 7.472 47.816 4.784 45.224C2.192 42.632 0.896 39.32 0.896 35.288C0.896 33.368 1.136 31.448 1.616 29.528C2.096 27.608 3.152 24.728 4.784 20.888L13.136 0.151994H27.392L21.056 23.048ZM55.04 23.048C57.44 24.104 59.312 25.688 60.656 27.8C62 29.912 62.672 32.408 62.672 35.288C62.672 39.416 61.376 42.776 58.784 45.368C56.192 47.864 52.88 49.112 48.848 49.112C44.816 49.112 41.456 47.816 38.768 45.224C36.176 42.632 34.88 39.32 34.88 35.288C34.88 33.368 35.12 31.448 35.6 29.528C36.08 27.608 37.136 24.728 38.768 20.888L47.12 0.151994H61.376L55.04 23.048Z" />
                        </svg>
                    </div>
                    <p class="testimonial_text">"Me fascino, un servicio de alta calidad y una experiencia única, espero
                        volver pronto"</p>
                    <p class="testimonial_autor">Jessica Ballesteros</p>
                    <p class="testimonial_categoria">Cliente</p>
                </div>
                <div class="testimonial">
                    <div class="testimonial_comilla">
                        <svg class="quote" width="60" height="60" viewBox="0 0 63 50" fill="#F8565D" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.056 23.048C23.456 24.104 25.328 25.688 26.672 27.8C28.016 29.912 28.688 32.408 28.688 35.288C28.688 39.416 27.392 42.776 24.8 45.368C22.208 47.864 18.896 49.112 14.864 49.112C10.832 49.112 7.472 47.816 4.784 45.224C2.192 42.632 0.896 39.32 0.896 35.288C0.896 33.368 1.136 31.448 1.616 29.528C2.096 27.608 3.152 24.728 4.784 20.888L13.136 0.151994H27.392L21.056 23.048ZM55.04 23.048C57.44 24.104 59.312 25.688 60.656 27.8C62 29.912 62.672 32.408 62.672 35.288C62.672 39.416 61.376 42.776 58.784 45.368C56.192 47.864 52.88 49.112 48.848 49.112C44.816 49.112 41.456 47.816 38.768 45.224C36.176 42.632 34.88 39.32 34.88 35.288C34.88 33.368 35.12 31.448 35.6 29.528C36.08 27.608 37.136 24.728 38.768 20.888L47.12 0.151994H61.376L55.04 23.048Z" />
                        </svg>
                    </div>
                    <p class="testimonial_text">"Me fascino, un servicio de alta calidad y una experiencia única, espero
                        volver pronto"</p>
                    <p class="testimonial_autor">Angello Ordoñez</p>
                    <p class="testimonial_categoria">Cliente</p>
                </div>
                <div class="testimonial">
                    <div class="testimonial_comilla">
                        <svg class="quote" width="60" height="60" viewBox="0 0 63 50" fill="#F8565D" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.056 23.048C23.456 24.104 25.328 25.688 26.672 27.8C28.016 29.912 28.688 32.408 28.688 35.288C28.688 39.416 27.392 42.776 24.8 45.368C22.208 47.864 18.896 49.112 14.864 49.112C10.832 49.112 7.472 47.816 4.784 45.224C2.192 42.632 0.896 39.32 0.896 35.288C0.896 33.368 1.136 31.448 1.616 29.528C2.096 27.608 3.152 24.728 4.784 20.888L13.136 0.151994H27.392L21.056 23.048ZM55.04 23.048C57.44 24.104 59.312 25.688 60.656 27.8C62 29.912 62.672 32.408 62.672 35.288C62.672 39.416 61.376 42.776 58.784 45.368C56.192 47.864 52.88 49.112 48.848 49.112C44.816 49.112 41.456 47.816 38.768 45.224C36.176 42.632 34.88 39.32 34.88 35.288C34.88 33.368 35.12 31.448 35.6 29.528C36.08 27.608 37.136 24.728 38.768 20.888L47.12 0.151994H61.376L55.04 23.048Z" />
                        </svg>
                    </div>
                    <p class="testimonial_text">"Me fascino, un servicio de alta calidad y una experiencia única, espero
                        volver pronto"</p>
                    <p class="testimonial_autor">Eduardo García</p>
                    <p class="testimonial_categoria">Cliente</p>
                </div>
                <div class="testimonial">
                    <div class="testimonial_comilla">
                        <svg class="quote" width="60" height="60" viewBox="0 0 63 50" fill="#F8565D" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.056 23.048C23.456 24.104 25.328 25.688 26.672 27.8C28.016 29.912 28.688 32.408 28.688 35.288C28.688 39.416 27.392 42.776 24.8 45.368C22.208 47.864 18.896 49.112 14.864 49.112C10.832 49.112 7.472 47.816 4.784 45.224C2.192 42.632 0.896 39.32 0.896 35.288C0.896 33.368 1.136 31.448 1.616 29.528C2.096 27.608 3.152 24.728 4.784 20.888L13.136 0.151994H27.392L21.056 23.048ZM55.04 23.048C57.44 24.104 59.312 25.688 60.656 27.8C62 29.912 62.672 32.408 62.672 35.288C62.672 39.416 61.376 42.776 58.784 45.368C56.192 47.864 52.88 49.112 48.848 49.112C44.816 49.112 41.456 47.816 38.768 45.224C36.176 42.632 34.88 39.32 34.88 35.288C34.88 33.368 35.12 31.448 35.6 29.528C36.08 27.608 37.136 24.728 38.768 20.888L47.12 0.151994H61.376L55.04 23.048Z" />
                        </svg>
                    </div>
                    <p class="testimonial_text">"Me fascino, un servicio de alta calidad y una experiencia única, espero
                        volver pronto"</p>
                    <p class="testimonial_autor">Emily Chimbo</p>
                    <p class="testimonial_categoria">Cliente</p>
                </div>
            </div>
        </div>
        <div class="indicadores" id="indicadores_test"></div>
    </section>
    <!-- secction footer -->
    <?php require_once MODULOS_PAGE . 'footer_section.php'; ?>
    <!-- enlaces de js -->
    <?php require_once INCLUDES . 'footer_enlaces_web.php'; ?>
</body>

</html>