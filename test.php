<?php
/**
 * Created by PhpStorm.
 * User: rus
 * Date: 27.01.19
 * Time: 20:08
 */

$arr = ['Ruslan', 'Kate', 'Rupert', 'Karl'];

$param = $_GET['p'];
$hint = '';

if (isset($param)) {
    $param_len = strlen($param);
    $param = strtolower($param);
    if ($param_len) {
        foreach ($arr as $name) {
            if (stristr(substr($name, 0, $param_len), $param)) {
                if ($hint) {
                    $hint.=", $name";
                } else {
                    $hint = $name;
                }
            }
        }
    }
}

echo $hint !== '' ? $hint : 'no suggestions';





