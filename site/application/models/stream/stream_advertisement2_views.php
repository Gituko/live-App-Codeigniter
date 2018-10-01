<?php
namespace stream;

/**
 * @Entity
 */
class stream_advertisement2_views
{
    /**
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    var $id;    
    /** @Column(type="string") */
    var $fecha_hora;
    /** @Column(type="string") */
    var $ip_remote;
    /** @Column(type="string") */
    var $id_advertisement2;
    
    
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