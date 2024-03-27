<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="latihan1.php" method="POST">
            <h1 class="text-center">FORM BELANJA</h1>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-8">
                    <input id="nama" name="nama" placeholder="Isi nama pelanggan" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="produk" class="col-sm-4 col-form-label">Produk Pilihan</label>
                <div class="col-sm-8">
                    <select id="produk" name="produk" class="custom-select">
                        <option value="">-- Pilih produk --</option>
                        <option value="TV">TV</option>
                        <option value="KULKAS">KULKAS</option>
                        <option value="MESIN CUCI">MESIN CUCI</option>
                        <option value="AC">AC</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-sm-4 col-form-label">Jumlah Beli</label>
                <div class="col-sm-8">
                    <input id="jumlah" name="jumlah" placeholder="Masukkan jumlah beli" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-4 col-sm-8">
                    <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                    <button name="proses" type="reset" class="btn btn-success">Batal</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>


<?php
error_reporting(0); //cara menghilangkan pesan eror
$nama = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$proses = $_POST['proses'];

//switch
switch ($produk) {
    case "TV":
        $satuan = 1000000;
        break;
    case "KULKAS":
        $satuan = 2000000;
        break;
    case "MESIN CUCI":
        $satuan = 3000000;
        break;
    case "AC":
        $satuan = 4000000;
        break;
    default:
        echo "";
}

//total belanja
$totalBelanja = $jumlah * $satuan;

//diskon
$diskon = $totalBelanja * 0.2;

//PPN
$ppn = 0.1 * ($totalBelanja - $diskon);

//harga bersih
$hargaBersih = ($totalBelanja - $diskon) + $ppn;

if (isset($proses)) {

?>
    <br>
    <h3>Nama Pelanggan : <?= $nama ?></h3>
    <h3>Jenis Produk : <?= $produk ?></h3>
    <h3>Jumlah : <?= $jumlah ?></h3>
    <h3>Harga Satuan : <?= $satuan ?></h3>
    <h3>Total Belanja : <?= $totalBelanja ?></h3>
    <h3>Diskon : <?= $diskon ?></h3>
    <h3>PPN : <?= $ppn ?></h3>
    <h3>Harga Bersih : <?= $hargaBersih ?></h3>

<?php } ?>