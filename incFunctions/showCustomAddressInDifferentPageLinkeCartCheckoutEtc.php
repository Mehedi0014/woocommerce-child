<?php

/*
==============================================================================
>>>> https://stackoverflow.com/questions/67583057/state-isnt-show-in-shipping-to-address-in-cart-page-and-selected-state-in-are-n/67583580#67583580

>>> cart, checkout, order/thank you etc page e -  bivainno deser address bivinno base show hoy. jemon germany te state show hoy na. address custom vabe show korer jonno.

>>>> ai function kaj korar jonno jodi kono dese state na theke tobe sei deser under e state insert korate hobe.
kivabe insetr korate hoy ta sei biosy amar acta plugin ache.

==============================================================================
*/


add_filter( 'woocommerce_localisation_address_formats', 'custom_address_display_formate_for_germany');
function custom_address_display_formate_for_germany(){
	$stateDisplayFormate = array( 'DE' => "{company}\n{name}\n{address_1}\n{address_2}\n{city} {postcode}\n{state}, {country}" );
	return $stateDisplayFormate;
}
