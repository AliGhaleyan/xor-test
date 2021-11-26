<?php


namespace App;


class XorEncrypt
{
    protected string $key = "test-key";

    public function encrypt(string $text): string
    {
        $outText = '';
        for ($i = 0; $i < strlen($text);) {
            for ($j = 0; ($j < strlen($this->key) && $i < strlen($text)); $j++, $i++) {
                $outText .= $text[$i] ^ $this->key[$j];
            }
        }
        return $outText;
    }

    public function decrypt(string $text): string
    {
        return $this->encrypt($text);
    }
}