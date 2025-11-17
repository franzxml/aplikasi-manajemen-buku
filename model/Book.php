<?php

class Book
{
    private $title;
    private $author;

    public function __construct($title, $author)
    {
        if (empty(trim($title))) {
            throw new Exception("Judul buku tidak boleh kosong!");
        }

        if (empty(trim($author))) {
            throw new Exception("Nama pengarang tidak boleh kosong!");
        }

        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }
}