@extends('user.layouts.authentication')

@section('title', 'Register')
@section('content')
    <div class="container">
        <form class="form" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="group mt-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1" fill="currentColor"
                    stroke="currentColor" class="icon">
                    <path
                        d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z">
                    </path>
                </svg>
                <input placeholder="User Name" id="text" name="name" type="text" class="input"
                    value="{{ old('name') }}" />
                @if ($errors->has('name'))
                    <span class="text-danger" style="color: red;font-weight: bold">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="group">
                <svg fill="currentColor" viewBox="0 0 24 24" height="24" width="24"
                    xmlns="http://www.w3.org/2000/svg" class="icon">
                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="currentColor"
                        d="M7 8.5L9.94202 10.2394C11.6572 11.2535 12.3428 11.2535 14.058 10.2394L17 8.5"></path>
                    <path stroke-linejoin="round" stroke-width="1.5" stroke="currentColor"
                        d="M2.01577 13.4756C2.08114 16.5412 2.11383 18.0739 3.24496 19.2094C4.37608 20.3448 5.95033 20.3843 9.09883 20.4634C11.0393 20.5122 12.9607 20.5122 14.9012 20.4634C18.0497 20.3843 19.6239 20.3448 20.7551 19.2094C21.8862 18.0739 21.9189 16.5412 21.9842 13.4756C22.0053 12.4899 22.0053 11.5101 21.9842 10.5244C21.9189 7.45886 21.8862 5.92609 20.7551 4.79066C19.6239 3.65523 18.0497 3.61568 14.9012 3.53657C12.9607 3.48781 11.0393 3.48781 9.09882 3.53656C5.95033 3.61566 4.37608 3.65521 3.24495 4.79065C2.11382 5.92608 2.08114 7.45885 2.01576 10.5244C1.99474 11.5101 1.99475 12.4899 2.01577 13.4756Z">
                    </path>
                </svg>
                <input placeholder="Email" id="email" name="email" type="email" class="input"
                    value="{{ old('email') }}" />
                @if ($errors->has('email'))
                    <span class="text-danger" style="color: red;font-weight: bold">{{ $errors->first('email') }}</span>
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
                    value="{{ old('password') }}" />
                @if ($errors->has('password'))
                    <span class="text-danger" style="color: red;font-weight: bold">{{ $errors->first('password') }}</span>
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
            <div class="group">
                <svg stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    class="icon">
                    <path
                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"
                        stroke-linejoin="round" stroke-linecap="round"></path>
                </svg>
                <input placeholder="Confirm Password" id="c_password" name="confirm_password" type="password" class="input"
                    value="{{ old('confirm_password') }}" /><br />
                @if ($errors->has('confirm_password'))
                    <span class="text-danger"
                        style="color: red;font-weight: bold">{{ $errors->first('confirm_password') }}</span>
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
            <div class="privacyPolicy">
                <input type="checkbox" id="privacyPolicy" name="privacyPolicy" />
                <label for="privacyPolicy">I agree to
                    <span
                        style="
                color: #77ab9c;
                text-decoration: underline;
                font-weight: 700;
                margin-left: 15px;
              ">privacy
                        policy</span> </label><br />
            </div>
            <input value="Create Account" type="submit" class="register-button" />
        </form>
        <div class="social-account-container">
            <div class="social-message">
                <div class="line"></div>
                <span class="title"> or sign up with </span>
                <div class="line"></div>
            </div>
            <div class="social-accounts">
                <div class="social-button google">
                    <svg version="1.1" width="25" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background: new 0 0 512 512" xml:space="preserve">
                        <path style="fill: #fbbb00"
                            d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
                                                                                                        c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
                                                                                                        C103.821,274.792,107.225,292.797,113.47,309.408z">
                        </path>
                        <path style="fill: #518ef8"
                            d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
                                                                                                        c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
                                                                                                        c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z">
                        </path>
                        <path style="fill: #28b446"
                            d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
                                                                                                        c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
                                                                                                        c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z">
                        </path>
                        <path style="fill: #f14336"
                            d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
                                                                                                        c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
                                                                                                        C318.115,0,375.068,22.126,419.404,58.936z">
                        </path>
                    </svg>
                </div>
                <div class="social-button facebook">
                    <svg class="" xml:space="preserve" style="enable-background: new 0 0 512 512"
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
        <div class="form-footer">
            <p>Already Have Account?<a href="/login">Signin</a></p>
        </div>
    </div>
@endsection
