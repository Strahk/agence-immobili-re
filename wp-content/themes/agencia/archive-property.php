<?php get_header()
/* Property listing */
?>
<?php
$isRent = get_query_var('property_category', 'buy') === _x('rent', 'URL', 'agence');
$cities = get_terms([
    'taxonomy' => 'property_city'
]);
$types = get_terms([
    'taxonomy' => 'property_type'
]);

$currentCity = get_query_var('city');
$currentPrice = get_query_var('price');
$currentType = get_query_var('property_type');
$currentRooms = get_query_var('rooms');

/* Test récupération du nom de la ville sélectionnée dans le filtre pour affichage dynamique
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
        <form action="" class="search-form__form">
            <div class="form-group">
                <select name="city" id="city" class="form-control">
                    <?php foreach ($cities as $city) : ?>
                        <option value="<?= $city->slug ?>" <?php selected($city->slug, $currentCity) ?>><?= $city->name ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="city"><?= __('City', 'agencia') ?></label>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="budget" placeholder="100 000 €" name="price" value="<?= esc_attr($currentPrice) ?>">
                <label for="budget"><?= __('Budget', 'agencia') ?></label>
            </div>
            <div class="form-group">
                <select name="property_type" id="property_type" class="form-control">
                    <option value=""><?= __('All types', 'agencia') ?></option>
                    <?php foreach ($types as $type) : ?>
                        <option value="<?= $type->slug ?>" <?php selected($type->slug, $currentType) ?>><?= $type->name ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="property_type"><?= __('Type', 'agencia') ?></label>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="rooms" placeholder="4" name="rooms" value="<?= esc_attr($currentRooms) ?>">
                <label for="rooms"><?= __('Pièces', 'agencia') ?></label>
            </div>
            <button type="submit" class="btn btn-filled"><?= __('Search', 'agencia') ?></button>
        </form>
    </div>



    <?php /* $i++, $i = 0 : incrementation */ ?>

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