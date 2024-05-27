<!-- resources/views/paketa/create.blade.php -->
<x-app-layout>
    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <div class="max-w-xl mx-auto">
            <h2 id="h2-data" class="text-2xl font-semibold mb-4">Tambah Data Siswa</h2>
            <form action="{{ route('paketa.store') }}" method="POST" class="form-container">
                @csrf
                <div class="form-group">
                    <label for="Induk">Induk:</label>
                    <input type="text" name="Induk" id="Induk" required>
                </div>
                <div class="form-group">
                    <label for="Nama">Nama Peserta:</label>
                    <input type="text" name="Nama" id="Nama" required>
                </div>
                <div class="form-group">
                    <label for="gender">L/P:</label>
                    <select name="gender" id="gender" required>
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="TempatLahir">Tempat Lahir:</label>
                    <input type="text" name="TempatLahir" id="TempatLahir" required>
                </div>
                <div class="form-group">
                    <label for="TanggalLahir">Tanggal Lahir:</label>
                    <input type="date" name="TanggalLahir" id="TanggalLahir" required>
                </div>
                <div class="form-group">
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
                <div class="form-group">
                    <label for="Kelas">Kelas:</label>
                    <select name="Kelas" id="Kelas" required>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                        <option value="VI">VI</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ayah">Nama Ayah:</label>
                    <input type="text" name="ayah" id="ayah">
                </div>
                <div class="form-group">
                    <label for="ibu">Nama Ibu:</label>
                    <input type="text" name="ibu" id="ibu">
                </div>
                <div class="form-group">
                    <label for="Kota">Kota:</label>
                    <input type="text" name="Kota" id="Kota" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat" id="alamat" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" id="phone" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="submit-button">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>