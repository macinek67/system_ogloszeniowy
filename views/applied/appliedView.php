<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pracuj.pl • Zaaplikowane ogłoszenia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <style>
        body {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <!--Headers-->
    <?php
        echo $data["headerDesktop"];
        echo $data["headerMobile"];
    ?>

    <!--Content-->
    <div class="container-lg mt-4 mb-4">

        <div>
            <?php
                echo $data["switchView"];
            ?>
        </div>

        <div class="mt-4 bg-white shadow-sm">
            <div class="p-3">
                <p class="h3 text-primary-emphasis fw-bolder">Zaaplikowane ogłoszenia</p>
                <small class="h6 text-black fw-bolder">• Przeglądaj ogłoszenia do których wcześniej zaaplikowałeś!</small>
            </div>
            <hr>
            <div class="d-md-flex p-3">
                <div class="col text-center">
                    <div class="bg-light shadow-sm rounded-5 me-md-3 mb-3">
                        <label class="h3 text-success fw-bolder text-decoration-underline">Aktywne</label>
                    </div>
                    <div class="overflow-auto">
                        <?php
                            echo $data["offersList"];
                            echo $data["offersList"];
                            echo $data["offersList"];
                            echo $data["offersList"];
                        ?>
                    </div>
                </div>
                <div class="col text-center mt-md-0 mt-3">
                    <div class="bg-light shadow-sm rounded-5 ms-md-3 mb-3">
                        <label class="h3 text-danger fw-bolder text-decoration-underline">Wygasłe</label>
                    </div>
                    <div class="overflow-auto">
                        <?php
                            echo $data["offersList"];
                            echo $data["offersList"];
                            echo $data["offersList"];
                            echo $data["offersList"];
                        ?>
                    </div>
                </div>
            </div>
            <hr>
            <div class="ps-4 pb-3">
                <label class="fw-bold text-black align-middle"><i class="h5 bi bi-exclamation-diamond"></i> Wygasłe ogłoszenia usuwane są miesiąc po ich zakończeniu!</label>
            </div>
        </div>
        
    </div>
    
    <!--Footer-->
    <?php    
        echo $data["footer"];
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>