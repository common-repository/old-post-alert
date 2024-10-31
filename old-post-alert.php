<?php

// Old Post Alert
//
// Copyright (c) 2006-2007 Alex King
// http://alexking.org/projects/wordpress
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// *****************************************************************

/*
Plugin Name: Old Post Alert
Plugin URI: http://alexking.org/projects/wordpress
Description: Show a potential commentor a note if a post is old. Might cut down on comments that are answered in later posts. Then again, it might not. Questions on configuration, etc.? Make sure to read the README.
Author: Alex King
Author URI: http://alexking.org
Version: 1.2.0
*/

function ak_old_post_alert($id)
{
	$post = get_post($id);
	if (is_page()) {
		return;
	}
	$banner = '';
	if ($post->post_date < date('Y-m-d H:i:s', strtotime("-1 month"))) {
		if ($post->post_date < date('Y-m-d H:i:s', strtotime("-2 years"))) {
			for ($i = 5; $i > 1; $i--) {
				if ($post->post_date < date('Y-m-d H:i:s', strtotime("-$i years"))) {
					$banner = 'This post is over ' . $i . ' years old.';
					break;
				}
			}
		} elseif ($post->post_date < date('Y-m-d H:i:s', strtotime("-18 months"))) {
			$banner = 'This post is over a year and a half old.';
		} elseif ($post->post_date < date('Y-m-d H:i:s', strtotime("-1 year"))) {
			$banner = 'This post is over a year old.';
		} elseif ($post->post_date < date('Y-m-d H:i:s', strtotime("-2 months"))) {
			for ($i = 11; $i > 1; $i--) {
				if ($post->post_date < date('Y-m-d H:i:s', strtotime("-$i months"))) {
					$banner = 'This post is over ' . $i . ' months old.';
					break;
				}
			}
		} else {
			$banner = 'This post is over a month old.';
		}
	}
	if (!empty($banner)) {
		print('<p class="old_post_alert"><strong>Note:</strong> ' . $banner . ' You may want to check later in this blog to see if there is new information relevant to your comment.</p>');
	}
}
add_action('comment_form', 'ak_old_post_alert');
