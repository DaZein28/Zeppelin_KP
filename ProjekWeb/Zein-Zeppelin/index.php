<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "kerja_projek";
$conn = mysqli_connect($server, $user, $password, $nama_database);
if( !$conn ){
die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zein Zeppelin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!--Navbar Start  -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Zein <span>Zeppelin</span>.</a>

      <div class="navbar-nav">
        <a href="#home" class="clicked">Home</a>
        <a href="#about" class="clicked">Tentang Kami</a>
        <a href="#menu" class="clicked">Menu</a>
        <a href="#contact" class="clicked">Kontak</a>
        <a href="#comment" class="clicked">Komentar</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="hamburger-menu"> <i data-feather="menu"></i></a>
      </div>
    </nav>

    <!--Navbar End  -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
      <main class="content-home">
        <h1>
          Nikmati Cita Rasa <span>Authentic</span> Dari <span1>It</span1
          ><span2>al</span2><span3>ia</span3>
        </h1>
      </main>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/tentang-kami.jpg" alt="Tentang Kami" />
        </div>
        <style>
  .content {
    text-align: justify;
  }
</style>

<div class="content">
  <p>
    Zein Zeppelin merupakan restoran karangan seorang bocah 16 tahun bernama Muhammad Adam Alfazein yang insyaallah akan menjadi nyata
  </p>
  <p>
    Alasan dia membuat website ini merupakan tugas kerja projek yang tidak bisa dihindari karena dia memang butuh nilai untuk naik kelas
  </p>
</div>

      </div>
    </section>
    <!-- About Section End -->
    
    <section id="menu" class="menu">
      <h3><span>Menu</span></h3>

      <div class="menuan">
        <a onclick="openMakanan()">Makanan</a>
        <a onclick="openMinuman()">Minuman</a>
        <a onclick="openDessert()">Dessert</a>
      </div>
      <!-- Menu Makanan start -->
      <section id="makanan" class="makanan">
        <div class="row">
          <div class="menu-card">
            <a href="#" class="item-detail-button-mak1">
              <img
              src="img/Menu-Makanan/1.jpg"
              alt="Ribollita"
              class="menu-card-img"
              />
            </a>
            <h3 class="menu-card-title">- Ribollita -</h3>
            <p class="menu-card-price">IDR 10K</p>
        </div>
        <div class="menu-card">
          <a href="#" class="item-detail-button-mak2">
            <img
            src="img/Menu-Makanan/3.jpg"
            alt="Lasagna"
            class="menu-card-img"
            />
          </a>
          <h3 class="menu-card-title">- Lasagna -</h3>
          <p class="menu-card-price">IDR 20K</p>
        </div>
        <div class="menu-card">
          <a href="#" class="item-detail-button-mak3">
            <img
            src="img/Menu-Makanan/2.jpg"
            alt="Risotto"
            class="menu-card-img"
            />
          </a>
          <h3 class="menu-card-title">- Risotto -</h3>
          <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
          <a href="#" class="item-detail-button-mak4">
            <img
            src="img/Menu-Makanan/4.jpg"
            alt="Arancini"
            class="menu-card-img"
            />
          </a>
          <h3 class="menu-card-title">- Arancini -</h3>
          <p class="menu-card-price">IDR 10K</p>
        </div>
        <div class="menu-card">
          <a href="#" class="item-detail-button-mak5">
            <img
            src="img/Menu-Makanan/5.jpg"
            alt="Carbonara"
            class="menu-card-img"
            />
          </a>
          <h3 class="menu-card-title">- Carbonara -</h3>
          <p class="menu-card-price">IDR 25K</p>
        </div>
      </div>
    </section>
    <!-- Menu Makanan end -->
    
    <!-- Menu Minuman start -->
    <section id="minuman" class="minuman" style="display: none;">
      <div class="row">
        <div class="menu-card">
          <a href="#" class="item-detail-button-min1">
            <img
            src="img/Menu-Minuman/1.jpg"
            alt="Espresso"
            class="menu-card-img"
            />
          </a>
          <h3 class="menu-card-title">- Espresso -</h3>
          <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
          <a href="#" class="item-detail-button-min2">
            <img
            src="img/Menu-Minuman/2.jpeg"
            alt="Vanilla Latte"
            class="menu-card-img"
            />
          </a>
          <h3 class="menu-card-title">- Vanilla Latte -</h3>
          <p class="menu-card-price">IDR 20K</p>
        </div>
        <div class="menu-card">
          <a href="#" class="item-detail-button-min3">
          <img
            src="img/Menu-Minuman/3.jpeg"
            alt="Macchiato"
            class="menu-card-img"
            />
          </a>
          <h3 class="menu-card-title">- Macchiato -</h3>
          <p class="menu-card-price">IDR 20K</p>
        </div>
        <div class="menu-card">
          <a href="#" class="item-detail-button-min4">
            <img
            src="img/Menu-Minuman/4.png"
            alt="Marochino"
            class="menu-card-img"
            />
          </a>
          <h3 class="menu-card-title">- Marochino -</h3>
          <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
          <a href="#" class="item-detail-button-min5">
            <img
            src="img/Menu-Minuman/5.jpg"
            alt="Cappuccino"
            class="menu-card-img"
            />
          </a>
          <h3 class="menu-card-title">- Cappuccino -</h3>
          <p class="menu-card-price">IDR 15K</p>
        </div>
      </div>
    </section>
    <!-- Menu Minuman end -->
    
    <!-- Menu Dessert start -->
    <section id="dessert" class="dessert" style="display: none;">
      <div class="row">
        <div class="menu-card">
          <a href="#" class="item-detail-button-des1">
            <img
            src="img/Menu-Dessert/1.jpg"
            alt="Cornettto"
            class="menu-card-img"
            />
          </a>
          <h3 class="menu-card-title">- Cornettto -</h3>
          <p class="menu-card-price">IDR 10K</p>
        </div>
        <div class="menu-card">
          <a href="#" class="item-detail-button-des2">
            <img
            src="img/Menu-Dessert/2.jpg"
            alt="Tiramisu"
            class="menu-card-img"
            />
          </a>
          <h3 class="menu-card-title">- Tiramisu -</h3>
          <p class="menu-card-price">IDR 20K</p>
        </div>
        <div class="menu-card">
          <a href="#" class="item-detail-button-des3">
            <img
            src="img/Menu-Dessert/3.jpg"
            alt="Gelato"
            class="menu-card-img"
          />
        </a>
        <h3 class="menu-card-title">- Gelato -</h3>
        <p class="menu-card-price">IDR 15K</p>
      </div>
    </section>
  </section>
    <!-- Menu Dessert end -->
    
    
<script>
document.addEventListener("DOMContentLoaded", function() {
  var ratingContainers = document.querySelectorAll('.rating');

  ratingContainers.forEach(function(container) {
    var ratingValue = container.getAttribute('data-rating');
    createRating(container, ratingValue);
  });

  function createRating(container, ratingValue) {
    var maxStars = 5;
    container.innerHTML = '';

    for (var i = 1; i <= maxStars; i++) {
      var star = document.createElement('span');
      star.classList.add('star');
      star.innerHTML = i <= ratingValue ? '&#9733;' : '&#9734;';
      star.addEventListener('click', function() {
        ratingValue = this.dataset.value; // Setelah di-klik, nilai rating akan diambil dari atribut dataset
        updateRating(container, ratingValue);
      });
      star.style.cursor = 'pointer'; // Menetapkan cursor ke pointer
      star.dataset.value = i; // Menetapkan nilai rating pada atribut dataset
      container.appendChild(star);
    }
  }

  function updateRating(container, ratingValue) {
    container.setAttribute('data-rating', ratingValue);

    var stars = container.querySelectorAll('.star');
    stars.forEach(function(star) {
      var starValue = parseInt(star.dataset.value);
      star.innerHTML = starValue <= ratingValue ? '&#9733;' : '&#9734;';
    });
  }
});
</script>

 
    <!-- Contact Section start -->
    <section id="contact" class="contact">
      <h3><span>Kontak</span> Kami</h3>

      <div class="row">
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.286875965295!2d107.00007861301464!3d-6.225855622073549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c71cf814d97%3A0xd22a5d56809f070a!2sSummarecon%20Mall%20Bekasi!5e0!3m2!1sid!2sid!4v1700635408637!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>
        
        <form action="index.php#contact" method="post">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="Nama" name="nama" required/>
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="email" placeholder="Email" name="email" required/>
          </div>
          <div class="input-message">
            <textarea name="komentar" id="" cols="30" rows="10" placeholder="Masukkan komentar..." required></textarea>
          </div>
          <button type="submit" name="submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
      <!-- Contact Section end -->
      
      <!-- Comment section start -->
      <section id="comment" class="comment">
        <h3 class="terakhir"><span>Komentar</span></h2>
        
        <div class="komen">
        <?php
// Assuming $conn is your database connection

// Displaying comments
$sql = "SELECT * FROM komen ORDER BY Waktu ASC Limit 5";
$query = mysqli_query($conn, $sql);
 

if (mysqli_num_rows($query) > 0) {
    while ($feed = mysqli_fetch_array($query)) {
        $nama = htmlspecialchars($feed['Nama']);
        
        // Mensensor bagian dari email
        $email = htmlspecialchars($feed['Email']);
        $sensored_email = censorEmail($email);

        // Mensensor beberapa kata dalam komentar
        $komentar = htmlspecialchars($feed['Komentar']);
        $sensored_komentar = censorWords($komentar);

        $waktu = htmlspecialchars($feed['Waktu']);

        // Pisahkan setiap komentar dengan elemen HTML yang sesuai
        echo "<div class='komentak'>";
        echo "<h3> Nama <span>: $nama</span></h3>";
        echo "<h4> Email <span>: $sensored_email</span></h4>";
        echo "<p class='isi'> Komentar <span class='isikom'>:<br><br>$sensored_komentar</span></p>";
        echo "<p class='waktu' style='text-align:right;'><span>$waktu</span></p>";
        echo "</div>";
    }
} else {
    echo "<p>Tidak ada komentar.</p>";
}

// Function to censor part of the email
function censorEmail($email) {
    list($username, $domain) = explode('@', $email);
    $censored_username = substr($username, 0, 1) . str_repeat('*', max(strlen($username) - 2, 0)) . substr($username, -1);
    return $censored_username . '@' . $domain;
}

// Function to censor some words in the comment
function censorWords($komentar) {
    // List of words to censor
    $censor_words = array("bang");

    // Replace censored words with asterisks
    foreach ($censor_words as $word) {
        $komentar = str_ireplace($word, str_repeat('*', strlen($word)), $komentar);
    }

    return $komentar;
}
?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
}
</script>
</div>

