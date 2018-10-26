<?php
   class Pages extends Controller {
      public function __construct(){
         // Load model
         $this->postModel = $this->model('Post');
      }

      public function index(){
         if (isLoggedIn()){
            redirect('posts');
         }

         $data = [
            'title' => 'Hermes',
            'description' => 'Simple social network built on the OmegaTFS PHP framework'
         ];
         
         $this->view('pages/index', $data);
      }

      public function about(){

         $data = [
            'title' => 'About Us',
            'description' => 'App to share post with other users'
         ];

         $this->view('pages/about', $data);
      }
   }

?>