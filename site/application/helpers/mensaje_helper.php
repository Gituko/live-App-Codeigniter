<?php
class Mensaje
{
    /** 
     *Define el tipo de mensaje mostrado
     * @var type error,success,information,warning
     */
    var $tipo;
    var $mensaje;
    var $datos;
    var $log;
    function crear()
    {
        header("Content-type: application/json");
        log_message(($this->tipo!="error")?"info":"error",  $this->mensaje.' Log('.$this->log.')');
        return print_r(json_encode(array("tipo"=>  $this->tipo,"mensaje"=>  $this->mensaje,"datos"=>$this->datos)));
    }
    function lista($datos){
        header("Content-type: aplication/json");        
        return print_r(json_encode($datos));
    }
    private $data;
    
    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
    

    public function __get($name) {
        
        if (@array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }else{
            echo "no existe  la propiedad [".$name."]";
        }
        return null;
    }
    
    
}
?>