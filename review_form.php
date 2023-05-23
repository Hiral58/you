<!-- review_form.php -->
<form id="reviewForm">
    <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
    
    <label for="name">Your Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="review">Review:</label>
    <textarea name="review" id="review" rows="5" required></textarea>

    <input type="submit" value="Submit Review">
</form>

<script>
    // Submit the review form via AJAX
    $('#reviewForm').submit(function(event) {
        event.preventDefault();
        var form = $(this);
        var formData = form.serialize();

        $.ajax({
            type: 'POST',
            url: 'submit_review.php',
            data: formData,
            success: function(response) {
                // Clear the form fields
                form.find('input, textarea').val('');

                // Load reviews for the specific product again after successful submission
                loadReviews(<?php echo $productId; ?>);
            }
        });
    });
</script>
