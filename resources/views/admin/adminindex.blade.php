@include('admin/source/header');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Xəbər Paylaş</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Məlumatlar</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              @if ($errors->any())
      <div class="alert alert-danger">
        <b>{{$errors->first()}}</b>
      </div>
    @endif
              <form action="{{route('admin.addpost')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="inputName">Xəbərin başlığı</label>
                <input type="text" name="title" id="inputName" class="form-control">
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="customFile">
                <label class="custom-file-label" for="customFile"> Başlığ şəkil seç</label>
              </div>
              <div class="form-group">
                <label for="inputDescription">Mətn</label>
                <textarea id="summernote" name="content" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Xəbərin kategoriyası</label>
                <select id="inputStatus" name="category" class="form-control custom-select">
                  <option selected disabled>Kategoriya seçin</option>
                  @foreach ($categories as $dat)
                  <option name="category" value="{{$dat->id}}">{{$dat->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <input type="text" name="user_id" id="inputClientCompany" hidden value="{{Auth::user()->id}}" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Paylaşılma tarixi</label>
                <input type="text" id="inputProjectLeader" value="{{date('Y-m-d H:i:s');}}" class="form-control">
              </div>
              <div>
                <button class="btn btn-success">Paylaş</button>
              </div>
                 </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      
    </section>
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

@include('admin/source/footer');
