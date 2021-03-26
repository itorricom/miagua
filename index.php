<?php include('db.php') ?>
<?php include('includes/header.php')?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if(isset($_SESSION['message'])){ ?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <strong><?= $_SESSION['message'] ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset(); } ?>
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Titulo de Tarea" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control"
                            placeholder="Descripcion de Tarea"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Guardar Tarea">
                </form>
            </div>
        </div>
        <div class="col-md-8">
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>