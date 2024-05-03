<?php
session_start();
if(!isset($_SESSION['userId'])){
    session_destroy();
    header('Location: login.php');
    die();
}

include __DIR__ . "/Models/hotel.php";

if(!empty($_GET['parking']) || $_GET['parking'] == 0 && !empty($_GET['vote'])) {
    $parking = $_GET['parking'];
    $vote = $_GET['vote'];
    $htl = array_filter($hotels, function ($ht) use ($parking, $vote){
        return ($ht['parking'] == $parking || $parking == "all") && $ht['vote'] >= $vote || $vote == "all";
    });
} else {
    $htl = $hotels;
}

/*$htl = $hotels;

if(((!empty($_GET['parking']) || isset($_GET['parking'])) && $_GET['parking'] == 0) && ((!empty($_GET['vote']) || isset($_GET['vote'])) && $_GET['vote'] == 0)) {
    $parking = $_GET['parking'];
    $vote = $_GET['vote'];
    $htl = array_filter($htl, function ($ht) use ($parking, $vote){
        return ($ht['parking'] == $parking || $parking == "all") && ($ht['vote'] >= $vote || $vote == "all");
    });
}*/

include __DIR__ . "/Views/header.php";
?>

<main class="container">
    <h3><?php echo 'Benvenuto '.$_SESSION['name']?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance to center</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($htl as $hotel){
                    echo "<tr><td>{$hotel['name']}</td><td>{$hotel['description']}</td><td>{$hotel['parking']}</td><td>{$hotel['vote']}</td><td>{$hotel['distance_to_center']}</td></tr>";
                }
            ?>
        </tbody>
    </table>
</main>

</body>

</html>