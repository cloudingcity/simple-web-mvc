<?php require('layout/header.php'); ?>

<?php require('layout/navbar.php'); ?>

<form action="/tasks" method="POST">
    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Title: </label>
        <div class="col-sm-10">
            <input type="text" name="title" class="form-control" id="title" minlength="3" maxlength="50" required title="3 characters minimum">
        </div>
    </div>
    <div class="form-group row">
        <label for="body" class="col-sm-2 col-form-label">Body: </label>
        <div class="col-sm-10">
            <textarea name="body" id="body" class="form-control" minlength="3" maxlength="100" required title="3 characters minimum"></textarea>
        </div>
    </div>
    <div class="form-group row text-right">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-outline-primary" style="cursor: pointer">
                <i class="fa fa-plus" aria-hidden="true"></i> Add
            </button>
        </div>
    </div>
</form>

<hr>

<?php foreach ($tasks as $task): ?>

    <div class="card text-center">
        <div class="card-header">
            <div class="text-left">
                <?php echo $task->title; ?>
            </div>
            <div class="text-right">Created Time: <?php echo $task->created_at; ?></div>
        </div>
        <div class="card-block">
            <p class="card-text"><?php echo $task->body; ?></p>
        </div>
        <div class="card-footer text-muted" style="padding-bottom: 0px">
            <div class="form-group row text-right">
                <div class="offset-sm-2 col-sm-10">
                    <form action="/tasks" class="btn-group" method="post">
                        <?php echo method_field('PATCH'); ?>
                        <input type="hidden" name="id" value="<?php echo $task->id; ?>">
                        <button type="submit" class="btn btn-outline-success" style="cursor: pointer">
                            <i class="fa fa-check" aria-hidden="true"></i> Done
                        </button>
                    </form>
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

