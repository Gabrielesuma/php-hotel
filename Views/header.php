<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>

<body>
    <header>
        <div class="container d-flex justify-content-between">
            <h1>Hotel</h1>
            <form action="index.php" method="get" class="d-flex m-1">
                <select class="form-select" name="parking">
                    <option value="all">All</option>
                    <option value="0">No parking</option>
                    <option value="1">Parking</option>
                </select>
                <select class="form-select" name="vote">
                    <option value="all">All</option>
                    <option value="1">1 star</option>
                    <option value="2">2 star</option>
                    <option value="3">3 star</option>
                    <option value="4">4 star</option>
                    <option value="5">5 star</option>
                </select>
                <button type="submit" class="btn btn-outline-success">Search</button>
            </form>
        </div>
    </header>