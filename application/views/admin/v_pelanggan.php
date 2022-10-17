<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Pelanggan</h3>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">


            <table class="table table-bordered" id="example1">
                <thead>
                    <tr class="text-center">
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Pelanggan</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pelanggan as $key => $value) { ?>
                        <tr class="text-center">
                            <td class="text-center"><?= $no++; ?></td>
                            <td class="text-center"><?= $value->nama_pelanggan ?></td>
                            <td class="text-center"><?= $value->email ?></td>
                            <td class="text-center"><?= $value->password ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>

