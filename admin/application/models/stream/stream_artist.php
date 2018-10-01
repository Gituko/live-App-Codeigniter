<?php
namespace stream;

/**
 * @Entity
 */
class stream_artist
{
    /**
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    var $artist_id;
    
    /** @Column(type="string") */
    var $name;
    /** @Column(type="string") */
    var $user_name;
    /** @Column(type="string") */
    var $email;
    /** @Column(type="string") */
    var $password;
    /** @Column(type="string") */
    var $city;
    /** @Column(type="string") */
    var $state;
    /** @Column(type="string") */
    var $zipcode;
    /** @Column(type="string") */
    var $mobileno;
    /** @Column(type="string") */
    var $birth_date;
    /** @Column(type="string") */
    var $image;
    /** @Column(type="string") */
    var $status;
    /** @Column(type="string") */
    var $forgot_password_id;
    /** @Column(type="string") */
    var $activation_id;
    /** @Column(type="string") */
    var $register_date;
    /** @Column(type="string") */
    var $login_date;
    /** @Column(type="string") */
    var $last_login_time;
    /** @Column(type="string") */
    var $online_status;
    /** @Column(type="string") */
    var $sex;
    /** @Column(type="string") */
    var $artist_tag;
    /** @Column(type="string") */
    var $interested_in;
    /** @Column(type="string") */
    var $location;
    /** @Column(type="string") */
    var $last_broadcast;
    /** @Column(type="string") */
    var $language_known;
    /** @Column(type="string") */
    var $body_type;
    /** @Column(type="string") */
    var $about_me;
    /** @Column(type="string") */
    var $orientation;
    /** @Column(type="string") */
    var $haircolor;
    /** @Column(type="string") */
    var $ethnicity;
    /** @Column(type="string") */
    var $eyecolor;
    /** @Column(type="string") */
    var $category_type;
    /** @Column(type="string") */
    var $live_video;
    /** @Column(type="string") */
    var $recorded_video;
    /** @Column(type="string") */
    var $paypal_id;
     /**
     * @OneToMany(targetEntity="view_total_notes_total_usd_by_artist", mappedBy="total_notes_total_usd_by_artist")
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