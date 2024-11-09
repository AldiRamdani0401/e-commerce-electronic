<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Register</title>
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
    let formData = {};

    let next = false;

    // ## Render Component

    // Progress Bar Handler
    const progressBar = [];
    const maxBarLength = 4;

    let countStepBar = 1;

    function nextStepBar() {
        // console.log("nextStepBar");
        if (!next) return;
        countStepBar < maxBarLength && countStepBar++;
        barRenderTemplate();
        templateInputForm();
    }

    function backStepBar() {
        // console.log("backStepBar");
        countStepBar > 1 && countStepBar--;

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

        let count = 0;

        Array.from(inputElements).forEach((input) => {
            Array.from(labelElements).forEach((label) => {
                if (label.htmlFor === input.id) {
                    if (input.value === '') {
                        label.style.borderColor = '#8F7BBC';
                        label.style.borderWidth = '2px';
                    } else {
                        label.style.borderColor = '#6389B5';
                        label.style.borderWidth = '4px';
                        formData = { ...formData, [input.id]: input.value }
                        ++count;
                        validationForm(input.value, input.getAttribute('type'), count, inputElements.length);
                    }
                }
            });
        });
    }

    // Sanitize Input
    function sanitizeInput(value) {
        return value.replace(/[<>/"'&\-\?*#^`|\\]+/g, (char) => {
            switch (char) {
                case '<': return '&lt;';
                case '>': return '&gt;';
                case '"': return '&quot;';
                case "'": return '&#39;';
                case '&': return '&amp;';
                case '-': return '&#45;';
                case '?': return '&#63;';
                case '*': return '&#42;';
                case '#': return '&#35;';
                case '^': return '&#94;';
                case '`': return '&#96;';
                case '|': return '&#124;'
                case '\\': return '&#92;'
                default: return char;
            }
        });
    }

    function validationForm(value, type, count, max) {
        // Sanitasi nilai input
        let sanitizeValue = value;

        // Gunakan sanitasi untuk setiap jenis input
        switch (type) {
            case 'text':
                sanitizeValue = sanitizeInput(value.trim());
                break;
            case 'email':
                sanitizeValue = sanitizeInput(value.trim().toLowerCase());
                break;
            case 'number':
                sanitizeValue = value.trim();
                if (isNaN(sanitizeValue)) {
                    return;
                }
                break;
            default:
                break;
        }
        if (max === count) next = true;
    }

    function dateAction(e) {
        e.target.setAttribute('type', 'date');
    }


    // Template Input Form
    function templateInputForm(cb) {
        const container = document.getElementById('container-input-element');

        const variant = [
            {
                title: 'Identitas Pengguna',
                inputs: [
                    { name: 'nama-lengkap', placeholder: 'Nama Lengkap', type: 'text', icon: 'assets/icons/icon-user.png' },
                    { name: 'email', placeholder: 'Email Anda', type: 'email', icon: 'assets/icons/icon-mail.png' },
                    { name: 'nomor-telepon', placeholder: 'Nomor Handphone / Telepon Anda', type: 'number', icon: 'assets/icons/icon-phone.png' },
                    { name: 'tanggal-lahir', placeholder: 'Tanggal Lahir Anda', type: 'text', icon: 'assets/icons/icon-date.png' },
                ]
            },
            {
                title: 'Alamat Pengguna',
                inputs: [
                    { name: 'provinsi', placeholder: 'Provinsi', type: 'text', icon: 'assets/icons/icon-province.png' },
                    { name: 'kabupaten', placeholder: 'Kabupaten / Kota', type: 'text', icon: 'assets/icons/icon-city.png' },
                    { name: 'kecamatan', placeholder: 'Kecamatan', type: 'text', icon: 'assets/icons/icon-district.png' },
                    { name: 'desa-kelurahan', placeholder: 'Desa / Kelurahan', type: 'text', icon: 'assets/icons/icon-village.png' },
                ]
            },
            {
                title: 'Akun Pengguna',
                inputs: [
                    { name: 'username', placeholder: 'Username Anda', type: 'text', icon: 'assets/icons/icon-user.png' },
                    { name: 'password', placeholder: 'Password Anda', type: 'password', icon: 'assets/icons/icon-lock.png' },
                    { name: 'conf-password', placeholder: 'Konfirmasi Password Anda', type: 'password', icon: 'assets/icons/icon-conf-password.png' },
                ]
            },
            {
                title: 'Verifikasi Pengguna',
                inputs: [
                    { name: 'conf-verification-code', placeholder: 'XXXXXX', type: 'number' }
                ]
            },
        ];
        const index = countStepBar - 1;

        let dom = '';

        variant[index].inputs.map((input) => {
            dom += `
                    <div id="otp"></div>
                    <div class="d-flex p-1 gap-2">
                        <label for="${input.name}" class="${input.icon ?? 'd-none'} d-flex justify-content-center p-2"
                            style="border:2px solid #8F7BBC;border-radius:100%;">
                            <img src="${input.icon}" width="20" height="20">
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

        // Verification Code
        const element = document.getElementById('conf-verification-code');
        if (element) {
            let count = 2;
            let OTP = 555555;

            // Fungsi untuk mendapatkan OTP baru
            const getOTP = () => {
                console.log('getOTP jalan..');
                OTP = Math.floor(100000 + Math.random() * 900000);
                count = 2;
                updateOTP();
                otpInterval = setInterval(updateOTP, 1000);
            };

            const updateOTP = () => {
                if (count >= 0) {
                    document.getElementById('btn-back').disabled = true;
                    document.getElementById('otp').innerHTML = `
                    <div class="d-flex flex-column">
                        <h3 class="text-center fs-3">OTP : ${count} detik</h3>
                        <h1 class="text-center fs-1 fw-bold">${OTP}</h1>
                    </div>
                `;
                    count--;
                } else {
                    clearInterval(otpInterval);
                    OTP = '';
                    document.getElementById('btn-back').disabled = false;
                    document.getElementById('otp').innerHTML = `
                        <div class="d-flex flex-row justify-content-center gap-3 mx-auto">
                            <h3 class="text-center fs-3 m-0">OTP : <strong class="text-danger">EXPIRED</strong></h3>
                            <button id="btn-otp" type="button" class="fw-bold" style="width:fit-content;">Send again</button>
                        </div>
                    `;

                    const btnOTP = document.getElementById('btn-otp');
                    if (btnOTP) btnOTP.addEventListener('click', getOTP);
                }
            };

            // Memperbarui OTP setiap detik
            let otpInterval = setInterval(updateOTP, 1000);

            element.classList.add('text-center');
            element.style.fontSize = "30px";
            element.addEventListener('keypress', (e) => {
                const value = e.target.value;
                if (value.length >= 6) {
                    e.preventDefault();
                }
            });
        }

        // Callback
        if (typeof cb !== 'function') return;
        cb();

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
                    <button id="btn-back" type="button" class="btn w-100 text-white"
                        style="border-radius:20px;background-color:orange;font-weight:bold;"
                        onclick="backStepBar()">Back</button>
                    <button id="btn-next" type="button" class="btn w-100 text-white"
                        style="border-radius:20px;background-color:orange;font-weight:bold;"
                        onclick="nextStepBar()">Next</button>
                </div>
            </form>
            <div class="d-flex justify-content-center w-25 my-3" style="border-radius:20px;background-color:orange;">
                <a href="/" class="fs-5 text-white text-decoration-none">Kembali</a>
            </div>
        </div>
    </div>
</body>
<script src="bootstrap/js/bootstrap.bundle.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        barRenderTemplate();
        templateInputForm(() => {
            document.getElementById('tanggal-lahir').addEventListener('click', (e) => dateAction(e));
        });
    });
</script>

</html>