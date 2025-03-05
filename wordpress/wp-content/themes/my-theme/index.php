<?php
// Header laden
get_header();

// Controller laden und alle Posts anzeigen
$postController = new PostController();
$postController->displayPosts();

// Footer laden
get_footer();

