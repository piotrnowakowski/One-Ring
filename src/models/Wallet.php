<?php

class Wallet
{
private $mnemonic_phrase;
private $private_key;
private $wallet_json_name;

    public function __construct($mnemonic_phrase, $private_key, $wallet_json_name)
    {
        $this->mnemonic_phrase = $mnemonic_phrase;
        $this->private_key = $private_key;
        $this->wallet_json_name = $wallet_json_name;
    }

    public function getMnemonicPhrase()
    {
        return $this->mnemonic_phrase;
    }

    public function getPrivateKey()
    {
        return $this->private_key;
    }

    public function getWalletJsonName()
    {
        return $this->wallet_json_name;
    }

    public function setMnemonicPhrase($mnemonic_phrase)
    {
        $this->mnemonic_phrase = $mnemonic_phrase;
    }

    public function setPrivateKey($private_key)
    {
        $this->private_key = $private_key;
    }

    public function setWalletJsonName($wallet_json_name)
    {
        $this->wallet_json_name = $wallet_json_name;
    }

}