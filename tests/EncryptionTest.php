<?php


use App\XCrypt;

class EncryptionTest extends \PHPUnit\Framework\TestCase
{
    protected XCrypt $sut;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->sut = new XCrypt;
    }

    public function test_encryption_returns_correct_value()
    {
        //arrange
        $unEncryptedText = 'un-encrypted-text';
        $encryptedTestInHexFormat = '010b5e114308170004111610001f000100';

        //act
        $encryptedText = $this->sut->encrypt($unEncryptedText);


        $this->assertEquals($encryptedTestInHexFormat, bin2hex($encryptedText));
    }


    public function test_decryption_returns_correct_value()
    {
        //arrange
        $unEncryptedText = 'un-encrypted-text';
        $encryptedTestInHexFormat = '010b5e114308170004111610001f000100';

        //act
        $decryptedTest = $this->sut->decrypt(hex2bin($encryptedTestInHexFormat));

        //assert
        $this->assertEquals($unEncryptedText, $decryptedTest);
    }

}