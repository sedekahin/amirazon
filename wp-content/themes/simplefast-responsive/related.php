<div class="rel"><h2> Related For <?php the_title(); ?> </h2><ul>
<?php $orig_post = $post; global $post; $categories = get_the_category($post->ID);
 if ($categories) { $category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
$args=array('category__in' => $category_ids,'post__not_in' => array($post->ID),'posts_per_page'=> 4, 'orderby' => 'rand' );
 $my_query = new wp_query( $args );
if( $my_query->have_posts() ) {while( $my_query->have_posts() ) { $my_query->the_post();?>
<div class="post-sidebar">
<div class="posttitle post-<?php echo $postCount ;?>">
<li><h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3></li> </div>
<div style="clear: both"></div>
</div>
<?php
}
}

}
$post = $orig_post;
wp_reset_query(); ?></ul><div style="clear: both"></div></div>