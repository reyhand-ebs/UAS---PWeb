<?php 
	class Account {
	    private $userid = '';
		private $email = '';
		private $password = '';
		private $fname = '';
		private $lname = '';
		private $nohp = '';
		private $foto = '';
		private $idrole = '';

		public function __get($atribute) {
			if (property_exists($this, $atribute)) {
				return $this->$atribute;
			}
		}
	
		public function __set($atribut, $value) {
			if (property_exists($this, $atribut)) {
					$this->$atribut = $value;
			}
		}
				
		public function AddAccount() {
		
		}
		
		public function UpdateAccount() {
		
		}
		
		public function DeleteAccount() {
					
		}
		
		public function SelectAllAccount() {
		
		}
		
		public function SelectOneAccount() {
				
		}

		public function ValidateEmail($email) {
						
		}
 	}
