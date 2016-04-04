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
                    @if(!empty($id))
                      <h2>Sunting</h2>
                    @else
                      <h2>Buat Inventaris Baru</h2>
                    @endif
                      <form class="form-horizontal" method="POST" action="/form">
                        <div class="form-group">
                            <label for="inputCode" class="col-md-2">Kode Barang</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="inputCode" name="code" placeholder="" value="{{$code}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-md-2">Nama Barang</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="inputName" name="name" placeholder="" value="{{$name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputQty" class="col-md-2">Jumlah</label>
                            <div class="col-md-10">
                                <input type="number" class="form-control" id="inputQty" name="qty" placeholder="" value="{{$qty}}">
                            </div>
                        </div>
                        @if(!empty($id))
                          <input type="hidden" type="number" name="id" value="{{$id}}">
                        @endif
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container -->
        <script type="text/javascript" src="{{asset('assets/js/jquery-1.12.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>
