<!DOCTYPE html>
<html>
<head>
 <title>Cetak Laporan</title>
</head>
<body>
 <style type="text/css">
table{
 margin: 0 auto;
 border-collapse: collapse;
 width: 700px;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;

 }

 h2 {
     margin:0 150px;
    padding-top: 20px;
 }
 
 h3, .header {
     margin:0 150px;
     padding-top: 10px;
 }

 img {
     width: 140px;
     position: absolute;
 }

 table {
     text-align: left;
 }

p {
    line-height: 20px;
}
 .date {
     position: absolute;
     right: 0;
 }
    .tengah{
        text-align: center;
    }

.biodata {
    margin:0 250px;
    width: 450px;
    
}

.biodata p {
    line-height: 20px;
}
 </style>
<img src="laundry.png">
<h2 class="align-center">LAPORAN TRANSAKSI LAUNDRY</h2>
<h3>Family Laundry</h3>
 <p class="header">Email: familylaundry@gmail.com</p>
 <br><hr style="width:100%", size="3", color=black><hr>

 
<div class="date">
 <?php 
 echo date('l, d-m-Y');
  ?><br>
  </div>
  <br><br>

  <table class="table table-hover my-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Outlet</th>
                                                                        <th class="d-none d-xl-table-cell">Tanggal</th>
                                                                        <th class="d-none d-xl-table-cell">Batas Waktu</th>
																		<th class="d-none d-xl-table-cell">Pembayaran</th>
																		<th class="d-none d-xl-table-cell">Tanggal Dibayar</th>
																		<th class="d-none d-xl-table-cell">Customer</th>
																		<th class="d-none d-xl-table-cell">Paket</th>
                                                                        <th>Status Order</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                            include "koneksi.php";
                                                            $qry_transaksi=mysqli_query($conn,"select * from transaksi JOIN outlet ON outlet.id_outlet = transaksi.id_outlet JOIN member ON member.id_member = transaksi.id_member JOIN paket ON paket.id_paket = transaksi.id_paket");
                                                            $no=0;
                                                            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                                                            $no++;?>
                                                                    <tr class="text-xs font-weight-bold">
                                                                        <td class="align-middle text-left"><?=$no?></td>
                                                                        <td class="align-middle text-left"><?=$data_transaksi['nama']?></td>
																		<td class="align-middle text-left"><?=$data_transaksi['tgl']?></td> 
																		<td class="align-middle text-left"><?=$data_transaksi['batas_waktu']?></td> 
																		<td class="align-middle text-left"><?=$data_transaksi['dibayar']?></td> 
																		<td class="align-middle text-left"><?=$data_transaksi['tgl_bayar']?></td> 
                                                                        <td class="align-middle text-left"><?=$data_transaksi['nama_member']?></td>
																		<td class="align-middle text-left"><?=$data_transaksi['nama_paket']?></td>
																		<td class="align-middle text-left"><?=$data_transaksi['status']?></td>
                                                                    </tr>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </tbody>
                                                            </table><br><br>

                                                <h4>Keterangan :</h4>
                                                <ol style="text-align: justify">
                                                    <li>Pekerjaan dilakukan sesuai jam kerja yaitu hari Senin – Sabtu dari pukul 07:00 – 19:00.  Diluar jam tersebut, maka pekerjaan tidak dilakukan. Hari minggu tidak dihitung sebagai hari layanan.</li>
                                                    <li>Jumlah berat yang ditimbang dan dijadikan nota adalah jumlah berat yang diterima pada saat diterima baik basah maupun kering</li>
                                                    <li>Bukti tagihan yang sah di dalam transaksi kami adalah melalui nota digital atau nota fisik</li>
                                                    <li>Kami tidak bertanggung jawab apabila terjadi kehilangan / kerusakan pada laundry bersih yang tidak diambil selama 1 bulan di workshop kami.</li>
                                                    <li>Kami menggunakan bahan detergent dan parfum dengan standar laundry tanpa mengetahui jenis alergi yang anda miliki. Segala jenis penggunaan sabun atau parfum milik pribadi tidak diperkenankan untuk digunakan di laundry kami dan apabila terjadi reaksi alergi pada kulit bukan menjadi tanggung jawab FamilyLaundry</li>
                                                    <li>Pengaduan harap disampaikan secara tertulis di ke email familylaundry@gmail.com dengan melampirkan nomor nota, video unboxing serta keluhan yang dialami.</li>
                                                </ol>
    <script>
 window.print();
 </script>
</body>
</html>