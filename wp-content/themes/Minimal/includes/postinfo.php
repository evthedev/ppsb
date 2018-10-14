<?php if (!is_single() && get_option('minimal_postinfo1') <> '') { ?>
	<p class="post-meta"><?php esc_html_e('Posted','Minimal'); ?> <?php if (in_array('author', get_option('minimal_postinfo1'))) { ?> <?php esc_html_e('by','Minimal'); ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('minimal_postinfo1'))) { ?> <?php esc_html_e('on','Minimal'); ?> <?php the_time(get_option('minimal_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('minimal_postinfo1'))) { ?> <?php esc_html_e('in','Minimal'); ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('minimal_postinfo1'))) { ?> | <?php comments_popup_link(esc_html__('0 comments','Minimal'), esc_html__('1 comment','Minimal'), '% '.esc_html__('comments','Minimal')); ?><?php }; ?></p>
<?php } elseif (is_single() && get_option('minimal_postinfo2') <> '') { ?>
	<p class="post-meta">
		<?php esc_html_e('Posted','Minimal'); ?> <?php if (in_array('author', get_option('minimal_postinfo2'))) { ?> <?php esc_html_e('by','Minimal'); ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('minimal_postinfo2'))) { ?> <?php esc_html_e('on','Minimal'); ?> <?php the_time(get_option('minimal_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('minimal_postinfo2'))) { ?> <?php esc_html_e('in','Minimal'); ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('minimal_postinfo2'))) { ?> | <?php comments_popup_link(esc_html__('0 comments','Minimal'), esc_html__('1 comment','Minimal'), '% '.esc_html__('comments','Minimal')); ?><?php }; ?>
	</p>
<?php }; ?>