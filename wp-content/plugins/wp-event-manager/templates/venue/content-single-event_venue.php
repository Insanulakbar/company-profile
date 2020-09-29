<?php $venue = get_post($venue_id); ?>

<div class="wpem-single-organizer-profile-wrapper" id="wpem_venue_profile">
    <div class="wpem-organizer-profile">

        <?php do_action('single_event_listing_venue_start'); ?>

        <div class="wpem-organizer-logo-wrapper">
            <div class="wpem-organizer-logo">
                <a><?php display_venue_logo('', '', $venue); ?></a>
            </div>
            <?php /** <div class="wpem-organizer-logo-title wpem-heading-text"><a><span><?php echo $venue_name; ?></span></a></div> */ ?>
        </div>

        <div class="wpem-organizer-infomation-wrapper">

            <div class="wpem-organizer-name wpem-heading-text">
                <span><?php echo get_event_venue_name($venue); ?></span>
            </div>

            <div class="wpem-organizer-description"><?php printf(__('%s', 'wp-event-manager'), get_venue_description($venue)); ?></div>
            
            <div class="wpem-organizer-social-links">
                <div class="wpem-organizer-social-lists">
                    <?php do_action('single_event_listing_venue_social_start'); ?>
                    <?php
                    $venue_website  = get_venue_website($venue);
                    $venue_facebook = get_venue_facebook($venue);
                    $venue_twitter  = get_venue_twitter($venue);
                    $venue_youtube  = get_venue_youtube($venue);
                    ?>
                    <?php
                    if (!empty($venue_website))
                    {
                        ?>
                        <div class="wpem-social-icon wpem-weblink">
                            <a href="<?php echo esc_url($venue_website); ?>" target="_blank" title="Get Connect on Website"><?php _e('Website', 'wp-event-manager'); ?></a>
                        </div>
                        <?php
                    }

                    if (!empty($venue_facebook))
                    {
                        ?> 
                        <div class="wpem-social-icon wpem-facebook">
                            <a href="<?php echo esc_url($venue_facebook); ?>" target="_blank" title="Get Connect on Facebook"><?php _e('Facebook', 'wp-event-manager'); ?></a>
                        </div>
                        <?php
                    }

                    if (!empty($venue_twitter))
                    {
                        ?>
                        <div class="wpem-social-icon wpem-twitter">
                            <a href="<?php echo esc_url($venue_twitter); ?>" target="_blank" title="Get Connect on Twitter"><?php _e('Twitter', 'wp-event-manager'); ?></a>
                        </div>
                        <?php
                    }
                    if (!empty($venue_youtube))
                    {
                        ?>
                        <div class="wpem-social-icon wpem-youtube">
                            <a href="<?php echo esc_url($venue_youtube); ?>" target="_blank" title="Get Connect on Whatsapp"><?php _e('Youtube', 'wp-event-manager'); ?></a>
                        </div>
                    <?php } ?>

                    <?php do_action('single_event_listing_venue_single_social_end', $venue_id); ?>

                </div>
            </div>

        </div>

        <div class="wpem-organizer-contact-actions">
            <?php do_action('single_event_listing_venue_action_start', $venue_id); ?>

            <?php do_action('single_event_listing_venue_action_end', $venue_id); ?>
        </div>


        <?php do_action('single_event_listing_venue_end'); ?>
    </div>
</div>
