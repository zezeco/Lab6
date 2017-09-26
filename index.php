<?php 
    require_once('database.php');


    // Get current customers
    $query = "SELECT firstName, lastName FROM customers order by lastName";
    $customers = $db->query($query);
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header">
        <h1>Customer relations</h1>
    </div>

    <div id="main">

        <div id="content">
            <!-- display a table of Customers -->
            
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Full Name</th>
                </tr>
                <?php foreach ($customers as $customer) : ?>
                <tr>
                    <td><?php echo $customer['firstName']; ?></td>
                    <td><?php echo $customer['lastName']; ?></td>
                    <td><?php echo $customer['firstName']; ?> <?php echo $customer['lastName']; ?></td>
                    
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <div id="footer">
        <p>&copy; <?php echo date("Y"); ?> My Shop, Inc.</p>
    </div>

    </div><!-- end page -->
</body>
</html>