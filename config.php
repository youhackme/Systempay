<?php
return [

    env('SYSTEMPAY_SITE_ID') => [
        'key'    => env('SYSTEMPAY_KEY'),
        'params' => [
            //Put here your generals payment call parameters
            'vads_page_action'    => 'PAYMENT',
            'vads_action_mode'    => 'INTERACTIVE',
            'vads_payment_config' => 'SINGLE',
            'vads_page_action'    => 'PAYMENT',
            'vads_version'        => 'V2',
            'vads_trans_date'     => gmdate('YmdHis'),
            'vads_currency'       => '978',
        ],
    ],
    //Systempay's url
    'url'                    => env('SYSTEMPAY_URL'),

];