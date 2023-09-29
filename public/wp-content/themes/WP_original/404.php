<?php get_header(); ?>
<!-- 404.php -->
	<section class="area404 p-error">
		<h2 class="p-error__title">指定されたページは存在しておりません。</h2>
		<p class="p-error__text">このページの URL ：<span class="error_msg p-error__msg">http://<?php echo esc_html($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']); ?></span></p>
		<p class="p-error__text">表示する記事がありません。</p>
		<p class="p-error__text"><a href="<?php echo home_url(); ?>">トップページへ戻る</a></p>
	</section>
<?php get_footer(); ?>