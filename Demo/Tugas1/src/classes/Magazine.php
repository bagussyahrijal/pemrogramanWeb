<?php
namespace LibrarySystem\classes;

use LibrarySystem\abstracts\LibraryItem;

class Magazine extends LibraryItem {
    public function getInfo() {
        return "Magazine: $this->title, Year: $this->year";
    }

    public function __toString() {
        return $this->getInfo();
    }
}
