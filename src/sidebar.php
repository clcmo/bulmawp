<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */
?>
<div class="column is-3">
	<aside class="menu">
		<?php if( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'sidebar' ) ) : endif; ?>
	</aside>
	<span class="target"></span>
</div>
