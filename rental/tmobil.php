<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

        <div class="card">
        <h3 class="card-header">Tambah Data Mobil</h3>
        
        <!--Form Login-->
        <form method="post" action="?x=smobil">
        <div class="mb-3 ">
            <label>No. Polisi</label>
            <input type="text" class="form-control" name="TxtNopol" required>
            </div>
        <div class="mb-3 ">
            <label>Merk Mobil</label>
            <input type="text" class="form-control" name="TxtMerk" required>
            </div>
        <div class="mb-3 ">
            <label>Tahun</label>
            <input type="text" class="form-control" name="TxtTahun" required>
            </div>
        <div class="mb-3 ">
            <label>Spesifikasi Mesin</label>
            <input type="text" class="form-control" name="TxtSpek" required>
        </div>
        <div class="mb-3 ">
            <label>Jumlah Seat</label>
            <input type="text" class="form-control" name="TxtSeat" required>
        </div>  
        <div class="mb-3">
            <label>Harga</label>
            <input type="text" class="form-control" name="TxtHarga" required>
        </div>
        <div class="mb-3 ">
            <label>Gambar</label>
            <input type="file" class="form-control" name="TxtGambar" required>
            </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>