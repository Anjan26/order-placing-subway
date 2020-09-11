<?php
session_start();
if(isset($_POST['bread']) && !isset($_POST['filling'])){
    if(isset($_SESSION['name'])){
        header('Location: order.php');
    }else{
        header('Location: index.php');
    }
}

?>

<html>
    <head></head>
    <body>
        <div>
            <h2>Order Summary</h2>
<?php
echo"Hii, ".$_SESSION['name'];
echo"<br>";
echo"You have ordered a ".$_POST['bread']." bread sandwich with";
if($_POST['cheese']=="yes"){
    echo" cheese and ";
}

echo $_POST['filling']." fillings with below sauces.";
echo"<ul>";
foreach($_POST['sauce'] as $sauce){
    echo"<li>".$sauce."</li>";
}
echo"</ul>";
echo"<h3>Enjoy your meal</h3>";
echo"<a href='logout.php'>Logout</a>";

?>
        </div>
    </body>
</html>