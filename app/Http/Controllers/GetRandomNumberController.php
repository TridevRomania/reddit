<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetRandomNumberController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $array = [13, 15, 20, 100, 456];

        // extended&extendWith[]=-3&extendWith[]=3000&extendWith[]=5000
        if ($request->has('extended')) {
            if ($request->has('extendWith')) {
                array_push($array, ...$request->get('extendWith'));
            } else {
                array_push($array, 1000, 2000, 3000);
            }
        }

        return $array[rand(0, count($array) - 1)];
    }
}
