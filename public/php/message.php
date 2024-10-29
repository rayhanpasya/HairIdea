<?php
// Pengkoneksian database
$conn = mysqli_connect("localhost", "root", "", "data_chatbot") or die("Database Error");

// Mengambil pesan user melalui ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

// Memulai sesi untuk menyimpan status percakapan
session_start();

// Jika input user adalah 'mulai' atau 'Mulai', menyapa pengguna
if (in_array(strtolower($getMesg), ['hallo'])) {
    $_SESSION['step'] = 'initial';
    echo "Selamat datang di Chatbot HairIdea, silahkan pilih opsi fitur Chatbot dengan mengetikkan angka 1-3 :<br>1. Rekomendasi tren rambut menurut HairIdea berdasarkan bentuk wajah & tipe rambut<br>2. Perawatan Rambut<br>3. Tren Rambut";
    exit;
}

// Menangani input berdasarkan langkah percakapan yang disimpan di sesi
if (isset($_SESSION['step'])) {
    switch ($_SESSION['step']) {
        case 'initial':
            if (in_array($getMesg, ['1', '2', '3'])) {
                $_SESSION['option'] = $getMesg;
                if ($getMesg == '1') {
                    $_SESSION['step'] = 'bentuk_wajah';
                    echo "Pilih Bentuk Wajah 1-4 :<br>1. Oval<br>2. Segitiga<br>3. Bulat<br>4. Kotak";
                } elseif ($getMesg == '2') {
                    echo 'Untuk informasi perawatan rambut, bisa di cek pada URL dibawah ini : <br><span class="bg-light rounded rounded-3 px-2"> <a href="/perawatan">Perawatan Rambut</a></span>';
                    session_destroy();
                } elseif ($getMesg == '3') {
                    echo 'Untuk Tren Rambut versi HairIdea bisa di cek pada URL dibawah ini : <br><span class="bg-light rounded rounded-3 px-2"> <a href="/tren">Tren Rambut</a></span>';
                    session_destroy();
                }
            } else {
                echo "Input Tidak Valid.";
            }
            break;
        case 'bentuk_wajah':
            if (in_array($getMesg, ['1', '2', '3', '4'])) {
                $_SESSION['bentuk_wajah'] = $getMesg;
                $_SESSION['step'] = 'tipe_rambut';
                echo "Pilih Tipe Rambut 1-4 :<br>1. Lurus<br>2. Bergelombang<br>3. Ikal<br>4. Keriting";
            } else {
                echo "Input tidak valid. Silakan pilih angka 1 - 4 untuk bentuk wajah.";
            }
            break;
        case 'tipe_rambut':
            if (in_array($getMesg, ['1', '2', '3', '4'])) {
                $_SESSION['tipe_rambut'] = $getMesg;
                // Panggil fungsi untuk memberikan rekomendasi
                $bentuk_wajah = $_SESSION['bentuk_wajah'];
                $tipe_rambut = $getMesg;
                echo getHairStyleRecommendation($conn, $bentuk_wajah, $tipe_rambut);
                session_destroy();
            } else {
                echo "Input tidak valid. Silakan pilih angka 1 - 4 untuk tipe rambut.";
            }
            break;
        default:
            echo "Maaf, terjadi kesalahan. Silakan ketikkan 'Hallo' untuk memulai kembali.";
            session_destroy();
    }
} else {
    echo "Maaf saya tidak mengerti, tolong ketikkan kata 'Hallo'";
}

// Fungsi untuk mendapatkan rekomendasi gaya rambut berdasarkan bentuk wajah dan tipe rambut
function getHairStyleRecommendation($conn, $bentuk_wajah, $tipe_rambut)
{
    $bentuk_wajah_map = ['1' => 'Oval', '2' => 'Segitiga', '3' => 'Bulat', '4' => 'Kotak'];
    $tipe_rambut_map = ['1' => 'Lurus', '2' => 'Bergelombang', '3' => 'Ikal', '4' => 'Keriting'];

    $bentuk_wajah_text = $bentuk_wajah_map[$bentuk_wajah];
    $tipe_rambut_text = $tipe_rambut_map[$tipe_rambut];

    $query = "SELECT replies FROM chatbot WHERE queries LIKE '%$bentuk_wajah_text $tipe_rambut_text%'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        return $data['replies'];
    }
}
?>
