
@extends('backend.layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Banners</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Baners  <small>Update Baners</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                            @foreach ($errors->all() as $error )
                             <ul><i>{{$error}} </i></ul>
                            @endforeach
                    </div>
                @endif
              </div>
              <form id="quickForm" action="{{route('banner.update',$banner->id)}}" method="POST">
                @csrf
                @method('patch')
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title"
                    class="form-control" id="exampleInputEmail1"
                    placeholder="Enter title" value="{{$banner->title}}">
                  </div>


                   <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name"
                    class="form-control" id="exampleInputEmail1"
                    placeholder="Enter name" value="{{$banner->name}}">
                  </div>
                  <div class="form-group">
                    <label for="bigTitle">bigTitle</label>
                    <input type="text" name="bigTitle"
                    class="form-control" id="exampleInputEmail1"
                    placeholder="Enter bigTitle" value="{{$banner->bigTitle}}">
                  </div>
                  <div class="form-group">
                    <label for="smallTitle">smallTitle</label>
                    <input type="text" name="smallTitle"
                    class="form-control" id="exampleInputEmail1"
                    placeholder="Enter smallTitle" value="{{$banner->smallTitle}}">
                  </div>
                  <div class="form-group">
                    <label for="youtube">youtube</label>
                    <input type="text" name="youtube"
                    class="form-control" id="exampleInputEmail1"
                    placeholder="Enter youtube" value="{{$banner->youtube}}">
                  </div>



                  <div class="form-group">
                    <label for="slug">discreption</label>
                    <textarea id="summernote" name="discreption"
                    placeholder="Enter discreption" >
                    {{$banner->discreption}}
                    </textarea>
                  </div>
                  <div class="input-group">
                    <span class="input-group-btn">
                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                      </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="photo">
                  </div>
                  <div id="holder" style="margin-top:15px;max-height:100px;" value="{{$banner->photo}}"></div>

                   <div class="form-group">
                    <select name="status"> Select your option
                        <option value="acive" >---Select you option---</option>
                        <option value="active" {{$banner->status=='active' ? 'selected':''  }}>---active---</option>
                        <option value="inactive" {{$banner->status=='inactive' ? 'selected':''  }}>---inactive--</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <select name="type"> Select your option
                        <option value="" >---Select you option---</option>
                        <option value="promo" {{$banner->type=='promo' ? 'selected':''  }}>---promo---</option>
                        <option value="banner" {{$banner->type=='banner' ? 'selected':''  }}>---banner--</option>
                    </select>
                  </div>


                  <div class="form-group mb-0">
                    {{-- <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">Active .</label>
                    </div> --}}
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
@section('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
   $('#lfm').filemanager('image');
//    $('#lfm').filemanager('file');
</script>
<script>
    $(document).ready(function() {
  $('#summernote').summernote();
});
    </script>

@endsection
