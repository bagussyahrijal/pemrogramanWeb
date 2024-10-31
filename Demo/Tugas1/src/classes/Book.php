<?php
namespace LibrarySystem\classes;

use LibrarySystem\abstracts\LibraryItem;
use LibrarySystem\traits\Loanable;

class Book extends LibraryItem {
    use Loanable;

    private $author;

    public function __construct($title, $year, $author) {
        parent::__construct($title, $year);
        $this->author = $author;
    }

    public function getInfo() {
        return "Book: $this->title, Author: $this->author, Year: $this->year";
    }
}
