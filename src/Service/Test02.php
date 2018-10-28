<?php
/**
 * Created by PhpStorm.
 * User: nmoller
 * Date: 28/10/18
 * Time: 8:33 AM
 */

namespace Nmoller\Service;


class Test02
{
    public function __construct($param)
    {
        $this->parameter = $param;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        ob_start();
        var_dump($this->parameter);
        $string = ob_flush();
        return "$string";
    }
}