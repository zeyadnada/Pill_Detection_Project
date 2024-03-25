@extends('user.layouts.parent')

@section('title', 'Dosage | Detection')

@section('content')
    <div class="dosage-result-container mb-4">
        <h1>Dosage Checker</h1>
        <img src="/img/pill1.png" alt="" />
        <h1 style="margin-top: 0rem">Algopyrin 500 mg</h1>
        <div class="card">
            <ul style="list-style-type: disc">
                <li>
                    Recommended dosage: Take one Algoflex forte dolo 400 mg pill in the
                    evening, about 30 minutes before bedtime.
                </li>
                <li>
                    It is important not to exceed the recommended dosage to prevent
                    excessive drowsiness or sedation.
                </li>
                <li>
                    Tranquilisleep is formulated to promote relaxation and restful
                    sleep, so it is best taken before bedtime to support a peaceful
                    night's rest.
                </li>
            </ul>
        </div>
        <button class="backBtn" type="submit" style="text-align: center">
            <a href="pill-detection.html">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1" width="20" height="20"
                    fill="rgba(119, 171, 156, 1)">
                    <path d="M15.293 3.293 6.586 12l8.707 8.707 1.414-1.414L9.414 12l7.293-7.293-1.414-1.414z" />
                </svg>
                Back</a>
        </button>
    </div>


@endsection
