<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>






<body>

    



    <div class="container-fluid">
        <h3 class="text-center">Welcome to Trip form</h3>
        <p class="my-3 text-center">Enter your details to confirm your participation in the trip & submit the form</p>

        <form action="trip.php" method="post">
            <div class="container">
                <div class="mb-1">
                 <label for="name" class="form-label">Name</label>
                 <input
                     type="text"
                     name="name"
                     id="name"
                     class="form-control"
                     placeholder=""
                     aria-describedby="helpId"
                 />
                </div>
                <div class="mb-1">
                 <label for="email" class="form-label">Email</label>
                 <input
                     type="email"
                     name="email"
                     id="email"
                     class="form-control"
                     placeholder=""
                     aria-describedby="helpId"
                 />
                </div>
                <div class="mb-1">
                 <label for="phone" class="form-label">Phone</label>
                 <input
                     type="text"
                     name="phone"
                     id="phone"
                     class="form-control"
                     placeholder=""
                     aria-describedby="helpId"
                 />
                </div>
     
                <div class="text-center">
                 <button class="btn btn-success" type="submit">Submit</button>
                 <button class="btn btn-warning" type="reset">Reset</button>
                </div>
                
             </div>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>