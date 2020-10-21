<?php
$servername1 = "192.168.1.80";
$servername2 = "192.168.1.82";
$username = "adminuser";
$password = "Password";
$database = "testing";

echo("Server1: " . $servername1);
echo('</br>');
echo("Server2: " . $servername2);
echo('</br>');


try {

        //connecting to slave

        $conn = new PDO("mysql:host=$servername1;dbname=$database", $username, $password);
        $conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<br>";
        echo "Connected successfully to " . $servername1;
        echo "<br>";
        echo "Show status on server 1:";
        echo "<br>";
        echo "<br>";
        echo "SHOW SLAVE STATUS";
        $result = $conn->query('SHOW SLAVE STATUS');
        $colcount = $result->columnCount();
        $rowcount = $result->rowCount();


        if ($rowcount == 0) {
                echo "<br>";
                echo("0 rows");
        } else {

                echo "<pre style='display:inline;'>";
                // Get coluumn headers
                echo("<table style='border: solid 1px black;'><tr>");
                echo('</tr>');
                // Get row data
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo('<tr>');
                        for ($i = 0; $i < $colcount; $i++) {
                                $meta = $result->getColumnMeta($i)["name"];
                                echo("<td style='border: solid 1px black;'>" . $row[$meta] . '</td>');
                        }
                        echo('</tr>');
                        echo('</table>');
                }
        }

} catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
}
echo "<br>";
try {
        $conn = new PDO("mysql:host=$servername1;dbname=$database", $username, $password);
        $conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<br>";
        echo "SHOW PROCESSLIST";
        $result = $conn->query('SHOW PROCESSLIST');
        $colcount = $result->columnCount();

        echo "<pre style='display:inline;'>";
        // Get coluumn headers
        echo("<table style='border: solid 1px black;'><tr>");
        echo('<table><tr>');
        for ($i = 0; $i < $colcount; $i++) {
                $meta = $result->getColumnMeta($i)["name"];
                echo('<th style="border: solid 1px black;">' . $meta . '</th>');
        }
        echo('</tr>');
        // Get row data
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo('<tr>');
                for ($i = 0; $i < $colcount; $i++) {
                        $meta = $result->getColumnMeta($i)["name"];
                        echo("<td style='border: solid 1px black;'>" . $row[$meta] . '</td>');
                }
                echo('</tr>');
        }

        echo('</table>');
} catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
}
echo "<br>";
try {
        $conn = new PDO("mysql:host=$servername1;dbname=$database", $username, $password);
        $conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<br>";
        echo "SHOW MASTER STATUS";
        $result = $conn->query('SHOW MASTER STATUS');
        $colcount = $result->columnCount();

        echo "<pre style='display:inline;'>";
        // Get coluumn headers
        echo("<table style='border: solid 1px black;'><tr>");
        echo('<table><tr>');
        for ($i = 0; $i < $colcount; $i++) {
                $meta = $result->getColumnMeta($i)["name"];
                echo('<th style="border: solid 1px black;">' . $meta . '</th>');
        }
        echo('</tr>');
        // Get row data
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo('<tr>');
                for ($i = 0; $i < $colcount; $i++) {
                        $meta = $result->getColumnMeta($i)["name"];
                        echo("<td style='border: solid 1px black;'>" . $row[$meta] . '</td>');
                }
                echo('</tr>');
        }

        echo('</table>');
} catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
}
echo "<br>";
try {
        $conn = new PDO("mysql:host=$servername1;dbname=$database", $username, $password);
        $conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<br>";
        echo "SELECT @@read_only";
        $result = $conn->query('SELECT @@read_only');
        $colcount = $result->columnCount();

        echo "<pre style='display:inline;'>";
        // Get coluumn headers
        echo("<table style='border: solid 1px black;'><tr>");
        echo('<table><tr>');
        for ($i = 0; $i < $colcount; $i++) {
                $meta = $result->getColumnMeta($i)["name"];
                echo('<th style="border: solid 1px black;">' . $meta . '</th>');
        }
        echo('</tr>');
        // Get row data
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo('<tr>');
                for ($i = 0; $i < $colcount; $i++) {
                        $meta = $result->getColumnMeta($i)["name"];
                        echo("<td style='border: solid 1px black;'>" . $row[$meta] . '</td>');
                }
                echo('</tr>');
        }
        echo('</table>');
} catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
}
echo "<br>";
try {

        //connecting to master
        $conn = new PDO("mysql:host=$servername2;dbname=$database", $username, $password);
        $conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<br>";
        echo "Connected successfully to " . $servername2;
        echo "<br>";
        echo "Show status on Server 2:";
        echo "<br>";
        echo "<br>";
        echo "SHOW SLAVE STATUS";
        $result = $conn->query('SHOW SLAVE STATUS');
        $colcount = $result->columnCount();
        $rowcount = $result->rowCount();


        if ($rowcount == 0) {
                echo "<br>";
                echo("0 rows");
        } else {

                echo "<pre style='display:inline;'>";
                // Get coluumn headers
                echo("<table style='border: solid 1px black;'><tr>");
                echo('</tr>');
                // Get row data
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo('<tr>');
                        for ($i = 0; $i < $colcount; $i++) {
                                $meta = $result->getColumnMeta($i)["name"];
                                echo("<td style='border: solid 1px black;'>" . $row[$meta] . '</td>');
                        }
                        echo('</tr>');
                        echo('</table>');
                }
        }

} catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
}
echo "<br>";
try {
        $conn = new PDO("mysql:host=$servername2;dbname=$database", $username, $password);
        $conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<br>";
        echo "SHOW PROCESSLIST";
        $result = $conn->query('SHOW PROCESSLIST');
        $colcount = $result->columnCount();

        echo "<pre style='display:inline;'>";
        // Get coluumn headers
        echo("<table style='border: solid 1px black;'><tr>");
        echo('<table><tr>');
        for ($i = 0; $i < $colcount; $i++) {
                $meta = $result->getColumnMeta($i)["name"];
                echo('<th style="border: solid 1px black;">' . $meta . '</th>');
        }
        echo('</tr>');

        // Get row data
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo('<tr>');
                for ($i = 0; $i < $colcount; $i++) {
                        $meta = $result->getColumnMeta($i)["name"];
                        echo("<td style='border: solid 1px black;'>" . $row[$meta] . '</td>');
                }
                echo('</tr>');
        }

        echo('</table>');
} catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
}
echo "<br>";
try {
        $conn = new PDO("mysql:host=$servername2;dbname=$database", $username, $password);
        $conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<br>";
        echo "SHOW MASTER STATUS";
        $result = $conn->query('SHOW MASTER STATUS');
        $colcount = $result->columnCount();

        echo "<pre style='display:inline;'>";
        // Get coluumn headers
        echo("<table style='border: solid 1px black;'><tr>");
        echo('<table><tr>');
        for ($i = 0; $i < $colcount; $i++) {
                $meta = $result->getColumnMeta($i)["name"];
                echo('<th style="border: solid 1px black;">' . $meta . '</th>');
        }
        echo('</tr>');

        // Get row data
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo('<tr>');
                for ($i = 0; $i < $colcount; $i++) {
                        $meta = $result->getColumnMeta($i)["name"];
                        echo("<td style='border: solid 1px black;'>" . $row[$meta] . '</td>');
                }
                echo('</tr>');
        }

        echo('</table>');
} catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
}
echo "<br>";
try {
        $conn = new PDO("mysql:host=$servername2;dbname=$database", $username, $password);
        $conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<br>";
        echo "SELECT @@read_only";
        $result = $conn->query('SELECT @@read_only');
        $colcount = $result->columnCount();

        echo "<pre style='display:inline;'>";
        // Get coluumn headers
        echo("<table style='border: solid 1px black;'><tr>");
        echo('<table><tr>');
        for ($i = 0; $i < $colcount; $i++) {
                $meta = $result->getColumnMeta($i)["name"];
                echo('<th style="border: solid 1px black;">' . $meta . '</th>');
        }
        echo('</tr>');

        // Get row data
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo('<tr>');
                for ($i = 0; $i < $colcount; $i++) {
                        $meta = $result->getColumnMeta($i)["name"];
                        echo("<td style='border: solid 1px black;'>" . $row[$meta] . '</td>');
                }
                echo('</tr>');
        }

        echo('</table>');
} catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
}


?>
