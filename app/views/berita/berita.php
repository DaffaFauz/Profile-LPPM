<!-- ========================= Content of Berita ========================== -->

<section class="header my-5">
    <h4 class="text-center">BERITA <?= isset($data['tag']) && $data['tag'] ? '#' . $data['tag'] : '' ?></h4>
</section>

<section class="body container mb-5">
    <div class="row">
        <?php foreach ($data['berita'] as $row): ?>
            <?php if ($row['status'] == 'Publish'): ?>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card mb-3">
                        <div class="card-body pb-0">
                            <h5 class="card-title"><?= $row['judul'] ?></h5>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <img src="<?= BASE_URL ?>/img/berita/<?= $row['gambar'] ?>" class="image-fluid w-100 px-2"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text text-muted"><i class="lni lni-calendar"></i> Diposting pada
                                        <?= date('d F Y', strtotime($row['tanggal'])) ?>
                                    </p>
                                    <br>
                                    <p class="card-text">
                                        <?php
                                        $body = strip_tags($row['body'] ?? '');
                                        $words = explode(' ', $body);
                                        echo implode(' ', array_slice($words, 0, 20)) . (count($words) > 20 ? '...' : '');
                                        ?>
                                    </p>
                                    <a href="<?= BASE_URL ?>/Berita/detail/<?= $row['slug'] ?>"
                                        class="btn btn-primary btn-sm mt-2">Baca
                                        Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

</section>
<!-- ========================= End of Content ============================== -->