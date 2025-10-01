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
            <form action="./filtered.php" method="GET">
                <label class="form-label" for="">Vuoi cercare solo quelli con il parcheggio?</label>
                <div class="form-check">

                    <input class="form-check-input" type="checkbox" value="Si" id="" name="parcheggio" />
                    <label class="form-check-label" value="Si" for="">Si </label>


                </div>
                <div class="form-check">

                    <input class="form-check-input" type="checkbox" value="No" id="" name="parcheggio" />
                    <label class="form-check-label" value="Si" for="">No</label>


                </div>

                <div>
                    <label for="">Filtra per voto</label>
                    <input class="form-control" name="voto" type="number" value="0">

                </div>
                <button type="submit" class="btn btn-success">Cerca</button>
            </form>





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
                        foreach ($hotels as $hotel) {


                            $hotel["parking"] == true ? $hotel["parking"] = "Si" : $hotel["parking"] = "No";

                                //         if($hotel["parking"]==true){
                                //        $hotel["parking"] = "Si";

                                //    }else{
                                //     $hotel["parking"] = "No";
                                //    }
                            ;
                            echo "<tr><td>" . $hotel["name"] . "</td>" . "<td>" . $hotel["description"] . "</td>" . "<td>" . $hotel["parking"] . "</td>" . "<td>" . $hotel["vote"] . "/5</td>" . "<td>" . $hotel["distance_to_center"] . " Km</td>" . "</tr>";
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