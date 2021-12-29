<?php 


class Sanpham
{
	private $idsp;
	private $tensp;
	private $loaisp;
	private $kichco;
	private $mausac;
	private $giasp;
	private $soluong;
	private $mota;
	private $hinh;

	public function __construct($idsp,$tensp,$loaisp,$kichco,$mausac,$giasp,$soluong,$mota,$hinh)
	{	
		$this->idsp = $idsp;
		$this->tensp = $tensp;
		$this->loaisp = $loaisp;
		$this->kichco = $kichco;
		$this->mausac = $mausac;
		$this->giasp = $giasp;
		$this->soluong = $soluong;
		$this->mota = $mota;
		$this->hinh = $hinh;

	}
	public function get_idsp(){
		return $this->idsp;
	}
	public function get_tensp(){
		return $this->tensp;
	}
	public function get_loaisp(){
		return $this->loaisp;
	}
	public function get_kichco(){
		return $this->kichco;
	}
	public function get_mausac(){
		return $this->mausac;
	}
	public function get_giasp(){
		return $this->giasp;
	}
	public function get_soluong(){
		return $this->soluong;
	}
	public function get_mota(){
		return $this->mota;
	}
	public function get_hinh(){
		return $this->hinh;
	}

}

 ?>