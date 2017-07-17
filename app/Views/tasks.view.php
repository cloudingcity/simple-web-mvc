<?php require('layout/header.php'); ?>

<?php require('layout/navbar.php'); ?>

<form action="/tasks" method="POST">
    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Title: </label>
        <div class="col-sm-10">
            <input type="text" name="title" class="form-control" id="title">
        </div>
    </div>
    <div class="form-group row">
        <label for="body" class="col-sm-2 col-form-label">Body: </label>
        <div class="col-sm-10">
            <textarea name="body" id="body" class="form-control"></textarea>
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

<div class="card text-center">
    <div class="card-header">
        Title
    </div>
    <div class="card-block">
        <p class="card-text">Body</p>
        <div class="form-group row text-right">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-outline-success" style="cursor: pointer">
                    <i class="fa fa-check" aria-hidden="true"></i> Done
                </button>
                <button type="submit" class="btn btn-outline-danger" style="cursor: pointer">
                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                </button>
            </div>
        </div>
    </div>
    <div class="card-footer text-muted">
        2 days ago
    </div>
</div>

<?php require('layout/footer.php'); ?>

