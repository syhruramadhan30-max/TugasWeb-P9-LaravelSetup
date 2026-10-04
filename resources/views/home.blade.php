<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Syahru Ramadhan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col justify-between">
    <!-- Navbar -->
    <nav class="bg-slate-900 text-white shadow-md p-4">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <a href="/" class="font-bold text-lg tracking-wide hover:text-indigo-400 transition">Syahru.dev</a>
            <div class="space-x-6 text-sm font-medium">
                <a href="/" class="text-indigo-400 font-semibold">Home</a>
                <a href="/about" class="text-slate-300 hover:text-white transition">About</a>
                <a href="/contact" class="text-slate-300 hover:text-white transition">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-2xl mx-auto my-auto p-10 bg-white shadow-sm rounded-2xl border border-slate-200 text-center">
        <span class="bg-indigo-50 text-indigo-600 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">Mahasiswa Ilmu Komputer</span>
        <h2 class="text-3xl font-extrabold text-slate-900 mt-4 mb-3">Selamat Datang di Website Profil Saya</h2>
        <p class="text-slate-600 mb-8 leading-relaxed">Website ini dibangun menggunakan framework Laravel dan Tailwind CSS sebagai media pembelajaran serta eksplorasi pengembangan web modern.</p>
        
        <div class="flex justify-center gap-4">
            <a href="/about" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-5 py-2.5 rounded-xl transition shadow-sm">Lihat Profil</a>
            <a href="/contact" class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium px-5 py-2.5 rounded-xl transition">Hubungi Saya</a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center py-6 text-sm text-slate-400">
        &copy; 2026 Syahru Ramadhan. All rights reserved.
    </footer>
</body>
</html>