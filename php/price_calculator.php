<?php
$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $originalPrice = (float)$_POST['price'];
    
    if ($originalPrice > 300) {
        $discount = $originalPrice * 0.25;
        $priceAfterDiscount = $originalPrice - $discount;
        $tax = $priceAfterDiscount * 0.10;
        $totalPrice = $priceAfterDiscount + $tax;
        
        $result = "Original Price: {$originalPrice} EGP<br>
                   Discount (25%): -{$discount} EGP<br>
                   Price after discount: {$priceAfterDiscount} EGP<br>
                   Tax (10%): +{$tax} EGP<br>
                   Total Price: {$totalPrice} EGP";
    } else {
        $tax = $originalPrice * 0.10;
        $totalPrice = $originalPrice + $tax;
        
        $result = "Original Price: {$originalPrice} EGP<br>
                   No discount applied!<br>
                   Tax (10%): +{$tax} EGP<br>
                   Total Price: {$totalPrice} EGP";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Price Calculator</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header bg-success text-white">
        Price Calculator
      </div>
      <div class="card-body">
        <form method="post">
          <div class="mb-3">
            <label for="price" class="form-label">Enter Price (EGP)</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" min="0" required>
          </div>
          <button type="submit" class="btn btn-success">Calculate Total</button>
        </form>
        <?php if (!empty($result)): ?>
          <div class="mt-4">
            <h5>Calculation Results:</h5>
            <p><?= $result ?></p>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="mt-3">
      <a href="../html/index.html" class="btn btn-secondary">Back to Home</a>
    </div>
  </div>
  <!-- Bootstrap JS Bundle CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
