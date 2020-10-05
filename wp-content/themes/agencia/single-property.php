<?php get_header() ?>

<?php while (have_posts()) : the_post(); ?>

    <div class="container">
        <header class="bien-header">
            <div>
                <h1 class="bien__title"><?php the_title(); ?> - <?= the_field('surface'); ?>m²</h1>
                <div class="bien__meta">
                    <div class="bien__location"><?= agence_city(get_post()) ?></div>
                    <div class="bien__price">
                        <?php agence_price() ?>
                    </div>
                </div>
                <div class="bien__actions" id="bien-actions">
                    <button class="btn btn-filled" id="bien-contact">Contacter l'agence</button>
                    <button class="btn">Appeler</button>
                </div>

                <div class="hidden" id="bien-form">

                    <?php /* Insertion of the contact form for the "Contact form 7" extension */ ?>

                    <?= do_shortcode('[contact-form-7 id="123" title="" html_class="bien__form form-2column"]'); ?>
                </div>
            
            </div>
            <div>
                <div class="bien__photos js-slider">
                    <?php foreach (get_attached_media('image', get_post()) as $image) : ?>

                        <a href="<?= wp_get_attachment_url($image->ID) ?>">
                            <img class="bien__photo" src="<?= wp_get_attachment_image_url($image->ID, 'property-carousel'); ?>" alt="">
                        </a>
                    <?php endforeach ?>
                </div>
            </div>
        </header>




        <div class="bien-body">
            <h2 class="bien-body__title"><?= __('Description', 'agencia'); ?></h2>
            <div class="formatted">
                <?php the_content(); ?>
                <p>
                    <strong>EXCLUSIVITÉ - LOCATION AVRILLE. GRAND APPARTEMENT 4 PIÈCES de 90,23 m²</strong> en résidence récente
                    avec ascenseur. Il propose un séjour de 23 m² avec balcon de 10 m², une belle cuisine américaine aménagée et
                    équipée
                    ( plaques vitrocéramiques et hotte), trois chambres, une salle d'eau et une salle de bain. Parking privé en
                    sous-sol.
                </p>

                <p>
                    Le bien se trouve à proximité des commerces. On trouve des écoles maternelles et élémentaires à 2 minutes de
                    l'appartement .
                </p>

                <p>
                    Le loyer de <strong>838,00 euros</strong> par mois charges comprises dont 113,00 euros par mois de provision
                    pour charges (soumis à la régularisation annuelle).
                </p>
            </div>
        </div>

        <section class="bien-options">
            <div class="bien-option">
                <img src="<?= get_template_directory_uri() ?>/assets/area.78237e19.svg" alt="">
                <?= __('Area', 'agencia') ?>: <?php the_field('surface') ?> m²
            </div>
            <div class="bien-option">
                <img src="<?= get_template_directory_uri() ?>/assets/rooms.b02e3d15.svg" alt="">
                <?= __('Rooms', 'agencia') ?>: <?php the_field('rooms') ?>
            </div>
            <div class="bien-option">
                <img src="<?= get_template_directory_uri() ?>/assets/elevator.e0bdbd67.svg" alt="">
                <?= __('Floor', 'agencia') ?>: <?php the_field('floor') ?>
            </div>
            <?php $options = get_the_terms(get_post(), 'property_option'); ?>
            <?php foreach ($options as $option) : ?>
                <div class="bien-option">
                    <img src="<?= the_field('icon', $option); ?>" alt="">
                    <?= $option->name; ?>
                </div>
            <?php endforeach; ?>
        </section>

    </div>
<?php endwhile ?>

<?php get_footer() ?>