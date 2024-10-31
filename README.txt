=== Old Post Alert ===
Tags: age, post, relevance, comments
Contributors: alexkingorg, crowdfavorite
Requires at least: 1.5
Tested up to: 6.0
Stable tag: 1.2.0

Remind your visitors about the age of old posts in the comment area - might cut down in irrelevant comments.

== Description ==

Old Post Alert shows a banner in your comments form for posts more than a month old. The banner reminds the commentor that there may be newer information available later in the blog. This may cut down on comments that are irrelevant due to more recent developments.

== Installation ==

1. Download the plugin archive and expand it (you've likely already done this).
2. Upload the old-post-alert.php file to your wp-content/plugins directory (not in a sub-folder).
3. Go to the Plugins page in your WordPress Administration area and click 'Activate' for Old Post Alert.
4. Congratulations, you've just installed Old Post Alert.
5. Optional: set a CSS class for `old_post_alert` to style the banner.

== Frequently Asked Questions ==

= Why doesn't the banner show in my theme? =

This plugin relies on the `comment_form` to be present in your comments.php template. If this does not exist, you will want to add it:

`<?php do_action('comment_form', $post->ID); ?>`

= Anything else? =

That about does it - enjoy!

--Alex King

http://alexking.org/projects/wordpress
