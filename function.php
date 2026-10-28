<?php

//membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","websitepln");







// INSERT DATA
if(isset($_POST['addnew'])){

    $NAMATIM = $_POST['namatim'];
    $KABEL50 = $_POST['kabel50'];
    $KABEL100 = $_POST['kabel100'];
    $KABEL150 = $_POST['kabel150'];
    $KABEL250 = $_POST['kabel250'];
    $ONTRAISECOM = $_POST['ONTRaisecom'];
    $ONTHUAWEI = $_POST['ONTHuawei'];
    $ONTFIBERHOME = $_POST['ONTFiberhome'];
    $STB = $_POST['STB'];

    $query = "INSERT INTO saldo_material 
    (namatim,kabel50,kabel100,kabel150,kabel250,ONTRaisecom,ONTHuawei,ONTFiberhome,STB)
    VALUES 
    ('$NAMATIM','$KABEL50','$KABEL100','$KABEL150','$KABEL250','$ONTRAISECOM','$ONTHUAWEI','$ONTFIBERHOME','$STB')";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "<script>alert('Data berhasil ditambah'); window.location='inputdata.php';</script>";
    } else {
        echo mysqli_error($conn);
    }
}

// INSERT DATA inputdata2
if(isset($_POST['addnew1'])){

    $NAMATIM = $_POST['namatim'];
    $KABEL50 = $_POST['kabel50'];
    $KABEL100 = $_POST['kabel100'];
    $KABEL150 = $_POST['kabel150'];
    $KABEL250 = $_POST['kabel250'];
    $ONTRAISECOM = $_POST['ONTRaisecom'];
    $ONTHUAWEI = $_POST['ONTHuawei'];
    $ONTFIBERHOME = $_POST['ONTFiberhome'];
    $STB = $_POST['STB'];

    $query = "INSERT INTO inputdata2 
    (namatim,kabel50,kabel100,kabel150,kabel250,ONTRaisecom,ONTHuawei,ONTFiberhome,STB)
    VALUES 
    ('$NAMATIM','$KABEL50','$KABEL100','$KABEL150','$KABEL250','$ONTRAISECOM','$ONTHUAWEI','$ONTFIBERHOME','$STB')";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "<script>alert('Data berhasil ditambah'); window.location='inputdata2.php';</script>";
    } else {
        echo mysqli_error($conn);
    }
}
// INSERT DATA inputdata3 /////
if(isset($_POST['addnew2'])){

    $NAMATIM = $_POST['namatim'];
    $KABEL50 = $_POST['kabel50'];
    $KABEL100 = $_POST['kabel100'];
    $KABEL150 = $_POST['kabel150'];
    $KABEL250 = $_POST['kabel250'];
    $ONTRAISECOM = $_POST['ONTRaisecom'];
    $ONTHUAWEI = $_POST['ONTHuawei'];
    $ONTFIBERHOME = $_POST['ONTFiberhome'];
    $STB = $_POST['STB'];

    $query = "INSERT INTO inputdata3 
    (namatim,kabel50,kabel100,kabel150,kabel250,ONTRaisecom,ONTHuawei,ONTFiberhome,STB)
    VALUES 
    ('$NAMATIM','$KABEL50','$KABEL100','$KABEL150','$KABEL250','$ONTRAISECOM','$ONTHUAWEI','$ONTFIBERHOME','$STB')";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "<script>alert('Data berhasil ditambah'); window.location='inputdata3.php';</script>";
    } else {
        echo mysqli_error($conn);
    }
}
// INSERT DATA inputdata4
if(isset($_POST['addnew3'])){

    $NAMATIM = $_POST['namatim'];
    $KABEL50 = $_POST['kabel50'];
    $KABEL100 = $_POST['kabel100'];
    $KABEL150 = $_POST['kabel150'];
    $KABEL250 = $_POST['kabel250'];
    $ONTRAISECOM = $_POST['ONTRaisecom'];
    $ONTHUAWEI = $_POST['ONTHuawei'];
    $ONTFIBERHOME = $_POST['ONTFiberhome'];
    $STB = $_POST['STB'];

    $query = "INSERT INTO inputdata4 
    (namatim,kabel50,kabel100,kabel150,kabel250,ONTRaisecom,ONTHuawei,ONTFiberhome,STB)
    VALUES 
    ('$NAMATIM','$KABEL50','$KABEL100','$KABEL150','$KABEL250','$ONTRAISECOM','$ONTHUAWEI','$ONTFIBERHOME','$STB')";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "<script>alert('Data berhasil ditambah'); window.location='inputdata4.php';</script>";
    } else {
        echo mysqli_error($conn);
    }
}
// ================= RESET DATA =================
if(isset($_POST['resetdata'])){
    mysqli_query($conn, "TRUNCATE TABLE saldo_material");

    echo "<script>
        alert('Semua data berhasil dihapus');
        window.location='inputdata.php';
    </script>";
}

