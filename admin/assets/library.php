<?php
class library {

    function getRandomID()  {
        $char = "0123456789";
        $random = null;
        for ($i = 0; $i < 3; $i++) {
            $index = rand(0, strlen($char) - 1);
            $random .= $char[$index];
        }
        return $random;
    }

    function getRandomID5() {
        $char = "0123456789";
        $random = null;
        for ($i = 0; $i < 5; $i++) {
            $index = rand(0, strlen($char) - 1);
            $random .= $char[$index];
        }
        return $random;
    }

    function getRandomID4() {
        $char = "0123456789";
        $random = null;
        for ($i = 0; $i < 4; $i++) {
            $index = rand(0, strlen($char) - 1);
            $random .= $char[$index];
        }
        return $random;
    }
}
