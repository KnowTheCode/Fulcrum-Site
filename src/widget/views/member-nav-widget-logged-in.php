<nav class="utility-bar-member-nav" itemscope itemtype="http://schema.org/SiteNavigationElement">
	<ul class="menu menu-utility-bar-member-nav">
		<li class="hello-member">&lt;/ Hello, <?php echo $current_user->first_name; ?> &gt;</li>
		<?php if ( ! is_front_page() ) : ?>
		<li class="menu-item learn-more">
			<a href="<?php echo home_url( 'quick-start-guide' ); ?>" class="learn-more" itemprop="url"><span class="fa fa-play-circle"></span><?php _e( 'Quick Start Guide', 'fulcrum_site') ?></a>
		</li>
		<?php endif; ?>
		<li class="menu-item">
			<span class="fa fa-dashboard"></span><a href="<?php echo home_url( 'account' ); ?>" itemprop="url"><?php _e( 'Your Account', 'fulcrum_site') ?></a>
		</li>
		<li class="menu-item">
			<span class="fa fa-sign-out"></span><a href="<?php echo wp_logout_url( home_url() ); ?>" itemprop="url"><?php _e( 'Sign Out', 'fulcrum_site') ?></a>
		</li>
	</ul>
</nav>