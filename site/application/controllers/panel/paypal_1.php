<?php

class Paypal extends CI_Controller {

    var $em;
    var $msg;
    var $templete;
    var $stream;
    var $paypal;

    public function __construct() {
        parent::__construct();

        $this->stream = $this->doctrine->stream;
        $this->msg = new Mensaje();
        $this->templete = new Templete();
        $this->load->helper("paypal_stream_act");
        $this->paypal = new paypal_stream_act();
        $this->paypal->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';   // testing paypal url
    }

    function index() {

        // if there is not action variable, set the default action of 'process'
        if (empty($_GET['action']))
            $_GET['action'] = 'process';
//        echo "<pre>";
//        var_dump($_REQUEST);
//        echo "<pre>";
        switch ($_GET['action']) {
            case 'process':      // Process and order...
                // There should be no output at this point.  To process the POST data,
                // the submit_paypal_post() function will output all the HTML tags which
                // contains a FORM which is submited instantaneously using the BODY onload
                // attribute.  In other words, don't echo or printf anything when you're
                // going to be calling the submit_paypal_post() function.
                // This is where you would have your form validation  and all that jazz.
                // You would take your POST vars and load them into the class like below,
                // only using the POST values instead of constant string expressions.
                // For example, after ensureing all the POST variables from your custom
                // order form are valid, you might have:
                //
                // $this->paypal->add_field('first_name', $_POST['first_name']);
                // $this->paypal->add_field('last_name', $_POST['last_name']);
//                echo "<pre>";
//                    var_dump($_SESSION);
//                echo "<pre>";
                if (!$this->session->userdata('is_logged_in')) {
                    $type = $this->session->userdata('type');
                    redirect('http://www.streamact.com/', 'refresh');
                }
                try {
                    $description = $_POST['description'];
                    $payment = $_POST['payment'];
                    $type_payment = $_POST['type_payment'];
                    $rand = rand(1000, 9999);
                    $id = date("Ymd") . date("His") . rand(1000, 9999) . $rand;
//                echo "<pre>";
//                var_dump($_POST);
//                echo "<pre>";
                    //$key = "track_".md5(date("Y-m-d:").rand());

                    $this->paypal->add_field('business', 'jesusmarinos-facilitator@hotmail.com');
//                $this->paypal->add_field('return', 'http://www.streamact.com/panel/user_purchase');
                    $this->paypal->add_field('return', 'http://www.streamact.com/panel/user_purchase');
                    $this->paypal->add_field('cancel_return', 'http://www.streamact.com/panel/store');
                    $this->paypal->add_field('notify_url', 'http://www.streamact.com/panel/paypal/ipn');
                    $this->paypal->add_field('item_name', $description);
                    $this->paypal->add_field('amount', $payment);
                    $this->paypal->add_field('key', $key);
                    $this->paypal->add_field('item_number', $id);


                    $paypal_transaction = new stream\stream_paypal_transactions();
                    $paypal_transaction->type_payment = $type_payment;
                    $paypal_transaction->amount = $payment;
                    $paypal_transaction->id_producto = $_POST['id'];
                    $paypal_transaction->notes = isset($_POST['notes']) ? $_POST['notes'] : 0;
                    $paypal_transaction->id_seguimiento = $id;
                    $paypal_transaction->id_usuario = $_SESSION['user_id'];
                    $paypal_transaction->type_user = ($_SESSION['type'] == "User") ? "2" : $_SESSION['type'] == "Artist" ? "1" : "0";
                    $paypal_transaction->type_payment = $_POST['type_payment'];
                    $paypal_transaction->fecha_hora = date("Y-m-d H:i:s");
                    

                    $this->stream->persist($paypal_transaction);
                    $this->stream->flush();
                    // submit the fields to paypal
                    $this->paypal->submit_paypal_post();
                } catch (Exception $exc) {
                    echo "<pre>";
                    echo $exc->getTraceAsString();
                    echo "<pre>";
                }



//                $paypal_transaction->ipn_track_id=$myPost[''];
                //  $this->paypal->dump_fields();      // for debugging, output a table of all the fields
                break;
        }
    }

