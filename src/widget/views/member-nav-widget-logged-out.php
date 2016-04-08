<nav class="utility-bar-member-nav" itemscope itemtype="http://schema.org/SiteNavigationElement">
	<ul class="menu menu-utility-bar-member-nav">
		<?php if ( is_front_page() ) : ?>
			<li class="menu-item">
				<span class="fa fa-code"></span><a href="<?php echo home_url( 'membership' ); ?>" itemprop="url"><?php _e( 'Join Now', 'fulcrum_site') ?></a>
			</li>
			<li class="menu-item">
				<span class="fa fa-play-circle"></span><a href="<?php echo home_url( 'quick-start-guide' ); ?>" itemprop="url"><?php _e( 'Quick Start Guide', 'fulcrum_site') ?></a>
			</li>
		<?php else: ?>
			<li class="menu-item join-now">
				<a href="<?php echo home_url( 'membership' ); ?>" class="join-now" itemprop="url"><span class="fa fa-code"></span> <?php _e( 'Join Now', 'fulcrum_site') ?></a>
			</li>
			<li class="menu-item learn-more">
				<a href="<?php echo home_url( 'quick-start-guide' ); ?>" class="learn-more" itemprop="url"><span class="fa fa-play-circle"></span> <?php _e( 'Quick Start Guide', 'fulcrum_site') ?></a>
			</li>
		<?php endif; ?>
		<li class="menu-item">
			<span class="fa fa-sign-in"></span><a href="<?php echo wp_login_url( get_permalink() ); ?>" itemprop="url"><?php _e( 'Sign In', 'fulcrum_site') ?></a>
		</li>
	</ul>
</nav>