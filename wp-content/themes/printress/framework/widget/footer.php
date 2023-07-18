<?php
/**
 * Recent_Posts widget class
 *
 * @since 2.8.0
 */

class printress_widget_footer_about extends WP_Widget {
	function __construct() {
		$widget_ops = array('classname' => 'widget_footer_about', 'description' => esc_html__( "Footer about us", 'printress') );
		parent::__construct('footer_about', esc_html__('Footer About', 'printress'), $widget_ops);
		$this->alt_option_name = 'widget_footer_about';
	}
	function widget($args, $instance) {
		$cache = wp_cache_get('printress_widget_footer_about', 'widget');
		if ( !is_array($cache) )
			$cache = array();
		if ( ! isset( $args['widget_id'] ) )
			$args['widget_id'] = $this->id;
		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo wp_specialchars_decode(esc_attr($cache[ $args['widget_id'] ]));
			return;
		}
		ob_start();
		extract($args);
		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'About us', 'printress' );
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$content = ( ! empty( $instance['content'] ) ) ? $instance['content'] : esc_html__( 'Content Footer About Us', 'printress' );
		$content = apply_filters( 'widget_title', $content, $instance, $this->id_base );
		?>
		<?php echo wp_specialchars_decode(esc_attr($before_widget),ENT_QUOTES); ?>
		<div class="bd-footer__widget bd-footer__widget1 pr-5 mb-50">
			<div class="bd-footer__title">
				<h4><?php echo esc_attr($title); ?></h4>
			</div>
			<div class="bd-footer__content">
				<p><?php echo esc_attr($content) ?></p>
			</div>
		</div>
		<?php echo wp_specialchars_decode(esc_attr($after_widget)); ?>
<?php
		// Reset the global $the_post as this query will have stomped on it
		$cache[$args['widget_id']] = ob_get_flush();
		wp_cache_set('printress_widget_footer_about', $cache, 'widget');
	}
	function update( $new_instance, $old_instance ) {
		$instance 				=array();
		$instance['title'] 		= strip_tags($new_instance['title']);
		$instance['content'] 	= strip_tags($new_instance['content']);
		$alloptions 			= wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['widget_footer_about']) )
			delete_option('widget_footer_about');
		return $instance;
	}
	function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$content   = isset( $instance['content'] ) ? esc_attr( $instance['content'] ) : '';
?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'content' )); ?>"><?php esc_html_e( 'Content:', 'printress' ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'content' ) ); ?>" type="text" rows="5"><?php echo esc_attr( $content ); ?></textarea>
		</p>
<?php
	}
}

