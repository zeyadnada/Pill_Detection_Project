@extends('user.layouts.authentication')
@section('title', 'Register')

@section('content')
    <div class="login-container ">
        <form class="form" action="{{ route('login') }}" method="POST">
            @csrf
            <div class ="group ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1" fill="currentColor"
                    stroke="currentColor" class="icon">
                    <path
                        d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z">
                    </path>
                </svg>
                <input placeholder="User email" id="text" name="email" type="email" class="input"
                    value="{{ old('email') }}" /></br>
                @if ($errors->has('email'))
                    <div class="error">
                        <br>
                        <div style="display: block">{{ $errors->first('email') }}</div>
                    </div>
                @endif

            </div>
            <div class="group">
                <svg stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    class="icon">
                    <path
                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"
                        stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
                <input placeholder="Password" id="password" name="password" type="password" class="input"
                    required="" />
                @if ($errors->has('password'))
                    <div class="error">
                        <br>
                        <div style="display: block">{{ $errors->first('password') }}</div>
                    </div>
                @endif
                <span>
                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2" stroke-linejoin="round"
                            stroke-linecap="round"></path>
                        <path
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                            stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                    </svg>
                </span>
            </div>
            <div class="flex-row">
                <div>
                    <input type="checkbox" />
                    <label>Remember Me </label>
                </div>
                <span class="span">Forgot password?</span>
            </div>
            <input value="Login" type="submit" class="login-button" />
        </form>
        <div class="social-account-container">
            <div class="social-message">
                <div class="line"></div>
                <span class="title">or sign in with</span>
                <div class="line"></div>
            </div>
            <div class="social-accounts">
                <div class="social-button google">
                    <svg version="1.1" width="25" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path style="fill:#FBBB00;"
                            d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
                                                                                                                                                              c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
                                                                                                                                                              C103.821,274.792,107.225,292.797,113.47,309.408z">
                        </path>
                        <path style="fill:#518EF8;"
                            d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
                                                                                                                                                              c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
                                                                                                                                                              c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z">
                        </path>
                        <path style="fill:#28B446;"
                            d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
                                                                                                                                                              c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
                                                                                                                                                              c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z">
                        </path>
                        <path style="fill:#F14336;"
                            d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
                                                                                                                                                              c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
                                                                                                                                                              C318.115,0,375.068,22.126,419.404,58.936z">
                        </path>
                    </svg>
                </div>
                <div class="social-button facebook">
                    <svg class="" xml:space="preserve" style="enable-background:new 0 0 512 512"
                        viewBox="0 0 408.788 408.788" y="0" x="0" height="25" width="25"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path class="" data-original="#475993" fill="#475993"
                                d="M353.701 0H55.087C24.665 0 .002 24.662.002 55.085v298.616c0 30.423 24.662 55.085 55.085 55.085h147.275l.251-146.078h-37.951a8.954 8.954 0 0 1-8.954-8.92l-.182-47.087a8.955 8.955 0 0 1 8.955-8.989h37.882v-45.498c0-52.8 32.247-81.55 79.348-81.55h38.65a8.955 8.955 0 0 1 8.955 8.955v39.704a8.955 8.955 0 0 1-8.95 8.955l-23.719.011c-25.615 0-30.575 12.172-30.575 30.035v39.389h56.285c5.363 0 9.524 4.683 8.892 10.009l-5.581 47.087a8.955 8.955 0 0 1-8.892 7.901h-50.453l-.251 146.078h87.631c30.422 0 55.084-24.662 55.084-55.084V55.085C408.786 24.662 384.124 0 353.701 0z">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="form-login-footer">
            <p>Don’t Have Account?<a href="/register">Signup</a></p>
        </div>
        <p style="color: red">{{ session('message') }}</p>

    </div>
@endsection
