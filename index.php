<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data Tabel MySQL</title>
    <style>
        body {
            font-family: tahoma, arial;
        }
        table {
            border-collapse: collapse;
        }
        th, td {
            font-size: 13px;
            border: 1px solid #DEDEDE;
            padding: 3px 5px;
            color: #303030;
        }
        th {
            background: #CCCCCC;
            font-size: 12px;
            border-color: #B0B0B0;
        }
    </style>
</head>
<body>
    <div class="container">
        <center><h1>PERCETAKAN CERDAS</h1></center>
        <div class="main">
            <?php
            include("koneksi.php");
            // query untuk menampilkan data
            $sql = 'SELECT * FROM detail_pesanan';
            $result = mysqli_query($conn, $sql);
            ?>
            <h3>Table Detail Pesanan</h3>
            <table>
                <tr>
                    <th>ID_Pesanan</th>
                    <th>ID_Layanan</th>
                    <th>Jumlah</th>
                </tr>
                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['ID_Pesanan'];?></td>
                    <td><?= $row['ID_Layanan'];?></td>
                    <td><?= $row['Jumlah'];?></td>
                </tr>             
                <?php endwhile; else: ?>
                <tr>
                    <td colspan="3">Belum ada data</td>
                </tr>
                <?php endif; ?>
            </table>

            <?php
            $sql2 = 'SELECT * FROM keanggotaan';
            $result = mysqli_query($conn, $sql2);
            ?>
            <h3>Table Keanggotaan</h3>
            <table>
                <tr>
                    <th>ID_Keanggotaan</th>
                    <th>ID_Pelanggan</th>
                    <th>Nama_Keanggotaan</th>
                    <th>Tanggal_Bergabung</th>
                </tr>
                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['ID_Keanggotaan'];?></td>
                    <td><?= $row['ID_Pelanggan'];?></td>
                    <td><?= $row['Nama_Keanggotaan'];?></td>
                    <td><?= $row['Tanggal_Bergabung'];?></td>
                </tr>             
                <?php endwhile; else: ?>
                <tr>
                    <td colspan="4">Belum ada data</td>
                </tr>
                <?php endif; ?>
            </table>

            <?php
            $sql3 = 'SELECT * FROM layanan';
            $result = mysqli_query($conn, $sql3);
            ?>
            <h3>Table Layanan</h3>
            <table>
                <tr>
                    <th>ID_Layanan</th>
                    <th>Nama_Layanan</th>
                    <th>Harga</th>
                </tr>
                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['ID_Layanan'];?></td>
                    <td><?= $row['Nama_Layanan'];?></td>
                    <td><?= $row['Harga'];?></td>
                </tr>             
                <?php endwhile; else: ?>
                <tr>
                    <td colspan="3">Belum ada data</td>
                </tr>
                <?php endif; ?>
            </table>

            <?php
            $sql4 = 'SELECT * FROM pegawai';
            $result = mysqli_query($conn, $sql4);
            ?>
            <h3>Table Pegawai</h3>
            <table>
                <tr>
                    <th>ID_Pegawai</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Nomor_Telepon</th>
                </tr>
                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['ID_Pegawai'];?></td>
                    <td><?= $row['Nama'];?></td>
                    <td><?= $row['Jabatan'];?></td>
                    <td><?= $row['Nomor_Telepon'];?></td>
                </tr>             
                <?php endwhile; else: ?>
                <tr>
                    <td colspan="4">Belum ada data</td>
                </tr>
                <?php endif; ?>
            </table>

            <?php
            $sql5 = 'SELECT * FROM pelanggan';
            $result = mysqli_query($conn, $sql5);
            ?>
            <h3>Table Pelanggan</h3>
            <table>
                <tr>
                    <th>ID_Pelanggan</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal_Lahir</th>
                    <th>Nomor_Telepon</th>
                    <th>Status_keanggotaan</th>
                    <th>Tanggal_bergabung</th>
                </tr>
                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['ID_Pelanggan'];?></td>
                    <td><?= $row['Nama'];?></td>
                    <td><?= $row['Alamat'];?></td>
                    <td><?= $row['Tanggal_Lahir'];?></td>
                    <td><?= $row['Nomor_Telepon'];?></td>
                    <td><?= $row['Status_keanggotaan'];?></td>
                    <td><?= $row['Tanggal_bergabung'];?></td>
                </tr>             
                <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
            </table>

            <?php
            $sql6 = 'SELECT * FROM pesanan';
            $result = mysqli_query($conn, $sql6);
            ?>
            <h3>Table Pesanan</h3>
            <table>
                <tr>
                    <th>ID_Pesanan</th>
                    <th>ID_Pelanggan</th>
                    <th>ID_Pegawai</th>
                    <th>Tanggal_Pesanan</th>
                    <th>Total_Biaya</th>
                    <th>Status</th>
                </tr>
                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['ID_Pesanan'];?></td>
                    <td><?= $row['ID_Pelanggan'];?></td>
                    <td><?= $row['ID_Pegawai'];?></td>
                    <td><?= $row['Tanggal_Pesanan'];?></td>
                    <td><?= $row['Total_Biaya'];?></td>
                    <td><?= $row['Status'];?></td>
                </tr>             
                <?php endwhile; else: ?>
                <tr>
                    <td colspan="6">Belum ada data</td>
                </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>