class printress_widget_footer_other_page extends WP_Widget {
	function __construct() {
		$widget_ops = array('classname' => 'widget_footer_other_page', 'description' => esc_html__( "Footer other page", 'printress') );
		parent::__construct('footer_other_page', esc_html__('Footer Other Page', 'printress'), $widget_ops);
		$this->alt_option_name = 'widget_footer_other_page';
	}
	function widget($args, $instance) {
		$cache = wp_cache_get('printress_widget_footer_other_page', 'widget');
		if ( !is_array($cache) )
			$cache = array();
		if ( ! isset( $args['widget_id'] ) )
			$args['widget_id'] = $this->id;
		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo wp_specialchars_decode(esc_attr($cache[ $args['widget_id'] ]));
			return;
		}
		ob_start();
		extract($args);
		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'About us', 'printress' );
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$text1 = ( ! empty( $instance['text1'] ) ) ? $instance['text1'] : esc_html__( '', 'printress' );
		$text1 = apply_filters( 'widget_title', $text1, $instance, $this->id_base );
		$link1 = ( ! empty( $instance['link1'] ) ) ? $instance['link1'] : esc_html__( '', 'printress' );
		$link1 = apply_filters( 'widget_title', $link1, $instance, $this->id_base );
		$text2 = ( ! empty( $instance['text2'] ) ) ? $instance['text2'] : esc_html__( '', 'printress' );
		$text2 = apply_filters( 'widget_title', $text2, $instance, $this->id_base );
		$link2 = ( ! empty( $instance['link2'] ) ) ? $instance['link2'] : esc_html__( '', 'printress' );
		$link2 = apply_filters( 'widget_title', $link2, $instance, $this->id_base );
		$text3 = ( ! empty( $instance['text3'] ) ) ? $instance['text3'] : esc_html__( '', 'printress' );
		$text3 = apply_filters( 'widget_title', $text3, $instance, $this->id_base );
		$link3 = ( ! empty( $instance['link3'] ) ) ? $instance['link3'] : esc_html__( '', 'printress' );
		$link3 = apply_filters( 'widget_title', $link3, $instance, $this->id_base );
		$text4 = ( ! empty( $instance['text4'] ) ) ? $instance['text4'] : esc_html__( '', 'printress' );
		$text4 = apply_filters( 'widget_title', $text4, $instance, $this->id_base );
		$link4 = ( ! empty( $instance['link4'] ) ) ? $instance['link4'] : esc_html__( '', 'printress' );
		$link4 = apply_filters( 'widget_title', $link4, $instance, $this->id_base );
		$text5 = ( ! empty( $instance['text5'] ) ) ? $instance['text5'] : esc_html__( '', 'printress' );
		$text5 = apply_filters( 'widget_title', $text5, $instance, $this->id_base );
		$link5 = ( ! empty( $instance['link5'] ) ) ? $instance['link5'] : esc_html__( '', 'printress' );
		$link5 = apply_filters( 'widget_title', $link5, $instance, $this->id_base );
		$text6 = ( ! empty( $instance['text6'] ) ) ? $instance['text6'] : esc_html__( '', 'printress' );
		$text6 = apply_filters( 'widget_title', $text6, $instance, $this->id_base );
		$link6 = ( ! empty( $instance['link6'] ) ) ? $instance['link6'] : esc_html__( '', 'printress' );
		$link6 = apply_filters( 'widget_title', $link6, $instance, $this->id_base );
		$text7 = ( ! empty( $instance['text7'] ) ) ? $instance['text7'] : esc_html__( '', 'printress' );
		$text7 = apply_filters( 'widget_title', $text7, $instance, $this->id_base );
		$link7 = ( ! empty( $instance['link7'] ) ) ? $instance['link7'] : esc_html__( '', 'printress' );
		$link7 = apply_filters( 'widget_title', $link7, $instance, $this->id_base );
		$text8 = ( ! empty( $instance['text8'] ) ) ? $instance['text8'] : esc_html__( '', 'printress' );
		$text8 = apply_filters( 'widget_title', $text8, $instance, $this->id_base );
		$link8 = ( ! empty( $instance['link8'] ) ) ? $instance['link8'] : esc_html__( '', 'printress' );
		$link8 = apply_filters( 'widget_title', $link8, $instance, $this->id_base );
		$text9 = ( ! empty( $instance['text9'] ) ) ? $instance['text9'] : esc_html__( '', 'printress' );
		$text9 = apply_filters( 'widget_title', $text9, $instance, $this->id_base );
		$link9 = ( ! empty( $instance['link9'] ) ) ? $instance['link9'] : esc_html__( '', 'printress' );
		$link9 = apply_filters( 'widget_title', $link9, $instance, $this->id_base );
		$text10 = ( ! empty( $instance['text10'] ) ) ? $instance['text10'] : esc_html__( '', 'printress' );
		$text10 = apply_filters( 'widget_title', $text10, $instance, $this->id_base );
		$link10 = ( ! empty( $instance['link10'] ) ) ? $instance['link10'] : esc_html__( '', 'printress' );
		$link10 = apply_filters( 'widget_title', $link10, $instance, $this->id_base );
		?>
		<?php echo wp_specialchars_decode(esc_attr($before_widget),ENT_QUOTES); ?>
		<div class="bd-footer__widget bd-footer__widget1 pl-35 mb-50">
			<div class="bd-footer__title">
				<h4><?php echo esc_attr($title); ?></h4>
			</div>
			<div class="bd-footer__link">
				<ul class="col-xl-6 col-lg-6 col-md-6">
					<?php if (('' != $link1) && ('' != $text1)) { ?>
						<li><a href="<?php echo esc_attr($link1); ?>"><?php echo esc_attr($text1); ?></a></li>
					<?php } ?>
					<?php if (('' != $link2) && ('' != $text2)) { ?>
						<li><a href="<?php echo esc_attr($link2); ?>"><?php echo esc_attr($text2); ?></a></li>
					<?php } ?>
					<?php if (('' != $link3) && ('' != $text3)) { ?>
						<li><a href="<?php echo esc_attr($link3); ?>"><?php echo esc_attr($text3); ?></a></li>
					<?php } ?>
					<?php if (('' != $link4) && ('' != $text4)) { ?>
						<li><a href="<?php echo esc_attr($link4); ?>"><?php echo esc_attr($text4); ?></a></li>
					<?php } ?>
					<?php if (('' != $link5) && ('' != $text5)) { ?>
						<li><a href="<?php echo esc_attr($link5); ?>"><?php echo esc_attr($text5); ?></a></li>
					<?php } ?>
				</ul>
				<ul class="col-xl-6 col-lg-6 col-md-6">
					<?php if (('' != $link6) && ('' != $text6)) { ?>
						<li><a href="<?php echo esc_attr($link6); ?>"><?php echo esc_attr($text6); ?></a></li>
					<?php } ?>
					<?php if (('' != $link7) && ('' != $text7)) { ?>
						<li><a href="<?php echo esc_attr($link7); ?>"><?php echo esc_attr($text7); ?></a></li>
					<?php } ?>
					<?php if (('' != $link8) && ('' != $text8)) { ?>
						<li><a href="<?php echo esc_attr($link8); ?>"><?php echo esc_attr($text8); ?></a></li>
					<?php } ?>
					<?php if (('' != $link9) && ('' != $text9)) { ?>
						<li><a href="<?php echo esc_attr($link9); ?>"><?php echo esc_attr($text9); ?></a></li>
					<?php } ?>
					<?php if (('' != $link10) && ('' != $text10)) { ?>
						<li><a href="<?php echo esc_attr($link10); ?>"><?php echo esc_attr($text10); ?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<?php echo wp_specialchars_decode(esc_attr($after_widget)); ?>
<?php
		// Reset the global $the_post as this query will have stomped on it
		$cache[$args['widget_id']] = ob_get_flush();
		wp_cache_set('printress_widget_footer_other_page', $cache, 'widget');
	}
	function update( $new_instance, $old_instance ) {
		$instance 				=array();
		$instance['title'] 		= strip_tags($new_instance['title']);
		$instance['text1'] 		= strip_tags($new_instance['text1']);
		$instance['link1'] 		= strip_tags($new_instance['link1']);
		$instance['text2'] 		= strip_tags($new_instance['text2']);
		$instance['link2'] 		= strip_tags($new_instance['link2']);
		$instance['text3'] 		= strip_tags($new_instance['text3']);
		$instance['link3'] 		= strip_tags($new_instance['link3']);
		$instance['text4'] 		= strip_tags($new_instance['text4']);
		$instance['link4'] 		= strip_tags($new_instance['link4']);
		$instance['text5'] 		= strip_tags($new_instance['text5']);
		$instance['link5'] 		= strip_tags($new_instance['link5']);
		$instance['text6'] 		= strip_tags($new_instance['text6']);
		$instance['link6'] 		= strip_tags($new_instance['link6']);
		$instance['text7'] 		= strip_tags($new_instance['text7']);
		$instance['link7'] 		= strip_tags($new_instance['link7']);
		$instance['text8'] 		= strip_tags($new_instance['text8']);
		$instance['link8'] 		= strip_tags($new_instance['link8']);
		$instance['text9'] 		= strip_tags($new_instance['text9']);
		$instance['link9'] 		= strip_tags($new_instance['link9']);
		$instance['text10'] 	= strip_tags($new_instance['text10']);
		$instance['link10'] 	= strip_tags($new_instance['link10']);
		$alloptions 			= wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['widget_footer_other_page']) )
			delete_option('widget_footer_other_page');
		return $instance;
	}
	function form( $instance ) {
		$title   = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$text1   = isset( $instance['text1'] ) ? esc_attr( $instance['text1'] ) : '';
		$link1   = isset( $instance['link1'] ) ? esc_attr( $instance['link1'] ) : '';
		$text2   = isset( $instance['text2'] ) ? esc_attr( $instance['text2'] ) : '';
		$link2   = isset( $instance['link2'] ) ? esc_attr( $instance['link2'] ) : '';
		$text3   = isset( $instance['text3'] ) ? esc_attr( $instance['text3'] ) : '';
		$link3   = isset( $instance['link3'] ) ? esc_attr( $instance['link3'] ) : '';
		$text4   = isset( $instance['text4'] ) ? esc_attr( $instance['text4'] ) : '';
		$link4   = isset( $instance['link4'] ) ? esc_attr( $instance['link4'] ) : '';
		$text5   = isset( $instance['text5'] ) ? esc_attr( $instance['text5'] ) : '';
		$link5   = isset( $instance['link5'] ) ? esc_attr( $instance['link5'] ) : '';
		$text6   = isset( $instance['text6'] ) ? esc_attr( $instance['text6'] ) : '';
		$link6   = isset( $instance['link6'] ) ? esc_attr( $instance['link6'] ) : '';
		$text7   = isset( $instance['text7'] ) ? esc_attr( $instance['text7'] ) : '';
		$link7   = isset( $instance['link7'] ) ? esc_attr( $instance['link7'] ) : '';
		$text8   = isset( $instance['text8'] ) ? esc_attr( $instance['text8'] ) : '';
		$link8   = isset( $instance['link8'] ) ? esc_attr( $instance['link8'] ) : '';
		$text9   = isset( $instance['text9'] ) ? esc_attr( $instance['text9'] ) : '';
		$link9   = isset( $instance['link9'] ) ? esc_attr( $instance['link9'] ) : '';
		$text10   = isset( $instance['text10'] ) ? esc_attr( $instance['text10'] ) : '';
		$link10   = isset( $instance['link10'] ) ? esc_attr( $instance['link10'] ) : '';
?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'text1' )); ?>"><?php esc_html_e( 'Text Page 1:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'text1' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'text1' )); ?>" type="text" value="<?php echo esc_attr($text1); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'link1' )); ?>"><?php esc_html_e( 'Link Page 1:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'link1' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'link1' )); ?>" type="text" value="<?php echo esc_attr($link1); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'text2' )); ?>"><?php esc_html_e( 'Text Page 2:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'text2' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'text2' )); ?>" type="text" value="<?php echo esc_attr($text2); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'link2' )); ?>"><?php esc_html_e( 'Link Page 2:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'link2' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'link2' )); ?>" type="text" value="<?php echo esc_attr($link2); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'text3' )); ?>"><?php esc_html_e( 'Text Page 3:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'text3' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'text3' )); ?>" type="text" value="<?php echo esc_attr($text3); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'link3' )); ?>"><?php esc_html_e( 'Link Page 3:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'link3' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'link3' )); ?>" type="text" value="<?php echo esc_attr($link3); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'text4' )); ?>"><?php esc_html_e( 'Text Page 4:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'text4' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'text4' )); ?>" type="text" value="<?php echo esc_attr($text4); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'link4' )); ?>"><?php esc_html_e( 'Link Page 4:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'link4' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'link4' )); ?>" type="text" value="<?php echo esc_attr($link4); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'text5' )); ?>"><?php esc_html_e( 'Text Page 5:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'text5' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'text5' )); ?>" type="text" value="<?php echo esc_attr($text5); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'link5' )); ?>"><?php esc_html_e( 'Link Page 5:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'link5' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'link5' )); ?>" type="text" value="<?php echo esc_attr($link5); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'text6' )); ?>"><?php esc_html_e( 'Text Page 6:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'text6' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'text6' )); ?>" type="text" value="<?php echo esc_attr($text6); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'link6' )); ?>"><?php esc_html_e( 'Link Page 6:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'link6' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'link6' )); ?>" type="text" value="<?php echo esc_attr($link6); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'text7' )); ?>"><?php esc_html_e( 'Text Page 7:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'text7' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'text7' )); ?>" type="text" value="<?php echo esc_attr($text7); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'link7' )); ?>"><?php esc_html_e( 'Link Page 7:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'link7' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'link7' )); ?>" type="text" value="<?php echo esc_attr($link7); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'text8' )); ?>"><?php esc_html_e( 'Text Page 8:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'text8' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'text8' )); ?>" type="text" value="<?php echo esc_attr($text8); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'link8' )); ?>"><?php esc_html_e( 'Link Page 8:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'link8' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'link8' )); ?>" type="text" value="<?php echo esc_attr($link8); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'text9' )); ?>"><?php esc_html_e( 'Text Page 9:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'text9' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'text9' )); ?>" type="text" value="<?php echo esc_attr($text9); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'link9' )); ?>"><?php esc_html_e( 'Link Page 9:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'link9' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'link9' )); ?>" type="text" value="<?php echo esc_attr($link9); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'text10' )); ?>"><?php esc_html_e( 'Text Page 10:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'text10' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'text10' )); ?>" type="text" value="<?php echo esc_attr($text10); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'link10' )); ?>"><?php esc_html_e( 'Link Page 10:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'link10' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'link10' )); ?>" type="text" value="<?php echo esc_attr($link10); ?>" />
		</p>
<?php
	}
}

