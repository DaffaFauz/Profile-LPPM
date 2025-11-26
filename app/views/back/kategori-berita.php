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
            <h5 class="card-title mb-0">Berita</h5>
            <button type="button" class="btn btn-primary ps-2" data-bs-toggle="modal" data-bs-target="#tambahKategori">
                <i class="ti tabler-plus me-1"></i> Tambah Kategeori Berita
            </button>
        </div>
        <div class="card-datatable text-nowrap">
            <table class="dt-complex-header table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data['kategori'] as $row):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['nama_kategori']; ?></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="icon-base ti tabler-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#ubahKategori<?= htmlspecialchars($row['id_kategori']) ?>"><i
                                                class="icon-base ti tabler-pencil me-1"></i> Edit</button>
                                        <form
                                            action="<?= BASE_URL ?>/KategoriBerita/hapus/<?= htmlspecialchars($row['id_kategori']) ?>"
                                            method="post">
                                            <button type="submit" class="dropdown-item"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')"><i
                                                    class="icon-base ti tabler-trash me-1"></i> Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Complex Headers -->
</div>
<!-- Modal tambah kategori berita -->
<div class="modal fade" id="tambahKategori" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-simple modal-edit-user">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-6">
                    <h4 class="mb-2">Tambah Kategori Berita</h4>
                </div>
                <form id="tambahKategoriForm" class="row g-6" action="<?= BASE_URL ?>/KategoriBerita/tambah"
                    method="post">
                    <div class="col">
                        <label class="form-label" for="modalTambahNamaKategori">Nama Kategori</label>
                        <input type="text" id="modalTambahNamaKategori" name="nama_kategori" class="form-control"
                            placeholder="Nama Kategori" />
                    </div>
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary me-3">Submit</button>
                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal edit kategori berita -->
<?php foreach ($data['kategori'] as $row): ?>
    <div class="modal fade" id="ubahKategori<?= $row['id_kategori'] ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md modal-simple modal-edit-user">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-6">
                        <h4 class="mb-2">Ubah Kategori Berita</h4>
                    </div>
                    <form id="ubahKategoriForm<?= $row['id_kategori'] ?>" class="row g-6"
                        action="<?= BASE_URL ?>/KategoriBerita/ubah/<?= $row['id_kategori'] ?>" method="post">
                        <div class="col">
                            <label class="form-label" for="modalUbahNamaKategori">Nama Kategori</label>
                            <input type="text" id="modalUbahNamaKategori" name="nama_kategori" class="form-control"
                                placeholder="Nama Kategori" value="<?= $row['nama_kategori'] ?>" />
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