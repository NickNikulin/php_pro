
$test = @mysqli_connect("localhost:8889", "Edudata", "123", "Edudata") or die("Error: " . mysqli_connect_error());

$result = @mysqli_query($test, "SELECT * FROM news WHERE 1");

foreach ($result as $value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}
