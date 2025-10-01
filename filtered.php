<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    ?>
    <main class="py-5">
        <div class="container">






            <div
                class="table-responsive">
                <table
                    class="table table-primary">
                    <thead>

                        <tr>

                            <th scope="col">Nome</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Parcheggio</th>
                            <th scope="col">Voto</th>
                            <th scope="col">Distanza dal Centro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        var_dump($_GET);
                        if (isset($_GET["parcheggio"])  || isset($_GET["voto"])) {

                            foreach ($hotels as $hotel) {

                                $hotel["parking"] == true ? $hotel["parking"] = "Si" : $hotel["parking"] = "No";

                                if ((!isset($_GET["parcheggio"]) || $_GET["parcheggio"] == $hotel["parking"])
                                    &&
                                    (!isset($_GET["voto"]) || $_GET["voto"] === "" || $hotel["vote"] >= $_GET["voto"])
                                ) {
                                    echo "<tr><td>" . $hotel["name"] . "</td>" . "<td>" . $hotel["description"] . "</td>" . "<td>" . $hotel["parking"] . "</td>" . "<td>" . $hotel["vote"] . "/5</td>" . "<td>" . $hotel["distance_to_center"] . " Km</td>" . "</tr>";
                                };
                            };
                        } else {
                            foreach ($hotels as $hotel) {
                                $hotel["parking"] == true ? $hotel["parking"] = "Si" : $hotel["parking"] = "No";
                                echo "<tr><td>" . $hotel["name"] . "</td>" . "<td>" . $hotel["description"] . "</td>" . "<td>" . $hotel["parking"] . "</td>" . "<td>" . $hotel["vote"] . "/5</td>" . "<td>" . $hotel["distance_to_center"] . " Km</td>" . "</tr>";
                            };
                        };




                        ?>






                    </tbody>
                </table>
            </div>
        </div>




    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>