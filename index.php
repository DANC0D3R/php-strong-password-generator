<?php 
$specials=['!','?','&','%','$','<','>','^','+','-','*','/','(',')','[',']','{','}','@','#','_','=',];
$letters=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
$numbers=[0,1,2,3,4,5,6,7,8,9];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Daniele Minieri">
        <title>Strong Password Generator</title>

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <form action="" method="GET">
        <input type="number" placeholder="Inserisci un numero" name="charsnum">
        <div class="input-group-text">
            <input class="form-check-input mt-0" type="checkbox" value="special" aria-label="Checkbox for following text input" name="chars[]" id="chars1">
            <label class="form-check-label" for="chars1">Caratteri Speciali</label>
            <input class="form-check-input mt-0" type="checkbox" value="numbers" aria-label="Checkbox for following text input" name="chars[]" id="chars2">
            <label class="form-check-label" for="chars2">Numeri</label>
            <input class="form-check-input mt-0" type="checkbox" value="letters" aria-label="Checkbox for following text input" name="chars[]" id="chars3">
            <label class="form-check-label" for="chars3">Lettere</label>
        </div>
        <button type="submit">Submit</button>
        </form>
    </body>
</html>