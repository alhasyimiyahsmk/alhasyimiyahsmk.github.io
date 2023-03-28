<?php
class m_informasi extends CI_Model{

	function get_all_informasi(){
		$hsl=$this->db->query("SELECT informasi.*,DATE_FORMAT(informasi_tanggal,'%d/%m/%Y') AS tanggal FROM informasi ORDER BY informasi_id DESC");
		return $hsl;
	}
	function simpan_informasi($informasi,$user_id,$user_nama,$gambar,$informasi_isi){
		$hsl=$this->db->query("insert into informasi(informasi_nama,informasi_pengguna_id,informasi_author,informasi_cover,informasi_isi) values ('$informasi','$user_id','$user_nama','$gambar','$informasi_isi')");
		return $hsl;
	}
	function get_tulisan_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_id='$kode'");
		return $hsl;
	}
	function update_informasi($informasi_id,$informasi_nama,$user_id,$user_nama,$gambar,$informasi_isi){
		$hsl=$this->db->query("update informasi set informasi_nama='$informasi_nama',informasi_pengguna_id='$user_id',informasi_author='$user_nama',informasi_cover='$gambar',informasi_isi='$informasi_isi' where informasi_id='$informasi_id'");
		return $hsl;
	}
	function update_informasi_tanpa_img($informasi_id,$informasi_nama,$user_id,$user_nama){
		$hsl=$this->db->query("update informasi set informasi_nama='$informasi_nama',informasi_pengguna_id='$user_id',informasi_author='$user_nama' where informasi_id='$informasi_id'");
		return $hsl;
	}
	function hapus_informasi($kode){
		$hsl=$this->db->query("delete from informasi where informasi_id='$kode'");
		return $hsl;
	}
	

}