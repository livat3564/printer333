<?php include 'layout/navbar.php'; ?>
<?php 

$data = query("SELECT * FROM produk");

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    .header {
      position: fixed,
        z-index: 100000,
        height: 200px;
      top: 0px
    }
  </style>

<body>
  <div class="header">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100"
            src="https://id.canon/media/image/2020/03/17/8b37a7b1757941f888aaa560dfd1a27a_PIXMA_GSeries2019_WebBanner_Bahasa.jpg"
            alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" 
          src="https://id.canon/media/image/2021/04/15/5acb72fd493e4095b877582ee2e53399_2021-04-1414+Resize+Printer+Ink+Tank+Juara+1920+x+750+px_1.jpg"
           alt="First slide"> 
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" 
          src="https://id.canon/media/image/2022/02/16/298550598cd4424eb8d145172cb957ba_2022-02-0000++Materi+Promo+PIXMA+G+Series+Maret+-+id.canon.jpg"
            alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script>
    let show = ''
    let modal = ''
    let listProduk = [
      {
        namaProduk: "Susu milk",
        hargaProduk: 12000,
        gambarProduk: "https://s0.bukalapak.com/img/57640002541/s-194-194/data.png.webp"
      },
      {
        namaProduk: "Nabati Keju",
        hargaProduk: 19000,
        gambarProduk: "https://s1.bukalapak.com/img/1340829263/s-194-194/Screenshot_2018_10_20_21_54_14_825_01.jpeg.webp"
      },
      {
        namaProduk: "Astor Coklat",  
        hargaProduk: 18000,
        gambarProduk: "https://s4.bukalapak.com/img/9726454468/s-194-194/data.png.webp"
      },
      {
        namaProduk: "Cheetos Twist Jagung",
        hargaProduk: 15000,
        gambarProduk: "https://s1.bukalapak.com/img/6393191324/s-194-194/AS4_CSTROC75Gr_89686600308.jpg.webp"
      },
      {
        namaProduk: "Fanta Strawberry",
        hargaProduk: 15000,
        gambarProduk: "https://s2.bukalapak.com/img/2246578703/s-194-194/image.jpg.webp"
      },
      {
        namaProduk: "Silverqueen_White_Chocolate",
        hargaProduk: 20000,
        gambarProduk: "https://s3.bukalapak.com/img/8881695067/s-194-194/Silverqueen_White_Chocolate.jpg.webp"
      },
      {
        namaProduk: "Tango Coklat",
        hargaProduk: 27000,
        gambarProduk: "https://s1.bukalapak.com/img/1560754463/w-300/Screenshot_2018_10_23_00_57_36_823.jpeg.webp"
      },
      {
        namaProduk: "Teh botol Sosro",
        hargaProduk: 11000,
        gambarProduk: "https://s3.bukalapak.com/img/8607060754/s-194-194/8996006855145_copy.jpg.webp"
      },
      {
        namaProduk: "Fruit tea",
        hargaProduk: 5000,
        gambarProduk: "https://s0.bukalapak.com/img/01782025541/s-194-194/data.jpeg.webp"
      },
      {
        namaProduk: "Coca cola",
        hargaProduk: 16000,
        gambarProduk: "https://s1.bukalapak.com/img/67897170811/s-194-194/aHR0cHM6Ly9lY3M3LnRva29wZWRpYS5uZXQvaW1nL2NhY2hlLzcwMC9wcm9k.jpg.webp"
      },
      {
        namaProduk: "aqua botol",
        hargaProduk: 10000,
        gambarProduk: "https://s3.bukalapak.com/img/3019515585/s-194-194/11827118_f04ebffa_0eb8_4a2e_bf29_1b9426c4a9b6.jpg.webp"
      },
      {
        namaProduk: "Hatari Malkist",
        hargaProduk: 20000,
        gambarProduk: "https://s0.bukalapak.com/img/52788905131/s-194-194/Hatari_Malkist_260gr.jpg.webp"
      }
    ]

    for (let i = 0; i <script listProduk.length; i++) {
      show += `<div class="col-6 col-sm-4 col-md-2 " style="padding: 20px"><center> <img src="${listProduk[i].gambarProduk}" class="rounded"><br> ${listProduk[i].namaProduk}<br><b>Rp.${listProduk[i].hargaProduk}</b> <br> <button class="btn btn-primary beliProduk" data-toggle="modal" data-target="#modalBuy" idProduk='${i}'>Beli</button> </center> </div>`
    }
    document.querySelector("#show").innerHTML = show
    $(document).ready(function () {
      $(document).on('click', '.modalClose', function () {
        $('#modalBuy').modal('hide')
        $('#trxDetail').modal('hide')
      })
      $(document).on('click', '.beliProduk', function () {
        let idProduk = $(this).attr('idProduk');
        let bodyModal = `<div class="row">
          <div class="col-md-6">
            <center><img
                src="${listProduk[idProduk].gambarProduk}">
            </center>
          </div>
          <div class="col-md-6">
            <div class="form-group"> 
              <label>Harga Produk</label>
              <input type="number" class="form-control" value="${listProduk[idProduk].hargaProduk}" disabled="" id="hargaProduk"> 
            </div>
            <div class="form-group"> 
              <label>Uang Tunai</label> 
              <input type="number" class="form-control" placeholder="Uang Tunai" id="uangTunai" value="" > 
            </div>
          </div>
        </div>`
        let modalFooter = `<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button class="btn btn-primary trxTodo" idProduk="${idProduk}">Beli</button>`

        $("#modalBuyTitle").html(listProduk[idProduk].namaProduk)
        $("#modalBuyBody").html(bodyModal)
        $("#modalBuyFooter").html(modalFooter)

      })
    })
  </script>

<div class="container">
    <div class="text-produk">
        <h2>Produk Terbaru</h2>
    </div>

    <div class="wrapper-produk">
        <?php foreach($data as $produk) : ?>
        <div class="produk">
            <a href="detail.php?id=<?= $produk["id_produk"]; ?>">
                <img src="foto/<?= $produk["foto_produk"]; ?>">
                <h2><?= $produk["nama_produk"]; ?></h2>
                <p>Rp <?= number_format($produk["harga_produk"]); ?></p>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>
