<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu">
    <div class="app-brand demo">
        <a href="<?= BASE_URL ?>/Dashboard" class="app-brand-link">
            <!-- <span class="app-brand-logo demo">
            </span> -->
            <span class="app-brand-text demo menu-text fw-bold ms-3">LPPM MU</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="icon-base ti menu-toggle-icon d-none d-xl-block"></i>
            <i class="icon-base ti tabler-x d-block d-xl-none"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item <?= ($_REQUEST['url'] == 'Dashboard') ? 'active' : '' ?>">
            <a href="<?= BASE_URL ?>/Dashboard" class="menu-link">
                <i class="menu-icon icon-base ti tabler-smart-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <!-- Tentang Kami -->
        <li class="menu-header small">
            <span class="menu-header-text" data-i18n="Tentang Kami">Tentang Kami</span>
        </li>
        <li class="menu-item <?= !empty($data['page']) && $data['page'] == 'Sejarah' ? 'active' : '' ?>">
            <a href="<?= BASE_URL ?>/Sejarah" class="menu-link">
                <i class="menu-icon icon-base ti tabler-file-time"></i>
                <div data-i18n="Sejarah">Sejarah</div>
            </a>
        </li>
        <li class="menu-item <?= !empty($data['page']) && $data['page'] == 'Visi Misi' ? 'active' : '' ?>">
            <a href="<?= BASE_URL ?>/VisiMisi" class="menu-link">
                <i class="menu-icon icon-base ti tabler-eye-table"></i>
                <div data-i18n="Visi Misi">Visi Misi</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="<?= BASE_URL ?>/Profil" class="menu-link">
                <i class="menu-icon icon-base ti tabler-file-settings"></i>
                <div data-i18n="Profil">Profil</div>
            </a>
        </li>

        <!-- Informasi -->
        <li class="menu-header small">
            <span class="menu-header-text" data-i18n="Informasi">Informasi</span>
        </li>
        <li class="menu-item <?= !empty($data['page']) && $data['page'] == 'RIP' ? 'active' : '' ?>">
            <a href="<?= BASE_URL ?>/RIP/backend" class="menu-link">
                <i class="menu-icon icon-base ti tabler-book"></i>
                <div data-i18n="RIP LPPM">RIP LPPM</div>
            </a>
        </li>
        <li class="menu-item <?= !empty($data['page']) && $data['page'] == 'Renstra' ? 'active' : '' ?>">
            <a href="<?= BASE_URL ?>/Renstra/backend" class="menu-link">
                <i class="menu-icon icon-base ti tabler-book"></i>
                <div data-i18n="Renstra PPKM">Renstra PPKM</div>
            </a>
        </li>
        <li class="menu-item <?= !empty($data['page']) && $data['page'] == 'PPKM' ? 'active' : '' ?>">
            <a href="<?= BASE_URL ?>/PPKM/backend" class="menu-link">
                <i class="menu-icon icon-base ti tabler-book"></i>
                <div data-i18n="Tema PPKM">Tema PPKM</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon icon-base ti tabler-book"></i>
                <div data-i18n="Panduan PPKM">Panduan PPKM</div>
            </a>
        </li>
        <!-- Jika nanti diperlukan fitur untuk mengelola monev -->
        <!-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon icon-base ti tabler-file-pencil"></i>
                <div data-i18n="Form Monev PPKM">Form Monev PPKM</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="app-academy-dashboard.html" class="menu-link">
                        <div data-i18n="Pengabdian Kepada Masyarakat">Pengabdian Kepada Masyarakat</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="app-academy-course.html" class="menu-link">
                        <div data-i18n="Penelitian">Penelitian</div>
                    </a>
                </li>
            </ul>
        </li> -->
        <li class="menu-item">
            <a href="<?= BASE_URL ?>/Profil" class="menu-link">
                <i class="menu-icon icon-base ti tabler-file-description"></i>
                <div data-i18n="Kerjasama PPKM">Kerjasama PPKM</div>
            </a>
        </li>

        <!-- Publikasi -->
        <li class="menu-header small">
            <span class="menu-header-text" data-i18n="Publikasi">Publikasi</span>
        </li>
        <li class="menu-item <?= !empty($data['page']) && $data['page'] == 'Publikasi' ? 'active' : '' ?>">
            <a href="<?= BASE_URL ?>/Publikasi/backend" class="menu-link">
                <i class="menu-icon icon-base ti tabler-list-search"></i>
                <div data-i18n="Publikasi">Publikasi</div>
            </a>
            <!-- <ul class="menu-sub">
                <li class="menu-item">
                    <a href="app-academy-dashboard.html" class="menu-link">
                        <div data-i18n="Penelitian">Penelitian</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="app-academy-course.html" class="menu-link">
                        <div data-i18n="Renstra FEBI">Renstra FEBI</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="app-academy-course-details.html" class="menu-link">
                        <div data-i18n="Renstra FAPERTA">Renstra FAPERTA</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="app-academy-course-details.html" class="menu-link">
                        <div data-i18n="Renstra FKIP">Renstra FKIP</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="app-academy-course-details.html" class="menu-link">
                        <div data-i18n="Renstra FTEK">Renstra FTEK</div>
                    </a>
                </li>
            </ul> -->
        </li>
        <li class="menu-item <?= !empty($data['page']) && $data['page'] == 'Periode' ? 'active' : '' ?>">
            <a href="<?= BASE_URL ?>/Periode" class="menu-link">
                <i class="menu-icon icon-base ti tabler-calendar"></i>
                <div data-i18n="Periode">Periode</div>
            </a>
        </li>

        <!-- Berita -->
        <li class="menu-header small">
            <span class="menu-header-text" data-i18n="Berita">Berita</span>
        </li>
        <li class="menu-item <?= !empty($_REQUEST['url']) && $_REQUEST['url'] == 'Berita/backend' ? 'active' : '' ?>">
            <a href="<?= BASE_URL ?>/Berita/backend" class="menu-link">
                <i class="menu-icon icon-base ti tabler-news"></i>
                <div data-i18n="Berita">Berita</div>
            </a>
        </li>
        <li class="menu-item <?= !empty($data['page']) && $data['page'] == 'kategori-berita' ? 'active' : '' ?>">
            <a href="<?= BASE_URL ?>/kategoriBerita/backend" class="menu-link">
                <i class="menu-icon icon-base ti tabler-category"></i>
                <div data-i18n="Kategori Berita">Kategori Berita</div>
            </a>
        </li>
    </ul>
</aside>

<div class="menu-mobile-toggler d-xl-none rounded-1">
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
        <i class="ti tabler-menu icon-base"></i>
        <i class="ti tabler-chevron-right icon-base"></i>
    </a>
</div>
<!-- / Menu -->