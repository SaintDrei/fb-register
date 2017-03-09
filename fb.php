<?php
    require 'api/Facebook/facebook.php';
    
    $config['App_ID'] = '447508155589994';
    $config['App_Secret'] = '7ba8fbc2c2578656b78eeecf28700c22';

    $facebook = new Facebook(array('appId' => $config['App_ID' ],
                                  'secret' => $config['App_Secret']
                                  ));
?>