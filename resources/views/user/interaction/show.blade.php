@extends('user.layouts.parent')

@section('title', 'Pills Interaction')

@section('content')

    <div class="pillInteract-container">
        <div class="image-container">
            <img src="/img/pill4.png" class="img1" />
            <p>Covercard plus 10 mg</p>
        </div>
        <div class="image-container">
            <img src="/img/pill2.png" class="img2" />
            <p>Algoflex 400 mg</p>
        </div>
        <div class="card">
            <p>
                When taken together, the imaginary interaction of Vitalixir and
                Tranquilisleep creates a unique balance of energy and relaxation.
                Users report experiencing a harmonious state where they feel both
                mentally alert and physically calm. Vitalixir's energizing properties
                provide a surge of motivation and focus, allowing individuals to
                tackle tasks with heightened efficiency. Simultaneously,
                Tranquilisleep's calming effects help to alleviate any potential
                restlessness or anxiety that may arise from increased energy levels.
                The interaction creates a synergistic effect, where users feel
                mentally stimulated and productive while maintaining a sense of inner
                peace and tranquility. It's as if the mind becomes clear and sharp,
                while the body remains relaxed and at ease.
            </p>
        </div>
        <button class="pill-info">
            <a href="blog.html">
                <p>Pill Info</p>
            </a>
        </button>

        <button class="side-effects">
            <a href="sideInteract-effect.html">
                <p>Side Effect</p>
            </a>
        </button>
        <button class="dosage-checker">
            <a href="dosage-interact.html">
                <p>Dosage Checker</p>
            </a>
        </button>
        <button class="btn" type="submit" style="text-align: center">
            <a href="pillName-interaction.html">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1" width="20" height="20"
                    fill="rgba(119, 171, 156, 1)">
                    <path d="M15.293 3.293 6.586 12l8.707 8.707 1.414-1.414L9.414 12l7.293-7.293-1.414-1.414z" />
                </svg>
                Back</a>
        </button>
    </div>

@endsection
