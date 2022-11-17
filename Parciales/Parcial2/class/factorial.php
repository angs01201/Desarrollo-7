<?php
	require_once('modelo.php');
	class factorial extends modeloCredencialesDB{
		protected $ID;
		protected $N;
		protected $Factorial;
		protected $Sumatoria;

		public function __construct() {
			parent::__construct();
		}

		public function consultarFactorial() {
			$instruccion = "CALL sp_listar_factorial()";

			$consulta = $this->_db->query($instruccion);
			$resultado = $consulta->fetch_all(MYSQLI_ASSOC);

			if (!$resultado) {
				echo "Fallo al consultar las Factoriales";
			} else {
				return $resultado;
				$resultado->close();
				$this->_db->close();
			}
			
		}

		public function obtieneFactorial($numero) { 
			$fact = 1;
			$num = 0;
			for ($i = 1; $i <= $numero; $i++) { 
				$fact = $fact * $i;
				$num = $num + $fact;
			}
			obtineneSumatoria($num);
			return $fact; 
		}

		public function obtieneSumatoria($numero) {
			return $numero
		}

		public function consultar_noticias_filtro($campo, $valor){
			$instruccion = "CALL sp_listar_noticias_filtro('". $campo ."','". $valor ."')";

			$consulta = $this->_db->query($instruccion);
			$resultado = $consulta->fetch_all(MYSQLI_ASSOC);

			if (!$resultado) {
				echo "Fallo al consultar las noticias";
			} else {
				return $resultado;
				$resultado->close();
				$this->_db->close();
			}
			
		}
	}
?>