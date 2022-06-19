<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Vicente - Elmar Distribuidora</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>

    <div class="wrapper">
        <h1 class="text-center mb-3">Send your Offer</h1>
        <form method="POST" action="enviar.php">
            <div class="row mb-1">
                <div class="col">
                    <label class="form-label">Company Name</label>
                    <input type="text" name="companyName" class="form-control" placeholder=""
                        aria-label="Company Name" required>
                </div>
                <div class="col">
                    <label class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control" placeholder=""
                        aria-label="name" required>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email"
                        aria-label="Email" required>
                </div>
                <div class="col">
                    <label class="form-label">Country</label>
                    <input type="text" name="country" class="form-control" placeholder=""
                        aria-label="Country">
                </div>
            </div>
            <div class="row mb-1">
                <div class="col">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="product" class="form-control" placeholder=""
                        aria-label="Subject" required>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col">
                    <label class="form-label">Product MOQ</label>
                    <input type="text" name="moq" class="form-control" placeholder="Insert MOQ kg"
                        aria-label="Subject" required>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col">
                    <label class="form-label">ETD</label>
                    <input type="text" name="etd" class="form-control" placeholder="Estimated time to Delivery"
                        aria-label="Subject" required>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col">
                    <label class="form-label">Product Photo</label>
                    <input type="file" name="photo" class="form-control" placeholder="Photo"
                        aria-label="Subject">
                </div>
            </div>
            <div class="row mb-1">
                <div class="col">
                    <label class="form-label">FOB And CIF USD Price (Santos-Brazil) and Especifications</label>
                    <textarea type="text" name="price" class="form-control" placeholder=""
                        aria-label="Message" style="height:auto;" required></textarea>
                </div>
            </div>
            <button type="submit" name="action" value="send" class="btn btn-success mt-2">Submit</button>
        </form><br/>
        <a href="index.html" class="follow"><i class="bi bi-arrow-left"></i></a>
    </div>
   
</body>
</html>