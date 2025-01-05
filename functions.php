<?php
  // Function to sanitize input (prevent SQL injection)
  function sanitizeInput($conn, $data) {
    return mysqli_real_escape_string($conn, trim($data));
  }

  // Other helper functions can be added as needed
?>