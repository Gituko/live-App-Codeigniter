<?php
namespace stream;

/**
 * @Entity
 */
class stream_message_chat
{
    /**
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    var $message_id;    
    /** @Column(type="integer") */
    var $user_id;
    /** @Column(type="integer") */
    var $artist_id;
    /** @Column(type="integer") */
    var $video_id;
    /** @Column(type="string") */
    var $message;
    /** @Column(type="string") */
    var $message_status;
    /** @Column(type="string") */
    var $message_time;
    /** @Column(type="string") */
    var $sender_type;
    
    
    
    
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