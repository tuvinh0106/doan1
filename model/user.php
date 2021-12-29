<?php

class User
{
    private $id;
    private $user_name;
    private $email;
    private $password;
    private $diachi;
    private $sdt;

    public function __construct($id, $name, $email, $pass, $diachi, $sdt)
    {
        $this->id = $id;
        $this->user_name = $name;
        $this->email = $email;
        $this->password = $pass;
        $this->diachi = $diachi;
        $this->sdt = $sdt;
    }
    //get
    public function get_id()
    {
        return $this->id;
    }
    public function get_username()
    {
        return $this->user_name;
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
    //set
    public function set_id($id)
    {
        $this->id = $id;
    }
    public function set_username($user_name)
    {
        $this->user_name = $user_name;
    }
    public function set_email($email)
    {
        $this->email = $email;
    }
    public function set_password($pass)
    {
        $this->password = $pass;
    }
    public function set_diachi($diachi)
    {
        $this->diachi = $diachi;
    }
    public function set_sdt($sdt)
    {
        $this->sdt = $sdt;
    }
}
