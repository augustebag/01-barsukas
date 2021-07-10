$host = '127.0.0.1';
$db   = 'baze';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);

// Irasymas
// INSERT INTO table_name (column1, column2, column3,...)
// VALUES (value1, value2, value3,...)

// $sql = "INSERT INTO trees (`name`, height, `type`)
// VALUES ('Beržas', 1.20, 1)
// ";

$sql = "INSERT INTO trees (`name`, height, `type`)
VALUES ('".$trees[$n][0]."', ".$trees[$n][1].", ".$trees[$n][2].")
";
$pdo->query($sql);


//Skaitymas
//SELECT column1, column2, column3,... FROM table_name

$sql = "SELECT id, `name`, height, `type`
FROM trees
WHERE (`type` = 2 AND height > 10) OR (`type` = 1 AND height < 10) OR `type` = 3
ORDER BY `name` DESC
-- LIMIT 5
";
$stmt = $pdo->query($sql); // DB steitmentas
while ($row = $stmt->fetch()) // duok man viena eilute
{
    echo $row['id'].' '.$row['name'].' '.$row['height'].' '.$row['type'].'<br>';
}

//Redagavimas
// UPDATE table_name
// SET column1=value, column2=value2,...
// WHERE some_column=some_value 
$sql = "UPDATE trees
SET height = 2.20, `name` = 'Mažas Beržas'
WHERE `name` = 'Beržas'
";
$pdo->query($sql);


//Trynimas
// DELETE FROM table_name
// WHERE some_column = some_value
$sql = "DELETE FROM trees
WHERE id = 29 OR 1
";

// $pdo->query($sql);