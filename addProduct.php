<?php
include_once 'testfunctie.php';

$conn = connectie();

$query = "SELECT * FROM stockitems_archive";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_array($result)) {

        ?>


        <form method="post" action="test.php">

            <img src="<?php echo $row["photo"]; ?>">

            <input type="hidden" name="id" value="<?php print($_GET['StockNameID'])?>">
            <input type="text" name="quantity" class="form-control" value="1">
            <input type="text" name="hidden_name" value="<?php echo $row["StockItemName"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["UnitPrice"]; ?>">
            <input type="submit" name="add_to_cart" value="toevoegen aan mandje">
        </form>

        <?php
    }
}

?>