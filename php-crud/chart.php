<?php
// Include database connection
include('db_config.php');

// Fetch data to visualize (e.g., count of students by class or blood group)
$query = "SELECT class, COUNT(*) as student_count FROM students GROUP BY class";
$result = mysqli_query($conn, $query);

// Initialize arrays to store data for chart
$labels = [];
$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $labels[] = $row['class'];  // Class names (e.g., "5th", "6th", etc.)
    $data[] = $row['student_count'];  // Count of students in each class
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Chart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Chart.js Library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <div class="container mt-5">
        <h3 class="text-center">Student Count by Class</h3>

        <!-- Canvas for Chart.js -->
        <canvas id="studentChart" width="400" height="200"></canvas>

        <a href="index.php" class="btn btn-secondary">Back to Students List</a>

        <script>
            // Prepare the chart data
            var ctx = document.getElementById('studentChart').getContext('2d');
            var studentChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($labels); ?>, // Class names
                    datasets: [{
                        label: 'Number of Students',
                        data: <?php echo json_encode($data); ?>, // Student counts
                        backgroundColor: 'rgba(54, 162, 235, 0.2)', // Blue bars
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>