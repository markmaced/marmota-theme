<section class="py-8 md:py-16">
<div class="container md:max-w-screen-xl mx-auto p-6 md:p-12 rounded-2xl bg-gray-200">
    
<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

use Automattic\WooCommerce\Blocks\BlockTypes\Checkout;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$checkout = WC()->checkout();

?>

<h1 class="text-3xl font-bold font-display mb-5"><?php the_title( ); ?></h1>

<?php

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout flex flex-col md:flex-row md:items-baseline gap-12" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>


		<div class="w-full md:w-2/3" id="customer_details">
			<div class="">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
    <div class="w-full md:w-1/3 grid gap-5 pb-10">
        <h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
        
        <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
    
        <div id="order_review" class="woocommerce-checkout-review-order">
            <?php do_action( 'woocommerce_checkout_order_review' ); ?>
        </div>

        <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
        
    </div>

    

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>


</div>
</section>