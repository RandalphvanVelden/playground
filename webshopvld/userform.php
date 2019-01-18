<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GroentenBoer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="index.css" />
    <!-- <script src="main.js"></script> -->
</head>
<body>

    <form id ='form' action="dbusertoevoegen.php" method="POST">
    <div class="form-group">
        <label for="formGroupExampleInput">NEW USER</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="voornaam" placeholder="voornaam">
        <input type="text" class="form-control" id="formGroupExampleInput" name="achternaam" placeholder="achternaam">
        <input type="text" class="form-control" id="formGroupExampleInput" name="email" placeholder="email">
        <input type="text" class="form-control" id="formGroupExampleInput" name="adres" placeholder="adres">
        <input type="text" class="form-control" id="formGroupExampleInput" name="postcode" placeholder="postcode">
        <input type="text" class="form-control" id="formGroupExampleInput" name="plaats" placeholder="plaats">
        <input type="password" class="form-control" id="formGroupExampleInput" name="wachtwoord" placeholder="wachtwoord">
        <input type="password" class="form-control" id="formGroupExampleInput" name="wachtwoord2" placeholder="herhaal wachtwoord" required>
    </div>
    <button type="submit">voeg toe</button>
    </form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>