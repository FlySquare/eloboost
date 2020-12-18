
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <!-- AdSense -->
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Elo Boost LoL - Ucuz, Güvenli, Hızlı | ULUBOOST</title>
    <meta
      content="Türkiye'nin en güvenilir, en hızlı, en ekonomik LoL - League of Legends elo boost hizmeti veren firması ULUBOOST'un hizmetlerinden yararlan!"
      name="descriptison"
    />
    <meta content="elo boost, uluboost, lol elo boost, rank boost, lig çıkarma" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="https://uluboost.com/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://uluboost.com/assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="https://uluboost.com/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://uluboost.com/assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="https://uluboost.com/assets/vendor/venobox/venobox.css" rel="stylesheet" />
    <link href="https://uluboost.com/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://uluboost.com/assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="https://uluboost.com/assets/vendor/remixicon/remixicon.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="https://uluboost.com/assets/css/style.css" rel="stylesheet" />
  </head>
  <body style="background-color: #f7f7f7">
    <!-- ======= Header ======= -->

    <!-- End Header -->
    <main id="main">
      <!-- ======= Breadcrumbs ======= -->


      <div class="eloboost">
        <div class="container-fluid" style="padding: 3% 5%" data-aos="fade-up">
          <form id="boost_form" @submit="buyBoost">
            <div :class="selectDivClass">
              <div class="input-group-prepend">
                <label class="input-group-text" for="lcurrent_rank">Mevcut Liginiz</label>
              </div>
              <select :class="selectClass" class="eloboost-form" name="lcurrent_rank" id="lcurrent_rank" v-model="lcurrent_rank" required>
                <option disabled value="0">Lig Seçiniz</option>
                <option v-bind:value="1">Demir</option>
                <option v-bind:value="2">Bronz</option>
                <option v-bind:value="3">Gümüş</option>
                <option v-bind:value="4">Altın</option>
                <option v-bind:value="5">Platin</option>
                <option v-bind:value="6">Elmas</option>
              </select>
            </div>
            <div :class="selectDivClass">
              <div class="input-group-prepend">
                <label class="input-group-text" for="lcurrent_rank">Mevcut Aşamanız</label>
              </div>
              <select :class="selectClass" class="eloboost-form" name="lcurrent_stage" id="lcurrent_stage" v-model="lcurrent_stage" required>
                <option disabled value="0">Aşama Seçiniz</option>
                <option v-bind:value="4">4</option>
                <option v-bind:value="3">3</option>
                <option v-bind:value="2">2</option>
                <option v-bind:value="1">1</option>
              </select>
            </div>

            <div :class="selectDivClass">
              <div class="input-group-prepend">
                <label class="input-group-text" for="lcurrent_rank">Hedef Liginiz</label>
              </div>
              <select :class="selectClass" class="eloboost-form" name="ltarget_rank" id="ltarget_rank" v-model="ltarget_rank" required>
                <option disabled value="0">Lig Seçiniz</option>
                <option v-bind:value="1">Demir</option>
                <option v-bind:value="2">Bronz</option>
                <option v-bind:value="3">Gümüş</option>
                <option v-bind:value="4">Altın</option>
                <option v-bind:value="5">Platin</option>
                <option v-bind:value="6">Elmas</option>
                <option v-bind:value="7">Ustalık</option>

              </select>
            </div>
            <div :class="selectDivClass">
              <div class="input-group-prepend">
                <label class="input-group-text" for="lcurrent_rank">Hedef Aşamanız</label>
              </div>
              <select :class="selectClass" class="eloboost-form" name="ltarget_stage" id="ltarget_stage" v-model="ltarget_stage" required>
                <option disabled value="0">Aşama Seçiniz</option>
                <option v-bind:value="4">4</option>
                <option v-bind:value="3">3</option>
                <option v-bind:value="2">2</option>
                <option v-bind:value="1">1</option>
              </select>
            </div>

            <div :class="selectDivClass">
              <div class="input-group-prepend">
                <label class="input-group-text" for="lcurrent_rank">Maç Başı LP</label>
              </div>
              <select :class="selectClass" class="eloboost-form" name="match_lp" id="match_lp" v-model="match_lp" required>
                <option disabled value="0">Seçiniz</option>
                <option v-bind:value="1.3">0-15 (+%30 Ücret)</option>
                <option v-bind:value="1.2">15-16 (+%20 Ücret)</option>
                <option v-bind:value="1.1">17-19 (+%10 Ücret)</option>
                <option v-bind:value="1">20+</option>
              </select>
            </div>

            <div :class="selectDivClass">
              <div class="input-group-prepend">
                <label class="input-group-text" for="lcurrent_rank">Sunucu</label>
              </div>
              <select :class="selectClass" class="eloboost-form" name="server" id="server" v-model="server" required>
                <option disabled value="0">Seçiniz</option>
                <option v-bind:value="1">TR</option>
                <option v-bind:value="1.5">EUW (+%50 Ücret)</option>
              </select>
            </div>

            <div :class="selectDivClass">
              <div class="input-group-prepend">
                <label class="input-group-text" for="lcurrent_rank">Duo Boost</label>
              </div>
              <select :class="selectClass" class="eloboost-form" name="duo_boost" id="duo_boost" v-model="duo_boost" required>
                <option disabled value="0">Seçiniz</option>
                <option v-bind:value="1">İstemiyorum</option>
                <option v-bind:value="1.5">İstiyorum (+%50 Ücret)</option>
              </select>
            </div>

            <div :class="selectDivClass">
              <div class="input-group-prepend">
                <label class="input-group-text" for="lcurrent_rank">Dereceli Türü</label>
              </div>
              <select :class="selectClass" class="eloboost-form" name="ranked_type" id="ranked_type" v-model="ranked_type" required>
                <option disabled value="0">Seçiniz</option>
                <option v-bind:value="1">Tek-Çift</option>
                <option v-bind:value="2">Esnek</option>
              </select>
            </div>

            <div class="d-flex justify-content-center">
              <h4 id="boost_order">
                Ücret: <span style="text-decoration: line-through">₺{{pre_discount_boost_order}}</span>
                <span style="color: #1bbd36">₺{{after_discount_boost_order}}</span>
              </h4>
            </div>
            <div class="d-flex justify-content-center">
              <button
                type="submit"
                class="btn btn-primary"
                v-bind:disabled="filledIn"
                style="background-color: #1bbd36; border-color: #1bbd36; min-width: 300px"
              >
                <i class="bx bx-right-arrow-alt"></i>
                <a href="payments.html" style="color: white">Ödeme Yöntemlerine Git</a>
              </button>
            </div>
          </form>
        </div>

      </div>
      <!-- Feedbacks Slider -->
      <!-- title -->

      <!-- review -->

    </main>
    <!-- ======= Footer ======= -->

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- <script src="http://157.230.100.123:2319/static/uluboost/eloboost_picker.js"></script> -->
    <script src="as.js"></script>

    <!-- Template Main JS File -->
    <script src="https://uluboost.com/dist/js/main.js"></script>
    <!--Start of Tawk.to Script-->

    <!--End of Tawk.to Script-->
  </body>
</html>
