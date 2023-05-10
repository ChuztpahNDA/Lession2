echo '<pre>';
var_dump($callback);
echo '<pre>';
exit;


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Categories</title>
</head>

<body class="d-flex justify-content-center">
    <form action="" method="post">
        <div class="form-group">
            <label for="">Category name</label>
            <input class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="">Parent category</label>
            <select class="form-control">
                <option value="0">root</option>
                <option value="1">1</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Submit</button>
    </form>
    <div class="mt-5 w-75">
        <div class="d-flex">
            <button class="btn btn-outline-primary" type="button">Product</button>
            <button class="ml-3 btn btn-outline-primary" type="button">Categories</button>
        </div>

        <div>
            <div class="mt-3">
                <input type="search" class="form-control">
            </div>
            <div class="mt-3 d-flex justify-content-between">
                <p>Search found 15 results</p>

                <!-- button insert catogery -->
                <button class="fa fa-plus btn btn-primary" data-toggle="modal" data-target="#categoryInsert"
                    aria-hidden="true" type="button"></button>

                <!-- form popup insert -->
                <?php
                    include('./View/Category/categories_insert.php')
                ?>
            </div>
        </div>

        <!-- Table Category -->
        <table class="table">

            <head>
                <tr>
                    <th>#</th>
                    <th>Category name</th>
                    <th>Operations</th>
                </tr>
            </head>

            <tbody>
                <tr>
                    <?php
                while($row = mysqli_fetch_assoc($result)){
                ?>
                    <div>

                        <td class="w-5"> <?php echo $row['id']; ?> </td>
                        <td class="w-75">
                            <div>
                                <?php echo $row['name']; ?>
                            </div>
                        </td>

                        <td>
                            <div class="d-flex">
                                <div>
                                    <!-- button edit -->
                                    <button class="fa fa-pencil-square-o btn btn-warning" type="button"
                                        data-toggle="modal" data-target="#categoryEdit"></button>

                                    <!-- form popup edit -->
                                    <?php include('./categories_edit.php')?>
                                </div>

                                <!--  -->
                                <div>
                                    <!-- button edit -->
                                    <button class="fa fa-files-o btn btn-primary" type="button" data-toggle="modal"
                                        data-target="#categoryCopy"></button>

                                    <!-- form popup edit -->
                                    <?php include('categories_copy.php')?>
                                </div>

                                <!--  -->
                                <div>
                                    <!-- button edit -->
                                    <button class="fa fa-file-text btn btn-info" type="button" data-toggle="modal"
                                        data-target="#categoryDetail"></button>

                                    <!-- form popup edit -->
                                    <?php include('categories_detail.php')?>
                                </div>
                            </div>
                        </td>
                    </div>
                </tr>
                <?php            
                    }
                ?>

            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>

</body>

</html>