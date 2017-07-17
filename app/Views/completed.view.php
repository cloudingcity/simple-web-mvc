<?php require('layout/header.php'); ?>

<?php require('layout/navbar.php'); ?>

<?php foreach ($tasks as $task): ?>

    <div class="card text-center">
        <div class="card-header">
            <div class="text-left">
                <?php echo $task->title; ?>
            </div>
            <div class="text-right">Completed Time: <?php echo $task->updated_at; ?></div>
        </div>
        <div class="card-block">
            <p class="card-text"><?php echo $task->body; ?></p>
        </div>
        <div class="card-footer text-muted" style="padding-bottom: 0px">
            <div class="form-group row text-right">
                <div class="offset-sm-2 col-sm-10">
                    <form action="/tasks" class="btn-group" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <input type="hidden" name="id" value="<?php echo $task->id; ?>">
                        <button type="submit" class="btn btn-outline-danger" style="cursor: pointer">
                            <i class="fa fa-trash" aria-hidden="true"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>

<?php endforeach; ?>

<?php require('layout/footer.php'); ?>

