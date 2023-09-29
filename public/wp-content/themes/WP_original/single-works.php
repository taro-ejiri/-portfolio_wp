<?php get_header(); ?>
<!-- [single-works .p]  -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="post-<?php the_ID(); ?>">
	<section class="p-singleWorksHead">
		<p class="p-singleWorksHead__title"><a href="/works/">WORKS</a></p>
		<h2 class="p-singleWorksHead__siteName"><?php the_field('sitename'); ?></h2>
		<p class="p-singleWorksHead__client">BY <?php the_field('client'); ?></p>
		<?php // PCサイズしかないサイトか否か
      $cci = get_post_meta($post->ID, 'siteURL', true);?>
      <?php if(empty($cci)):?>
        <p class="p-singleWorksHead__en">※INTRA SITE</p>
      <?php else: ?>
        <p class="p-singleWorksHead__en"><a href="<?php the_field('siteURL'); ?>" target="blank"><?php the_field('siteURL'); ?></a> <i class="fa fa-external-link" aria-hidden="true"></i></p>
      <?php endif; ?>
	</section>

	<section class="p-singleWorksContent">
    <?php // PCサイズしかないサイトの場合
      $ctm = get_post_meta($post->ID, 'slideImage_1', true);?>
    <?php if(empty($ctm)):?>
      <div class="carousel-inner">
        <?php
        $image = get_field('pc_Only');
        $alt = $image['alt'];
        $url = $image['sizes']['large'];
        ?>
      </div>
      <?php // 更に INTRA SITE だった場合
      if(empty($cci)):?>
        <div class="p-singleWorksContent__intra">
          <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class="p-singleWorksContent__intraImg"/>
          <div class="p-singleWorksContent__intraText">イントラサイトの為、閲覧不可</div>
        </div>
      <?php else: ?>
        <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class=""/>
      <?php endif; ?>

    <?php else: // 通常 ?>
      <ul class="js-works__slider p-singleWorksContent__slider">
        <?php if(get_field('slideImage_1')): ?>
        <li class="p-singleWorksContent__sliderItem">
          <?php //写真設定
            $image = get_field('slideImage_1');
            $alt = $image['alt'];
            $url = $image['sizes']['large'];
          ?>
          <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class=""/>
          <h3 class="p-singleWorksContent__sitename">
            <a href="<?php the_field('siteURL_1'); ?>" target="blank"><?php the_field('siteName_1'); ?> <i class="fa fa-external-link" aria-hidden="true"></i></a>
          </h3>
        </li>
        <?php endif; ?>
        <?php if(get_field('slideImage_2')): ?>
        <li class="p-singleWorksContent__sliderItem">
          <?php
            $image = get_field('slideImage_2');
            $alt = $image['alt'];
            $url = $image['sizes']['large'];
          ?>
          <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class=""/>
          <div class="p-singleWorksContent__sitename"><a href="<?php the_field('siteURL_2'); ?>" target="blank"><?php the_field('siteName_2'); ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
        </li>
        <?php endif; ?>
        <?php if(get_field('slideImage_3')): ?>
        <li class="p-singleWorksContent__sliderItem">
          <?php
            $image = get_field('slideImage_3');
            $alt = $image['alt'];
            $url = $image['sizes']['large'];
          ?>
          <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class=""/>
          <div class="p-singleWorksContent__sitename"><a href="<?php the_field('siteURL_3'); ?>" target="blank"><?php the_field('siteName_3'); ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
        </li>
        <?php endif; ?>
        <?php if(get_field('slideImage_4')): ?>
        <li class="p-singleWorksContent__sliderItem">
          <?php
            $image = get_field('slideImage_4');
            $alt = $image['alt'];
            $url = $image['sizes']['large'];
          ?>
          <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class=""/>
          <div class="p-singleWorksContent__sitename"><a href="<?php the_field('siteURL_4'); ?>" target="blank"><?php the_field('siteName_4'); ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
        </li>
        <?php endif; ?>
        <?php if(get_field('slideImage_5')): ?>
        <li class="p-singleWorksContent__sliderItem">
          <?php
            $image = get_field('slideImage_5');
            $alt = $image['alt'];
            $url = $image['sizes']['large'];
          ?>
          <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class=""/>
          <div class="p-singleWorksContent__sitename"><a href="<?php the_field('siteURL_5'); ?>" target="blank"><?php the_field('siteName_5'); ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
        </li>
        <?php endif; ?>
        <?php if(get_field('slideImage_6')): ?>
        <li class="p-singleWorksContent__sliderItem">
          <?php
            $image = get_field('slideImage_6');
            $alt = $image['alt'];
            $url = $image['sizes']['large'];
          ?>
          <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" class=""/>
          <div class="p-singleWorksContent__sitename"><a href="<?php the_field('siteURL_6'); ?>" target="blank"><?php the_field('siteName_6'); ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
        </li>
        <?php endif; ?>
      </ul>
    <?php endif; ?>
	</section>

	<div class="p-singleWorksComment">
		<p class="p-singleWorksColumn">
			<?php the_field('column'); ?>
		</p>
		<dl class="p-singleWorksComment__dl">
			<dt class="p-singleWorksComment__dt">LANG / TOOL:</dt>
			<dd class="p-singleWorksComment__dd"><?php the_field('tool'); ?></dd>
			<dt class="p-singleWorksComment__dt">SCOPE:</dt>
			<dd class="p-singleWorksComment__dd"><?php the_field('scope'); ?></dd>
			<dt class="p-singleWorksComment__dt">CLIENT:</dt>
			<dd class="p-singleWorksComment__dd"><?php the_field('client_jpn'); ?>様</dd>
      <!-- <dt class="">SITE:</dt>
      <dd class="">
        <a href="<?php the_field('siteURL'); ?>" target="blank">
          <?php the_field('siteURL'); ?> <i class="fa fa-external-link" aria-hidden="true"></i>
        </a>
      </dd> -->
		</dl>
	</div>

<?php endwhile; ?>
</div><!-- /.post -->
<?php endif; ?>
<!-- [//single-works.p] -->
<?php get_footer(); ?>