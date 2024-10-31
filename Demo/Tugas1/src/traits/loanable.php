<?php
namespace LibrarySystem\traits;

trait Loanable {
    protected $isLoaned = false;

    public function loan() {
        $this->isLoaned = true;
    }

    public function returnItem() {
        $this->isLoaned = false;
    }

    public function isLoaned() {
        return $this->isLoaned;
    }
}