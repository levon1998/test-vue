<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivatePageController extends Controller
{
    /**
     * Function to check user Password (password = 123456)
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkPassword(Request $request)
    {
        $pass = $request->input('password');

        if ($pass == '123456') {
            session()->put('hasAccessToPrivate', true);
            return response()->json(['status' => 'ok'])->setStatusCode(200);
        } else {
            return response()->json(['status' => 'invalid'])->setStatusCode(401);
        }
    }

    /**
     * Function to check has user access to private page
     */
    public function checkAccess()
    {
        if (session()->get('hasAccessToPrivate')) {
            return response()->json(['status' => 'ok'])->setStatusCode(200);
        } else {
            return response()->json(['status' => 'invalid'])->setStatusCode(401);
        }
    }
}
