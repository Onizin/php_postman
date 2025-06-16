# PHP Simpel Postman

Repo ini berisi contoh sederhana penggunaan PHP untuk membuat API, yang bisa kamu uji lewat Postman.

## Sekilas Tentang PHP & Postman

PHP adalah bahasa pemrograman yang sering dipakai untuk bikin aplikasi web di sisi server. Sementara Postman adalah alat yang memudahkan kita untuk mengetes API, misalnya endpoint HTTP yang dibuat pakai PHP.

## Penjelasan File

### `helper.php`

File ini biasanya berisi kumpulan fungsi bantu yang sering dipakai di file lain, seperti `data.php`, `create.php`, `update.php`, atau `delete.php`. Fungsinya bisa untuk validasi data, membentuk respon JSON, atau hal-hal kecil lain yang bikin kode lebih rapi dan gampang dipakai ulang.

### `data.php`

File ini dipakai buat menyimpan atau mengambil data. Biasanya isinya kode PHP yang mengatur data yang akan diakses lewat endpoint API. Kamu bisa bebas modifikasi file ini sesuai kebutuhan belajar.

### `create.php`

File ini menangani request untuk menambah data baru, biasanya lewat metode HTTP POST. Data dari client (misal dari Postman) akan diproses dan ditambah ke sumber data (bisa array, file, atau database sederhana).

### `update.php`

File ini dipakai untuk mengubah data yang sudah ada, biasanya lewat metode HTTP PUT atau PATCH. Data baru dan ID data yang mau diubah dikirim dari client, lalu diproses dan di-update di sumber data.

### `delete.php`

File ini untuk menghapus data, biasanya lewat metode HTTP DELETE. Client mengirim ID data yang mau dihapus, lalu file ini akan memproses dan menghapus data tersebut dari sumber data.

---

Intinya, repo ini cocok buat kamu yang mau belajar dasar-dasar bikin API sederhana pakai PHP dan mengetesnya dengan Postman.