<?php
$aModule = [
    'id'          => 'aspaypal_connector',
    'title'       => 'Aggrosoft Paypal Connector <b style="color:red;">(activate this before Aggrosoft Paypal Module!)</b>',
    'description' => 'aspaypal module dependencies for build 483',
    'thumbnail'   => 'paypal.png',
    'version'     => '1.0.0 (2017-08-24)',
    'author'      => 'Marat Bedoev',
    'email'       => 'm@marat.ws',
    'extend'      => [
        'InvoicepdfArticleSummary' => 'aspaypal_connector/extend/InvoicepdfArticleSummaryAspaypal'
    ],
    'files'       => [
        // application/controllers/admin
        'aspaypal_check'                   => 'aspaypal_connector/application/controllers/admin/aspaypal_check.php',
        'aspaypal_csv'                     => 'aspaypal_connector/application/controllers/admin/aspaypal_csv.php',
        'aspaypal_info'                    => 'aspaypal_connector/application/controllers/admin/aspaypal_info.php',
        'aspaypal_transactions'            => 'aspaypal_connector/application/controllers/admin/aspaypal_transactions.php',
        'order_aspaypal'                   => 'aspaypal_connector/application/controllers/admin/order_aspaypal.php',
        // application/controllers
        'aspaypal_cron'                    => 'aspaypal_connector/application/controllers/aspaypal_cron.php',
        'aspaypal_express_checkout'        => 'aspaypal_connector/application/controllers/aspaypal_express_checkout.php',
        'aspaypal_express_checkout_cancel' => 'aspaypal_connector/application/controllers/aspaypal_express_checkout_cancel.php',
        'aspaypal_ipn'                     => 'aspaypal_connector/application/controllers/aspaypal_ipn.php',
        'aspaypal_return'                  => 'aspaypal_connector/application/controllers/aspaypal_return.php',
        'aspaypal_return_cancel'           => 'aspaypal_connector/application/controllers/aspaypal_return_cancel.php',
        'aspaypal_return_cancel_partner'   => 'aspaypal_connector/application/controllers/aspaypal_return_cancel_partner.php',
        'aspaypal_return_partner'          => 'aspaypal_connector/application/controllers/aspaypal_return_partner.php',
        'aspaypal_webhook'                 => 'aspaypal_connector/application/controllers/aspaypal_webhook.php',
        // application/models
        'agarticleutils'                   => 'aspaypal_connector/application/models/agarticleutils.php',
        'agconfig'                         => 'aspaypal_connector/application/models/agconfig.php',
        'agcounter'                        => 'aspaypal_connector/application/models/agcounter.php',
        'agdeliverysetlist'                => 'aspaypal_connector/application/models/agdeliverysetlist.php',
        'agf'                              => 'aspaypal_connector/application/models/agf.php',
        'aglang'                           => 'aspaypal_connector/application/models/aglang.php',
        'agnvpservice'                     => 'aspaypal_connector/application/models/agnvpservice.php',
        'agpaypalhelper'                   => 'aspaypal_connector/application/models/agpaypalhelper.php',
        'agpendingorder'                   => 'aspaypal_connector/application/models/agpendingorder.php',
        'agpendingorderlist'               => 'aspaypal_connector/application/models/agpendingorderlist.php',
        'agpicturehandler'                 => 'aspaypal_connector/application/models/agpicturehandler.php',
        'agppbankdata'                     => 'aspaypal_connector/application/models/agppbankdata.php',
        'agppplushelper'                   => 'aspaypal_connector/application/models/agppplushelper.php',
        'agrestservice'                    => 'aspaypal_connector/application/models/agrestservice.php',
        'agseoencoder'                     => 'aspaypal_connector/application/models/agseoencoder.php',
        'agseoencoderarticle'              => 'aspaypal_connector/application/models/agseoencoderarticle.php',
        'agsession'                        => 'aspaypal_connector/application/models/agsession.php',
        'agutils'                          => 'aspaypal_connector/application/models/agutils.php',
        'agutilscount'                     => 'aspaypal_connector/application/models/agutilscount.php',
        'agutilsdate'                      => 'aspaypal_connector/application/models/agutilsdate.php',
        'agutilsfile'                      => 'aspaypal_connector/application/models/agutilsfile.php',
        'agutilsobject'                    => 'aspaypal_connector/application/models/agutilsobject.php',
        'agutilspic'                       => 'aspaypal_connector/application/models/agutilspic.php',
        'agutilsserver'                    => 'aspaypal_connector/application/models/agutilsserver.php',
        'agutilsurl'                       => 'aspaypal_connector/application/models/agutilsurl.php',
        'agutilsview'                      => 'aspaypal_connector/application/models/agutilsview.php',
        'agvatselector'                    => 'aspaypal_connector/application/models/agvatselector.php'
    ],
    'templates'   => [
        // admin
        'aspaypal_info.tpl'         => 'aspaypal_connector/application/views/admin/tpl/aspaypal_info.tpl',
        'aspaypal_transactions.tpl' => 'aspaypal_connector/application/views/admin/tpl/aspaypal_transactions.tpl',
        'order_aspaypal.tpl'        => 'aspaypal_connector/application/views/admin/tpl/order_aspaypal.tpl',
    ],
    /*'blocks'      => [
        [
            'template' => 'page/checkout/basket.tpl',
            'block'    => 'basket_btn_next_top',
            'file'     => '../aspaypal/views/blocks/basket_btn_next_top.tpl'
        ],
        [
            'template' => 'page/details/inc/productmain.tpl',
            'block'    => 'details_productmain_tobasket',
            'file'     => '../aspaypal/views/blocks/details_productmain_tobasket.tpl'
        ],
        [
            'template' => 'page/checkout/payment.tpl',
            'block'    => 'select_payment',
            'file'     => '../aspaypal/views/blocks/select_payment.tpl'
        ]
    ]*/
];