<?php
namespace stream;

/**
 * @Entity
 */
class stream_request_payment_detalle
{
    /**
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    var $id;
    
    /** @Column(type="integer") */
    var $id_request_payment;
    /** @Column(type="integer") */
    var $id_note;
    

    
    
    
    
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