<!-- ========================= Content of Pengabdian Kepada Masyarakat ========================== -->

<section class="header my-5">
    <h4 class="text-center">PUBLIKASI PENGABDIAN KEPADA MASYARAKAT
        <?= !empty($data['pkm']) ? $data['pkm'][0]['nama_fakultas'] : '' ?>
    </h4>
</section>

<section class="body container mb-5">
    <?php if (!empty($data['pkm'])): ?>
        <?php
        // Group data by Prodi
        $groupedData = [];
        foreach ($data['pkm'] as $row) {
            $groupedData[$row['nama_prodi']][] = $row;
        }
        ?>
        <div class="row">
            <?php foreach ($groupedData as $prodi => $items): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-3"><?= $prodi ?></h5>
                            <div class="list-group list-group-flush">
                                <?php foreach ($items as $item): ?>
                                    <a href="<?= BASE_URL ?>/Publikasi/index/<?= $item['slug'] ?>" target="_blank"
                                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                        Periode <?= $item['periode'] ?>
                                        <i class="lni lni-arrow-right"></i>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="alert alert-info text-center">
            Belum ada data publikasi pengabdian kepada masyarakat untuk fakultas ini.
        </div>
    <?php endif; ?>
</section>
<!-- ========================= End of Content ============================== -->