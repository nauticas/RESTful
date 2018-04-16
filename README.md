RESTful (REpresentational State Transfer)
===
#### Pengertian
Standar arsitektur komunikasi berbasis web ini mulai dikembangkan oleh Roy Fielding pada tahun 2000. Karena berbasis web, protocol komunikasi datanya menggunakan HTTP (Hypertext Transfer Protocol). Arsitektur REST terbagi menjadi dua yaitu server dan client. REST Server menyediakan sumberdaya/data (resources) sedangkan REST Client mengakses dan menampilkan resource tersebut untuk penggunaan selanjutnya. Dalam proses transfer, resource menggunakan format JSON atau XML. 

###### Kelebihan REST :
- Komunikasi tidak terbatas oleh bahasa pemrograman atau platform tertentu
- Mudah dipelajari, tidak bergantung pada tools tertentu
- Ringkas, tidak membutuhkan layer pertukaran pesan (messaging) tambahan
- Secara desain dan filosofi lebih dekat dengan web

###### Kelemahan REST :
- Karena model komunikasinya point-to-point, tidak bisa secara mudah digunakan untuk broadcast
- Kurangnya dukungan standar keamanan dan kebijakan dapat menimbulkan ketimpangan dalam pengembangan layanan baik di sisi Server maupun Client

#### Cara kerja RESTful web services
Garis besar cara kerja RESTful web services umumnya dimulai dari REST Client mengirimkan sebuah data melalui `HTTP Request`, kemudian REST Server membalas dengan `HTTP Response`.

###### Komponen HTTP Request :
- Verb, HTTP method yang digunakan seperti GET, POST, DELETE, PUT dll.
- Uniform Resource Identifier (URI) untuk mengidentifikasi lokasi data yang dipanggil pada REST Server
- HTTP version, menunjukkan versi HTTP yang digunakan untuk berkomunikasi
- Request Header, berisi metadata untuk HTTP Request seperti browser, format yang didukung, format dari body pesan, cache, dll
- Request Body, konten dari data pada HTTP Request

###### Komponen HTTP Response :
- Status/Response Code, mengindikasikan status server terhadap resource yang diminta (contoh: 404, artinya resource tidak ditemukan; 200, artinya resource OK)
- HTTP version, menunjukkan versi HTTP yang digunakan untuk berkomunikasi
- Response Header, berisi metadata untuk HTTP Response seperti type server, panjang content, type content, waktu response, dll
- Response Body, konten dari data yang diberikan

**Method POST dan GET**

**Method PUT dan DELETE**



**SOURCE CODE RESTFUL API DENGAN LARAVEL**

##### Kebutuhan sistem

- composer
- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension

untuk menggunakan aplikasi ini silakan lakukan perintah sebagai berikut:

1. unduh aplikasi ini dengan menggunakan perintah git clone

   ```
   git clone https://github.com/nauticas/RESTful.git
   ```

   ​

2. setelah aplikasi terunduh masuk dalam folder laravel-resful kemudian jalankan peritah :

   ```
   composer install
   ```

   tunggu sampai instalasi selesai

3. buat data base sesuai kebutuhan

4. lakukan perubahan *environment* file .env  pada baris berikut

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=user_database
   DB_PASSWORD=password_database
   ```

    sesuaikan dengan nama dan setting database anda

5. jalankan dua perintah berikut untuk membuat tabel dan dummy data

   ```
   php artisan migrate

   php artisan db:seed

   ```

   pastikan tabel dan data telah ada pada database



**UJI COBA DENGAN POSTMAN**

######METHOD GET ALL

<img src="https://github.com/nauticas/RESTful/blob/master/postman/postman-getall.jpg" alt="Build Status"></a>

######METHOD GET

<img src="https://github.com/nauticas/RESTful/blob/master/postman/postman-get.jpg" alt="Build Status"></a>

######METHOD POST

<img src="https://github.com/nauticas/RESTful/blob/master/postman/postman-postSave.jpg" alt="Build Status"></a>

######METHOD PUT

<img src="https://github.com/nauticas/RESTful/blob/master/postman/postman-put.jpg" alt="Build Status"></a>

######METHOD DELETE



<img src="https://github.com/nauticas/RESTful/blob/master/postman/postman-delete.jpg" alt="Build Status"></a>