<?php
/**
 * 友链模板
 *
 * @package custom
 */
 ?>
<?php $this->need('public/secheader.php'); ?>
<div id="main-container" class="animate__animated animate__fadeIn">
	<div id="links">
		<div class="link-item">
			<img src="https://q1.qlogo.cn/g?b=qq&nk=1139074074&s=640" />
			<h3>1nonly's blog</h3>
			<span>专注于学习的小白</span>
			<a href="https://blog.nonly.cn/" target="_blank">
				<i class="fa fa-lg fa-link"></i>
			</a>
		</div>

		<div class="link-item">
			<img src="https://jipa.uk/static/avatar.jpg" />
			<h3>JIPA233の小窝</h3>
			<span>契约将众生分为低等和高等</span>
			<a href="https://jipa.uk" target="_blank">
				<i class="fa fa-lg fa-link"></i>
			</a>
		</div>
		
		<div class="link-item">
			<img src="https://q1.qlogo.cn/g?b=qq&nk=2332528030&s=640" />
			<h3>光芒万丈</h3>
			<span>一个医务工作者的碎碎念</span>
			<a href="https://www.cunzher.cn" target="_blank">
				<i class="fa fa-lg fa-link"></i>
			</a>
		</div>
		
	</div>
</div>
	
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