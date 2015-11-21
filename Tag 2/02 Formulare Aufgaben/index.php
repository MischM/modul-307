<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Formular</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container" id="main">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
            
                <h1 class="form-title">Eventanmeldung</h1>

                <form action="index.php" method="post">

                    <div class="form-group">
                        <label for="name">Ihr Name</label>
                        <input class="form-control" type="text" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Ihre Telefonnummer</label>
                        <input class="form-control" type="text" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="people">Anzahl Personen</label>
                        <input class="form-control" min="0" max="9" type="number" id="people" name="people">
                    </div>
                    <div class="form-group">
                        <input class="btn" type="submit" value="Anmelden">
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>