<?php 
	{
		private $id = 0;
		private $role = '';

		public function __get($atribute) {
			if (property_exists($this, $atribute)) {
				return $this->$atribute;
				}
		}
	
		public function __set($atribut, $value){
			if (property_exists($this, $atribut)) {
					$this->$atribut = $value;
			}
		}
				
		public function AddRole()   {
			
		}
		
		public function UpdateRole() {
			
		}
		
		public function DeleteRole() {
            
		}
		
		public function SelectAllRole() {
            
		}
		
		public function SelectOneRole() {
            
		}
 	}	 
?>
