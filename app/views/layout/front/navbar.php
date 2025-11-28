<!-- ========================= header-6 start ========================= -->
<header class="header header-6">
    <div class="navbar-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="<?= BASE_URL ?>">
                            <!-- <img src="assets/img/logo/logo.svg" alt="Logo" /> -->
                            <h3>LPPM MU</h3>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent6" aria-controls="navbarSupportedContent6"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent6">
                            <ul id="nav6" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="page-scroll <?= empty($_REQUEST) ? 'active' : '' ?>"
                                        href="<?= BASE_URL ?>">Beranda</a>
                                </li>

                                <!-- Tentang Kami -->

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle <?= !empty($data['page']) && $data['page'] == 'Tentang Kami' ? 'active' : '' ?>"
                                        href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Tentang Kami
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li class="nav-item">
                                            <a class="dropdown-item <?= !empty($_REQUEST['url']) && $_REQUEST['url'] == 'TentangKami/Sejarah' ? 'active text-white' : '' ?>"
                                                href="<?= BASE_URL ?>/TentangKami/Sejarah">Sejarah
                                                LPPM</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item <?= !empty($_REQUEST['url']) && $_REQUEST['url'] == 'TentangKami/VisiMisi' ? 'active text-white' : '' ?>"
                                                href="<?= BASE_URL ?>/TentangKami/VisiMisi">Visi & Misi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item <?= !empty($_REQUEST['url']) && $_REQUEST['url'] == 'TentangKami/Profil' ? 'active text-white' : '' ?>"
                                                href="<?= BASE_URL ?>/Profil">Profil LPPM</a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Informasi -->

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle page-scroll <?= !empty($data['page']) && $data['page'] == 'Informasi' ? 'active' : '' ?>"
                                        href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Informasi
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li class="nav-item">
                                            <a class="dropdown-item" target="_blank" href="<?= BASE_URL ?>/RIP">RIP
                                                LPPM</a>
                                        </li>

                                        <!-- Renstra PPKM -->
                                        <li class="nav-item dropdown dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Renstra PPKM
                                            </a>
                                            <ul class="dropdown-menu">
                                                <?php foreach ($data['renstra'] as $row): ?>
                                                    <li class="nav-item">
                                                        <a class="dropdown-item"
                                                            href="<?= BASE_URL ?>/Renstra/<?= $row['slug'] ?>"
                                                            target="_blank">Renstra
                                                            <?= $row['kode_fakultas'] ?></a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </li>

                                        <!-- Tema PPKM -->

                                        <li class="nav-item dropdown dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Tema PPKM
                                            </a>
                                            <ul class="dropdown-menu">
                                                <?php foreach ($data['ppkm'] as $row): ?>
                                                    <li class="nav-item">
                                                        <a class="dropdown-item"
                                                            href="<?= BASE_URL ?>/PPKM/<?= $row['slug'] ?>"
                                                            target="_blank">PPKM
                                                            <?= $row['kode_fakultas'] ?></a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </li>

                                        <!-- Panduan PPKM -->

                                        <li class="nav-item">
                                            <a class="dropdown-item" href="#">Panduan PPKM</a>
                                        </li>

                                        <!-- Form Monev -->

                                        <li class="nav-item dropdown dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Form Monev PPKM
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="https://forms.gle/ZCa1jN75HbkyazuD9">Pengabdian Kepada
                                                        Masyarakat</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="https://forms.gle/qg1QPsWoqiFz3zVL6">Penelitian</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <!-- Kerjasama -->
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="#">Kerjasama PPKM</a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Penelitian, PKM, & HKI -->

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle page-scroll <?= !empty($data['page']) && $data['page'] == 'plt, pkm, & hki' ? 'active' : '' ?>"
                                        href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Penelitian, PKM & HKI
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <!-- SIMPEL -->
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="https://sim-lppm.masoem.ac.id/">SIMPEL</a>
                                        </li>

                                        <!-- SIMPEMA -->
                                        <li class="nav-item">
                                            <a class="dropdown-item"
                                                href="https://lppm.masoemuniversity.ac.id/simpema">SIMPEMA</a>
                                        </li>

                                        <!-- Rumah Jurnal -->
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="https://jurnal.masoemuniversity.ac.id/">Rumah
                                                Jurnal</a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Publikasi -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle <?= !empty($data['page']) && $data['page'] == 'publikasi' ? 'active' : '' ?>"
                                        href="<?= BASE_URL ?>/Publikasi" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Publikasi
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- PLT -->
                                        <li class="nav-item dropdown dropstart">
                                            <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Penelitian
                                            </a>
                                            <ul class="dropdown-menu">
                                                <!-- Sistem Infromasi -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Sistem Informasi
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Bisnis Digital -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Bisnis Digital
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Komputerisasi Akuntansi -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Komputerisasi Akuntansi
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Perbankan Syariah -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Perbankan Syariah
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Manajemen Bisnis Syariah -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Manajemen Bisnis Syariah
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Agribisnis -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Agribisnis
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Teknologi Pangan -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Teknologi Pangan
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="https://lppm.masoemuniversity.ac.id/publikasi/plt/tp/22-23.html">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="https://lppm.masoemuniversity.ac.id/publikasi/plt/tp/23-24.html">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="https://lppm.masoemuniversity.ac.id/publikasi/plt/tp/24-25.html">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Bimbingan Konseling -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Bimbingan Konseling
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="https://lppm.masoemuniversity.ac.id/publikasi/plt/bk/22-23.html">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="https://lppm.masoemuniversity.ac.id/publikasi/plt/bk/23-24.html">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="https://lppm.masoemuniversity.ac.id/publikasi/plt/bk/24-25.html">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Pendidikan Bahasa Inggris -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Pendidikan Bahasa Inggris
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Teknik Informatika -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Teknik Informatika
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="https://lppm.masoemuniversity.ac.id/publikasi/plt/if/22-23.html">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="https://lppm.masoemuniversity.ac.id/publikasi/plt/if/23-24.html">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="https://lppm.masoemuniversity.ac.id/publikasi/plt/if/24-25.html">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Teknik Industri -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Teknik Industri
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <!-- PKM -->
                                        <li class="nav-item dropdown dropstart">
                                            <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Pengabdian Kepada Masyarakat
                                            </a>
                                            <ul class="dropdown-menu">
                                                <!-- Sistem Infromasi -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Sistem Informasi
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Bisnis Digital -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Bisnis Digital
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Komputerisasi Akuntansi -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Komputerisasi Akuntansi
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Perbankan Syariah -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Perbankan Syariah
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Manajemen Bisnis Syariah -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Manajemen Bisnis Syariah
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Agribisnis -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Agribisnis
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Teknologi Pangan -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Teknologi Pangan
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="https://lppm.masoemuniversity.ac.id/publikasi/pkm/tp/23-24.html">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="https://lppm.masoemuniversity.ac.id/publikasi/pkm/tp/24-25.html">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Bimbingan Konseling -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Bimbingan Konseling
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="https://lppm.masoemuniversity.ac.id/publikasi/pkm/bk/22-23.html">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="https://lppm.masoemuniversity.ac.id/publikasi/pkm/bk/23-24.html">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="https://lppm.masoemuniversity.ac.id/publikasi/pkm/bk/24-25.html">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Pendidikan Bahasa Inggris -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Pendidikan Bahasa Inggris
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Teknik Informatika -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Teknik Informatika
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="https://lppm.masoemuniversity.ac.id/publikasi/pkm/if/23-24.html">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="https://lppm.masoemuniversity.ac.id/publikasi/pkm/if/24-25.html">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Teknik Informatika -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Teknik Industri
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <!-- HKI -->
                                        <li class="nav-item dropdown dropstart">
                                            <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Hak Kekayaan Intelektual
                                            </a>
                                            <ul class="dropdown-menu">
                                                <!-- Sistem Infromasi -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Sistem Informasi
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Bisnis Digital -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Bisnis Digital
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Komputerisasi Akuntansi -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Komputerisasi Akuntansi
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Perbankan Syariah -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Perbankan Syariah
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Manajemen Bisnis Syariah -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Manajemen Bisnis Syariah
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Agribisnis -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Agribisnis
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Teknologi Pangan -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Teknologi Pangan
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Bimbingan Konseling -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Bimbingan Konseling
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Pendidikan Bahasa Inggris -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Pendidikan Bahasa Inggris
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Teknik Informatika -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Teknik Informatika
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- Teknik Informatika -->
                                                <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#"
                                                        data-bs-toggle="dropdown">
                                                        Teknik Industri
                                                    </a>
                                                    <ul class="dropdown-menu scrollable-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">2022/2023</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2023/2024</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2024/2025</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">2025/2026</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Berita -->

                                <li class="nav-item">
                                    <a class="nav-link page-scroll <?= !empty($data['page']) && $data['page'] == 'berita' ? 'active' : '' ?>"
                                        href="<?= BASE_URL ?>/Berita"> Berita </a>
                                </li>

                                <!-- KKN -->

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle page-scroll <?= !empty($data['page']) && $data['page'] == 'KKN' ? 'active' : '' ?>"
                                        href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        KKN
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <!-- Sebaran tempat -->
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="#">Sebaran Tempat KKN</a>
                                        </li>

                                        <!-- Kegiatan -->
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="#">Kegiatan KKN</a>
                                        </li>

                                        <!-- Hasil -->
                                        <li class="nav-item dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Hasil KKN
                                            </a>
                                            <ul class="dropdown-menu dropdown-submenu">
                                                <!-- Laporan -->
                                                <li class="nav-item">
                                                    <a class="dropdown-item" href="#">Laporan KKN</a>
                                                </li>

                                                <!-- Video -->
                                                <li class="nav-item">
                                                    <a class="dropdown-item" href="#">Video KKN</a>
                                                </li>

                                                <!-- Jurnal -->
                                                <li class="nav-item">
                                                    <a class="dropdown-item" href="#">Jurnal KKN</a>
                                                </li>

                                                <!-- Produk-->
                                                <li class="nav-item">
                                                    <a class="dropdown-item" href="#">Produk KKN</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <!--Contact-->

                                <li class="nav-item">
                                    <a class="page-scroll" href="<?= BASE_URL ?>/#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- navbar collapse -->
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- navbar area -->
</header>
<!-- ========================= header-6 end ========================= -->