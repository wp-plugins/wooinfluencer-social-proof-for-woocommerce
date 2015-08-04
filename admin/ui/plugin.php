<?php 

$src_image = WOOINFLUENCER_URI . 'admin/assets/images/';

$extensions = array(
    '1' => (object) array(
        'image_url' => $src_image . 'icon-wooinfluencer.png',
        'url'       => 'https://shopitpress.com/plugins/woocommerce/wooinfluencer/?utm_source=wordpress.org&utm_medium=SIP-panel&utm_content=v1.0.0&utm_campaign=wooinfluencer',
        'title'     => __( 'WooInfluencer', 'shopitpress' ),
        'desc'      => __( 'Social proof for WooCoomerce.<br><br>', 'shopitpress' ),
    ),
    '2' => (object) array(
        'image_url' => $src_image . 'icon-woobundler.png',
        'url'       => 'https://shopitpress.com/plugins/woocommerce/woobundler/?utm_source=wordpress.org&utm_medium=SIP-panel&utm_content=v1.0.0&utm_campaign=wooinfluencer',
        'title'     => __( 'WooBundler', 'shopitpress' ),
        'desc'      => __( 'Front end bundle maker for WooCommerce.<br><br>', 'shopitpress' ),
    ),
    '3' => (object) array(
        'image_url' => $src_image . 'icon-wooreviews.png',
        'url'       => 'https://shopitpress.com/plugins/woocommerce/wooreviews-shortcode/?utm_source=wordpress.org&utm_medium=SIP-panel&utm_content=v1.0.0&utm_campaign=wooinfluencer',
        'title'     => __( 'WooReviews Shortcode', 'shopitpress' ),
        'desc'      => __( 'Display product reviews in any post/page with a shortcode.', 'shopitpress' ),
    ),
);

?>


<div id="shopitpress-wraper">

<?php 
    $i = 0;
    foreach ( (array) $extensions as $i => $extension ) {
        // Attempt to get the plugin basename if it is installed or active.
        $image_url   = $extension->image_url ;
        $url 		 = $extension->url ;
        $title		 = $extension->title ;
        $description = $extension->desc ; 
 		?>
		<div class="shopitpress-addon">
        <h1><?php echo $title ?></h1>
        <p><?php echo $description ?></p>
			<img class="shopitpress-addon-thumb" src="<?php echo $image_url; ?>" width="300px" height="250px" alt="<?php echo $title; ?>">
			<div class="shopitpress-addon-action">
				<a class="active-addon button button-primary " title="<?php echo $title; ?>" href="<?php echo $url; ?>" target="_blank">Learn more</a>
			</div>
		</div> <!-- .shopitpress-addon -->
		<?php $i++; 
	} 
?>
</div><!-- .shopitpress -->