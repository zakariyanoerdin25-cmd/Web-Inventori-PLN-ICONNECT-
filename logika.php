// LOGIKA UPDATE DATA MATERIAL
if(isset($row['update_material'])){
    $id = $row['id_NAMATIM'];
    $namatim = $row['NAMATIM'];
    $k50 = $row['KABEL50'];
    $k100 = $row['KABEL100'];
    $k150 = $row['KABEL150'];
    $k250 = $row['KABEL250'];
    $oraisecom = $row['ONTRAISECOM'];
    $ohuawei = $row['ONTHUAWEI'];
    $ofiberhome = $row['ONTFIBERHOME'];
    $stb = $row['STB'];

    $query_update = "UPDATE saldo_material SET 
        NAMATIM = '$NAMATIM', 
        KABEL50 = '$KABEL50', 
        KABEL100 = '$KABEL100', 
        KABEL150 = '$KABEL150', 
        KABEL250 = '$KABEL250', 
        ONTRAISECOM = '$ONTRAISECOM', 
        ONTHUAWEI = '$ONTHUAWEI', 
        ONTFIBERHOME = '$ONTFIBERHOME', 
        STB = '$STB' 
        WHERE id = '$NAMATIM'";

    $execute = mysqli_query($conn, $query_update);

    if($execute){
        echo "<script>alert('Data Berhasil Diperbaharui'); window.location.href='inputdata.php';</script>";
    } else {
        echo "<script>alert('Gagal Update Data');</script>";
    }
}
