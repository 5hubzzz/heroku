<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boat Club</title>
</head>
<body>
    <h2>BOAT CLUB!</h2>
    <p>welcome to the boat club!</p>

    <form action="conn.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name!">
        <input type="text" name="address" id="address" placeholder="Enter your adress!">
        <input type="phone" name="phone" id="phone" placeholder="enter your phone number!">
        <button type="submit">Submit</button>
    </form>
    <form action="search.php" method="post">
        <input type="text" name="id" id="id" placeholder="enter the sailor id!">
        <button type = "search">search</button>
    </form>
</body>
</html>
