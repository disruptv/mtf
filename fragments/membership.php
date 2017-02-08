<?php $users = new WP_User_Query( array(
	'role__not_in'	=> 'subscriber',
	)); 
	$directory = array( 'member' );
	$directories = wc_crm_get_groups();
?>
<?php if ( ! empty( $users->results ) ) : foreach ($directory as $this_directory) : 
	foreach ($directories as $dir ) :
		if ( $dir->group_slug == $this_directory ) {
			$directory_name = $dir->group_name;
		}
	endforeach;
?>
<section id="<?php echo $this_directory; ?>" class="members">
	<h2 class="directory"><?php echo $directory_name; ?></h2>
	<?php foreach ( $users->results as $user ) :
	$user = $wpdb->get_row("SELECT c_id FROM " . $wpdb->prefix . "wc_crm_customer_list WHERE user_id = '$user->ID'");
	$this_user = new WC_CRM_Customer($user->c_id);
	if( $this_user->status == $this_directory || 'leadership' ) : ?> 
		<article class="member">
			<div class="headshot"><?php echo get_avatar(); ?></div>
			<h5 class="name"><?php echo $this_user->name; ?></h5>
			<h5 class="position"><?php echo $this_user->customer_categories; ?></h5>
		</article>
	<?php endif; endforeach; ?>
</section>
<?php endforeach; endif; ?>