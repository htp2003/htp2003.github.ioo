// comments.js

$(document).ready(function () {
    // When the page is ready

    // Submit Comment Form
    $('#comment-form').submit(function (e) {
        e.preventDefault(); // Prevent the form from submitting the traditional way
        var commentBody = $('#comment').val();
        var postId = post_id;
        var commentID = $(this).data('comment-id');
        // Make an AJAX request to store the comment
        $.ajax({
            type: 'POST',
            url: '/comments', // Assuming your route for storing comments is '/comments'
            data: {
                post_id: postId,
                body: commentBody,
                _token: $('input[name=_token]').val(),
            },
            success: function (data) {
                // On success, add the new comment to the comments list
                $('#comments-list').append('<li>' + commentBody + '</li>');

                // Clear the textarea after submitting the comment
                $('#comment').val('');
            },
            error: function (data) {
                console.log('Error:', data);
            },
        });
    });
});
