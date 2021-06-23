<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('template/assets') }}/img/basic/favicon.ico" type="image/x-icon">
    <title>Login Aplikasi</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('template/assets') }}/css/app.css">
    <script src="{{ mix('js/app.js') }}"></script>
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }

    </style>
    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>
        (function(w, d, u) {
            w.readyQ = [];
            w.bindReadyQ = [];

            function p(x, y) {
                if (x == "ready") {
                    w.bindReadyQ.push(y);
                } else {
                    w.readyQ.push(x);
                }
            };
            var a = {
                ready: p,
                bind: p
            };
            w.$ = w.jQuery = function(f) {
                if (f === d || f === u) {
                    return a
                } else {
                    p(f)
                }
            }
        })(window, document)

    </script>
</head>

<body class="light">
    <div id="loader" class="loader">
        <div class="plane-container">
            <div class="preloader-wrapper small active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre loader -->
    <div id="app">
        <div class="page parallel">
            <div class="d-flex row">
                <div class="col-md-3 white">
                    <div class="p-5 mt-5">
                        <img src="{{ asset('template/') }}/img/logo.png" alt="" />
                    </div>
                    <div class="p-5">
                        <div class="ket"></div>
                        <form method="POST" data-toggle="md-validator" id="loginaction">
                            @csrf
                            <div class="form-group has-icon"><i class="icon-user-o"></i>
                                <input type="text" name="username" class="form-control form-control-lg"
                                    placeholder="Username">
                            </div>
                            <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                <input type="password" name="password" class="form-control form-control-lg"
                                    placeholder="Password">
                            </div>
                            <div id="loginnya">
                                <h4>Loading ..</h4>
                            </div>
                            <input type="submit" class="btn btn-primary btn-lg btn-block" id="buttonnya" value="Log In">
                        </form>
                    </div>
                </div>
                <div class="col-md-9  height-full blue accent-3 align-self-center text-center" data-bg-repeat="false"
                    data-bg-possition="center"
                    style="background: url('https://www.oyorooms.com/id/blog/wp-content/uploads/2019/11/mandeh-2.jpeg') #FFEFE4;background-size: cover;">
                </div>
            </div>
        </div>
        <div class="info"></div>
        <div class="control-sidebar-bg shadow white fixed"></div>
    </div>
    <!--/#app -->
    <script src="{{ asset('template/assets') }}/js/app.js"></script>

    <script>
        $(function() {
            $('#buttonnya').show();
            $('#loginnya').hide();
            $('#loginaction').on('submit', function(e) {
                e.preventDefault();

                $('#buttonnya').hide();
                $('#loginnya').show();

                username = $('input[name="username"]').val();
                passsword = $('input[name="passsword"]').val();

                if (username == '') {
                    $('.ket').html('<span class="error">Username tidak boleh kosong</span>');
                    $('#buttonnya').show();
                    $('#loginnya').hide();

                } else if (passsword == '') {
                    $('.ket').html('<span class="error">Password tidak boleh kosong</span>');
                    $('#buttonnya').show();
                    $('#loginnya').hide();


                } else {
                    e.preventDefault();
                    $.ajax({
                        url: "{{ route('login') }}",
                        method: "POST",
                        data: $(this).serialize(),
                        chace: false,
                        async: false,
                        success: function(data) {
                            window.location.href = '{{ route('home') }}';
                        },
                        error: function(data) {
                            $('#buttonnya').show();
                            $('#loginnya').hide();

                            err = '';
                            respon = data.responseJSON;
                            $.each(respon.errors, function(index, value) {
                                err += "<li>" + value + "</li>";
                            });
                            $('.ket').html('<span class="error">' + err + '</span>');

                        }
                    });

                }


            });

        });

        (function($, d) {
            $.each(readyQ, function(i, f) {
                $(f)
            });
            $.each(bindReadyQ, function(i, f) {
                $(d).bind("ready", f)
            })
        })(jQuery, document)

    </script>
</body>

</html>
