<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>login</title>
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
</style>

<script>
    // Form Data

    // ## Render Component

    // Progress Bar Handler
    const progressBar = [];
    let countStepBar = 1;
    const maxBarLength = 4;

    function nextStepBar() {
        // console.log("nextStepBar");
        countStepBar < maxBarLength && countStepBar++;
        barRenderTemplate();
        templateInputForm();
    }

    function backStepBar() {
        // console.log("backStepBar");
        countStepBar > 1 && countStepBar--;
        console.log(countStepBar);
        barRenderTemplate();
        templateInputForm();
    }

    function barRenderTemplate() {
        const container = document.getElementById('container-progress-bar');
        const barVariant = [
            `<div class="d-flex justify-content-center align-items-center"
                style="height:50px;width:50px;border-radius:100%;background-color:darkblue;">
                <span class="fs-4 mx-auto">${countStepBar}</span>
            </div>`,
            `<div class="d-flex justify-content-center align-items-center"
                style="height:25px;width:25px;border-radius:100%;background-color:white;">
            </div>`,
            `<div class="d-flex justify-content-center align-items-center"
                style="height:15px;width:15px;border-radius:100%;background-color:white;">
            </div>`,
            `<div class="d-flex justify-content-center align-items-center"
                style="height:8px;width:8px;border-radius:100%;background-color:white;">
            </div>`
        ];

        const barStructure = [];

        switch (countStepBar) {
            case 1:
                barStructure.push(barVariant[0], barVariant[1], barVariant[2], barVariant[3])
                break;
            case 2:
                barStructure.push(barVariant[1], barVariant[0], barVariant[1], barVariant[2])
                break;
            case 3:
                barStructure.push(barVariant[2], barVariant[1], barVariant[0], barVariant[2])
                break;
            case 4:
                barStructure.push(barVariant[3], barVariant[2], barVariant[1], barVariant[0])
                break;
        }

        let dom = '';
        barStructure.map((bar) => {
            dom += bar;
        });

        container.innerHTML = dom;
    }

    // Form Handler
    function selectInput(e) {
        const labelElements = document.getElementsByTagName('label');
        Array.from(labelElements).forEach((element) => {
            if (element.htmlFor == e.id) {
                element.style.borderColor = '#6389B5';
                element.style.borderWidth = '4px';
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
                        label.style.borderWidth = '4px';
                    }
                }
            });
        });
    }

    // Template Input Form
    function templateInputForm() {
        const container = document.getElementById('container-input-element');

        const variant = [
            {
                title: 'Identitas Pengguna',
                inputs: [
                    { name: 'nama-lengkap', placeholder: 'Nama Lengkap', type: 'text' },
                    { name: 'email', placeholder: 'Email Anda', type: 'email' },
                    { name: 'nomor-telepon', placeholder: 'Nomor Handphone / Telepon Anda', type: 'number' },
                    { name: 'tanggal-lahir', placeholder: 'Tanggal Lahir Anda', type: 'date' },
                ]
            },
            {
                title: 'Alamat Pengguna',
                inputs: [
                    { name: 'nama-lengkap', placeholder: 'Nama Lengkap' },
                    { name: 'email', placeholder: 'Email Anda' },
                    { name: 'nomor-telepon', placeholder: 'Email Anda' },
                    { name: 'tanggal-lahir', placeholder: 'Tanggal Lahir Anda' },
                ]
            },
            {
                title: 'Akun Pengguna',
                inputs: [
                    { name: 'nama-lengkap', placeholder: 'Nama Lengkap' },
                    { name: 'email', placeholder: 'Email Anda' },
                    { name: 'nomor-telepon', placeholder: 'Email Anda' },
                    { name: 'tanggal-lahir', placeholder: 'Tanggal Lahir Anda' },
                ]
            },
            {
                title: 'Verifikasi Pengguna',
                inputs: [
                    { name: 'nama-lengkap', placeholder: 'Nama Lengkap' },
                    { name: 'email', placeholder: 'Email Anda' },
                    { name: 'nomor-telepon', placeholder: 'Email Anda' },
                    { name: 'tanggal-lahir', placeholder: 'Tanggal Lahir Anda' },
                ]
            },
        ];
        const index = countStepBar - 1;

        let dom = '';

        variant[index].inputs.map((input) => {
            dom += `
                    <div class="d-flex p-1 gap-2">
                        <label for="${input.name}" class="d-flex justify-content-center p-2"
                            style="border:2px solid #8F7BBC;border-radius:100%;">
                            <img src="assets/icon-user.png" width="20" height="20">
                        </label>
                        <input type="${input.type}" id="${input.name}" class="input-1 w-100" placeholder="${input.placeholder}"
                            onfocus="selectInput(this)" onblur="checkInput()" autocomplete="off" required>
                    </div>
                `;
        });

        const formElement = `
            <h1 class="text-center fw-bold w-100 text-secondary" style="font-size:25px;">${variant[index].title}</h1>
            <hr>
            <!-- Input Elements -->
            ${dom}
        `;
        container.innerHTML = formElement;
    }

</script>

<body>
    <div class="container-sm d-flex flex-column px-0 pt-2 w-100 vh-100">
        <div class="text-center">
            <img src="assets/logo.png" width="150" alt="gambar logo">
        </div>
        <div id="container-form-login"
            class="secondary-container container-fluid d-flex flex-column align-items-center h-100">
            <h1 class="title-1 mt-2 fw-bold text-white">REGISTER</h1>
            <!-- Progress Bar -->
            <div id="container-progress-bar"
                class="d-flex justify-content-center align-items-center mt-2 mb-4 gap-3 fw-bold text-white w-100">
            </div>
            <!-- Form -->
            <form id="auth" action="" class="d-flex flex-column gap-3 w-100">
                <!-- Container Input Element -->
                <div id="container-input-element" class="bg-white pt-2 pb-4 px-2 gap-3" style="border-radius:20px;">
                    <hr>
                </div>
                <!-- Button -->
                <div class="d-flex justify-content-center gap-2">
                    <button type="button" class="btn w-100 text-white"
                        style="border-radius:20px;background-color:orange;font-weight:bold;"
                        onclick="backStepBar()">Back</button>
                    <button type="button" class="btn w-100 text-white"
                        style="border-radius:20px;background-color:orange;font-weight:bold;"
                        onclick="nextStepBar()">Next</button>
                </div>
            </form>
            <div class="d-flex flex-row justify-content-center gap-4 w-100 mb-5">
                <a href="/" class="nav-login fs-5 text-white text-decoration-none">Kembali</a>
            </div>
        </div>
    </div>
</body>
<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        barRenderTemplate();
        templateInputForm();
    });
</script>

</html>