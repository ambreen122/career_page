
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#name').on('keyup',function(){
        // alert('hi');
        var value=$(this).val().toLowerCase();
        $('#mytable tr').filter(function(){
            $(this).toggle($(this).text().toLocaleLowerCase().
            indexOf(value)>-1);
console.log('#name');
           
           

        });

    });
  });

    </script>










{{-- ------------------------------------------------------ --}}

@extends('admin.layouts.base')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Careers</h1>
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Careers</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="name" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>first_name</th>
                            <th>last_name</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>type</th>
                            <th>file</th>
                            <th>created_at</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>first_name</th>
                            <th>last_name</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>type</th>
                            <th>file</th>
                            <th>created_at</th>
                        </tr>
                    </tfoot>
                    <tbody id="mytable">
                        @foreach ($applicants as $a)
                            
                    
                        <tr>
                            <th>{{ $a->first_name }}</th>
                            <th>{{ $a->last_name }}</th>
                            <th>{{ $a->email }}</th>
                            <th>{{ $a->phone }}</th>
                            <th>{{ $a->type }}</th>

                            <th> <a href="{{ asset('uploads') }}/{{$a->id}}.pdf">downlaod</a> </th>
                            <th>{{ $a->created_at }}</th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection