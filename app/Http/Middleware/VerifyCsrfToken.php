<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;
use Illuminate\Http\Request;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    /**
     * トークン管理
     * @param  Object  $request Request
     * @todo 暫定的に、ajaxでtokenがあれば強制的に通過する処理にしている
     *       いずれ修正予定
     */
    protected function tokensMatch($request)
    {
        if ($request->ajax() && $request->header('X-CSRF-TOKEN') !== "") {
            $ret = true;
            return $ret;
        } else {
            //
        }
    }
}
