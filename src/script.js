function scrollToSection(sectionId) {
    document.getElementById(sectionId).scrollIntoView({
        behavior: 'smooth'
    });
}

function showRegistrationForm() {
    document.getElementById('registrationModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeRegistrationForm() {
    document.getElementById('registrationModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function showLoginForm() {
    document.getElementById('loginModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeLoginForm() {
    document.getElementById('loginModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function switchToRegister() {
    closeLoginForm();
    showRegistrationForm();
}

function submitLogin(event) {
    event.preventDefault();
    
    const submitButton = event.target.querySelector('button[type="submit"]');
    const originalText = submitButton.textContent;
    
    submitButton.textContent = 'Memproses...';
    submitButton.disabled = true;
    
    setTimeout(() => {
        closeLoginForm();
        showDashboard();
        submitButton.textContent = originalText;
        submitButton.disabled = false;
    }, 1500);
}

function showDashboard() {
    // Hide main content
    document.querySelector('body > *:not(#dashboard):not(script)').style.display = 'none';
    document.querySelector('header').style.display = 'none';
    document.querySelector('section').style.display = 'none';
    document.querySelector('footer').style.display = 'none';
    
    // Show dashboard - data is now shown at top by default
    document.getElementById('dashboard').classList.remove('hidden');
    
    // Hide all dashboard sections initially since data is shown at top
    document.querySelectorAll('#dashboardContent > div').forEach(section => {
        section.classList.add('hidden');
    });
    
    document.body.style.overflow = 'auto';
}

function logout() {
    // Hide dashboard
    document.getElementById('dashboard').classList.add('hidden');
    
    // Show main content
    document.querySelector('header').style.display = 'block';
    document.querySelector('section').style.display = 'block';
    document.querySelector('footer').style.display = 'block';
    
    // Hide all dashboard sections
    document.querySelectorAll('#dashboardContent > div').forEach(section => {
        section.classList.add('hidden');
    });
    
    alert('Anda telah berhasil logout.');
}

function showSection(sectionName) {
    // Hide all sections
    document.querySelectorAll('#dashboardContent > div').forEach(section => {
        section.classList.add('hidden');
    });
    
    // Show selected section
    document.getElementById(sectionName + 'Section').classList.remove('hidden');
}

function submitRegistration(event) {
    event.preventDefault();
    
    // Simulasi proses pendaftaran
    const submitButton = event.target.querySelector('button[type="submit"]');
    const originalText = submitButton.textContent;
    
    submitButton.textContent = 'Memproses...';
    submitButton.disabled = true;
    
    setTimeout(() => {
        alert('Pendaftaran berhasil dikirim! Tim kami akan menghubungi Anda dalam 1x24 jam untuk konfirmasi dan informasi selanjutnya.');
        closeRegistrationForm();
        document.getElementById('registrationForm').reset();
        submitButton.textContent = originalText;
        submitButton.disabled = false;
    }, 2000);
}

// Smooth scrolling untuk navigasi
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

function editProfile() {
    document.getElementById('editProfileModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
    
    // Pre-fill form with current data
    document.getElementById('editNama').value = 'Ahmad Rizki Pratama';
    document.getElementById('editNISN').value = '1234567890';
    document.getElementById('editTempatLahir').value = 'Jakarta';
    document.getElementById('editTanggalLahir').value = '2012-05-15';
    document.getElementById('editJenisKelamin').value = 'L';
    document.getElementById('editAsalSekolah').value = 'SD Negeri 01 Jakarta';
    document.getElementById('editAlamat').value = 'Jl. Merdeka No. 123, RT 05/RW 02, Kelurahan Menteng, Jakarta Pusat 10310';
    document.getElementById('editTelepon').value = '081234567890';
    document.getElementById('editNamaOrtu').value = 'Budi Pratama';
}

function closeEditProfile() {
    document.getElementById('editProfileModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function submitEditProfile(event) {
    event.preventDefault();
    
    const submitButton = event.target.querySelector('button[type="submit"]');
    const originalText = submitButton.textContent;
    
    submitButton.textContent = 'Menyimpan...';
    submitButton.disabled = true;
    
    // Get updated values
    const updatedData = {
        nama: document.getElementById('editNama').value,
        nisn: document.getElementById('editNISN').value,
        tempatLahir: document.getElementById('editTempatLahir').value,
        tanggalLahir: document.getElementById('editTanggalLahir').value,
        jenisKelamin: document.getElementById('editJenisKelamin').value,
        asalSekolah: document.getElementById('editAsalSekolah').value,
        alamat: document.getElementById('editAlamat').value,
        telepon: document.getElementById('editTelepon').value,
        namaOrtu: document.getElementById('editNamaOrtu').value
    };
    
    setTimeout(() => {
        // Update the profile display
        updateProfileDisplay(updatedData);
        
        closeEditProfile();
        alert('Profil berhasil diperbarui!');
        submitButton.textContent = originalText;
        submitButton.disabled = false;
    }, 1500);
}

function updateProfileDisplay(data) {
    // Update main profile section
    document.querySelector('.text-3xl.font-bold.text-gray-800').textContent = data.nama;
    
    // Update data pribadi section
    const dataPribadi = document.querySelectorAll('#dashboard .space-y-4')[0];
    dataPribadi.children[0].querySelector('p').textContent = data.nama;
    dataPribadi.children[1].querySelector('p').textContent = data.nisn;
    
    // Format tanggal lahir
    const date = new Date(data.tanggalLahir);
    const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                   'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    const formattedDate = `${data.tempatLahir}, ${date.getDate()} ${months[date.getMonth()]} ${date.getFullYear()}`;
    dataPribadi.children[2].querySelector('p').textContent = formattedDate;
    
    dataPribadi.children[3].querySelector('p').textContent = data.jenisKelamin === 'L' ? 'Laki-laki' : 'Perempuan';
    dataPribadi.children[4].querySelector('p').textContent = data.asalSekolah;
    
    // Update kontak & orang tua section
    const dataKontak = document.querySelectorAll('#dashboard .space-y-4')[1];
    dataKontak.children[0].querySelector('p').textContent = data.alamat;
    dataKontak.children[1].querySelector('p').textContent = data.telepon;
    dataKontak.children[2].querySelector('p').textContent = data.namaOrtu;
}

// Admin functions
function showAdminLogin() {
    document.getElementById('adminLoginModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeAdminLogin() {
    document.getElementById('adminLoginModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function submitAdminLogin(event) {
    event.preventDefault();
    
    const form = event.target;
    const username = form.querySelector('input[type="text"]').value;
    const password = form.querySelector('input[type="password"]').value;
    
    const submitButton = form.querySelector('button[type="submit"]');
    const originalText = submitButton.textContent;
    
    // Validate credentials
    if (username !== 'admin' || password !== 'admin123') {
        alert('Username atau password salah!\n\nGunakan:\nUsername: admin\nPassword: admin123');
        return;
    }
    
    submitButton.textContent = 'Memproses...';
    submitButton.disabled = true;
    
    setTimeout(() => {
        closeAdminLogin();
        showAdminDashboard();
        submitButton.textContent = originalText;
        submitButton.disabled = false;
        
        // Clear form
        form.reset();
    }, 1500);
}

function showAdminDashboard() {
    // Hide main content
    document.querySelector('header').style.display = 'none';
    document.querySelectorAll('section').forEach(section => {
        section.style.display = 'none';
    });
    document.querySelector('footer').style.display = 'none';
    
    // Show admin dashboard
    document.getElementById('adminDashboard').classList.remove('hidden');
    
    // Show verification section by default
    showAdminSection('verification');
    
    document.body.style.overflow = 'auto';
}

function adminLogout() {
    // Hide admin dashboard
    document.getElementById('adminDashboard').classList.add('hidden');
    
    // Show main content
    document.querySelector('header').style.display = 'block';
    document.querySelectorAll('section').forEach(section => {
        section.style.display = 'block';
    });
    document.querySelector('footer').style.display = 'block';
    
    alert('Admin berhasil logout.');
}

// Admin section navigation
function showAdminSection(sectionName) {
    // Hide all admin sections
    document.querySelectorAll('.admin-section').forEach(section => {
        section.classList.add('hidden');
    });
    
    // Show selected section
    document.getElementById('admin' + sectionName.charAt(0).toUpperCase() + sectionName.slice(1).replace('-', '') + 'Section').classList.remove('hidden');
    
    // Update tab styles
    document.querySelectorAll('[id$="Tab"]').forEach(tab => {
        tab.className = 'py-4 px-2 border-b-2 border-transparent text-gray-500 hover:text-gray-700 font-medium';
    });
    
    // Activate current tab
    const activeTab = document.getElementById(sectionName.replace('-', '') + 'Tab');
    if (activeTab) {
        activeTab.className = 'py-4 px-2 border-b-2 border-purple-600 text-purple-600 font-medium';
    }
}

// Student profile functions
function viewStudentProfile(regNumber) {
    // Sample student data
    const studentData = {
        'PPDB2026001': {
            name: 'Ahmad Rizki Pratama',
            nisn: '1234567890',
            birthPlace: 'Jakarta, 15 Mei 2012',
            gender: 'Laki-laki',
            school: 'SD Negeri 01 Jakarta',
            address: 'Jl. Merdeka No. 123, RT 05/RW 02, Kelurahan Menteng, Jakarta Pusat 10310',
            phone: '081234567890',
            parent: 'Budi Pratama',
            username: 'ahmad_rizki2012',
            regDate: '15 Januari 2026',
            status: 'Menunggu Verifikasi'
        },
        'PPDB2026002': {
            name: 'Siti Nurhaliza',
            nisn: '0987654321',
            birthPlace: 'Bandung, 20 Maret 2012',
            gender: 'Perempuan',
            school: 'SD Islam Al-Azhar',
            address: 'Jl. Sudirman No. 456, RT 02/RW 05, Kelurahan Senayan, Jakarta Selatan 12190',
            phone: '081987654321',
            parent: 'Hasan Nurdin',
            username: 'siti_nurhaliza2012',
            regDate: '16 Januari 2026',
            status: 'Menunggu Verifikasi'
        },
        'PPDB2026003': {
            name: 'Muhammad Fajar',
            nisn: '1122334455',
            birthPlace: 'Bogor, 10 Juli 2012',
            gender: 'Laki-laki',
            school: 'SD Negeri 05 Bogor',
            address: 'Jl. Raya Bogor No. 789, RT 03/RW 01, Kelurahan Bogor Tengah, Bogor 16121',
            phone: '081122334455',
            parent: 'Agus Setiawan',
            username: 'muhammad_fajar2012',
            regDate: '17 Januari 2026',
            status: 'Menunggu Verifikasi'
        },
        'PPDB2026004': {
            name: 'Aisyah Putri',
            nisn: '2233445566',
            birthPlace: 'Depok, 5 September 2012',
            gender: 'Perempuan',
            school: 'SD Muhammadiyah 1',
            address: 'Jl. Margonda No. 321, RT 01/RW 03, Kelurahan Depok, Depok 16424',
            phone: '082233445566',
            parent: 'Sari Indah',
            username: 'aisyah_putri2012',
            regDate: '18 Januari 2026',
            status: 'Terverifikasi'
        },
        'PPDB2026005': {
            name: 'Budi Santoso',
            nisn: '3344556677',
            birthPlace: 'Tangerang, 12 November 2012',
            gender: 'Laki-laki',
            school: 'SD Negeri 12 Depok',
            address: 'Jl. Kemang No. 654, RT 04/RW 02, Kelurahan Kemang, Tangerang 15144',
            phone: '083344556677',
            parent: 'Wati Sari',
            username: 'budi_santoso2012',
            regDate: '19 Januari 2026',
            status: 'Terverifikasi'
        }
    };
    
    const student = studentData[regNumber];
    if (!student) return;
    
    // Update modal content
    document.getElementById('profileStudentName').textContent = student.name;
    document.getElementById('profileRegNumber').textContent = regNumber;
    document.getElementById('profileNISN').textContent = student.nisn;
    document.getElementById('profileFullName').textContent = student.name;
    document.getElementById('profileBirthPlace').textContent = student.birthPlace;
    document.getElementById('profileGender').textContent = student.gender;
    document.getElementById('profileSchool').textContent = student.school;
    document.getElementById('profileAddress').textContent = student.address;
    document.getElementById('profilePhone').textContent = student.phone;
    document.getElementById('profileParent').textContent = student.parent;
    document.getElementById('profileUsername').textContent = student.username;
    document.getElementById('profileRegDate').textContent = student.regDate;
    document.getElementById('profilePaymentStatus').textContent = student.status;
    
    // Update status badge
    const statusElement = document.getElementById('profileStatus');
    if (student.status === 'Terverifikasi') {
        statusElement.className = 'inline-flex px-3 py-1 text-sm font-semibold rounded-full bg-green-100 text-green-800';
    } else {
        statusElement.className = 'inline-flex px-3 py-1 text-sm font-semibold rounded-full bg-yellow-100 text-yellow-800';
    }
    statusElement.textContent = student.status;
    
    // Update avatar initials
    const initials = student.name.split(' ').map(n => n[0]).join('').substring(0, 2);
    document.querySelector('#studentProfileModal .w-20.h-20').textContent = initials;
    
    // Show modal
    document.getElementById('studentProfileModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeStudentProfile() {
    document.getElementById('studentProfileModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function resetStudentPassword() {
    const regNumber = document.getElementById('profileRegNumber').textContent;
    const studentName = document.getElementById('profileStudentName').textContent;
    
    if (confirm(`Apakah Anda yakin ingin mereset password untuk ${studentName} (${regNumber})?`)) {
        const newPassword = 'RESET' + Math.random().toString(36).substring(2, 8).toUpperCase();
        
        // Add to reset history
        addPasswordResetHistory(regNumber, studentName, newPassword);
        
        alert(`Password berhasil direset!\n\nDetail Login Baru:\nUsername: ${document.getElementById('profileUsername').textContent}\nPassword: ${newPassword}\n\nSilakan berikan informasi ini kepada siswa.`);
        
        closeStudentProfile();
    }
}

// Password reset functions
function searchStudentForReset() {
    const searchTerm = document.getElementById('passwordResetSearch').value.trim();
    
    if (!searchTerm) {
        alert('Masukkan No. Pendaftaran atau NISN untuk mencari siswa.');
        return;
    }
    
    // Sample search - in real app this would query database
    const studentData = {
        'PPDB2026001': { name: 'Ahmad Rizki Pratama', nisn: '1234567890', username: 'ahmad_rizki2012' },
        'PPDB2026002': { name: 'Siti Nurhaliza', nisn: '0987654321', username: 'siti_nurhaliza2012' },
        'PPDB2026003': { name: 'Muhammad Fajar', nisn: '1122334455', username: 'muhammad_fajar2012' }
    };
    
    let foundStudent = null;
    let foundRegNumber = null;
    
    // Search by registration number or NISN
    for (const [regNum, data] of Object.entries(studentData)) {
        if (regNum === searchTerm || data.nisn === searchTerm) {
            foundStudent = data;
            foundRegNumber = regNum;
            break;
        }
    }
    
    if (foundStudent) {
        // Show search results
        document.getElementById('resetStudentName').textContent = foundStudent.name;
        document.getElementById('resetStudentReg').textContent = foundRegNumber;
        document.getElementById('resetStudentNISN').textContent = foundStudent.nisn;
        document.getElementById('resetStudentUsername').textContent = foundStudent.username;
        
        document.getElementById('passwordResetResults').classList.remove('hidden');
    } else {
        alert('Siswa tidak ditemukan. Pastikan No. Pendaftaran atau NISN yang dimasukkan benar.');
        document.getElementById('passwordResetResults').classList.add('hidden');
    }
}

function generateNewPassword() {
    const regNumber = document.getElementById('resetStudentReg').textContent;
    const studentName = document.getElementById('resetStudentName').textContent;
    const username = document.getElementById('resetStudentUsername').textContent;
    
    if (confirm(`Apakah Anda yakin ingin generate password baru untuk ${studentName}?`)) {
        const newPassword = 'RESET' + Math.random().toString(36).substring(2, 8).toUpperCase();
        
        // Add to reset history
        addPasswordResetHistory(regNumber, studentName, newPassword);
        
        alert(`Password baru berhasil digenerate!\n\nDetail Login Baru:\nUsername: ${username}\nPassword: ${newPassword}\n\nSilakan berikan informasi ini kepada siswa.`);
        
        // Clear search results
        document.getElementById('passwordResetResults').classList.add('hidden');
        document.getElementById('passwordResetSearch').value = '';
    }
}

function addPasswordResetHistory(regNumber, studentName, newPassword) {
    const now = new Date();
    const dateStr = now.toLocaleDateString('id-ID', { 
        day: 'numeric', 
        month: 'short', 
        year: 'numeric' 
    }) + ' ' + now.toLocaleTimeString('id-ID', { 
        hour: '2-digit', 
        minute: '2-digit' 
    });
    
    const username = studentName.toLowerCase().replace(/\s+/g, '_') + '2012';
    
    // Add new row to history table
    const historyTable = document.getElementById('passwordResetHistory');
    const newRow = document.createElement('tr');
    newRow.innerHTML = `
        <td class="px-6 py-4 text-sm text-gray-900">${dateStr}</td>
        <td class="px-6 py-4 text-sm text-gray-900">${regNumber}</td>
        <td class="px-6 py-4 text-sm text-gray-900">${studentName}</td>
        <td class="px-6 py-4 text-sm text-gray-900">${username}</td>
        <td class="px-6 py-4 text-sm font-mono text-gray-900">${newPassword}</td>
        <td class="px-6 py-4 text-sm text-gray-900">admin</td>
    `;
    
    // Insert at the beginning of the table
    historyTable.insertBefore(newRow, historyTable.firstChild);
}

function viewPaymentProof(regNumber) {
    // Set student data based on registration number
    const studentData = {
        'PPDB2026001': { name: 'Ahmad Rizki Pratama' },
        'PPDB2026002': { name: 'Siti Nurhaliza' },
        'PPDB2026003': { name: 'Muhammad Fajar' }
    };
    
    document.getElementById('proofRegNumber').textContent = regNumber;
    document.getElementById('proofStudentName').textContent = studentData[regNumber].name;
    
    document.getElementById('paymentProofModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closePaymentProof() {
    document.getElementById('paymentProofModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

let currentProcessingId = null;

function approvePayment(regNumber) {
    currentProcessingId = regNumber;
    
    if (confirm(`Apakah Anda yakin ingin menyetujui pembayaran untuk ${regNumber}? Akun tes masuk akan digenerate otomatis.`)) {
        processPaymentApproval(regNumber);
    }
}

function rejectPayment(regNumber) {
    const reason = prompt(`Masukkan alasan penolakan untuk ${regNumber}:`);
    if (reason && reason.trim()) {
        processPaymentRejection(regNumber, reason);
    }
}

function approvePaymentFromModal() {
    const regNumber = document.getElementById('proofRegNumber').textContent;
    closePaymentProof();
    approvePayment(regNumber);
}

function rejectPaymentFromModal() {
    const regNumber = document.getElementById('proofRegNumber').textContent;
    closePaymentProof();
    rejectPayment(regNumber);
}

function processPaymentApproval(regNumber) {
    // Find the row and update status
    const rows = document.querySelectorAll('#verificationQueue tr');
    rows.forEach(row => {
        const regCell = row.querySelector('td:first-child');
        if (regCell && regCell.textContent === regNumber) {
            // Update status
            const statusCell = row.querySelector('td:nth-child(6)');
            statusCell.innerHTML = '<span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Terverifikasi</span>';
            
            // Update actions
            const actionCell = row.querySelector('td:nth-child(7)');
            actionCell.innerHTML = '<div class="text-sm text-green-600 font-medium">✅ Akun tes telah digenerate</div>';
            
            // Update statistics
            updateStatistics('approve');
        }
    });
    
    // Update student verification status if they are currently logged in
    updateStudentVerificationStatus(regNumber, 'approved');
    
    // Show success message with test account details
    showTestAccountGenerated(regNumber);
}

function updateStudentVerificationStatus(regNumber, status) {
    // This function would update the student's dashboard if they are currently logged in
    // In a real application, this would be handled through websockets or database updates
    
    // For demo purposes, if the current logged-in student matches, update their status
    const currentRegNumber = 'PPDB2026001'; // This would come from session/login data
    
    if (regNumber === currentRegNumber && document.getElementById('dashboard').classList.contains('hidden') === false) {
        if (status === 'approved') {
            // Update overall status
            const overallStatus = document.getElementById('overallStatus');
            overallStatus.className = 'inline-flex px-4 py-2 text-sm font-bold rounded-full bg-green-100 text-green-800 border border-green-300';
            overallStatus.innerHTML = '✅ TERVERIFIKASI';
            
            // Update payment step
            const paymentStep = document.querySelector('.grid.md\\:grid-cols-4 > div:nth-child(3)');
            paymentStep.className = 'bg-white p-4 rounded-lg border-2 border-green-200';
            paymentStep.innerHTML = `
                <div class="flex items-center mb-3">
                    <div class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">✓</div>
                    <h3 class="font-bold text-green-700">Verifikasi Bayar</h3>
                </div>
                <p class="text-sm text-green-600 font-medium">Disetujui</p>
                <p class="text-xs text-gray-500">Pembayaran valid</p>
            `;
            
            // Update test account step
            const testStep = document.querySelector('.grid.md\\:grid-cols-4 > div:nth-child(4)');
            testStep.className = 'bg-white p-4 rounded-lg border-2 border-green-200';
            testStep.innerHTML = `
                <div class="flex items-center mb-3">
                    <div class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">✓</div>
                    <h3 class="font-bold text-green-700">Akun Tes Masuk</h3>
                </div>
                <p class="text-sm text-green-600 font-medium">Tersedia</p>
                <p class="text-xs text-gray-500">Siap untuk tes</p>
            `;
            
            // Update action required section
            const actionSection = document.querySelector('.bg-yellow-50');
            actionSection.className = 'bg-green-50 border border-green-200 rounded-lg p-4';
            actionSection.innerHTML = `
                <div class="flex items-start">
                    <div class="text-green-600 text-xl mr-3">🎉</div>
                    <div>
                        <h4 class="font-bold text-green-800 mb-2">Selamat! Verifikasi Selesai</h4>
                        <div class="text-sm text-green-700 space-y-2">
                            <p>✅ Pembayaran Anda telah diverifikasi dan disetujui</p>
                            <p>✅ Akun tes masuk telah digenerate: <strong>ahmad_test_2026</strong></p>
                            <p>✅ Password tes: <strong>TEST123456</strong></p>
                            <p class="mt-3 font-semibold">Anda dapat mengikuti tes masuk pada tanggal yang telah ditentukan.</p>
                        </div>
                    </div>
                </div>
            `;
        }
    }
}

function processPaymentRejection(regNumber, reason) {
    // Find the row and update status
    const rows = document.querySelectorAll('#verificationQueue tr');
    rows.forEach(row => {
        const regCell = row.querySelector('td:first-child');
        if (regCell && regCell.textContent === regNumber) {
            // Update status
            const statusCell = row.querySelector('td:nth-child(6)');
            statusCell.innerHTML = '<span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Ditolak</span>';
            
            // Update actions
            const actionCell = row.querySelector('td:nth-child(7)');
            actionCell.innerHTML = `<div class="text-sm text-red-600 font-medium">❌ Ditolak: ${reason}</div>`;
            
            // Update statistics
            updateStatistics('reject');
        }
    });
    
    alert(`Pembayaran ${regNumber} telah ditolak. Siswa akan diberitahu melalui dashboard mereka.`);
}

function updateStatistics(action) {
    const waitingElement = document.querySelector('.text-yellow-600').nextElementSibling.querySelector('h3');
    const approvedElement = document.querySelector('.text-green-600').nextElementSibling.querySelector('h3');
    const rejectedElement = document.querySelector('.text-red-600').nextElementSibling.querySelector('h3');
    
    let waiting = parseInt(waitingElement.textContent);
    let approved = parseInt(approvedElement.textContent);
    let rejected = parseInt(rejectedElement.textContent);
    
    if (action === 'approve') {
        waiting--;
        approved++;
    } else if (action === 'reject') {
        waiting--;
        rejected++;
    }
    
    waitingElement.textContent = waiting;
    approvedElement.textContent = approved;
    rejectedElement.textContent = rejected;
}

function showTestAccountGenerated(regNumber) {
    const studentData = {
        'PPDB2026001': { name: 'Ahmad Rizki Pratama', username: 'ahmad_test_2026', password: 'TEST123456' },
        'PPDB2026002': { name: 'Siti Nurhaliza', username: 'siti_test_2026', password: 'TEST789012' },
        'PPDB2026003': { name: 'Muhammad Fajar', username: 'fajar_test_2026', password: 'TEST345678' }
    };
    
    const student = studentData[regNumber];
    
    alert(`✅ PEMBAYARAN DISETUJUI!\n\nAkun tes masuk telah digenerate untuk:\n${student.name} (${regNumber})\n\nDetail Akun Tes:\nUsername: ${student.username}\nPassword: ${student.password}\n\nSiswa dapat login menggunakan akun ini untuk mengikuti tes masuk Gelombang 1.`);
}

function testVerificationUpdate() {
    if (confirm('Ini adalah fitur demo untuk menguji update status verifikasi. Apakah Anda ingin melihat bagaimana tampilan dashboard berubah ketika admin menyetujui pembayaran?')) {
        // Simulate admin approval for current student
        updateStudentVerificationStatus('PPDB2026001', 'approved');
        
        alert('Status verifikasi berhasil diupdate! Lihat perubahan pada bagian "Status Verifikasi PPDB" di atas.');
    }
}

function downloadAllStudentData() {
    // Sample comprehensive student data
    const allStudentData = [
        {
            noPendaftaran: 'PPDB2026001',
            namaLengkap: 'Ahmad Rizki Pratama',
            nisn: '1234567890',
            tempatLahir: 'Jakarta',
            tanggalLahir: '15/05/2012',
            jenisKelamin: 'Laki-laki',
            asalSekolah: 'SD Negeri 01 Jakarta',
            alamat: 'Jl. Merdeka No. 123, RT 05/RW 02, Kelurahan Menteng, Jakarta Pusat 10310',
            noTelepon: '081234567890',
            namaOrangTua: 'Budi Pratama',
            username: 'ahmad_rizki2012',
            tanggalDaftar: '15/01/2026',
            statusPembayaran: 'Menunggu Verifikasi',
            statusVerifikasi: 'Menunggu',
            dokumenIjazah: 'Uploaded',
            dokumenKK: 'Uploaded',
            dokumenAkta: 'Pending',
            dokumenFoto: 'Uploaded',
            dokumenRapor: 'Pending'
        },
        {
            noPendaftaran: 'PPDB2026002',
            namaLengkap: 'Siti Nurhaliza',
            nisn: '0987654321',
            tempatLahir: 'Bandung',
            tanggalLahir: '20/03/2012',
            jenisKelamin: 'Perempuan',
            asalSekolah: 'SD Islam Al-Azhar',
            alamat: 'Jl. Sudirman No. 456, RT 02/RW 05, Kelurahan Senayan, Jakarta Selatan 12190',
            noTelepon: '081987654321',
            namaOrangTua: 'Hasan Nurdin',
            username: 'siti_nurhaliza2012',
            tanggalDaftar: '16/01/2026',
            statusPembayaran: 'Menunggu Verifikasi',
            statusVerifikasi: 'Menunggu',
            dokumenIjazah: 'Uploaded',
            dokumenKK: 'Uploaded',
            dokumenAkta: 'Uploaded',
            dokumenFoto: 'Uploaded',
            dokumenRapor: 'Uploaded'
        },
        {
            noPendaftaran: 'PPDB2026003',
            namaLengkap: 'Muhammad Fajar',
            nisn: '1122334455',
            tempatLahir: 'Bogor',
            tanggalLahir: '10/07/2012',
            jenisKelamin: 'Laki-laki',
            asalSekolah: 'SD Negeri 05 Bogor',
            alamat: 'Jl. Raya Bogor No. 789, RT 03/RW 01, Kelurahan Bogor Tengah, Bogor 16121',
            noTelepon: '081122334455',
            namaOrangTua: 'Agus Setiawan',
            username: 'muhammad_fajar2012',
            tanggalDaftar: '17/01/2026',
            statusPembayaran: 'Menunggu Verifikasi',
            statusVerifikasi: 'Menunggu',
            dokumenIjazah: 'Uploaded',
            dokumenKK: 'Uploaded',
            dokumenAkta: 'Uploaded',
            dokumenFoto: 'Uploaded',
            dokumenRapor: 'Pending'
        },
        {
            noPendaftaran: 'PPDB2026004',
            namaLengkap: 'Aisyah Putri',
            nisn: '2233445566',
            tempatLahir: 'Depok',
            tanggalLahir: '05/09/2012',
            jenisKelamin: 'Perempuan',
            asalSekolah: 'SD Muhammadiyah 1',
            alamat: 'Jl. Margonda No. 321, RT 01/RW 03, Kelurahan Depok, Depok 16424',
            noTelepon: '082233445566',
            namaOrangTua: 'Sari Indah',
            username: 'aisyah_putri2012',
            tanggalDaftar: '18/01/2026',
            statusPembayaran: 'Terverifikasi',
            statusVerifikasi: 'Terverifikasi',
            dokumenIjazah: 'Uploaded',
            dokumenKK: 'Uploaded',
            dokumenAkta: 'Uploaded',
            dokumenFoto: 'Uploaded',
            dokumenRapor: 'Uploaded'
        },
        {
            noPendaftaran: 'PPDB2026005',
            namaLengkap: 'Budi Santoso',
            nisn: '3344556677',
            tempatLahir: 'Tangerang',
            tanggalLahir: '12/11/2012',
            jenisKelamin: 'Laki-laki',
            asalSekolah: 'SD Negeri 12 Depok',
            alamat: 'Jl. Kemang No. 654, RT 04/RW 02, Kelurahan Kemang, Tangerang 15144',
            noTelepon: '083344556677',
            namaOrangTua: 'Wati Sari',
            username: 'budi_santoso2012',
            tanggalDaftar: '19/01/2026',
            statusPembayaran: 'Terverifikasi',
            statusVerifikasi: 'Terverifikasi',
            dokumenIjazah: 'Uploaded',
            dokumenKK: 'Uploaded',
            dokumenAkta: 'Uploaded',
            dokumenFoto: 'Uploaded',
            dokumenRapor: 'Uploaded'
        },
        {
            noPendaftaran: 'PPDB2026006',
            namaLengkap: 'Fatimah Zahra',
            nisn: '4455667788',
            tempatLahir: 'Bekasi',
            tanggalLahir: '25/08/2012',
            jenisKelamin: 'Perempuan',
            asalSekolah: 'SD Islam Terpadu',
            alamat: 'Jl. Raya Bekasi No. 888, RT 06/RW 04, Kelurahan Bekasi Timur, Bekasi 17113',
            noTelepon: '084455667788',
            namaOrangTua: 'Ahmad Fauzi',
            username: 'fatimah_zahra2012',
            tanggalDaftar: '20/01/2026',
            statusPembayaran: 'Menunggu Verifikasi',
            statusVerifikasi: 'Menunggu',
            dokumenIjazah: 'Uploaded',
            dokumenKK: 'Pending',
            dokumenAkta: 'Uploaded',
            dokumenFoto: 'Uploaded',
            dokumenRapor: 'Uploaded'
        }
    ];

    // Create CSV content
    const headers = [
        'No. Pendaftaran',
        'Nama Lengkap',
        'NISN',
        'Tempat Lahir',
        'Tanggal Lahir',
        'Jenis Kelamin',
        'Asal Sekolah',
        'Alamat',
        'No. Telepon',
        'Nama Orang Tua',
        'Username',
        'Tanggal Daftar',
        'Status Pembayaran',
        'Status Verifikasi',
        'Ijazah',
        'Kartu Keluarga',
        'Akta Kelahiran',
        'Pas Foto',
        'Rapor'
    ];

    let csvContent = headers.join(',') + '\n';

    allStudentData.forEach(student => {
        const row = [
            student.noPendaftaran,
            `"${student.namaLengkap}"`,
            student.nisn,
            `"${student.tempatLahir}"`,
            student.tanggalLahir,
            student.jenisKelamin,
            `"${student.asalSekolah}"`,
            `"${student.alamat}"`,
            student.noTelepon,
            `"${student.namaOrangTua}"`,
            student.username,
            student.tanggalDaftar,
            student.statusPembayaran,
            student.statusVerifikasi,
            student.dokumenIjazah,
            student.dokumenKK,
            student.dokumenAkta,
            student.dokumenFoto,
            student.dokumenRapor
        ];
        csvContent += row.join(',') + '\n';
    });

    // Create and download file
    const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
    const link = document.createElement('a');
    
    if (link.download !== undefined) {
        const url = URL.createObjectURL(blob);
        link.setAttribute('href', url);
        
        // Generate filename with current date
        const now = new Date();
        const dateStr = now.getFullYear() + '-' + 
                      String(now.getMonth() + 1).padStart(2, '0') + '-' + 
                      String(now.getDate()).padStart(2, '0');
        const timeStr = String(now.getHours()).padStart(2, '0') + '' + 
                      String(now.getMinutes()).padStart(2, '0');
        
        link.setAttribute('download', `Data_Pendaftar_PPDB_${dateStr}_${timeStr}.csv`);
        link.style.visibility = 'hidden';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        
        // Show success message
        alert(`✅ Data berhasil didownload!\n\nFile: Data_Pendaftar_PPDB_${dateStr}_${timeStr}.csv\nTotal: ${allStudentData.length} siswa\n\nFile berisi data lengkap semua pendaftar termasuk:\n• Data pribadi\n• Kontak & orang tua\n• Status verifikasi\n• Status dokumen`);
    } else {
        alert('Browser Anda tidak mendukung fitur download otomatis. Silakan gunakan browser yang lebih baru.');
    }
}

// Close modal when clicking outside
document.getElementById('registrationModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeRegistrationForm();
    }
});

document.getElementById('loginModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeLoginForm();
    }
});

document.getElementById('editProfileModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeEditProfile();
    }
});

document.getElementById('adminLoginModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeAdminLogin();
    }
});

document.getElementById('paymentProofModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closePaymentProof();
    }
});

document.getElementById('studentProfileModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeStudentProfile();
    }
});

