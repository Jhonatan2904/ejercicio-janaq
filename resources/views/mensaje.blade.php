<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JANAQ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">



    <script src="https://code.jquery.com/jquery-3.5.1.min.js""></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
    <div class="container">
        <div class="card col-12 my-4">
            <div class="card-body">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading text-center">¡Usuario registrado correctamente!</h4>
                    <hr>
                    <div class="text-center my-4">
                        <a href="{{  route('home')  }} "class="btn btn-outline-success btn-lg"><i class="fas fa-backward"></i> Regresar</a>
                        <input type="text" id="date">
                    </div>
                  </div>
            </div>
        </div>
    </div>

</body>
</html>
