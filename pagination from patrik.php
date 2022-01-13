<?php
/*Template Name: Packaging & Stationery */
get_header('home');
?>
    <section class="home_cntnr">
        <section class="cmn_gap hdr_top_gap">
            <div class="container">
                <div class="innr_hdr cmn_otr text-center">
                    <h1 class="page-title text-line"><?php the_title();?></h1>
                </div>
                <div class="text-center customize__contact_desc contact_desc stationery">

                    <p><?php the_content(); ?> </p>
                </div>


                <!-- desktop -->
                <div class="row pro-outr desktop_plisting">
                    <!--	    pagination-->
                    <?php
                    $current_page = max( 1, get_query_var('packaging-stationery_page') );
                    $params = array(
                        'posts_per_page' => 6,
                        'paged' => $current_page,
                        'post_type' => 'product',
                        'product_cat' => 'packaging',
                    );
                    $wc_query = new WP_Query($params);

                    ?>
                    <!--	   end pagination-->
                    <!--        --><?php
                    //      $params = array(
                    //    'posts_per_page' => -1,
                    //    'post_type' => 'product',
                    //    'product_cat' => 'packaging',
                    //);
                    // $wc_query = new WP_Query($params);
                    //?>
                    <?php if ($wc_query->have_posts()) :  ?>
                        <?php while ($wc_query->have_posts()) :
                            $wc_query->the_post();  ?>
                            <div class="col-md-4 col-sm-6 packaging-card-item">
                                <div class="pro-inn-img">
                                    <a href="<?php the_permalink(); ?>"> <img class="pr-im" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""/></a>
                                    <a href="<?php the_permalink(); ?>"> <img class="pr-im-hover" src="<?php echo get_field('image_with_scarf') ['url']; ?>" alt="<?php echo get_field('image_with_scarf')['alt']; ?>">
                                    </a>
                                    <a href="<?php the_permalink(); ?>" class="pro-btm-innr">
                                        <h6>See Pricing and Customize</h6>
                                    </a>
                                </div>
                                <!--                       <a href="--><?php //the_permalink(); ?><!--">-->
                                <!--                    <div class="p_gallery">-->
                                <!--                    -->
                                <!--                   --><?php
                                //	                global $product;
                                //                    $attachment_ids = $product->get_gallery_attachment_ids();
                                //                    echo '<div class="p_gallery_slider">';
                                //                    foreach( array_slice( $attachment_ids, 0,100 ) as $attachment_id ) {
                                //
                                //                    $thumbnail_url = wp_get_attachment_image_src( $attachment_id, 'full' )[0];
                                //	                 echo ' <div>
                                //                    <div class="p_gallery_box">
                                //                  <img src=" '.$thumbnail_url .' " >
                                //                    </div>
                                //                    </div>';
                                //	                 }
                                //                    echo '</div>'; ?>
                                <!--                   -->
                                <!--                </div>-->
                                <!--                </a> -->
                                <h6 class="packaging-card-title"><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h6>
                            </div>



                        <?php endwhile; ?>
                        <?php wp_reset_postdata();  ?>
                    <?php else:  ?>
                        <p>
                            <?php _e( 'No Products' );  ?>
                        </p>
                    <?php endif; ?>

                </div>
                <!--	pagination-->
                <?php if($wc_query->max_num_pages > 1) :
                    ?>
                    <div class="custom-pagination">

                        <?php  echo paginate_links( [
                            'base' => str_replace('', 1 == $current_page ? '' : "", "?packaging-stationery=%#%"),
                            'format' => '?packaging-stationery=%#%',
                            'current' => $current_page,
                            'total'   => $wc_query->max_num_pages,
                            'prev_next'    => True,
                            'prev_text' => __(' '),
                            'next_text' => __(' '),
                        ]);?>
                    </div>
                <?php  endif;?>
                <!--	end Pagination-->
                <!-- mobile -->


                <!--<div class="row pro-outr mobile_plisting">-->
                <!--        --><?php
                //      $params = array(
                //    'posts_per_page' => -1,
                //    'post_type' => 'product',
                //    'product_cat' => 'packaging',
                //);
                // $wc_query = new WP_Query($params);
                //?>
                <?php //if ($wc_query->have_posts()) :  ?>
                <?php //while ($wc_query->have_posts()) :
                //                $wc_query->the_post();  ?>
                <!--            <div class="col-md-4 col-sm-6">-->
                <!--                       <div class="pro-inn-img">-->
                <!--                       <a href="javascript:void(0);"> <img class="pr-im" src="--><?php //echo get_the_post_thumbnail_url(); ?><!--" alt=""/></a>-->
                <!--                           <a href="javascript:void(0);"> <img class="pr-im-hover" src="--><?php //echo get_field('image_with_scarf') ['url']; ?><!--" alt="--><?php //echo get_field('image_with_scarf')['alt']; ?><!--"> -->
                <!--                           </a>-->
                <!--                            <a href="--><?php //the_permalink(); ?><!--" class="pro-btm-innr">-->
                <!--                                <h6>See Pricing and Customize</h6>-->
                <!--                            </a>-->
                <!--                        </div>-->
                <!--                       <a href="--><?php //the_permalink(); ?><!--">-->
                <!--                     <div class="p_gallery">-->
                <!--                    -->
                <!--                   --><?php
                //	                global $product;
                //                    $attachment_ids = $product->get_gallery_attachment_ids();
                //                    echo '<div class="p_gallery_slider">';
                //                    foreach( array_slice( $attachment_ids, 0,100 ) as $attachment_id ) {
                //
                //                    $thumbnail_url = wp_get_attachment_image_src( $attachment_id, 'full' )[0];
                //	                 echo ' <div>
                //                    <div class="p_gallery_box">
                //                  <img src=" '.$thumbnail_url .' " >
                //                    </div>
                //                    </div>';
                //	                 }
                //                    echo '</div>'; ?>
                <!--                   -->
                <!--                </div> -->
                <!--                </a> -->
                <!--                    <h6><a href="--><?php //the_permalink();  ?><!--">--><?php //the_title(); ?><!--</a></h6>-->
                <!--                    </div>-->
                <!---->
                <!---->
                <?php //endwhile; ?>
                <?php //wp_reset_postdata();  ?>
                <?php //else:  ?>
                <!--<p>-->
                <?php //_e( 'No Products' );  ?>
                <!--</p>-->
                <?php //endif; ?>
                <!---->
                <!--</div>-->




            </div>
            </div>
        </section>

    </section>

<?php
get_footer('home');
?>