<?php
namespace stream;

/**
 * @Entity
 */
class stream_request_payments
{
    /**
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    var $id;
    
    /** @Column(type="string") */
    var $fecha;
    /** @Column(type="string") */
    var $estatus;        
    /** @Column(type="string") */
    var $notas;
    /** @Column(type="integer") */
    var $id_artist;
    
    
    
    
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