<?php

require_once __DIR__ . '/../model/Book.php';

class BookController
{
    public function addBook()
    {
        $title = $_POST['title'] ?? '';
        $author = $_POST['author'] ?? '';

        try {
            // Membuat objek Book
            $book = new Book($title, $author);

            // Logging sukses
            $this->logMessage("SUCCESS: Buku '{$title}' oleh '{$author}' berhasil ditambahkan.");

            // Render view
            require_once __DIR__ . '/../view/book_view.php';

        } catch (Exception $e) {

            // Logging error
            $this->logMessage("ERROR: " . $e->getMessage());

            // Tampilkan error ke user
            echo "<h3 style='color:red;'>Terjadi kesalahan: " . $e->getMessage() . "</h3>";

        } finally {
            // Blok finally tetap dijalankan
            // Bisa ditambahkan jika perlu
        }
    }

    private function logMessage($message)
    {
        $logFile = __DIR__ . '/../log.txt';
        file_put_contents($logFile, "[" . date("Y-m-d H:i:s") . "] " . $message . PHP_EOL, FILE_APPEND);
    }
}

// Jalankan controller otomatis
$controller = new BookController();
$controller->addBook();