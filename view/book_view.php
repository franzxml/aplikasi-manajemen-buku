<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Buku</title>
</head>
<body>

    <h2>Detail Buku yang Ditambahkan</h2>

    <p><strong>Judul:</strong> 
        <?= htmlspecialchars($book->getTitle()) ?>
    </p>

    <p><strong>Pengarang:</strong> 
        <?= htmlspecialchars($book->getAuthor()) ?>
    </p>

    <br>
    <a href="book_form.php">Tambah Buku Lagi</a>

</body>
</html>