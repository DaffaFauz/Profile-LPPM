<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($data['judul']) ?></title>
</head>

<body>
    <iframe
        src="<?= BASE_URL ?>/publikasi/<?= $data['dokumen']['jenis_publikasi'] ?>/<?= $data['dokumen']['dokumen'] ?>"
        width="100%" height="800"></iframe>
</body>

</html>