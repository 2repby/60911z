<?php
    require "dbconnect.php";
    echo "609-11z Hello2025";
    $result = $conn->query("SELECT * FROM CATEGORY");
    echo '<table border="1">';
    while ($row = $result->fetch()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td><td>' . $row['name'] . '</td>';
        echo '<td>' . $row['id_user'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';



