<?php
include 'functions.php';

if (isset($_GET['roll_no'])) {
    $roll_no = $_GET['roll_no'];
    deleteStudent($roll_no);
    header('Location: index.php');
}
