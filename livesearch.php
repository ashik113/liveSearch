
<?php
include("config.php");

if(isset($_POST['input'])){
    $input = $_POST['input'];

    $query = "SELECT * FROM product WHERE Itemcode LIKE '{$input}%' OR Itemname LIKE '{$input}%' OR Quantity LIKE '{$input}%' OR Price LIKE '{$input}%'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)>0){?>

        <table class="table table-bordered table-striped mt-4">
            
        <thead>
            <tr>
                <th>Itemcode</th>
                <th>Itemname</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            </thead>

        <tbody>

        <?php

            while($row = mysqli_fetch_assoc($result)){
                $id = $row['itemcode'];
                $name = $row['itemname'];
                $quantity = $row['quantity'];
                $price = $row['price'];

            
        ?>

        <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $name;?></td>
            <td><?php echo $quantity;?></td>
            <td><?php echo $price;?></td>
        </tr>
        
                <?php
            }  

            ?>

        </tbody>
            
        </table>
        <?php

    }

    ?>

<?php
    else{
                echo "<h6 class="text-danger text-center mt-3">No Data Found</h6>"
            }
            
    }?>

