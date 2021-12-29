<?php

class Admin
{
    private $name;
    private $email;
    private $password;
    private $chucvu;
    private $id;
    private $diachi;
    private $sdt;
    public function __construct($id,$name, $mail, $pass,$diachi,$sdt,$chucvu)
    {
        $this->id =$id;
        $this->name = $name;
        $this->email = $mail;
        $this->password = $pass;
        $this->diachi = $diachi;
        $this->sdt = $sdt;
        $this->chucvu = $chucvu;
    }
    public function get_id()
    {
        return $this->id;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function get_password()
    {
        return $this->password;
    }
    public function get_diachi()
    {
        return $this->diachi;
    }
    public function get_sdt()
    {
        return $this->sdt;
    }
    public function get_chucvu()
    {
        return $this->chucvu;
    }
    
}

