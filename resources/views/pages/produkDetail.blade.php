@extends('layouts.app')

@section('content')
{{-- conntent --}}
<div class="content-wrapper">
  <div class="produk-detail">
    <div class="produk">
      <div class="container">
        <div class="image">
          <img src="{{ asset('assets/1.jpg') }}" alt="">
        </div>
        <div class="detail">
          <p class="nama-produk">Stiker Label A3+ (Full Color | CMYK)</p>
          <p class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i> 
            (10 Ulasan)
          </p>
          <p class="deskripsi-singkat">
            "Cetak Stiker Label Full Color , Cetak Online Cepat Berkualitas Hubungi : 0817 4808 735 Cetak Stiker Label Full Color ( Express ) ..."
          </p>
          <p class="harga">Harga (1 Lembar A3+ = 1pcs)</p>
          <form action="">
            <div class="panjang-lebar">
              <div class="panjang">
                <label for="panjang">Panjang</label>
                <input type="text" name="panjang" id="panjang" maxlength="3">
                <span>cm</span>
              </div>
              <div class="lebar">
                <label for="lebar">Lebar</label>
                <input type="text" name="lebar" id="lebar" maxlength="3">
                <span>cm</span>
              </div>
            </div>
            <div class="bahan">
              <label for="bahan">Pilih Jenis Bahan</label>
              <select name="bahan" id="bahan">
                <option value="">Stiker Vinyl Glossy (bahan plastik)</option>
                <option value="">Stiker Vinyl Matte (bahan plastik)</option>
                <option value="">Stiker Vinyl Transparan (bahan plastik)</option>
                <option value="">Stiker Kromo Glossy (bahan kertas)</option>
                <option value="">Stiker Kromo Matte (bahan kertas)</option>
                <option value="">Stiker Silver Matte</option>
              </select>
            </div>
            <div class="cutting">
              <label for="cutting">Pilih Jenis Cutting</label>
              <select name="cutting" id="cutting">
                <option value="">Setengah Putus Per A3 (Min. ukuran 1 cm)</option>
                <option value="">Setengah Putus Per A6 (Min. ukuran 1 cm)</option>
                <option value="">Putus Bentuk Custom (Min. ukuran 1,5 cm) | BSD Pre-Order 1 hari</option>
                <option value="">Putus Bentuk Kotak Saja (Min. ukuran 3 cm)</option>
                <option value="">*Tanpa Cutting</option>
              </select>
            </div>
            <div class="keterangan">
              <label for="keterangan">Keterangan</label>
              <textarea name="keterangan" id="keterangan" cols="30" rows="6"></textarea>
            </div>
            <div class="upload">
              <button type="button" class="tablink" onclick="openPage('berkas', this, 'lightblue')" id="defaultOpen">Upload File</button>
              <button type="button" class="tablink" onclick="openPage('tautan', this, 'lightblue')">Paste Link</button>

              <div id="berkas" class="tabcontent">
                <p>(PDF, JPG, ZIP, RAR - Max 50Mb)</p>
                <input type="file" name="berkas" id="berkas">
              </div>
              <div id="tautan" class="tabcontent">
                <label for="input_tautan">Link: </label>
                <input type="text" name="input_tautan" id="input_tautan">
              </div>
            </div>
            <div class="jumlah">
              <p>Jumlah <span style="font-weight: 100">(Min Order: 1 Lembar A3+)</span></p>
              <div>
                <input type="text" name="input_jumlah" id="input_jumlah" value="1">
                <button type="button" class="minus"><i class="fas fa-minus"></i></button>
                <button type="button" class="plus"><i class="fas fa-plus"></i></button>
              </div>
            </div>
            <div class="pesanan">
              <div>Waktu Pengerjaan</div>
              <div>1 Jam</div>
              <div>Harga Barang</div>
              <div>Rp 23.000</div>
              <div>Jumlah</div>
              <div>3 Lembar A3+</div>
              <div style="font-weight: bold;">Total</div>
              <div style="font-weight: bold; color: red;">Rp 50.000</div>
            </div>
            <div class="tombol-beli">
              <button><i class="fas fa-shopping-cart"></i> Beli</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="deskripsi">
      <div class="tab">
        <button class="deskripsi-link-tab" onclick="kota(event, 'rincianProduk')" id="deskripsiDefaultOpen">Rincian Produk</button>
        <button class="deskripsi-link-tab" onclick="kota(event, 'harga')">Harga</button>
        <button class="deskripsi-link-tab" onclick="kota(event, 'ulasan')">Ulasan (3)</button>
      </div>
      
      <div id="rincianProduk" class="deskripsi-tab-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, quis! Recusandae, ea rerum similique itaque optio culpa odio tempora adipisci accusantium quos perspiciatis possimus excepturi nihil exercitationem, ab laborum maiores, neque quae quas. Enim consectetur illo nulla rem asperiores. Explicabo quibusdam qui ex tempora temporibus officiis aliquam unde, aut asperiores consequatur nostrum tempore quod iste amet, obcaecati mollitia rem sit. Dolorum itaque non fugiat blanditiis repellendus? Enim corrupti a facilis culpa nostrum. Cupiditate velit placeat error nobis mollitia quod consequatur officiis numquam eos, quasi sint expedita, porro suscipit. Earum exercitationem at nesciunt necessitatibus deleniti inventore cupiditate animi vel distinctio repudiandae!</p>       
      </div>
      
      <div id="harga" class="deskripsi-tab-content">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia aliquam deserunt odit inventore modi corrupti error temporibus non dignissimos minima. Officiis voluptatem molestias quod iste non. Earum, culpa? Unde libero dolores ipsa quos dolor omnis quidem explicabo cupiditate facilis? Cupiditate recusandae praesentium obcaecati vel ratione deleniti officia laudantium doloribus harum. Fuga rem eaque exercitationem. Molestias laborum illum omnis minus ipsum ipsa ducimus asperiores ea doloremque explicabo accusantium dignissimos, inventore modi similique quasi quo? Aperiam cum ratione eius ab, sunt temporibus ducimus earum animi voluptate quas sapiente quod ex beatae perferendis nihil quos commodi. Ea nobis ad repellat quibusdam architecto iusto!</p> 
      </div>
      
      <div id="ulasan" class="deskripsi-tab-content">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum accusantium consectetur, veniam illum alias optio deleniti provident adipisci dolorum aspernatur a blanditiis assumenda eius rem laudantium explicabo, molestiae unde. Possimus nesciunt excepturi magni dolore exercitationem a architecto quas fuga reprehenderit distinctio laudantium quo voluptatum aut veritatis tempore, minus eaque voluptatem itaque. Unde natus vel aut porro! Unde animi excepturi, reprehenderit impedit ut voluptatum nobis! Expedita cumque eveniet placeat impedit magni obcaecati sed dignissimos, soluta vitae autem est dolor laborum dolorem tempora doloribus perferendis quis! Tenetur eius impedit ullam libero at, nisi architecto natus ut ratione. Similique quia nihil architecto reprehenderit!</p>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
  // upload
  function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

  // deskripsi
  function kota(tabaktif, namakota) {
    var i, tabcontent, tablink;
    tabcontent = document.getElementsByClassName("deskripsi-tab-content");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablink = document.getElementsByClassName("deskripsi-link-tab");
    for (i = 0; i < tablink.length; i++) {
      tablink[i].className = tablink[i].className.replace(" active", "");
    }
    document.getElementById(namakota).style.display = "block";
    tabaktif.currentTarget.className += " active";
  }
  // Get the element with id="deskripsiDefaultOpen" and click on it
  document.getElementById("deskripsiDefaultOpen").click();
</script>    
@endsection