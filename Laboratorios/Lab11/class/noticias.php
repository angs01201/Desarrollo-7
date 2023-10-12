<?php
require_once('modelo.php');

class noticia extends modeloCredencialesBD
{
    //Attributes
    protected $titulo;
    protected $texto;
    protected $categoria;
    protected $fecha;
    protected $imagen;
    
    //Constructor
    public function __construct()
    {
        parent::__construct();
    }

    //Methods
    public function consultar_noticias(){
        $pagina= 0 ;
        
        if(isset($_GET['pag'])){
            $pagina=$_GET['pag'];
        }
        
        $instruccion = "CALL sp_paginacion(".$pagina.")";
        $consulta=$this->_db->query($instruccion);
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
        If(!$resultado){
            echo "Fallo al consultar las noticias";
        }
        else{
            return $resultado;
        }
    }
    
    public function total_noticias(){
        
        $instruccion = "SELECT count(*) FROM noticias";
        $consulta=$this->_db->query($instruccion);
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
        
        if(!$resultado){
            echo "Fallo al consultar las noticias";
        }
        else{
            return $resultado;
        }
    }
    
    function __destruct(){
        $this->_db->close();
    }
 }
?>