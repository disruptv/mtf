<?php
/**
 * List View Title Template
 * The title template for the list view of events.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/title-bar.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 * @since   4.6.19
 *
 */
?>

<header class="header">
  <div class="masthead">
		<?php do_action( 'tribe_events_before_the_title' ); ?>
		<h1 class="title"><?php echo tribe_get_events_title() ?></h1>
		<?php do_action( 'tribe_events_after_the_title' ); ?>
    <button class="button"><?php esc_html_e('Support us'); ?></button>
  </div>
  <?php for($i = 0; $i < 10; $i++){
    $instagram[] = '<div class="post">
      <img class="image" src="#" />
    </div>';
  }
  echo $instagram = '<div class="instagram feed"><div class="wrap">' . implode($instagram) . '</div></div>'; ?>
</header>
