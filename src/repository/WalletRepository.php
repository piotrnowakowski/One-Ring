<?php


require_once 'Repository.php';
require_once __DIR__.'/../models/Wallet.php';

class WalletRepository extends Repository
{
    public function getWallet(string $id): ?Wallet
    {
        $stmt = $this->database->connect()->prepare(
            'SELECT * FROM public.wallet WHERE id = :id');

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $wallet = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($wallet == false) {
            return null;
        }

        return new Wallet(
            $wallet['mnemonic_phrase'],
            $wallet['private_key'],
            $wallet['wallet_json_name']
        );
    }
    public function addWallet(Wallet $wallet):void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare(
            'INSERT INTO wallet (mnemonic_phrase, private_key, wallet_json_name)
                    VALUES(?,?,?)');
        $stmt->execute([
            $wallet->getMnemonicPhrase(),
            $wallet->getPrivateKey(),
            $wallet->getWalletJsonName()
        ]);

    }
}