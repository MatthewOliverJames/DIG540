<?php

$content = file_get_contents("https://raw.githubusercontent.com/craigdietrich/DIG540/d6d306214664791c4e0240b11e2a2945d54410b3/02/vocabulary.json");
$content = json_decode($content);

echo "<table>";
echo "<tr><th>Term</th><th>Wikipedia definition</th></tr>";
foreach ($content as $row) {
    echo "<tr>";
    echo "<td>";
    echo $row->name;
    echo "</td>";
    echo "<td>";
    echo $row->definition;
    echo "</td>";
    echo "</tr>";
}
echo "</table>";

?>