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
            <form action="<?= BASE_URL ?>/VisiMisi/ubah" method="post">
                <div class="col-12">
                    <h5>Visi Misi</h5>
                    <div id="visi-misi-editor">
                        <?= $data['visi_misi']['content'] ?>
                    </div>
                </div>
                <input type="hidden" name="body" id="input-body">
                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],
            [{ 'header': 1 }, { 'header': 2 }],
            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
            [{ 'script': 'sub' }, { 'script': 'super' }],
            [{ 'indent': '-1' }, { 'indent': '+1' }],
            [{ 'direction': 'rtl' }],
            [{ 'size': ['small', false, 'large', 'huge'] }],
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            [{ 'color': [] }, { 'background': [] }],
            [{ 'font': [] }],
            [{ 'align': [] }],
            ['clean']
        ];

        var quill = new Quill('#visi-misi-editor', {
            theme: 'snow',
            modules: {
                toolbar: toolbarOptions
            }
        });

        var form = document.querySelector('form');
        form.addEventListener('submit', function (e) {
            var body = document.querySelector('#input-body');
            body.value = quill.root.innerHTML;
        });
    });
</script>