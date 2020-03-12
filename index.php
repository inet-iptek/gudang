<?php include "inc/header.php"; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <h2>Data Barang</h2>
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Opsi</th>
                </tr>
                    <?php
                        include "config/config.php";
                        $sql = "SELECT * FROM data";
                        $view = $conn->query($sql);
                        $no = 1;
                        while($v = $view->fetch_array()) :
                    ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $v['nama_barang']; ?></td>
                    <td><?= $v['stok']; ?></td>
                    <td></td>
                </tr>
                    <?php endwhile; ?>
            </table>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>