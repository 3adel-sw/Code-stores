<?php
include('layouts/header.php')
?>

<?php
include('layouts/navbar.php')
?>
  <!-- End Header  -->
  <!-- Image Background -->
  <img src="assets/img/background-page.png" alt="Cover Image" style="object-fit: cover;" class="img-cover position-absolute animate__animated animate__fadeIn w-100 h-100vh position-absolute " />
  <!-- End Image Background -->
  <style>
.t-shirt-container {
    height: 100vh;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.t-shirt-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    transform: translate(0, 100px);
    gap: 55px;
    margin-bottom: 0;
    padding-bottom: 75px;
}

.t-shirt-item {
    background: linear-gradient(180deg, white 0%, #122BE6 100%);
    width: 150px;
    height: 200px;

    box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.9);
    align-items: start;
    display: flex;
    justify-content: center;
    overflow: hidden;
    border-radius: 63px;
    font-size: 30px;
    font-family: David Libre;
    font-weight: 700;
}
  </style>



  <div class="t-shirt-container mt-5 position-relative ">
      <div class="t-shirt-grid">


          <div class="t-shirt-item">HOME</div>
          <div class="t-shirt-item">HOME</div>
          <div class="t-shirt-item">Away</div>
          <div class="t-shirt-item">HOME</div>
          <div class="t-shirt-item">HOME</div>
          <div class="t-shirt-item">Away</div>
          <div class="t-shirt-item">Away</div>
          <div class="t-shirt-item">HOME</div>
          <div class="t-shirt-item">Away</div>
          <div class="t-shirt-item">HOME</div>
      </div>
  </div>
<?php
include('layouts/footer.php')
?>