class printress_widget_footer_contact extends WP_Widget {
	function __construct() {
		$widget_ops = array('classname' => 'widget_footer_contact', 'description' => esc_html__( "Footer Contact", 'printress') );
		parent::__construct('footer_contact', esc_html__('Footer Contact', 'printress'), $widget_ops);
		$this->alt_option_name = 'widget_footer_contact';
	}
	function widget($args, $instance) {
		$cache = wp_cache_get('printress_widget_footer_contact', 'widget');
		if ( !is_array($cache) )
			$cache = array();
		if ( ! isset( $args['widget_id'] ) )
			$args['widget_id'] = $this->id;
		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo wp_specialchars_decode(esc_attr($cache[ $args['widget_id'] ]));
			return;
		}
		ob_start();
		extract($args);
		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Contact', 'printress' );
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$phone = ( ! empty( $instance['phone'] ) ) ? $instance['phone'] : esc_html__( '', 'printress' );
		$phone = apply_filters( 'widget_title', $phone, $instance, $this->id_base );
		$mail  = ( ! empty( $instance['mail'] ) ) ? $instance['mail'] : esc_html__( '', 'printress' );
		$mail  = apply_filters( 'widget_title', $mail, $instance, $this->id_base );
		$maplink = ( ! empty( $instance['maplink'] ) ) ? $instance['maplink'] : esc_html__( '', 'printress' );
		$maplink = apply_filters( 'widget_title', $maplink, $instance, $this->id_base );
		$address = ( ! empty( $instance['address'] ) ) ? $instance['address'] : esc_html__( '', 'printress' );
		$address = apply_filters( 'widget_title', $address, $instance, $this->id_base );
		?>
		<?php echo wp_specialchars_decode(esc_attr($before_widget),ENT_QUOTES); ?>
		<div class="bd-footer__widget bd-footer__widget1 pl-50 pr-40 mb-50">
			<div class="bd-footer__title">
				<h4><?php echo esc_attr($title); ?></h4>
			</div>
			<div class="bd-footer__contact">
				<ul>
					<?php if ('' != $phone) { ?>
						<li><a href="tel:<?php echo esc_attr($phone); ?>"><?php echo esc_attr($phone); ?></a></li>
					<?php } ?>
					<?php if ('' != $mail) { ?>
						<li><a href="mailto:<?php echo esc_attr($mail); ?>"><?php echo esc_attr($mail); ?></a></li>
					<?php } ?>
					<?php if (('' != $maplink) && ('' != $address)) { ?>
						<li><a href="<?php echo esc_attr($maplink); ?>" target="_blank"><?php echo esc_attr($address); ?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<?php echo wp_specialchars_decode(esc_attr($after_widget)); ?>
<?php
		// Reset the global $the_post as this query will have stomped on it
		$cache[$args['widget_id']] = ob_get_flush();
		wp_cache_set('printress_widget_footer_contact', $cache, 'widget');
	}
	function update( $new_instance, $old_instance ) {
		$instance 				=array();
		$instance['title'] 		= strip_tags($new_instance['title']);
		$instance['phone'] 		= strip_tags($new_instance['phone']);
		$instance['mail'] 		= strip_tags($new_instance['mail']);
		$instance['maplink'] 	= strip_tags($new_instance['maplink']);
		$instance['address'] 	= strip_tags($new_instance['address']);
		$alloptions 			= wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['widget_footer_contact']) )
			delete_option('widget_footer_contact');
		return $instance;
	}
	function form( $instance ) {
		$title     	= isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$phone   	= isset( $instance['phone'] ) ? esc_attr( $instance['phone'] ) : '';
		$mail   	= isset( $instance['mail'] ) ? esc_attr( $instance['mail'] ) : '';
		$maplink   	= isset( $instance['maplink'] ) ? esc_attr( $instance['maplink'] ) : '';
		$address   	= isset( $instance['address'] ) ? esc_attr( $instance['address'] ) : '';
?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'phone' )); ?>"><?php esc_html_e( 'Phone:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'phone' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'phone' )); ?>" type="text" value="<?php echo esc_attr($phone); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'mail' )); ?>"><?php esc_html_e( 'Mail:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'mail' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'mail' )); ?>" type="text" value="<?php echo esc_attr($mail); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'maplink' )); ?>"><?php esc_html_e( 'Map Link:', 'printress' ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'maplink' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'maplink' ) ); ?>" type="text" rows="5"><?php echo esc_attr( $maplink ); ?></textarea>
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'address' )); ?>"><?php esc_html_e( 'Address:', 'printress' ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'address' ) ); ?>" type="text" rows="5"><?php echo esc_attr( $address ); ?></textarea>
		</p>
		
