<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Data Stok Barang </h1>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><span class="pull-right"><a href="?halaman=stok&aksi=tambah" class="btn btn-success"><i class="fa fa-cubes"></i> + Data Barang</a></span></h3>
        
       
           <div class="box">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Stok Bisma Print</h6>
                     <span class="float-right">
                    <a href="?halaman=stok&aksi=print" class="btn btn-success"><i class="fa fa-print"></i> Print </a></span>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Stok</th>
                                    <th>Harga</th>
                                    <th>Kategori</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = "select * from stok";
                                $query = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($query)) :

                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $row['nama_barang'] ?></td>
                                        <td><?= $row['stok'] ?></td>
                                        <td><?= $row['harga'] ?></td>
                                        <td><?= $row['kategori'] ?></td>
                                        <td>
                                            <a href="?halaman=stok&aksi=edit&id=<?= $row['id'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="?halaman=stok&aksi=delete&id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah data akan dihapus?')"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php $no++;
                                endwhile; ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>