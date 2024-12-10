$(document).ready(function() {
    $('#registrationForm').on('submit', function(event) {
        event.preventDefault(); // Prevent form from submitting normally
        
        // Get form values
        const name = $('#name').val();
        const email = $('#email').val();
        const phone = $('#phone').val();
        const dob = $('#dob').val();
        const gender = $('#gender').val();

        // Display the result
        $('#outName').text(name);
        $('#outEmail').text(email);
        $('#outPhone').text(phone);
        $('#outDob').text(dob);
        $('#outGender').text(gender);

        // Hide the form and show the output
        $('#registrationForm').hide();
        $('#formOutput').show();
    });
});
