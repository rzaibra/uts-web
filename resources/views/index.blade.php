<!DOCTYPE html>
<html>
    <head>
        <title>Simple Blog</title>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" >
        <link rel="stylesheet" href="{{asset('assets/css/starter-template.css')}}" >
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Inventory Management</a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>
                            Daftar Inventaris Kantor
                            <a href="{{route('inventory.form')}}" class="pull-right"><button class="btn btn-primary">Tambah</button></a>
                        </h2>
                    </div>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Tgl. Input</th>
                            <th>Tgl. Update Data</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                          @foreach($inventories as $inventory)
                            <tr>
                                <td>{{$inventory->id}}</a></td>
                                <td>{{$inventory->code}}</a></td>
                                <td>{{$inventory->name}}</td>
                                <td>{{$inventory->qty}}</td>
                                <td>{{$inventory->created_at}}</td>
                                <td>{{$inventory->updated_at}}</td>
                                <td>
                                    <a href="/form?name={{$inventory->name}}&code={{$inventory->code}}&qty={{$inventory->qty}}&id={{$inventory->id}}"><button class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</button></a>
                                    <a href="/delete?id={{$inventory->id}}"><button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Delete</button></a>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.container -->
        <script type="text/javascript" src="{{asset('assets/js/jquery-1.12.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>
