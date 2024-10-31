<?php
namespace LibrarySystem\abstracts;

abstract class LibraryItem {
    protected $title;
    protected $year;

    public function __construct($title, $year) {
        $this->title = $title;
        $this->year = $year;
    }

    abstract public function getInfo();
}
