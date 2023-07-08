<?php
//Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");



function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    // var_dump($result);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
};


function tambah($data)
{
    global $conn;
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO mahasiswa
            VALUES
            ('', '$npm', '$nama', '$email', '$jurusan', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{

    // tangkap masing-masing element pada array gambar ($_FILES)
    $namaFileGambar = $_FILES["gambar"]["name"];
    $tmpName = $_FILES["gambar"]["tmp_name"];
    $error = $_FILES["gambar"]["error"];
    $ukuranGambar = $_FILES["gambar"]["size"];

    // Cek apakah ada gambar yang diupload atau tidak
    if ($error === 4) {
        echo "<script>
                alert('Pilih Gambar Terlebih dahulu!');
            </script>";
        return false;
    }

    // Cek apakah yang diupload itu gambar atau bukan
    $ekstensiGambarValid = ["jpg", "jpeg", "png"];
    $ekstensiGambar = explode('.', $namaFileGambar);
    $ekstensiGambar = strtolower(end($ekstensiGambar));


    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('Yang anda upload bukan gambar!');
            </script>";
        return false;
    }

    // Cek jika ukurannya terlalu besar
    if ($ukuranGambar > 1000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
            </script>";
        return false;
    }
    // jika lolos pengecekan, gambar siap di upload
    // Membuat nama gambar baru sebelum di insert ke database
    $namaGambarBaru = uniqid();
    $namaGambarBaru .= '.';
    $namaGambarBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaGambarBaru);

    return $namaGambarBaru;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    if ($_FILES["gambar"]["error"] === 4) {
        $gambar = $gambarLama;
        // var_dump($gambar);
        // die;
    } else {
        $gambar = upload();
    }


    $query = "UPDATE mahasiswa
            SET
            npm = '$npm',
            nama = '$nama',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
            WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query =  "SELECT * FROM mahasiswa
                    WHERE
                nama LIKE '%$keyword%' OR
                npm LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
            ";
    return query($query);
}
