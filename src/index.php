
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SMP Budi Cendekia Islamic School</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-purple-600 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold text-lg">BC</span>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-blue-700">SMP Budi Cendekia</h1>
                        <p class="text-sm text-blue-600">Islamic School</p>
                    </div>
                </div>
                <nav class="hidden md:flex space-x-6 items-center">
                    <a href="#beranda" class="text-gray-700 hover:text-blue-600 font-medium">Beranda</a>
                    <a href="#informasi" class="text-gray-700 hover:text-blue-600 font-medium">Informasi</a>
                    <a href="#persyaratan" class="text-gray-700 hover:text-blue-600 font-medium">Persyaratan</a>
                    <a href="#kontak" class="text-gray-700 hover:text-blue-600 font-medium">Kontak</a>
                    <div class="flex gap-2">
                        <button onclick="showLoginForm()" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 font-medium">Login</button>
                        <!-- <button onclick="showAdminLogin()" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 font-medium">Admin</button> -->
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="beranda" class="hero-pattern islamic-pattern py-20">
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-5xl font-bold text-white mb-6">
                    Penerimaan Peserta Didik Baru
                </h2>
                <h3 class="text-3xl font-semibold text-blue-100 mb-8">
                    SMP Budi Cendekia Islamic School
                </h3>
                <p class="text-xl text-blue-200 mb-10 leading-relaxed">
                    Bergabunglah dengan keluarga besar Budi Cendekia Islamic School. 
                    Wujudkan impian pendidikan berkualitas dengan nilai-nilai Islami yang kuat.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button onclick="scrollToSection('informasi')" class="bg-white text-blue-600 px-8 py-4 rounded-full font-semibold hover:bg-blue-50 transition duration-300 shadow-lg">
                        📋 Lihat Informasi PPDB
                    </button>
                    <button onclick="showRegistrationForm()" class="bg-green-500 text-white px-8 py-4 rounded-full font-semibold hover:bg-green-600 transition duration-300 shadow-lg">
                        ✍️ Daftar Sekarang
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Informasi PPDB -->
    <section id="informasi" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Informasi PPDB 2026/2027</h2>
                <p class="text-gray-600 text-lg">Jadwal dan informasi penting penerimaan peserta didik baru</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Jadwal Pendaftaran -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-2xl card-hover">
                    <div class="text-blue-600 text-4xl mb-4">📅</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Jadwal Pendaftaran</h3>
                    <div class="space-y-2 text-gray-700">
                        <p><strong>Gelombang 1:</strong> 1 Januari - 28 Februari 2026</p>
                        <p><strong>Gelombang 2:</strong> 1 Maret - 30 April 2026</p>
                        <p><strong>Gelombang 3:</strong> 1 Mei - 15 Juni 2026</p>
                    </div>
                </div>

                <!-- Biaya Pendaftaran -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-2xl card-hover">
                    <div class="text-green-600 text-4xl mb-4">💰</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Biaya Pendaftaran</h3>
                    <div class="space-y-2 text-gray-700">
                        <p><strong>Formulir:</strong> Rp 150.000</p>
                        <p><strong>Tes Masuk:</strong> Rp 200.000</p>
                        <p class="text-green-600 font-semibold">Total: Rp 350.000</p>
                    </div>
                </div>

                <!-- Kuota Siswa -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-2xl card-hover">
                    <div class="text-purple-600 text-4xl mb-4">👥</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Kuota Penerimaan</h3>
                    <div class="space-y-2 text-gray-700">
                        <p><strong>Total Kuota:</strong> 200 siswa</p>
                        <p><strong>Tersedia:</strong> 7 kelas</p>
                        <p class="text-purple-600 font-semibold">Tahun Ajaran 2026/2027</p>
                    </div>
                </div>

                <!-- Jumlah Pendaftar -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-8 rounded-2xl card-hover">
                    <div class="text-orange-600 text-4xl mb-4">📊</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Pendaftar Terkini</h3>
                    <div class="space-y-2 text-gray-700">
                        <p><strong>Sudah Mendaftar:</strong> 132 siswa</p>
                        <p><strong>Sisa Kuota:</strong> 68 siswa</p>
                        <p class="text-orange-600 font-semibold">Buruan Daftar!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Persyaratan -->
    <section id="persyaratan" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Persyaratan Pendaftaran</h2>
                <p class="text-gray-600 text-lg">Dokumen yang harus disiapkan untuk mendaftar</p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Persyaratan Umum -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                            📋 Persyaratan Umum
                        </h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-green-500 mr-3">✓</span>
                                Lulusan SD/MI atau sederajat
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-3">✓</span>
                                Fotokopi ijazah SD/MI yang telah dilegalisir
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-3">✓</span>
                                Fotokopi SKHUN yang telah dilegalisir
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-3">✓</span>
                                Fotokopi akta kelahiran
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-3">✓</span>
                                Fotokopi kartu keluarga
                            </li>
                        </ul>
                    </div>

                    <!-- Dokumen Tambahan -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                            📄 Dokumen Tambahan
                        </h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-blue-500 mr-3">✓</span>
                                Pas foto 3x4 sebanyak 4 lembar
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-500 mr-3">✓</span>
                                Fotokopi KTP orang tua/wali
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-500 mr-3">✓</span>
                                Surat keterangan sehat dari dokter
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-500 mr-3">✓</span>
                                Surat keterangan berkelakuan baik
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-500 mr-3">✓</span>
                                Fotokopi rapor kelas 4, 5, dan 6
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Alur Pendaftaran -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Alur Pendaftaran</h2>
                <p class="text-gray-600 text-lg">Langkah-langkah mudah untuk mendaftar di SMP Budi Cendekia</p>
            </div>

            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-500 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">1</div>
                        <h3 class="font-bold text-gray-800 mb-2">Daftar Online</h3>
                        <p class="text-gray-600 text-sm">Isi formulir pendaftaran online dan upload dokumen</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-500 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">2</div>
                        <h3 class="font-bold text-gray-800 mb-2">Bayar Biaya</h3>
                        <p class="text-gray-600 text-sm">Lakukan pembayaran biaya pendaftaran</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-500 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">3</div>
                        <h3 class="font-bold text-gray-800 mb-2">Tes Masuk</h3>
                        <p class="text-gray-600 text-sm">Ikuti tes akademik dan wawancara</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-orange-500 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">4</div>
                        <h3 class="font-bold text-gray-800 mb-2">Pengumuman</h3>
                        <p class="text-gray-600 text-sm">Lihat hasil seleksi dan daftar ulang</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="kontak" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
                <p class="text-gray-600 text-lg">Ada pertanyaan? Jangan ragu untuk menghubungi kami</p>
            </div>

            <div class="max-w-4xl mx-auto grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                    <div class="text-blue-600 text-4xl mb-4">📍</div>
                    <h3 class="font-bold text-gray-800 mb-2">Alamat</h3>
                    <p class="text-gray-600">Jl. Pendidikan No. 123<br>Jakarta Selatan 12345</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                    <div class="text-green-600 text-4xl mb-4">📞</div>
                    <h3 class="font-bold text-gray-800 mb-2">Telepon</h3>
                    <p class="text-gray-600">(021) 1234-5678<br>0812-3456-7890</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                    <div class="text-purple-600 text-4xl mb-4">✉️</div>
                    <h3 class="font-bold text-gray-800 mb-2">Email</h3>
                    <p class="text-gray-600">ppdb@budicendekia.sch.id<br>info@budicendekia.sch.id</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Login -->
    <div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-md w-full">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-gray-800">Login</h2>
                    <button onclick="closeLoginForm()" class="text-gray-500 hover:text-gray-700 text-2xl">×</button>
                </div>
                
                <form id="adminLoginForm" method="POST" action="login.php" ">
                     <input type="hidden" name="role" value="siswa">
                    <div class="space-y-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Username</label>
                            <input type="text" name="username" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Password</label>
                            <input type="password" name="password" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <button type="submit" class="w-full px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700 font-semibold">
                            Login Siswa
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Admin Login -->
    <div id="adminLoginModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-md w-full">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-purple-800">Admin Login</h2>
                    <button onclick="closeAdminLogin()" class="text-gray-500 hover:text-gray-700 text-2xl">×</button>
                </div>
                <form id="adminLoginForm" method="POST" action="login.php" ">
                    <input type="hidden" name="role" value="admin">
                    <div class="space-y-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Username</label>
                            <input type="text" name="username" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Password</label>
                            <input type="password" name="password" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <button type="submit" class="w-full px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700 font-semibold">
                            Login Admin
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Profil -->
    <div id="editProfileModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-gray-800">Edit Profil</h2>
                    <button onclick="closeEditProfile()" class="text-gray-500 hover:text-gray-700 text-2xl">×</button>
                </div>
                
                <form id="editProfileForm" onsubmit="submitEditProfile(event)">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Nama Lengkap *</label>
                            <input type="text" id="editNama" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">NISN *</label>
                            <input type="text" id="editNISN" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Tempat Lahir *</label>
                            <input type="text" id="editTempatLahir" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Tanggal Lahir *</label>
                            <input type="date" id="editTanggalLahir" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Jenis Kelamin *</label>
                            <select id="editJenisKelamin" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Asal Sekolah *</label>
                            <input type="text" id="editAsalSekolah" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-gray-700 font-semibold mb-2">Alamat Lengkap *</label>
                            <textarea id="editAlamat" required rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">No. Telepon *</label>
                            <input type="tel" id="editTelepon" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Nama Orang Tua/Wali *</label>
                            <input type="text" id="editNamaOrtu" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                    
                    <div class="mt-8 flex gap-4">
                        <button type="button" onclick="closeEditProfile()" class="flex-1 px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 font-semibold">
                            Batal
                        </button>
                        <button type="submit" class="flex-1 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-semibold">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Formulir Pendaftaran -->
    <div id="registrationModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold text-gray-800">Formulir Pendaftaran</h2>
                    <button onclick="closeRegistrationForm()" class="text-gray-500 hover:text-gray-700 text-2xl">×</button>
                </div>
                
                <form id="registrationForm" onsubmit="submitRegistration(event)">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Nama Lengkap *</label>
                            <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">NISN *</label>
                            <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Tempat Lahir *</label>
                            <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Tanggal Lahir *</label>
                            <input type="date" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Jenis Kelamin *</label>
                            <select required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Asal Sekolah *</label>
                            <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-gray-700 font-semibold mb-2">Alamat Lengkap *</label>
                            <textarea required rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Nama Orang Tua/Wali *</label>
                            <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">No. Telepon *</label>
                            <input type="tel" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <div class="md:col-span-2">
                            <h4 class="text-lg font-bold text-gray-800 mb-4 border-t pt-6">Informasi Akun Login</h4>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Username *</label>
                            <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Masukkan username untuk login">
                            <p class="text-sm text-gray-500 mt-1">Username akan digunakan untuk login ke sistem PPDB</p>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Password *</label>
                            <input type="password" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Minimal 6 karakter">
                            <p class="text-sm text-gray-500 mt-1">Password minimal 6 karakter</p>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-gray-700 font-semibold mb-2">Konfirmasi Password *</label>
                            <input type="password" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Ulangi password">
                        </div>
                    </div>
                    
                    <div class="mt-8 flex gap-4">
                        <button type="button" onclick="closeRegistrationForm()" class="flex-1 px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 font-semibold">
                            Batal
                        </button>
                        <button type="submit" class="flex-1 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-semibold">
                            Daftar Sekarang
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Admin Dashboard (Hidden by default) -->
    <div id="adminDashboard" class="hidden">
        <div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-8">
            <div class="container mx-auto px-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-3xl font-bold">Dashboard Admin PPDB</h1>
                        <p class="text-purple-100">Selamat datang, Administrator</p>
                    </div>
                    <button onclick="adminLogout()" class="bg-white text-purple-600 px-4 py-2 rounded-lg hover:bg-purple-50 font-medium">
                        Logout
                    </button>
                </div>
            </div>
        </div>

        <!-- Admin Navigation -->
        <div class="bg-white border-b">
            <div class="container mx-auto px-6">
                <nav class="flex space-x-8">
                    <button onclick="showAdminSection('verification')" id="verificationTab" class="py-4 px-2 border-b-2 border-purple-600 text-purple-600 font-medium">
                        Verifikasi Pembayaran
                    </button>
                    <button onclick="showAdminSection('students')" id="studentsTab" class="py-4 px-2 border-b-2 border-transparent text-gray-500 hover:text-gray-700 font-medium">
                        Data Pendaftar
                    </button>
                    <button onclick="showAdminSection('password-reset')" id="passwordResetTab" class="py-4 px-2 border-b-2 border-transparent text-gray-500 hover:text-gray-700 font-medium">
                        Reset Password
                    </button>
                </nav>
            </div>
        </div>

        <div class="container mx-auto px-6 py-8">
            <!-- Statistics Cards -->
            <div class="grid md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <div class="flex items-center">
                        <div class="text-blue-600 text-3xl mr-4">👥</div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800">132</h3>
                            <p class="text-gray-600">Total Pendaftar</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <div class="flex items-center">
                        <div class="text-yellow-600 text-3xl mr-4">⏳</div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800">45</h3>
                            <p class="text-gray-600">Menunggu Verifikasi</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <div class="flex items-center">
                        <div class="text-green-600 text-3xl mr-4">✅</div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800">87</h3>
                            <p class="text-gray-600">Terverifikasi</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <div class="flex items-center">
                        <div class="text-red-600 text-3xl mr-4">❌</div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800">0</h3>
                            <p class="text-gray-600">Ditolak</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Verification Section -->
            <div id="adminVerificationSection" class="admin-section">
                <div class="bg-white rounded-2xl shadow-lg">
                    <div class="p-6 border-b border-gray-200">
                        <h2 class="text-2xl font-bold text-gray-800">Antrian Verifikasi Pembayaran</h2>
                        <p class="text-gray-600">Daftar siswa yang menunggu verifikasi pembayaran untuk generate akun tes masuk</p>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">No. Pendaftaran</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Nama Siswa</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Tanggal Daftar</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Jumlah Bayar</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Bukti Pembayaran</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Status</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200" id="verificationQueue">
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900">PPDB2026001</td>
                                    <td class="px-6 py-4">
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Ahmad Rizki Pratama</div>
                                            <div class="text-sm text-gray-500">NISN: 1234567890</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-900">15 Jan 2026</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">Rp 350.000</td>
                                    <td class="px-6 py-4">
                                        <button onclick="viewPaymentProof('PPDB2026001')" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                            Lihat Bukti
                                        </button>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Menunggu Verifikasi
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex gap-2">
                                            <button onclick="approvePayment('PPDB2026001')" class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700">
                                                Setujui
                                            </button>
                                            <button onclick="rejectPayment('PPDB2026001')" class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700">
                                                Tolak
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900">PPDB2026002</td>
                                    <td class="px-6 py-4">
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Siti Nurhaliza</div>
                                            <div class="text-sm text-gray-500">NISN: 0987654321</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-900">16 Jan 2026</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">Rp 350.000</td>
                                    <td class="px-6 py-4">
                                        <button onclick="viewPaymentProof('PPDB2026002')" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                            Lihat Bukti
                                        </button>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Menunggu Verifikasi
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex gap-2">
                                            <button onclick="approvePayment('PPDB2026002')" class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700">
                                                Setujui
                                            </button>
                                            <button onclick="rejectPayment('PPDB2026002')" class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700">
                                                Tolak
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900">PPDB2026003</td>
                                    <td class="px-6 py-4">
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Muhammad Fajar</div>
                                            <div class="text-sm text-gray-500">NISN: 1122334455</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-900">17 Jan 2026</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">Rp 350.000</td>
                                    <td class="px-6 py-4">
                                        <button onclick="viewPaymentProof('PPDB2026003')" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                            Lihat Bukti
                                        </button>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Menunggu Verifikasi
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex gap-2">
                                            <button onclick="approvePayment('PPDB2026003')" class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700">
                                                Setujui
                                            </button>
                                            <button onclick="rejectPayment('PPDB2026003')" class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700">
                                                Tolak
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Students Data Section -->
            <div id="adminStudentsSection" class="admin-section hidden">
                <div class="bg-white rounded-2xl shadow-lg">
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex justify-between items-center">
                            <div>
                                <h2 class="text-2xl font-bold text-gray-800">Data Pendaftar PPDB</h2>
                                <p class="text-gray-600">Daftar lengkap semua calon siswa yang telah mendaftar</p>
                            </div>
                            <div class="flex gap-4">
                                <input type="text" placeholder="Cari nama atau NISN..." class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent" id="studentSearch">
                                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent" id="statusFilter">
                                    <option value="">Semua Status</option>
                                    <option value="pending">Menunggu Verifikasi</option>
                                    <option value="verified">Terverifikasi</option>
                                    <option value="rejected">Ditolak</option>
                                </select>
                                <button onclick="downloadAllStudentData()" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 font-medium flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    Download Data
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">No. Pendaftaran</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Nama Lengkap</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">NISN</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Asal Sekolah</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Tanggal Daftar</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Status</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200" id="studentsTable">
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900">PPDB2026001</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">Ahmad Rizki Pratama</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">1234567890</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">SD Negeri 01 Jakarta</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">15 Jan 2026</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Menunggu Verifikasi
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button onclick="viewStudentProfile('PPDB2026001')" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                            Lihat Detail
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900">PPDB2026002</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">Siti Nurhaliza</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">0987654321</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">SD Islam Al-Azhar</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">16 Jan 2026</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Menunggu Verifikasi
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button onclick="viewStudentProfile('PPDB2026002')" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                            Lihat Detail
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900">PPDB2026003</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">Muhammad Fajar</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">1122334455</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">SD Negeri 05 Bogor</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">17 Jan 2026</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Menunggu Verifikasi
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button onclick="viewStudentProfile('PPDB2026003')" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                            Lihat Detail
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900">PPDB2026004</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">Aisyah Putri</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">2233445566</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">SD Muhammadiyah 1</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">18 Jan 2026</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                            Terverifikasi
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button onclick="viewStudentProfile('PPDB2026004')" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                            Lihat Detail
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900">PPDB2026005</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">Budi Santoso</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">3344556677</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">SD Negeri 12 Depok</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">19 Jan 2026</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                            Terverifikasi
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button onclick="viewStudentProfile('PPDB2026005')" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                            Lihat Detail
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Password Reset Section -->
            <div id="adminPasswordResetSection" class="admin-section hidden">
                <div class="bg-white rounded-2xl shadow-lg">
                    <div class="p-6 border-b border-gray-200">
                        <h2 class="text-2xl font-bold text-gray-800">Reset Password Siswa</h2>
                        <p class="text-gray-600">Kelola reset password untuk siswa yang lupa password</p>
                    </div>
                    
                    <div class="p-6">
                        <!-- Search Student -->
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Cari Siswa</h3>
                            <div class="flex gap-4">
                                <input type="text" placeholder="Masukkan No. Pendaftaran atau NISN..." class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent" id="passwordResetSearch">
                                <button onclick="searchStudentForReset()" class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 font-medium">
                                    Cari Siswa
                                </button>
                            </div>
                        </div>

                        <!-- Search Results -->
                        <div id="passwordResetResults" class="hidden">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Hasil Pencarian</h3>
                            <div class="bg-gray-50 rounded-lg p-6 mb-6">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-800" id="resetStudentName">Ahmad Rizki Pratama</h4>
                                        <p class="text-gray-600">No. Pendaftaran: <span id="resetStudentReg">PPDB2026001</span></p>
                                        <p class="text-gray-600">NISN: <span id="resetStudentNISN">1234567890</span></p>
                                        <p class="text-gray-600">Username: <span id="resetStudentUsername">ahmad_rizki2012</span></p>
                                    </div>
                                    <div class="text-right">
                                        <button onclick="generateNewPassword()" class="bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700 font-medium">
                                            🔄 Generate Password Baru
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Password Reset History -->
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Riwayat Reset Password</h3>
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Tanggal</th>
                                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">No. Pendaftaran</th>
                                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Nama Siswa</th>
                                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Username</th>
                                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Password Baru</th>
                                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Admin</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200" id="passwordResetHistory">
                                        <tr>
                                            <td class="px-6 py-4 text-sm text-gray-900">20 Jan 2026 14:30</td>
                                            <td class="px-6 py-4 text-sm text-gray-900">PPDB2026007</td>
                                            <td class="px-6 py-4 text-sm text-gray-900">Dewi Sartika</td>
                                            <td class="px-6 py-4 text-sm text-gray-900">dewi_sartika2012</td>
                                            <td class="px-6 py-4 text-sm font-mono text-gray-900">RESET789012</td>
                                            <td class="px-6 py-4 text-sm text-gray-900">admin</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 text-sm text-gray-900">19 Jan 2026 10:15</td>
                                            <td class="px-6 py-4 text-sm text-gray-900">PPDB2026012</td>
                                            <td class="px-6 py-4 text-sm text-gray-900">Rafi Maulana</td>
                                            <td class="px-6 py-4 text-sm text-gray-900">rafi_maulana2012</td>
                                            <td class="px-6 py-4 text-sm font-mono text-gray-900">RESET456789</td>
                                            <td class="px-6 py-4 text-sm text-gray-900">admin</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Payment Proof Viewer -->
    <div id="paymentProofModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Bukti Pembayaran</h2>
                    <button onclick="closePaymentProof()" class="text-gray-500 hover:text-gray-700 text-2xl">×</button>
                </div>
                
                <div id="paymentProofContent">
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Detail Pembayaran</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="grid grid-cols-2 gap-4 text-sm">
                                <div>
                                    <span class="text-gray-600">No. Pendaftaran:</span>
                                    <span class="font-semibold ml-2" id="proofRegNumber">PPDB2026001</span>
                                </div>
                                <div>
                                    <span class="text-gray-600">Nama Siswa:</span>
                                    <span class="font-semibold ml-2" id="proofStudentName">Ahmad Rizki Pratama</span>
                                </div>
                                <div>
                                    <span class="text-gray-600">Jumlah:</span>
                                    <span class="font-semibold ml-2">Rp 350.000</span>
                                </div>
                                <div>
                                    <span class="text-gray-600">Tanggal Upload:</span>
                                    <span class="font-semibold ml-2">18 Jan 2026</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Bukti Transfer</h3>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center">
                            <div class="text-gray-400 text-4xl mb-4">🧾</div>
                            <p class="text-gray-600">Bukti pembayaran akan ditampilkan di sini</p>
                            <p class="text-sm text-gray-500 mt-2">Format: JPG, PNG, PDF</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-4">
                        <button onclick="approvePaymentFromModal()" class="flex-1 bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 font-semibold">
                            ✅ Setujui Pembayaran
                        </button>
                        <button onclick="rejectPaymentFromModal()" class="flex-1 bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700 font-semibold">
                            ❌ Tolak Pembayaran
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Student Profile Viewer -->
    <div id="studentProfileModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Profil Lengkap Siswa</h2>
                    <button onclick="closeStudentProfile()" class="text-gray-500 hover:text-gray-700 text-2xl">×</button>
                </div>
                
                <div id="studentProfileContent">
                    <!-- Student Header -->
                    <div class="flex items-center mb-8 bg-gradient-to-r from-blue-50 to-purple-50 p-6 rounded-lg">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-purple-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mr-6">
                            AR
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800" id="profileStudentName">Ahmad Rizki Pratama</h3>
                            <p class="text-gray-600">No. Pendaftaran: <span id="profileRegNumber">PPDB2026001</span></p>
                            <p class="text-gray-600">NISN: <span id="profileNISN">1234567890</span></p>
                            <div class="mt-2">
                                <span class="inline-flex px-3 py-1 text-sm font-semibold rounded-full bg-yellow-100 text-yellow-800" id="profileStatus">
                                    Menunggu Verifikasi
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Data Pribadi -->
                        <div class="bg-white border rounded-lg p-6">
                            <h4 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Data Pribadi</h4>
                            <div class="space-y-3">
                                <div>
                                    <label class="block text-gray-600 text-sm font-medium">Nama Lengkap</label>
                                    <p class="text-gray-800 font-semibold" id="profileFullName">Ahmad Rizki Pratama</p>
                                </div>
                                <div>
                                    <label class="block text-gray-600 text-sm font-medium">Tempat, Tanggal Lahir</label>
                                    <p class="text-gray-800 font-semibold" id="profileBirthPlace">Jakarta, 15 Mei 2012</p>
                                </div>
                                <div>
                                    <label class="block text-gray-600 text-sm font-medium">Jenis Kelamin</label>
                                    <p class="text-gray-800 font-semibold" id="profileGender">Laki-laki</p>
                                </div>
                                <div>
                                    <label class="block text-gray-600 text-sm font-medium">Asal Sekolah</label>
                                    <p class="text-gray-800 font-semibold" id="profileSchool">SD Negeri 01 Jakarta</p>
                                </div>
                            </div>
                        </div>

                        <!-- Data Kontak & Orang Tua -->
                        <div class="bg-white border rounded-lg p-6">
                            <h4 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Kontak & Orang Tua</h4>
                            <div class="space-y-3">
                                <div>
                                    <label class="block text-gray-600 text-sm font-medium">Alamat Lengkap</label>
                                    <p class="text-gray-800 font-semibold" id="profileAddress">Jl. Merdeka No. 123, RT 05/RW 02, Kelurahan Menteng, Jakarta Pusat 10310</p>
                                </div>
                                <div>
                                    <label class="block text-gray-600 text-sm font-medium">No. Telepon</label>
                                    <p class="text-gray-800 font-semibold" id="profilePhone">081234567890</p>
                                </div>
                                <div>
                                    <label class="block text-gray-600 text-sm font-medium">Nama Orang Tua/Wali</label>
                                    <p class="text-gray-800 font-semibold" id="profileParent">Budi Pratama</p>
                                </div>
                            </div>
                        </div>

                        <!-- Informasi Akun -->
                        <div class="bg-white border rounded-lg p-6">
                            <h4 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Informasi Akun</h4>
                            <div class="space-y-3">
                                <div>
                                    <label class="block text-gray-600 text-sm font-medium">Username</label>
                                    <p class="text-gray-800 font-semibold" id="profileUsername">ahmad_rizki2012</p>
                                </div>
                                <div>
                                    <label class="block text-gray-600 text-sm font-medium">Tanggal Pendaftaran</label>
                                    <p class="text-gray-800 font-semibold" id="profileRegDate">15 Januari 2026</p>
                                </div>
                                <div>
                                    <label class="block text-gray-600 text-sm font-medium">Status Pembayaran</label>
                                    <p class="text-gray-800 font-semibold" id="profilePaymentStatus">Menunggu Verifikasi</p>
                                </div>
                            </div>
                        </div>

                        <!-- Dokumen -->
                        <div class="bg-white border rounded-lg p-6">
                            <h4 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Status Dokumen</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Ijazah SD/MI</span>
                                    <span class="text-green-600 font-semibold">✅ Uploaded</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Kartu Keluarga</span>
                                    <span class="text-green-600 font-semibold">✅ Uploaded</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Akta Kelahiran</span>
                                    <span class="text-yellow-600 font-semibold">⏳ Pending</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Pas Foto</span>
                                    <span class="text-green-600 font-semibold">✅ Uploaded</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 flex gap-4 justify-end">
                        <button onclick="resetStudentPassword()" class="bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700 font-medium">
                            🔄 Reset Password
                        </button>
                        <button onclick="closeStudentProfile()" class="bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700 font-medium">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dashboard (Hidden by default) -->
    <div id="dashboard" class="hidden">
        <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-8">
            <div class="container mx-auto px-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-3xl font-bold">Dashboard PPDB</h1>
                        <p class="text-blue-100">Selamat datang, <span id="userName">Calon Siswa</span></p>
                    </div>
                    <button onclick="logout()" class="bg-white text-blue-600 px-4 py-2 rounded-lg hover:bg-blue-50 font-medium">
                        Logout
                    </button>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-6 py-8">
            <!-- Status Verifikasi Section -->
            <div class="bg-gradient-to-r from-blue-50 to-purple-50 p-8 rounded-2xl shadow-lg mb-8 border-l-4 border-blue-500">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">Status Verifikasi PPDB</h2>
                        <p class="text-gray-600">No. Pendaftaran: <span class="font-semibold text-blue-600">PPDB2026001</span></p>
                    </div>
                    <div class="text-right">
                        <div id="overallStatus" class="inline-flex px-4 py-2 text-sm font-bold rounded-full bg-yellow-100 text-yellow-800 border border-yellow-300">
                            ⏳ MENUNGGU VERIFIKASI
                        </div>
                    </div>
                </div>

                <!-- Progress Steps -->
                <div class="grid md:grid-cols-4 gap-4 mb-6">
                    <!-- Step 1: Pendaftaran -->
                    <div class="bg-white p-4 rounded-lg border-2 border-green-200">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">✓</div>
                            <h3 class="font-bold text-green-700">Pendaftaran</h3>
                        </div>
                        <p class="text-sm text-green-600 font-medium">Selesai</p>
                        <p class="text-xs text-gray-500">15 Jan 2026</p>
                    </div>

                    <!-- Step 2: Upload Dokumen -->
                    <div class="bg-white p-4 rounded-lg border-2 border-yellow-200">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 bg-yellow-500 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">2</div>
                            <h3 class="font-bold text-yellow-700">Upload Dokumen</h3>
                        </div>
                        <p class="text-sm text-yellow-600 font-medium">Sebagian</p>
                        <p class="text-xs text-gray-500">3 dari 5 dokumen</p>
                    </div>

                    <!-- Step 3: Pembayaran -->
                    <div class="bg-white p-4 rounded-lg border-2 border-yellow-200">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 bg-yellow-500 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">⏳</div>
                            <h3 class="font-bold text-yellow-700">Verifikasi Bayar</h3>
                        </div>
                        <p class="text-sm text-yellow-600 font-medium">Menunggu</p>
                        <p class="text-xs text-gray-500">Bukti sudah diupload</p>
                    </div>

                    <!-- Step 4: Akun Tes -->
                    <div class="bg-white p-4 rounded-lg border-2 border-gray-200">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 bg-gray-400 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">4</div>
                            <h3 class="font-bold text-gray-500">Akun Tes Masuk</h3>
                        </div>
                        <p class="text-sm text-gray-500 font-medium">Belum Tersedia</p>
                        <p class="text-xs text-gray-400">Menunggu verifikasi</p>
                    </div>
                </div>

                <!-- Action Required -->
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                    <div class="flex items-start">
                        <div class="text-yellow-600 text-xl mr-3">⚠️</div>
                        <div>
                            <h4 class="font-bold text-yellow-800 mb-2">Tindakan Diperlukan</h4>
                            <ul class="text-sm text-yellow-700 space-y-1">
                                <li>• Lengkapi upload dokumen yang masih kurang (Akta Kelahiran, Rapor)</li>
                                <li>• Menunggu admin memverifikasi bukti pembayaran Anda</li>
                                <li>• Akun tes masuk akan dikirim setelah pembayaran diverifikasi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Diri Section - Moved to Top -->
            <div class="bg-white p-8 rounded-2xl shadow-lg mb-8">
                <div class="flex items-center mb-8">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-purple-600 rounded-full flex items-center justify-center text-white text-2xl font-bold mr-6">
                        AR
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800">Ahmad Rizki Pratama</h2>
                        <p class="text-gray-600">Calon Siswa SMP Budi Cendekia</p>
                        <p class="text-sm text-green-600 font-semibold">Status: Terdaftar</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Data Pribadi -->
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">Data Pribadi</h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-gray-600 text-sm font-medium mb-1">Nama Lengkap</label>
                                <p class="text-gray-800 font-semibold">Ahmad Rizki Pratama</p>
                            </div>
                            <div>
                                <label class="block text-gray-600 text-sm font-medium mb-1">NISN</label>
                                <p class="text-gray-800 font-semibold">1234567890</p>
                            </div>
                            <div>
                                <label class="block text-gray-600 text-sm font-medium mb-1">Tempat, Tanggal Lahir</label>
                                <p class="text-gray-800 font-semibold">Jakarta, 15 Mei 2012</p>
                            </div>
                            <div>
                                <label class="block text-gray-600 text-sm font-medium mb-1">Jenis Kelamin</label>
                                <p class="text-gray-800 font-semibold">Laki-laki</p>
                            </div>
                            <div>
                                <label class="block text-gray-600 text-sm font-medium mb-1">Asal Sekolah</label>
                                <p class="text-gray-800 font-semibold">SD Negeri 01 Jakarta</p>
                            </div>
                        </div>
                    </div>

                    <!-- Data Kontak & Orang Tua -->
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">Kontak & Orang Tua</h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-gray-600 text-sm font-medium mb-1">Alamat Lengkap</label>
                                <p class="text-gray-800 font-semibold">Jl. Merdeka No. 123, RT 05/RW 02, Kelurahan Menteng, Jakarta Pusat 10310</p>
                            </div>
                            <div>
                                <label class="block text-gray-600 text-sm font-medium mb-1">No. Telepon</label>
                                <p class="text-gray-800 font-semibold">081234567890</p>
                            </div>
                            <div>
                                <label class="block text-gray-600 text-sm font-medium mb-1">Nama Orang Tua/Wali</label>
                                <p class="text-gray-800 font-semibold">Budi Pratama</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informasi Akun -->
                <div class="mt-8 pt-6 border-t">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Informasi Akun</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-600 text-sm font-medium mb-1">Username</label>
                            <p class="text-gray-800 font-semibold">ahmad_rizki2012</p>
                        </div>
                        <div>
                            <label class="block text-gray-600 text-sm font-medium mb-1">Tanggal Pendaftaran</label>
                            <p class="text-gray-800 font-semibold">15 Januari 2026</p>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex gap-4">
                    <button onclick="editProfile()" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 font-semibold">
                        Edit Profil
                    </button>
                    <button onclick="showSection('documents')" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 font-semibold">
                        Upload Dokumen
                    </button>
                    <button onclick="testVerificationUpdate()" class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 font-semibold">
                        🧪 Test Verifikasi (Demo)
                    </button>
                </div>
            </div>



            <!-- Menu Dashboard -->
            <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <button onclick="showSection('profile')" class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow text-left">
                    <div class="text-blue-600 text-3xl mb-3">👤</div>
                    <h3 class="font-bold text-gray-800 mb-2">Profil Saya</h3>
                    <p class="text-gray-600 text-sm">Lihat dan edit informasi pribadi</p>
                </button>

                <button onclick="showSection('documents')" class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow text-left">
                    <div class="text-green-600 text-3xl mb-3">📋</div>
                    <h3 class="font-bold text-gray-800 mb-2">Upload Dokumen</h3>
                    <p class="text-gray-600 text-sm">Upload berkas persyaratan</p>
                </button>

                <button onclick="showSection('payment')" class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow text-left">
                    <div class="text-purple-600 text-3xl mb-3">💳</div>
                    <h3 class="font-bold text-gray-800 mb-2">Pembayaran</h3>
                    <p class="text-gray-600 text-sm">Status dan riwayat pembayaran</p>
                </button>

                <button onclick="showSection('announcement')" class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow text-left">
                    <div class="text-red-600 text-3xl mb-3">📢</div>
                    <h3 class="font-bold text-gray-800 mb-2">Pengumuman</h3>
                    <p class="text-gray-600 text-sm">Info terbaru dari sekolah</p>
                </button>
            </div>

            <!-- Content Sections -->
            <div id="dashboardContent" class="mt-8">
                <!-- Profile Section - Now Empty since data is shown at top -->
                <div id="profileSection" class="hidden">
                    <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
                        <div class="text-blue-600 text-6xl mb-4">👤</div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Data Profil Anda</h2>
                        <p class="text-gray-600 mb-6">Data profil lengkap Anda sudah ditampilkan di bagian atas dashboard. Gunakan tombol "Edit Profil" jika ada perubahan yang diperlukan.</p>
                        <div class="flex gap-4 justify-center">
                            <button onclick="editProfile()" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 font-semibold">
                                Edit Profil
                            </button>
                            <button onclick="showSection('documents')" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 font-semibold">
                                Upload Dokumen
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Documents Section -->
                <div id="documentsSection" class="hidden">
                    <div class="bg-white p-8 rounded-2xl shadow-lg">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Upload Dokumen</h2>
                        <div class="space-y-6">
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6">
                                <div class="text-center">
                                    <div class="text-gray-400 text-4xl mb-4">📄</div>
                                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Ijazah SD/MI</h3>
                                    <p class="text-gray-500 mb-4">Upload file PDF atau JPG (Max 2MB)</p>
                                    <input type="file" class="hidden" id="ijazah" accept=".pdf,.jpg,.jpeg,.png">
                                    <label for="ijazah" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 cursor-pointer">
                                        Pilih File
                                    </label>
                                </div>
                            </div>
                            
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6">
                                <div class="text-center">
                                    <div class="text-gray-400 text-4xl mb-4">📄</div>
                                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Kartu Keluarga</h3>
                                    <p class="text-gray-500 mb-4">Upload file PDF atau JPG (Max 2MB)</p>
                                    <input type="file" class="hidden" id="kk" accept=".pdf,.jpg,.jpeg,.png">
                                    <label for="kk" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 cursor-pointer">
                                        Pilih File
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment Section -->
                <div id="paymentSection" class="hidden">
                    <div class="bg-white p-8 rounded-2xl shadow-lg">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Status Pembayaran</h2>
                        <div id="paymentStatusCard" class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 mb-6">
                            <div class="flex items-center">
                                <div class="text-yellow-600 text-2xl mr-4">⏳</div>
                                <div>
                                    <h3 class="font-bold text-yellow-800">Menunggu Verifikasi Admin</h3>
                                    <p class="text-yellow-700">Bukti pembayaran Anda sedang diverifikasi oleh admin. Akun tes masuk akan digenerate setelah pembayaran disetujui.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border rounded-lg p-6">
                            <h3 class="font-bold text-gray-800 mb-4">Informasi Pembayaran</h3>
                            <div class="space-y-2 text-gray-700">
                                <p><strong>Bank:</strong> BCA</p>
                                <p><strong>No. Rekening:</strong> 1234567890</p>
                                <p><strong>Atas Nama:</strong> SMP Budi Cendekia Islamic School</p>
                                <p><strong>Jumlah:</strong> Rp 350.000</p>
                                <p><strong>Kode Unik:</strong> 001 (Ahmad Rizki Pratama)</p>
                            </div>
                            
                            <div class="mt-6">
                                <label class="block text-gray-700 font-semibold mb-2">Upload Bukti Pembayaran</label>
                                <input type="file" class="w-full px-4 py-3 border border-gray-300 rounded-lg" accept=".pdf,.jpg,.jpeg,.png">
                                <button class="mt-4 bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">
                                    Submit Bukti Pembayaran
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Announcement Section -->
                <div id="announcementSection" class="hidden">
                    <div class="bg-white p-8 rounded-2xl shadow-lg">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Pengumuman Terbaru</h2>
                        <div class="space-y-6">
                            <div class="border-l-4 border-blue-500 pl-6 py-4">
                                <h3 class="font-bold text-gray-800 mb-2">Jadwal Tes Masuk Gelombang 1</h3>
                                <p class="text-gray-600 mb-2">Tes masuk untuk gelombang 1 akan dilaksanakan pada tanggal 15 Maret 2026. Pastikan Anda datang tepat waktu.</p>
                                <p class="text-sm text-gray-500">Dipublikasikan: 1 Februari 2026</p>
                            </div>
                            
                            <div class="border-l-4 border-green-500 pl-6 py-4">
                                <h3 class="font-bold text-gray-800 mb-2">Perpanjangan Batas Upload Dokumen</h3>
                                <p class="text-gray-600 mb-2">Batas waktu upload dokumen diperpanjang hingga 10 Maret 2026. Segera lengkapi berkas Anda.</p>
                                <p class="text-sm text-gray-500">Dipublikasikan: 25 Januari 2026</p>
                            </div>
                            
                            <div class="border-l-4 border-purple-500 pl-6 py-4">
                                <h3 class="font-bold text-gray-800 mb-2">Informasi Seragam dan Perlengkapan</h3>
                                <p class="text-gray-600 mb-2">Informasi mengenai seragam dan perlengkapan sekolah akan diumumkan setelah pengumuman hasil seleksi.</p>
                                <p class="text-sm text-gray-500">Dipublikasikan: 20 Januari 2026</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-purple-600 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-lg">BC</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">SMP Budi Cendekia</h3>
                            <p class="text-gray-400">Islamic School</p>
                        </div>
                    </div>
                    <p class="text-gray-400">Membentuk generasi cerdas, berkarakter, dan berakhlak mulia dengan landasan nilai-nilai Islam.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Menu Cepat</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#beranda" class="hover:text-white">Beranda</a></li>
                        <li><a href="#informasi" class="hover:text-white">Informasi PPDB</a></li>
                        <li><a href="#persyaratan" class="hover:text-white">Persyaratan</a></li>
                        <li><a href="#kontak" class="hover:text-white">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Jam Operasional</h4>
                    <div class="text-gray-400 space-y-2">
                        <p>Senin - Jumat: 07:00 - 16:00</p>
                        <p>Sabtu: 07:00 - 12:00</p>
                        <p>Minggu: Tutup</p>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2026 SMP Budi Cendekia Islamic School. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
    <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9879282310a4a620',t:'MTc1OTI5MjMxNC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</body>
</html>
