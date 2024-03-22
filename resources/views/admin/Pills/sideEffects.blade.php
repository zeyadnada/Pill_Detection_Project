{{-- @extends('layouts.app')  <!-- Use your layout file -->

@section('content')
    <div class="container">
        <form id="optionForm" action="{{ route('options.store') }}" method="POST">
            @csrf

            <div id="optionsContainer">
                <!-- Initial input row -->
                <div class="option-row">
                    <label for="optionLabel[]">Option Label:</label>
                    <input type="text" name="optionLabel[]" required>

                    <label for="optionValue[]">Option Value:</label>
                    <input type="text" name="optionValue[]" required>

                    <button type="button" class="remove-option">Remove</button>
                </div>
            </div>

            <button type="button" id="addOption">Add Option</button>
            <button type="submit">Save Options</button>
        </form>
    </div>

    <script src="{{ asset('js/options.js') }}">
    document.addEventListener('DOMContentLoaded', function () {
    var optionsContainer = document.getElementById('optionsContainer');
    var addOptionBtn = document.getElementById('addOption');

    addOptionBtn.addEventListener('click', function () {
        addOptionRow();
    });

    function addOptionRow() {
        var optionRow = document.createElement('div');
        optionRow.className = 'option-row';

        optionRow.innerHTML = `
            <label for="optionLabel[]">Option Label:</label>
            <input type="text" name="optionLabel[]" required>

            <label for="optionValue[]">Option Value:</label>
            <input type="text" name="optionValue[]" required>

            <button type="button" class="remove-option">Remove</button>
        `;

        optionsContainer.appendChild(optionRow);

        // Attach event listener to the new remove button
        var removeBtn = optionRow.querySelector('.remove-option');
        removeBtn.addEventListener('click', function () {
            optionsContainer.removeChild(optionRow);
        });
    }

    // Event delegation for dynamically added remove buttons
    optionsContainer.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-option')) {
            var optionRow = event.target.parentNode;
            optionsContainer.removeChild(optionRow);
        }
    });
});

    
    </script> 
     <!-- Include your JavaScript file -->
     
@endsection

 --}}
