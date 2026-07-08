<?php

// Interface Downloadable
interface Downloadable {
    public function download(): void;
}


// Lớp Book
class Book {
    protected string $title;
    protected string $author;
    protected float $price;

    public function __construct(string $title, string $author, float $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function displayInfo(): void {
        echo "Tên sách: " . $this->title . "<br>";
        echo "Tác giả: " . $this->author . "<br>";
        echo "Giá: " . number_format($this->price, 0) . " VND<br>";
    }
}


// Lớp Ebook kế thừa Book và triển khai Downloadable
class Ebook extends Book implements Downloadable {

    private float $fileSize;

    public function __construct(
        string $title,
        string $author,
        float $price,
        float $fileSize
    ) {
        parent::__construct($title, $author, $price);
        $this->fileSize = $fileSize;
    }


    public function download(): void {
        echo "Đang tải ebook: " . $this->title . "<br>";
        echo "Dung lượng file: " . $this->fileSize . " MB<br>";
    }


    public function displayInfo(): void {
        parent::displayInfo();
        echo "Dung lượng: " . $this->fileSize . " MB<br>";
    }
}


// ===== Chạy thử =====

$book1 = new Book(
    "Lập trình PHP",
    "Nguyen Van A",
    120000
);

echo "<h3>Thông tin sách thường</h3>";
$book1->displayInfo();


$ebook1 = new Ebook(
    "PHP nâng cao",
    "Tran Van B",
    150000,
    25.5
);

echo "<h3>Thông tin Ebook</h3>";
$ebook1->displayInfo();

$ebook1->download();

?>