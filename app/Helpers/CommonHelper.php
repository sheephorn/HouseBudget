<?php

use App\Definitions\FunctionsDefinition;

/**
 * Pathを取得する
 * 引数がある場合はそのＵＲＬのpath
 * なければ現在のＵＲＬのpath
 *
 * @param  String $url URL
 * @return String      Path
 */
function getPath($url = null)
{
    if ($url === null) {
        $fullpath = $_SERVER["REQUEST_URI"];
    } else {
        $fullpath = $url;
    }
    $path = explode("/", $fullpath);
    $path = array_slice($path, -2);
    $path = implode("/", $path);
    return $path;
}
