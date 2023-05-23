<?php
//echo "hello"; 
include('conn.php');
if(isset($_POST['input']))
{
    $input=$_POST['input'];
    $query="SELECT * FROM search WHERE name LIKE '{$input}%'";
    $res=mysqli_query($conn,$query);
    if(mysqli_num_rows($res)>0){?>

    <table class="table table-bordered table-striped mt-4">
        <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>image</th>
        <th>price</th>
    </tr>
    </thead>   
    <tbody>
        <?php
         while($row=mysqli_fetch_assoc($res)){
            $id=$row['id'];
            $name=$row['name'];
            $image=$row['image'];
            $price=$row['price'];

            ?>
            <tr>
                <td>
                    <?php echo $id; ?>
                </td>
                <td>
                    <?php echo $name; ?>
                </td>
                <td>
                    <?php echo $image; ?>
                </td>
                <td>
                    <?php echo $price; ?>
                </td>
         </tr>
         <?php
         }
        ?>
    </tbody>
    </table>
    <?php

    }else{
        echo "not found";
    }
}
?>