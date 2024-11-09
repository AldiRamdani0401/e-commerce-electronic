<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <title>Beranda | Electronic</title>
</head>

<style>
  body {
    background-color: #E3E8EF;
    max-height: vh-100;
  }

  #container-list-products {
    border-radius: 72px 72px 0 0;
  }

  /* Title */
  .title-1 {
    font-size: 50px;
  }

  /* Input */
  .input-1 {
    border: none;
    border-bottom: 1px solid #eaeaea;
    outline: none;
  }

  /* Link */
  a.nav-login:hover {
    font-weight: bold;
  }

  .input-1:hover {
    border-bottom: 1px solid #6389B5;
  }

  .secondary-container {
    background-color: #6389B582;
  }

  /* Mobile */
  @media only screen and (min-width: 600px) {}

  /* Mobi */
  @media only screen and (min-width: 768px) {}

  /* Laptop */
  @media only screen and (min-width: 992px) {
    img#logo {
      width: 500px;
    }
  }

  /* Browser */
  /* Hide scrollbar for Chrome, Safari and Opera */
  .scroll-hide::-webkit-scrollbar {
    display: none;
  }

  /* Hide scrollbar for IE, Edge and Firefox */
  .scroll-hide {
    -ms-overflow-style: none;
    /* IE and Edge */
    scrollbar-width: none;
    /* Firefox */
  }
</style>

<script>
  function selectInput(e) {
    const labelElements = document.getElementsByTagName('label');
    Array.from(labelElements).forEach((element) => {
      if (element.htmlFor == e.id) {
        element.style.borderColor = '#6389B5';
        element.style.borderWidth = '6px';
      }
    });
  }

  function checkInput() {
    const inputElements = document.getElementsByTagName('input');
    const labelElements = document.getElementsByTagName('label');

    Array.from(inputElements).forEach((input) => {
      Array.from(labelElements).forEach((label) => {
        if (label.htmlFor === input.id) {
          if (input.value === '') {
            label.style.borderColor = '#8F7BBC';
            label.style.borderWidth = '2px';
          } else {
            label.style.borderColor = '#6389B5';
            label.style.borderWidth = '6px';
          }
        }
      });
    });
  }

</script>

