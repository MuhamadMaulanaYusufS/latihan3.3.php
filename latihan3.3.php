<?php
class TokoPegadaian {
    private $namaToko;
    private $alamat;
    private $telepon;

    public function __construct($namaToko, $alamat, $telepon) {
        $this->namaToko = $namaToko;
        $this->alamat = $alamat;
        $this->telepon = $telepon;
    }

    public function hitungAngsuran($besaran_pinjaman, $besar_bunga, $lama_angsuran) {

        $total_pinjaman = $besaran_pinjaman + ($besaran_pinjaman * ($besar_bunga / 100));


        $besar_angsuran = $total_pinjaman / $lama_angsuran;

        return [
            'total_pinjaman' => $total_pinjaman,
            'besar_angsuran' => $besar_angsuran
        ];
    }

    public function tampilkanInfoToko() {
        echo "$this->namaToko\n";
        echo "$this->alamat\n";
        echo "$this->telepon\n\n";
    }
}


$tokoPegadaian = new TokoPegadaian("TOKO PEGADAIAN", "Jl.Keadilan No 16", "Telp. 72353459");


$besaran_pinjaman = 10000000; // Rp.10.000.000
$besar_bunga = 10; // 10%
$lama_angsuran = 5; // 5 bulan


$tokoPegadaian->tampilkanInfoToko();


$hasil_perhitungan = $tokoPegadaian->hitungAngsuran($besaran_pinjaman, $besar_bunga, $lama_angsuran);
echo "Program penghitung besaran angsuran hutang\n";
echo "Besaran pinjaman : Rp. " . number_format($besaran_pinjaman, 0, ',', '.') . "\n";
echo "Masukan besar bunga (%) : $besar_bunga%\n";
echo "Total Pinjaman : Rp. " . number_format($hasil_perhitungan['total_pinjaman'], 0, ',', '.') . "\n";
echo "Lama angsuran (bulan) : $lama_angsuran\n";
echo "Besar angsuran per bulan : Rp. " . number_format($hasil_perhitungan['besar_angsuran'], 0, ',', '.') . "\n";
?>
