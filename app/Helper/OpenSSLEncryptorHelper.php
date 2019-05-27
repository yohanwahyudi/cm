<?php

namespace App\Helper;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use Config;


class OpenSSLEncryptorHelper
{
  private static $openssl_key;
  private static $openssl_iv64;
  private static $openssl_chiper;

  public static function setValue(){
    Self::$openssl_key    = config('cmconfig.app.openssl_key_cm');
    Self::$openssl_iv64   = config('cmconfig.app.openssl_iv64_cm');
    Self::$openssl_chiper = config('cmconfig.app.openssl_chiper_cm');
  }

  public static function encrypt($plain){
    Self::setValue();

    $encrypt = openssl_encrypt($plain, Self::$openssl_chiper, Self::$openssl_key, $options=0, Base64_decode(Self::$openssl_iv64));

    return $encrypt;

  }

  public static function decrypt($encrypt){
      Self::setValue();

      $decrypt = openssl_decrypt($encrypt, Self::$openssl_chiper, Self::$openssl_key, $options=0, Base64_decode(Self::$openssl_iv64));

      return $decrypt;

  }

}
