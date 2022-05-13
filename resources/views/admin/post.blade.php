@include('admin/source/header');
<style>
    @media screen and (max-width: 576px){
      #news-table{
        width: 40rem;
      }
    }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Xəbərlər</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Məlumatlar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive-md">
                  <table id="news-table" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Xəbərin başlığı</th>
                      <th>Yazar</th>
                      <th>Kategoriyası</th>
                      <th style="width: 150px">Yenilə/Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($news as $data)
                      <tr>
                        <td>{{$data->title}}</td>
                        <td> {{$data->getUser->name}}</td>
                        <td> {{$data->getCategory->name}}</td>
                        <td>
                          <a href="update/{{$data->id}}"><button class="btn btn-success" >Yenilə</button></a>
                          <a href="delete/{{$data->id}}"><button class="btn btn-danger">Sil</button></a>
                        </td>
                        
                      </tr> 
                      @endforeach
                  
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
                  {{$news->links()}}
            <!-- /.card -->
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
</body>
</html>
