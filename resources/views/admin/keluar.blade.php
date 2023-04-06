@extends('admin.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Ingin logout ke isekai?</h1>

            
        </div>

        <a href="/admin/secret" class="button btn btn-danger" onclick="isekai()">Isekai</a>
        

    </div>

    <script>
        function isekai() {
                alert("Ingin ke isekai")
            }
    </script>
    <!-- /.container-fluid -->
@endsection