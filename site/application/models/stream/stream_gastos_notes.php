<?php
namespace stream;

/**
 * @Entity
 */
class stream_gastos_notes
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
    /** @Column(type="integer") */
    var $video_id;
    /** @Column(type="integer") */
    var $artist_id;
    /** @Column(type="integer") */
    var $user_id_envio;
    /** @Column(type="integer") */
    var $user_id_envio_tipo;
    /**
     * @OneToMany(targetEntity="stream_gastos_notes_detalle", mappedBy="gasto")
     * */
    var $detalle;
    
    
    
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