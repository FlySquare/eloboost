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

            // Ustalık Küme Seçimi Kapatma
            if(iLig==7){
                $("#iKume").val(4);
                $("#iKume").prop("disabled", true);
                $("#iResim").attr("src", "/frontend/images/lol/lig/ustalik.png");
                $('#ekstrawin').prop('checked', false);
                $('#ekstrawin').prop('disabled', true);
                
            }
            else{
                $("#iKume").prop("disabled", false);
                $('#ekstrawin').prop('disabled', false);
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
                            //alert(xhr.responseText)
                            //$("#bilgi").text(xhr.responseText);
                            $("#bilgilendirme").show();
                            $("#bilgi").text("Fiyat hesaplanırken beklenmedik bir sorun oluştu.");
                        },
                    });

                e.preventDefault(); // Default form submiti engelleme
                
            }

        });

        // İLK 10 MAÇ
        $('#ilk10mac').change(function(e){     

            // Şimdiki
            var sunucu = $("#2sunucu").val();
            var gsLig = $("#2gsLig").val();
            var tur = $("#2tur").val();
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

        // DUO BOOST
        $('#duoboost').change(function(e){     

            // Şimdiki
            var sLig = $("#sLig3").val();
            var sKume = $("#sKume3").val();
            
            // İstenilen 
            var iLig = $("#iLig3").val();
            var iKume = $("#iKume3").val();

            // İndirim
            $("#indirimsiz").hide();
            var indirim = $("#indirim").val();
            
            //Resim Değiştirme
            $("#sResim3").attr("src", "/frontend/images/lol/lig/"+sLig+"_"+sKume+ ".png");
            $("#iResim3").attr("src", "/frontend/images/lol/lig/"+iLig+"_"+iKume+".png");

            //Disable & Enable & Hide
            $("#bilgilendirme3").hide();        
            $('#sKume3').prop('disabled', false);
            $('#iKume3').prop('disabled', false);

            // Ustalık&Diamond Küme Seçimi Kapatma
            if(iLig>=6){
                $("#iKume3").val(4);
                $("#iKume3").prop("disabled", true);
                $("#iResim3").attr("src", "/frontend/images/lol/lig/6_4.png");
            }
            else{
                $("#iKume3").prop("disabled", false);
            }

            // İstenilen Lig Kontrol
            if(sLig>iLig){
                $("#bilgi3").text("İstediğiniz lig mevcut liginizden düşük olamaz."); 
                $("#bilgilendirme3").show();
                $("#siparisver3").hide();
                $("#tutar3").text("0₺");
            }
             // Küme Kontrol
            else if(sLig==iLig && sKume<=iKume){
                $("#bilgi3").text("İstediğiniz küme mevcut kümenizden düşük veya aynı olamaz."); 
                $("#bilgilendirme3").show();
                $("#siparisve3r").hide();
                $("#tutar3").text("0₺");
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
                            $("#3indirimsiz").hide();
                            $("#tutar3").text("Hesaplanıyor...");
                        },
                        success: function(data)
                        {
                            if(indirim>0){
                                var indirimsiz = (data * 100) / (100-indirim);
                                $("#3indirimsiz").show();
                                $("#3indirimsiz").text(indirimsiz.toFixed(2)+"₺");
                                $("#tutar3").text(data+"₺");
                            }
                            else{
                                $("#3indirimsiz").hide();
                                $("#tutar3").text(data+"₺");
                            }
                            $("#siparistutari3").text(data+"₺"); // Modal Sipariş Tutarı
                            var gun = ((iLig - sLig) * 3 + (sKume - iKume));
                            if(gun!=0){
                                $("#gun").text(gun);
                            }
                            else{
                                $("#gun").text("1");
                            }
                            if(data>0){
                                $("#siparisver3").show();
                            }
                            else{
                                $("#siparisver3").hide();
                            }
                        },
                        error: function(xhr) {
                            alert(xhr.responseText)
                            //$("#bilgi").text(xhr.responseText);
                            $("#bilgilendirme3").show();
                            $("#bilgi3").text("Fiyat hesaplanırken beklenmedik bir sorun oluştu.");
                        },
                    });

                e.preventDefault(); // Default form submiti engelleme
                
            }

        });

        // CHALLENGER BOOST
        $('#challengerboost').change(function(e){     

            var sunucu = $("#4sunucu").val();
            var sPuan = $("#4sPuan").val();
            var iPuan = $("#4iPuan").val();

            // İndirim
            $("#indirimsiz").hide();
            var indirim = $("#indirim").val();

            //Resim Değiştirme
            $("#sunucuResim4").attr("src", "/backend/assets/icons/flag-icon-css/flags/"+sunucu+".svg");

           // 0 ile 1000 Sınırı
           if(sPuan <= 0 || sPuan > 1000 || iPuan <= 0 || iPuan > 1000){
            $("#4siparisver").hide();
            $("#4bilgi").text("Şimdiki puan ve istediğiniz puan 1 ile 1000 arasında olmalı."); 
            $("#4bilgilendirme").show();
            }
            else{
                 // 25 Puan sınırı
                if((iPuan - sPuan) < 25){
                    $("#4siparisver").hide();
                    $("#4bilgi").text("İstediğiniz puan şimdiki puanınızdan en az 25 puan fazla olmalı."); 
                    $("#4bilgilendirme").show();
                }
                else{
                    $("#4bilgilendirme").hide();
                    var form = $(this);
                    var url = form.attr('action');

                    $.ajax({
                            type: "POST",
                            url: url,
                            data: form.serialize(), // Form elemanlarını serialize
                            beforeSend: function()
                            {
                                $("#4indirimsiz").hide();
                                $("#tutar4").text("Hesaplanıyor...");
                            },
                            success: function(data)
                            {
                                if(indirim>0){
                                    var indirimsiz = (data * 100) / (100-indirim);
                                    $("#4indirimsiz").show();
                                    $("#4indirimsiz").text(indirimsiz.toFixed(2)+"₺");
                                    $("#4tutar").text(data+"₺");
                                }
                                else{
                                    $("#4indirimsiz").hide();
                                    $("#4tutar").text(data+"₺");
                                }
                                $("#4siparistutari").text(data+"₺"); // Modal Sipariş Tutarı
                                var gun = Math.ceil((iPuan - sPuan)/75);
                                $("#4gun").text(gun);
                                if(data>0){
                                    $("#4siparisver").show();
                                }
                                else{
                                    $("#4siparisver").hide();
                                }
                            },
                            error: function(xhr) {
                                alert(xhr.responseText)
                                //$("#bilgi").text(xhr.responseText);
                                $("#bilgilendirme4").show();
                                $("#bilgi4").text("Fiyat hesaplanırken beklenmedik bir sorun oluştu.");
                            },
                        });

                    e.preventDefault(); // Default form submiti engelleme
                }
                
            }

        });

        // WIN BOOST
        $('#winboost').change(function(e){
            // Şimdiki
            var sLig = $("#5sLig").val();
            var sKume = $("#5sKume").val();
            var winSayisi = $("#5winSayisi").val();
            var sira =  $("input[name='sira']:checked").val();
            var garanti =  $("input[name='garanti']:checked").val();

            //solo duo kontrol garanti garantisiz
            if(sira=="Solo"){
                $("#5garantiler").hide();
                $("#5garanti").prop("checked", true);
            }
            else{
                $("#5garantiler").show();
            }

            //Resim Değiştirme
            var sunucu = $("#5sunucu").val();
            $("#sResim5").attr("src", "/frontend/images/lol/lig/"+sLig+"_"+sKume+ ".png");
            $("#sunucuResim5").attr("src", "/backend/assets/icons/flag-icon-css/flags/"+sunucu+".svg");

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
                                if(sira == "Duo"){ $("#5kullaniciAdi").hide(); $("#5sifre").hide(); }
                                else{ $("#5kullaniciAdi").show(); $("#5sifre").show(); }
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