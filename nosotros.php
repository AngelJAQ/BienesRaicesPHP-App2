<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="imagen/webp">
                    <source srcset="build/img/nosotros.webp" type="imagen/webp">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de Experiencia.

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium excepturi iure ipsa consectetur officia ab aliquid, inventore tempore vel in non neque ut, alias odit, totam illum eius repellendus vero.
                    </p>
                    <p>
                        Non ea ducimus similique earum sed cumque itaque inventore esse repellendus minima, veritatis pariatur libero eveniet architecto, omnis dicta excepturi ratione, ut perspiciatis veniam corrupti aliquid provident.
                    Veniam impedit sint explicabo, aliquam earum dolores, maxime ex odit officia ipsum nemo sunt doloribus, tenetur molestiae at! Consequuntur est porro omnis illum! Blanditiis dolorum voluptatum veniam asperiores nihil necessitatibus!
                    Quisquam, distinctio. Voluptatibus non corrupti temporibus, nisi, consectetur maiores commodi illum fugiat, quos ullam aperiam nihil distinctio corporis repellat id debitis sed quae. Debitis assumenda commodi quam nihil, vel ex?
                    Culpa repellat molestiae incidunt harum inventore deserunt rerum in magnam aspernatur est recusandae id ipsa qui distinctio soluta obcaecati tempora beatae veritatis nihil perferendis voluptas quam, et aut. Saepe, voluptas.
                    </p>
                </blockquote>
            </div>

        </div>
    </main>


    <section class="contenedor seccion">
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

    </section>


<?php
    incluirTemplate('footer');
?>