</section>

<!-- Feedback Insert SQL -->

<?php
if (isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $komentar = $_POST['komentar'];
  date_default_timezone_set('Asia/Jakarta');
  //waktu comment
  $current_timestamp = date('d M Y H:i'); 
  
  $sql = "INSERT INTO komen (Nama, Email, Komentar, waktu) VALUES ('$nama', '$email', '$komentar', '$current_timestamp')";
  if ($conn->query($sql) === TRUE){
    echo "<script>alert('Terima Kasih atas masukan anda')</script>";
  } else{
    echo "<script>alert('Maaf masukan anda tidak dapat terkirim')</script>";
    echo "Error: " .$sql. "<br>" .$conn->error;
  }
}
?>
<!-- Comment section end -->


<!-- Footer start -->
<footer>
  
  <div class="links">
    <a href="#home">Home</a>
    <a href="#about">Tentang Kami</a>
    <a href="#menu">Menu</a>
    <a href="#contact">Kontak</a>
    <a href="#comment">Komentar</a>
  </div>
  
      <dic class="credit">
        <p>Created by <a href="">AdamZein</a>. | &copy; 2023.</p>
      </dic>
    </footer>
    <!-- Footer end -->

    <!-- Modal Box Item Detail start -->
    <!-- Modal Box Makanan start -->
    <section class="modal" id="item-detail-modal1">
      <div class="modal-container">
        <a href="#" class="close-icon1"><i data-feather="x-circle"></i></a>
        <div class="modal-content">
          <img src="img/Menu-Makanan/1.jpg" alt="Ribollita">
          <div class="makanan-content">
            <h3>Ribollita</h3>
            <p>Ribollita adalah sup roti Tuscan, panade, bubur, atau potage yang dibuat dengan roti dan sayuran. Ada banyak variasi tetapi bahan utama selalu termasuk sisa roti, kacang cannellini, kangkung lacinato, kubis, dan sayuran murah seperti wortel, kacang, lobak, seledri, kentang, dan bawang.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="modal" id="item-detail-modal2">
      <div class="modal-container">
        <a href="#" class="close-icon2"><i data-feather="x-circle"></i></a>
        <div class="modal-content">
          <img src="img/Menu-Makanan/3.jpg" alt="Lasagna">
          <div class="makanan-content">
            <h3>Lasagna</h3>
            <p>Lasagna atau lasagne adalah pasta yang dipanggang di oven dan merupakan makanan tradisional Italia. Lasagna sendiri secara harfiah adalah lasagne yang berisikan daging. Lasagna sendiri dapat diisi dengan banyak isian lainnya seperti daging, sayur-sayuran, ayam, makanan laut dan sebagainya sesuai selera</p>
          </div>
        </div>
      </div>
    </section>
    <section class="modal" id="item-detail-modal3">
      <div class="modal-container">
        <a href="#" class="close-icon3"><i data-feather="x-circle"></i></a>
        <div class="modal-content">
          <img src="img/Menu-Makanan/2.jpg" alt="Risotto">
          <div class="makanan-content">
            <h3>Rissotto</h3>
            <p>Risotto adalah hidangan nasi campur khas Italia Utara, yaitu beras yang dimasak dengan kaldu sehingga lengket menyerupai krim. Kaldu yang digunakan dapat berasal dari daging, ikan, atau sayuran. Banyak jenis risotto mengandung mentega, keju, anggur, dan bawang. Risotto adalah cara paling lazim memasak nasi di Italia</p>
          </div>
        </div>
      </div>
    </section>
    <section class="modal" id="item-detail-modal4">
      <div class="modal-container">
        <a href="#" class="close-icon4"><i data-feather="x-circle"></i></a>
        <div class="modal-content">
          <img src="img/Menu-Makanan/4.jpg" alt="Arancini">
          <div class="makanan-content">
            <h3>Arancini</h3>
            <p>Arancini adalah hidangan nasi yang digulung bulat dan dilapisi tepung roti kemudian digoreng rendam. Isian yang umum di dalamnya adalah al ragù atau al sugo, yaitu ragù, mozzarella, dan/atau keju caciocavallo</p>
          </div>
        </div>
      </div>
    </section>
    <section class="modal" id="item-detail-modal5">
      <div class="modal-container">
        <a href="#" class="close-icon5"><i data-feather="x-circle"></i></a>
        <div class="modal-content">
          <img src="img/Menu-Makanan/5.jpg" alt="Carbonara">
          <div class="makanan-content">
            <h3>Carbonara</h3>
            <p>Spaghetti alla carbonara atau carbonara adalah masakan Italia yang berupa spaghetti yang dimasak dengan saus telur, keju dan daging. Carbonara diciptakan dari resep rakyat pedesaan Italia tengah yang berciri sederhana dan apa adanya.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Modal Box Makanan end -->
  
    <!-- Modal Box Minuman start -->
    <section class="modal" id="item-detail-modal-min1">
      <div class="modal-container">
        <a href="#" class="close-icon-min1"><i data-feather="x-circle"></i></a>
        <div class="modal-content">
          <img src="img/Menu-Minuman/1.jpg" alt="Espresso">
          <div class="makanan-content">
            <h3>Espresso</h3>
            <p>Espreso adalah jenis kopi yang dihasilkan dengan mengekstraksi biji kopi yang sudah digiling dengan menyemburkan air panas di bawah tekanan tinggi. Espresso berasal dari bahasa Italia yang berarti express atau "cepat" karena dibuat untuk disajikan dengan segera kepada pelanggan.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="modal" id="item-detail-modal-min2">
      <div class="modal-container">
        <a href="#" class="close-icon-min2"><i data-feather="x-circle"></i></a>
        <div class="modal-content">
          <img src="img/Menu-Minuman/2.jpeg" alt="Vanilla Latte">
          <div class="makanan-content">
            <h3>Vanilla Latte</h3>
            <p>Vanilla latte sendiri merupakan minuman kopi yang terbuat dari espresso, susu, dan sirup vanilla. Susu yang biasa digunakan dalam pembuatannya adalah susu steamed atau susu panas sehingga memberikan efek menenangkan.</p>          
          </div>
        </div>
      </div>
    </section>
    <section class="modal" id="item-detail-modal-min3">
      <div class="modal-container">
        <a href="#" class="close-icon-min3"><i data-feather="x-circle"></i></a>
        <div class="modal-content">
          <img src="img/Menu-Minuman/3.jpeg" alt="Macchiato">
          <div class="makanan-content">
            <h3>Macchiato</h3>
            <p>Coffee macchiato adalah minuman kopi yang dibuat dengan mencampurkan espresso dengan susu. Ada dua jenis macchiato yang biasanya disajikan, yaitu espresso macchiato dan latte macchiato. Espresso macchiato dibuat dengan menambahkan sedikit susu ke dalam segelas espresso.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="modal" id="item-detail-modal-min4">
      <div class="modal-container">
        <a href="#" class="close-icon-min4"><i data-feather="x-circle"></i></a>
        <div class="modal-content">
          <img src="img/Menu-Minuman/4.png" alt="Marochino">
          <div class="makanan-content">
            <h3>Marochino</h3>
            <p>Marochino merupakan minuman yang dibuat dari kopi, selain dikenal sebagai minuman dari Italia, minuman ini juga dikenal sebagai minuman dari Maroko.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="modal" id="item-detail-modal-min5">
      <div class="modal-container">
        <a href="#" class="close-icon-min5"><i data-feather="x-circle"></i></a>
        <div class="modal-content">
          <img src="img/Menu-Minuman/5.jpg" alt="Cappuccino">
          <div class="makanan-content">
            <h3>Cappuccino</h3>
            <p>Cappuccino adalah minuman kopi khas Italia yang dibuat dari espreso dan susu, tetapi referensi lain juga ada yang menyebutkan bahwa kapucino berawal dari biji biji kopi tentara Turki yang tertinggal setelah peperangan yang dipimpin oleh Kara Mustapha Pasha di Wina, Austria melawan tentara gabungan Polandia-Jerman.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Modal Box Minuman end -->

    <!-- Modal Box Dessert start -->
    <section class="modal" id="item-detail-modal-des1">
      <div class="modal-container">
        <a href="#" class="close-icon-des1"><i data-feather="x-circle"></i></a>
        <div class="modal-content">
          <img src="img/Menu-Dessert/1.jpg" alt="Cornettto">
          <div class="makanan-content">
            <h3>Cornettto</h3>
            <p>Cornetto merupakan variasi asal Italia dari kue kipferl asal Austria dan croissant yang berasal dari Prancis. Cornetto berbeda dari croissant karena lebih lembut dan mengandung lebih sedikit mentega. Bahan utama cornetto adalah adonan pastri, telur, mentega, air dan gula.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="modal" id="item-detail-modal-des2">
      <div class="modal-container">
        <a href="#" class="close-icon-des2"><i data-feather="x-circle"></i></a>
        <div class="modal-content">
          <img src="img/Menu-Dessert/2.jpg" alt="Tiramisu">
          <div class="makanan-content">
            <h3>Tiramisu</h3>
            <p>Tiramisù adalah kue keju khas Italia dengan taburan bubuk kakao di atasnya. Kue ini merupakan hidangan penutup yang dimakan dengan sendok, sehingga digolongkan ke dalam hidangan "al cucchiaio". Kue ini tidak dibuat dari adonan dan tidak dipanggang</p>
          </div>
        </div>
      </div>
    </section>
    <section class="modal" id="item-detail-modal-des3">
      <div class="modal-container">
        <a href="#" class="close-icon-des3"><i data-feather="x-circle"></i></a>
        <div class="modal-content">
          <img src="img/Menu-Dessert/3.jpg" alt="Gelato">
          <div class="makanan-content">
            <h3>Gelato</h3>
            <p>Gelato adalah es krim khas dari negara Italia. Nama gelato berasal dari bahasa Italia yang artinya "beku". Gelato terbuat dari bahan utama seperti susu, krim, dan gula. Kemudian diberi tambahan variasi rasa mulai dari buah-buahan, kacang, dan bahan perasa lainnya.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Modal Box Dessert end -->
    <!-- Modal Box Item Detail end -->
    
    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

<!-- My Javascript -->
    <script src="js/script.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var navbar = document.querySelector('.navbar-nav');

        // Mendeteksi perubahan di bagian halaman
        document.addEventListener('scroll', function() {
            var currentSection = null;

            // Mendeteksi elemen yang saat ini terlihat di jendela tampilan
            document.querySelectorAll('.navbar-nav a').forEach(function(link) {
                var section = document.querySelector(link.getAttribute('href'));
                var rect = section.getBoundingClientRect();

                if (rect.top <= 10 && rect.bottom >= 10) {
                    currentSection = link;
                }
            });

            // Menghapus kelas "active" dari semua tautan
            document.querySelectorAll('.navbar-nav a').forEach(function(link) {
                link.classList.remove('active');
            });

            // Menambahkan kelas "active" pada tautan yang sesuai dengan bagian yang terlihat
            if (currentSection) {
                currentSection.classList.add('active');
            }
        });
    });
</script>

  </body>
</html>
