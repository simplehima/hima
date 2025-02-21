<?php
session_start();
$uploadDir = '../uploads/';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    $picturePath = '';
    if (isset($_FILES['picture']) && $_FILES['picture']['error'] === UPLOAD_ERR_OK) {
        $pictureName = basename($_FILES['picture']['name']);
        $targetFile = $uploadDir . $pictureName;
        if (move_uploaded_file($_FILES['picture']['tmp_name'], $targetFile)) {
            $picturePath = $targetFile;
        }
    }
    
    $_SESSION['user'] = [
        'name'    => htmlspecialchars($_POST['name']),
        'email'   => htmlspecialchars($_POST['email']),
        'job'     => htmlspecialchars($_POST['job']),
        'picture' => $picturePath
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Details Form</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header bg-primary text-white">
        User Details Form
      </div>
      <div class="card-body">
        <form method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="job" class="form-label">Job</label>
            <input type="text" name="job" id="job" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="picture" class="form-label">Upload Picture</label>
            <input type="file" name="picture" id="picture" class="form-control" accept="image/*" required>
          </div>
          <button type="submit" class="btn btn-primary">Save Details</button>
        </form>
        <?php if (isset($_SESSION['user'])): ?>
          <div class="mt-4">
            <h5>Stored User Details:</h5>
            <p><strong>Name:</strong> <?= $_SESSION['user']['name'] ?></p>
            <p><strong>Email:</strong> <?= $_SESSION['user']['email'] ?></p>
            <p><strong>Job:</strong> <?= $_SESSION['user']['job'] ?></p>
            <?php if (!empty($_SESSION['user']['picture'])): ?>
              <img src="<?= $_SESSION['user']['picture'] ?>" alt="Uploaded Picture" class="img-thumbnail" style="max-width:200px;">
            <?php endif; ?>
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
