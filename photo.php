<?php
/**
 * 图库模板
 *
 * @package custom
 */
 ?>

<?php $this->need('public/secheader.php'); ?>
  <div id="main-container" class="animate__animated animate__fadeIn">
<div id="photos" class="clear">

  <div class='image-item' data-src='<?php $this->options->photo1() ?>' style='background-image:url(<?php $this->options->photo1() ?>)'>
  </div>

  <div class='image-item' data-src='<?php $this->options->photo2() ?>' style='background-image:url(<?php $this->options->photo2() ?>)'>
  </div>
  
    <div class='image-item' data-src='<?php $this->options->photo3() ?>' style='background-image:url(<?php $this->options->photo3() ?>)'>
  </div>
  
    <div class='image-item' data-src='<?php $this->options->photo4() ?>' style='background-image:url(<?php $this->options->photo4() ?>)'>
  </div>
  
    <div class='image-item' data-src='<?php $this->options->photo5() ?>' style='background-image:url(<?php $this->options->photo5() ?>)'>
  </div>
  
    <div class='image-item' data-src='<?php $this->options->photo6() ?>' style='background-image:url(<?php $this->options->photo6() ?>)'>
  </div>
  
    <div class='image-item' data-src='<?php $this->options->photo7() ?>' style='background-image:url(<?php $this->options->photo7() ?>)'>
  </div>

  <div class='image-item' data-src='<?php $this->options->photo8() ?>' style='background-image:url(<?php $this->options->photo8() ?>)'>
  </div>

  <div id="photo-cover">
    <div id="photo-cover-container">
      <img src=""></img>
    </div>
  </div>
</div>


<script>
$('.image-item').click(function(){
  $("#photo-cover img").attr("src",$(this).attr("data-src"));
  $("#photo-cover").fadeIn();
})
$("#photo-cover").click(function(){
  $(this).fadeOut();
})
</script>
            </div>
              <div class="footer-text">all done~</div>
      
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
      </body>
</html>
