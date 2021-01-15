

	<?php 
	
	class LoginUser extends model {
		
		public $user ;
		public $pass ;
		public $resultado ;

		public function SetUser($valid) {
		//validar
		$this->user= $valid;
	}

	public function SetPass($valid) {
		//validar
		$this->pass = sha1($valid);
	}

	public function Login (){

		
	if($this->user == "admin@ic.com"){

		echo $this->user ;
		echo $this->pass;

		$this->db->query("	SELECT *
							FROM alumnos 
							WHERE Email = '$this->user'
							AND contrasenia = '$this->pass'
							");

		$this->resultado = mysqli_num_rows($this->db->fetchAll());

		if($this->resultado == 1){

		echo "admin";
		header("Location: admin.php" );
		
		}else{
			echo "no";
		}

	}else{
		echo "otro";
		}
	}
		
	}
 ?>																																					


	
	