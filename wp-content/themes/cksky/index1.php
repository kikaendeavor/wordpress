<?php get_header(); ?>

	
     <div id="commend_h">  
     <div class="recommend_r_h"></div>
        <div class="recommend_l_h"></div>
        <div class="clear"></div>
   </div>
   <div id="recommend">
   <div id="hotbox">
   <h1></h1>
   
    <ul>
<?php //get_mostcommented($limit = 10); ?>
<?php random_posts($limit = 10); ?>
</ul>
   </div>
   <div id="combox">
   <h1></h1>
   <ul>
   <script language="javascript" src="/gg/gg.js"></script>
   </ul>
   </div>
   <div id="tagbox">
   <?php wp_cumulus_insert(); ?>
   <div class="clear"></div>
   <script type="text/javascript"><!--
google_ad_client = "pub-8884570557731258";
/* 首页头部234x60, 创建于 09-5-27 */
google_ad_slot = "3193814506";
google_ad_width = 234;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src=" http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
 
   </div>
   <div class="clear"></div>
   
   </div>

<div id="commend_f">  
    <div class="recommend_r_f"></div>
     <div class="recommend_l_f"></div>
      <div class="clear"></div>
   </div>
   
   <div id="user_info">
   <span><?php if(!empty($_COOKIE['cksky_author'])){echo "<strong>".$_COOKIE['cksky_author']."</strong>欢迎你再次光临CKSKY.CN,有你的参与是本站的荣幸";}?>
   </span>
   <a id="twriter" href="http://twitter.com/ckken" target="_blank"> </a>
    <a id="call" href="/index.php/other" target="_blank"> </a>
     <a id="emall" href="mailto:ckken@qq.com" target="_blank"> </a>
    <a id="rss" href="http://feeds2.feedburner.com/cksky" target="_blank"> </a>
   <div class="clear"></div>
   </div>
   <div id="index_box_head">
   <?php wp_pagenavi(); ?>
   </div>
   <div class="line"></div>
  <div id="index_content">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		
		<div class="post">
			
           
            <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a><span class="date_time"><?php the_time('y-m-d G:i ') ?>
            
           <?php the_author_posts_link(); ?> 
		   <?php comments_popup_link(__('No Comments ', 'kubrick'), __('1 Comment ', 'kubrick'), __('% Comments ', 'kubrick'), '', __('Comments Closed ', 'kubrick') ); ?>
              
            </span></h1>
 <div class="wenzhang_info"> <?php if(function_exists('the_views')) {the_views();} ?>  
<?php the_tags(__('Tags:', 'kubrick') . ' ', ', ', ' - '); ?>
		  <?php printf(__('Posted in %s', 'kubrick'), get_the_category_list(', ')); ?>
         
          
              </div>
              
              
                <?php 
              $szPostContent = $post->post_content; 
              $szSearchPattern = '~<img [^\>]*\ />~'; // 搜索所有符合的图片 
              preg_match_all( $szSearchPattern, $szPostContent, $aPics ); 
/*			  $szSearchPattern ='~(?<=src=")http://[^\s]*(?=")~';*/
					  
              $iNumberOfPics = count($aPics[0]); // 检查一下至少有一张图片
			   /* preg_match( $szSearchPattern, $aPics[0][0], $aPics_one);
			  	print_r($aPics_one);*/
		/*	$szSearchPattern ='~(?:width="([^"])*")|(?:height="([^"])*")|(class="[^"]*")|(alt="[^"]*")~';
			$aPics_one=preg_replace($szSearchPattern ,' ',$aPics[0][0]);
            print_r($aPics_one);*/
              if ( $iNumberOfPics > 0 ) { 
             
              echo '<div align="center">'.$aPics[0][0].'</div>'; 
      
              }; 
            
              ?>
              
              
              <p><?php
			  //the_content(__('read more about me.')); 
			  echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 290,"...");
			  ?>
           
               <span class="read_more">
              <a href="<?php the_permalink() ?>" target="_blank">read more about me.</a>
              <a href="http://feeds2.feedburner.com/cksky" target="_blank">feed 订阅</a>
              </span>
              </p>
			
             
		</div>
		
		<?php comments_template(); ?>
		
		<?php endwhile; ?>

		
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>


	</div>
    
    
    <div id="index_right">
    
    <div class="post" id="index_link">
 <h1>网站操作</h1>
 <ul>
   <li><a href="http://www.cksky.cn/">电信镜像</a></li>
 <li><a href="http://wt.cksky.cn">网通镜像</a></li>
<li><a href="/index.php/other#down">资源下载</a></li>
<li><a href="/index.php/other#js">JS加密</a></li>
<li><a href="/jquery/">jQuery1.3 API</a></li>
<li><a href="/index.php/other#about">关于我们</a></li>


 </ul>
 <div class="clear"></div>
</div>
    
    <!-- Start Recent Comments -->

<div class="post">
<h1><?php _e('最新评论') ?></h1> 
<!-- START of script generated by WP-RecentComments --> 
<link rel="stylesheet" href="/wp-content/plugins/wp-recentcomments/css/wp-recentcomments.css" type="text/css" media="screen" /> 
<script type="text/javascript" src="/wp-content/plugins/wp-recentcomments/js/wp-recentcomments.js"></script> 
<!-- END of script generated by WP-RecentComments --> 
<ul id="index_recent_comments"><?php wp_recentcomments(); ?></ul>

<!-- End Recent Comments -->
 </div>
 
 <div class="post">
 <h1>最热文章</h1>
 <ul class="index_slide_list">
 <?php if (function_exists('get_most_viewed')): ?>   
   <?php get_most_viewed(); ?>   
<?php endif; ?>
</ul>
</div>
 </div>
    
<div class="clear"></div>
    <div class="navigation">
		
            <?php wp_pagenavi(); ?>   
            <div class="clear"></div>
		</div>
        
        


<?php get_footer(); ?>