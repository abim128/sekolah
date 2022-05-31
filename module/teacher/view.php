<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <table class="table table-stripped table-hover table-border">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nip</th>
                        <th>Name</th>
                        <th>Pob</th>
                        <th>Dob</th>
                        <th>Photo</th>
                        <th>Wa</th>
                        <th>Id Subject</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once ('config.php');
                    $sql = "SELECT * FROM teachers";
                    $result = mysqli_query($config, $sql);
                    if (mysqli_num_rows($result)>0) {
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>".$no."</td>";
                            echo "<td>".$row['nip']."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['pob']."</td>";
                            echo "<td>".$row['dob']."</td>";
                            echo "<td>".$row['photo']."</td>";
                            echo "<td>".$row['wa']."</td>";
                            echo "<td>".$row['subject_id']."</td>";
                            echo "<td>
                                <a href='?m=subject&s=edit&id=".$row['id']."' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='?m=subject&s=delete&id=".$row['id']."' class='btn btn-danger btn-sm'>Hapus</a>
                                </td>";
                            echo"</tr>";
                            $no++;
                        }
                    } else {
                      echo "data kosong";
                    }
                    ?>
                </tbody>
            </table>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->