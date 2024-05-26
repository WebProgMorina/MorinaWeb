<x-app-layout>
    <div class="container py-8">
        <div class="max-w-xl mx-auto shadow sm:rounded-lg p-6 m-4"
            style="border-radius: 10px; background-color: var(--2) ; ">
            <h2 class="text-2xl font-semibold mb-4">Tambah Data Siswa</h2>
            <form action="{{ route('paketa.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="Induk" class="form-label">Induk:</label>
                    <input type="text" class="form-control" name="Induk" id="Induk" required
                        style="border-radius: 8px;">
                </div>
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama Peserta:</label>
                    <input type="text" class="form-control" name="Nama" id="Nama" required style="border-radius: 8px;">
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">L/P:</label>
                    <select class="form-select" name="gender" id="gender" required style="border-radius: 8px;">
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                </div>
                <!-- Lanjutkan untuk setiap input -->
                <div class="mb-3">
                    <label for="TempatLahir" class="form-label">Tempat Lahir:</label>
                    <input type="text" class="form-control" name="TempatLahir" id="TempatLahir" required
                        style="border-radius: 8px;">
                </div>
                <div class="mb-3">
                    <label for="TanggalLahir" class="form-label">Tanggal Lahir:</label>
                    <input type="date" class="form-control" name="TanggalLahir" id="TanggalLahir" required
                        style="border-radius: 8px;">
                </div>
                <div class="mb-3">
                    <label for="kepercayaan" class="form-label">Agama:</label>
                    <select class="form-select " name="kepercayaan" id="kepercayaan" required
                        style="border-radius: 8px;">
                        <option value="Islam">Islam</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Kristen Katolik">Kristen Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="Kepercayaan Daerah">Kepercayaan Daerah</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Kelas" class="form-label">Kelas:</label>
                    <select class="form-select" name="Kelas" id="Kelas" required style="border-radius: 8px;">
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                        <option value="VI">VI</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="ayah" class="form-label">Nama Ayah:</label>
                    <input type="text" class="form-control" name="ayah" id="ayah" style="border-radius: 8px;">
                </div>
                <div class="mb-3">
                    <label for="ibu" class="form-label">Nama Ibu:</label>
                    <input type="text" class="form-control" name="ibu" id="ibu" style="border-radius: 8px;">
                </div>
                <div class="mb-3">
                    <label for="Kota" class="form-label">Kota:</label>
                    <input type="text" class="form-control" name="Kota" id="Kota" required style="border-radius: 8px;">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat:</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3" required
                        style="border-radius: 8px;"></textarea>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" class="form-control" name="phone" id="phone" required
                        style="border-radius: 8px;">
                </div>
                <div>
                    <button class="btn btn-dark " type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>