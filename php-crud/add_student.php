<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $class = $_POST['class'];
    $dob = $_POST['dob'];
    $blood_group = $_POST['blood_group'];

    // Server-side validation
    if (empty($first_name) || empty($last_name) || empty($class)) {
        $error = "First Name, Last Name, and Class are required!";
    } else {
        $success = addStudent($first_name, $middle_name, $last_name, $class, $dob, $blood_group);
        if ($success) {
            header('Location: index.php');
        } else {
            $error = "Error adding student!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Add New Student</h1>
        <form method="post" action="">
            <?php if (isset($error)) {
                echo "<div class='alert alert-danger'>$error</div>";
            } ?>
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name:</label>
                <input type="text" class="form-control" name="first_name" required>
            </div>
            <div class="mb-3">
                <label for="middle_name" class="form-label">Middle Name:</label>
                <input type="text" class="form-control" name="middle_name">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="last_name" required>
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Class:</label>
                <input type="text" name="class" class="form-control" placeholder="Enter Class (e.g., FYMCA, SYMCA, FYMBA, etc)" required>
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth:</label>
                <input type="date" class="form-control" name="dob">
            </div>
            <div class="mb-3">
                <label for="blood_group" class="form-label">Blood Group:</label>
                <select name="blood_group" class="form-control" required>
                    <option value="" disabled selected>Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Add Student</button>
        </form>
        <a href="index.php" class="btn btn-secondary mt-3">Back to Students List</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>