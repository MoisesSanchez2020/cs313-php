<?php
// Function to format dates for reviews
function formatReviewDate($dateString) {
    return date ("d F, Y", strtotime($dateString));
}