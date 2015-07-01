<?php

    namespace example\linkest;

    class RomanosConverter {
        private static $map = array(
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        );

        public static function convert($in) {
            $result = $prev = 0;
            if (empty($in)) throw new \Exception('Invalid Argument');
            $arg = array_reverse(str_split($in));
            foreach ($arg as $i => $letra) {
                if($prev > self::$map[$letra])
                    $result -= self::$map[$letra];
                else $result += self::$map[$letra];
                $prev = self::$map[$letra];
            }
            return $result;
        }
    }