<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Halaman login - Visca Shop</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                        <span class="text-white text-lg ml-3"><span class="font-medium">Visca Shop</span> </span>
                    </a>
                    <div class="my-auto">
                        <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset('dist/images/illustration.svg') }}">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            A few more clicks to
                            <br>
                            sign in to your account.
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white">Manage all your e-commerce accounts in one place</div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Form Login
                        </h2>
                        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                        <div class="intro-x mt-8">
                            <input type="text" class="intro-x login__input input input--lg border border-gray-300 block ini-email" placeholder="Email">
                            <input type="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4 ini-password" placeholder="Password">
                        </div>
                        <div class="intro-x flex text-gray-700 text-xs sm:text-sm mt-4">
                            <div class="flex items-center mr-auto">
                                <input type="checkbox" class="input border mr-2" id="remember-me">
                                <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                            </div>
                            <a href="">Forgot Password?</a>
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3 ini-login">Login</button>
                            <button class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0 regis">Sign up</button>
                        </div>
                        <div class="intro-x mt-10 xl:mt-24 text-gray-700 text-center xl:text-left">
                            By signin up, you agree to our
                            <br>
                            <a class="text-theme-1" href="">Terms and Conditions</a> & <a class="text-theme-1" href="">Privacy Policy</a>
                        </div>
                    </div>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="{{ asset('dist/js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>
        <script>
            // cek package jquery
            $(document).ready(function(){

                var cek = document.cookie;
                console.log(cek)

                // Tombol registrasi
                $(".regis").click(function() {
                    window.location.href = "{{ route('registrasi') }}";
                });

                // Tombol Login
                $(".ini-login").click(function() {
                    // Data to be sent with the POST request
                    const data = {
                        email: $(".ini-email").val(),
                        password: $(".ini-password").val(),
                    };

                    // Send the Ajax POST request
                    fetch('http://127.0.0.1:8000/api/otentikasi/masuk', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            // Add any required headers here
                        },
                        body: JSON.stringify(data),
                    }).then(response => response.json()).then(result => {
                        // Handle the API response here
                        if (result.success) {

                            // Fungsi untuk mengatur cookie
                            function setCookie(name, value, days) {
                                var expires = "";

                                if (days) {
                                    var date = new Date();
                                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                                    expires = "; expires=" + date.toUTCString();
                                }

                                document.cookie = name + "=" + encodeURIComponent(value) + expires + "; path=/";
                            }

                            // Fungsi untuk mendapatkan nilai cookie
                            function getCookie(name) {
                                var cookieName = name + "=";
                                var decodedCookie = decodeURIComponent(document.cookie);
                                var cookieArray = decodedCookie.split(';');

                                for (var i = 0; i < cookieArray.length; i++) {
                                    var cookie = cookieArray[i];
                                    while (cookie.charAt(0) === ' ') {
                                        cookie = cookie.substring(1);
                                    }
                                    if (cookie.indexOf(cookieName) === 0) {
                                        return cookie.substring(cookieName.length, cookie.length);
                                    }
                                }

                                return null;
                            }

                            // Simpan token ke cookie
                            var token = result.token;
                            setCookie('token', token, 7); // Simpan cookie selama 7 hari

                            // Success response, show success SweetAlert notification
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: result.message, // Assuming the API returns a 'message' field
                                timer: 5000,
                                showCancelButton: false,
                                showConfirmButton: false
                            }).then (function() {
                                var token = getCookie('token');

                                if (token) {
                                    window.location.href = "{{ route('admin.dashboard') }}";
                                }
                                // window.location.href = "{{ route('admin.dashboard') }}";
                            });
                        } else {
                            // Error response, show error SweetAlert notification
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: result.message, // Assuming the API returns a 'message' field
                            });
                        }
                    }).catch(error => {
                        // Handle any network or other errors
                        console.error('Error:', error);
                    });
                });
            });
        </script>
        <!-- END: JS Assets-->
    </body>
</html>