// ================= RESET DATA inputdata2 =================
if(isset($_POST['resetdata1'])){
    $reset = mysqli_query($conn, "TRUNCATE TABLE inputdata2");

    if($reset){
        echo "<script>
            alert('Semua data berhasil dihapus');
            window.location='inputdata2.php'; // Ganti sesuai nama file Anda
        </script>";
    } else {
        echo "<script>
            alert('Gagal menghapus data: " . mysqli_error($conn) . "');
            window.location='inputdata2.php';
        </script>";
    }
}

// ================= RESET DATA inputdata3 =================
if(isset($_POST['resetdata2'])){
    $reset = mysqli_query($conn, "TRUNCATE TABLE inputdata3");

    if($reset){
        echo "<script>
            alert('Semua data berhasil dihapus');
            window.location='inputdata3.php'; // Ganti sesuai nama file Anda
        </script>";
    } else {
        echo "<script>
            alert('Gagal menghapus data: " . mysqli_error($conn) . "');
            window.location='inputdata3.php';
        </script>";
    }
}
// ================= RESET DATA inputdata4 =================
if(isset($_POST['resetdata3'])){
    $reset = mysqli_query($conn, "TRUNCATE TABLE inputdata4");

    if($reset){
        echo "<script>
            alert('Semua data berhasil dihapus');
            window.location='inputdata4.php'; // Ganti sesuai nama file Anda
        </script>";
    } else {
        echo "<script>
            alert('Gagal menghapus data: " . mysqli_error($conn) . "');
            window.location='inputdata4.php';
        </script>";
    }
}





