<?php 
   class User {
      private $db;

      public function __construct() {
         $this->db = new Database;
      }

      // Register user
      public function register($data) {
         $this->db->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
         $this->db->bind(':name', $data['name']);
         $this->db->bind(':email', $data['email']);
         $this->db->bind(':password', $data['password']);

         return $this->db->execute() ? true : false;
      }

      // Login user
      public function login($email, $password) {
         $this->db->query("SELECT * FROM users WHERE email = :email");
         $this->db->bind(':email', $email);
         $row = $this->db->single();

         // echo "Row: ";
         // var_dump($row); exit;

         // return $row ? 'true' : 'false'; exit;

         $hashedPassword = $row->password;
         if (password_verify($password, $hashedPassword)) {
            return $row;
         } else {
            return false;
         }
      }

      // Find user by email
      public function findByEmail($email){
         $this->db->query("SELECT * FROM users WHERE email = :email");
         $this->db->bind(':email', $email);
         $row = $this->db->single();

         return $row ? true : false;
      }

      // Get user by email
      public function getById($id){
         $this->db->query("SELECT * FROM users WHERE id = :id");
         $this->db->bind(':id', $id);
         $row = $this->db->single();

         return $row;
      }
   }
?>