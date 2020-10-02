<?php get_header()
/* Property listing */
?>
<?php
$isRent = get_query_var('property_category', 'buy') === _x('rent', 'URL', 'agence');

/* 

Test récupération du nom de la ville sélectionnée dans le filtre pour affichage dynamique
$isTitle = get_term_by(
    $field->slug,
    $value->$currentCity,
    $taxonomy->cities
);

*/

?>
<div class="container page-properties">
    <div class="search-form">
        <h1 class="search-form__title">
            <?= __('All our properties', 'agencia') ?>
            <?php if ($isRent) : ?>
                <?= __('for rent', 'agencia') ?>
            <?php else : ?>
                <?= __('on sale', 'agencia') ?>
            <?php endif ?>
        </h1>
        <p><?= __('Find all our properties in the area of', 'agencia') ?><strong>Toulouse</strong></p>
        <hr>
        <?php get_template_part('template-parts/searchform-property') ?>
    </div>

    <?php $i = 0;
    while (have_posts()) : the_post(); ?>
        <?php set_query_var('property-large', $i === 7); ?>
        <?php get_template_part('template-parts/property') ?>
    <?php $i++;
    endwhile; ?>

</div>

<?php if (get_query_var('paged', 1) > 1) : ?>
    <?= agencia_paginate() ?>
<?php elseif ($nextPostLink = get_next_posts_link(__('More properties +', 'agencia'))) : ?>
    <div class="pagination">
        <?= $nextPostLink ?>
    </div>
<?php endif ?>

<?php get_footer() ?>