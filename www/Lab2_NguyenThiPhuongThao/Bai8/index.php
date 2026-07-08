<?php

// Autoload class tự động
spl_autoload_register(function ($class) {

    // Đổi namespace thành đường dẫn file
    $file = str_replace(
        "App\\",
        "App/",
        $class
    );

    $file = str_replace(
        "\\",
        "/",
        $file
    );

    $file .= ".php";


    if (file_exists($file)) {
        require_once $file;
    }
});


use App\Students\Student;


// Tạo sinh viên

$student1 = new Student(
    "Nguyen Van A",
    20,
    "SV001"
);


echo "<h2>Thông tin sinh viên</h2>";

$student1->displayInfo();

?>