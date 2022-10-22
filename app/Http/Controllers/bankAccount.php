<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class bankAccount extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
       // $res=DB::raw("select u.income, ba.balance from users u, bank_accounts ba where ui.id=ba.user_id")->getValue();

        $res = DB::table('users')
                    ->join('bank_accounts','users.id','=','bank_accounts.user_id')
                    ->select('users.income','bank_accounts.balance')
                    ->get();


        return Response(json_encode($res,JSON_PRETTY_PRINT));
    }
}
