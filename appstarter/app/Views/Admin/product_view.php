<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title"><?= $name ?></h4>
                    <!-- <p class="card-description">
                        Add class <code>.table-striped</code>
                    </p> -->
                    <a href="<?= base_url('product/create') ?>" class="btn btn-primary btn-rounded btn-fw">Create</a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Name Product
                                    </th>
                                    <th>
                                        Created By
                                    </th>
                                    <th>
                                        Preview
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($productall as $rowpro): ?> 
                                <tr>
                                    <td>
                                        <?= $rowpro['name_product'] ?>
                                    </td>
                                    <td>
                                    <?= $rowpro['detail_product'] ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/news/'.$rowpro['id_product'].'/preview') ?>" class="btn btn-outline-info btn-fw">Info</a>
                                    </td>                                    
                                    <td>
                                        <a href="<?= base_url('product/'.$rowpro['id_product'].'/edit') ?>" class="btn btn-outline-primary btn-fw">Edit</a>
                                        <a href="<?= base_url('product/'.$rowpro['id_product'].'/delete') ?>" onclick="confirmToDelete(this)"
                                         class="btn btn-outline-danger btn-fw">Delete</a>
                                    </td>
                                </tr> 
                            <?php endforeach ?>                           
                            </tbody>
                        </table>
                        <div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-body">
                                    <h2 class="h2">Are you sure?</h2>
                                    <p>The data will be deleted permantly</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection() ?>
