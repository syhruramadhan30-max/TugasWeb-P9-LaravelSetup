<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang - Data Dinamis</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col justify-between">
    <!-- Navbar -->
    <nav class="bg-slate-900 text-white shadow-md p-4">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <a href="/" class="font-bold text-lg tracking-wide hover:text-indigo-400 transition">InventarisApp</a>
            <div class="space-x-6 text-sm font-medium">
                <a href="/" class="text-slate-300 hover:text-white transition">Home</a>
                <a href="/about" class="text-indigo-400 font-semibold">Data Barang</a>
                <a href="/contact" class="text-slate-300 hover:text-white transition">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto my-10 p-6 bg-white shadow-sm rounded-2xl border border-slate-200 w-full">
        <div class="flex justify-between items-center border-b pb-4 mb-6">
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Daftar Data Barang</h2>
                <p class="text-slate-500 text-sm">Data produk yang dikirim secara dinamis melalui rute controller/route array.</p>
            </div>
            <span class="bg-indigo-50 text-indigo-700 text-xs font-semibold px-3 py-1.5 rounded-full border border-indigo-100">
                Total: {{ count($daftarBarang) }} Item
            </span>
        </div>

        <!-- Tabel Data Dinamis -->
        <div class="overflow-x-auto rounded-xl border border-slate-200">
            <table class="w-full text-left text-sm text-slate-600">
                <thead class="bg-slate-100 text-slate-800 uppercase font-semibold text-xs border-b border-slate-200">
                    <tr>
                        <th class="py-3 px-4">No</th>
                        <th class="py-3 px-4">Kode</th>
                        <th class="py-3 px-4">Nama Barang</th>
                        <th class="py-3 px-4">Kategori</th>
                        <th class="py-3 px-4">Harga Satuan</th>
                        <th class="py-3 px-4 text-center">Stok</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach ($daftarBarang as $index => $item)
                        <tr class="hover:bg-slate-50 transition">
                            <td class="py-3 px-4 font-medium">{{ $index + 1 }}</td>
                            <td class="py-3 px-4 font-mono text-xs text-indigo-600 font-semibold">{{ $item['kode'] }}</td>
                            <td class="py-3 px-4 font-semibold text-slate-900">{{ $item['nama'] }}</td>
                            <td class="py-3 px-4">
                                <span class="bg-slate-100 text-slate-700 text-xs px-2.5 py-0.5 rounded-md border border-slate-200">
                                    {{ $item['kategori'] }}
                                </span>
                            </td>
                            <td class="py-3 px-4 text-slate-800 font-medium">Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                            <td class="py-3 px-4 text-center">
                                <span class="bg-emerald-50 text-emerald-700 text-xs font-bold px-2 py-0.5 rounded-full border border-emerald-200">
                                    {{ $item['stok'] }} unit
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-8 pt-4 border-t border-slate-100 flex justify-between items-center">
            <a href="/" class="text-indigo-600 hover:underline text-sm font-semibold">&larr; Kembali ke Beranda</a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 py-6 mt-auto">
    <div class="max-w-5xl mx-auto px-4 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-slate-500">
        <!-- Copyright & Perusahaan -->
        <div class="flex items-center gap-2">
            <span class="inline-block w-2 h-2 rounded-full bg-emerald-500"></span>
            <span>&copy; 2026 <strong>PT Logistik Digital Nusantara</strong>. Hak Cipta Dilindungi.</span>
        </div>

        <!-- Tautan Sistem / Status -->
        <div class="flex items-center space-x-6 text-slate-400">
            <span class="text-slate-600 font-medium">Core v1.0.4</span>
            <a href="#" class="hover:text-slate-600 transition">Dokumentasi API</a>
            <a href="#" class="hover:text-slate-600 transition">Kebijakan Privasi</a>
            <a href="#" class="hover:text-slate-600 transition">Status Sistem</a>
        </div>
    </div>
</footer>
</body>
</html>