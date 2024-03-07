<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="{{ asset('css/logins.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Login Page</title>



</head>
<body>
    <section class="background-radial-gradient overflow-hidden d-flex align-items-center justify-content-center vh-100">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 ls-tight" style="color: hsl(218, 81%, 95%); font-weight:700;">
                        OCEAN9 LENDING CORPORATION <br/>
                        <span style="font-size: 22px; color: hsl(0, 0%, 92.5%); font-weight:300;"> Brgy. Mansilingan, Bacolod City</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">

                    </p>
                </div>
                <style>
                    .password-input-container {
                        position: relative;
                    }

                    .password-toggle {
                        position: absolute;
                        top: 50%;
                        transform: translateY(-50%);
                        right: 10px;
                        cursor: pointer;
                    }
                </style>
                <div class="col-lg-6 mb-5 mb-lg-0 position-relative " >
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass" >
                        <div class="card-body px-4 py-5 px-md-5">
                            <form action="{{ route('authenticate') }} " method="POST">
                                @csrf
                                <div class="row">
                                    <h2 class="text-center mb-4"> SIGN IN </h2>
                                    <div class="form-outline mb-4">
                                        <label for="form3Example3">Email address</label>
                                        <input type="email" name="email" id="email" class="form-control" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label for="form3Example4">Password </label>
                                        <div class="password-input-container">
                                            <input type="password" name="password" id="password" value="" class="form-control" />
                                            <i class="fa fa-eye password-toggle" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
                                </div>

                                <div style="text-align:right">
                                    @if($errors->any())
                                    <ul style="color:darkred;">
                                        @foreach($errors->all() as $error)
                                        {{ $error }}
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.getElementById('password');
        const passwordToggle = document.querySelector('.password-toggle');

        passwordToggle.addEventListener('click', function () {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordToggle.classList.remove('fa-eye');
                passwordToggle.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                passwordToggle.classList.remove('fa-eye-slash');
                passwordToggle.classList.add('fa-eye');
            }
        });
    });
</script>




</html>
