/* STRAWZ */

        // ELOBOOST
        $('#eloboost').change(function(e){     

            // Şimdiki
            var sLig = $("#sLig").val();
            var sKume = $("#sKume").val();
            
            // İstenilen 
            var iLig = $("#iLig").val();
            var iKume = $("#iKume").val();
            
            // İndirim
            $("#indirimsiz").hide();
            var indirim = $("#indirim").val();
            
            //Resim Değiştirme
            $("#sResim").attr("src", "/frontend/images/lol/lig/"+sLig+"_"+sKume+ ".png");
            $("#iResim").attr("src", "/frontend/images/lol/lig/"+iLig+"_"+iKume+".png");

            //Disable & Enable & Hide
            $("#bilgilendirme").hide();        
            $('#sKume').prop('disabled', false);
            $('#iKume').prop('disabled', false);

            // Ustalık Üstü Küme Seçimi Kapatma
            if(iLig>=7){
                $("#iKume").val(4);
                $("#iKume").prop("disabled", true);
                $("#iResim").attr("src", "/frontend/images/lol/lig/"+iLig+"_1.png");
            }
            else{
                $("#iKume").prop("disabled", false);
            }
            if(sLig>=7){
                $("#sKume").val(4);
                $("#sKume").prop("disabled", true);
                $("#sPuan").val(1);
                $("#sPuan").prop("disabled", true);
                $("#sResim").attr("src", "/frontend/images/lol/lig/"+sLig+"_1.png");
            }
            else{
                $("#sKume").prop("disabled", false);
                $("#sPuan").prop("disabled", false);
            }

            // İstenilen Lig Kontrol
            if(sLig>iLig){
                $("#bilgi").text("İstediğiniz lig mevcut liginizden düşük olamaz."); 
                $("#bilgilendirme").show();
                $("#siparisver").hide();
                $("#tutar").text("0₺");
            }
             // Küme Kontrol
            else if(sLig==iLig && sKume<=iKume){
                $("#bilgi").text("İstediğiniz küme mevcut kümenizden düşük veya aynı olamaz."); 
                $("#bilgilendirme").show();
                $("#siparisver").hide();
                $("#tutar").text("0₺");
            }
            else{
                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                        type: "POST",
                        url: url,
                        data: form.serialize(), // Form elemanlarını serialize
                        beforeSend: function()
                        {
                            $("#indirimsiz").hide();
                            $("#tutar").text("Hesaplanıyor...");
                        },
                        success: function(data)
                        {
                            if(indirim>0){
                                var indirimsiz = (data * 100) / (100-indirim);
                                $("#indirimsiz").show();
                                $("#indirimsiz").text(indirimsiz.toFixed(2)+"₺");
                                $("#tutar").text(data+"₺");
                            }
                            else{
                                $("#indirimsiz").hide();
                                $("#tutar").text(data+"₺");
                            }
                            $("#siparistutari").text(data+"₺"); // Modal Sipariş Tutarı
                            var gun = ((iLig - sLig) * 3 + (sKume - iKume));
                            if(gun!=0){
                                $("#gun").text(gun);
                            }
                            else{
                                $("#gun").text("1");
                            }
                            
                            if(data>0){
                                $("#siparisver").show();
                            }
                            else{
                                $("#siparisver").hide();
                            }
                        },
                        error: function(xhr) {
                            alert(xhr.responseText)
                            //$("#bilgi").text(xhr.responseText);
                            $("#bilgilendirme").show();
                            $("#bilgi").text("Fiyat hesaplanırken beklenmedik bir sorun oluştu.");
                        },
                    });

                e.preventDefault(); // Default form submiti engelleme
                
            }

        });

        // İLK 5 MAÇ
        $('#ilk5mac').change(function(e){     

            // Şimdiki
            var sunucu = $("#2sunucu").val();
            var gsLig = $("#2gsLig").val();
            var macSayisi = $("#2macSayisi").val();

            // Hide
            $("#2bilgilendirme").hide(); 

            // İndirim
            $("#indirimsiz").hide();
            var indirim = $("#indirim").val();

            //Resim Değiştirme
            $("#sunucuResim").attr("src", "/backend/assets/icons/flag-icon-css/flags/"+sunucu+".svg");
            $("#gsResim").attr("src", "/frontend/images/lol/lig/"+gsLig+"_1.png");

            if(macSayisi < 1 || macSayisi > 10){
                $("#2bilgi").text("Lütfen maç sayısını seçiniz."); 
                $("#2bilgilendirme").show();
                $("#2siparisver").hide();
                $("#2tutar").text("0₺");
            }
            else{
                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(), // Form elemanlarını serialize
                    beforeSend: function()
                    {
                        $("#2indirimsiz").hide();
                        $("#2tutar").text("Hesaplanıyor...");
                    },
                    success: function(data)
                    {
                        if(indirim>0){
                            var indirimsiz = (data * 100) / (100-indirim);
                            $("#2indirimsiz").show();
                            $("#2indirimsiz").text(indirimsiz.toFixed(2)+"₺");
                            $("#2tutar").text(data+"₺");
                        }
                        else{
                            $("#2indirimsiz").hide();
                            $("#2tutar").text(data+"₺");
                        }
                        $("#2siparistutari").text(data+"₺"); // Modal Sipariş Tutarı
                        var gun = 1;
                        $("#2gun").text(gun);
                        if(data>0){
                            $("#2siparisver").show();
                            $("#2bilgilendirme").hide();
                        }
                        else{
                            $("#2siparisver").hide();
                            $("#2bilgilendirme").show();
                            $("#2bilgi").text("Fiyat hesaplanırken beklenmedik bir sorun oluştu.");
                        }
                    },
                    error: function(xhr) {
                        //alert(xhr.responseText)
                        //$("#bilgi").text(xhr.responseText);
                        $("#2bilgilendirme").show();
                        $("#2bilgi").text("Fiyat hesaplanırken beklenmedik bir sorun oluştu.");
                    },
                });

            e.preventDefault(); // Default form submiti engelleme
            }

        });

        // WIN BOOST
        $('#winboost').change(function(e){
            // Şimdiki
            var sLig = $("#5sLig").val();
            var sKume = $("#5sKume").val();
            var winSayisi = $("#5winSayisi").val();

            //Resim Değiştirme
            var sunucu = $("#5sunucu").val();
            $("#sResim5").attr("src", "/frontend/images/lol/lig/"+sLig+"_"+sKume+ ".png");
            $("#sunucuResim5").attr("src", "/backend/assets/icons/flag-icon-css/flags/"+sunucu+".svg");

            // Ustalık Üstü Küme Seçimi Kapatma
            if(sLig>=7){
                $("#5sKume").val(4);
                $("#5sKume").prop("disabled", true);
                $("#sResim5").attr("src", "/frontend/images/lol/lig/"+sLig+"_1.png");
            }
            else{
                $("#5sKume").prop("disabled", false);
            }

            // İndirim
            $("#indirimsiz").hide();
            var indirim = $("#indirim").val();

            if(winSayisi < 1 || winSayisi > 10){
                $("#5bilgi").text("Lütfen win sayısını seçiniz."); 
                $("#5bilgilendirme").show();
                $("#5siparisver").hide();
                $("#5tutar").text("0₺");
            }
            else{
                $("#5bilgilendirme").hide();
                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                        type: "POST",
                        url: url,
                        data: form.serialize(), // Form elemanlarını serialize
                        beforeSend: function()
                        {
                            $("#5indirimsiz").hide();
                            $("#5tutar").text("Hesaplanıyor...");
                        },
                        success: function(data)
                        {
                            if(indirim>0){
                                var indirimsiz = (data * 100) / (100-indirim);
                                $("#5indirimsiz").show();
                                $("#5indirimsiz").text(indirimsiz.toFixed(2)+"₺");
                                $("#5tutar").text(data+"₺");
                            }
                            else{
                                $("#5indirimsiz").hide();
                                $("#5tutar").text(data+"₺");
                            }
                            $("#5siparistutari").text(data+"₺"); // Modal Sipariş Tutarı
                            var gun = 1
                            if(winSayisi<6) { gun=1; }else{ gun=2; }
                            $("#5gun").text(gun);
                            if(data>0){
                                $("#5siparisver").show();
                            }
                            else{
                                $("#5siparisver").hide();
                            }
                        },
                        error: function(xhr) {
                            alert(xhr.responseText)
                            //$("#bilgi").text(xhr.responseText);
                            $("#5bilgilendirme").show();
                            $("#5bilgi").text("Fiyat hesaplanırken beklenmedik bir sorun oluştu.");
                        },
                    });

                e.preventDefault(); // Default form submiti engelleme
            }


        });