<?php
namespace stream;

/**
 * @Entity
 */
class stream_advertisement_video
{
    /**
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    var $video_id;
    
    /** @Column(type="string") */
    var $video_title;
    /** @Column(type="string") */
    var $video;
    /** @Column(type="string") */
    var $video_status;
    /** @Column(type="string") */
    var $start_date;
    /** @Column(type="string") */
    var $end_date;
    
    
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