<?php
namespace stream;

/**
 * @Entity
 */
class view_notes_video_artist
{
    /**
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    var $id;
    
    /** @Column(type="integer") */
    var $video_id;
    /** @Column(type="integer") */
    var $artist_id;
    /** @Column(type="integer") */
    var $amount_notes;
    /** @Column(type="string") */
    var $recorded_v_title;
    
    
    
    
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