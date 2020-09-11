<html>
<head>
<style>
input{
    width: 100%;
    margin-top: 10px;
    height: 40px;
    border-radius: 10px;
    text-align: center;
}
body{
    background-image: url('bg.jpg');
    background-size: cover;
}
div{
    width:200px;
    padding: 50px;
    margin: auto;
    margin-top: 15px;
    background-color: #ffff80;
    border-radius: 10px;
    

}

</style>
</head>
<body>
    <div>
<form method="post" action="order.php">
<input type="text" name="name" placeholder="Name" required>
<input type="number" name="contact" placeholder="Phone Number" required>
<input type="text" name="address" placeholder="Address" required>
<input type="submit" name="continue" >
</form>
    </div>



</form>
</body>
</html>