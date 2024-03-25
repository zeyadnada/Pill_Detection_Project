@extends('user.layouts.parent')

@section('title', 'About')

@section('content')

    <div class="containerabout">
        <h1 class="text-center">Pill Detection and Interaction</h1>
        <p class="lead text-center p-2">
            Pill detection involves identifying pills by their physical
            characteristics, such as shape, color, and markings. This can be done
            manually by comparing the pill to a database or using automated systems
            like pill recognition apps. These apps often utilize image recognition
            technology to identify pills based on pictures taken by users.
        </p>
        <p class="lead text-center p-2">
            When it comes to pill interaction, it refers to the way different
            medications can affect each other when taken together. Certain
            combinations of pills can lead to adverse effects or reduce the
            effectiveness of one or more medications. It's crucial to consult
            healthcare professionals or use tools like drug interaction checkers to
            ensure the safety and efficacy of medication regimens.
        </p>
        <h2 class="h2 p-3">Key Points:</h2>
        <ul>
            <li>
                Pill detection involves identifying pills by their physical
                characteristics.
            </li>
            <li>
                Pill interaction refers to how different medications can affect each
                other when taken together.
            </li>
            <li>
                Automated systems like pill recognition apps use image recognition
                technology for pill detection.
            </li>
            <li>
                Consult healthcare professionals or use drug interaction checkers to
                ensure medication safety.
            </li>
        </ul>
        <div class="text-center mt-4">
            <a class="dropdown-item" href="blog.html"><button class="browseButton" style="max-width: 17%">
                    Read Blog
                </button></a>
        </div>
    </div>

@endsection
