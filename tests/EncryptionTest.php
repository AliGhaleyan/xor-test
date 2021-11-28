<?php


use App\XCrypt;

class EncryptionTest extends \PHPUnit\Framework\TestCase
{
    protected ?XCrypt $xor;
    protected string $text = "test text";

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->xor = new XCrypt;
    }

    public function test_encryption()
    {
        $this->assertTrue(is_string($this->xor->encrypt($this->text)));
    }

    public function test_decryption()
    {
        $encrypted = $this->xor->encrypt($this->text);
        $this->assertEquals($this->text, $this->xor->decrypt($encrypted));
    }
}