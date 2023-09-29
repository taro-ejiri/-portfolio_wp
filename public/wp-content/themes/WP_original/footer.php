</div><!-- /.l-wrapper -->
<!-- Back to topButton -->
<p class="c-pageTopBtn">
  <a href="#header">
    PAGE<br>TOP
    <span class="c-pageTopBtn--arrow"></span>
  </a>
</p>
<footer class="l-footer">
  <div class="c-shareBtn">
    <ul>
      <!-- <li><a href="https://twitter.com/et_web_tokyo"><img src="<?php bloginfo('template_url'); ?>/assets/img/sns/twitter_out.png" alt="twitter" width="50" height="50"></a></li>
      <li><a href="https://www.facebook.com/sept.eleven.jpn"><img src="<?php bloginfo('template_url'); ?>/assets/img/sns/fb_out.png" alt="facebook" width="50" height="50"></a></li>
      <li><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/sns/line_out.png" alt="LINE" width="50" height="50"></a></li> -->
      <li><a href="https://github.com/taro-ejiri/portfolio_wp" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/sns/github_out.png" alt="github" width="50" height="50"></a></li>
    </ul>
  </div>
  <!-- <div class="cp_right">※一時的にSNSボタンのリンクを取り消してます</div> -->
  <div class="l-footer__copyWriter">©2017-2023 ET WEB DESIGN</div>
</footer>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/jquery-3.6.4.min.js"></script>
<!-- slick -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/slick/slick.min.js"></script>
<!-- ShareButton -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/jquery.easy-rollover.min.js"></script>
<!-- works sort -->
<?php if (is_post_type_archive('works')) : ?>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/works/masonry.pkgd.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/works/extention.js"></script>
<?php endif; ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>