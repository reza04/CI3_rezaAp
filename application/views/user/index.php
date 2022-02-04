<!DOCTYPE html>
<html lang="en">
<head>    
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Data Siswa</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-4">
                
                </div>
                <div class="col-6">
                <h1>Data Siswa</h1>

            </div>
            <div class="col-2">
                
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-2 p-3">
            <!-- logo -->
            <div class="mt-4 col-lg-3 col-12 col-md-2 ml-4">

            </div>
            <!-- search bar -->
            <div class=" mt-4 col-lg-6 col-12 col-md-10 ">
                <form class="form-inline my-2 my-lg-0" method="get" action="">
                   <div class="row">
                        <div class="col-6 text-center">
                            <input class="form-control mr-sm-2" type="search" style="width: 370px;" placeholder="Search" name="nama">
                        </div>
                        <div class="col-3 text-center">
                        <button class="btn btn-outline-info my-2 my-sm-0" style="width: 50px;" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="col-3">
                            <a  class="text-center" href="<?php echo base_url('index.php/user/tambah') ?>"><i style=" width: 40px;; height: 40px; color:chartreuse" class="fas fa-user-plus"></i></a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="mt-4 col-lg-2 col-12 col-md-12">
                
            </div>
        </div>
    </div>


    <?php if(!empty($data)):?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table style="color: white;" class="table table-bordered  text-center">
                        <thead style="color: white;" class="bg-info bg-gradient"></>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>
                                Action
                            </th>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach($data AS $key => $value):?>
                                <tr style="color: 	#808080;">
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $value['username'] ?></td>
                                    <td><?php echo $value['email'] ?></td>
                                    <td><?php echo $value['password'] ?></td>
                                    <td>
                                        <a href="<?php echo base_url('index.php/user/edit/'.$value['id']) ?>"><i style="width: 50px; height: 25px;" class="fas fa-user-edit"></i></a>
                                        |
                                        <a style="color: #DC143C;" href="<?php echo base_url('index.php/user/delete/'.$value['id']) ?>"><i style="width: 50px; height: 25px;" class="fas fa-user-minus"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    <?php endif?>x

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></script>
    
    <!-- Fontawesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

</body>
</html>