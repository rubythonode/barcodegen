<?php
/**
 *
 * @author RW <raff@picoprime.com>
 * Date: 14/09/15
 */

namespace PicoPrime\BarcodeGen;

class Code39 implements BarcodeString
{
    /**
     * Generate barcode in Code39 standard.
     *
     * @return string
     */
    public function generateString($text)
    {
        $codeString = '';
        $text = strtoupper($text);

        $codeArray = [
            "0" => "111221211",
            "1" => "211211112",
            "2" => "112211112",
            "3" => "212211111",
            "4" => "111221112",
            "5" => "211221111",
            "6" => "112221111",
            "7" => "111211212",
            "8" => "211211211",
            "9" => "112211211",
            "A" => "211112112",
            "B" => "112112112",
            "C" => "212112111",
            "D" => "111122112",
            "E" => "211122111",
            "F" => "112122111",
            "G" => "111112212",
            "H" => "211112211",
            "I" => "112112211",
            "J" => "111122211",
            "K" => "211111122",
            "L" => "112111122",
            "M" => "212111121",
            "N" => "111121122",
            "O" => "211121121",
            "P" => "112121121",
            "Q" => "111111222",
            "R" => "211111221",
            "S" => "112111221",
            "T" => "111121221",
            "U" => "221111112",
            "V" => "122111112",
            "W" => "222111111",
            "X" => "121121112",
            "Y" => "221121111",
            "Z" => "122121111",
            "-" => "121111212",
            "." => "221111211",
            " " => "122111211",
            "$" => "121212111",
            "/" => "121211121",
            "+" => "121112121",
            "%" => "111212121",
            "*" => "121121211"
        ];

        for ($X = 1; $X <= strlen($text); $X++) {
            $codeString .= $codeArray[substr($text, ($X - 1), 1)] . "1";
        }

        return "1211212111" . $codeString . "121121211";
    }
}