<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
</head>
<body>
    <div>
        @foreach ($tripList as $trip)
            <div>
                <span>{{ $trip->destination }} /</span>
                <span>{{ $trip->price }}€ /</span>
                <span>{{ $trip->daysDuration}} days;</span>
                <span>{{ $trip->nightsDuration}} nights.</span>
            </div>
        @endforeach
    </div>
</body>
</html>