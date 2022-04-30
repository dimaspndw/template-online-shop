@Extends('template')
@section('content')

<section class="auth">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8" style="margin: auto 0px;">
                        <img src="{{asset('assets/sale.jpg')}}" class="img-fluid" style="border-radius: 20px;">
                    </div>
                    <div class="col-md-4" style="margin: auto 0px;">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-title" style="text-align: center; font-size: 20px;">
                                    Daftar
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="fullname">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Nomor HP</label>
                                        <input type="number" class="form-control" id="exampleInputPassword1" name="nohp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Re-password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="repassword">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                </form>
                                <small class="mt-2">Sudah punya akun? <a href="{{Route('login')}}">Masuk disini</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection