<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tugas PBO</title>
  </head>
  <body>
    <h1 class="text-center">Tambah Data Mahasiswa</h1>
    <h1 class="text-center mb-4">by Salsabilla Putri Saharani</h1>

   
    <div class="container">
        <div class="  row justify-content-center">
          <div class="col-8">

            
              <form action='/insertdata' method='post'enctype='multipart/form-data'>
              @csrf
  <div class="mb-3">
    <label for="exampleInputNama" class="form-label">Nama Lengkap</label>
    <input type="text" name="nama" class="form-control" id="exampleInputNama" aria-describedby="namaHelp">
    <div id="namaHelp" class="form-text">Contoh : Salsabilla Putri Saharani</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputNIM" class="form-label">NIM</label>
    <input type="number" name="nim" class="form-control" id="exampleInputNIM" aria-describedby="nimHelp">
    <div id="nimlHelp" class="form-text">Contoh : 20051214012</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputJenisKelamin" class="form-label">Jenis Kelamin</label>
    <select name ="jeniskelamin" class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Pilih Jenis Kelamin</option>
  <option value="1">Perempuan</option>
  <option value="2">Laki-Laki</option>
 
</select>

</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputAlamat" class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="exampleInputAlamat" aria-describedby="alamatHelp">
    <div id="alamatlHelp" class="form-text">Contoh : Desa Ngampel, Kecamatan Manyar, Kabupaten Gresik, Jawa Timur</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputKota" class="form-label">Kota</label>
    <input type="text" name="kota" class="form-control" id="exampleInputKota" aria-describedby="kotaHelp">
    <div id="kotalHelp" class="form-text">Contoh : Greik</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Contoh : Salsabilla@mhs.unesa.ac.id</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputFoto" class="form-label">Masukkan Foto</label>
    <input type="file" name="foto" class="form-control">
  </div>

  
  <button type="submit" class="btn btn-primary">Masukkan Data</button>
</form>
              
          
          </div>
         
          </div> 
</div>
</div>