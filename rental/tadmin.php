<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

        <div class="card">
        <h3 class="card-header">Tambah Admin</h3>
        
        <!--Form Login-->
        <form method="post" action="?x=sadmin">
        <div class="mb-3 ">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="TxtNama" required>
            </div>
        <div class="mb-3 ">
            <label>Jenis Kelamin</label>
            <select name="Kelamin" class="form-control" required>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            </div>
        <div class="mb-3 ">
            <label>Alamat</label>
            <input type="text" class="form-control" name="TxtAlamat" required>
        </div>        
        <div class="mb-3 ">
            <label>No.Telp</label>
            <input type="text" class="form-control" name="TxtNotelp" required>
            </div>
        <div class="mb-3 ">
            <label>Username</label>
            <input type="text" class="form-control" name="TxtUsername" required>
            </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" class="form-control" name="TxtPassword" required>
        </div>
        <div class="mb-3 ">
            <label>Level</label>
            <select name="Level" class="form-control" required>
                <option value="SUPER">SUPER</option>
                <option value="Petugas">Petugas</option>
            </select>
            </div> 
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>