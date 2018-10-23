<?php
   class Pages extends Controller {
      public function __construct(){
         // Load model
         $this->postModel = $this->model('Post');
      }

      public function index(){
         $posts = $this->postModel->getPosts();

         $data = [
            'title' => 'Welcome',
            'posts' => $posts
         ];
         
         $this->view('pages/index', $data);
      }
   }

?>