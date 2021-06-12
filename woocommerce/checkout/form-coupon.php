<?php
/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.4
 */

/**
* Help Tips:
* Ai file ti modify kora hoyeche.
*/

defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
	return;
}

?>
<div class="woocommerce-form-coupon-toggle text-center">
	<?php wc_print_notice( apply_filters( 'woocommerce_checkout_coupon_message', '<span class="h5 mx-2 font-weight-bold">' . esc_html__( 'Have a coupon?', 'woocommerce' ) . '</span>' . ' <sapn><a href="#" class="showcoupon d-inline-block wcCtBtnThree">' . esc_html__( 'Click here to apply your coupon', 'woocommerce' ) . '</a></sapn>' ), 'notice' ); ?>
</div>

<div class="container discountCouponInCheckoutPageWrapper">
<form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">

	<p class="text-center"><?php esc_html_e( 'If you have a coupon code, please apply it below.', 'woocommerce' ); ?></p>
	<div class="container discountCouponFormInCheckoutPage">
		<div class="row justify-content-center">
			<div class="form-group m-0 position-relative col-md-6">
				<input type="text" name="coupon_code" class="input-text form-control" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" id="coupon_code" value="" />	
				<button type="submit" class="button wcCtBtnFour position-absolute" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</form>
</div>
