<?php
	/** .............................................................................................................
	 ===> Enqueue scripts and styles
	 */
	require_once( get_stylesheet_directory() . '/incFunctions/enqueueScriptsAndStyles.php');


	/** .............................................................................................................
	===> Add container or container-fluid or any tag for which wrapped all archive page.
	*/
	require_once( get_stylesheet_directory() . '/incFunctions/addContainerForWrappingArchivePage.php');


	/** .............................................................................................................
	===> Customize image size in shop page, single page, gallery image etc
	*/
	require_once( get_stylesheet_directory() . '/incFunctions/customizeImageSizeForDifferentPage.php');


	/** .............................................................................................................
	  ===> Add plus and minus quantity buttons in Woocommerce
	 */		
	// require_once( get_stylesheet_directory() . '/incFunctions/addPlusAndMinusQuantityButtons.php');


	/** .............................................................................................................
	 ===> Repalce single page short description
	*/
	// require_once( get_stylesheet_directory() . '/incFunctions/repalceSinglePageShortDescription.php');
	
	
	/** .............................................................................................................
	===> Remove sale flash in archive page
	*/
	// require_once( get_stylesheet_directory() . '/incFunctions/removeSaleFlashInArchivePage.php');


	/** .............................................................................................................
	 ===> Change Number of Upsale/related Products
	 */
	require_once( get_stylesheet_directory() . '/incFunctions/changeNumberOfRelatedProducts.php');


	/** .............................................................................................................
	 ===> Change "You may also like..." In upsell products / Related Products
	 */
	// require_once( get_stylesheet_directory() . '/incFunctions/changeYouMayAlsoLikeInUpsellProduct.php');


	 /** .............................................................................................................
	  ===> Change Related Products Heading, with adding the product name
	*/
	// require_once( get_stylesheet_directory() . '/incFunctions/changeRelatedProductsHeading.php');


	/** .............................................................................................................
	===> Remove cross-sells at cart page
	*/
	// remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );


	/** .............................................................................................................
	===> change the number of columns in archive page
	*/
	// require_once( get_stylesheet_directory() . '/incFunctions/changeTheNumberOfColumnsInArchivePage.php');


    /** .............................................................................................................
	 ===> Change number of products that are displayed per page (shop page)
	 */
	// require_once( get_stylesheet_directory() . '/incFunctions/changeNumberOfProductsThatDisplayedPerPage.php');


    /** .............................................................................................................
	===> Show short description in archive/shop page and close link (title, short description, price theke anchore tag er link remove kore diachi)
	*/
	// require_once( get_stylesheet_directory() . '/incFunctions/showshortDescriptionInArchivePage.php');


	/** .............................................................................................................
	 ===> change [add to cart] text all page without single page - like shop, category page etc
	*/
	// require_once( get_stylesheet_directory() . '/incFunctions/changeAddToCartTextAllPageWithoutSinglePage.php');


	/** .............................................................................................................
	 ===> change [add to cart] text Only Single Page
	*/
	// require_once( get_stylesheet_directory() . '/incFunctions/changeAddToCartTextOnlySinglePage.php');


	/** .............................................................................................................
	===> Remove variation stock data from product page display (In stock or out of stock ai lekha gulo single page theke remove korer poddoti)
	*/
	// require_once( get_stylesheet_directory() . '/incFunctions/removeVariationStockDataFromProductPageDisplay.php');


	/** .............................................................................................................
	===> Remove default pagination and make a new one for archive page
	*/
	require_once( get_stylesheet_directory() . '/incFunctions/removeDefaultPaginationAndMakeANewOne.php');


	/** .............................................................................................................
	===> After Place order page/Checkout (Checkout theke order conform korar por j page ase tar jonno coding)
	===> Add div for desing, Before/Top part of Order details
	*/
	// require_once( get_stylesheet_directory() . '/incFunctions/codeForDesingAfterPlaceOrderInChackout.php');


	/** .............................................................................................................
	===> Disable Variable Product Price Range on the WooCommerce Single Product Pages Only
	*/
	// require_once( get_stylesheet_directory() . '/incFunctions/disableVariableProductPriceRange.php');


	/* .............................................................................................................
	===> Move Variable Product Price One place to another
	*/
	// require_once( get_stylesheet_directory() . '/incFunctions/MoveVariableProductPrice.php');


	/* .............................................................................................................
	===> Code for woocommerce product categories
	*/
	// require_once( get_stylesheet_directory() . '/incFunctions/codeForWoocommerceProductCategories.php');


	/** .............................................................................................................
	===> Show cart contents / total Ajax (Cart e kotogulo porduct add holo ta menu te show kora)
	 */
	// require_once( get_stylesheet_directory() . '/incFunctions/showCartTotleInAjax.php');


	/** .............................................................................................................
	 ===> Change the breadcrumb separator
	 */
 	require_once( get_stylesheet_directory() . '/incFunctions/changeTheBreadcrumbSeparator.php');

 	
	/** .............................................................................................................
	 ===> Rename "My Account" If Logged Out @ Nav Menu
	*/ 
  	// require_once( get_stylesheet_directory() . '/incFunctions/renameMyAccountIfLogout.php');
	
	
	/** .............................................................................................................
	 ===> Remove default add to cart and create custom add to cart button
	*/
	// require_once( get_stylesheet_directory() . '/incFunctions/removeDefaultAddToCartAndMakeCustomAddToCart.php');




	/** .............................................................................................................
	 ===> by default woocommerce cross sell is only showing two random products on cart page.
	 ===> Show all cross sell porducts
	*/
	// require_once( get_stylesheet_directory() . '/incFunctions/showAllCrossSellProducts.php');



	/** .............................................................................................................
	===> forcefully auto selected Bulling details field like cart page address filed information. 
	*/
	// require_once( get_stylesheet_directory() . '/incFunctions/forcefullySelectedBullingStateLikeCartState.php');




	/** .............................................................................................................
	===> https://wordpress.org/support/topic/country-billing-not-showing-up-in-the-order-received-thank-you-page/

	===> Due to base country and billing or shipping country are same, country aren't show in cart page shipping to area. Forcefully Display it
	==============================================================================
	*/

	// add_filter( 'woocommerce_formatted_address_force_country_display', '__return_true' );




	/** .............................................................................................................
	===> cart, checkout, order/thank you etc page e -  bivainno deser address bivinno base show hoy. jemon germany te state show hoy na. address custom vabe show korer jonno.
	*/

	// require_once( get_stylesheet_directory() . '/incFunctions/showCustomAddressInDifferentPageLinkeCartCheckoutEtc.php');




 	/** .............................................................................................................
	===> Remove default star rating and make a custom star rating for shop/archive page.
	*/
	require_once( get_stylesheet_directory() . '/incFunctions/removeAndAddCustomStarRatingForArchivePage.php');


	/** .............................................................................................................
	===> Replace breadcrumb one place to another place.
	*/
	require_once( get_stylesheet_directory() . '/incFunctions/replaceBreadcrumbOnePlaceToAnotherPlace.php');