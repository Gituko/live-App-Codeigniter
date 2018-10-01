<?php
namespace stream;

/**
 * @Entity
 */
class stream_setting
{
    /**
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    var $setting_id;
    
    /** @Column(type="string") */
    var $setting_key;
    /** @Column(type="string") */
    var $setting_value;
    
    
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