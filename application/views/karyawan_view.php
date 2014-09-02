
<html>
<head>
 <title>DATA KARYAWAN PT. DIMASEDU MANDIRI JAYA</title>
 <style>
 body
 {
   font-family:arial;
   background:#FFF7E7;
 }

 .t_data
 {
   border-collapse:collapse;
 }

 .t_data tr th
 {
   font-size:12px;
   font-weight:bold;
   background:#A46D07;
   color:#FFFF00;
   padding:4px;
 }

 .t_data tr td
 {
   font-size:12px;
   padding:4px;
 }

 .t_data tr:hover
 {
   background:#C8FABF;

 }

 .halaman
 {
   margin:10px;
   font-size:11px;
 }

 .halaman a
 {

  padding:3px;
  background:#990000;
  -moz-border-radius:5px;
  -webkit-border-radius:5px;
  border:1px solid #FFA500;
  font-size:10px;
  font-weight:bold;
  color:#FFF;
  text-decoration:none;

}
</style>
</head>
<body>
 <h2>Data Karyawan</h2>
 <table class="t_data" border="1">
   <tr>
     <th>No.</th>
     <th>NIK</th>
     <th>Nama Karyawan</th>
     <th>Gender</th>
     <th>Tanggal Lahir</th>
     <th>Gapok</th>
   </tr>
   <?php
 //kalo data tidak ada didatabase
   if(empty($query))
   {
     echo "<tr><td colspan=\"6\">Data tidak tersedia</td></tr>";
   }else
   {
     $no = 1;
     foreach($query as $row)
     {
       ?>
       <tr>
         <td><?php echo $no;?></td>
         <td><?php echo $row->nik;?></td>
         <td><?php echo $row->nama_lengkap;?></td>
         <td><?php echo $row->jenkel;?></td>
         <td><?php echo $row->tanggal_lahir;?></td>
         <td><?php echo $row->gapok;?></td>
       </tr>
       <?php
       $no++;
     }}
     ?>
   </table>
   <div class="halaman">Halaman : <?php echo $halaman;?></div>
 </body>
 </html>
