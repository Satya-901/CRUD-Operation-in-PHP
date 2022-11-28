<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- ===CDN link for bootsrep === -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- ===FOnr link=== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
    <!-- ===Custom CSS=== -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="text-center bg-dark text-light">Student Details</h1>
    <div class="Container mt-5">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8  box">
                <form>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="fname" class="form-label">FIRST NAME</label>
                                <input type="text" class="form-control" id="fname" name="fname">
                            </div>
                            <div class="col-6">
                                <label for="lname" class="form-label">LAST NAME</label>
                                <input type="text" name="lname" id="lname" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email"  class="form-label">ENTER YOUR EMAIL <span class="disabled">(example@gmail.com)</span> </label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>




    <!-- ===JS CDN link=== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>