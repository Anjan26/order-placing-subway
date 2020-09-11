<?php
session_start();
unset($_SESSION["login"]);
if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['contact'])){
    $_SESSION['name']=$_POST['name'];
    $_SESSION['address']=$_POST['address'];
    $_SESSION['contact']=$_POST['contact'];
}else{
    $invalid = true;
    header('Location: index.php');
}
?>

<html>
    <head>
        <style>
            #submit{
                background-color: #f98b88;
                color: white;
                border-radius: 10px;
                padding: 5px;
                width: 100px;
                margin-top: 40px;
            }
            .content{
                width:350px;
                margin: auto;             
                background-color: white;
                border-radius: 10px;
                padding:30px;
                text-align: center;
                z-index: 1;
                top: 50px;
                position: relative;
            }
            body{
                background-image: url('bread.jpg');
                background-size: cover;
            }
            #tint{
                width: 100%;
                height: 100%;
                background-color: black;
                opacity: 0.6;
                position: absolute;
                z-index: 0;
            }

        </style>

    </head>
    <body>
        <script>
            // var invalid = <?php echo $invalid;?>
            // if(invalid=="true"){
            //     setTimeout(function()){
            //         window.location.href="index.php";
            //     },2000)
            // }
            </script>
        <div id="tint"></div>
        <div class="content">
        <form method="post" action="order-summary.php">
            <h3>Select bread:</h3> <br>
            <input type="radio" name="bread" value="wheat">Wheat
            <input type="radio" name="bread" value="brown">brown

            <br>

            <h3>Select filling:<h3><br>
            <input type="checkbox" name="filling" value="chicken">Chicken
            <input type="checkbox" name="filling" value="potato">Potato
            <input type="checkbox" name="filling" value="tuna">Tuna

            <br>

            <h3>Select sauce: <h3><br>
            <input type="radio" name="sauce[]" value="Mayo">Mayo
            <input type="radio" name="sauce[]" value="Ketchup">Ketchup
            <input type="radio" name="sauce[]" value="Pudina">Pudina

            <br>

            <h3>Do you want cheese</h3>
            <input type="radio" name="cheese" value="yes">Yes
            <input type="radio" name="cheese" value="no">No

            <br>

            <input type="submit" value="submit" id="submit">
        </form>
        </div>
        
    </body>
</html>