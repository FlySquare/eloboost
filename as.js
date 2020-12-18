
var app = new Vue({
  el: "#boost_form",
  data: {
    selectDivClass: "input-group form-group",
    selectClass: "custom-select",
    lcurrent_rank: 2,
    lcurrent_stage: 4,
    ltarget_rank: 2,
    ltarget_stage: 3,
    match_lp: 1,
    server: 1,
    duo_boost: 1,
    pre_discount_boost_order: 0,
    after_discount_boost_order: 0,
    ranked_type: 1,
    priceList: { 1: 30, 2: 35, 3: 40, 4: 45, 5: 65, 6: 150 ,7: 580 },
  },
  methods: {
    calcOrder() {
      var price = 0;
      const priceList = this.priceList;
      if (this.lcurrent_rank !== this.ltarget_rank) {
        // var totalStages = ((this.ltarget_rank - this.lcurrent_rank - 1) * 4) +
        //     (this.lcurrent_stage - 1) +
        for (let current = this.lcurrent_rank; current < this.ltarget_rank + 1; current++) {
          if (current === this.lcurrent_rank) {
            var stages = this.lcurrent_stage - 1 === 0 ? false : this.lcurrent_stage - 1;
            if (stages) {
              price += stages * priceList[current];
            }
          } else if (current === this.ltarget_rank) {
            var stages = 4 - this.ltarget_stage === 0 ? false : 4 - this.ltarget_stage;
            if (stages) {
              price += (stages + 1) * priceList[current];
            } else {
              price += priceList[current]; // if just ranked up and stayed there in the 4th stage
            }
          } else {
            price += priceList[current] * 3;
          }
        }
      } else {
        var stages = this.lcurrent_stage - this.ltarget_stage;
        price = stages * this.priceList[this.lcurrent_rank];
      }
      this.pre_discount_boost_order = (price * this.match_lp * this.server * this.duo_boost).toFixed(0);
      if (this.pre_discount_boost_order <= 0) {
        this.after_discount_boost_order = "Hata. Hedef lig mevcut liginizin Ã¼zerinde olmalÄ±dÄ±r!";
        this.pre_discount_boost_order = null;
      } else {
        this.after_discount_boost_order = (this.pre_discount_boost_order * 0.7).toFixed(0);

      }

        document.getElementById("sonfiyat").value = this.after_discount_boost_order;
        document.getElementById("mevcutlig").value = this.lcurrent_rank;
        document.getElementById("mevcutasama").value = this.lcurrent_stage;
        document.getElementById("hedeflig").value = this.ltarget_rank;
        document.getElementById("hedefasama").value = this.ltarget_stage;
        document.getElementById("macbasilp").value = this.match_lp;
        document.getElementById("sunucu").value = this.server;

        document.getElementById("derecelituru").value = this.ranked_type;




    },
    buyBoost() {},
  },
  computed: {
    leagueSum() {
      return this.lcurrent_rank + this.ltarget_rank + this.ltarget_stage + this.lcurrent_stage + this.match_lp + this.server + this.duo_boost;
    },
    checkForm() {
      // if (ltarget_rank === lcurrent_rank )
      return true;
    },
    filledIn() {
      if (this.customerPassword != "" && this.customerUsername != "") {
        return false;
      } else {
        return true;
      }
    },
  },
  watch: {
    leagueSum() {
      this.calcOrder();
      // this.checkForm();
    },
  },
  mounted() {
    this.calcOrder();
  },
});
