  <?php

$key = env('APP_KEY_CM');
$cipher = env('OPENSSL_CHIPER_CM');
$iv64 = env('OPENSSL_IV_CM');
$message = env('ITOP_API_AUTH_PASS');

return [

  /*
  | local app custom config
  | cm config
  */

  'itopapi'    =>  [
    'base_url'        =>  'https://139.255.57.82/itop/restitop/api.php',
    // 'base_url'        =>  'https://gitdev.visionet.co.id/itop/restitop/api.php',

    'user_basic_auth' =>  openssl_decrypt($message, $cipher, $key, $options=0, Base64_decode($iv64)),
    'pass_basic_auth' =>  openssl_decrypt($message, $cipher, $key, $options=0, Base64_decode($iv64)),
    'timeout'         =>  20,

    //api endpoint
    'login_endpoint'       =>  '/check_user_credential',
    'get_change_by_org'    =>  '/get_list_change',
    'get_change_by_id'     =>  '/get_detail_change',
  ],

  'app'      =>  [
    /*
      | 1  = Administrator
      | 9  = Change Approver
      | 7  = Change Implementor
      | 30 = Change Requestor
      | 8  = Change Supervisor
    */
    'valid_profile'   =>  Array(1,9,7,30,8),

    'openssl_key_cm'     =>  env('APP_KEY_CM'),
    'openssl_iv64_cm'    =>  env('OPENSSL_IV_CM'),
    'openssl_chiper_cm'  =>  env('OPENSSL_CHIPER_CM'),

  ],


];
