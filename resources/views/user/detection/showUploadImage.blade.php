@extends('user.layouts.parent')

@section('title', 'Pill Detection')

@section('content')
    <br>
    <br>
    <br>
    <h1>Pill Detection</h1>
    <h2>Enter Image of pill</h2>

    <div class="header text-center mt-4">
        <svg class="svg" id="browseButton" style="color: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
                d="M149.1 64.8L138.7 96H64C28.7 96 0 124.7 0 160V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H373.3L362.9 64.8C356.4 45.2 338.1 32 317.4 32H194.6c-20.7 0-39 13.2-45.5 32.8zM256 192a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"
                fill="white"></path>
        </svg>
        <p style="margin-top: 5px">Detect pill with pill image</p>
        <input type="file" id="pillImageInput" accept="image/*" style="display: none" />
    </div>
    <button class="detectButton">
        <a href="pill-detection.html"> Detect </a>
    </button>
    <button class="cancelButton text-center mt-4">
        <a id="cancelButton"> Cancel </a>
    </button>
@endsection
