<!doctype html>
<html lang="en">
    <head>
        <title>index</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
    <div class="container mt-4">
        <div class="row">
            <div class="container">
                <div class="col-md-12 bg-danger">
                    <h3 class="text-white text-center p-3">Create Data</h3>
                </div>
            </div>
            <div class=" col-md-12 mt-3">
                <form action="Allquery.php" method="post">
                    <div class="form-row">
                        <div class="form-md-4 mb-3">
                            <label for="validationCustom01 mb-3">Name</label>
                            <input type="text" class="form-control" name="name" id="validationCustom01" placeholder="Enter Name">
                        </div>

                        <div class="form-md-4 mb-3">
                            <label for="validationCustom01 mb-3">Email</label>
                            <input type="text" class="form-control" name="email" id="validationCustom02" placeholder="Enter Email">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" name="btnsave" value="Save Data">
                    </form>
            </div>
        </div>
    </div>
    </body>
     <!-- Bootstrap JavaScript Libraries -->
     <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
</html>
