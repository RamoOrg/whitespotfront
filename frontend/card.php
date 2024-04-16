<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Card</title>
  <link rel="stylesheet" href="styles.css">
</head>

<style>
  .card {
    margin: 5px;
    padding: 5px;
    width: 300px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s; /* Add transition for smooth animation */
  }

  .card:hover {
    transform: translateY(-5px); /* Move the card up slightly on hover */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Change shadow on hover */
  }

  .card img {
    width: 100%;
    height: auto;
    border-bottom: 1px solid #ddd;
    transition: transform 0.3s; /* Add transition for smooth animation */
  }

  .card:hover img {
    transform: scale(1.1); /* Scale up the image on hover */
  }

  .card-content {
    padding: 10px;
  }

  .card-content h3 {
    margin-top: 0;
  }

  .card-content p {
    margin-bottom: 10px;
  }

  .button {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
  }

  .main {
    display: flex;
    align-items: center;
    justify-content: center;
  }

</style>
<body>
  <div class="main">
    <div class="card">
      <img src="<?php echo $upload_url;?>./images/1pic.jpg" alt="Image">
      <div class="card-content">
        <h3>Card Title</h3>
        <p>This is a sample card content.</p>
        <a href="#" class="button">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="<?php echo $upload_url;?>./images/1pic.jpg" alt="Image">
      <div class="card-content">
        <h3>Card Title</h3>
        <p>This is a sample card content.</p>
        <a href="#" class="button">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="<?php echo $upload_url;?>./images/1pic.jpg" alt="Image">
      <div class="card-content">
        <h3>Card Title</h3>
        <p>This is a sample card content.</p>
        <a href="#" class="button">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="<?php echo $upload_url;?>./images/1pic.jpg" alt="Image">
      <div class="card-content">
        <h3>Card Title</h3>
        <p>This is a sample card content.</p>
        <a href="#" class="button">Read More</a>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="card">
      <img src="<?php echo $upload_url;?>./images/1pic.jpg" alt="Image">
      <div class="card-content">
        <h3>Card Title</h3>
        <p>This is a sample card content.</p>
        <a href="#" class="button">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="<?php echo $upload_url;?>./images/1pic.jpg" alt="Image">
      <div class="card-content">
        <h3>Card Title</h3>
        <p>This is a sample card content.</p>
        <a href="#" class="button">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="<?php echo $upload_url;?>./images/1pic.jpg" alt="Image">
      <div class="card-content">
        <h3>Card Title</h3>
        <p>This is a sample card content.</p>
        <a href="#" class="button">Read More</a>
      </div>
    </div>
    <div class="card">
      <img src="<?php echo $upload_url;?>./images/1pic.jpg" alt="Image">
      <div class="card-content">
        <h3>Card Title</h3>
        <p>This is a sample card content.</p>
        <a href="#" class="button">Read More</a>
      </div>
    </div>
  </div>
</body>
</html>
