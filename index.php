<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/CardRepository.php';
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<pre>";
print_r($_GET);
echo "</pre>";
$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();

// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$cardRepository = new CardRepository($databaseManager);

//$_SESSION['cards'] = $cards;

// Get the current action to execute
// If nothing is specified, it will remain empty (home should be loaded)
$action = $_GET['action'] ?? null;

// Load the relevant action
// This system will help you to only execute the code you want, instead of all of it (or complex if statements)

switch ($action) {
    case 'create':
        create($cardRepository);
        break;
    case 'edit':
        echo "AAP";
        update($cardRepository);
        break;
    case 'delete':
        delete($cardRepository);
        break;
    case 'show':
        show($cardRepository);
        break;
    default:
        overview($cardRepository);
        break;
}

function overview($cardRepository)
{
    // Load your view
    // Tip: you can load this dynamically and based on a variable, if you want to load another view
    $cards = $cardRepository->get();
    require 'overview.php';
}

function create($cardRepository)
{
    $cardRepository->create();
}
function update($cardRepository)
{
    $cardRepository->update();
}
function delete($cardRepository)
{
    $cardRepository->delete();
}
function show($cardRepository)
{
    $row = $cardRepository->show();
    require 'show.php';

}