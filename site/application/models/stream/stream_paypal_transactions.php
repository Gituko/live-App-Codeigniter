<?php
namespace stream;

/**
 * @Entity
 */
class stream_paypal_transactions
{
    /**
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    var $id;
    
    /** @Column(type="string") */
    var $txn_id;
    /** @Column(type="string") */
    var $ipn_track_id;
    /** @Column(type="string") */
    var $type_payment;
    /** @Column(type="string") */
    var $amount;
    /** @Column(type="string") */
    var $id_producto;
    /** @Column(type="integer") */
    var $notes;
    /** @Column(type="integer") */
    var $id_seguimiento;
    /** @Column(type="integer") */
    var $id_usuario;
    /** @Column(type="integer") */
    var $type_user;
    /** @Column(type="string") */
    var $fecha_hora;
    /** @Column(type="string") */
    var $estatus;
    
    
    
    
    
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