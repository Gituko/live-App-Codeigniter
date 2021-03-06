<?php
namespace stream;

/**
 * @Entity
 */
class stream_notes
{
    /**
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    var $id;
    
    /** @Column(type="integer") */
    var $id_user;
    /** @Column(type="string") */
    var $type_user;
    /** @Column(type="string") */
    var $precio;
    /** @Column(type="string") */
    var $status;
    /** @Column(type="string") */
    var $de_donde;
    /** @Column(type="string") */
    var $para;
    /** @Column(type="string") */
    var $paypal_transaction_id;
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