<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Language" content="fr"/>
    <link rel="stylesheet" href="css/anomalie.css">
    <title>Admin accès</title>
</head>
<body>
    <div class="button">
    <a class="buttona" href="http://localhost/firstwebsite/admin.php">Donner l'access</a>
    <a class="buttons" href="http://localhost/firstwebsite/nonadmin.php">Retirer l'accesse</a>
    <a class="buttonh" href="http://localhost/firstwebsite/homead.php">Retourner a l'acceuil</a>
    </div>

    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Admin</th>
        </tr>
        <?php
            $conn = mysqli_connect("localhost","root","loklok","userregistration");
            $sql = " select * from usertable where name != 'lokman' ;";
            $result = mysqli_query($conn , $sql);
            $num = mysqli_num_rows($result);

            if($num > 0){
                while($row = mysqli_fetch_assoc($result) ){
                    echo "<tr><td>". $row["name"] ."</td><td>". $row["Email"] ."</td><td>". $row["access"] ."</td></tr>";
                }
                echo "</table>";
            }else{
                echo "0 result";
            }
            mysqli_close($conn);

        ?>
    </table>

    
</body>
</html>