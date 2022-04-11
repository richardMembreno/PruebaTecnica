<?php
class inicio{
    public static function templateHeader(){
        print("
        <!DOCTYPE html>
        <html lang='en'>
            <head>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Prueba Técnica</title>
        
                <!-- CSS only -->
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
            </head>
            <body>
                <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
                    <div class='container-fluid'>
                        <a class='navbar-brand' href='#'>Prueba Técnica</a>
                        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
                            <span class='navbar-toggler-icon'></span>
                        </button>
                        <div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
                            <div class='navbar-nav'>
                                <a class='nav-link' href='index.php'>Parte Uno</a>
                                <a class='nav-link' href='tests.php'>Parte Dos</a>
                            </div>
                        </div>
                    </div>
                </nav>
        ");
    }

    public static function templateFooter(){
        print("
                <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js' integrity='sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB' crossorigin='anonymous'></script>
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js' integrity='sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13' crossorigin='anonymous'></script>
                <script src='https://code.jquery.com/jquery-3.5.1.js' integrity='sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=' crossorigin='anonymous'></script>
                <script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>
                <script src='../resources/js/crud.js' type='text/javascript'></script>
                <script src='../resources/js/api.js' type='text/javascript'></script>
            </body>
        </html>
        ");
    }

}
?>
