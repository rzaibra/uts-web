<!DOCTYPE html>
<html>
    <head>
        <title>Inventory Management</title>
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
                <div class="col-md-6">
                    <h2>Detail Barang</h2>
                    <table class="table table-striped">
                        <tr>
                            <td>ID</td>
                            <td>:</td>
                            <td>{{$inventory->id}}</td>
                        </tr>
                        <tr>
                            <td>Kode Barang</td>
                            <td>:</td>
                            <td>{{$inventory->code}}</td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td>
                            <td>:</td>
                            <td>{{$inventory->name}}</td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>:</td>
                            <td>{{$inventory->qty}}</td>
                        </tr>
                        <tr>
                            <td>Tgl. Input</td>
                            <td>:</td>
                            <td>{{$inventory->created_at}}</td>
                        </tr>
                        <tr>
                            <td>Tgl. Update</td>
                            <td>:</td>
                            <td>{{$inventory->updated_at}}</td>
                        </tr>
                    </table>
                    <a href="{{route('inventory.index')}}"><button type="button" class="btn btn-primary">Kembali</button></a>
                </div>
            </div>
        </div><!-- /.container -->
        <script type="text/javascript" src="{{asset('assets/js/jquery-1.12.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>
