<nav class="container mt-5" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>">Beranda</a></li>
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>/Berita">Berita</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $data['berita']['judul'] ?></li>
    </ol>
</nav>

<section class="header mt-3 container mb-5">
    <h4 class="fw-bold"><?= $data['berita']['judul'] ?></h4>
    <small class="text-muted"><i class="lni lni-calendar"></i> Diposting pada
        <?= date('d F Y', strtotime($data['berita']['tanggal'])) ?>
    </small>
    <hr class="my-4">
</section>

<section class="body container mb-5">
    <div class="row">
        <!-- Main Content Column -->
        <div class="col-lg-8 col-md-12 mb-4">
            <div class="mb-4">
                <img src="<?= BASE_URL ?>/img/berita/<?= $data['berita']['gambar'] ?>"
                    class="image-fluid w-75 rounded" alt="<?= $data['berita']['judul'] ?>">
            </div>
            <div class="mb-4">
                <p><?= $data['berita']['body'] ?></p>
            </div>
            <div class="mb-4">
                <p class="fs-4 fw-bold">#Hashtag</p>
                <div class="mt-3">
                    <?php
                    $tags = explode(',', $data['berita']['hashtag']);
                    foreach ($tags as $tag) {
                        $tag = trim($tag);
                        if (!empty($tag)) {
                            echo '<a href="' . BASE_URL . '/Berita/tag/' . $tag . '" class="btn btn-outline-primary btn-sm text-decoration-none me-1 mb-1">' . $tag . '</a>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Sidebar Column -->
        <div class="col-lg-4 col-md-12">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <p class="card-title mb-3 fs-5">Bagikan Berita:</p>
                    <div class="d-grid gap-2">
                        <a href="https://api.whatsapp.com/send?text=<?= urlencode($data['berita']['judul'] . ' ' . BASE_URL . '/Berita/detail/' . $data['berita']['slug']) ?>"
                            target="_blank" class="btn btn-success">
                            <i class="lni lni-whatsapp"></i> WhatsApp
                        </a>
                        <button onclick="copyLink()" class="btn btn-danger">
                            <i class="lni lni-instagram"></i> Instagram (Copy Link)
                        </button>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <p class="card-title mb-3 fs-5">Berita Terbaru</p>
                    <?php foreach ($data['terbaru'] as $row): ?>
                        <div class="d-flex mb-3">
                            <img src="<?= BASE_URL ?>/img/berita/<?= $row['gambar'] ?>" class="rounded me-3"
                                style="width: 60px; height: 60px; object-fit: cover;" alt="...">
                            <div>
                                <a href="<?= BASE_URL ?>/Berita/detail/<?= $row['slug'] ?>"
                                    class="text-decoration-none text-dark fw-bold"
                                    style="font-size: 0.9rem;"><?= $row['judul'] ?></a>
                                <br>
                                <small class="text-muted" style="font-size: 0.8rem;"><i
                                        class="lni lni-calendar"></i>
                                    <?= date('d M Y', strtotime($row['tanggal'])) ?></small>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function copyLink() {
        var dummy = document.createElement('input'),
            text = window.location.href;
        document.body.appendChild(dummy);
        dummy.value = text;
        dummy.select();
        document.execCommand('copy');
        document.body.removeChild(dummy);
        alert('Link berhasil disalin! Silakan paste di Instagram.');
    }
</script>