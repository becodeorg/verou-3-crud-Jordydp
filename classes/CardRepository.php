<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create(): void
    {
        require 'create.php';
        // TODO: provide the create logic

        // Get values from submitted from
        $name = $_GET['name'];
        $country = $_GET['country'];
        $position = $_GET['position'];
        $club = $_GET['club'];
        $age = $_GET['age'];

        $sql= "insert into soccer_players(name, country, position, club, age)values('$name', '$country', '$position', '$club', '$age')";
        try{
            $this->databaseManager->connection->exec($sql);
            header('Location:index.php');
        } catch (PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
    }
    // Get one
    public function find(): array
    {

    }

    // Get all
    public function get(): array
    {
        // TODO: replace dummy data by real one
        $sql = "SELECT * FROM soccer_players";
        $stmt = $this->databaseManager->connection->query($sql, PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
       /*return[
            $stmt->fetchAll();

        ]*/

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update(): void
    {
        //require 'edit.php';
        echo "kat";

        $query = "UPDATE soccer_players SET `name`= '{$_POST['name']}',`country` = '{$_POST['country']}',`position` = '{$_POST['position']}', `club`='{$_POST['club']}',`age` = {$_POST['age']}
        WHERE id = '{$_GET['id']}';";
        $this->databaseManager->connection->query($query);
        header('location: index.php');

    }

    public function delete(): void
    {

    }

}