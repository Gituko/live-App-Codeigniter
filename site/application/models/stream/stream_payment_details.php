<?php
namespace stream;

/**
 * @Entity
 */
class stream_payment_details
{
    /**
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    var $id;
    
    /** @Column(type="string") */
    var $order_no;
    /** @Column(type="integer") */
    var $user_id;
    /** @Column(type="integer") */
    var $artist_id;
    /** @Column(type="integer") */
    var $video_id;
    /** @Column(type="string") */
    var $admin_charge;
    /** @Column(type="string") */
    var $artist_charge;
    /** @Column(type="string") */
    var $payment;
    /** @Column(type="string") */
    var $date;
    /** @Column(type="string") */
    var $payment_status;
    /** @Column(type="string") */
    var $txn_id;
    /** @Column(type="string") */
    var $ipn_track_id;
    /** @Column(type="string") */
    var $payment_type;
    /** @Column(type="string") */
    var $user_type;
    /** @Column(type="string") */
    var $end_date;
    /** @Column(type="integer") */
    var $user_payer;
    /** @Column(type="integer") */
    var $user_payer_type;
    
    
    
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