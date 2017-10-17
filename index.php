<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/10/2017
 * Time: 16:49
 */

include('vendor/autoload.php');


$systempay = new \Systempay\Systempay('41609008');

$systempay->set_amount(1500)
          ->set_trans_id('000012')
          ->set_cust_name('Hyder Bangash')
          ->set_url_return('http://playground.stella-telecom.devlocal/systempay/');
//create the signature
$systempay->set_signature();
//create html systempay call form
$payment_form = $systempay->get_form(
    '<button class="btn btn-lg btn-primary btn-payment" type="submit">Valider et payer</button>'
);


echo $payment_form;