<?php
namespace stream;

/**
 * @Entity
 */
class stream_conversions_table
{
    /**
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    var $id;
    
    /** @Column(type="string") */
    var $nombre_moneda;
    /** @Column(type="string") */
    var $valor;
    /** @Column(type="integer") */
    var $moneda_referencia;
    /** @Column(type="string") */
    var $imagen;
    /**
     * @ManyToOne(targetEntity="stream_conversions_table_coin", inversedBy="conversiones")
     * @JoinColumn(name="moneda_referencia", referencedColumnName="id")
     * */
    var $referencia;
    
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