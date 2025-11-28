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
            <h5 class="card-title mb-0">Publikasi</h5>
            <button type="button" class="btn btn-primary ps-2" data-bs-toggle="modal" data-bs-target="#tambahPublikasi">
                <i class="ti tabler-plus me-1"></i> Tambah Publikasi
            </button>
        </div>
        <div class="card-datatable text-nowrap">
            <table class="dt-complex-header table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Program Studi</th>
                        <th>Kategori</th>
                        <th>Periode</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data['publikasi'] as $row):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['nama_fakultas']; ?></td>
                            <td>

                                <a href="<?= BASE_URL ?>/Publikasi/<?= $row['slug'] ?>" target="_blank"
                                    class="btn btn-info btn-sm" name="id_informasi" value="<?= $row['id_informasi'] ?>"><i
                                        class="ti tabler-eye me-1"></i>
                                    Lihat dokumen</a>

                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#ubahPublikasi<?= htmlspecialchars($row['id_informasi']) ?>"><i
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

<!-- Modal tambah publikasi -->
<div class="modal fade" id="tambahPublikasi" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-simple modal-edit-user">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-6">
                    <h4 class="mb-2">Tambah Publikasi</h4>
                </div>
                <form id="tambahPublikasiForm" class="row g-6" action="<?= BASE_URL ?>/Publikasi/tambah" method="post"
                    enctype="multipart/form-data">
                    <div class="col-12">
                        <label class="form-label" for="id_prodi">Program Studi</label>
                        <select name="id_prodi" class="form-select" id="id_prodi">
                            <option value="" disabled selected>Pilih Program Studi</option>
                            <?php foreach ($data['prodi'] as $row): ?>
                                <option value="<?= $row['id_prodi'] ?>"><?= $row['nama_prodi'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="modalTambahPublikasi">Jenis Publikasi</label>
                        <select name="jenis_publikasi" class="form-select" id="">
                            <option value="Penelitian">Penelitian</option>
                            <option value="Pengabdian kepada Masyarakat">Pengabdian kepada Masyarakat</option>
                            <option value="Hak Kekayaan Intelektual">Hak Kekayaan Intelektual</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="periode">Periode</label>
                        <select name="periode" class="form-select" id="periode">
                            <option value="" disabled selected>Pilih Periode</option>
                            <?php foreach ($data['periode'] as $row): ?>
                                <option value="<?= $row['periode'] ?>"><?= $row['periode'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="file" class="form-label">Dokumen</label>
                            <input type="file" class="form-control" id="file" name="file">
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary me-3">Tambah</button>
                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal edit publikasi -->
<?php foreach ($data['publikasi'] as $row): ?>
    <div class="modal fade" id="ubahPublikasi<?= $row['id_informasi'] ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md modal-simple modal-edit-user">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-6">
                        <h4 class="mb-2">Ubah Publikasi</h4>
                    </div>
                    <form id="ubahPublikasiForm<?= $row['id_informasi'] ?>" class="row g-6"
                        action="<?= BASE_URL ?>/Publikasi/ubah/<?= $row['id_informasi'] ?>" method="post"
                        enctype="multipart/form-data">
                        <div class="col-12">
                            <label class="form-label" for="id_prodi">Program Studi</label>
                            <select name="id_prodi" class="form-select" id="id_prodi">
                                <option value="" disabled selected>Pilih Program Studi</option>
                                <?php foreach ($data['prodi'] as $row): ?>
                                    <option value="<?= $row['id_prodi'] ?>"><?= $row['nama_prodi'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="modalTambahPublikasi">Jenis Publikasi</label>
                            <select name="jenis_publikasi" class="form-select" id="">
                                <option value="Penelitian">Penelitian</option>
                                <option value="Pengabdian kepada Masyarakat">Pengabdian kepada Masyarakat</option>
                                <option value="Hak Kekayaan Intelektual">Hak Kekayaan Intelektual</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="periode">Periode</label>
                            <select name="periode" class="form-select" id="periode">
                                <option value="" disabled selected>Pilih Periode</option>
                                <?php foreach ($data['periode'] as $row): ?>
                                    <option value="<?= $row['periode'] ?>"><?= $row['periode'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="file" class="form-label">Dokumen</label>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
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