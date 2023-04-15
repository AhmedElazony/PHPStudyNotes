<?php

$heading = "My Notes";

$config = require('config.php');
$db = new Database($config['database'], 'root', 'helloworld');

$notes = $db->query("SELECT * FROM notes WHERE user_id = 1")->get();

require 'Views/notes.view.php';

?>

<?php // =--------------------------------------------------------------- ?>

/* notes.view.php file */

<?php require('Partials/head.php'); ?>

<?php require('Partials/nav.php') ?>

<?php require('Partials/banner.php'); ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="/demo/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                        <?= $note['key']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </div>
    </main>

<?php require('Partials/footer.php'); ?>

<?php // =--------------------------------------------------------------- ?>

/* the note file */

<?php 

$heading = "Notes";
$currentUserId = 1;

$config = require('config.php');
$db = new Database($config['database'], 'root', 'helloworld');

$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

require 'Views/note.view.php';
?>

<?php // =--------------------------------------------------------------- ?>

/* the note view  */

<?php require('Partials/head.php'); ?>

<?php require('Partials/nav.php') ?>

<?php require('Partials/banner.php'); ?>

<main>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <a href="/demo/notes" class="text-blue-500 hover:underline">Go Back..</a>
    <p class="mt-6"><?= $note['body']; ?></p>
</div>
</main>

<?php require('Partials/footer.php'); ?>

<?php // =--------------------------------------------------------------- ?>

/* Database Class */
<?php

class Database {
    private $connection;
    public $statement;
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
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function find() {
        return $this->statement->fetch();
    }

    public function get() {
        return $this->statement->fetchAll();
    }

    public function findOrFail() {
        $result = $this->find();

        if (! $result) {
            abort(); // a fucntion in the functions file
        }
        return $result;
    }
}