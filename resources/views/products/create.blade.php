@extends('components.layouts')

@section('content')

  <head>
    <style>
    /* TABLE OPSI PRODUK */

    .post-produk-container {
  position: relative;
  max-width: 600px;
  margin: 40px auto;
  background: white;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}

.judul-post {
  text-align: center;
  margin-bottom: 25px;
  font-size: 24px;
  font-weight: bold;
}

.form-post {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.input-field {
  padding: 14px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 8px;
  outline: none;
  resize: none;
}

.upload-area {
  border: 2px dashed #ccc;
  border-radius: 8px;
  text-align: center;
  padding: 30px;
  cursor: pointer;
  transition: 0.3s;
}

.upload-area:hover {
  border-color: #999;
}

.upload-area img {
  width: 40px;
  margin-bottom: 10px;
  opacity: 0.6;
}

.upload-area span {
  color: #666;
  font-size: 14px;
}

.auto-date {
  font-size: 12px;
  color: gray;
  display: flex;
  align-items: center;
  gap: 5px;
}

.action-buttons {
  display: flex;
  justify-content: flex-end;
  gap: 10px;
  margin-top: 10px;
}

.btn-cancel {
  background-color: black;
  color: white;
  border: none;
  padding: 10px 18px;
  border-radius: 6px;
  cursor: pointer;
}

.btn-submit {
  background-color: #00d500;
  color: white;
  border: none;
  padding: 10px 18px;
  border-radius: 6px;
  cursor: pointer;
}

.kategori-kanan {
  position: absolute;
  top: 40px;
  right: -160px;
}

.kategori-kanan select {
  padding: 10px;
  border-radius: 6px;
  border: 1px solid #ccc;
}

       
    
     
    </style>
  </head>
  <body>
      <!-- ISI -->

     <div class="post-produk-container">
  <h2 class="judul-post">Buat Post Produk</h2>

  <div class="form-post">
    <input type="text" placeholder="Nama Produk" class="input-field" />

    <select class="input-field">
      <option disabled selected>Jumlah Produk</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>

    <label class="upload-area">
      <input type="file" hidden />
      <img src="https://cdn-icons-png.flaticon.com/512/1375/1375106.png" alt="upload" />
      <span>Tambah Gambar</span>
    </label>

    <textarea class="input-field" placeholder="Tulis Deskripsi"></textarea>

    <div class="auto-date">
      📅 (Tanggal) Auto Di Generate System
    </div>

    <div class="action-buttons">
      <button class="btn-cancel">Batal</button>
      <button class="btn-submit">Post Sekarang</button>
    </div>
  </div>

</div>



  </body>
</html>
@endsection