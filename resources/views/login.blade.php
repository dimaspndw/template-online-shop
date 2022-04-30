@Extends('template')
@section('content')

<section class="auth">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <img src="{{asset('assets/sale.jpg')}}" class="img-fluid" style="border-radius: 20px;">
                    </div>
                    <div class="col-md-4" style="margin: auto 0px;">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-title" style="text-align: center; font-size: 20px;">
                                    Masuk
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Masuk</button>
                                </form>
                                <small class="mt-2">Belum punya akun? <a href="{{Route('register')}}">Daftar disini</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection