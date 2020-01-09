<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?> </h1>
    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('menu'); ?> " method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Name Menu">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="<?= base_url('menu'); ?> "><button type="button" class="btn btn-secondary" href="<? base_url('menu') ?>">Close</button></a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Modal -->
<!-- addMenu -->