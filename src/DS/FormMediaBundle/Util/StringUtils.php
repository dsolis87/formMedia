<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 07/06/2015
 * Time: 04:52 PM
 */

namespace DS\FormMediaBundle\Util;


class StringUtils {

    public static function contains($string, $search) {
        $pos = strpos($string, $search);

        if ($pos === false) {
            return false;
        }
        else {
            return true;
        }
    }

}