<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Items
        <small>Data Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Items</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php $this->view('messages') ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Product Items</h3>
            <div class="pull-right">
                <a href="<?= site_url('item/add') ?>" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Create Product Item</a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th>Barcode</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Unit</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?php foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $key + 1 ?>.</td>
                            <td>
                                <?= $data->barcode ?><br>
                                <a href="<?= site_url('item/barcode_qrcode/' . $data->item_id) ?>" class="btn btn-default btn-flat btn-xs">Generate <i class="fa fa-barcode"></i> <i class="fa fa-qrcode"></i></a>
                            </td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->category_name ?></td>
                            <td><?= $data->unit_name ?></td>
                            <td><?= $data->price ?></td>
                            <td><?= $data->stock ?></td>
                            <td>
                                <?php if ($data->image != null) { ?>
                                    <img src="<?= base_url('uploads/product/' . $data->image) ?>" style="width: 100px;">
                                <?php } ?>
                            </td>
                            <td class="text-center" width="160px" nowrap>
                                <a href="<?= site_url('item/edit/' . $data->item_id) ?>" class="btn btn-primary btn-flat btn-xs"><i class="fa fa-pencil"></i> Update</a>
                                <a href="<?= site_url('item/del/' . $data->item_id) ?>" onclick="return confirm('Yakin hapus data?');" class="btn btn-danger btn-flat btn-xs"><i class="fa fa-trash-o"></i> Delete</a>
                            </td>
                        </tr>
                    <?php } ?> -->
                </tbody>
            </table>
        </div>
    </div>

</section>
<!-- /.content -->

<script>
    $(document).ready(function() {
        $('#table1').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= site_url('item/get_ajax') ?>",
                "type": "POST",
            },
            "columnDefs": [{
                    "targets": [5, 6],
                    "className": 'text-right'
                }, {
                    "targets": [7, -1],
                    "className": 'text-center'
                }, {
                    "targets": [0, 7, -1],
                    "orderable": false
                }

            ]
        });
    });
</script>