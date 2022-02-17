<?php

class User
{
    private $email;
    private $password;
    private $name;
    private $surname;
    private $balance;
    private $enabled;
    private $nick;

    public function getNick()
    {
        return $this->nick;
    }

    public function setNick($nick): void
    {
        $this->nick = $nick;
    }

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled($enabled): void
    {
        $this->enabled = $enabled;
    }

    public function __construct(string $email, string $password, string $name, string $surname,
                                string $nick, float $balance=0, int $enabled=0)
    {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->balance = $balance;
        $this->enabled = $enabled;
        $this->nick = $nick;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function setBalance(float $balance)
    {
        $this->balance = $balance;
    }
}