<?php 
require_once 'book.php'; 
require_once 'booklist.php';
$booklist = new booklist(); 
if(isset($_POST['add_book'])) {
    $title = $_POST['title']; 
    $author = $_POST['author']; 
    $publisher = $_POST['publisher']; 
    $publicationYear = $_POST['publication_year']; 
    $ISBN = $_POST['ISBN']; 
    $chapter = explode(",", $_POST['chapters']); 

    $newbook = new book($title, $author,$publisher,$publicationYear,$ISBN,$chapter); 
    $booklist->addbook($newbook);
}
?>
<!DOCTYPE html>
<html lang="">
<head>
    <title>Quản lý danh sách sách</title>
    <style>
        li {
           list-style: none;
        }
    </style>
</head>
<body>
<h1>Danh sách sách</h1>
<form action="" method="post">
    <li>
        <label for="title">Tên sách:</label>
        <label>
            <input type="text" name="title" required>
        </label>
    </li>

    <br>
    <li>
        <label for="author">Tên tác giả:</label>
        <label>
            <input type="text" name="author" required>
        </label>
    </li>
    <br>
    <li>
        <label for="publisher">Nhà xuất bản:</label>
        <label>
            <input type="text" name="publisher" required>
        </label>
    </li>
    <br>
    <li>
        <label for="publication_year">Năm xuất bản:</label>
        <label>
            <input type="number" name="publication_year" required>
        </label>
    </li>
    <br>
    <li>
        <label for="ISBN">Số hiệu ISBN:</label>
        <label>
            <input type="text" name="ISBN" required>
        </label>
    </li>
    <br>
    <li>
        <label for="chapters">Danh mục chương sách (phân cách bởi dấu phẩy):</label>
        <label>
            <input type="text" name="chapters" required>
        </label>
    </li>
    <br>
    <input type="submit" name="add_book" value="Thêm sách">
</form>
<?php 
$books = $booklist->getbook(); 
foreach($books as $book) {
    echo "<h3>".$book->getBookTittle()."</h3>"; 
    echo "<p>Tác giả: ".$book->getAuthor()."</p>"; 
    echo "<p>Nhà xuất bản: ".$book->getPublisher()."</p>"; 
    echo "<p>Năm xuất bản: ".$book->getPublicationYear()."</p>"; 
    echo "<p>Số hiệu ISBN: ".$book->getISBN()."</p>"; 
    echo "<p>Danh mục chương: ".implode(",",$book->getChapters())."</p>"; 
}
?>
<h2>Danh sách sách sắp xếp theo: </h2>
<form action="" method="post">
    <label for="sort_type">Sắp xếp theo:</label>
    <select name="sort_type" id="sort_type">
        <option value="author">Tên tác giả</option>
        <option value="title">Tên sách</option>
        <option value="publication_year">Năm xuất bản</option>
    </select>
    <input type="submit" name="sort_books" value="Sắp xếp">
</form>
</body> 
</html>