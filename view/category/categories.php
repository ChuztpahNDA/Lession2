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

            <!-- button insert category -->
            <button class="fa fa-plus btn btn-primary" data-toggle="modal" data-target="#categoryInsert"
                aria-hidden="true" type="button"></button>

            <!-- form popup insert -->
            <?php
                    include('categories_insert.php')
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
                foreach($param as $item)
                {
            ?>
                <div>
                    <td class="w-5"> <?php echo $item['id'] ?> </td>
                    <td class="w-75">
                        <div>
                        <?php echo $item['nameCategory'] ?>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <div>
                                <!-- button edit -->
                                <button class="fa fa-pencil-square-o btn btn-warning" type="button" data-toggle="modal"
                                    data-target="#categoryEdit"></button>

                                <!-- form popup edit -->
                                <?php include('categories_edit.php')?>
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