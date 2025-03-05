<?php
class PostView {
    public function renderPosts($posts) {
        foreach ($posts as $post) {
            echo "<h2>{$post->post_title}</h2>";
            echo "<p>{$post->post_excerpt}</p>";
        }
    }

    public function renderSinglePost($post) {
        echo "<h1>{$post->post_title}</h1>";
        echo "<div>{$post->post_content}</div>";
    }
}
?>

