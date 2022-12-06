$(document).ready(function() {

    // Show loader
    $('#loader').show();

    // Show Contacts when page loads
    showContacts();

    // Add New Contact
    $(document).on('submit', '#new-contact', function(){
        $('#loader').show();

        // Post data from form to database
        $.post('add_contact.php', $(this).serialize())
            .done(function(data){
                console.log(data);
                $('#addModal').show().hide();
                showContacts();
            });
            return false;
    });

});

function showContacts() {
    console.log('Contacts Loaded');
    setTimeout("$('#contacts').load('contacts.php', function(){$('#loader').hide();})", 1000);
}