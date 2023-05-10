<!-- form popup edit -->
<div class="modal fade" id="categoryDetail" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Category name</label>
                        <input disabled class="form-control" type="text" name="name" value="<?php echo $item['nameCategory'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Parent category</label>
                        <select disabled class="form-control">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Edit</button>
            </div>
        </div>
    </div>
</div>