<?php
	}
}

class printress_widget_footer_subscribe extends WP_Widget {
	function __construct() {
		$widget_ops = array('classname' => 'widget_footer_subscribe', 'description' => esc_html__( "Footer Subscribe", 'printress') );
		parent::__construct('footer_subscribe', esc_html__('Footer Subscribe', 'printress'), $widget_ops);
		$this->alt_option_name = 'widget_footer_subscribe';
	}
	function widget($args, $instance) {
		$cache = wp_cache_get('printress_widget_footer_subscribe', 'widget');
		if ( !is_array($cache) )
			$cache = array();
		if ( ! isset( $args['widget_id'] ) )
			$args['widget_id'] = $this->id;
		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo wp_specialchars_decode(esc_attr($cache[ $args['widget_id'] ]));
			return;
		}
		ob_start();
		extract($args);
		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Subscribe us', 'printress' );
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$content = ( ! empty( $instance['content'] ) ) ? $instance['content'] : esc_html__( 'Content Footer Subscribe', 'printress' );
		$content = apply_filters( 'widget_title', $content, $instance, $this->id_base );
		?>
		<?php echo wp_specialchars_decode(esc_attr($before_widget),ENT_QUOTES); ?>

		<div class="bd-footer__widget bd-footer__widget1 p2-10 mb-50">
			<div class="bd-footer__title">
				<h4><?php echo esc_attr($title); ?></h4>
			</div>
			<p class="mb-20"><?php echo esc_attr($content); ?></p>
			<?php echo do_shortcode('[contact-form-7 id="190" title="Footer Form Submit"]'); ?>
		</div>
		<?php echo wp_specialchars_decode(esc_attr($after_widget)); ?>
<?php
		// Reset the global $the_post as this query will have stomped on it
		$cache[$args['widget_id']] = ob_get_flush();
		wp_cache_set('printress_widget_footer_subscribe', $cache, 'widget');
	}
	function update( $new_instance, $old_instance ) {
		$instance 				= array();
		$instance['title'] 		= strip_tags($new_instance['title']);
		$instance['content'] 	= strip_tags($new_instance['content']);
		$alloptions 			= wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['widget_footer_subscribe']) )
			delete_option('widget_footer_subscribe');
		return $instance;
	}
	function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$content   = isset( $instance['content'] ) ? esc_attr( $instance['content'] ) : '';
		// $shortcode = isset( $instance['shortcode'] ) ? esc_attr( $instance['shortcode'] ) : '';
?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title:', 'printress' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'content' )); ?>"><?php esc_html_e( 'Content:', 'printress' ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'content' ) ); ?>" type="text" rows="5"><?php echo esc_attr( $content ); ?></textarea>
		</p>
<?php
	}
}


function printress_register_custom_widgets_footer() {
	register_widget( 'printress_widget_footer_about' );
	register_widget( 'printress_widget_footer_other_page' );
	register_widget( 'printress_widget_footer_contact' );
	register_widget( 'printress_widget_footer_subscribe' );
}
add_action( 'widgets_init', 'printress_register_custom_widgets_footer' );