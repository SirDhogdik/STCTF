$query="SELECT * FROM MY_TABLE";
$results = mysql_query($query);

while ($row = mysql_fetch_array($results)) {
    echo '<tr>';
    foreach($row as $field) {
        echo '<td>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
}
