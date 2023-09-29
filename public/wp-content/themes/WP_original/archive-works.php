<?php get_header(); ?>
<!-- [archive-works .p]  -->
<section class="p-archiveWorks">
  <h2 class="c-subTitle">WORKS</h2>
  <p class="p-archiveWorks__career">実績</p>
  <ul class="p-archiveWorks__filter">
    <li id="all" class="p-archiveWorks__filterBtn is-checked">ALL</li>
    <li id="corporate" class="p-archiveWorks__filterBtn">corporate</li>
    <li id="campaign" class="p-archiveWorks__filterBtn">campaign</li>
    <li id="wordpress" class="p-archiveWorks__filterBtn">wordpress</li>
    <li id="landing" class="p-archiveWorks__filterBtn">Landing Page</li>
    <li id="game" class="p-archiveWorks__filterBtn">Game content</li>
    <li id="other" class="p-archiveWorks__filterBtn">OTHER</li>
    <li id="responsive" class="p-archiveWorks__filterBtn">RESPONSIVE</li>
  </ul>
  <div class="p-archiveWorks__contents">
    <div class="p-archiveWorks__grid">
      <?php if (have_posts()) : ?>
        <?php
        $args = array(/* 配列に複数の引数を追加 */
          'post_type' => 'works',/* 投稿タイプを指定 */
          'order' => 'DESC',
          'posts_per_page' => '-1' //表示件数。-1なら全件表示
        );
        $the_query = new WP_Query($args);
        ?>
        <?php query_posts($args); //上で指定したクエリ（問い合わせ内容）の指定
        ?>
        <?php if (have_posts()) while (have_posts()) : the_post(); ?><!-- ループ開始処理 -->
          <div class="
            <?php // サイトの種類名をclassとして追加
            $colors = get_field('siteType');
            if ($colors) :
            ?>
            <?php foreach ($colors as $color) : ?>
            <?php echo $color; ?>
            <?php endforeach; ?>
            <?php endif; ?> p-archiveWorks__itembox">
            <a href="<?php the_permalink(); ?>">
              <figure class="p-archiveWorks__figure">
                <?php //写真設定
                $image = get_field('archiveIMG');
                $alt = $image['alt'];
                $url = $image['sizes']['large'];
                ?>
                <img src="<?php echo $url ?>" alt="<?php echo $alt ?>">
                <figcaption class="p-archiveWorks__figcaption">
                  <div class="p-archiveWorks__figureTitle">
                    <?php echo get_the_title(); ?><br>
                      <span class="p-archiveWorks__figureTitle--small"><?php the_field('client'); ?></span>
                  </div>
                    <?php
                      $checked = get_field('newMark');
                      if ($checked) { //管理画面で「NEW」のチェックボックスを入れたら
                        echo '<span class="p-archiveWorks__new">NEW</span>'; //アイコンを表示
                      }
                    ?>
                </figcaption>
              </figure>
              <span class="p-archiveWorks__client"><?php the_field('sitename'); ?></span>
            </a>
          </div>
        <?php endwhile; // end of the loop.
        ?>
        <?php wp_reset_query(); ?><!-- リセット -->
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- [//archive-works .p]  -->
<?php get_footer(); ?>