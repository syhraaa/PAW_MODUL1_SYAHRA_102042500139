<?php

$produk = [
    [
        "Nama Produk" => "Laptop ASUS",
        "Kategori Produk" => "Laptop",
        "Harga" => 30000000,
        "Jumlah Stok" => 10,
        "Gambar" => "laptop-asus.jpeg"
    ],
    [
        "Nama Produk" => "Mouse Logitech",
        "Kategori Produk" => "Aksesoris",
        "Harga" => 2000000,
        "Jumlah Stok" => 5,
        "Gambar" => "mouse-logitech.jpeg"
    ],
    [
        "Nama Produk" => "Keyboard Mechanical",
        "Kategori Produk" => "Aksesoris",
        "Harga" => 7000000,
        "Jumlah Stok" => 8,
        "Gambar" => "keyboard-mechanical.jpeg"
    ],
    [
        "Nama Produk" => "Monitor Samsung",
        "Kategori Produk" => "Monitor",
        "Harga" => 20000000,
        "Jumlah Stok" => 0,
        "Gambar" => "monitor-samsung.jpeg"
    ],
    [
        "Nama Produk" => "Printer Canon",
        "Kategori Produk" => "Printer",
        "Harga" => 4000000,
        "Jumlah Stok" => 2,
        "Gambar" => "printer-canon.jpeg"
    ],
    [
        "Nama Produk" => "Headset Razer",
        "Kategori Produk" => "Aksesoris",
        "Harga" => 5000000,
        "Jumlah Stok" => 7,
        "Gambar" => "headset-razer.jpeg"
    ]
];

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CIA STORE</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
        font-family: Arial, sans-serif;
        background-color: #ffe4e1;
        color: blue;
        }

        header {
            background-color: lightblue;
        }

        .navbar {
            max-width: 1200px;
            margin: auto;
            padding: 20px;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            color: white;
        }

        .menu {
            display: flex;
            gap: 20px;
        }

        .menu a {
            color: white;
            text-decoration: none;
        }

        .hero {
            text-align: center;
            padding: 70px 20px;
            background-color: #ffe6e9;
        }

        .hero h2 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 17px;
        }

        .jumlah {
            text-align: center;
            padding: 40px 20px;
            background-color: #F0F8FF;
        }

        .jumlah h2 {
            margin-bottom: 10px;
            font-size: 28px;
        }

        main {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .product-card {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid blue;
        }

        .product-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .product-card h3 {
            margin: 15px 0;
            font-size: 20px;
        }

        .kategori {
            display: inline-block;
            background-color: #698fcc;
            color: white;
            padding: 6px 10px;
            border-radius: 5px;
            font-size: 13px;
        }

        .tersedia {
            color: green;
            font-weight: bold;
        }

        .habis {
            color: red;
            font-weight: bold;
        }

        .harga-normal {
            text-decoration: line-through;
            color: #777;
        }

        .diskon {
            color: red;
            font-weight: bold;
        }

        .harga-diskon {
            color: red;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: blue;
            color: white;
            cursor: pointer;
            margin-top: 15px;
        }

        button:hover {
            opacity: 0.8;
        }

        button:disabled {
            background-color: #aaa;
            cursor: not-allowed;
        }

        footer {
            text-align: center;
            padding: 30px;
            margin-top: 50px;
            background-color: #171923;
            color: white;
        }

        @media (max-width: 900px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
                gap: 15px;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

</head>

<body>

    <header>
        <nav class="navbar">

            <h1>CIA STORE</h1>

            <div class="menu">
                <a href="#home">Home</a>
                <a href="#produk">Produk</a>
            </div>

        </nav>
    </header>


    <section class="hero" id="home">

        <div class="hero-content">

            <h2>𐙚𐙚 Welcome to CIA STORE 𐙚𐙚</h2>

            <p>
                Temukan berbagai perangkat dan aksesori teknologi
                terbaik yang sesuai dengan kebutuhanmu
            </p>

        </div>

    </section>


    <section class="jumlah">

        <h2>
            <?php echo count($produk); ?> Produk Tersedia
        </h2>

        <p>
            Pilih produk yang sesuai dengan kebutuhanmu dan nikmati
            pengalaman berbelanja yang menyenangkan di Cia Store!
        </p>

    </section>


    <main id="produk">

        <div class="product-grid">

            <?php foreach ($produk as $item) { ?>

                <?php

                if ($item["Jumlah Stok"] > 0) {

                    $status = "Stok Tersedia";

                } else {

                    $status = "Stok Habis";

                }

                if ($item["Harga"] >= 1000000) {

                    $diskon = 10;

                    $nilaiDiskon =
                        $item["Harga"] * $diskon / 100;

                    $hargaSetelahDiskon =
                        $item["Harga"] - $nilaiDiskon;

                } else {

                    $diskon = 0;

                    $hargaSetelahDiskon =
                        $item["Harga"];

                }

                ?>

                <article class="product-card">

                    <img
                        src="<?php echo $item["Gambar"]; ?>"
                        alt="<?php echo $item["Nama Produk"]; ?>"
                        class="product-image"
                    >

                    <span class="kategori">
                        <?php echo $item["Kategori Produk"]; ?>
                    </span>


                    <h3>
                        <?php echo $item["Nama Produk"]; ?>
                    </h3>


                    <p>
                        Stok:
                        <?php echo $item["Jumlah Stok"]; ?>
                    </p>


                    <?php if ($item["Jumlah Stok"] > 0) { ?>

                        <p class="tersedia">
                            <?php echo $status; ?>
                        </p>

                    <?php } else { ?>

                        <p class="habis">
                            <?php echo $status; ?>
                        </p>

                    <?php } ?>


                    <?php if ($diskon == 10) { ?>

                        <p class="harga-normal">
                            Harga: Rp <?php echo number_format($item["Harga"], 0, ',', '.'); ?>
                        </p>


                        <p class="diskon">
                            Diskon:
                            <?php echo $diskon; ?>%
                        </p>


                        <h3 class="harga-diskon">
                            Harga Setelah Diskon: Rp <?php echo number_format($hargaSetelahDiskon, 0, ',', '.'); ?>
                        </h3>

                    <?php } else { ?>

                        <h3>
                            Harga: Rp <?php echo number_format($item["Harga"], 0, ',', '.'); ?>
                        </h3>

                    <?php } ?>


                    <?php if ($item["Jumlah Stok"] > 0) { ?>

                        <button>
                            Beli Sekarang
                        </button>

                    <?php } else { ?>

                        <button disabled>
                            Stok Habis
                        </button>

                    <?php } ?>


                </article>

            <?php } ?>

        </div>

    </main>


    <footer>

        <p>
            &copy; 2026 Cia Store. All Rights Reserved.
        </p>

    </footer>

</body>

</html>