    function cancel() {
        // The order was canceled before being completed.


        echo "<br/><p><b>The order was canceled!</b></p><br />";
        foreach ($_POST as $key => $value) {
            echo "$key: $value<br>";
        }
    }

    function success() {
        // This is where you would probably want to thank the user for their order
        // or what have you.  The order information at this point is in POST 
        // variables.  However, you don't want to "process" the order until you
        // get validation from the IPN.  That's where you would have the code to
        // email an admin, update the database with payment status, activate a
        // membership, etc.  
        //        echo "<br/><p><b>Thank you for your Donation. </b><br /></p>";
        //
        //        foreach ($_POST as $key => $value) {
        //            echo "$key: $value<br>";
        //        }
        // You could also simply re-direct them to another page, or your own 
        // order status page which presents the user with the status of their
        // order based on a database (which can be modified with the IPN code 
        // below).
        // Primera comprobación. Cerraremos este if más adelante
        if ($_POST) {
            // Obtenemos los datos en formato variable1=valor1&variable2=valor2&...
            $raw_post_data = file_get_contents('php://input');
            // Los separamos en un array
            $raw_post_array = explode('&', $raw_post_data);

            // Separamos cada uno en un array de variable y valor
            $myPost = array();
            foreach ($raw_post_array as $keyval) {
                $keyval = explode("=", $keyval);
                if (count($keyval) == 2)
                    $myPost[$keyval[0]] = urldecode($keyval[1]);
            }

            // Nuestro string debe comenzar con cmd=_notify-validate
            $req = 'cmd=_notify-validate';
            if (function_exists('get_magic_quotes_gpc')) {
                $get_magic_quotes_exists = true;
            }
            foreach ($myPost as $key => $value) {
                // Cada valor se trata con urlencode para poder pasarlo por GET
                if ($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
                    $value = urlencode(stripslashes($value));
                } else {
                    $value = urlencode($value);
                }

                //Añadimos cada variable y cada valor
                $req .= "&$key=$value";
            }
            $ch = curl_init($this->paypal->paypal_url);   // Esta URL debe variar dependiendo si usamos SandBox o no. Si lo usamos, se queda así.
            //$ch = curl_init('https://www.paypal.com/cgi-bin/webscr');         // Si no usamos SandBox, debemos usar esta otra linea en su lugar.
            curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));

