<?php 
	class Account {
	    private $id = 0;
		private $nama = '';
		private $email = '';
		private $password = '';
		private $role = '';
		private $idrole = 0;
		private $kota = '';
        private $negara = '';
        private $history = '';

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
