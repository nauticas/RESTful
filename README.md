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
