<?php

    require 'includes/funciones.php';

    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
        <h1>Más sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolor laborum cupiditate eaque debitis repellat consectetur commodi modi veritatis cum dolore, sequi, quos reprehenderit nihil voluptates dignissimos dicta doloribus voluptatem.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolor laborum cupiditate eaque debitis repellat consectetur commodi modi veritatis cum dolore, sequi, quos reprehenderit nihil voluptates dignissimos dicta doloribus voluptatem.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolor laborum cupiditate eaque debitis repellat consectetur commodi modi veritatis cum dolore, sequi, quos reprehenderit nihil voluptates dignissimos dicta doloribus voluptatem.</p>
            </div>
        </div>

    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

        <?php
            $limite = 3;
            include 'includes/templates/anuncios.php';
        ?>

        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">Ver Todas</a>
        </div>

    </section>



    <seccion class="imagen-contacto">
        <h2>Encuentra la Casa de tus Sueños</h2>
        <p>Llena el Formulario de Contacto y un Asesor se pondra en contacto contigo a la brevedad</p>
        <a href="contactos.html" class="boton-amarillo">Contactanos</a>
    </seccion>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el Techo de tu Casa</h4>
                        <p>Escrito el: <span>20/10/2021</span> por <span>Admin</span></p>

                        <p>
                            Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                        </p>
                    </a>
                </div>
            </article>


            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la decoracion de tu Hogar</h4>
                        <p>Escrito el: <span>20/10/2021</span> por <span>Admin</span></p>

                        <p>
                            Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vids a tu espacio
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comporto de una excelente forma, muy buena atencion y la casa que me ofrecieron cumple con todas mis expectativas
                </blockquote>
                <p>- Juan de la Torre</p>
            </div>
        </section>
    </div>

<?php
    include './includes/templates/footer.php';
?>