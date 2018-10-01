<?php
namespace stream;

/**
 * @Entity
 */
class stream_recorded_video
{
    /**
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    var $recorded_v_id;
    
    /** @Column(type="string") */
    var $recorded_v_title;
    /** @Column(type="string") */
    var $recorded_v_overview;
    /** @Column(type="string") */
    var $artist_id;
    /** @Column(type="string") */
    var $recorded_video_name;
    /** @Column(type="string") */
    var $category_type;
    /** @Column(type="string") */
    var $video_tags;
    /** @Column(type="string") */
    var $image;
    /** @Column(type="string") */
    var $recorded_v_status;
    /** @Column(type="string") */
    var $video_type;
    /** @Column(type="string") */
    var $video_key;
    /** @Column(type="string") */
    var $video_date;
    
    
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