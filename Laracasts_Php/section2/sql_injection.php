/* Config File 'config.php'*/
<?php
  return [
    'database' => [
      'host' => 'localhost',
      'port' => 3306,
      'dbname' => 'myapp',
      'charset' => 'utf8mb4'
    ]
  ];
?>


/* index.php file */

<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';

$config = require('config.php');

// Connect To MySQL Database, And Execute a query
$db = new Database($config['database'], 'root', 'helloworld');


/* Do This */
$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE id = ?";
$posts = $db->query($query, [$id])->fetch();

/* Instead of This:

  $query = "SELECT * FROM posts WHERE id = {$id}"; // this will make a sql injection

*/

// dump_and_die($posts);

?>


/*Database Class*/

<?php

class Database 
{
  private $connection;
  public function __construct($config, $username = 'root', $password = '')
  {
    // to build the dsn automatically
    $dsn = 'mysql:' . http_build_query($config, '', ';');


    $this->connection = new PDO($dsn, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }
  public function query($query, $params = [])
  {
    $statement = $this->connection->prepare($query);
    $statement->execute($params);

    return $statement;
  }
}

?>