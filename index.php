<?php 
require_once __DIR__ . '/functions.php';

$charsnum = intval($_GET['charsnumber'] ?? '');

$specials=['!','?','&','%','$','<','>','^','+','-','*','/','(',')','[',']','{','}','@','#','_','=',];
$letters=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
$numbers=[0,1,2,3,4,5,6,7,8,9];

$getSpecials= $_GET['chars'] ?? array();

if(count($getSpecials) == 0 || count($getSpecials)==3){
    $huge_array = array_merge($specials, $letters, $numbers);
} elseif(count($getSpecials) == 1 && in_array("special", $getSpecials)){
    $huge_array = $specials;
} elseif(count($getSpecials) == 1 && in_array("numbers", $getSpecials)){
    $huge_array = $numbers;
} elseif(count($getSpecials) == 1 && in_array("letters", $getSpecials)){
    $huge_array = $letters;
} elseif(count($getSpecials) == 2 && !in_array("special", $getSpecials)){
    $huge_array = array_merge($letters, $numbers);
} elseif(count($getSpecials) == 2 && !in_array("numbers", $getSpecials)){
    $huge_array = array_merge($specials, $letters);
} elseif(count($getSpecials) == 2 && !in_array("letters", $getSpecials)){
    $huge_array = array_merge($specials, $numbers);
;}
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
    
        <!-- Stile -->
        <style>
            body{
                height: 100vh;

                font-family: 'Roboto', sans-serif;

                background-color: #0A2D4D;

                overflow: hidden;
            }
            .dc-cont{
                width: 60%;

                margin: 50px auto;

                padding: 30px;

                border-radius: 5px;

                background-color: #0A253C;
            }

            .dc-cont > h1{
                text-align: center;

                color: #0D6EfD;
                }

            h4, h5{
                text-align: center;

                color: #FFFFFF;
            }


            .dc-input{
                display:inline-block;

                padding: 3px 6px;
            }

            .dc-input.checkboxes{
                width: 40%;
            }

            .radios.dc-input{
                margin-top: 8px;
                
                border: 1px solid lightgrey;
                border-radius: 5px;

                background-color: #FFFFFF;
            }

            .output{
                text-align: center;

                margin-top: 15px;

                border: 1px solid #D3D3D3;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div class="dc-cont">
            <!-- Titolo -->
            <h1>Strong Password Generator</h1>
            <h6 class="text-center text-light">Genera password casuali e sicure per essere al sicuro online</h6>
            <h4 class="mt-3">Seleziona il numero e il tipo di caratteri per generare la tua nuova password</h4>
            <!-- FORM -->
            <form action="" method="GET">
                <input type="number" placeholder="Lunghezza password (numero)" name="charsnumber" value="8" min="8" max="32" required class="form-control dc-input">
                <!-- Selezione ripetizione dei caratteri -->
                <div class="radios dc-input d-flex">
                    <div class="form-check me-3">
                        <div class="div">
                            <input class="form-check-input" type="radio" value="true" name="repetition" id="flexCheckDefault" checked>
                            <label class="form-check-label" for="flexCheckDefault" checked>Permetti ripetizione caratteri</label>
                        </div>
                    </div>
                    <div class="form-check d-flex">
                        <div class="div">
                            <input class="form-check-input" type="radio" value="false" name="repetition" id="norep" >
                            <label class="form-check-label" for="norep">Non ripetere caratteri</label>
                        </div>
                    </div>
                </div>
                <!-- Selezione tipo di carattere da includere -->
                <div class="input-group-text mt-2 d-flex flex-column justify-content-start align-items-start dc-input checkboxes text-left">
                    <h6>Includi:</h6>
                    <div class="">
                        <input class="form-check-input me-2" type="checkbox" value="special" aria-label="Checkbox for following text input" name="chars[]" id="chars1">
                        <label class="form-check-label me-2" for="chars1"> Caratteri Speciali</label>
                    </div>
                    <div class="">
                        <input class="form-check-input me-2" type="checkbox" value="numbers" aria-label="Checkbox for following text input" name="chars[]" id="chars2">
                        <label class="form-check-label me-2" for="chars2"> Numeri</label>
                    </div>
                    <div class="">
                        <input class="form-check-input me-2" type="checkbox" value="letters" aria-label="Checkbox for following text input" name="chars[]" id="chars3">
                        <label class="form-check-label me-2" for="chars3"> Lettere</label>
                    </div>
                </div>
                <!-- Bottone Submit -->
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                <!-- Bottone Reset -->
                <button type="reset" class="btn btn-info mt-2">Reset</button>
            </form>
            <!-- Stampa stringa in pagina -->
            <?php if(!empty($charsnum)): ?>
                <div class="output">
                    <h5>Password generata: <?php echo '<br><h4> '. createPsw($charsnum, $huge_array) .' </h4>'?></h5>
                </div>
            <?php endif; ?>
        </div>
    </body>
</html>