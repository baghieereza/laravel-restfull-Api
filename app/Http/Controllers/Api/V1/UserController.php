<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Helper;
use App\Repositories\Interfaces\User as UserInterface;
use Illuminate\Http\Request;

/**
 * Class UserController
 *
 * @package \App\Http\Controllers\Api\V1
 */
class UserController extends Controller
{
    public $user;

    public function __construct(UserInterface $UserInterface)
    {
        $this->user = $UserInterface;
    }


    public function All()
    {
        $data = $this->user->all();
        return response()->json(["success" => true, "data" => $data], 200);
    }

    public function store(Request $request)
    {
        // validation
        $rules = [
            'name' => 'required|unique:users',
            'family' => 'required|unique:users',
            "avatar" => "required|mimes:jpeg,png,jpg,gif,svg|max:2000"
        ];
        if (Helper::Validation($request, $rules) <> null) {
            return Helper::Validation($request, $rules);
        }

        //store data
        $data = $this->user->store($request);

        //return response
        return response()->json($data, 200);
    }
}
