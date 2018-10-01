<?php
namespace stream;

/**
 * @Entity
 */
class view_total_notes_total_usd_by_artist
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
    var $id_artist;
    /** @Column(type="string") */
    var $total_notes;
    /** @Column(type="string") */
    var $total_usd;
    /** @Column(type="string") */
    var $estatus;
    /** @Column(type="string") */
    var $notas;
    /**
     * @ManyToOne(targetEntity="stream_artist", inversedBy="total_notes_total_usd_by_artist")
     * @JoinColumn(name="id_artist", referencedColumnName="artist_id")
     * */
    var $artist;
    
    
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