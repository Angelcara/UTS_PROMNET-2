<?php

$produk = [
        ["gambar"=>"img/nasgor.jpg", "product" => "Nasi Goreng", "jenis" => "Makanan", "harga" => 15000],
        ["gambar"=>"img/raboki.jpg", "product" => "Rabboki", "jenis" => "Makanan", "harga" => 20000],
        ["gambar"=>"img/matcha.jpg", "product" => "Matcha Latte", "jenis" => "Minuman", "harga" => 20000],
        ["gambar"=>"img/americano.jpg", "product" => "Americano", "jenis" => "Minuman", "harga" => 18000],
        ["gambar"=>"img/gimbab.jpg", "product" => "Gimbab", "jenis" => "Makanan", "harga" => 15000],
        ["gambar"=>"img/lemon tea.jpg", "product" => "Lemon Tea", "jenis" => "Minuman", "harga" => 12000],
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LizhCaff</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
</head>
<body>
    <!-- NAVBAR START -->
        <nav class="navbar text-white">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">LizhCaff</span>
        </div>
        </nav>
    <!-- NAVBAR END -->

    <!-- WELLCOME SECTION START -->

    <!-- WELLCOME SECTION START -->

        <section class="p-3 mb-5 mt-5 bg-secondary text-white">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center text-center">   
            <div class="-">
                <h1 class="fw-bold">WELLCOME TO LIZHCAFF</h1>
                <p>
                    Silahkan Dipilih>o<
                </p>
            </div>
            </div>
        </div>
        </section>

    <!-- product -->
    <div class="container py-5">
        <h2 class="text-center mb-4">Daftar Menu</h2>
        <div class="row">
            <?php foreach ($produk as $item): ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                            <img src="<?= $item['gambar']; ?>"></img>
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $item['product']; ?></h5>
                            <p class="card-text text-secondary"><?= $item['jenis']; ?></p>                   
                            <p class="card-text text-secondary">Rp <?= number_format($item['harga'], 0, ',', '.'); ?></p>
                            <button class="btn btn-primary tambah-btn" id="tambah" type="submit">Tambah ke Keranjang</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <section id="contact" class="text-center">
      <div class="container">
    <h2 class="text-center mb-4">Daftar Pesanan</h2>
    <ul id="daftar"></ul>
     <p id="total" class="fw-bold mb-0">Total: Rp 0</p>
        <button type="button" class="btn btn-secondary btn-sm" id="batal" type="button">hapus</button>

    <script src="script.js"></script>
    <!-- SECTION PROJECT END -->

        <!--SECTION FOOTER START  -->
      <footer class="p-2 mt-5 text-center bg-secondary text-white">
         <div>
            <i class="h4 bi bi-instagram p-2"></i>
            <i class="h4 bi bi-facebook p-2"></i>
            <i class="h4 bi bi-linkedin p-2"></i>
         </div>
         <div>Copyright &copy; 2025 Angel's zone</div>
      </footer>
      
    <!-- SECTION FOOTER END -->

    
</body>
</html>