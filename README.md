# Laravel API Starter Pack

Bu proje, Laravel kullanarak oluşturulmuş basit bir API başlangıç paketidir. Temel olarak, Sanctum kullanılarak kullanıcı kaydı ve girişi için gerekli rotaları içerir.

## Kurulum

1. Repoyu klonlayın:

    ```bash
    git clone https://github.com/kullanici/adiniz/Laravel-Api-Starter-Pack.git
    ```

2. Proje dizinine gidin:

    ```bash
    cd Laravel-Api-Starter-Pack
    ```

3. Composer bağımlılıklarını yükleyin:

    ```bash
    composer install
    ```

4. .env dosyasını oluşturun ve veritabanı bağlantı bilgilerinizi güncelleyin:

    ```bash
    cp .env.example .env
    ```

5. Uygulama anahtarını oluşturun:

    ```bash
    php artisan key:generate
    ```

6. Veritabanını oluşturun ve migre edin:

    ```bash
    php artisan migrate
    ```

7. Passport istemcisi oluşturun:

    ```bash
    php artisan passport:install
    ```

8. Uygulamayı başlatın:

    ```bash
    php artisan serve
    ```

## Kullanım

1. Kullanıcı kaydı yapmak için:

    `POST /api/register`

    ```json
    {
        "name": "John Doe",
        "email": "john@example.com",
        "password": "secret123"
    }
    ```

2. Kullanıcı girişi yapmak için:

    `POST /api/login`

    ```json
    {
        "email": "john@example.com",
        "password": "secret123"
    }
    ```

    Bu istek size bir API erişim jetonu sağlayacaktır.

3. Diğer özel rotaları kullanmak için, her isteğinizi önce oturum açma işlemi yaparak gerçekleştirin ve ardından elde ettiğiniz jetonu kullanarak istekleri yapın.

## Genel Bakış

Bu başlangıç paketi üzerine inşa edilebilecek bir temel sağlar. Projeyi genişletmek veya özelleştirmek için Laravel Sanctum dökümantasyonunu inceleyebilir ve projenize uygun diğer özellikleri ekleyebilirsiniz.

## Lisans

Bu proje [MIT lisansı](LICENSE) altında lisanslanmıştır.
