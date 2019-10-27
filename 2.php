<?php
include 'Thumb.php';
$thumb = new Thumb;
try {
    $thumb->make('test.jpg', '1.jpg', 100, 300, 1);
} catch (Exception $e) {
    echo $e->getMessage();
}
