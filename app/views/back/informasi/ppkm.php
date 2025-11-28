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
            <h5 class="card-title mb-0">PPKM</h5>
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
                    foreach ($data['ppkm'] as $row):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['nama_fakultas']; ?></td>
                            <td>

                                <a href="<?= BASE_URL ?>/PPKM/<?= $row['slug'] ?>" target="_blank"
                                    class="btn btn-info btn-sm" name="id_informasi" value="<?= $row['id_informasi'] ?>"><i
                                        class="ti tabler-eye me-1"></i>
                                    Lihat dokumen</a>

                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#ubahPPKM<?= htmlspecialchars($row['id_informasi']) ?>"><i
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

<!-- Modal edit ppkm -->
<?php foreach ($data['ppkm'] as $row): ?>
    <div class="modal fade" id="ubahPPKM<?= $row['id_informasi'] ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md modal-simple modal-edit-user">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-6">
                        <h4 class="mb-2">Upload dokumen</h4>
                    </div>
                    <form id="ubahPPKMForm<?= $row['id_informasi'] ?>" class="row g-6"
                        action="<?= BASE_URL ?>/PPKM/ubah/<?= $row['id_informasi'] ?>" method="post"
                        enctype="multipart/form-data">
                        <div class="col-12">
                            <label class="form-label" for="modalUbahDokumen">Upload Dokumen</label>
                            <input type="file" id="modalUbahDokumen" name="dokumen" class="form-control"
                                placeholder="#example" value="<?= $row['dokumen'] ?>" />
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