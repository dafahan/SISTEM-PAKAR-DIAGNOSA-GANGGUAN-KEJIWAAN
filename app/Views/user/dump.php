<!-- app/Views/diagnose_result.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Diagnosis Result</title>
    <!-- Add Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4">Diagnosis Result</h1>

        <?php if (!empty($diagnosedDiseases)): ?>
            <p>Based on the observed symptoms, the possible mental diseases are:</p>
            <ul class="list-group">
                <?php foreach ($diagnosedDiseases as $disease): ?>
                    <li class="list-group-item"><?php echo $disease; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No mental diseases diagnosed based on the observed symptoms.</p>
        <?php endif; ?>

    </div>

    <!-- Add Bootstrap JS and Popper.js Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
