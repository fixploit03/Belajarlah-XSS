# Belajar XSS

XSS (Cross-Site Scripting) adalah sebuah kerentanan keamanan di aplikasi web di mana penyerang dapat menyuntikkan kode berbahaya, biasanya dalam bentuk JavaScript, ke dalam halaman web yang dilihat oleh pengguna lain. Ini memungkinkan penyerang untuk mencuri data sensitif seperti cookies, sesi pengguna, atau bahkan mengalihkan pengguna ke situs berbahaya.

## Jenis-jenis XSS

Terdapat tiga jenis utama dari Cross-Site Scripting (XSS), masing-masing memiliki cara penyerangan yang berbeda:

1. **Stored XSS**:  
   Pada Stored XSS, kode berbahaya disimpan di server (misalnya dalam basis data, forum, atau sistem komentar). Ketika pengguna mengunjungi halaman yang terpengaruh, kode berbahaya yang disuntikkan tersebut dijalankan di browser pengguna. Jenis ini lebih berbahaya karena menyerang banyak pengguna sekaligus dan tidak bergantung pada interaksi langsung mereka.
   
   **Contoh**: Penyerang mengirimkan script berbahaya melalui formulir komentar di sebuah situs web. Script tersebut kemudian disimpan di database dan dijalankan setiap kali halaman tersebut dimuat oleh pengguna lain.
2. **Reflected XSS**:  
   Reflected XSS terjadi ketika kode berbahaya disertakan dalam permintaan (seperti URL atau parameter query) yang kemudian dipantulkan kembali oleh server tanpa pemrosesan yang benar. Dalam jenis ini, serangan hanya terjadi jika pengguna mengklik link yang mengandung script berbahaya yang dipantulkan oleh server. Serangan ini umumnya lebih bersifat satu kali dan membutuhkan interaksi langsung dari korban.

   **Contoh**: Penyerang membuat link yang mengandung script berbahaya dan mengirimkannya ke korban. Ketika korban mengklik link, server akan memantulkan script yang tidak tervalidasi dan dieksekusi di browser korban.
3. **Dom-based XSS**:  
   DOM-based XSS terjadi ketika manipulasi DOM (Document Object Model) di sisi klien menyebabkan eksekusi kode berbahaya. Dalam hal ini, data yang disuntikkan oleh penyerang diproses oleh browser di sisi klien tanpa berinteraksi dengan server. Biasanya, ini melibatkan manipulasi URL atau input pengguna yang tidak tervalidasi dengan benar oleh JavaScript di halaman web.

   **Contoh**: Penyerang memanipulasi URL atau input pengguna yang kemudian diproses oleh JavaScript di browser dan langsung mengeksekusi kode berbahaya di sisi klien tanpa melibatkan server.
