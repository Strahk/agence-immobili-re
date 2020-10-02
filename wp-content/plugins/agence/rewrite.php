<?php
defined('ABSPATH') or die('rien à voir');

add_action('template_redirect', function () {
    if (is_post_type_archive('property')) {
        $authorizedValues = [agence_buy_route_name(), agence_rent_route_name()];
        if (isset($_GET['property_category']) && in_array($_GET['property_category'], $authorizedValues)) {

            /* Reconstruction and saving of the parameters entered in the form of the homepage */

            $filteredParams = [];
            foreach($_GET as $key => $value) {
                if ($key !== 'property_category' && $key !== '') {
                    $filteredParams[$key] = $value;
                }
            }
            wp_redirect('/' . _x('property', 'URL', 'agence') . '/' . $_GET['property_category'] . '?' . http_build_query($filteredParams));
            exit();
        };
    }
});
