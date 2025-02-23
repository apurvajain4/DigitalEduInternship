<?php
include 'functions.php';

// Fetch all students
$students = getAllStudents();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Students List</h1>

        <!-- Link to Chart Page -->
        <a href="chart.php" class="btn btn-info mb-3">View Students Distribution Chart</a>

        <a href="add_student.php" class="btn btn-primary mb-3">Add New Student</a>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Roll No</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Class</th>
                    <th>DOB</th>
                    <th>Blood Group</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?php echo $student['roll_no']; ?></td>
                        <td><?php echo $student['first_name']; ?></td>
                        <td><?php echo $student['middle_name']; ?></td>
                        <td><?php echo $student['last_name']; ?></td>
                        <td><?php echo $student['class']; ?></td>
                        <td><?php echo $student['dob']; ?></td>
                        <td><?php echo $student['blood_group']; ?></td>
                        <td>
                            <a href="update_student.php?roll_no=<?php echo $student['roll_no']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_student.php?roll_no=<?php echo $student['roll_no']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>