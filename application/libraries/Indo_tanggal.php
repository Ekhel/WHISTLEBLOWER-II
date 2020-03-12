<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	Cara Menggunakan Date
	==============================
	Load Library Pada controller yang akan anda GUnakan
	$this->load->library('date');
	$tanggal_indo = $this->indo_date->tgl_indo($tgl_yang_akan_dirubah);

 */

class Indo_tanggal
{
	function Indo_date()
	{
		$this->CI =& get_instance();
	}

	public function tgl_indo($tgl)
	{
		$tanggal = substr($tgl,8,2);
		$bulan = $this->getBulan(substr($tgl,5,2));
		$tahun = substr($tgl,0,4);
		return $tanggal.' '.$bulan.' '.$tahun;
	}

	public function getBulan($bln)
	{
		switch ($bln){
			case 1:
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "Desember";
				break;
		}
	}

	public function getHari($date)
	{
		$namahari = date('l', strtotime($date));
		if ($namahari == "Sunday") $namahari = "Minggu";
		else if ($namahari == "Monday") $namahari = "Senin";
		else if ($namahari == "Tuesday") $namahari = "Selasa";
		else if ($namahari == "Wednesday") $namahari = "Rabu";
		else if ($namahari == "Thursday") $namahari = "Kamis";
		else if ($namahari == "Friday") $namahari = "Jumat";
		else if ($namahari == "Saturday") $namahari = "Sabtu";
		return $namahari;
	}

}
