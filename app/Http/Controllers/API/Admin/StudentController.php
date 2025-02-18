<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Admin\GetStudentsRequest;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    protected function index(GetStudentsRequest $request)
    {
        return Response::json([
            'message' => 'Hello, World!'
        ]);
    }
}
