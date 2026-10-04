<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Syahru Ramadhan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col justify-between">
    <!-- Navbar -->
    <nav class="bg-slate-900 text-white shadow-md p-4">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <a href="/" class="font-bold text-lg tracking-wide hover:text-indigo-400 transition">Syahru.dev</a>
            <div class="space-x-6 text-sm font-medium">
                <a href="/" class="text-slate-300 hover:text-white transition">Home</a>
                <a href="/about" class="text-slate-300 hover:text-white transition">About</a>
                <a href="/contact" class="text-indigo-400 font-semibold">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-xl mx-auto my-auto p-8 bg-white shadow-sm rounded-2xl border border-slate-200 w-full text-center">
        <div class="inline-flex items-center justify-center w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        </div>
        <h2 class="text-2xl font-bold text-slate-900 mb-2">Kontak Saya</h2>
        <p class="text-slate-500 text-sm mb-6">Jika ada pertanyaan atau ingin berdiskusi, silakan hubungi kontak berikut:</p>
        
        <div class="space-y-3 text-left">
            <div class="flex items-center p-3.5 bg-slate-50 rounded-xl border border-slate-200">
                <div class="p-2 bg-white text-indigo-600 rounded-lg shadow-xs mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                </div>
                <div>
                    <span class="text-xs uppercase font-medium text-slate-400 block">Email</span>
                    <span class="text-slate-700 font-semibold text-sm">{{ $kontak['email'] }}</span>
                </div>
            </div>

            <div class="flex items-center p-3.5 bg-slate-50 rounded-xl border border-slate-200">
                <div class="p-2 bg-white text-indigo-600 rounded-lg shadow-xs mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div>
                    <span class="text-xs uppercase font-medium text-slate-400 block">Lokasi</span>
                    <span class="text-slate-700 font-semibold text-sm">{{ $kontak['lokasi'] }}</span>
                </div>
            </div>
        </div>

        <div class="mt-8 pt-4 border-t border-slate-100">
            <a href="/" class="text-indigo-600 hover:underline text-sm font-semibold">&larr; Kembali ke Beranda</a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center py-6 text-sm text-slate-400">
        &copy; 2026 Syahru Ramadhan. All rights reserved.
    </footer>
</body>
</html>