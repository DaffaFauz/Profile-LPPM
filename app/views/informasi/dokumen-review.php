<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($data['judul']) ?></title>
</head>

<body>
    <?php if ($data['dokumen']['jenis_informasi'] == 'PPKM'): ?>
        <img src="<?= BASE_URL ?>/informasi/<?= $data['dokumen']['jenis_informasi'] ?>/<?= $data['dokumen']['dokumen'] ?>"
            class="container" alt="<?= htmlspecialchars($data['judul']) ?>"
            style="width: 90%; height: auto; display: flex; justify-content: center;">
    <?php else: ?>
        <iframe
            src="<?= BASE_URL ?>/informasi/<?= $data['dokumen']['jenis_informasi'] ?>/<?= $data['dokumen']['dokumen'] ?>"
            width="100%" height="800"></iframe>
    <?php endif; ?>
</body>

</html>