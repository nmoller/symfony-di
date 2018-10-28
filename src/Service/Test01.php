<?php
/**
 * Created by PhpStorm.
 * User: nmoller
 * Date: 28/10/18
 * Time: 8:32 AM
 */

namespace Nmoller\Service;


class Test01
{
    function setTest02(Test02 $test02) {
        $this->test02 = $test02;
    }

    public function getEchoFromT02() {
        echo $this->test02;
    }

    public function getValFromT2()
    {
        // TODO: Implement __toString() method.
        return $this->test02->parameter;
    }
}