//================ EDIT TABLE DATA input data================
if(isset($_POST['update_material'])){
    $id         = $_POST['id_material']; 
    $namatim    = $_POST['namatim'];
    $k50        = $_POST['kabel50'];
    $k100       = $_POST['kabel100'];
    $k150       = $_POST['kabel150'];
    $k250       = $_POST['kabel250'];
    $oraisecom  = $_POST['ont_raisecom'];
    $ohuawei    = $_POST['ont_huawei'];
    $ofiberhome = $_POST['ont_fiberhome'];
    $stb        = $_POST['stb'];

    // Pastikan Nama Kolom (sebelah kiri =) sesuai gambar struktur DB Anda
    $query_update = "UPDATE saldo_material SET 
                        NAMATIM      = '$namatim', 
                        KABEL50      = '$k50', 
                        KABEL100     = '$k100', 
                        KABEL150     = '$k150', 
                        KABEL250     = '$k250', 
                        ONTRAISECOM  = '$oraisecom', 
                        ONTHUAWEI    = '$ohuawei', 
                        ONTFIBERHOME = '$ofiberhome', 
                        STB          = '$stb' 
                    WHERE id         = '$id'";

    $execute = mysqli_query($conn, $query_update);

    if($execute){
        // Cek apakah ada baris yang benar-benar berubah
        if(mysqli_affected_rows($conn) > 0){
            echo "<script>alert('Data Berhasil Diupdate'); window.location.href='inputdata.php';</script>";
        } else {
            // Ini muncul jika ID ditemukan tapi Anda tidak mengubah angka apapun di form
            echo "<script>alert('Tidak ada perubahan data atau ID tidak ditemukan'); window.location.href='inputdata.php';</script>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

//================ EDIT TABLE DATA input data2 ================
if(isset($_POST['update_material2'])){
    $id         = $_POST['id_material2']; 
    $namatim    = $_POST['namatim'];
    $k50        = $_POST['kabel50'];
    $k100       = $_POST['kabel100'];
    $k150       = $_POST['kabel150'];
    $k250       = $_POST['kabel250'];
    $oraisecom  = $_POST['ont_raisecom'];
    $ohuawei    = $_POST['ont_huawei'];
    $ofiberhome = $_POST['ont_fiberhome'];
    $stb        = $_POST['stb'];

    // Pastikan Nama Kolom (sebelah kiri =) sesuai gambar struktur DB Anda
    $query_update = "UPDATE inputdata2 SET 
                        NAMATIM      = '$namatim', 
                        KABEL50      = '$k50', 
                        KABEL100     = '$k100', 
                        KABEL150     = '$k150', 
                        KABEL250     = '$k250', 
                        ONTRAISECOM  = '$oraisecom', 
                        ONTHUAWEI    = '$ohuawei', 
                        ONTFIBERHOME = '$ofiberhome', 
                        STB          = '$stb' 
                    WHERE id         = '$id'";

    $execute = mysqli_query($conn, $query_update);

    if($execute){
        // Cek apakah ada baris yang benar-benar berubah
        if(mysqli_affected_rows($conn) > 0){
            echo "<script>alert('Data Berhasil Diupdate'); window.location.href='inputdata2.php';</script>";
        } else {
            // Ini muncul jika ID ditemukan tapi Anda tidak mengubah angka apapun di form
            echo "<script>alert('Tidak ada perubahan data atau ID tidak ditemukan'); window.location.href='inputdata2.php';</script>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

//================ EDIT TABLE DATA input data3 ================
if(isset($_POST['update_material3'])){
    $id         = $_POST['id_material3']; 
    $namatim    = $_POST['namatim'];
    $k50        = $_POST['kabel50'];
    $k100       = $_POST['kabel100'];
    $k150       = $_POST['kabel150'];
    $k250       = $_POST['kabel250'];
    $oraisecom  = $_POST['ont_raisecom'];
    $ohuawei    = $_POST['ont_huawei'];
    $ofiberhome = $_POST['ont_fiberhome'];
    $stb        = $_POST['stb'];

    // Pastikan Nama Kolom (sebelah kiri =) sesuai gambar struktur DB Anda
    $query_update = "UPDATE inputdata3 SET 
                        NAMATIM      = '$namatim', 
                        KABEL50      = '$k50', 
                        KABEL100     = '$k100', 
                        KABEL150     = '$k150', 
                        KABEL250     = '$k250', 
                        ONTRAISECOM  = '$oraisecom', 
                        ONTHUAWEI    = '$ohuawei', 
                        ONTFIBERHOME = '$ofiberhome', 
                        STB          = '$stb' 
                    WHERE id         = '$id'";

    $execute = mysqli_query($conn, $query_update);

    if($execute){
        // Cek apakah ada baris yang benar-benar berubah
        if(mysqli_affected_rows($conn) > 0){
            echo "<script>alert('Data Berhasil Diupdate'); window.location.href='inputdata3.php';</script>";
        } else {
            // Ini muncul jika ID ditemukan tapi Anda tidak mengubah angka apapun di form
            echo "<script>alert('Tidak ada perubahan data atau ID tidak ditemukan'); window.location.href='inputdata3.php';</script>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
//================ EDIT TABLE DATA input data4 ================
if(isset($_POST['update_material4'])){
    $id         = $_POST['id_material4']; 
    $namatim    = $_POST['namatim'];
    $k50        = $_POST['kabel50'];
    $k100       = $_POST['kabel100'];
    $k150       = $_POST['kabel150'];
    $k250       = $_POST['kabel250'];
    $oraisecom  = $_POST['ont_raisecom'];
    $ohuawei    = $_POST['ont_huawei'];
    $ofiberhome = $_POST['ont_fiberhome'];
    $stb        = $_POST['stb'];

    // Pastikan Nama Kolom (sebelah kiri =) sesuai gambar struktur DB Anda
    $query_update = "UPDATE inputdata4 SET 
                        NAMATIM      = '$namatim', 
                        KABEL50      = '$k50', 
                        KABEL100     = '$k100', 
                        KABEL150     = '$k150', 
                        KABEL250     = '$k250', 
                        ONTRAISECOM  = '$oraisecom', 
                        ONTHUAWEI    = '$ohuawei', 
                        ONTFIBERHOME = '$ofiberhome', 
                        STB          = '$stb' 
                    WHERE id         = '$id'";

    $execute = mysqli_query($conn, $query_update);

    if($execute){
        // Cek apakah ada baris yang benar-benar berubah
        if(mysqli_affected_rows($conn) > 0){
            echo "<script>alert('Data Berhasil Diupdate'); window.location.href='inputdata4.php';</script>";
        } else {
            // Ini muncul jika ID ditemukan tapi Anda tidak mengubah angka apapun di form
            echo "<script>alert('Tidak ada perubahan data atau ID tidak ditemukan'); window.location.href='inputdata4.php';</script>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>