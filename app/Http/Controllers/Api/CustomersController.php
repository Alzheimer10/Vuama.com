<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;

class CustomersController extends Controller
{

    /**
     * return paginated records of users
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $users = Customer::orderBy('created_at', 'desc');
        return response()->json($users->paginate(100));
    }

}
