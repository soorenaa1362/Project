<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Main</title>
    </head>
    <body>
        <div class="container">
            <br>
            <div>
                
                <!-- Button Register Modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ثبت نام
                </button>
                <!-- Register Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ثبت نام</h5>                                
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('home.index') }}" method="post" class="form-group">
                                    <div>
                                        <label for="Username">نام کاربری :</label> <br>
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                    <br>
                                    <div>
                                        <label for="Password">رمز عبور :</label> <br>
                                        <input type="text" name="password" class="form-control">
                                    </div>
                                    <br>
                                    <div>
                                        <label for="PasswordConf">تکرار رمز عبور :</label> <br>
                                        <input type="text" name="passwrodConf" class="form-control">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                                <button type="button" class="btn btn-primary">ثبت نام</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </body>

    

</html>
