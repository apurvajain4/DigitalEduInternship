<?php
// Include the database connection
include 'db_config.php';

// Create function
function addStudent($first_name, $middle_name, $last_name, $class, $dob, $blood_group)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO students (first_name, middle_name, last_name, class, dob, blood_group) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $first_name, $middle_name, $last_name, $class, $dob, $blood_group);
    return $stmt->execute();
}

// Read function - Fetch all students
function getAllStudents()
{
    global $conn;
    $result = $conn->query("SELECT * FROM students");
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Update function
function updateStudent($roll_no, $first_name, $middle_name, $last_name, $class, $dob, $blood_group)
{
    global $conn;
    $stmt = $conn->prepare("UPDATE students SET first_name=?, middle_name=?, last_name=?, class=?, dob=?, blood_group=? WHERE roll_no=?");
    $stmt->bind_param("ssssssi", $first_name, $middle_name, $last_name, $class, $dob, $blood_group, $roll_no);
    return $stmt->execute();
}

// Delete function
function deleteStudent($roll_no)
{
    global $conn;
    $stmt = $conn->prepare("DELETE FROM students WHERE roll_no=?");
    $stmt->bind_param("i", $roll_no);
    return $stmt->execute();
}
