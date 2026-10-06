<div class="min-h-screen bg-slate-50 py-10 px-4">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
        <span class="text-xs font-bold tracking-wider text-teal-600 uppercase">Milestone 6 • Form Lanjutan</span>
        <h1 class="text-2xl font-bold text-slate-900 mt-1 mb-2">Daftar Kursus</h1>
        <p class="text-sm text-slate-500 mb-6">Alur: landing page → form → proses PHP → ringkasan. Memakai database.</p>

        <form action="{{ route('kursus.proses') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Nama lengkap</label>
                    <input type="text" name="nama" class="w-full rounded-lg border-slate-200 border px-3 py-2 text-slate-800 focus:ring-teal-500 focus:border-teal-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Email</label>
                    <input type="email" name="email" class="w-full rounded-lg border-slate-200 border px-3 py-2 text-slate-800 focus:ring-teal-500 focus:border-teal-500" required>
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-slate-700 mb-1">Pilih kursus</label>
                <select name="kursus" class="w-full rounded-lg border-slate-200 border px-3 py-2 text-slate-800 bg-white">
                    <option value="">-- Pilih kursus --</option>
                    <option value="Web Dasar">Web Dasar (Rp 300.000)</option>
                    <option value="PHP Dasar">PHP Dasar (Rp 400.000)</option>
                    <option value="Laravel Dasar">Laravel Dasar (Rp 500.000)</option>
                </select>
            </div>

            <!-- Tipe Peserta & Minat (Checkbox/Radio) -->
            <!-- ... sesuaikan dengan kebutuhan controller & view Anda ... -->

            <button type="submit" class="mt-6 bg-teal-600 hover:bg-teal-700 text-white font-medium px-5 py-2.5 rounded-lg transition">
                Kirim Pendaftaran
            </button>
        </form>
    </div>
</div>