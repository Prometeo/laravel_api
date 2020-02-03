<?php

namespace App\Http\Controllers;

use App\Cakes;
use Illuminate\Http\Request;

class ApiTestController extends Controller
{
    public function createSomething(Request $request){
        $cake = new Cakes;
        $cake->code = $request->code;
        $cake->name = $request->name;
        $cake->description = $request->description;
        $cake->brand_id = $request->brand_id;
        $l = $cake->save();
        echo($cake);
        return response()->json([
        "message" => "user record created"
    ], 201);
    }
}
