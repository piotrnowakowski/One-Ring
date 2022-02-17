<?php

class Transaction
{

    private $userid ;
    private $id;
    private $streaming_type;
    private $streaming_site;
    private $price;
    private $email;
    private $password;
    private $time;

    public function __construct($userid, $id, $price, $email, $password, $time,
                                $streaming_type=1, $streaming_site='Netflix')
    {
        $this->userid = $userid;
        $this->id = $id;
        $this->streaming_type = $streaming_type;
        $this->streaming_site = $streaming_site;
        $this->price = $price;
        $this->email = $email;
        $this->password = $password;
        $this->time = $time;
    }


    public function getUserid()
    {
        return $this->userid;
    }

    public function setUserid($userid): void
    {
        $this->userid = $userid;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getStreamingType()
    {
        return $this->streaming_type;
    }

    public function setStreamingType($streaming_type): void
    {
        $this->streaming_type = $streaming_type;
    }

    public function getStreamingSite()
    {
        return $this->streaming_site;
    }

    public function setStreamingSite($streaming_site): void
    {
        $this->streaming_site = $streaming_site;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function setTime($time): void
    {
        $this->time = $time;
    }

}