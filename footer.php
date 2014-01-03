
<footer role="contentinfo" class="foot">
  <h2 aria-level="2" role="heading" class="section">Informations additionnel sur la page</h2>
  <div class="wrapper">
    <a class="reader" href="#main" title="Retourner au début du contenu">Remonter au contenu</a>
    <div class="wrapper sectionContent">
      <div class="footer link ">
       <?php wp_nav_menu( array('menu' => 'main-menu', 'walker' => new Custom_Walker_Nav_Menu(1)) ); ?>
      </div>

    </div>
    <div class="wrapper">
      <div class="lastArticle">
       <h4 class="titleIndex" aria-level="4" role="heading" >Derniers articles lus</h4>
       <hr/>
       <?php $args = array( 'post_type' => 'liens', 'posts_per_page' => 4 );
       $loop = new WP_Query( $args );
       if($loop->have_posts()):
        ?><ul><?php
       while ( $loop->have_posts() ) : $loop->the_post();?>
       <li><a href="<?php the_field('url')?>" title="Aller sur l'article"><?php the_title(); ?></a></li> 
       <?endwhile;
       ?></ul><?php
       else:?>
       <p>Aucun articles lus...</p>
     <?php endif;
     wp_reset_query();?>
     </div>
     <div class="usefull">
       <h4 aria-level="4" role="heading" class="titleIndex">Liens utiles</h4>
       <hr/>
       <?php $args = array( 'post_type' => 'conseil', 'posts_per_page' => 4,'orderby'=>'rand' );
       $loop = new WP_Query( $args );
       if($loop->have_posts()):
        ?><ul><?php
       while ( $loop->have_posts() ) : $loop->the_post();?>
       <li><a href="<?php the_field('url')?>" title="Aller sur le lien"><?php the_title(); ?></a></li>   
       <?endwhile;
       ?></ul><?php
       else:?>
       <p>Aucun lien à conseiller...</p>
     <?php endif;
     wp_reset_query(); ?>
     </div>
     <div class="footer reseaux social">
       <h4 aria-level="4" role="heading" class="titleIndex">Retrouvez moi la-bas !</h4>
       <hr/>
       <ul >
       <?php $args = array( 'post_type' => 'reseaux','posts_per_page' => 5);
       $loop = new WP_Query( $args );
       if($loop->have_posts()):
       while ( $loop->have_posts() ) : $loop->the_post();?>

         <li class="<?php echo strtolower(get_the_title()); ?> animated bounce"><a href="<?php the_field('url'); ?>" title="Aller sur ma page <?php the_title(); ?>"><?php the_title(); ?></a></li>
         
       <?endwhile;
       else:?>
       <p>Je suis sur aucun réseau...</p>
     <?php endif;
     wp_reset_query(); ?>
       </ul> 
     </div>
     <span class="copyright">
       Crée par Julien Roland, 2013
     </span>
   </div>
 </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.heplbox.js"></script>
<script>
  jQuery( function() {
    jQuery( ' .caption a.thumbnail' ).heplbox();
    jQuery( ' .listBlog a.thumbnail' ).heplbox();
    jQuery( ' .projet a.thumbnail' ).heplbox();
  } );

</script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>