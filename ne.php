$table_name = "your_table_name"
$column_name = "field_with_enum_options";

echo "<select name=\"$column_name\">";
$result = mysql_query("SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_NAME = '$table_name' AND COLUMN_NAME = '$column_name'")
or die (mysql_error());

$row = mysql_fetch_array($result);
$enumList = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE'])-6))));

foreach($enumList as $value)
    echo "<option value=\"$value\">$value</option>";

echo "</select>";