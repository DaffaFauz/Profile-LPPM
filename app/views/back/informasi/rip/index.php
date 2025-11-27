<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <?php if (isset($_SESSION['msg'])): ?>
        <div class="alert alert-<?= $_SESSION['msg_type'] ?> alert-dismissible" role="alert">
            <?= $_SESSION['msg'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['msg']); endif; ?>

    <div class="card">
        <div class="card-body">
            <form action="<?= BASE_URL ?>/RIP/ubah" method="post" enctype="multipart/form-data">
                <div class="col-12">
                    <h5>RIP LPPM</h5>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <span><a href="<?= BASE_URL ?>/RIP" target="_blank" rel="noopener noreferrer"><i
                                    class="ti tabler-file-type-pdf"></i> File PDF</a></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="file" class="form-label">Upload File</label>
                            <input type="file" class="form-control" id="file" name="file">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
            </form>
        </div>
    </div>
</div>