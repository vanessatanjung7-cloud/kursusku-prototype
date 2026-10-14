<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Matrix Pertemuan 5</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #e8f3f1;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
    </style>
</head>
<body class="p-6 md:p-12 flex justify-center items-center min-h-screen">

    <div class="bg-white rounded-2xl p-6 md:p-10 shadow-sm max-w-4xl w-full">
        <!-- Badge Title -->
        <p class="text-emerald-600 font-bold text-xs tracking-wider uppercase mb-2">EVIDENCE WEEK 05</p>
        
        <!-- Main Title -->
        <h1 class="text-2xl md:text-3xl font-extrabold text-slate-800 mb-6">Test Matrix Pertemuan 5</h1>

        <!-- Table Container -->
        <div class="border border-slate-100 rounded-xl overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-emerald-50/70 text-emerald-800 text-xs font-bold uppercase tracking-wider border-b border-slate-100">
                        <th class="py-3.5 px-4 w-12">NO</th>
                        <th class="py-3.5 px-4 w-1/4">TEST</th>
                        <th class="py-3.5 px-4">EXPECTED / ACTUAL</th>
                        <th class="py-3.5 px-4 text-center w-28">STATUS</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm font-medium text-slate-600">
                    <tr>
                        <td class="py-3 px-4">1</td>
                        <td class="py-3 px-4 font-semibold text-slate-700">Load form</td>
                        <td class="py-3 px-4">Form tampil tanpa error</td>
                        <td class="py-3 px-4 text-center"><span class="bg-emerald-100 text-emerald-700 text-xs font-extrabold px-3 py-1 rounded-full">PASS</span></td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4">2</td>
                        <td class="py-3 px-4 font-semibold text-slate-700">Required</td>
                        <td class="py-3 px-4">Browser menahan field wajib</td>
                        <td class="py-3 px-4 text-center"><span class="bg-emerald-100 text-emerald-700 text-xs font-extrabold px-3 py-1 rounded-full">PASS</span></td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4">3</td>
                        <td class="py-3 px-4 font-semibold text-slate-700">Email</td>
                        <td class="py-3 px-4">Input type=email meminta format benar</td>
                        <td class="py-3 px-4 text-center"><span class="bg-emerald-100 text-emerald-700 text-xs font-extrabold px-3 py-1 rounded-full">PASS</span></td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4">4</td>
                        <td class="py-3 px-4 font-semibold text-slate-700">Nama pendek</td>
                        <td class="py-3 px-4">minlength=3 mencegah submit</td>
                        <td class="py-3 px-4 text-center"><span class="bg-emerald-100 text-emerald-700 text-xs font-extrabold px-3 py-1 rounded-full">PASS</span></td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4">5</td>
                        <td class="py-3 px-4 font-semibold text-slate-700">GET</td>
                        <td class="py-3 px-4">Parameter tampil di query string</td>
                        <td class="py-3 px-4 text-center"><span class="bg-emerald-100 text-emerald-700 text-xs font-extrabold px-3 py-1 rounded-full">PASS</span></td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4">6</td>
                        <td class="py-3 px-4 font-semibold text-slate-700">POST</td>
                        <td class="py-3 px-4">Data submit tidak tampil pada URL</td>
                        <td class="py-3 px-4 text-center"><span class="bg-emerald-100 text-emerald-700 text-xs font-extrabold px-3 py-1 rounded-full">PASS</span></td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4">7</td>
                        <td class="py-3 px-4 font-semibold text-slate-700">Radio</td>
                        <td class="py-3 px-4">Nilai peserta tampil di hasil</td>
                        <td class="py-3 px-4 text-center"><span class="bg-emerald-100 text-emerald-700 text-xs font-extrabold px-3 py-1 rounded-full">PASS</span></td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4">8</td>
                        <td class="py-3 px-4 font-semibold text-slate-700">Checkbox</td>
                        <td class="py-3 px-4">Beberapa minat dapat diterima</td>
                        <td class="py-3 px-4 text-center"><span class="bg-emerald-100 text-emerald-700 text-xs font-extrabold px-3 py-1 rounded-full">PASS</span></td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4">9</td>
                        <td class="py-3 px-4 font-semibold text-slate-700">Textarea</td>
                        <td class="py-3 px-4">Catatan di-escape ketika ditampilkan</td>
                        <td class="py-3 px-4 text-center"><span class="bg-emerald-100 text-emerald-700 text-xs font-extrabold px-3 py-1 rounded-full">PASS</span></td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4">10</td>
                        <td class="py-3 px-4 font-semibold text-slate-700">Hidden</td>
                        <td class="py-3 px-4">source=week-05 diterima</td>
                        <td class="py-3 px-4 text-center"><span class="bg-emerald-100 text-emerald-700 text-xs font-extrabold px-3 py-1 rounded-full">PASS</span></td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4">11</td>
                        <td class="py-3 px-4 font-semibold text-slate-700">Mobile</td>
                        <td class="py-3 px-4">Layout 1 kolom sekitar 360px</td>
                        <td class="py-3 px-4 text-center"><span class="bg-emerald-100 text-emerald-700 text-xs font-extrabold px-3 py-1 rounded-full">PASS</span></td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4">12</td>
                        <td class="py-3 px-4 font-semibold text-slate-700">Navigasi</td>
                        <td class="py-3 px-4">Link beranda/form/katalog bekerja</td>
                        <td class="py-3 px-4 text-center"><span class="bg-emerald-100 text-emerald-700 text-xs font-extrabold px-3 py-1 rounded-full">PASS</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>