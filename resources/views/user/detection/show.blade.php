@extends('user.layouts.parent')

@section('title', 'Pill Detection')

@section('content')

    <br>
    <br>
    <br>
    <div class="pill-container mb-4">
        <div class="img-container">
            <img src="/img/pill1.png" class="img" />
            <img src="/img/pill1.png" class="img" />
        </div>
        <h1>Algopyrin 500 mg</h1>
        <div class="card">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus
                consectetur repellat necessitatibus quibusdam. Reprehenderit nemo iste
                laborum ab repudiandae porro odio quae maiores neque ut facilis minus
                consectetur, id adipisci.
            </p>
        </div>
        <button class="pill-info">
            <a href="contraindications.html">
                <p>contraindications</p>
            </a>
        </button>

        <button class="side-effects">
            <a href="side-effects.html">
                <p>Side Effect</p>
            </a>
        </button>
        <button class="dosage-checker">
            <a href="dosage-result.html">
                <p>Dosage Checker</p>
            </a>
        </button>
    </div>

@endsection
