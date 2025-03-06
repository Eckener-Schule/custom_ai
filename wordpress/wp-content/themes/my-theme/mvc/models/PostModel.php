<?php
class PostModel {
    public function getPosts() {
        global $wpdb;
        $query = "SELECT * FROM {$wpdb->posts} WHERE post_status = 'publish' AND post_type = 'post'";
        return $wpdb->get_results($query);
    }

    public function getPostById($post_id) {
        global $wpdb;
        $query = $wpdb->prepare("SELECT * FROM {$wpdb->posts} WHERE ID = %d", $post_id);
        return $wpdb->get_row($query);
    }
}
?>

