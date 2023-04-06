@extends('admin.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <table class="table" >
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Role</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>Seller</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>Admin</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>Bird</td>
                <td>Customers</td>
              </tr>
            </tbody>
          </table>


    </div>
    <!-- /.container-fluid -->
@endsection