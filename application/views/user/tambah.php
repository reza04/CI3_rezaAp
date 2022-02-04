<!DOCTYPE html>
<html lang="en">
<head>    
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Tambah Data Siswa</title>
</head>
<body>

<div style="color: black;" class="container mb-3 mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card mx-auto" style="width: 30rem;">
                <div class="card-body">
                    <h1 class="text-center">Form Tambah Siswa</h1>
                    <form class="m-5" action="<?php echo base_url('index.php/user/action_tambah') ?>" method="post">
                        <div class="form-group">
                            <label for="">Nama</label><br>
                            <input type="text" name="username" class="form-control mt-2" required><br>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label><br>
                            <input type="email" name="email" class="form-control mt-2" required><br>
                            
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label><br>
                            <input type="password" name="password" class="form-control mt-2" required><br>
                            
                        </div>
                        <button style="color: white;"  class="btn btn-info mt-3" type="submit">Simpan</button>
                        <a style="color: white;"  class="btn btn-info mt-3" href="<?php echo base_url('index.php/user') ?>">Data Siswa</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></script>
    
    <!-- Fontawesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

</body>
</html>