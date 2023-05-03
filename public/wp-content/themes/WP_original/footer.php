</div><!-- /.wrapper -->
<!-- Back to topButton -->
<p class="pageTop">
	<a href="#header">
		PAGE<br>TOP
		<span class="arrow-top"></span>
	</a>
</p>
<footer>
	<div class="f_share_btn">
		<ul>
			<!-- <li><a href="https://twitter.com/et_web_tokyo"><img src="<?php bloginfo('template_url'); ?>/img/sns/twitter_out.png" alt="twitter" width="50"></a></li>
			<li><a href="https://www.facebook.com/sept.eleven.jpn"><img src="<?php bloginfo('template_url'); ?>/img/sns/fb_out.png" alt="facebook" width="50"></a></li> -->
			<li><a href="https://github.com/taro-ejiri/portfolio_wp" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/sns/github_out.png" alt="github" width="50"></a></li>
			<!-- <li><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/sns/line_out.png" alt="LINE" width="50"></a></li> -->
		</ul>
	</div>
	<!-- <div class="cp_right">※一時的にSNSボタンのリンクを取り消してます</div> -->
	<div class="cp_right">©2017-2023 ET WEB DESIGN</div>
</footer>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-3.6.4.min.js"></script>
<?php if ( is_front_page() || is_post_type_archive('works') || is_singular('works') ) : ?>
<!-- slick -->
<script src="<?php bloginfo('template_url'); ?>/js/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
<?php endif; ?>

<!-- ShareButton -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easy-rollover.min.js"></script>

<?php if ( is_post_type_archive('works') ) : ?>
<!-- works sort -->
<script src="<?php bloginfo('template_url'); ?>/js/works/masonry.pkgd.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/works/extention.js"></script>
<?php endif; ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>