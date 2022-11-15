<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    <title>Login | Tailwind Starter Kit by Creative Tim</title>
    {!! RecaptchaV3::initJs() !!}
</head>

<body class="text-gray-800 antialiased">
    <main>
        <section class="absolute w-full h-full">
            <div class="absolute top-0 w-full h-full bg-gray-900"
                style="background-image: url({{ asset('auth/register_bg_2.png') }}); background-size: 100%; background-repeat: no-repeat;">
            </div>
            <div class="container mx-auto px-4 h-full">
                <div class="flex content-center items-center justify-center h-full">
                    <div class="w-full lg:w-4/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                            <div class="rounded-t mb-0 px-6 py-6">
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <div class="text-gray-500 text-center mb-3 font-bold">
                                    <h1>Registration</h1>
                                </div>
                                <form method="POST" action="{{ url('/register') }}">
                                    {!! csrf_field() !!}
                                    <div class="relative w-full mb-3{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="grid-password">Name</label>
                                        <input type="text"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="Name" name="name" value="{{ old('name') }}"
                                            style="transition: all 0.15s ease 0s;" />
                                        @if ($errors->has('name'))
                                            <small>{{ $errors->first('name') }}</small>
                                        @endif
                                    </div>
                                    <div class="relative w-full mb-3{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="grid-password">Email</label>
                                        <input type="email"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="Email" name="email" value="{{ old('email') }}"
                                            style="transition: all 0.15s ease 0s;" />
                                        @if ($errors->has('email'))
                                            <small>{{ $errors->first('email') }}</small>
                                        @endif
                                    </div>
                                    <div class="relative w-full mb-3{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="grid-password">Password</label>
                                        <input type="password"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="Password" name="password"
                                            style="transition: all 0.15s ease 0s;" />
                                        @if ($errors->has('password'))
                                            <small>{{ $errors->first('password') }}</small>
                                        @endif
                                    </div>
                                    <div
                                        class="relative w-full mb-3{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="grid-password">Confirm Password</label><input type="password"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="Password" name="password_confirmation"
                                            style="transition: all 0.15s ease 0s;" />
                                        @if ($errors->has('password_confirmation'))
                                            <small>{{ $errors->first('password_confirmation') }}</small>
                                        @endif
                                    </div>
                                    <div
                                        class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            {!! RecaptchaV3::field('register') !!}
                                            @if ($errors->has('g-recaptcha-response'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap mt-6">
                                        <div class="w-1/2">
                                            <a href="{{ route('login') }}" class="text-dark-300"><small>already an account?</small></a>
                                        </div>
                                    </div>
                                    <div class="text-center mt-6">
                                        <button
                                            class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                            type="submit" style="transition: all 0.15s ease 0s;">
                                            Sign In
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
