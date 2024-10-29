<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;
use Illuminate\Support\Collection;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tren', function () {
    $tren = [
        [
            "title" => "Comma Hair",
            "slug" => "comma-hair",
            "author" => "HairIdea",
            "body" => "Comma Hair Style, disebut demikian karena gaya model bagian depan rambut membentuk lengkung ke dalam yang mirip seperti tanda koma."
        ],

        [
            "title" => "Undercut",
            "slug" => "undercut",
            "author" => "HairIdea",
            "body" => "Undercut Hair Style, disebut demikian karena pada rambut bagian atas lebih panjang/tebal dibandingkan bagian samping maupun belakang."
        ],

        [
            "title" => "Bowl Cut",
            "slug" => "bowl-cut",
            "author" => "HairIdea",
            "body" => "Bowl Cut Hair Style, disebut demikian karena rambut depan dipotong dengan pinggiran lurus, sedangkan bagian samping dan belakang dipotong dengan panjang yang sama"
        ],

        [
            "title" => "Buzz Cut",
            "slug" => "buzz-cut",
            "author" => "HairIdea",
            "body" => "Buzz Cut Hair Style, disebut demikian karena rambut dipotong sangat pendek dan seragam dengan panjang yang sama. Gaya ini memberikan tampilan yang bersih, simpel, dan sangat mudah untuk dikelola."
        ],

        [
            "title" => "Two Block",
            "slug" => "two-block",
            "author" => "HairIdea",
            "body" => "Two Block Hair Style, disebut demikian karena rambut pria yang dipotong pendek pada sisi samping dan belakang, sedangkan bagian atasnya dibiarkan panjang."
        ],

        [
            "title" => "Low taper",
            "slug" => "low-taper",
            "author" => "HairIdea",
            "body" => "Low Taper Hair Style, disebut demikian karena gaya rambut klasik pria yang ditandai dengan rambut yang semakin pendek secara bertahap dari atas kepala hingga ke samping dan belakang."
        ],

        [
            "title" => "Curtain",
            "slug" => "curtain",
            "author" => "HairIdea",
            "body" => "Curtain Hair, disebut demikian karena gaya rambut ini ditandai dengan rambut yang dibelah di tengah, sehingga membentuk tirai di kedua sisi wajah, mirip dengan gorden atau tirai yang terbuka."
        ],

        [
            "title" => "Mullet",
            "slug" => "mullet",
            "author" => "HairIdea",
            "body" => "Mullet Hair Style, disebut demikian karena gaya rambut ini memiliki potongan poni yang jabrik, Sedangkan rambut bagian samping dicukur tipis dan memiliki ekor rambut memanjang di bagian belakang."
        ],
    ];
    return view('tren', ['tren' => $tren]);
});

Route::get('tren/comma-hair', function () {
    $comma = 
        [
            "title" => "Comma Hair",
            "author" => "HairIdea",
            "body" => "Deskripsi singkat tentang Comma Hair."
        ];
    
    return view('comma', ['comma' => $comma]);
});

Route::get('tren/undercut', function () {
    $under = 
        [
            "title" => "Undercut",
            "author" => "HairIdea",
            "body" => "Deskripsi singkat tentang Undercut."
        ];
    
    return view('under', ['under' => $under]);
});

Route::get('tren/bowl-cut', function () {
    $bowl = 
        [
            "title" => "Bowl Cut",
            "author" => "HairIdea",
            "body" => "Deskripsi singkat tentang Undercut."
        ];
    
    return view('bowl', ['bowl' => $bowl]);
});

Route::get('tren/buzz-cut', function () {
    $buzz = 
        [
            "title" => "Buzz Cut",
            "author" => "HairIdea",
            "body" => "Deskripsi singkat tentang Undercut."
        ];
    
    return view('buzz', ['buzz' => $buzz]);
});

Route::get('tren/two-block', function () {
    $twoblock = 
        [
            "title" => "Two Block",
            "author" => "HairIdea",
            "body" => "Deskripsi singkat tentang Undercut."
        ];
    
    return view('twoblock', ['twoblock' => $twoblock]);
});

