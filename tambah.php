<?php include "inc/header.php"; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
        <h2>Tambah Barang</h2>
        <form action="tambah_act.php" method="post">
            <table class="table">
                <tr>
                    <th>Nama Barang</th>
                    <td>
                        <input type="text" name="nama_barang" placeholder="Nama Barang" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Stok</th>
                    <td>
                        <input type="number" name="stok" placeholder="Stok" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <input type="submit" class="btn btn-success" value="Tambah">
                    </td>
                </tr>
            </table>
        </form>
        </div>
    </div>
</div>


<?php include "inc/footer.php"; ?>