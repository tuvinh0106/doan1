<?php

class Sanpham
{
    private $masp;
    private $tensp;
    private $gia;
    private $soluong;
    private $size;
    private $mota;
    private $hinhanh;

    public function __construct($masp, $tensp, $size, $soluong, $gia, $mota, $hinhanh)
    {
        $this->masp = $masp;
        $this->tensp = $tensp;
        $this->size = $size;
        $this->soluong = $soluong;
        $this->gia = $gia;
        $this->mota = $mota;
        $this->hinhanh = $hinhanh;
    }
    //get
    public function get_masp()
    {
        return $this->masp;
    }
    public function get_tensp()
    {
        return $this->tensp;
    }
    public function get_gia()
    {
        return $this->gia;
    }
    public function get_soluong()
    {
        return $this->soluong;
    }
    public function get_size()
    {
        return $this->size;
    }
    public function get_mota()
    {
        return $this->mota;
    }
    public function get_hinhanh()
    {
        return $this->hinhanh;
    }
    //set
    public function set_masp($masp)
    {
        $this->masp = $masp;
    }
    public function set_usertensp($user_tensp)
    {
        $this->user_tensp = $user_tensp;
    }
    public function set_gia($gia)
    {
        $this->gia = $gia;
    }
    public function set_soluong($soluong)
    {
        $this->soluong = $soluong;
    }
    public function set_size($size)
    {
        $this->size = $size;
    }
    public function set_mota($mota)
    {
        $this->mota = $mota;
    }
    public function set_hinhanh($hinhanh)
    {
        $this->hinhanh = $hinhanh;
    }
}
