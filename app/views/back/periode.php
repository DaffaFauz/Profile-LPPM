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
            <h5 class="card-title mb-0">Periode</h5>
            <button type="button" class="btn btn-primary ps-2" data-bs-toggle="modal" data-bs-target="#tambahPeriode">
                <i class="ti tabler-plus me-1"></i> Tambah Periode
            </button>
        </div>
        <div class="card-datatable text-nowrap">
            <table class="dt-complex-header table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Periode</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data['periode'] as $row):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['periode']; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#ubahPeriode<?= htmlspecialchars($row['id_tahun']) ?>"><i
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

<!-- Modal tambah periode -->
<div class="modal fade" id="tambahPeriode" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-simple modal-edit-user">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-6">
                    <h4 class="mb-2">Tambah Periode</h4>
                </div>
                <form id="tambahPeriodeForm" class="row g-6" action="<?= BASE_URL ?>/Periode/tambah" method="post">
                    <div class="col-12">
                        <label class="form-label" for="modalTambahPeriode">Periode</label>
                        <input type="text" id="modalTambahPeriode" name="periode" class="form-control"
                            placeholder="2024/2025" value="<?= date('Y') . '/' . (date('Y') + 1) ?>" required />
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

<!-- Modal edit periode -->
<?php foreach ($data['periode'] as $row): ?>
    <div class="modal fade" id="ubahPeriode<?= $row['id_tahun'] ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md modal-simple modal-edit-user">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-6">
                        <h4 class="mb-2">Ubah Periode</h4>
                    </div>
                    <form id="ubahPeriodeForm<?= $row['id_tahun'] ?>" class="row g-6"
                        action="<?= BASE_URL ?>/Periode/ubah/<?= $row['id_tahun'] ?>" method="post">
                        <div class="col-12">
                            <label class="form-label" for="modalUbahPeriode">Periode</label>
                            <input type="text" id="modalUbahPeriode" name="periode" class="form-control"
                                placeholder="#example" value="<?= $row['periode'] ?>" />
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