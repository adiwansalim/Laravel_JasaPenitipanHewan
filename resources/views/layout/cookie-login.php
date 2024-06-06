<?php
// Memeriksa apakah data login telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // memeriksa dan membersihkan data yang diterima
    $username = clean_input($_POST["username"]);
    $password = clean_input($_POST["password"]);
    
    // validasi login, misalnya dengan memeriksa di database
    // memeriksa apakah username dan password adalah "admin"
    if ($username === "admin" && $password === "admin") {
        
        // Jika login berhasil, atur cookie
        // Contoh cookie berisi ID pengguna
        $user_id = 123; // ID pengguna yang diambil dari database
        setcookie("user_id", $user_id, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
        header('Location: Index.php?login_success=true');
        exit;
    } else {
        // Jika login gagal, tampilkan pesan kesalahan
        echo "Username atau password salah. Silakan coba lagi.";
    }
}

// Fungsi untuk membersihkan input
function clean_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>