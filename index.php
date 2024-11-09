<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Login | Electronic</title>
</head>

<style>
    body {
        background-color: #E3E8EF;
        max-height: vh-100;
    }

    form {
        background-color: ;
    }

    #container-form-login {
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
        background-color: #6389B5;
    }

    /* Mobile */
    @media only screen and (min-width: 600px) {

    }

    /* Mobi */
    @media only screen and (min-width: 768px) {

    }

    /* Laptop */
    @media only screen and (min-width: 992px) {
        img#logo {
            width: 500px;
        }
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
    <div class="container-sm d-flex flex-column align-items-center flex-md-row px-0 pt-5 w-100 vh-100">
        <div class="text-center">
            <img id="logo" src="assets/logo.png" width="272" alt="gambar logo">
        </div>
        <div id="container-form-login"
            class="secondary-container container-fluid d-flex flex-column justify-content-between align-items-center h-100">
            <h1 class="title-1 mt-5 fw-bold text-white">LOGIN</h1>
            <!-- Form -->
            <form id="auth" action="" class="d-flex flex-column gap-3">
                <!-- Container Input Element -->
                <div class="bg-white py-4 px-2 gap-2" style="border-radius:20px;">
                    <!-- Username -->
                    <div class="d-flex justify-content-center p-1 gap-2">
                        <label for="username" class="d-flex justify-content-center p-2"
                            style="border:2px solid #8F7BBC;border-radius:100%;">
                            <img src="assets/icons/icon-user.png" width="20" height="20">
                        </label>
                        <input type="text" id="username" class="input-1 text-center" placeholder="Username"
                            onfocus="selectInput(this)" onblur="checkInput()" autocomplete="off" required>
                    </div>
                    <hr>
                    <!-- Password -->
                    <div class="d-flex justify-content-center p-1 gap-2">
                        <label for="password" class="d-flex justify-content-center p-2"
                            style="border:2px solid #8F7BBC;border-radius:100%;">
                            <img src="assets/icons/icon-lock.png" class="mx-auto" width="20" height="20">
                        </label>
                        <input type="text" id="password" class="input-1 text-center" placeholder="Password"
                            onfocus="selectInput(this)" onblur="checkInput()" autocomplete="off" required>
                    </div>
                </div>
                <!-- Button -->
                <div class="d-flex justify-content-center gap-2">
                    <button class="btn w-100 text-white"
                        style="border-radius:20px;background-color:orange;font-weight:bold;">Masuk</button>
                </div>
            </form>
            <div class="d-flex flex-row justify-content-center gap-4 w-100 mb-5">
                <a href="/forgot-password.php" class="nav-login fs-5 text-white text-decoration-none">Forgot
                    password?</a>
                <a href="/register.php" class="nav-login fs-5 text-white text-decoration-none">Register</a>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="bootstrap/js/bootstrap.bundle.js"></script>

</html>