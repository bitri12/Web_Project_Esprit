 <?php
include_once "../../controller/couponC.php";
if(isset($_POST['formCoupon'])){
$nombre = htmlspecialchars($_POST['nombre']);
if(!empty($_POST['nombre'])){
CreationCoupon($nombre);
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="coupon.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>generer coupon</title>
</head>
<body>
<form method="post">
<input type="number" id="nombre" name="nombre" class="btn btn-secondary" value="1">
<button type="submit" name="formCoupon" class="btn btn-secondary" >Create Coupon</button>
</form>


    <?php $mysqli = new mysqli('localhost','root','','projet_web') or die(mysqli_error($mysqli));
 $result = $mysqli->query("SELECT * FROM coupon") or die($mysqli->error);
 //pre_r($result);
 ?>
    <div class="row justify-content-center">
     <table class="table">
         <thead>
             <tr>

                 <th>Les coupons disponibles</th>
             </tr>
        </thead>
        <?php
        while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td> <?php echo $row['code']; ?></td>
            </tr>
            <?php endwhile; ?>
     </table>


</body>
</html>
