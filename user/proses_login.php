<?php
include 'koneksi.php';
if (session_status() == 1) {
    session_start();
}
//var_dump($_POST);

if (isset($_POST['masuk']) && !isset($_SESSION['nim']) && !isset($_SESSION['mahasiswa'])) {
    //var_dump($_SESSION);

    $nama = mysql_real_escape_string($_POST['user']);
    $pass = md5($_POST['pass']);
    
    $sqlguru = "select * from guru where nip ='" . $nama . "' and password='" . $pass . "'";
	$sqlstaff = "select * from staff where nik ='" . $nama . "' and password='" . $pass . "'";
    $sqlsiswa = "select * from siswa where nis = '" . $nama . "' and password='" . $pass . "'";
    $result_guru = mysql_query($sqlguru) or exit($sqlguru.  mysql_error());
	$result_staff = mysql_query($sqlstaff) or exit($sqlstaff.  mysql_error());
    $result_siswa = mysql_query($sqlsiswa) or exit($sqlsiswa);

    $user_data_guru = mysql_fetch_array($result_guru);
	$user_data_staff = mysql_fetch_array($result_staff);
    $user_data_siswa = mysql_fetch_array($result_siswa);
    $data_ada_guru = mysql_num_rows($result_guru);
	$data_ada_staff = mysql_num_rows($result_staff);
    $data_ada_siswa = mysql_num_rows($result_siswa);
    
    if ($data_ada_siswa == 1) {
        $_SESSION['status'] = 'siswa';
        $_SESSION['nis'] = $user_data_siswa['nis'];
        $_SESSION['namasiswa'] = $user_data_siswa['nama'];
        
        header("location:index.php");
    } else if ($data_ada_guru == 1) {
        $_SESSION['status'] = 'guru';
        $_SESSION['nis'] = $user_data_guru['nip'];
        $_SESSION['namasiswa'] = $user_data_guru['nama'];
        echo $nama.$pass;
        header("Location: index.php");
	} else if ($data_ada_staff == 1) {
        $_SESSION['status'] = 'staff';
        $_SESSION['nis'] = $user_data_staff['nik'];
        $_SESSION['namasiswa'] = $user_data_staff['nama'];
        echo $nama.$pass;
        header("Location: index.php");
    }  else {
        echo "<script>window.alert('data yang anda masukan tidak ditemukan')</script>";
        header("Location: index.php");
    }
}

if (isset($_POST['keluar']) && !isset($_SESSION['nim']) && !isset($_SESSION['mahasiswa'])) {
    session_destroy();
    header("Location: index.php");
}