<link href="./style/style.css" rel="stylesheet" type="text/css"/>

<?php
    include "connect.php";
    $sql = "select * from products";
    $res = mysqli_query($conn,$sql);
    $productname = "";
    $price = "";
    $desc = "";

    echo "<br>";
    echo "<h2>product description</h2>";
    echo "<br>";
    echo "<table class='plist'>";
    echo "<tr>";
    echo "<th>ProductName</th>";
    echo "<th>Price</th>";
    echo "<th>Description</th>";
    echo "<br>";

    while($row=mysqli_fetch_array($res)){
       echo "<tr>";
        $productname = $row['proname'];
        $price = $row['price'];
        $desc = $row['description'];
        echo "<td>".$productname."</td><td>".$price."</td><td>".$desc."</td>";
        echo "</tr>";
     
      // echo "<strong>".$productname." ".$price." ".$desc."</strong><br>";
    }

    echo "</table>";
    
    /* if(mysqli_num_rows($res) > 0){
        $out = '<table border = "1">
                <tr>
                    <th>product</th><th>price</th><th>description</th>
                </tr>';

                wile($row=mysqli_fetch_assoc($res)){
                    $out .= '<tr><td>{$row["proname"]}</td>
                            <td>{$row["price"]}</td>
                            <td>{$row["description"]}</td>
                            </tr>'
                }
              $out .= '</table>';
    } */

?>  