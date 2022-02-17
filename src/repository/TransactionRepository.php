<?php


require_once 'Repository.php';
require_once __DIR__.'/../models/Transaction.php';

class TransactionRepository extends Repository
{
    public function getTransaction(string $id): ?Transaction
    {
        $stmt = $this->database->connect()->prepare(
            'SELECT * FROM public.transaction WHERE id = :id');

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $transaction = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($transaction == false) {
            return null;
        }

        return new Transaction(
            $transaction['id'],
            $transaction['price'],
            $transaction['email'],
            $transaction['password'],
            $transaction['time'],
            $transaction['streaming_type'],
            $transaction['streaming_site']
        );
    }
        public function addTransaction(Project $project):void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare(
            'INSERT INTO transaction (user_id, streaming_type, streaming_site, price, email, password, time)
                    VALUES(?,?,?,?,?,?,?)');
        $user_id = 1;
        $stmt->execute([
            $user_id,
            $project->getStreamingType(),
            $project->getStreamingSite(),
            $project->getPrice(),
            $project->getEmail(),
            $project->getPassword(),
            $date->format('Y-m-d H:i:s')
            ]);

    }
}