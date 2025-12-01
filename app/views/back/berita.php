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
            <button type="button" class="btn btn-primary ps-2" data-bs-toggle="modal" data-bs-target="#tambahBerita">
                <i class="ti tabler-plus me-1"></i> Tambah Berita
            </button>
        </div>
        <div class="card-datatable text-nowrap">
            <table class="dt-complex-header table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Judul</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data['berita'] as $row):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['tanggal']; ?></td>
                            <td><?= $row['judul']; ?></td>
                            <td><span
                                    class="badge bg-<?= $row['status'] == 'Publish' ? 'success' : 'danger' ?>"><?= $row['status']; ?></span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="icon-base ti tabler-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <form
                                            action="<?= BASE_URL ?>/Berita/status/<?= htmlspecialchars($row['id_berita']) ?>"
                                            method="post" class="m-0">
                                            <button type="submit" class="dropdown-item"><i
                                                    class="icon-base ti tabler-<?= $row['status'] == 'Publish' ? 'link-off' : 'upload' ?> me-1"></i>
                                                <?= $row['status'] == 'Publish' ? 'Unpublish' : 'Publish' ?></button>
                                        </form>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#ubahBerita<?= htmlspecialchars($row['id_berita']) ?>"><i
                                                class="icon-base ti tabler-pencil me-1"></i> Edit</button>
                                        <form
                                            action="<?= BASE_URL ?>/Berita/hapus/<?= htmlspecialchars($row['id_berita']) ?>"
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
<!-- Modal tambah berita -->
<div class="modal fade" id="tambahBerita" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-simple modal-edit-user">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-6">
                    <h4 class="mb-2">Tambah Berita</h4>
                </div>
                <form id="tambahBeritaForm" class="row g-6" action="<?= BASE_URL ?>/Berita/tambah" method="post"
                    enctype="multipart/form-data">
                    <div class="col-12">
                        <label class="form-label" for="modalTambahGambar">Upload Gambar</label>
                        <input type="file" id="modalTambahGambar" name="gambar" class="form-control"
                            placeholder="#example" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalTambahJudul">Judul</label>
                        <input type="text" id="modalTambahJudul" name="judul" class="form-control"
                            placeholder="Judul" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalTambahUrl">URL</label>
                        <input type="text" id="modalTambahUrl" name="slug" class="form-control" placeholder="URL" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalTambahMetaDescription">Meta Description</label>
                        <input type="text" id="modalTambahMetaDescription" name="meta_description" class="form-control"
                            placeholder="Meta Description" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalTambahTanggal">Tanggal</label>
                        <input type="date" id="modalTambahTanggal" name="tanggal" class="form-control"
                            placeholder="Tanggal" />
                    </div>
                    <!-- Full Editor -->
                    <div class="col-12">
                        <label class="form-label" for="modalTambahDeskripsi">Deskripsi
                            Berita</label>
                        <div class="card">
                            <div id="editor-tambah" style="min-height: 500px;">
                            </div>
                            <input type="hidden" name="body" id="input-body-tambah">
                        </div>
                    </div>
                    <!-- /Full Editor -->
                    <div class="col-12">
                        <label class="form-label" for="modalTambahHashtag">Hashtag</label>
                        <input type="text" id="modalTambahHashtag" name="hashtag" class="form-control"
                            placeholder="#example" />
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

<!-- Modal edit berita -->
<?php foreach ($data['berita'] as $row): ?>
    <div class="modal fade" id="ubahBerita<?= $row['id_berita'] ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-simple modal-edit-user">
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
                            <label class="form-label" for="modalTambahUrl">URL</label>
                            <input type="text" id="modalTambahUrl" name="slug" class="form-control" placeholder="URL"
                                value="<?= $row['slug'] ?>" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalTambahMetaDescription">Meta Description</label>
                            <input type="text" id="modalTambahMetaDescription" name="meta_description" class="form-control"
                                placeholder="Meta Description" value="<?= $row['deskripsi'] ?>" />
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
                                <div id="editor-edit-<?= $row['id_berita'] ?>" style="min-height: 500px;">
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Toolbar configuration
        const toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'code-block'],
            [{ 'header': 1 }, { 'header': 2 }],               // custom button values
            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
            [{ 'script': 'sub' }, { 'script': 'super' }],      // superscript/subscript
            [{ 'indent': '-1' }, { 'indent': '+1' }],          // outdent/indent
            [{ 'direction': 'rtl' }],                         // text direction
            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
            [{ 'font': [] }],
            [{ 'align': [] }],
            ['clean']                                         // remove formatting button
        ];

        function initQuill(selector) {
            return new Quill(selector, {
                theme: 'snow',
                modules: {
                    toolbar: toolbarOptions
                }
            });
        }

        // Initialize Editor for Tambah
        var quillTambah;
        var modalTambah = document.getElementById('tambahBerita');
        if (modalTambah) {
            modalTambah.addEventListener('shown.bs.modal', function () {
                if (!quillTambah) {
                    quillTambah = initQuill('#editor-tambah');
                }
            });
        }

        var formTambah = document.getElementById('tambahBeritaForm');
        if (formTambah) {
            formTambah.addEventListener('submit', function (e) {
                if (quillTambah) {
                    var deskripsi = document.querySelector('#input-body-tambah');
                    deskripsi.value = quillTambah.root.innerHTML;
                }
            });
        }

        // Initialize Editor for Edit
        <?php foreach ($data['berita'] as $row): ?>
                (function () {
                    var id = '<?= $row['id_berita'] ?>';
                    var editorId = '#editor-edit-' + id;
                    var modalId = 'ubahBerita' + id;
                    var formId = 'ubahBeritaForm' + id;
                    var inputId = '#input-body-edit-' + id;
                    var quillEdit;

                    var modalEdit = document.getElementById(modalId);
                    if (modalEdit) {
                        modalEdit.addEventListener('shown.bs.modal', function () {
                            if (!quillEdit) {
                                quillEdit = initQuill(editorId);
                            }
                        });
                    }

                    var formEdit = document.getElementById(formId);
                    if (formEdit) {
                        formEdit.addEventListener('submit', function (e) {
                            if (quillEdit) {
                                var deskripsi = document.querySelector(inputId);
                                deskripsi.value = quillEdit.root.innerHTML;
                            }
                        });
                    }
                })();
        <?php endforeach; ?>
    });
</script>