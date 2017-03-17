<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Definitions\FunctionsDefinition;

class LoginController extends BaseController
{
    public function getView(Request $request)
    {
        return view(FunctionsDefinition::VIEW[array_search($request->path(), FunctionsDefinition::URL)]);
    }
}
