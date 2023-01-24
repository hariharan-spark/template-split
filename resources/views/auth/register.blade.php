<!DOCTYPE html>
<html class="h-100" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body class="h-100">
        
        <!--*******************
            Preloader start
        ********************-->
        <div id="preloader">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
        <!--*******************
            Preloader end
        ********************-->
        <div class="login-form-bg h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100">
                    <div class="col-xl-6">
                        <div class="form-input-content">
                            <div class="card login-form mb-0">
                                <div class="card-body pt-5">
                                        <a class="text-center"> <h4>Spark</h4></a>
                                    <form class="mt-5 mb-5 login-input" action="{{route('login.register')}}" method="post">
                                        @csrf
                                            <div class="form-group">
                                                <input type="text" id ="name" class="form-control"  placeholder="Name" name="name">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="email" id="email" class="form-control"  placeholder="Email" name="email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" id="password" class="form-control" placeholder="Password" name="password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn login-form__btn submit w-100">Sign in</button>
                                    </form>
                                        <p class="mt-5 login-form__footer">Have account <a href="{{route('login')}}" class="text-primary">Sign Up </a> now</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Scripts
        ***********************************-->
        <script src="plugins/common/common.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/gleek.js"></script>
        <script src="js/styleSwitcher.js"></script>
    </body>
</html>

<script>
        $('#name').on('focusout',function() {
            removeErrorMessage($(this), "invalid-feedback");
            if($(this).val() == '') {
                errorMessageShow($(this), 'This field is required', "display:block; margin-bottom:2px;");
            }
        });
        $('#email').on('focusout',function() {
            removeErrorMessage($(this), "invalid-feedback");
            if($(this).val() == '') {
                errorMessageShow($(this), 'This field is required', "display:block; margin-bottom:2px;");
            }

        });
        $('#password').on('focusout',function() {
            removeErrorMessage($(this), "invalid-feedback");
            if($(this).val() == '') {
                errorMessageShow($(this), 'This field is required', "display:block; margin-bottom:2px;");
            }

        });

        function errorMessageShow(element, errorMessage, style = "") {
            element.parent().append('<p class="validation invalid-feedback text-xs font-sans mt-2 text-red leading-4" style="' + style + ';color:#d32929;">' + errorMessage + '</p>');
            element.css('border-color', '#d32929');
            element.next().children().children().addClass('select-color');
        }

        function removeErrorMessage(attribute, className) {
            if (attribute.parent().children().hasClass(className)) {
                attribute.parent().find('.' + className).remove();
                attribute.css("border-color", "#cbd5e0");
                attribute.parent().css("border-color", "#cbd5e0");
            }
        }
</script>





