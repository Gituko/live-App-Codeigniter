<?php
namespace stream;
/**
 * @Entity
 */
class stream_gastos_notes_detalle
{
    /**
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    var $id;    
    /** @Column(type="integer")*/
    var $id_gasto;
    /** @Column(type="integer")*/
    var $id_notes;    
       
    /**
     * @ManyToOne(targetEntity="stream_gastos_notes", inversedBy="detalle")
     * @JoinColumn(name="id_gasto", referencedColumnName="id")
     * */
    var $gasto;
    
    
    
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