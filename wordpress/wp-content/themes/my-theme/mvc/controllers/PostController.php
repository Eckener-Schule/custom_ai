<?php
class PostController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new PostModel();
        $this->view = new PostView();
    }

    public function displayPosts() {
        $posts = $this->model->getPosts();
        $this->view->renderPosts($posts);
    }

    public function displaySinglePost($post_id) {
        $post = $this->model->getPostById($post_id);
        $this->view->renderSinglePost($post);
    }
}
?>

