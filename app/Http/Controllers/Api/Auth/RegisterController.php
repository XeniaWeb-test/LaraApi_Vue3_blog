<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\Auth\ApiRegisterRequest;
use App\Models\User;
use Illuminate\Validation\ValidationException;


class RegisterController extends BaseController
{
    /**
     * Handle the incoming request.
     * @throws ValidationException
     */
    public function __invoke(ApiRegisterRequest $request)
    {
        $user = User::create($request->validated());

        $success['token'] = $user->createToken('MyApi')->plainTextToken;
        $success['name'] = $user->name;
        $success['user'] = $user;
        return $this->sendResponse($success, 'User register successfully', 201);
    }
}
