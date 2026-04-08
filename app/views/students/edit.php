<div class="mt-8 space-y-4">
    <!-- Card Header Start -->
    <div class="bg-white shadow p-4 rounded-lg">
        <h1 class="font-bold text-2xl">Edit Siswa</h1>
        <p>Melakukan perubahan data siswa yang terdaftar</p>
    </div>
    <!-- Card Header End -->

    <!-- Card Content Start -->
    <div class="bg-white rounded-lg shadow mt-8">
        <form class="p-4 grid grid-cols-2 gap-4" action="">
            <div class="space-y-2">
                <label class="font-bold block" for="name">Nama</label>
                <input class="px-4 py-2 border rounded-lg w-full" type="text" name="name" id="name"
                    placeholder="Masukkan Nama">
            </div>
            <div class="space-y-2">
                <label class="font-bold block" for="nis">NIS</label>
                <input class="px-4 py-2 border rounded-lg w-full" type="text" name="nis" id="nis"
                    placeholder="Masukkan NIS">
            </div>
            <div class="space-y-2">
                <label class="font-bold block" for="class">Kelas</label>
                <input class="px-4 py-2 border rounded-lg w-full" type="text" name="class" id="class"
                    placeholder="Masukkan Kelas">
            </div>

            <div class="space-y-2">
                <label class="font-bold block" for="phone_number">No. Telepon</label>
                <input class="px-4 py-2 border rounded-lg w-full" type="text" name="phone_number" id="phone_number"
                    placeholder="Masukkan Nomor Telepon">
            </div>
            <div class="flex justify-end gap-4 col-span-2">
                <a href="/students" class="px-4 py-2 rounded-lg bg-gray-100">Kembali</a>
                <button class="px-4 py-2 rounded-lg bg-blue-500 text-white" type="submit">Simpan</button>
            </div>
        </form>
    </div>
    <!-- Card Content End -->
</div>