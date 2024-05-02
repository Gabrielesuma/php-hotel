<?php

include __DIR__ . "/Models/hotel.php";
//var_dump($hotels);

include __DIR__ . "/Views/header.php";
?>

<main class="container">
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
                foreach($hotels as $hotel){
                    echo "<tr><td>{$hotel['name']}</td><td>{$hotel['description']}</td><td>{$hotel['parking']}</td><td>{$hotel['vote']}</td><td>{$hotel['distance_to_center']}</td></tr>";
                }
            ?>
        </tbody>
    </table>
</main>

</body>

</html>