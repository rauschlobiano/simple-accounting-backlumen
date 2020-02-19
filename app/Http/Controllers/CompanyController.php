<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use  App\Company;

class CompanyController extends Controller
{
     /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get the authenticated User.
     *
     * @return Response
     */
    public function getCompany($id)
    {
        $company = Company::findOrFail($id);
        return response()->json(['company' => $company], 200);
    }
}
