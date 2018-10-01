<?php
namespace stream;

/**
 * @Entity
 */
class stream_advertisement2
{
    /**
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    var $advertisement_id;
    
    /** @Column(type="string") */
    var $advertisement_name;
    /** @Column(type="string") */
    var $advertisement_image;
    /** @Column(type="string") */
    var $advertisement_link;
    /** @Column(type="string") */
    var $advertisement_start_date;
    /** @Column(type="string") */
    var $advertisement_end_date;
    /** @Column(type="string") */
    var $advertisement_date;
    /** @Column(type="string") */
    var $page;
    /** @Column(type="string") */
    var $days;
    /** @Column(type="string") */
    var $total_price;
    /** @Column(type="string") */
    var $advertisement_code;
    /** @Column(type="string") */
    var $advertisment_type;
    /** @Column(type="string") */
    var $advertisement_status;
    
    
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