<?php get_header();  ?>

<div class="blog">
    <div class="wrap">
        <h2 id="titulo">BLOG</h2>

        <div class="box-liste-posts">

            <?php
                $args = array('post_type'=>'post', 'showposts'=>2);
                $my_posts = get_posts( $args );
            ?>

            <?php $cont = 1;  if( $my_posts)  : foreach( $my_posts as $post )  : setup_postdata( $post ); ?>
                <div class="liste-posts">
                    <div class="row container" id="linha">
                        <div class="col s12 m6" id="linha-esquerda">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="col s12 m6" id="linha-direita">  
                                <div class="col s12 l12">
                                    <h4><?php the_title(); ?></h4>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="waves-effect waves-light btn">Leia mais</a>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="divider container"></div>

            <?php $cont ++; endforeach; endif ?>

        </div>
    </div>
</div>

<?php get_footer();  ?>