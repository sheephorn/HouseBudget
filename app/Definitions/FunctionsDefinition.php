<?php

namespace App\Definitions;

/**
 * 機能IDを定義
 */
class FunctionsDefinition
{
    const LOGIN_VIEW = "LOGIN_VIEW";
    const LOGIN = "LOGIN";

    const URL = [
        self::LOGIN_VIEW => "login/index",
        self::LOGIN => "login/login",
    ];

    const CONTROLLER = [
        self::LOGIN_VIEW => "LoginController@getView",
        self::LOGIN => "LoginController@login",
    ];

    const VIEW = [
        self::LOGIN_VIEW => "login",
    ];

    const TITLE = [
        self::LOGIN_VIEW => "LOGIN",
    ];
}
