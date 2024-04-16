<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    use ApiResponser;
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getUsers()
    {
        
    }

    /**
     * Return the list of users
     * @return Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function add(Request $request)
    {
        
    }

    /**
     * Obtains and shows one user
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Update an existing user
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove an existing user
     * @return Illuminate\Http\Response
     */
    public function delete($id)
    {
        
    }
}