<body>
  <div class="container-sm d-flex flex-column flex-md-row px-0 w-100 vh-100">
    <!-- Navbar -->
    <div class="d-flex flex-row sticky-top justify-content-between align-items-center px-3"
      style="height:12%;background:#E3E8EF;">
      <img id="logo" src="assets/logo.png" height="80" alt="gambar logo">
      <img id="logo" src="assets/icons/icon-cart.png" height="46" alt="gambar logo">
    </div>
    <!-- Content -->
    <div class="container-fluid px-0 overflow-auto scroll-hide">
      <!-- Category List -->
      <div class="confainter-fluid d-flex flex-row align-items-center gap-3 px-2 overflow-auto scroll-hide">
        <!-- Product -->
        <div class="d-flex flex-column justify-content-center">
          <div class="d-flex justify-content-center p-3" style="border-radius:100px;width:80px;background:#AF78EE3D;">
            <img id="logo" src="assets/icons/icon-mesin-cuci.png" alt="gambar logo">
          </div>
          <h6 class="text-center mt-1" style="font-size:15px;">Mesin Cuci</h6>
        </div>
        <!-- Product -->
        <div class="d-flex flex-column gap-1 justify-content-center">
          <div class="d-flex justify-content-center p-3" style="border-radius:100px;width:80px;background:#B4E3F1;">
            <img id="logo" src="assets/icons/icon-kulkas.png" alt="gambar logo">
          </div>
          <h6 class="text-center mt-1" style="font-size:15px;">Kulkas</h6>
        </div>
        <!-- Product -->
        <div class="d-flex flex-column gap-1 justify-content-center">
          <div class="d-flex justify-content-center p-3" style="border-radius:100px;width:80px;background:#FFCC003D;">
            <img id="logo" src="assets/icons/icon-tv.png" class="img-fluid" alt="gambar logo">
          </div>
          <h6 class="text-center mt-1" style="font-size:15px;">Television</h6>
        </div>
        <!-- Product -->
        <div class="d-flex flex-column gap-1 justify-content-center">
          <div class="d-flex justify-content-center p-3" style="border-radius:100px;width:80px;background:#B5F6FCE3;">
            <img id="logo" src="assets/icons/icon-ac.png" alt="gambar logo">
          </div>
          <h6 class="text-center mt-1 text-nowrap" style="font-size:15px;">Air Conditioner</h6>
        </div>
      </div>
      <!-- Second Container -->
      <div id="container-list-products" class="secondary-container container-fluid d-flex flex-column pt-5 pb-2 px-0">
        <!-- Container Promo -->
        <div class="container-fluid d-flex flex-row gap-5 scroll-hide"
          style="height:129px;width:100%;max-width:100%;overflow-x:scroll;overflow-y:hidden;">
          <!-- Promo 1 -->
          <div class="col-8 d-flex flex-column justify-content-center h-100"
            style="background:#EDA584DB;position:relative;z-index:555;border-radius:33px;">
            <img id="logo" src="assets/images/promo.png" width="180" alt="gambar logo"
              style="height:fit-content;position:absolute;top:-16px;right:-50px;">
            <h6 class="px-2 fw-bold text-white" style="width:160px;font-size:22px;margin:0 0 0 10px;">Get 10% Off On
              Your
              Favorite Brands</h6>
          </div>
          <!-- Promo 2 -->
          <div class="col-8 d-flex flex-column justify-content-center h-100"
            style="background:#4C73D0CF;position:relative;z-index:555;border-radius:33px;">
            <img id="logo" src="assets/images/promo.png" width="180" alt="gambar logo"
              style="height:fit-content;position:absolute;top:-16px;right:-50px;">
            <h6 class="px-2 fw-bold text-white" style="width:160px;font-size:22px;margin:0 0 0 10px;">Get 10% Off On
              Your
              Favorite Brands</h6>
          </div>
        </div>
        <!-- Container Product -->
        <div class="mt-5">
          <h3 class="px-3 fw-bold">Featured Products</h3>
          <div class="container-fluid d-flex flex-row gap-5 py-2 scroll-hide "
            style="height:100%;max-height:100%;width:100%;max-width:100%;overflow-y:scroll;">
            <!-- Product 1 -->
            <div class="col-12 d-flex flex-column justify-content-center gap-2">
              <div class=" bg-white" style="border-radius:26px;">
                <img id="logo" src="assets/images/products/product1.png" class="img-fluid" alt="gambar logo"
                  style="border-radius:26px;">
              </div>
              <div class="d-flex flex-column mx-auto" style="width:fit-content;">
                <h4>HP Spectre X360</h4>
                <h4>Rp. 27.790.000</h4>
              </div>
            </div>
            <!-- Product 2 -->
            <div class="col-12 d-flex flex-column justify-content-center gap-2">
              <div class=" bg-white" style="border-radius:26px;">
                <img id="logo" src="assets/images/products/product1.png" class="img-fluid" alt="gambar logo"
                  style="border-radius:26px;">
              </div>
              <div class="d-flex flex-column mx-auto" style="width:fit-content;">
                <h4>HP Spectre X360</h4>
                <h4>Rp. 27.790.000</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-5">
          <h3 class="px-3 fw-bold">Trending Products</h3>
          <div class="container-fluid d-flex flex-row gap-5 py-2 scroll-hide "
            style="height:100%;max-height:100%;width:100%;max-width:100%;overflow-y:scroll;">
            <!-- Product 1 -->
            <div class="col-12 d-flex flex-column justify-content-center gap-2">
              <div class=" bg-white" style="border-radius:26px;">
                <img id="logo" src="assets/images/products/product1.png" class="img-fluid" alt="gambar logo"
                  style="border-radius:26px;">
              </div>
              <div class="d-flex flex-column mx-auto" style="width:fit-content;">
                <h4>HP Spectre X360</h4>
                <h4>Rp. 27.790.000</h4>
              </div>
            </div>
            <!-- Product 2 -->
            <div class="col-12 d-flex flex-column justify-content-center gap-2">
              <div class=" bg-white" style="border-radius:26px;">
                <img id="logo" src="assets/images/products/product1.png" class="img-fluid" alt="gambar logo"
                  style="border-radius:26px;">
              </div>
              <div class="d-flex flex-column mx-auto" style="width:fit-content;">
                <h4>HP Spectre X360</h4>
                <h4>Rp. 27.790.000</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Menu -->
    <div style="height:12%;background:#6389B582;">
      <div class="d-flex flex-row justify-content-around align-items-center w-100 h-100"
        style="background:#E3E8EF;border-radius:30px 30px 0 0;">
        <img id="logo" src="assets/icons/icon-home.png" height="50" alt="gambar logo">
        <img id="logo" src="assets/icons/icon-store.png" height="50" alt="gambar logo">
        <img id="logo" src="assets/icons/icon-history.png" height="50" alt="gambar logo">
        <img id="logo" src="assets/icons/icon-person.png" height="50" alt="gambar logo">
      </div>
    </div>
  </div>
</body>
<script src="bootstrap/js/bootstrap.bundle.js"></script>

</html>