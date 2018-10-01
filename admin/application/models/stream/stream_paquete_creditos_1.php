<?php
namespace stream;

/**
 * @Entity
 */
class stream_paquete_creditos
{
    /**
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    var $id;
    
    /** @Column(type="string") */
    var $icon;
    /** @Column(type="string") */
    var $name;
    /** @Column(type="integer") */
    var $equals_note;
    /** @Column(type="string") */
    var $sale_price;
    
    
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