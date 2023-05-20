<?php
/**
 * 归档模板
 *
 * @package custom
 */
 ?>
<?php $this->need('public/secheader.php'); 
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    <div class="content-card">
        <div class="typecho-user-text">
		<div class="typecho-text text-tream " >


        </div>
                       <h1 class="post-title" itemprop="name headline">「&nbsp&nbsp<?php $this->title() ?>&nbsp&nbsp」</h1>
       <div class="content-text-2 "  id="write">

           <article>
               <?php

                    $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
               $year = 0;
               $mon = 0;
               $i = 0;
               $j = 0;
               $output = '<div id="archives">';
               while ($archives->next()):
               $year_tmp = date('Y', $archives->created);
               $mon_tmp = date('m', $archives->created);
               $y = $year;
               $m = $mon;
               if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';
               if ($year != $year_tmp && $year > 0) $output .= '</ul>';
               if ($year != $year_tmp) {
               $year = $year_tmp;
               $output .= '<h2 >' . $year . ' 年</h2><ul class="article-ach">';
                   }
                   $output .= '<li class="list-style-art"><span>' . date('n月d日    ', $archives->created) . '</span><a href="' . $archives->permalink . '">' . $archives->title . '</a></li>';
                   endwhile;
                   $output .= '</ul></li></ul></div>';
               echo $output;
               ?>
           </article>
    </div>
    </div>
    </div>
</div>
</div>
</div>
</div>
    </div>
</body>
	      <script>
      //手机端导航栏控制函数
      $("#m-nav-switch").click(function(){
        if($("#header-nav-m").css("display")=='none'){
      		 $("#header-nav-m").slideDown();
           $(this).animate(
           　　{opacity:'toggle'},
           　　200,
           　　null,
           　　function(){
           　　　　$("#m-nav-switch").attr("src","<?php $this->options->siteUrl(); ?>/usr/themes/nosky/assets/img/x.svg");
           　　　　$("#m-nav-switch").animate({opacity:'toggle'},200);
           　　}
           );
      	}else{
      		 $("#header-nav-m").slideUp();
           $(this).animate(
           　　{opacity:'toggle'},
           　　200,
           　　null,
           　　function(){
           　　　　$("#m-nav-switch").attr("src","<?php $this->options->siteUrl(); ?>/usr/themes/nosky/assets/img/menu.svg");
           　　　　$("#m-nav-switch").animate({opacity:'toggle'},200);
           　　}
           );
      	 }
      });
      </script>
</div>
<!-- end main -->
</body>