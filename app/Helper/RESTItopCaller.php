<?php

namespace App\Helper;

use Illuminate\Support\Facades\Log;

use Config;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class RESTItopCaller {

  private static $baseurl;
  private static $url;
  private static $userAPI;
  private static $passwordAPI;

  public static function setValue(){

      Self::$baseurl = config('cmconfig.itopapi.base_url');
      Self::$userAPI = config('cmconfig.itopapi.user_basic_auth');
      Self::$passwordAPI = config('cmconfig.itopapi.pass_basic_auth');

  }


  public static function consume($paramArray, $endPoint){

    Self::setValue();

    $result;
    try{
        include (app_path().'/Helper/Logger/APILogger.php');

        $client = new Client(array(
                      'base_uri'=>Self::$baseurl,
                      'timeout'=>60.0,
                      'verify' => false,
                      // 'verify' => '/path/to/cacert.pem',
                      'handler' => $stack,
                  ));

        $output = $client->post(Self::$baseurl.$endPoint, [
                      'auth' => [Self::$userAPI, Self::$passwordAPI],
                      RequestOptions::JSON => $paramArray,
                  ]);
        $result = json_decode($output->getBody(),true);

    } catch(RequestException $e) {
      echo 'Message: ' .$e->getMessage();
    } catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();
    }

    return $result;

  }

  public static function consumeLogin($paramArray, $endPoint){

    Self::setValue();

    Log::info('login user '.$paramArray['user']);

    $result;
    try{
        $client = new Client(array(
                      'base_uri'=>Self::$baseurl,
                      'timeout'=>2.0,
                      'verify' => false,
                      // 'verify' => '/path/to/cacert.pem',
                  ));

        $output = $client->post(Self::$baseurl.$endPoint, [
                      'auth' => [Self::$userAPI, Self::$passwordAPI],
                      RequestOptions::JSON => $paramArray,
                  ]);
        $result = json_decode($output->getBody(),true);

    } catch(RequestException $e) {
      echo 'Message: ' .$e->getMessage();
    } catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();
    }

    Log::info('login user result');
    Log::info($result);

    return $result;

  }


}

?>
