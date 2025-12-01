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
                                    <a class="nav-link dropdown-toggle <?= !empty($data['page']) && $data['page'] == 'Penelitian' || !empty($data['page']) && $data['page'] == 'Pengabdian Kepada Masyarakat' || !empty($data['page']) && $data['page'] == 'Hak Kekayaan Intelektual' ? 'active' : '' ?>"
                                        href="<?= BASE_URL ?>/Publikasi" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Publikasi
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- PLT -->
                                        <li class="nav-item dropdown dropstart">
                                            <a class="dropdown-item dropdown-toggle <?= !empty($data['page']) && $data['page'] == 'Penelitian' ? 'active text-white' : '' ?>"
                                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Penelitian
                                            </a>
                                            <ul class="dropdown-menu">
                                                <!-- Fakultas -->
                                                <?php foreach ($data['publikasi'] as $publikasi): ?>
                                                    <?php if ($publikasi['jenis_publikasi'] == 'Penelitian'): ?>
                                                        <li class="nav-item">
                                                            <a class="dropdown-item"
                                                                href="<?= BASE_URL ?>/Publikasi/penelitian/<?= $publikasi['kode_fakultas'] ?>">
                                                                <?= $publikasi['nama_fakultas'] ?>
                                                            </a>
                                                        </li>
                                                    <?php endif; endforeach; ?>
                                            </ul>
                                        </li>

                                        <!-- PKM -->
                                        <li class="nav-item dropdown dropstart">
                                            <a class="dropdown-item dropdown-toggle <?= !empty($data['page']) && $data['page'] == 'Pengabdian Kepada Masyarakat' ? 'active text-white' : '' ?>"
                                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Pengabdian Kepada Masyarakat
                                            </a>
                                            <ul class="dropdown-menu">
                                                <!-- Fakultas -->
                                                <?php foreach ($data['publikasi'] as $publikasi):
                                                    if ($publikasi['jenis_publikasi'] == 'Pengabdian Kepada Masyarakat'): ?>
                                                        <li class="nav-item">
                                                            <a class="dropdown-item"
                                                                href="<?= BASE_URL ?>/Publikasi/pkm/<?= $publikasi['kode_fakultas'] ?>">
                                                                <?= $publikasi['nama_fakultas'] ?>
                                                            </a>
                                                        </li>
                                                    <?php endif; endforeach; ?>
                                            </ul>
                                        </li>

                                        <!-- HKI -->
                                        <li class="nav-item dropdown dropstart">
                                            <a class="dropdown-item dropdown-toggle <?= !empty($data['page']) && $data['page'] == 'Hak Kekayaan Intelektual' ? 'active text-white' : '' ?>"
                                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Hak Kekayaan Intelektual
                                            </a>
                                            <ul class="dropdown-menu">
                                                <!-- Fakultas -->
                                                <?php foreach ($data['publikasi'] as $publikasi):
                                                    if ($publikasi['jenis_publikasi'] == 'Hak Kekayaan Intelektual'): ?>
                                                        <li class="nav-item">
                                                            <a class="dropdown-item"
                                                                href="<?= BASE_URL ?>/Publikasi/hki/<?= $publikasi['kode_fakultas'] ?>">
                                                                <?= $publikasi['nama_fakultas'] ?>
                                                            </a>
                                                        </li>
                                                    <?php endif; endforeach; ?>
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