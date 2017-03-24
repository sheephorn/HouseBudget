<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Services\LoginService;
use App\Definitions\FunctionsDefinition;

class LoginController extends BaseController
{
    private $loginService;

    public function __constract(
        LoginService $loginService
        )
    {
        $this->loginService = $loginService;
    }
    /**
     * ログイン画面の表示
     * @param  Object $request Request
     * @return View           ログイン画面
     */
    public function getView(Request $request)
    {
        return view(FunctionsDefinition::VIEW[array_search($request->path(), FunctionsDefinition::URL)]);
    }

    /**
     * ログイン
     * ログイン可能な場合、ログイン先urlを返す
     *
     * @param  Request $request Rquest
     * @return Array           結果コード、リダイレクト先のurlを含む配列
     */
    public function login(Request $request)
    {
        return $this->loginService->login();
    }
}
