<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <title>Crakers - Giriş</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('style/css/login.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
<div class="login-page">
    <div class="content-wrapper">

        <!-- Görsel alanı -->
        <div class="image-container">
            <img src="{{ asset('img/photo.jpeg') }}" alt="Giriş Görseli">

        </div>

        <!-- Form alanı -->
        <div class="form-container">
            <div class="form">
                <h1 class="form-title">Kullanıcı Girişi</h1>

                <div class="social-icons">
                    <img src="{{ asset('icons/facebook.png') }}" alt="Facebook" />
                    <img src="{{ asset('icons/google.png') }}" alt="Google" />
                    <img src="{{ asset('icons/twitter.png') }}" alt="Twitter" />

                </div>

                <div class="or-separator">
                    <span></span>
                    <p>ya da</p>
                    <span></span>
                </div>

                <!-- Kayıt Formu -->
                <form class="register-form">
                    <div class="input-container">
                        <input type="text" id="reg-name" name="name" required placeholder=" " />
                        <label for="reg-name">İsim</label>
                        <img src="{{ asset('icons/user.png') }}" alt="İsim İkonu" class="input-icon" />

                    </div>

                    <div class="input-container">
                        <input type="password" id="reg-password" name="password" required placeholder=" " />
                        <label for="reg-password">Şifre</label>
                        <img src="{{ asset('icons/lock.png') }}" alt="Şifre İkonu" class="input-icon" />

                    </div>

                    <div class="input-container">
                        <input type="email" id="reg-email" name="email" required placeholder=" " />
                        <label for="reg-email">E-posta Adresi</label>
                        <img src="{{ asset('icons/mail.png') }}" alt="E-posta İkonu" class="input-icon" />

                    </div>

                    <div class="remember-me">
                        <input type="checkbox" id="remember1" />
                        <label for="remember1">Beni hatırla</label>
                    </div>

                    <button type="submit">Kayıt Ol</button>
                    <p class="message">Zaten üye misiniz? <a href="#">Giriş yap</a></p>
                </form>

                <!-- Giriş Formu -->
                <form class="login-form">
                    <div class="input-container">
                        <input type="text" id="username" name="username" required placeholder=" " />
                        <label for="username">Kullanıcı Adı</label>
                        <img src="{{ asset('icons/user.png') }}" alt="İsim İkonu" class="input-icon" />
                    </div>

                    <div class="input-container">
                        <input type="password" id="password" name="password" required placeholder=" " />
                        <label for="password">Şifre</label>
                        <img src="{{ asset('icons/lock.png') }}" alt="Şifre İkonu" class="input-icon" />
                    </div>

                    <div class="remember-me">
                        <input type="checkbox" id="remember2" />
                        <label for="remember2">Beni hatırla</label>
                    </div>

                    <button type="submit">Giriş Yap</button>
                    <p class="message">Henüz üye değil misiniz? <a href="#">Hesap oluştur</a></p>
                </form>

            </div>
        </div>

    </div>
</div>

<script>
    $('.message a').click(function (event) {
        event.preventDefault(); // Sayfanın yeniden yüklenmesini engeller

        $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");

        // Başlığı güncelle
        const title = $('.form-title');
        if (title.text().trim() === 'Kullanıcı Girişi') {
            title.text('Kayıt Ol');
        } else {
            title.text('Kullanıcı Girişi');
        }
    });

</script>


</body>
</html>
