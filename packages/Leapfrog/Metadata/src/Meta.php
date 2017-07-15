<?php 
	namespace Leapfrog\Metadata;

	class Meta{

		public $title;
		//default ma null rakheko
		public function title( $title= null){

			if($title){
				$this->title=$title;
			}

			return $this->title;
		}
	}



 ?>