Route::get('tren/low-taper', function () {
    $lowtaper = 
        [
            "title" => "Low Taper",
            "author" => "HairIdea",
            "body" => "Deskripsi singkat tentang Undercut."
        ];
    
    return view('lowtaper', ['lowtaper' => $lowtaper]);
});

Route::get('tren/curtain', function () {
    $curtain = 
        [
            "title" => "Curtain",
            "author" => "HairIdea",
            "body" => "Deskripsi singkat tentang Undercut."
        ];
    
    return view('curtain', ['curtain' => $curtain]);
});

Route::get('tren/mullet', function () {
    $mullet = 
        [
            "title" => "Mullet",
            "author" => "HairIdea",
            "body" => "Deskripsi singkat tentang Undercut."
        ];
    
    return view('mullet', ['mullet' => $mullet]);
});


Route::get('/perawatan', function () {
    $perawatan = [
        [
            "title" => "1. Cuci Rambut Secara Teratur",
            "author" => "HairIdea",
            "body" => "Gunakan shampoo yang sesuai dengan jenis rambut Anda (normal, berminyak, kering, atau berketombe). Cuci rambut 2-3 kali seminggu untuk menjaga kebersihan dan kesehatan kulit kepala. Gunakan conditioner setelah shampoo untuk menjaga kelembapan dan kelembutan rambut."
        ],

        [
            "title" => "2. Penggunaan Produk Rambut",
            "author" => "HairIdea",
            "body" => "Gunakan minyak rambut alami seperti minyak kelapa atau minyak argan untuk menjaga kelembapan dan kesehatan rambut. Serum rambut dapat membantu mengatasi rambut kusut dan memberikan kilau ekstra. Untuk penataan rambut, gunakan gel, pomade, atau wax yang sesuai dengan gaya rambut yang diinginkan."
        ],
        
        [
            "title" => "3. Pangkas Rambut Secara Rutin",
            "author" => "HairIdea",
            "body" => "Potong rambut setiap 4-6 minggu sekali untuk menghindari ujung rambut bercabang dan menjaga bentuk potongan rambut."
        ],

        [
            "title" => "4. Hindari Alat Pemanas Berlebihan",
            "author" => "HairIdea",
            "body" => "Penggunaan alat pemanas seperti hair dryer, catokan, atau alat pengeriting rambut sebaiknya dibatasi karena dapat merusak rambut jika digunakan terlalu sering."
        ],

        [
            "title" => "5. Pola Makan Sehat",
            "author" => "HairIdea",
            "body" => "Konsumsi makanan yang kaya akan protein, vitamin, dan mineral seperti buah-buahan, sayuran, ikan, dan kacang-kacangan untuk mendukung kesehatan rambut dari dalam."
        ],

        [
            "title" => "6. Hindari Produk dengan Bahan Kimia Keras",
            "author" => "HairIdea",
            "body" => "Hindari produk perawatan rambut yang mengandung sulfat, paraben, dan alkohol karena dapat menyebabkan iritasi kulit kepala dan kerusakan rambut."
        ],

        [
            "title" => "7. Perawatan Kulit Kepala",
            "author" => "HairIdea",
            "body" => "Pijat kulit kepala secara lembut saat mencuci rambut untuk meningkatkan sirkulasi darah. Gunakan scrub atau exfoliator kulit kepala sekali seminggu untuk menghilangkan sel kulit mati dan menjaga kebersihan kulit kepala."
        ],

        [
            "title" => "8. Hindari Stres",
            "author" => "HairIdea",
            "body" => "Stres dapat mempengaruhi kesehatan rambut dan menyebabkan kerontokan. Lakukan aktivitas relaksasi seperti olahraga, meditasi, atau hobi yang menyenangkan untuk mengurangi stres."
        ],
    ];
    return view('perawatan', ['perawatan' => $perawatan]);
});


Route::get('/faq', function () {
    return view('faq');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/chatbot', function () {
    return view('partials.chatbot');
});