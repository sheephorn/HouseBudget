<?php

namespace App\Definitions;

class FunctionsDefinition
{
    const LOGIN_VIEW = "LOGIN_VIEW";

    const URL = [
        self::LOGIN_VIEW => "login/index",
    ];

    const CONTROLLER = [
        self::LOGIN_VIEW => "LoginController@getView",
    ];

    const VIEW = [
        self::LOGIN_VIEW => "login",
    ];

    const TITLE = [
        self::LOGIN_VIEW => "LOGIN",
    ];
}
