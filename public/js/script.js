const pillImageInput = document.getElementById('pillImageInput');
const pillImageInput2 = document.getElementById('pillImageInput2');
const browseButton = document.getElementById('browseButton');
const browseButton2 = document.getElementById('browseButton2');
const cancelButton = document.getElementById('cancelButton');

browseButton.addEventListener('click', () => {
    pillImageInput.click();
});

browseButton2.addEventListener('click', () => {
    pillImageInput2.click();
});

cancelButton.addEventListener('click', () => {
    // Handle cancellation logic here
    console.log('Cancel button clicked');
});

pillImageInput.addEventListener('change', () => {
    const file = pillImageInput.files[0];
    const fileName = file.name;

    // Handle file processing and detection logic here
    console.log(`Selected file: ${fileName}`);
});

pillImageInput2.addEventListener('change', () => {
    const file = pillImageInput2.files[0];
    const fileName = file.name;

    // Handle file processing and detection logic here
    console.log(`Selected file: ${fileName}`);
});


