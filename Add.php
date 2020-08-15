
<!DOCTYPE html>
<html>
<?php
include("connection.php");
session_start();
?>
<head>
    <title>Shoes ordering</title>
    <link rel="stylesheet" type="text/css" href="Homepage.css"></head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head> 
<body>

  
                    <?php
                    include("connection.php");

                   

                    if ( isset($_POST['submit']) && isset($_POST['prise'])
                       && isset($_POST['Colour']) && isset($_POST['Sizes']) && isset($_POST['Brand']) && isset($_POST['Picture'])) {

    // Data validation session_start();


                        $sql = "INSERT INTO shoes (Quantity, Prise, colour,sizes,Brands,picture)
                    VALUES (:Quantity, :Prise, :colour,:sizes,:Brands,:picture)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(array(
                        ':Quantity' => $_POST['quantity'],
                        ':Prise' => $_POST['prise'],
                        ':colour' => $_POST['Colour'],
                        ':sizes' => $_POST['Sizes'],
                        ':Brands' => $_POST['Brand'],
                        ':picture' => $_POST['Picture']));
                    $_SESSION['success'] = 'Record Added';
                    header( 'Location: index.php' ) ;
                    return;
                }

// Flash pattern
                if ( isset($_SESSION['error']) ) {
                    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
                    unset($_SESSION['error']);
                }
                ?>
              
<a href="logout.php" onclick="return confirm('Are you sure you want to logut?') >Logout</a>

                <"form method="post">
                    <p>Quantity:
                        <input type="number" name="quantity"></p>
                        <p>Prise:
                            <input type="number" name="prise"></p>
                            <p>colour:
                                <input type="text" name="Colour"></p>
                                <p>sizes:
                                    <input type="number" name="Sizes"></p>
                                    <p>Brands:
                                        <input type="text" name="Brand"></p>
                                        <p>picture:
                                      
                                            </form>
                                        </body>
                                        </html>