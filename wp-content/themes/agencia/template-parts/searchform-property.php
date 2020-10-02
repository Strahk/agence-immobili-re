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

?>

<form action="<?= get_post_type_archive_link('property') ?>" class="search-form__form">
<?php if(is_front_page()): ?>
    <div class="search-form__checkbox">
        <div class="form-check form-check-inline">
            <input class="form-check-input" <?php checked(!$isRent) ?> type="radio" name="property_category" id="buy" value="<?= _x('buy', 'URL', 'agence') ?>">
            <label class="form-check-label" for="<?= _x('buy', 'URL', 'agence') ?>"><?= __('Buy', 'agence') ?></label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" <?php checked(!$isRent) ?> type="radio" name="property_category" id="<?= _x('rent', 'URL', 'agence') ?>" value="<?= _x('rent', 'URL', 'agence') ?>">
            <label class="form-check-label" for="<?= _x('rent', 'URL', 'agence') ?>"><?= __('Rent', 'agence') ?></label>
        </div>
    </div>
<?php endif; ?>
    <div class="form-group">
        <select name="city" id="city" class="form-control">
            <option value=""><?= __('All cities', 'agencia') ?></option>
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