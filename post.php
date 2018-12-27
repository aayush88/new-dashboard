<select size=1 name="category.id">
    <?php
    $stmt="SELECT * FROM category WHERE status=1";
    include('connection.php')
    $qry=mysqli_query($conn,$stmt);
    while ($row=mysqli_fetch_array($qry)) 
    {
    	echo "<option value="$row['id'].">".$row['name']."</option>;
    }
      ?>
</select>