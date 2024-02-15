<?php

namespace App\Http\Controllers;

use App\Jobs\DispatchDataInvestProduct;
use Illuminate\Http\Request;

class GetDataInvestProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        DispatchDataInvestProduct::dispatch();

        return response()->json(['message'=>'job running in background']);
    }
}
