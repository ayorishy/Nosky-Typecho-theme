<?php
/**
 * 自定义首页模板
 *
 * @package index
 */
 ?>

<?php
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('public/header.php');
?>
			<img id="header-avatar-index" class="animate__animated animate__fadeIn" src="<?php $this->options->logoCss(); ?>" />
			<div id="main-container" class="animate__animated animate__fadeIn">
				<style>
					body::-webkit-scrollbar {
					          display: none;
					        }
				</style>
				<div id="home-mid">
					<div id="home-mid-container" class="clear">
						<div id="home-mid-container-left" class="left">
							<h2><?php $this->options->logoName(); ?></h2>
							<span><?php $this->options->description() ?></span>
						</div>
						<div class="right">
						</div>
					</div>
				</div>
				<div id="home-bottom">
					<div id="home-bottom-container" class="clear">
						<div class="left">
							<p><?php $this->options->description1() ?>
								<br><?php $this->options->description2() ?></p>
							<p><?php $this->options->description3() ?>
								<br><?php $this->options->description4() ?></p>
							<p><?php $this->options->description5() ?>
								<br><?php $this->options->description6() ?></p>
						</div>
						<div class="right">
							<nav class="nav-right">
                                <a href="<?php $this->options->link1() ?>"><i class="fa fa-lg fa-home"></i></a>
                                <a href="<?php $this->options->link2() ?>"><i class="fa fa-lg fa-github"></i></a>
                                <a href="<?php $this->options->link3() ?>"><i class="fa fa-lg fa-qq"></i></a>
							</nav>
						</div>
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
		</div>
	</body>
</html>
</body>