<?php

/**
 * Template Name: HTML Page
 *
 * This is a blank page for html content
 */

if (isset($post) && isset($post->post_content)) {
  echo $post->post_content;
} else if (isset($data['content'])) {
  echo $data['content'];
} else {
  echo '<!-- No Content -->';
}