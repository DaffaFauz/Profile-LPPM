<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
        <?= !empty($data['page']) && $data['page'] === 'Detail Berita' ? 'Berita - ' . htmlspecialchars($data['title']) : htmlspecialchars($data['title']) . ' | LPPM MU' ?>
    </title>
    <meta name="title"
        content="<?= !empty($data['page']) && $data['page'] === 'Detail Berita' ? htmlspecialchars($data['title']) : "LPPM Universitas Ma'soem - " . htmlspecialchars($data['title']) ?>">
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="<?= ASSETS_URL ?>front/css/bootstrap-5.0.0-beta1.min.css" />
    <link rel="stylesheet" href="<?= ASSETS_URL ?>front/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="<?= ASSETS_URL ?>front/css/tiny-slider.css" />
    <link rel="stylesheet" href="<?= ASSETS_URL ?>front/css/animate.css" />
    <link rel="stylesheet" href="<?= ASSETS_URL ?>front/css/lindy-uikit.css" />

    <!-- Editor -->
    <link rel="stylesheet" href="<?= ASSETS_URL ?>back/vendor/libs/quill/typography.css" />
    <link rel="stylesheet" href="<?= ASSETS_URL ?>back/vendor/libs/quill/katex.css" />
    <link rel="stylesheet" href="<?= ASSETS_URL ?>back/vendor/libs/quill/editor.css" />
    <style>
        /* Lebarkan dropdown utama dan submenu */
        .dropdown-menu {
            min-width: 250px;
            /* bebas, bisa 280–320px jika ingin lebih luas */
            white-space: normal;
            /* supaya teks bisa turun ke baris berikutnya */
        }

        /* Lebarkan item dropdown */
        .dropdown-item {
            white-space: normal;
            /* wrap teks */
            padding-right: 1.5rem;
            /* beri ruang supaya tidak mepet */
        }

        .dropdown-submenu>.dropdown-menu {
            min-width: 250px;
        }

        /* Solusi untuk menu yang bisa di-scroll */
        .scrollable-menu {
            max-height: 50px;
            /* Atur tinggi maksimal, 200px cukup untuk 4-5 item */
            overflow-y: auto;
            /* Tampilkan scrollbar vertikal jika konten melebihi max-height */
            overflow-x: hidden;
            /* Sembunyikan scrollbar horizontal yang tidak perlu */
        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
        <div class="loader">
            <div class="spinner">
                <div class="spinner-container">
                    <div class="spinner-rotator">
                        <div class="spinner-left">
                            <div class="spinner-circle"></div>
                        </div>
                        <div class="spinner-right">
                            <div class="spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================= preloader end ========================= -->

    <?php

    if (empty($_REQUEST)) { ?>
        <!-- ========================= hero-section-wrapper-5 start ========================= -->
        <section id="home" class="hero-section-wrapper-5">
        <?php } ?>