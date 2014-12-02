<?php
$placeholder = "Schreibe einen Kommentar.";
$submit = "Kommentieren";
$headline = "Kommentare";
$abort = "Nicht antworten";
if(get_field('is_english')) {
  $placeholder = "Write a comment.";
  $submit = "Comment";
  $headline = "Comments";
  $abort = "Don't reply";
}
?>
<?php if ( is_singular() && get_option( 'thread_comments' ) )
wp_enqueue_script( 'comment-reply' ); ?>
<section class="b-comments" id="comments">
  <div class="col col--large">
    <div class="m-comments">
      <h2><?= $headline; ?></h2>
      <div class="m-makecomment" id="respond">
        <form action="<?= home_url('/'); ?>wp-comments-post.php" method="post">
          <div class="fields">
            <label for="author" class="sr">Name</label>
            <input type="text" name="author" id="author" placeholder="Name">
            <label for="email" class="sr">Email</label>
            <input type="text" name="email" id="email" placeholder="Email">
            <label for="url" class="sr">Website</label>
            <input type="text" name="url" id="url" placeholder="Website">
          </div>
          <div class="area">
            <textarea name="comment" placeholder="<?= $placeholder ?>"></textarea>
            <button type="submit"><span class="mq-sr"><?= $submit; ?></span></button>
          </div>
          <?php comment_id_fields(); ?>
          <?php do_action('comment_form', $post->ID); ?>
        </form>
        <div class="cancel-reply"><?php cancel_comment_reply_link($abort); ?></div>
      </div>
      <?php if (have_comments()): ?>
      <ul class="list">
        <?php wp_list_comments(array('type' => 'comment', 'style' => 'ul', 'callback' => 'imworking_comment')); ?>
      </ul>
      <?php endif; ?>
    </div>
  </div>
</section>