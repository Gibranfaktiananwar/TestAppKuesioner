@extends('layouts.theme')
@section('nyoba')
<div class="container" >

        <!-- Form Header -->
        <div class="mb-4" style="padding-top: 30px;">
            <h1>Form Survey untuk Sekolah</h1>
            <p class="mb-6">Mohon untuk diisikan dengan benar</p>
        </div>
        <!-- Form -->
        <form action="{{ route('pertanyaansekolah.get') }}" method="post">
            @csrf


            <!-- BAGIAN 1. INFORMASI RESPONDEN -->
            <!-- pertanyaan1 -->
            <div>I. INFORMASI RESPONDEN</div>
            <div class="mb-3">
                <label for="" class="form-label">1. Nama Lengkap</label>
                <input type="text" id="" class="form-control" name="pertanyaan1" placeholder="silahkan masukan nama lengkap" required>
            </div>

            <!-- pertanyaan2 -->
            <label for="" class="form-label">2. Jenis Kelamin</label>
            <div class="mb-3">
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan2" value="Laki-Laki" {{ old('gender') == 'Laki-Laki' ? 'checked' : '' }}> Laki-Laki
                    </label>
                </div>
                <div style="display: inline-block;">
                    <label>
                        <input type="radio" name="pertanyaan2" value="Perempuan" {{ old('gender') == 'Perempuan' ? 'checked' : '' }}> Perempuan
                    </label>
                </div>
            </div>

            <!-- pertanyaan3 -->
            <div class="mb-3">
                <label for="" class="form-label">3. Tanggal Pengisian</label>
                <div>
                    <label>(Bulan/Tanggal/Tahun)</label>
                </div>
                <div class="mb-3">
                    <input type="date" id="" name="pertanyaan3" class="form-control">
                </div>


            <!-- BAGIAN 2. INFORMASI SEKOLAH -->
            <div>II. INFORMASI SEKOLAH</div>

            <!-- pertanyaan4 -->
            <div class="mb-3">
                <label for="" class="form-label">4. Nama Sekolah</label>
                <input type="text" id="" class="form-control" name="pertanyaan4" placeholder="silahkan masukan nama sekolah" required>
            </div>

            <!-- pertanyaan5 -->
            <label for="" class="form-label">5. Tingkatan Sekolah</label>
            <div class="mb-3">
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan5" value="SD" {{ old('tingkatan') == 'SD' ? 'checked' : '' }}> SD/Sederajat
                    </label>
                </div>
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan5" value="SMP" {{ old('tingkatan') == 'SMP' ? 'checked' : '' }}> SMP/Sederajat
                    </label>
                </div>
                <div style="display: inline-block;">
                    <label>
                        <input type="radio" name="pertanyaan5" value="SMA" {{ old('tingkatan') == 'SMA' ? 'checked' : '' }}> SMA/Sederajat
                    </label>
                </div>
            </div>

            <!-- pertanyaan6 -->
            <label for="" class="form-label">6. Jenis Sekolah</label>
            <div class="mb-3">
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan6" value="Negeri" {{ old('jenis_sekolah') == 'Negeri' ? 'checked' : '' }}> Negeri
                    </label>
                </div>
                <div style="display: inline-block;">
                    <label>
                        <input type="radio" name="pertanyaan6" value="Swasta" {{ old('jenis_sekolah') == 'Swasta' ? 'checked' : '' }}> Swasta
                    </label>
                </div>
            </div>

            <!-- pertanyaan7 -->
            <div class="mb-3">
                <label for="" class="form-label">7. Alamat</label>
                <input type="text" id="" class="form-control" name="pertanyaan7" placeholder="silahkan masukan alamat" required>
            </div>

            <!-- pertanyaan8 -->
            <div class="mb-3">
                <label for="" class="form-label">8. Nomor Telepon</label>
                <input type="text" id="" class="form-control" name="pertanyaan8" placeholder="silahkan masukan nomor telepon" required>
            </div>

            <!-- pertanyaan9 -->
            <div class="mb-3">
                <label for="" class="form-label">9. Kode Pos</label>
                <input type="text" id="" class="form-control" name="pertanyaan9" placeholder="silahkan masukan kode pos" required>
            </div>

            <!-- pertanyaan10 -->
            <div class="mb-3">
                <label for="" class="form-label">10. Desa atau Kelurahan</label>
                <input type="text" id="" class="form-control" name="pertanyaan10" placeholder="silahkan masukan desa / kelurahan" required>
            </div>

            <!-- pertanyaan11 -->
            <div class="mb-3">
                <label for="" class="form-label">11. Kecamatan</label>
                <input type="text" id="" class="form-control" name="pertanyaan11" placeholder="silahkan masukan kecamatan" required>
            </div>

            <!-- pertanyaan12 -->
            <div class="mb-3">
                <label for="" class="form-label">12. Kabupaten atau Kota</label>
                <input type="text" id="" class="form-control" name="pertanyaan12" placeholder="silahkan masukan kabupaten / kota" required>
            </div>

            <!-- pertanyaan13 -->
            <div class="mb-3">
                <label for="" class="form-label">13. Provinsi</label>
                <input type="text" id="" class="form-control" name="pertanyaan13" placeholder="silahkan masukan provinsi" required>
            </div>

            <!-- pertanyaan14 -->
            <div class="mb-3">
                <label for="" class="form-label">14. Negara</label>
                <input type="text" id="" class="form-control" name="pertanyaan14" placeholder="silahkan masukan negara" required>
            </div>

            <!-- pertanyaan15 -->
            <div class="mb-3">
                <label for="" class="form-label">15. Koordinat</label>
                <div>
                    <label>Bisa dicek dimaps atau boleh diisikan dengan (-)</label>
                </div>
                <input type="text" id="" class="form-control" name="pertanyaan15" placeholder="silahkan masukan kordinat peta" required>
            </div>


            <!-- BAGIAN 3. KETERANGAN SEKOLAH -->
            <div>III. KETERANGAN SEKOLAH</div>

            <!-- pertanyaan16 -->
            <div class="mb-3">
                <label for="" class="form-label">16. Jumlah Guru</label>
                <input type="number" id="" class="form-control" name="pertanyaan16a" placeholder="silahkan masukan jumlah guru perempuan" min="0" required>
                <input type="number" id="" class="form-control" name="pertanyaan16b" placeholder="silahkan masukan jumlah guru laki-laki" min="0" required>
            </div>

            <!-- pertanyaan17 -->
            <div class="mb-3">
                <label for="" class="form-label">17. Jumlah Tenaga Pendidikan Lainnya</label>
                <input type="number" id="" class="form-control" name="pertanyaan17a" placeholder="silahkan masukan jumlah Tenaga Pendidikan Lainnya perempuan" min="0" required>
                <input type="number" id="" class="form-control" name="pertanyaan17b" placeholder="silahkan masukan jumlah Tenaga Pendidikan Lainnya laki-laki" min="0" required>
            </div>

            <!-- pertanyaan18 -->
            <div class="mb-3">
                <label for="" class="form-label">18. Jumlah Murid</label>
                <input type="number" id="" class="form-control" name="pertanyaan18a" placeholder="silahkan masukan jumlah Murid perempuan" min="0" required>
                <input type="number" id="" class="form-control" name="pertanyaan18b" placeholder="silahkan masukan jumlah Murid laki-laki" min="0" required>
            </div>

            <!-- pertanyaan19 -->
            <div class="mb-3">
                <label for="" class="form-label">19. Jumlah Murid Penyandang Disabilitas</label>
                <input type="number" id="" class="form-control" name="pertanyaan19a" placeholder="silahkan masukan jumlah Murid Penyandang Disabilitas perempuan" min="0" required>
                <input type="number" id="" class="form-control" name="pertanyaan19b" placeholder="silahkan masukan jumlah Murid Penyandang Disabilitas laki-laki" min="0" required>
            </div>

            <!-- pertanyaan20 -->
            <label for="" class="form-label">20. Jarak Sekolah dari Garis Pantai</label>
            <div class="mb-3">
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan20" value="Kurang dari 500 meter" {{ old('jarak_sekolah') == 'Kurang dari 500 meter' ? 'checked' : '' }}> Kurang dari 500 meter
                    </label>
                </div>
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan20" value="Antara 500-2000 meter" {{ old('jarak_sekolah') == 'Antara 500-2000 meter' ? 'checked' : '' }}> Antara 500-2000 meter
                    </label>
                </div>
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan20" value="Lebih dari 2000 meter" {{ old('jarak_sekolah') == 'Lebih dari 2000 meter' ? 'checked' : '' }}> Lebih dari 2000 meter
                    </label>
                </div>
                <div style="display: inline-block;">
                    <label>
                        <input type="radio" name="pertanyaan20" value="Tidak Tahu" {{ old('jarak_sekolah') == 'Tidak Tahu' ? 'checked' : '' }}> Tidak Tahu
                    </label>
                </div>
            </div>

            <!-- pertannyaan no.21 -->
            <label for="" class="form-label">21. Ketinggian Sekolah dari Pantai</label>
            <div class="mb-3">
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan21" value="Kurang dari 5 meter di atas permukaan laut" {{ old('ketinggian_sekolah') == 'Kurang dari 5 meter di atas permukaan laut' ? 'checked' : '' }}> Kurang dari 5 meter di atas permukaan laut
                    </label>
                </div>
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan21" value="Antara 5-10 meter di atas permukaan laut" {{ old('ketinggian_sekolah') == 'Antara 5-10 meter di atas permukaan laut' ? 'checked' : '' }}> Antara 5-10 meter di atas permukaan laut
                    </label>
                </div>
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan21" value="Lebih dari 10 meter di atas permukaan laut" {{ old('ketinggian_sekolah') == 'Lebih dari 10 meter di atas permukaan laut' ? 'checked' : '' }}> Lebih dari 10 meter di atas permukaan laut
                    </label>
                </div>
                <div style="display: inline-block;">
                    <label>
                        <input type="radio" name="pertanyaan21" value="Tidak Tahu" {{ old('ketinggian_sekolah') == 'Tidak Tahu' ? 'checked' : '' }}> Tidak Tahu
                    </label>
                </div>
            </div>

            <!-- pertanyaan no.22 -->
            <label for="" class="form-label">22. Jenis Dinding Bangunan Terbanyak</label>
            <div class="mb-3">
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan22" value="Beton/bata" {{ old('jenis_dinding_bangunan') == 'Beton/bata' ? 'checked' : '' }}> Beton/bata
                    </label>
                </div>
                <div style="display: inline-block;">
                    <label>
                        <input type="radio" name="pertanyaan22" value="Lainnya" {{ old('jenis_dinding_bangunan') == 'Lainnya' ? 'checked' : '' }}> Lainnya
                    </label>
                </div>
            </div>

            <!-- pertanyaan no.23 -->
            <label for="" class="form-label">23. Jenis Bangunan</label>
            <div class="mb-3">
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan23" value="Bertingkat" {{ old('jenis_bangunan') == 'Bertingkat' ? 'checked' : '' }}> Bertingkat
                    </label>
                </div>
                <div style="display: inline-block;">
                    <label>
                        <input type="radio" name="pertanyaan23" value="Tidak Bertingkat" {{ old('jenis_bangunan') == 'Tidak Bertingkat' ? 'checked' : '' }}> Tidak Bertingkat
                    </label>
                </div>
            </div>

            <!-- pertanyaan no.24 -->
            <label for="" class="form-label">24. Apabila Bertingkat, Kondisi Dinding pada Lantai Terbawah</label>
            <div class="mb-3">
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan24" value="Tanpa jendela atau ventilasi" {{ old('kondisi_dinding_lantai_terbawah') == 'Tanpa jendela atau ventilasi' ? 'checked' : '' }}> Tanpa jendela atau ventilasi
                    </label>
                </div>
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan24" value="Luas jendela atau ventilasi kurang dari 50% luas dinding" {{ old('kondisi_dinding_lantai_terbawah') == 'Luas jendela atau ventilasi kurang dari 50% luas dinding' ? 'checked' : '' }}> Luas jendela atau ventilasi kurang dari 50% luas dinding
                    </label>
                </div>
                <div style="display: inline-block;">
                    <label>
                        <input type="radio" name="pertanyaan24" value="Luas jendela atau ventilasi lebih dari 50% luas dinding" {{ old('kondisi_dinding_lantai_terbawah') == 'Luas jendela atau ventilasi lebih dari 50% luas dinding' ? 'checked' : '' }}> Luas jendela atau ventilasi lebih dari 50% luas dinding
                    </label>
                </div>
            </div>

            <!-- pertanyaan no.25 -->
            <label for="" class="form-label">25. Kondisi Bangunan Sekolah</label>
            <div class="mb-3">
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan25" value="Bagian bangunan yang panjang, sejajar dengan pantai" {{ old('kondisi_bangunan_sekolah') == 'Bagian bangunan yang panjang, sejajar dengan pantai' ? 'checked' : '' }}> Bagian bangunan yang panjang, sejajar dengan pantai
                    </label>
                </div>
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan25" value="Bagian bangunan panjang, membentuk sudut dengan garis pantai" {{ old('kondisi_bangunan_sekolah') == 'Bagian bangunan panjang, membentuk sudut dengan garis pantai' ? 'checked' : '' }}> Bagian bangunan panjang, membentuk sudut dengan garis pantai
                    </label>
                </div>
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan25" value="Bagian bangunan yang panjang, tegak lurus dengan garis pantai" {{ old('kondisi_bangunan_sekolah') == 'Bagian bangunan yang panjang, tegak lurus dengan garis pantai' ? 'checked' : '' }}> Bagian bangunan yang panjang, tegak lurus dengan garis pantai
                    </label>
                </div>
                <div style="display: inline-block;">
                    <label>
                        <input type="radio" name="pertanyaan25" value="Tidak Tahu" {{ old('kondisi_bangunan_sekolah') == 'Tidak Tahu' ? 'checked' : '' }}> Tidak Tahu
                    </label>
                </div>
            </div>

            <!-- pertanyaan no.26 -->
            <label for="" class="form-label">26. Apakah dalam setahun terakhir, bangunan sekolah pernah melakukan audit ketahanan bangunan terhadap gempa dan tsunami?</label>
            <div class="mb-3">
                <div style="display: inline-block; margin-right: 15px;">
                    <label>
                        <input type="radio" name="pertanyaan26" value="Ya" {{ old('audit_ketahanan_bangunan') == 'Ya' ? 'checked' : '' }}> Ya
                    </label>
                </div>
                <div style="display: inline-block;">
                    <label>
                        <input type="radio" name="pertanyaan26" value="Tidak" {{ old('audit_ketahanan_bangunan') == 'Tidak' ? 'checked' : '' }}> Tidak
                    </label>
                </div>
            </div>

            <!-- pertanyaan no.26 -->
            <label for="" class="form-label">27. Apakah sekolah ini memiliki kebijakan berikut?</label>




            <!-- Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
</div>

@endsection