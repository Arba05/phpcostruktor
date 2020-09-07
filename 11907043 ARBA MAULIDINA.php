<?php
class produk{
	public 	$namaBarang,
			$merk,
			$harga;
	public function getCetak(){
		return "$this->namaBarang, $this->merk, $this->harga";
	}
	public function__construct($namaBarang="nama barang", $"merk". $harga=0){
		$this->namaBarang = $namaBarang;
		$this->merk=$merk;
		$this->harga=$harga;
	}
}