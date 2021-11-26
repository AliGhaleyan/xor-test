<?php


class EncryptionTest extends \PHPUnit\Framework\TestCase
{
    public function testEncryption()
    {
        $encryption = new \App\Encryption();
        $text = "ali serjik";
        $encrypted = $encryption->encrypt($text);
        $this->assertTrue(is_string($encrypted));
        $decrypted = $encryption->decrypt($encrypted);
        $this->assertEquals($decrypted, $text);
    }
}