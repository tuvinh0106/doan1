<?php 
class Donhang
{
	private $tenkh;
	private $iddh;
	private $ngayban;
	private $sotien;
	private $trangthai;

	public function __construct($iddh,$tenkh,$ngayban,$sotien,$trangthai)
	{
		$this->tenkh = $tenkh;
		$this->iddh = $iddh;
		$this->ngayban = $ngayban;
		$this->sotien = $sotien;
		$this->trangthai = $trangthai;
	}
	 public function get_tenkh()
    {
        return $this->tenkh;
    }
     public function get_iddh()
    {
        return $this->iddh;
    }
     public function get_ngayban()
    {
        return $this->ngayban;
    }
     public function get_sotien()
    {
        return $this->sotien;
    }
     public function get_trangthai()
    {
        return $this->trangthai;
    }

}
 ?>
