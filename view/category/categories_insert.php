<!-- form popup insert -->
<div class="modal fade" id="categoryInsert" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add new Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- form popup category -->
                <form id="formInsert" action="category/add" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Category name</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Parent category</label>
                        <select class="form-control" name="parent">
                            <option value="root">root</option>
                            <?php 
                                foreach($param as $item)
                                {
                            ?>
                            <option value=" <?php echo $item['nameCategory'] ?> "> <?php echo $item['nameCategory'] ?> </option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </form>

                <!-- button submit add category -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="document.getElementById('formInsert').submit();" data-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>