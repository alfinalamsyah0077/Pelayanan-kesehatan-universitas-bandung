<?php
date_default_timezone_set("Asia/Bangkok");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RAWAT INAP</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600&display=swap"
      rel="stylesheet"
    />
    <!-- My style -->

    <!-- fhater fonts -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My style -->

    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="reg.css" />
  </head>
  <body>
    <form action="prosesri.php" method="post">
      <!-- navbar start -->
      <nav class="navbar-reg">
        <div class="navbar-logo">RAWAT INAP</div>

        <div class="navbar-extra">
          <a name="back" value="Go back!" onclick="history.back()"
            ><i data-feather="chevron-left"></i
          ></a>
          <a href="" id="search"><i data-feather="search"></i></a>
          <a href="index.html" id="home"><i data-feather="home"></i></a>
        </div>
      </nav>
      <!-- vanbar end -->
      <section class="reg" id="reg">
        <div
          style="background-color: rgb(255, 255, 255)"
          class="container p-3 my-3 border"
        >
          <h1 class="text-center">RAWAT INAP</h1>
          <form id="form" method="post">
            <div class="alert alert-dark">
              <strong>A. REGISTRASI PASIEN</strong>
            </div>
            <div class="alert alert-dark">
              <strong>B. GENERAL CONSENT/PERSETUJUAN UMUM</strong>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Tanggal :</label>
                  <input
                    type="date"
                    name="tanggal"
                    class="form-control"
                    value="tangal"
                  />
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Jam :</label>
                  <input
                    type="time"
                    name="jam"
                    class="form-control"
                    value="jam"
                  />
                </div>
              </div>
            </div>
            <div class="alert alert-dark">
              <strong>IDENTITAS PASIEN</strong>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <div class="form-group">
                  <label>NO RM :</label>
                  <input
                    type="text"
                    name="nomor_rm"
                    class="form-control"
                    placeholder="NOMOR REKAM MEDIS"
                  />
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Nomor NIK :</label>
                  <input
                    type="text"
                    name="nomor_nik"
                    class="form-control"
                    placeholder="Masukan NIK Lengkap"
                  />
                </div>
              </div>
              <div class="col-sm-5">
                <div class="form-group">
                  <label>Nama Lengkap :</label>
                  <input
                    type="text"
                    name="nama_lengkap"
                    class="form-control"
                    placeholder="Masukan Nama Lengkap"
                  />
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Tanggal Lahir :</label>
                  <input
                    type="date"
                    class="form-control"
                    name="tanggal_lahirri"
                    placeholder="Tanggal lahir"
                  />
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Jenis Kelamin : </label>
                  <select class="form-control" name="jeniskelamin">
                    <option>Pilih</option>
                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                    <option value="PEREMPUAN">PEREMPUAN</option>
                    <option value="TIDAK DAPAT DI TENTUKAN">
                      TIDAK DAPAT DI TENTUKAN
                    </option>
                    <option value="TIDAK MENGISI">TIDAK MENGISI</option>
                    <option value="TIDAK DI KETAHUI">TIDAK DI KETAHUI</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Persetujuan Pasien :</label>
                  <select name="persetujuanpasien" class="form-control">
                    <option>Pilih</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Informasi Ketentuan Pembayaran :</label>
                  <select name="KetentuanPembayaran" class="form-control">
                    <option>Pilih</option>
                    <option value="Setuju">Setuju</option>
                    <option value="Tidak Setuju">Tidak Setuju</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Informasi tentang Hak dan Kewajiban Pasien :</label>
                  <select
                    name="InformasitentangHakdanKewajibanPasien"
                    class="form-control"
                  >
                    <option>Pilih</option>
                    <option value="Setuju">Setuju</option>
                    <option value="Tidak Setuju">Tidak Setuju</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Informasi tentang Tata Tertib RS :</label>
                  <select
                    name="InformasitentangTataTertibRS"
                    class="form-control"
                  >
                    <option>Pilih</option>
                    <option value="Setuju">Setuju</option>
                    <option value="Tidak Setuju">Tidak Setuju</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Kebutuhan Penterjemah Bahasa :</label>
                  <select
                    name="KebutuhanPenterjemahBahasa"
                    class="form-control"
                  >
                    <option>Pilih</option>
                    <option value="Setuju">Setuju</option>
                    <option value="Tidak Setuju">Tidak Setuju</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Kebutuhan Rohaniawan :</label>
                  <select name="KebutuhanRohaniawan" class="form-control">
                    <option>Pilih</option>
                    <option value="Setuju">Setuju</option>
                    <option value="Tidak Setuju">Tidak Setuju</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Pelepasan Informasi / Kerahasiaan Informasi :</label>
                  <select name="PelepasanInformasi" class="form-control">
                    <option>Pilih</option>
                    <option value="Setuju">Setuju</option>
                    <option value="Tidak Setuju">Tidak Setuju</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label
                    >Hasil Pemeriksaan Penunjang dapat Diberikan kepada Pihak
                    Penjamin :</label
                  >
                  <select name="Hasil" class="form-control">
                    <option>Pilih</option>
                    <option value="Setuju">Setuju</option>
                    <option value="Tidak Setuju">Tidak Setuju</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label
                    >Hasil Pemeriksaan Penunjang dapat Diakses oleh Peserta
                    Didik :</label
                  >
                  <select name="HasilPemeriksaan" class="form-control">
                    <option>Pilih</option>
                    <option value="Setuju">Setuju</option>
                    <option value="Tidak Setuju">Tidak Setuju</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label
                    >Anggota Keluarga Lain yang dapat Diberikan Informasi
                    Data-data Pasien :</label
                  >
                  <input
                    type="text"
                    name="AnggotaKeluarga"
                    class="form-control"
                    placeholder="Anggota keluarga"
                  />
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Fasyankes tertentu dalam rangka rujukan :</label>
                  <select name="Fasyankes" class="form-control">
                    <option>Pilih</option>
                    <option value="Setuju">Setuju</option>
                    <option value="Tidak Setuju">Tidak Setuju</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="alert alert-dark">
              <strong>C. FORMULIR RAWAT INAP</strong>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Tanggal Masuk :</label>
                  <input
                    type="date"
                    name="Tanggal_Masuk"
                    class="form-control"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Tanggal Keluar :</label>
                  <input
                    type="date"
                    name="Tanggal_Keluar"
                    class="form-control"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Kelas Perawatan :</label>
                  <select name="KelasPerawatan" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="VVIP">VVIP</option>
                    <option value="VIP">VIP</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="Kelas Khusus">Kelas Khusus</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Ruangan :</label>
                  <select name="Ruangan" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Melati">Melati</option>
                    <option value="Mawar">Mawar</option>
                    <option value="Matahari">Matahari</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Lantai :</label>
                  <select name="Lantai" id="Lantai" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="L1">L1</option>
                    <option value="L2">L2</option>
                    <option value="L3">L3</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Tempat Tidur :</label>
                  <select name="A" id="A" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                    <option value="A6">A6</option>
                    <option value="A7">A7</option>
                    <option value="A8">A8</option>
                    <option value="A9">A9</option>
                    <option value="A10">A10</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="B4">B4</option>
                    <option value="B5">B5</option>
                    <option value="B6">B6</option>
                    <option value="B7">B7</option>
                    <option value="B8">B8</option>
                    <option value="B9">B9</option>
                    <option value="B10">B10</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                    <option value="C3">C3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="C7">C7</option>
                    <option value="C8">C8</option>
                    <option value="C9">C9</option>
                    <option value="C10">C10</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="alert alert-info">
              <strong>ANAMNESIS</strong>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Keluhan Utama :</label>
                  <textarea
                    name="KeluhanUtama"
                    id="KeluhanUtama"
                    cols="150"
                    rows="5"
                    class="form-control"
                    placeholder="Keluhan Utama"
                  ></textarea>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Riwayat Penyakit :</label>
                  <input
                    type="text"
                    name="RiwayatPenyakit"
                    id="RiwayatPenyakit"
                    class="form-control"
                    placeholder="Riwayat Penyakit"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Riwayat Alergi :</label>
                  <select
                    name="RiwayatAlergi"
                    id="RiwayatAlergi"
                    class="form-control"
                  >
                    <option value="Pilih">Pilih</option>
                    <option value="Obat">Obat</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Cuaca">Cuaca</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Riwayat Pengobatan :</label>
                  <input
                    type="text"
                    name="RiwayatPengobatan"
                    id="RiwayatPengobatan"
                    class="form-control"
                    placeholder="Riwayat Pengobatan"
                  />
                </div>
              </div>
            </div>
            <div class="alert alert-info">
              <strong>PEMERIKSAAN FISIK</strong>
            </div>
            <div class="container">
              <div class="row gx-3">
                <div class="col-md-4">
                  <div class="about-media">
                    <label>Gambar Anatomi Tubuh : </label>
                    <img src="images/anatomi3.jpg" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <br />
            <div class="alert alert-info">
              <strong>KEADAAN UMUM</strong>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Tingkat Kesadaran :</label>
                  <select name="TingkatKesadaran" class="form-control">
                    <option>Pilih</option>
                    <option value="Sadar baik/Alert">
                      Sadar Baik/Alert : 0
                    </option>
                    <option value="Berespon dengan kata-kata / voice">
                      Berespon dengan kata-kata / voice : 1
                    </option>
                    <option
                      value="Hanya berespons jika dirangsang nyeri / pain"
                    >
                      Hanya berespons jika dirangsang nyeri / pain : 2
                    </option>
                    <option value="Pasien tidak sadar / unresponsive">
                      Pasien tidak sadar / unresponsive : 3
                    </option>
                    <option value="Gelisah atau bingung">
                      Gelisah atau bingung : 4
                    </option>
                    <option value="Acute Confusional States">
                      Acute Confusional States : 5
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="alert alert-info">
              <strong>VITAL SIGN</strong>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Denyut Jantung :</label>
                  <input
                    type="text"
                    name="DenyutJantung"
                    class="form-control"
                    placeholder="Vital Sign"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Pernapasan (/s) :</label>
                  <input
                    type="text"
                    name="Pernapasan"
                    class="form-control"
                    placeholder="Vital Sign"
                  />
                </div>
              </div>
            </div>
            <div class="alert alert-info">
              <strong>TEKANAN DARAH</strong>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Systole (/mmHg)</label>
                  <input
                    type="text"
                    name="Systole"
                    class="form-control"
                    placeholder="Systole (/mmHg)"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Diastole (/mmHg)</label>
                  <input
                    type="text"
                    name="Diastole"
                    class="form-control"
                    placeholder="Diastole (/mmHg)"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Suhu Tubuh (℃) </label>
                  <input
                    type="text"
                    name="SuhuTubuh"
                    class="form-control"
                    placeholder="Suhu Tubuh (℃) "
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Kepala :</label>
                  <select name="Kepala" id="Kepala" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Mata :</label>
                  <select name="Mata" id="Mata" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Telinga :</label>
                  <select name="Telinga" id="Telinga" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Hidung :</label>
                  <select name="Hidung" id="Hidung" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Rambut :</label>
                  <select name="Rambut" id="Rambut" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Bibir :</label>
                  <select name="Bibir" id="Bibir" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Gigi Geligi:</label>
                  <select
                    name="GigiGeligi"
                    id="GigiGeligi"
                    class="form-control"
                  >
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Lidah :</label>
                  <select name="Lidah" id="Lidah" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Langit – langit :</label>
                  <select
                    name="Langit_langit"
                    id="Langit_langit"
                    class="form-control"
                  >
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Leher :</label>
                  <select name="Leher" id="Leher" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Tenggorokan :</label>
                  <select
                    name="Tenggorokan"
                    id="Tenggorokan"
                    class="form-control"
                  >
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Tonsil :</label>
                  <select name="Tonsil" id="Tonsil" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Dada :</label>
                  <select name="Dada" id="Dada" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Payudara :</label>
                  <select name="Payudara" id="Payudara" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Punggung :</label>
                  <select name="Punggung" id="Punggung" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Perut :</label>
                  <select name="Perut" id="Perut" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Genital :</label>
                  <select name="Genital" id="Genital" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Anus/dubur :</label>
                  <select
                    name="Anus/dubur"
                    id="Anus/dubur"
                    class="form-control"
                  >
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Lengan atas :</label>
                  <select
                    name="Lenganatas"
                    id="Lenganatas"
                    class="form-control"
                  >
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Lengan bawah :</label>
                  <select name="Lenganbawah" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Jari tangan :</label>
                  <select
                    name="Jaritangan"
                    id="Jaritangan"
                    class="form-control"
                  >
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Kuku tangan :</label>
                  <select
                    name="Kukutangan"
                    id="Kuku tangan"
                    class="form-control"
                  >
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Persendian tangan :</label>
                  <select
                    name="Persendiantangan"
                    id="Persendian tangan"
                    class="form-control"
                  >
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Tungkai atas :</label>
                  <select
                    name="Tungkaiatas"
                    id="Tungkai atas"
                    class="form-control"
                  >
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Tungkai bawah :</label>
                  <select
                    name="Tungkaibawah"
                    id="Tungkai bawah"
                    class="form-control"
                  >
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Jari kaki :</label>
                  <select name="Jarikaki" id="Jari kaki" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Kuku kaki :</label>
                  <select name="Kukukaki" id="Kuku kaki" class="form-control">
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Persendian kaki :</label>
                  <select
                    name="Persendiankaki"
                    id="Persendian kaki"
                    class="form-control"
                  >
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Tidak diperiksa">Tidak diperiksa</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="alert alert-info">
              <strong>PEMERIKSAAN PSIKOLOGIS, SOSIAL EKONOMI, SPIRITUAL</strong>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Status psikologis :</label>
                  <select
                    name="Statuspsikologis"
                    id="Status psikologis"
                    class="form-control"
                  >
                    <option value="Pilih">Pilih</option>
                    <option value="Tidak ada kelainan">
                      Tidak ada kelainan
                    </option>
                    <option value="Cemas">Cemas</option>
                    <option value="Takut ">Takut</option>
                    <option value="Marah">Marah</option>
                    <option value="Sedih">Sedih</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Social ekonomi :</label>
                  <input
                    type="text"
                    name="Socialekonomi"
                    id="Social ekonomi"
                    class="form-control"
                    placeholder="Social ekonomi"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Spiritual :</label>
                  <input
                    type="text"
                    name="Spiritual"
                    id="Spiritual"
                    class="form-control"
                    placeholder="Spiritual"
                  />
                </div>
              </div>
            </div>
            <div class="alert alert-dark">
              <strong>PEMERIKSAAN SPESIALISTIK </strong>
            </div>
            <div class="alert alert-info">
              <strong>RIWAYAT PENGGUNAAN OBAT</strong>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Nama Obat :</label>
                  <input
                    type="text"
                    name="Namaobatyangunakan"
                    class="form-control"
                    placeholder="Nama Obat"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Dosis :</label>
                  <input
                    type="text"
                    name="Dosis"
                    class="form-control"
                    placeholder="Dosis"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Waktu Penggunaan :</label>
                  <input
                    type="text"
                    name="WaktuPenggunaan"
                    class="form-control"
                    placeholder="Waktu Penggunaan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Rencana Rawat :</label>
                  <input
                    type="text"
                    name="RencanaRawat"
                    class="form-control"
                    placeholder="Rencana Rawat"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Perencanaan Pemulangan Pasien :</label>
                  <select
                    class="form-control"
                    name="PerencanaanPemulanganPasien"
                  >
                    <option>Pilih</option>
                    <option value="Pasien lansia">Pasien lansia</option>
                    <option value="Gangguan anggota gerak">
                      Gangguan anggota gerak
                    </option>
                    <option
                      value="Pasien dengan perawatan berkelanjutan atau Panjang"
                    >
                      Pasien dengan perawatan berkelanjutan atau Panjang
                    </option>
                    <option
                      value="Memerlukan bantuan dalam aktivitas sehari-hari"
                    >
                      Memerlukan bantuan dalam aktivitas sehari-hari
                    </option>
                    <option value="Tidak masuk kriteria">
                      Tidak masuk kriteria
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Instruksi Medis dan Keperawatan :</label>
                  <textarea
                    class="form-control"
                    name="InstruksiMedisdanKeperawatan"
                    id="Instruksi Medis dan Keperawatan"
                    cols="100"
                    rows="3"
                  ></textarea>
                </div>
              </div>
            </div>
            <br />
            <div class="alert alert-info">
              <strong>PEMERIKSAAN PENUNJANG</strong>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Tanggal Masuk</label>
                  <input
                    type="date"
                    name="tanggal"
                    class="form-control"
                    value="tanggal"
                  />
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Jam Masuk</label>
                  <input
                    type="time"
                    name="jam"
                    class="form-control"
                    value="jam"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Status Puasa Pasien : </label>
                  <select class="form-control" name="StatusPuasaPasien">
                    <option>Pilih</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="alert alert-dark">
              <strong>LABORATORIUM</strong>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Nama Pemeriksaan :</label>
                  <input
                    type="text"
                    name="NamaPemeriksaan"
                    class="form-control"
                    placeholder="Nama Pemeriksaan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Nomor Permintaan :</label>
                  <input
                    type="number"
                    name="NomorPermintaan"
                    class="form-control"
                    placeholder="Nomor Permintaan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Waktu Permintaan :</label>
                  <input
                    type="datetime-local"
                    name="WaktuPermintaan"
                    class="form-control"
                    placeholder="Waktu Permintaan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Dokter Pengirim :</label>
                  <input
                    type="text"
                    name="DokterPengirim"
                    class="form-control"
                    placeholder="Dokter Pengirim"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>No.Telepon Dokter Pengirim :</label>
                  <input
                    type="int"
                    name="NoTeleponDokterPengirim"
                    class="form-control"
                    placeholder="No.Telepon Dokter Pengirim"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label
                    >Nama Fasilitas Pelayanan Kesehatan yang Mengirim Spesimen
                    Klinis :</label
                  >
                  <input
                    type="text"
                    name="NamaFasilitasPelayananKesehatan"
                    class="form-control"
                    placeholder="Nama Fasilitas Pelayanan Kesehatan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Unit Pengirim :</label>
                  <input
                    type="text"
                    name="UnitPengirim"
                    class="form-control"
                    placeholder="Unit Pengirim"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Prioritas Pemeriksaan :</label>
                  <select class="form-control" name="PrioritasPemeriksaan">
                    <option>Pilih</option>
                    <option value="CITO">CITO</option>
                    <option value="Non CITO">Non CITO</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Diagnosis / Masalah :</label>
                  <input
                    type="text"
                    name="Diagnosis/Masalah"
                    class="form-control"
                    placeholder="Diagnosis / Masalah"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Catatan Permintaan :</label>
                  <input
                    type="text"
                    name="CatatanPermintaan"
                    class="form-control"
                    placeholder="Catatan Permintaan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Metode Pengiriman Hasil :</label>
                  <select class="form-control" name="MetodePengirimanHasil">
                    <option>Pilih</option>
                    <option value="Penyerahanlangsung">
                      Penyerahan langsung
                    </option>
                    <option value="Dikirim via surel">Dikirim via surel</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Asal Sumber Spesimen Klinis :</label>
                  <select class="form-control" name="AsalSumberSpesimenKlinis">
                    <option>Pilih</option>
                    <option value="Darah">Darah</option>
                    <option value="Urin">Urin</option>
                    <option value="Feses">Feses</option>
                    <option value="Jaringan tubuh">Jaringan tubuh</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Lokasi Pengambilan Spesimen Klinis :</label>
                  <input
                    type="text"
                    name="LokasiPengambilanSpesimenKlinis"
                    class="form-control"
                    placeholder="Lokasi Pengambilan Spesimen Klinis"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Jumlah Spesimen Klinis :</label>
                  <input
                    type="text"
                    name="JumlahSpesimenKlinis"
                    class="form-control"
                    placeholder="Jumlah Spesimen Klinis"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Volume Spesimen Klinis (ml) :</label>
                  <input
                    type="text"
                    name="VolumeSpesimenKlinis"
                    class="form-control"
                    placeholder="Volume Spesimen Klinis"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Cara / Metode Pengambilan Spesimen Klinis :</label>
                  <input
                    type="text"
                    name="Cara/MetodePengambilanSpesimenKlinis"
                    class="form-control"
                    placeholder="Cara / Metode Pengambilan Spesimen Klinis"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Waktu Pengambilan Spesimen Klinis :</label>
                  <input
                    type="datetime-local"
                    name="WaktuPengambilanSpesimenKlinis"
                    class="form-control"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Kondisi Spesimen Klinis pada saat Pengambilan :</label>
                  <input
                    type="text"
                    name="KondisiSpesimenKlinispadasaatPengambilan"
                    class="form-control"
                    placeholder="Kondisi Spesimen Klinis pada saat Pengambilan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Waktu Fiksasi Spesimen Klinis :</label>
                  <input
                    type="datetime-local"
                    name="WaktuFiksasiSpesimenKlinis"
                    class="form-control"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Cairan Fiksasi (ml) :</label>
                  <input
                    type="text"
                    name="CairanFiksasi(ml)"
                    class="form-control"
                    placeholder="Cairan Fiksasi (ml)"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Volume Cairan Fiksasi (ml) :</label>
                  <input
                    type="text"
                    name="VolumeCairanFiksasi(ml)"
                    class="form-control"
                    placeholder="Volume Cairan Fiksasi (ml)"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Nama Petugas yang Mengambil Spesimen Klinis :</label>
                  <input
                    type="text"
                    name="NamaPetugasyangMengambilSpesimenKlinis"
                    class="form-control"
                    placeholder="Nama Petugas yang Mengambil Spesimen Klinis"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label
                    >Nama Petugas yang Mengantarkan Spesimen Klinis :</label
                  >
                  <input
                    type="text"
                    name="NamaPetugasyangMengantarkanSpesimenKlinis"
                    class="form-control"
                    placeholder="Nama Petugas yang Mengantarkan Spesimen Klinis"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Nama Petugas yang Menerima Spesimen Klinis :</label>
                  <input
                    type="text"
                    name="NamaPetugasyangMenerimaSpesimenKlinis"
                    class="form-control"
                    placeholder="Nama Petugas yang Menerima Spesimen Klinis"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label
                    >Nama Petugas yang Menganalisis Spesimen Klinis :</label
                  >
                  <input
                    type="text"
                    name="NamaPetugasyangMenganalisisSpesimenKlinis"
                    class="form-control"
                    placeholder="Nama Petugas yang Menganalisis Spesimen Klinis"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label
                    >Waktu Pemeriksaan/Pengujian dan Pengolahan Spesimen Klinis
                    :</label
                  >
                  <input
                    type="datetime-local"
                    name="WaktuPemeriksaan/PengujiandanPengolahanSpesimenKlinis"
                    class="form-control"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Hasil Pemeriksaan :</label>
                  <select
                    name="HasilPemeriksaan"
                    id="HasilPemeriksaan"
                    class="form-control"
                  >
                    <option value="Pilih">Pilih</option>
                    <option value="Nilai Hasil Pemeriksaan">
                      Nilai Hasil Pemeriksaan
                    </option>
                    <option value="Nilai Normal/Tidak Normal">
                      Nilai Normal/Tidak Normal
                    </option>
                    <option value="Nilai Rujukan">Nilai Rujukan</option>
                    <option value="Nilai Kritis">Nilai Kritis</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Interpretasi Hasil Pemeriksaan :</label>
                  <input
                    type="text"
                    name="InterpretasiHasilPemeriksaan"
                    class="form-control"
                    placeholder="Interpretasi Hasil Pemeriksaan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label
                    >Nama Dokter yang Memvalidasi/Memverifikasi Hasil
                    Pemeriksaan :</label
                  >
                  <input
                    type="text"
                    name="NamaDokteryangMemvalidasi"
                    class="form-control"
                    placeholder="Nama Dokter"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label
                    >Nama Dokter yang Menginterpretasi Hasil Pemeriksaan
                    :</label
                  >
                  <input
                    type="text"
                    name="NamaDokteryangMenginterpretasiHasilPemeriksaan"
                    class="form-control"
                    placeholder="Nama Dokter"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label
                    >Waktu Hasil Pemeriksaan Keluar dari Laboratorium :</label
                  >
                  <input
                    type="datetime-local"
                    name="WaktuHasilPemeriksaanKeluardariLaboratorium"
                    class="form-control"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label
                    >Waktu Hasil Pemeriksaan Laboratorium Diterima Unit Pengirim
                    :</label
                  >
                  <input
                    type="datetime-local"
                    name="WaktuHasilPemeriksaanLaboratoriumDiterimaUnitPengirim"
                    class="form-control"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label
                    >Nama Fasilitas Kesehatan yang Melakukan Pemeriksaan
                    :</label
                  >
                  <input
                    type="text"
                    name="NamaFasilitasKesehatanyangMelakukanPemeriksaan"
                    class="form-control"
                    placeholder="Nama Fasilitas Kesehatan yang Melakukan Pemeriksaan "
                  />
                </div>
              </div>
            </div>
            <div class="alert alert-dark">
              <strong>RADIOLOGI</strong>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Nama Pemeriksaan Radiologi :</label>
                  <select
                    name="NamaPemeriksaanRadiologi"
                    id="Nama Pemeriksaan Radiologi"
                    class="form-control"
                  >
                    <option value="Pilih">Pilih</option>
                    <option value="X-ray">X-ray</option>
                    <option value="CT Scan">CT Scan</option>
                    <option value="USG">USG</option>
                    <option value="MRI">MRI</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Jenis Pemeriksaan Radiologi :</label>
                  <select
                    name="JenisPemeriksaanRadiologi"
                    id="Nama Pemeriksaan Radiologi"
                    class="form-control"
                  >
                    <option value="Pilih">Pilih</option>
                    <option value="Cranium">Cranium</option>
                    <option value="Gigi geligi">Gigi geligi</option>
                    <option value="Vertebra">Vertebra</option>
                    <option value="Badan">Badan</option>
                    <option value="Ekstremitas atas">Ekstremitas atas</option>
                    <option value="Ekstremitas Bawah">Ekstremitas Bawah</option>
                    <option value="Kontras Saluran Cerna">
                      Kontras Saluran Cerna
                    </option>
                    <option value="Kontras Saluran Kencing">
                      Kontras Saluran Kencing
                    </option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label> Nomor Permintaan Radiologi :</label>
                  <input
                    type="text"
                    name="NomorPermintaanRadiologi"
                    class="form-control"
                    placeholder="Nomor Permintaan Radiologi "
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Waktu Permintaan Radiologi :</label>
                  <input
                    type="datetime-local"
                    name="WaktuPermintaanRadiologi"
                    class="form-control"
                    placeholder="Waktu Permintaan Radiologi "
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Dokter Pengirim :</label>
                  <input
                    type="text"
                    name="DokterPengirimRadiologi"
                    class="form-control"
                    placeholder="Dokter Pengirim"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Nomor Telepon Dokter Pengirim :</label>
                  <input
                    type="text"
                    name="NomorTeleponDokterPengirim"
                    class="form-control"
                    placeholder="Nomor Telepon Dokter Pengirim"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label
                    >Nama Fasilitas Kesehatan yang Mengirim Permintaan Radiologi
                    :</label
                  >
                  <input
                    type="text"
                    name="NamaFasilitasKesehatanyangMengirimPermintaanRadiologi"
                    class="form-control"
                    placeholder="Nama Fasilitas Kesehatan yang Mengirim Permintaan Radiologi"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Unit Pengirim Permintaan Radiologi :</label>
                  <input
                    type="text"
                    name="UnitPengirimPermintaanRadiologi"
                    class="form-control"
                    placeholder="Unit Pengirim Permintaan Radiologi"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Prioritas Pemeriksaan :</label>
                  <select
                    class="form-control"
                    name="PrioritasPemeriksaanradiologi"
                  >
                    <option>Pilih</option>
                    <option value="CITO">CITO</option>
                    <option value="Non CITO">Non CITO</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Diagnosis Kerja / Masalah :</label>
                  <input
                    type="text"
                    name="DiagnosisKerja/Masalahradiologi"
                    class="form-control"
                    placeholder="Diagnosis Kerja / Masalah radiologi"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Catatan Permintaan :</label>
                  <input
                    type="text"
                    name="CatatanPermintaanradiologi"
                    class="form-control"
                    placeholder="Catatan Permintaan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Metode Pengiriman Hasil :</label>
                  <select
                    class="form-control"
                    name="MetodePengirimanHasilradiologi"
                  >
                    <option>Pilih</option>
                    <option value="Penyerahan langsung">
                      Penyerahan langsung
                    </option>
                    <option value="Dikirim via surel">Dikirim via surel</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label
                    >Status Alergi Pasien terhadap Bahan Kontras/Zat Lainnya
                    :</label
                  >
                  <select
                    class="form-control"
                    name="StatusAlergiPasienterhadapBahanKontras/ZatLainnya"
                  >
                    <option>Pilih</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Status Kehamilan :</label>
                  <select class="form-control" name="StatusKehamilan">
                    <option>Pilih</option>
                    <option value="Hamil">Hamil</option>
                    <option value="Tidak Hamil">Tidak Hamil</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Tanggal dan Waktu Pemeriksaan Radiologi :</label>
                  <input
                    type="datetime-local"
                    name="TanggaldanWaktuPemeriksaanRadiologi"
                    class="form-control"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Jenis Bahan Kontras :</label>
                  <input
                    type="text"
                    name="JenisBahanKontras"
                    class="form-control"
                    placeholder="Jenis Bahan Kontras"
                  />
                </div>
              </div>
            </div>
            <div class="alert alert-info">
              <strong>HASIL PEMERIKSAAN RADIOLOGI</strong>
            </div>
            <div class="row">
              <div class="col-sm-2">
                <div class="form-group">
                  <label>Foto Hasil Pemeriksaan</label>
                  <input
                    type="file"
                    name="foto"
                    class="form-control"
                    placeholder="Masukan File"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label
                    >Nama Dokter yang Menginterpretasi Hasil Pemeriksaan</label
                  >
                  <input
                    type="text"
                    name="NamaDokteryangMenginterpretasiHasilPemeriksaan"
                    class="form-control"
                    placeholder="Nama Dokter yang Menginterpretasi Hasil Pemeriksaan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Interpretasi Radiologi</label>
                  <input
                    type="text"
                    name="InterpretasiRadiologi"
                    class="form-control"
                    placeholder="Interpretasi Radiologi"
                  />
                </div>
              </div>
            </div>
            <div class="alert alert-info">
              <strong>DIAGNOSIS</strong>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Diagnosis Awal / Masuk :</label>
                  <input
                    type="text"
                    name="DiagnosisAwal/Masuk"
                    class="form-control"
                    placeholder="Diagnosis Awal / Masuk"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Diagnosis Akhir /Keluar :</label>
                  <input
                    type="text"
                    name="DiagnosisPrimer/Utama"
                    class="form-control"
                    placeholder="Diagnosis Primer / Utama"
                  />
                  <input
                    type="text"
                    name="DiagnosisSekunder/Penyerta"
                    class="form-control"
                    placeholder="Diagnosis Sekunder / Penyerta"
                  />
                </div>
              </div>
            </div>
            <div class="alert alert-info">
              <strong
                >Persetujuan Tindakan/Penolakan Tindakan (Informed
                Consent)</strong
              >
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Nama Pasien :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="NamaPasien"
                    placeholder="Nama Pasien"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Nama Dokter Yang Memberi Penjelasan :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="NamaDokter"
                    placeholder="Nama Dokter"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Nama Petugas yang mendapingi :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="NamaPetugasyangmendapingi"
                    placeholder="Nama Petugas yang mendapingi"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Nama Keluarga Pasien :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="NamaKeluargaPasien"
                    placeholder="Nama Keluarga Pasien"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Tindakan Yang Dilakukan :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="TindakanYangDilakukan"
                    placeholder="Tindakan Yang Dilakukan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Konsekuensi Dari Tindakan :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="KonsekuensiDariTindakan"
                    placeholder="Konsekuensi Dari Tindakan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Persetujuan/ Penolakan Tindakan :</label>
                  <select
                    class="form-control"
                    name="Persetujuan/PenolakanTindakan"
                  >
                    <option>Pilih</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Tanggal Pemberian Penjelasan Tindakan :</label>
                  <input
                    type="datetime-local"
                    class="form-control"
                    name="TanggalPemberianPenjelasanTindakan"
                    placeholder="Tanggal Pemberian Penjelasan Tindakan"
                  />
                </div>
              </div>
            </div>
            <div class="alert alert-dark">
              <strong>TERAPI</strong>
            </div>
            <div class="alert alert-info">
              <strong>TINDAKAN</strong>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Nama Tindakan dan Kode ICD 9 :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="NamaTindakandanKodeICD9"
                    placeholder="Nama Tindakan dan Kode ICD 9"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Petugas yang Melaksanakan :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="PetugasyangMelaksanakan"
                    placeholder="Petugas yang Melaksanakan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Tanggal Pelaksanaan Tindakan :</label>
                  <input
                    type="date"
                    class="form-control"
                    name="TanggalPelaksanaanTindakan"
                    placeholder="Tanggal Pelaksanaan Tindakan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Waktu Mulai Tindakan :</label>
                  <input
                    type="time"
                    class="form-control"
                    name="WaktuMulaiTindakan"
                    placeholder="Waktu Mulai Tindakan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Waktu Selesai Tindakan :</label>
                  <input
                    type="time"
                    class="form-control"
                    name="WaktuSelesaiTindakan"
                    placeholder="Waktu Selesai Tindakan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Alat Medis yang Digunakan :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="AlatMedisyangDigunakan"
                    placeholder="Alat Medis yang Digunakan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>BMHP :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="BMHP"
                    placeholder="BMHP"
                  />
                </div>
              </div>
            </div>
            <div class="alert alert-info">
              <strong>OBAT</strong>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Tanggal Penulisan Resep :</label>
                  <input
                    type="datetime-local"
                    class="form-control"
                    name="TanggalPenulisanResep"
                    placeholder="Tanggal Penulisan Resep "
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>ID Resep :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="IDResep"
                    placeholder="ID Resep "
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Nama Obat :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="NamaObat"
                    placeholder="Nama Obat"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>ID Obat :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="IDObat"
                    placeholder="ID Obat"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Bentuk / Sediaan :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="Bentuk/Sediaan"
                    placeholder="Bentuk / Sediaan "
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Jumlah Obat :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="JumlahObat"
                    placeholder="Jumlah Obat"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Metode / Rute Pemberian :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="Metode/RutePemberian"
                    placeholder="Metode / Rute Pemberian"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Dosis Obat yang Diberikan :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="DosisObatyangDiberikan"
                    placeholder="Dosis Obat yang Diberikan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Unit :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="Unitradiologi"
                    placeholder="Unit"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Frekuensi/Interval :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="Frekuensi/Interval"
                    placeholder="Frekuensi/Interval"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Aturan Tambahan :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="AturanTambahan"
                    placeholder="Aturan Tambahan"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Catatan Resep :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="CatatanResep"
                    placeholder="Catatan Resep"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Status Resep :</label>
                  <select class="form-control" name="StatusResep">
                    <option>Pilih</option>
                    <option value="Pending">Pending</option>
                    <option value="Sudah diberikan">Sudah diberikan</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Dokter yang menulis resep :</label>
                  <input
                    type="text"
                    class="form-control"
                    name="Dokteryangmenulisresep"
                    placeholder="Dokter yang menulis resep"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Kondisi Saat Meninggalkan Rumah Sakit :</label>
                  <select
                    class="form-control"
                    name="KondisiSaatMeninggalkanRumahSakit"
                  >
                    <option>Pilih</option>
                    <option value="Sembuh">Sembuh</option>
                    <option value="Meninggal >48 jam">Meninggal >48 jam</option>
                    <option value="Meninggal <48 jam">Meninggal <48 jam</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Rencana Tindak Lanjut :</label>
                  <select class="form-control" name="RencanaTindakLanjut">
                    <option>Pilih</option>
                    <option value="Dikonsulkan ke poli lain">
                      Dikonsulkan ke poli lain
                    </option>
                    <option value="Di rujuk ke RS lain">
                      Di rujuk ke RS lain
                    </option>
                    <option value="Rawat">Rawat</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>--Instruksi untuk Tindak Lanjut--</label>
                </div>
              </div>
            </div>
            <br />
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Kontrol Ke :</label>
                  <input
                    type="text"
                    name="kontrolke"
                    placeholder="kontrol ke"
                    class="form-control"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Tanggal :</label>
                  <input
                    type="date"
                    name="Tanggaltindaklanjut"
                    placeholder="tanggal"
                    class="form-control"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Dalam Keadaan Darurat Dapat Menghubungi :</label>
                  <input
                    type="text"
                    name="DalamKeadaanDaruratDapatMenghubungi"
                    placeholder="Dalam Keadaan Darurat Dapat Menghubungi"
                    class="form-control"
                  />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Sarana transportasi untuk rujuk :</label>
                  <select class="form-control" name="Saranatransportasi">
                    <option>Pilih</option>
                    <option value="Ambulans">Ambulans</option>
                    <option value="Mobil">Mobil</option>
                    <option value="Motor">Motor</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="alert alert-success">
              <strong>
                <input type="checkbox" name="pernyataan1" value="pernyataan1" />
                Saya menyatakan data yang di isi sudah benar
              </strong>
              <br />
              <strong>
                <input type="checkbox" name="pernyataan2" value="pernyataan2" />
                Jika salah saya siap menerima sangsi
              </strong>
            </div>

            <center>
              <button
                type="button"
                name="back"
                class="btn btn-primary"
                value="Go back!"
                onclick="history.back()"
              >
                BACK
              </button>
              <button
                type="submit"
                name="submit"
                class="btn btn-success"
                value= <?php echo date ("h:i:sa"); ?>
              >
                SEND
              </button>
              <button type="reset" name="reset" class="btn btn-secondary">
                RESET
              </button>
            </center>
          </form>
        </div>
      </section>
    </form>
    <script>
      feather.replace();
    </script>
  </body>
</html>
