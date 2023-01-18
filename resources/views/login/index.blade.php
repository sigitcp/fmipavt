<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><img src="../assets/img/Lambang_Universitas_Tanjungpura.png" class="rounded mx-auto d-block mt-3" width="30%"></img></div>
                                    <div class="card-body">
                                    @if (session()->has('loginError'))
                                        <div class="alert alert-danger alert-dismissible shadow-soft fade show" role="alert">
                                            <span class="alert-inner--icon"><span class="fas fa-exclamation-circle"></span></span>
                                            <span class="alert-inner--text"><strong>Sorry</strong> {{session('loginError')}}</span>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>                  
                                    @endif
                                    
                                         <form action="/login" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label class="small mb-1" for="email">Email Address</label>
                                                <input class="form-control py-4 @error('email') is-invalid @enderror" id="email" name='email' placeholder="name@gmail.com" value="{{old('email')}}" autofocus required/>
                                            @error('email')
                                                <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="password">Enter Password</label>
                                                <input class="form-control py-4" id="password" type='password' name='password' placeholder="Password" required/>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary text-success" type='submit' name='login' ><strong>Login</strong></button>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>