![magdi](https://user-images.githubusercontent.com/92472860/225190567-baa456da-2cc7-4b62-8f92-ddd43751cd86.png)
<h1 align="center"> 🪐 Magang Digital (magdi) 🪐 </h1>
<p align="center">Magdi merupakan aplikasi management magang siswa SMK Negeri 6 Jember secara Digital.</p>

> Install [Node.js](https://nodejs.org/en/) - npm / yarn

## Install
1. Clone Project ini 
    ```bash
    git clone https://github.com/ellenaasari/magang-digital.git
    cd magdi
    ```
2. Instal dependensi
    ```bash
    composer install
    ```
    dan dependensi javascript
    ```bash
    yarn install && yarn dev
    #atau
    npm install && npm run dev
    ```

3. Konfigurasi Laravel
    ```bash
    copy .env.example .env
    php artisan key:generate
    ```

4. Buat database 'magdi' pada phpmyadmin

5. Migrate database
    ```bash
    php artisan migrate --seed
    ```

6. Serve aplikasi
    ```bash
    php artisan serve
    ```
    
   Catatan : 🌼

    > Sebelum login silahkan registrasi terlebih dahulu 
    
