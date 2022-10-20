<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package    ThemeGrill
 * @subpackage ColorMag
 * @since      ColorMag 1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="no-results not-found">

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p>
				<?php
				printf(
					wp_kses(
					/* Translators: %1$s: Link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'colormag' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
				?>
			</p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'آسف ، ولكن لا شيء يطابق شروط البحث الخاصة بك. أرجو المحاولة مرة أخرى بإستخدام كلمات أخرى.', 'colormag' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'يبدو أنه لا يمكننا العثور على ما تبحث عنه. ربما يمكن أن يساعد البحث.', 'colormag' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->

</section><!-- .no-results -->
