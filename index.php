<?php include('core/init.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tiny Address Book</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <!-- Custom css -->
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <!-- Header Section start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Tiny Address Book</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#addModal">
                        Add New Contact
                    </button>
                </ul>
            </div>
        </div>
    </nav>
    <header class="header-section py-5">
        <div class="container">
            <h1 class="header-title text-center">List Of Contacts</h1>

            <!-- Add contact Modal -->
            <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addModalLabel">
                                Add New Contact Address
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="post" id="new-contact">
                                <div class="row mx-auto">
                                    <div class="form-group col-6">
                                        <input type="text" name="first_name" class="form-control" id="" placeholder="Enter First Name" required />
                                    </div>

                                    <div class="form-group col-6">
                                        <input type="text" name="last_name" class="form-control" id="last-name" placeholder="Enter Last Name" required />
                                    </div>
                                </div>

                                <div class="row mx-auto">
                                    <div class="form-group col-6">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required />
                                    </div>

                                    <div class="form-group col-6">
                                        <input type="text" name="street" class="form-control" id="street" placeholder="Enter Street Name" required />
                                    </div>
                                </div>

                                <div class="row mx-auto">
                                    <div class="form-group col-6">
                                        <input type="text" name="zipcode" class="form-control" id="zip-code" placeholder="Enter Zip Code" required />
                                    </div>

                                    <div class="form-group col-6">
                                        <select name="city" id="city" class="form-control">
                                            <option value="" selected>-- Choose City --</option>
                                            <?php foreach ($cities as $key => $value) : ?>
                                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" name="submit" value="submit" class="btn btn-success form-control" data-bs-dismiss="modal" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section ends -->

    <!-- Main Body Content -->
    <main class="main py-5">
        <div class="container">
            <div class="loader text-center" id="loader">
                <img src="./assets/img/loading.gif" class="img-fluid" style="width: 120px;">
            </div>

            <div id="contacts">

            </div>
        </div>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- custom js -->
    <script src="./assets//js/script.js"></script>
</body>

</html>