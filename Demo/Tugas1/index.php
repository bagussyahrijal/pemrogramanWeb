<?php
require_once 'src/traits/Loanable.php';
require_once 'src/abstract/LibraryItem.php';
require_once 'src/classes/Book.php';
require_once 'src/classes/Magazine.php';

use LibrarySystem\classes\Book;
use LibrarySystem\classes\Magazine;

$book = new Book("PHP Programming", 2021, "John Doe");
$magazine = new Magazine("Tech Today", 2022);

echo $book->getInfo();
echo "\n";
echo $magazine;
echo "\n";

$book->loan();
echo $book->isLoaned() ? "Buku sedang dipinjam" : "Buku tersedia";
