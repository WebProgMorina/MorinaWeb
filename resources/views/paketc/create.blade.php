<!-- resources/views/paketc/create.blade.php -->
<x-app-layout>
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl mx-auto">
            <h2 class="text-2xl font-semibold mb-4">Tambah Data Siswa</h2>
            <form action="{{ route('paketc.store') }}" method="POST">
                @csrf
                <div>
                    <label for="Induk">Induk:</label>
                    <input type="text" name="Induk" id="Induk" required>
                </div>
                <div>
                    <label for="Nama">Nama Peserta:</label>
                    <input type="text" name="Nama" id="Nama" required>
                </div>
                <div>
                    <label for="gender">L/P:</label>
                    <select name="gender" id="gender" required>
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                </div>
                <div>
                    <label for="TempatLahir">Tempat Lahir:</label>
                    <input type="text" name="TempatLahir" id="TempatLahir" required>
                </div>
                <div>
                    <label for="TanggalLahir">Tanggal Lahir:</label>
                    <input type="date" name="TanggalLahir" id="TanggalLahir" required>
                </div>
                <div>
                    <label for="kepercayaan">AGAMA:</label>
                    <select name="kepercayaan" id="kepercayaan" required>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Kristen Katolik">Kristen Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="kepercayaan daerah">kepercayaan daerah</option>
                    </select>
                </div>
                <div>
                    <label for="Kelas">Kelas:</label>
                    <select name="Kelas" id="Kelas" required>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                </div>
                <div>
                    <label for="ayah">Nama Ayah:</label>
                    <input type="text" name="ayah" id="ayah">
                </div>
                <div>
                    <label for="ibu">Nama Ibu:</label>
                    <input type="text" name="ibu" id="ibu">
                </div>
                <div>
                    <label for="Kota">Kota:</label>
                    <input type="text" name="Kota" id="Kota" required>
                </div>
                <div>
                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat" id="alamat" rows="3" required></textarea>
                </div>
                <div>
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" id="phone" required>
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
