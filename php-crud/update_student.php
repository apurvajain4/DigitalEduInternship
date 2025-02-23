<?php
include 'functions.php';

if (isset($_GET['roll_no'])) {
    $roll_no = $_GET['roll_no'];
    $students = getAllStudents();
    $student = null;

    foreach ($students as $s) {
        if ($s['roll_no'] == $roll_no) {
            $student = $s;
            break;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $class = $_POST['class'];
        $dob = $_POST['dob'];
        $blood_group = $_POST['blood_group'];

        // Update student
        updateStudent($roll_no, $first_name, $middle_name, $last_name, $class, $dob, $blood_group);
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Edit Student</h1>
        <form method="post" action="">
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name:</label>
                <input type="text" class="form-control" name="first_name" value="<?php echo $student['first_name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="middle_name" class="form-label">Middle Name:</label>
                <input type="text" class="form-control" name="middle_name" value="<?php echo $student['middle_name']; ?>">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value="<?php echo $student['last_name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Class:</label>
                <input type="text" name="class" class="form-control" value="<?php echo $student['class']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth:</label>
                <input type="date" class="form-control" name="dob" value="<?php echo $student['dob']; ?>">
            </div>
            <div class="mb-3">
                <label for="blood_group" class="form-label">Blood Group:</label>
                <!-- Update Student - Blood Group Dropdown -->
                <select name="blood_group" class="form-control" required>
                    <option value="" disabled>Select Blood Group</option>
                    <option value="A+" <?php echo ($student['blood_group'] == 'A+') ? 'selected' : ''; ?>>A+</option>
                    <option value="A-" <?php echo ($student['blood_group'] == 'A-') ? 'selected' : ''; ?>>A-</option>
                    <option value="B+" <?php echo ($student['blood_group'] == 'B+') ? 'selected' : ''; ?>>B+</option>
                    <option value="B-" <?php echo ($student['blood_group'] == 'B-') ? 'selected' : ''; ?>>B-</option>
                    <option value="AB+" <?php echo ($student['blood_group'] == 'AB+') ? 'selected' : ''; ?>>AB+</option>
                    <option value="AB-" <?php echo ($student['blood_group'] == 'AB-') ? 'selected' : ''; ?>>AB-</option>
                    <option value="O+" <?php echo ($student['blood_group'] == 'O+') ? 'selected' : ''; ?>>O+</option>
                    <option value="O-" <?php echo ($student['blood_group'] == 'O-') ? 'selected' : ''; ?>>O-</option>
                </select>


            </div>
            <button type="submit" class="btn btn-primary">Update Student</button>
        </form>
        <a href="index.php" class="btn btn-secondary mt-3">Back to Students List</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>