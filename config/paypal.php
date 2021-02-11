<?php
return [
    'client_id'                     => 'AcWW_zaJxVG1uprEY7a_LOtIfxoWlitIggUFCGQCW9EvG_lQuLdAmYJjS5ssr_t7jt-jTXFUOIYVnhxy',
'secret'                            => 'EIanzeh9hrdd-8q_dOTYNG7-kGxk45t6zCCUvAWb0VqGMz7P8Wb6UWY5kl77OEGhTB76o4Xg_VlDmaQz',
    'settings' => array(
        'mode'                      => 'sandbox',
        'http.ConnectionTimeOut'    => 30,
        'log.LogEnabled'            => true,
        'log.FileName'              => storage_path() . '/logs/paypal.log',
        'log.LogLevel'              => 'ERROR'
    ),
];
