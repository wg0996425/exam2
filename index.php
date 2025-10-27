<?php
require __DIR__ . "/db.php";
require __DIR__ . "/functions.php";
$pdo = db();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>W. Viktor Gray - Exam 2</title>
</head>

<body>
    
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Price</th>
        </tr>
        <?php 
            $data = $pdo->query(selectAllFromProducts());
            foreach ($data as $row) {
                echo 
                "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['price']}</td>
                </tr>";
            }
        ?>
    </table>
    
    <br>
    
    <table class="table table-bordered">
        <tr>
            <th>Customer Name</th>
            <th>Orders</th>
            <th>Total Spent</th>
        </tr>
        <?php 
            $data = $pdo->query(selectFromCustomer());
            foreach ($data as $row) {
                echo 
                "<tr>
                    <td>{$row['first_name']}, {$row['last_name']}</td>
                    <td>{$row['order_count']}</td>
                    <td>{$row['total_spent']}</td>
                </tr>";
            }
        ?>
    </table>

    <br>
    
    <?php require '/Applications/XAMPP/xamppfiles/htdocs/102725/exam2/components/footer.php'; ?>
</body>

</html>