<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <?php if (isset($_SESSION['msg'])): ?>
        <div class="alert alert-<?= $_SESSION['msg_type'] ?> alert-dismissible" role="alert">
            <?= $_SESSION['msg'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['msg']); endif; ?>
    <!-- Complex Headers -->
    <div class="card">
        <div class="card-header border-bottom d-flex justify-content-between align-items-center my-0">
            <h5 class="card-title mb-0">Rencana & Strategi</h5>
            <!-- <button type="button" class="btn btn-primary ps-2" data-bs-toggle="modal" data-bs-target="#tambahBerita">
                <i class="ti tabler-plus me-1"></i> Tambah Berita
            </button> -->
        </div>
        <div class="card-datatable text-nowrap">
            <table class="dt-complex-header table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Fakultas</th>
                        <th>Dokumen</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data['renstra'] as $row):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['nama_fakultas']; ?></td>
                            <td>
                                <form action="<?= BASE_URL ?>/Renstra" method="post">
                                    <button type="submit" class="btn btn-info btn-sm" name="id_informasi"
                                        value="<?= $row['id_informasi'] ?>"><i class="ti tabler-eye me-1"></i>
                                        Lihat dokumen</button>
                                </form>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#ubahRenstra<?= htmlspecialchars($row['id_informasi']) ?>"><i
                                        class="ti tabler-pencil me-1"></i> Edit</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Complex Headers -->
</div>

<!-- Modal edit berita -->
<?php foreach ($data['berita'] as $row): ?>
    <div class="modal fade" id="ubahBerita<?= $row['id_berita'] ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-simple modal-edit-user">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-6">
                        <h4 class="mb-2">Ubah Berita</h4>
                    </div>
                    <form id="ubahBeritaForm<?= $row['id_berita'] ?>" class="row g-6"
                        action="<?= BASE_URL ?>/Berita/ubah/<?= $row['id_berita'] ?>" method="post"
                        enctype="multipart/form-data">
                        <div class="col-12">
                            <label class="form-label" for="modalUbahGambar">Upload Gambar</label>
                            <input type="file" id="modalUbahGambar" name="gambar" class="form-control"
                                placeholder="#example" value="<?= $row['gambar'] ?>" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalUbahJudul">Judul</label>
                            <input type="text" id="modalUbahJudul" name="judul" class="form-control" placeholder="Judul"
                                value="<?= $row['judul'] ?>" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalUbahTanggal">Tanggal</label>
                            <input type="date" id="modalUbahTanggal" name="tanggal" class="form-control"
                                placeholder="Tanggal" value="<?= $row['tanggal'] ?>" />
                        </div>
                        <!-- Full Editor -->
                        <div class="col-12">
                            <label class="form-label" for="modalUbahDeskripsi">Deskripsi
                                Berita</label>
                            <div class="card">
                                <div id="editor-edit-<?= $row['id_berita'] ?>" style="height: 300px;">
                                    <?= $row['body'] ?>
                                </div>
                                <input type="hidden" name="body" id="input-body-edit-<?= $row['id_berita'] ?>">
                            </div>
                        </div>
                        <!-- /Full Editor -->
                        <div class="col-12">
                            <label class="form-label" for="modalUbahHashtag">Hashtag</label>
                            <input type="text" id="modalUbahHashtag" name="hashtag" class="form-control"
                                placeholder="#example" value="<?= $row['hashtag'] ?>" />
                        </div>
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-primary me-3">Ubah</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>