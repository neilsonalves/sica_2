<!DOCTYPE html>
    <html>
        <head>
            <style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                table, td, th {
                    border: 1px solid black;
                    padding: 5px;
                }
                th {
                    text-align: left;
                }
            </style>
        </head>
    <body>
        <?php
            // $q = intval($_GET['q']);
            include("../config/conexao.php");

            $con = $conexao;
            
            if(!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }
            
            mysqli_select_db($con,"ajax_demo");
            
            $sql="SELECT * FROM monitoramento ";
            
            $result = mysqli_query($con,$sql);
            
            echo "<table>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>TIPO</th>
                <th>DATA</th>
                <th>DADOS</th>
            </tr>";
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['tipo'] . "</td>";
                echo "<td>" . $row['data_s'] . "</td>";
                echo "<td>" . $row['dados'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_close($con);
        ?>
    </body>
</html>