            if (!($res = curl_exec($ch))) {
                // Ooops, error. Deberiamos guardarlo en algún log o base de datos para examinarlo después.
                curl_close($ch);
                exit;
            }
            curl_close($ch);
            if (strcmp($res, "VERIFIED") == 0) {
                $fileDir = $_SERVER['DOCUMENT_ROOT'] . '/log/success_' . $myPost['item_number'] . "_" . $myPost['payment_status'] . "_" . date("YmdHis") . '.log';
                //$file=  @file_get_contents($fileDir);
                //$file.=$res;
                $new_file = file_put_contents($fileDir, json_encode($myPost));


                /**
                 * A partir de aqui, deberiamos hacer otras comprobaciones rutinarias antes de continuar. Son opcionales, pero recomiendo al menos las dos primeras. Por ejemplo:
                 *
                 * * Comprobar que $_POST["payment_status"] tenga el valor "Completed", que nos confirma el pago como completado.
                 * * Comprobar que no hemos tratado antes la misma id de transacción (txd_id)
                 * * Comprobar que el email al que va dirigido el pago sea nuestro email principal de PayPal
                 * * Comprobar que la cantidad y la divisa son correctas
                 */
                // Después de las comprobaciones, toca el procesamiento de los datos.

                /**
                 * En este punto tratamos la información.
                 * Podemos hacer con ella muchas cosas:
                 *
                 * * Guardarla en una base de datos.
                 * * Guardar cada linea del pedido en una linea diferente en la base de datos.
                 * * Guardar un log.
                 * * Restar las cantidades de los artículos del stock.
                 * * Enviar un mensaje de confirmcaión al cliente.
                 * * Enviar un mensaje al encargado de pedidos para que lo prepare.
                 * * Comprobar mediante complejas operaciones matemáticas si el cliente es el número un millon y notificarle de que ha ganado dos noches de hotel en Torrevieja.
                 * * ¡Imaginación!
                 */
            } else if (strcmp($res, "INVALID") == 0) {
                // El estado que devuelve es INVALIDO, la información no ha sido enviada por PayPal. Deberías guardarla en un log para comprobarlo después
            }
        } else {    // Si no hay datos $_POST
            // Podemos guardar la incidencia en un log, redirigir a una URL...
        }
    }

    function pay_mount() {
        //$this->load->view("panel/paypal/pay_mount");
    }

    function ipn() {
        // It's important to remember that paypal calling this script.  There
        // is no output here.  This is where you validate the IPN data and if it's
        // valid, update your database to signify that the user has payed.  If
        // you try and use an echo or printf function here it's not going to do you
        // a bit of good.  This is on the "backend".  That is why, by default, the
        // class logs all IPN data to a text file.


        if ($_POST) {
            // Obtenemos los datos en formato variable1=valor1&variable2=valor2&...
            $raw_post_data = file_get_contents('php://input');
            // Los separamos en un array
            $raw_post_array = explode('&', $raw_post_data);

            // Separamos cada uno en un array de variable y valor
            $myPost = array();
            foreach ($raw_post_array as $keyval) {
                $keyval = explode("=", $keyval);
                if (count($keyval) == 2)
                    $myPost[$keyval[0]] = urldecode($keyval[1]);
            }

            // Nuestro string debe comenzar con cmd=_notify-validate
            $req = 'cmd=_notify-validate';
            if (function_exists('get_magic_quotes_gpc')) {
                $get_magic_quotes_exists = true;
            }
            foreach ($myPost as $key => $value) {
                // Cada valor se trata con urlencode para poder pasarlo por GET
                if ($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
                    $value = urlencode(stripslashes($value));
                } else {
                    $value = urlencode($value);
                }

                //Añadimos cada variable y cada valor
                $req .= "&$key=$value";
            }
            $ch = curl_init($this->paypal->paypal_url);   // Esta URL debe variar dependiendo si usamos SandBox o no. Si lo usamos, se queda así.
            //$ch = curl_init('https://www.paypal.com/cgi-bin/webscr');         // Si no usamos SandBox, debemos usar esta otra linea en su lugar.
            curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));

            if (!($res = curl_exec($ch))) {
                // Ooops, error. Deberiamos guardarlo en algún log o base de datos para examinarlo después.
                curl_close($ch);
                exit;
            }
            curl_close($ch);
            $fileDir = $_SERVER['DOCUMENT_ROOT'] . '/log/res_' . date("YmdHis") . '.log';
            $new_file = file_put_contents($fileDir, $res);
            
            if (strcmp($res, "VERIFIED") == 0) {
                //$fileDir = $_SERVER['DOCUMENT_ROOT'] . '/log/ipn_' . $myPost['item_number'] . "_" . $myPost['payment_status'] . "_" . date("YmdHis") . '.log';
                //$file=  @file_get_contents($fileDir);
                //$file.=$res;
               // $new_file = file_put_contents($fileDir, json_encode($myPost));
//                $pagos = $this->stream->getRepository("stream\stream_paypal_transactions")->findBy(array(
//                    "id_seguimiento" => $myPost['item_number']
//                        ), array("id" => "desc"));
//                $pago = $pagos[0];
//                $myPost['payment_status'] = "Completed";
//                
//                $paypal_transaction = new stream\stream_paypal_transactions();
//                $paypal_transaction->txn_id=$myPost['txn_id'];
//                $paypal_transaction->ipn_track_id=$myPost['ipn_track_id'];
//                $paypal_transaction->type_payment = $pago->type_payment;
//                $paypal_transaction->amount = $pago->amount;
//                $paypal_transaction->id_producto = $pago->id_producto;
//                $paypal_transaction->notes =$pago->notes;
//                $paypal_transaction->id_seguimiento = $myPost['item_number'];
//                $paypal_transaction->id_usuario = $pago->id_usuario;
//                $paypal_transaction->type_user = $pago->type_user;
//                $paypal_transaction->fecha_hora = date("Y-m-d H:i:s");
//                $paypal_transaction->estatus=$myPost['payment_status'];
//
//                $this->stream->persist($paypal_transaction);
//                $this->stream->flush();
//                
//                
//                if ($myPost['payment_status'] == "Completed" && count($pagos)>0) {
//
//                    switch ($pago->type_payment) {
//                        case "notes":
//                            for ($i = 1; $i <= $pago->notes; $i++) {
//                                $notes = new stream\stream_notes();
//                                $notes->id_user = $pago->id_usuario;
//                                $notes->type_user = $pago->type_user;
//                                $precio =  $pago->amount / $pago->notes;
//                                $notes->precio = number_format($precio, 2);
//                                $notes->status = "new";
//                                $notes->paypal_transaction_id = $pago->id;
//                                $this->stream->persist($notes);
//                                $this->stream->flush();
//                            }
//                            break;
//                    }
//                }

                /**
                 * A partir de aqui, deberiamos hacer otras comprobaciones rutinarias antes de continuar. Son opcionales, pero recomiendo al menos las dos primeras. Por ejemplo:
                 *
                 * * Comprobar que $_POST["payment_status"] tenga el valor "Completed", que nos confirma el pago como completado.
                 * * Comprobar que no hemos tratado antes la misma id de transacción (txd_id)
                 * * Comprobar que el email al que va dirigido el pago sea nuestro email principal de PayPal
                 * * Comprobar que la cantidad y la divisa son correctas
                 */
                // Después de las comprobaciones, toca el procesamiento de los datos.

                /**
                 * En este punto tratamos la información.
                 * Podemos hacer con ella muchas cosas:
                 *
                 * * Guardarla en una base de datos.
                 * * Guardar cada linea del pedido en una linea diferente en la base de datos.
                 * * Guardar un log.
                 * * Restar las cantidades de los artículos del stock.
                 * * Enviar un mensaje de confirmcaión al cliente.
                 * * Enviar un mensaje al encargado de pedidos para que lo prepare.
                 * * Comprobar mediante complejas operaciones matemáticas si el cliente es el número un millon y notificarle de que ha ganado dos noches de hotel en Torrevieja.
                 * * ¡Imaginación!
                 */
            } else if (strcmp($res, "INVALID") == 0) {
                $fileDir = $_SERVER['DOCUMENT_ROOT'] . '/log/force_brut_ipn_' . date("YmdHis") . '.log';
                $new_file = file_put_contents($fileDir, json_encode($myPost));
                // El estado que devuelve es INVALIDO, la información no ha sido enviada por PayPal. Deberías guardarla en un log para comprobarlo después
            }
        } else {    // Si no hay datos $_POST
            $fileDir = $_SERVER['DOCUMENT_ROOT'] . '/log/force_brut_ipn_no_post_' . date("YmdHis") . '.log';
            $new_file = file_put_contents($fileDir, json_encode($myPost));
            // Podemos guardar la incidencia en un log, redirigir a una URL...
        }
    }

    function ipn_simulator($item_number) {
        $myPost = array();
        $myPost['item_number'] = $item_number;
        $pago = $this->stream->getRepository("stream\stream_paypal_transactions")->findBy(array(
            "id_seguimiento" => $myPost['item_number']
                ), array("id" => "desc"));
        $pago = $pago[0];
        $myPost['payment_status'] = "Completed";
        if ($myPost['payment_status'] == "Completed") {

            switch ($pago->type_payment) {
                case "notes":
                    for ($i = 1; $i <= $pago->notes; $i++) {
                        $notes = new stream\stream_notes();
                        $notes->id_user = $pago->id_usuario;
                        $notes->type_user = $pago->type_user;
                        $precio = $pago->notes / $pago->amount;
                        $notes->precio = number_format($precio, 2);
                        $notes->status = "new";
                        $notes->paypal_transaction_id = $pago->id;
                        $this->stream->persist($notes);
                        $this->stream->flush();
                    }
                    break;
            }
        }
    }

}

?>