<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The ReveShoppe</title>
    <link rel="stylesheet" href="../php-files/checkoutForm.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;0,800;1,700&family=VT323&display=swap" rel="stylesheet">
    <script src="../myjs.js"></script>
</head>
<body>
<header class="header">
        <a href="../index.php" class="logo">THE REVESHOPPE</a>
        <nav class="navbar">
            <ul>
                <li><a href="../index.php" class="home">Home</a></li>
                <li><a href="../index.php" class="aboutus">About Us</a></li>
                <li><a href="../index.php" class="contacts">Contact</a></li>
            </ul>
        </nav>
        <a href="../index.php" class="shopnow"><button>SHOP NOW</button></a>
    </header>
<body>

<?php
session_start(); 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "phpmyadmin";

$conn = mysqli_connect($hostname, $username, $password, $database) ;

if ($conn -> connect_errno)
{
   echo "Failed to connect to MySQL: " . $conn -> connect_error;
   exit();
}

$user = $_SESSION['user'];
$prod_service = $_REQUEST['prod_service'];
$quantity = $_REQUEST['quantity'];

//Insert contents
$sql = "INSERT INTO `order`
        VALUES ('','$user','$prod_service','$quantity')";

mysqli_query($conn, $sql);

//Retrieve contents
$sql2 = "SELECT * from `order`";
    $result = ($conn->query($sql2));
    $row = []; 
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }   

mysqli_close($conn);
?>

<div class="wrapper">
        <div class="data">
            <h1>REVERECEIPT</h1>
            <section class="data">
                <h2>*************************************************</h2>
            </section>    
                <table class="table-position">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(!empty($row))
                                foreach($row as $rows)
                        {?>
                        <tr>
                        <td><?php echo $rows['ID']; ?></td>
                        <td><?php echo $rows['USER']; ?></td>
                        <td><?php echo $rows['PROD_SERVICE']; ?></td>
                        <td><?php echo $rows['QUANTITY']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <section class="data">
                <h2 class="endline">*************************************************</h2>
                <h1>THANK YOU!</h1>
            </section>
        </div>
        <img src="../images/revereceipt.png" alt="receipt">
    </div>
</body>
</html>