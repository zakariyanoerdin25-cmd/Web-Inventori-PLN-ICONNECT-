<?php
require 'function.php';

// header excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=saldo_material.xls");
?>
TALI TIMBO MAS
<table border="1">
    <thead>  
        <tr>
            <th>Nama Tim</th>
            <th>KABEL 50</th>
            <th>KABEL 100</th>
            <th>KABEL 150</th>
            <th>KABEL 250</th>
            <th>ONT RAISECOM</th>
            <th>ONT HUAWEI</th>
            <th>ONT FIBERHOME</th>
            <th>STB</th>
        </tr>
    </thead>

    <tbody>
    <?php
    $data = mysqli_query($conn, "SELECT * FROM saldo_material");

    while($row = mysqli_fetch_assoc($data)){
    ?>
        <tr>
            <td><?= $row['NAMATIM']; ?></td>
            <td><?= $row['KABEL50']; ?></td>
            <td><?= $row['KABEL100']; ?></td>
            <td><?= $row['KABEL150']; ?></td>
            <td><?= $row['KABEL250']; ?></td>
            <td><?= $row['ONTRAISECOM']; ?></td>
            <td><?= $row['ONTHUAWEI']; ?></td>
            <td><?= $row['ONTFIBERHOME']; ?></td>
            <td><?= $row['STB']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<table></table>
HALEYORA POWERINDO
<table border="1">
    <thead>  
        <tr>
            <th>Nama Tim</th>
            <th>KABEL 50</th>
            <th>KABEL 100</th>
            <th>KABEL 150</th>
            <th>KABEL 250</th>
            <th>ONT RAISECOM</th>
            <th>ONT HUAWEI</th>
            <th>ONT FIBERHOME</th>
            <th>STB</th>
        </tr>
    </thead>

    <tbody>
    <?php
    $data = mysqli_query($conn, "SELECT * FROM inputdata2");

    while($row = mysqli_fetch_assoc($data)){
    ?>
        <tr>
            <td><?= $row['NAMATIM']; ?></td>
            <td><?= $row['KABEL50']; ?></td>
            <td><?= $row['KABEL100']; ?></td>
            <td><?= $row['KABEL150']; ?></td>
            <td><?= $row['KABEL250']; ?></td>
            <td><?= $row['ONTRAISECOM']; ?></td>
            <td><?= $row['ONTHUAWEI']; ?></td>
            <td><?= $row['ONTFIBERHOME']; ?></td>
            <td><?= $row['STB']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<table></table>
SARANA INFRAKSTUR BERSAMA
<table border="1">
    <thead>  
        <tr>
            <th>Nama Tim</th>
            <th>KABEL 50</th>
            <th>KABEL 100</th>
            <th>KABEL 150</th>
            <th>KABEL 250</th>
            <th>ONT RAISECOM</th>
            <th>ONT HUAWEI</th>
            <th>ONT FIBERHOME</th>
            <th>STB</th>
        </tr>
    </thead>

    <tbody>
    <?php
    $data = mysqli_query($conn, "SELECT * FROM inputdata3");

    while($row = mysqli_fetch_assoc($data)){
    ?>
        <tr>
            <td><?= $row['NAMATIM']; ?></td>
            <td><?= $row['KABEL50']; ?></td>
            <td><?= $row['KABEL100']; ?></td>
            <td><?= $row['KABEL150']; ?></td>
            <td><?= $row['KABEL250']; ?></td>
            <td><?= $row['ONTRAISECOM']; ?></td>
            <td><?= $row['ONTHUAWEI']; ?></td>
            <td><?= $row['ONTFIBERHOME']; ?></td>
            <td><?= $row['STB']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<table></table>
GERBANG SINERGI PRIMA
<table border="1">
    <thead>  
        <tr>
            <th>Nama Tim</th>
            <th>KABEL 50</th>
            <th>KABEL 100</th>
            <th>KABEL 150</th>
            <th>KABEL 250</th>
            <th>ONT RAISECOM</th>
            <th>ONT HUAWEI</th>
            <th>ONT FIBERHOME</th>
            <th>STB</th>
        </tr>
    </thead>

    <tbody>
    <?php
    $data = mysqli_query($conn, "SELECT * FROM inputdata4");

    while($row = mysqli_fetch_assoc($data)){
    ?>
        <tr>
            <td><?= $row['NAMATIM']; ?></td>
            <td><?= $row['KABEL50']; ?></td>
            <td><?= $row['KABEL100']; ?></td>
            <td><?= $row['KABEL150']; ?></td>
            <td><?= $row['KABEL250']; ?></td>
            <td><?= $row['ONTRAISECOM']; ?></td>
            <td><?= $row['ONTHUAWEI']; ?></td>
            <td><?= $row['ONTFIBERHOME']; ?></td>
            <td><?= $row['STB']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>