<?php
	require_once('./inc.koneksi.php');
	class buku extends Connection{
		private $idBuku ='';
		private $judul ='';
		private $halaman = 0;
		private $tahun=0;
		private $summary='';			
		private $pengarang='';
		private $penerbit='';
		private $rating=0;
		private $idUser='';
		private $hasil = false;
		private $message ='';

		public function __get($atribute) {
			if (property_exists($this, $atribute)) {
				return $this->$atribute;
			}
		}
	
		public function __set($atribut, $value){
			if (property_exists($this, $atribut)) {
					$this->$atribut = $value;
			}
		}

		public function AddBuku(){
			$sql = "INSERT INTO buku(idBuku, judul, halaman, tahun, summary, pengarang, penerbit, rating, idUser) 
		            values ('$this->idBuku', '$this->judul', '$this->halaman', '$this->tahun', '$this->summary', '$this->pengarang', '$this->penerbit', '$this->rating', '$this->idUser')";
			$this->hasil = mysqli_query($this->connection, $sql);
			
			if($this->hasil)
			   $this->message ='Data berhasil ditambahkan!';					
		    else
			   $this->message ='Data gagal ditambahkan!';	
		}

		public function UpdateBuku(){
			$sql = "UPDATE buku SET judul ='$this->judul',
					pengarang = '$this->pengarang',
					penerbit = '$this->penerbit',
					rating = '$this->rating',
					halaman = '$this->halaman',
					tahun = '$this->tahun',
					summary = '$this->summary'
					WHERE idBuku = $this->idBuku";
			$this->hasil = mysqli_query($this->connection, $sql);
			
			if($this->hasil)
			   $this->message ='Data berhasil diubah!';					
		    else
			   $this->message ='Data gagal diubah!';	
		}

		public function DeleteBuku(){
			$sql = "DELETE FROM Buku WHERE idBuku =$this->idBuku";
			$this->hasil = mysqli_query($this->connection, $sql);
			
			if($this->hasil)
			   $this->message ='Data berhasil dihapus!';					
		    else
			   $this->message ='Data gagal dihapus!';	
		}

		public function SelectOneBuku($onebuku){
			$sql = "SELECT * FROM buku WHERE idBuku = $onebuku";
			$resultOne = mysqli_query($this->connection, $sql);
			if(mysqli_num_rows($resultOne) == 1){
				$this->hasil = true;
				$data = mysqli_fetch_assoc($resultOne);
				$this->judul = $data['judul'];				
				$this->pengarang = $data['penerbit'];	
				$this->penerbit=$data['penerbit'];			
				$this->rating = $data['rating'];	
				$this->halaman = $data['halaman'];	
				$this->tahun = $data['tahun'];
				$this->summary = $data['summary'];	
			}							
		}

		public function SelectAllBuku($cari_idBuku, $cari_judul){
			$sql = "SELECT * FROM buku ";
			if($cari_idcategory != '')
			{
				$sql .= " AND idBuku = $cari_idcategory";
			}
			if($cari_deskripsi != '')
			{
				$sql .= " AND judul like '%$cari_deskripsi%'";
			}
			
			$sql .= " ORDER BY id ASC";
						
			$result = mysqli_query($this->connection, $sql);
			$arrResult = Array();
			$cnt=0;
			while ($data = mysqli_fetch_array($result))
			{
				$objBuku = new Buku(); 
				$objBuku->idBuku=$data['idBuku'];
				$objBuku->judul=$data['judul'];
				$objBuku->pengarang=$data['pengarang'];
				$objBuku->penerbit=$data['penerbit'];
				$objBuku->rating=$data['rating'];
				$objBuku->halaman=$data['tahun'];
				$objBuku->summary=$data['summary'];
				$arrResult[$cnt] = $objMenu;
				$cnt++;
			}
			return $arrResult;			
		}
	}
?>