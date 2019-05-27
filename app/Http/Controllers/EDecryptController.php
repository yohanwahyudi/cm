<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

use Config;

use App\Helper\OpenSSLEncryptorHelper;

class EDecryptController extends Controller
{

    public function encrypt(Request $request){

        $input    = $request->plain;
        $encrypt  = OpenSSLEncryptorHelper::encrypt($input);

        Log::info($encrypt);

        // return view('tools.tools1')->with('resp', array('encrypt'=>$encrypt, 'plain'=>$input));
        return view('tools.tools1', compact('input','encrypt'));

    }

    public function decrypt(Request $request){

        $input    = $request->plain;
        $decrypt  = OpenSSLEncryptorHelper::decrypt($input);

        return view('tools.tools1')->with('resp',$decrypt);

    }

}
