<?php

namespace App\Definitions;

/**
 * 機能IDを定義
 */
class FunctionsDefinition
{
    const VIEW_LOGIN = "VIEW_LOGIN";
    const VIEW_INDEX = "VIEW_INDEX";
    const GET_LOGIN = "GET_LOGIN";
    const REGIST_NEW_MEMBER = "REGIST_NEW_MEMBER";

    const URL = [
        self::VIEW_LOGIN => "login/index",
        self::VIEW_INDEX => "member/index",
        self::GET_LOGIN => "login/login",
        self::REGIST_NEW_MEMBER => "member/regist",
    ];

    const CONTROLLER = [
        self::VIEW_LOGIN => "LoginController@getView",
        self::VIEW_INDEX => "LoginController@getView",
        self::GET_LOGIN => "LoginController@login",
        self::REGIST_NEW_MEMBER => "LoginController@regist",
    ];

    const VIEW = [
        self::VIEW_LOGIN => "login",
    ];

    const TITLE = [
        self::VIEW_LOGIN => "LOGIN",
    ];

    const IGNORE_LOGIN_MIDDLEWARE = [
        self::VIEW_LOGIN => self::VIEW_LOGIN,
        self::GET_LOGIN => self::GET_LOGIN,
        self::REGIST_NEW_MEMBER => self::REGIST_NEW_MEMBER,
    ];
}
