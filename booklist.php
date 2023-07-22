<?php 
require_once 'book.php';
class BookList {
    private $books = array(); 
    public function addBook(Book $book) {
        $this->books[] = $book; 
    }
    public function getBook() {
        return $this->books;
    }
    public function sortBookByAuthor() {
        usort($this->books, function ($a, $b){
            return strcmp($a->getAuthor(), $b->getAuthor());
        });
    }
    public function sortBookByTitle() {
        usort($this->books, function($a, $b) {
            return strcmp($a->getBookTitle(), $b->getBookTitle());
        });
    }
    public function sortBookByPublicationYear() {
        usort($this->books, function($a,$b) {
            return $a->getPublicationYear() - $b->getPublicationYear(); 
        });
    }
}
?>