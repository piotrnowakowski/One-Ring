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
    public function addTransaction(Transaction $project):void
    {
        $date = new DateTime($datetime = 'now');
        $stmt = $this->database->connect()->prepare(
            'INSERT INTO transaction (user_id, streaming_type, streaming_site, price, email, password, time_start, time_end)
                    VALUES(?,?,?,?,?,?,?,?) RETURNING transaction.id');
        $user_id = 1;
        $stmt->execute([
            $user_id,
            $project->getStreamingType(),
            $project->getStreamingSite(),
            $project->getPrice(),
            $project->getEmail(),
            $project->getPassword(),
            $project->getTimeStart(),
            $project->getTimeEnd()
            ]);
        $trans_id = $stmt->fetchAll();
        //print_r($trans_id);
        $stmt = $this->database->connect()->prepare(
            'INSERT INTO public.order_book (transaction_id, open, seller_id)
                    VALUES(?,?,?)');
        $user_id = 1;
        $stmt->execute([
            $trans_id[0]['id'],
            1,
            $user_id
        ]);
    }
    public function getWholeOrderBook()
    {
        $result = [];
        $stmt = $this->database->connect()->prepare(
            'SELECT public.order_book.id, public.order_book.transaction_id, public.order_book.open, 
       public.order_book.seller_id, public.transaction.streaming_type, 
       public.transaction.streaming_site, public.transaction.price, public.transaction.time_end, public.transaction.time_start,
       public.transaction.id, public.transaction.email, public.transaction.password 
       FROM public.order_book INNER JOIN public.transaction
        ON public.order_book.transaction_id=public.transaction.id  WHERE public.order_book.open = 1');
        $stmt->execute();
        $order_book = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($order_book as $order_book)
        {
            $result[] = new Transaction(
                $order_book['seller_id'],
                $order_book['id'],
                $order_book['price'],
                $order_book['email'],
                $order_book['password'],
                $order_book['time_start'],
                $order_book['time_end'],
                $order_book['streaming_type'],
                $order_book['streaming_site']
            );
        }

        return $result;
    }
}