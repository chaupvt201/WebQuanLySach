<?php 
interface Ibook{
    public function getBookTittle(); 
    public function getAuthor(); 
    public function getPublisher(); 
    public function getPublicationYear(); 
    public function getISBN(); 
    public function getChapters(); 
}
class Book implements Ibook {
    private $booktittle; 
    private $author; 
    private $publisher; 
    private $publicationyear; 
    private $ISBN; 
    private $chapter; 
    public function __construct($tittle,$author,$publisher,$publicationyear,$ISBN,$chapters) {
        $this->booktittle = $tittle; 
        $this->author = $author; 
        $this->publisher = $publisher; 
        $this->publicationyear = $publicationyear; 
        $this->ISBN = $ISBN; 
        $this->chapter = $chapters; 
    }
    public function getBookTittle() {
        return $this->booktittle;
    }
    public function getAuthor() {
        return $this-> author; 
    }
    public function getPublisher() {
        return $this->publisher; 
    }
    public function getPublicationYear() {
        return $this->publicationyear; 
    }
    public function getISBN() {
        return $this->ISBN; 
    }
    public function getChapters() {
        return $this->chapter;
    }
}
?>