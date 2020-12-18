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
            $("#sResim").attr("src", "/frontend/images/valorant/lig/"+sLig+"_"+sKume+ ".png");
            $("#iResim").attr("src", "/frontend/images/valorant/lig/"+iLig+"_"+iKume+".png");

            //Disable & Enable & Hide
            $("#bilgilendirme").hide();        
            $('#sKume').prop('disabled', false);
            $('#iKume').prop('disabled', false);

            // Işıldayan Küme Seçimi Kapatma
            if(iLig==8){
                $("#iKume").val(1);
                $("#iKume").prop("disabled", true);
                $("#iResim").attr("src", "/frontend/images/valorant/lig/8_1.png");
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
            else if(sLig==iLig && sKume>=iKume){
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
                            if(iLig>=6){carpim = 3;}else{carpim=2;}
                            var gun = ((iLig - sLig) * carpim + (iKume - sKume));
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
            var tur = $("#2tur").val();
            var macSayisi = $("#2macSayisi").val();

            // Hide
            $("#2bilgilendirme").hide(); 

            // İndirim
            $("#indirimsiz").hide();
            var indirim = $("#indirim").val();

            //Resim Değiştirme
            $("#sunucuResim").attr("src", "/backend/assets/icons/flag-icon-css/flags/"+sunucu+".svg");
            $("#gsResim").attr("src", "/frontend/images/valorant/lig/"+gsLig+"_3.png");

            if(macSayisi < 1 || macSayisi > 5){
                $("#2bilgi").text("Lütfen maç sayısını seçiniz."); 
                $("#2bilgilendirme").show();
                $("#2siparisver").hide();
                $("#2indirimsiz").hide();
                $("#2gun").text("0");
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
            $("#sResim3").attr("src", "/frontend/images/valorant/lig/"+sLig+"_"+sKume+ ".png");
            $("#iResim3").attr("src", "/frontend/images/valorant/lig/"+iLig+"_"+iKume+".png");

            //Disable & Enable & Hide
            $("#bilgilendirme3").hide();        
            $('#sKume3').prop('disabled', false);
            $('#iKume3').prop('disabled', false);

            // Işıldayan Küme Seçimi Kapatma
            if(iLig==8){
                $("#iKume3").val(1);
                $("#iKume3").prop("disabled", true);
                $("#iResim3").attr("src", "/frontend/images/valorant/lig/8_1.png");
                
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
            else if(sLig==iLig && sKume>=iKume){
                $("#bilgi3").text("İstediğiniz küme mevcut kümenizden düşük veya aynı olamaz."); 
                $("#bilgilendirme3").show();
                $("#siparisver3").hide();
                $("#tutar3").text("0₺");
                $("#3indirimsiz").hide();
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
                            if(iLig>=6){carpim = 4;}else{carpim=3;}
                            var gun = ((iLig - sLig) * carpim + (iKume - sKume));
                            if(gun!=0){
                                $("#gun3").text(gun);
                            }
                            else{
                                $("#gun3").text("1");
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


        // NORMAL MAÇ
        $('#normalmac').change(function(e){     

            // Şimdiki
            var sunucu = $("#6sunucu").val();
            var mevcutLig = $("#6mevcutLig").val();
            var macSayisi = $("#6macSayisi").val();

            // Hide
            $("#2bilgilendirme").hide(); 

            // İndirim
            $("#indirimsiz").hide();
            var indirim = $("#indirim").val();

            //Resim Değiştirme
            $("#6sunucuResim").attr("src", "/backend/assets/icons/flag-icon-css/flags/"+sunucu+".svg");
            $("#6gsResim").attr("src", "/frontend/images/valorant/lig/"+mevcutLig+"_3.png");

            if(macSayisi < 1 || macSayisi > 20){
                $("#6bilgi").text("Lütfen maç sayısını seçiniz."); 
                $("#6bilgilendirme").show();
                $("#6siparisver").hide();
                $("#6tutar").text("0₺");
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
                        $("#6indirimsiz").hide();
                        $("#6tutar").text("Hesaplanıyor...");
                    },
                    success: function(data)
                    {
                        if(indirim>0){
                            var indirimsiz = (data * 100) / (100-indirim);
                            $("#6indirimsiz").show();
                            $("#6indirimsiz").text(indirimsiz.toFixed(2)+"₺");
                            $("#6tutar").text(data+"₺");
                        }
                        else{
                            $("#6indirimsiz").hide();
                            $("#6tutar").text(data+"₺");
                        }
                        $("#6siparistutari").text(data+"₺"); // Modal Sipariş Tutarı
                        var gun = 1;
                        $("#6gun").text(gun);
                        if(data>0){
                            $("#6siparisver").show();
                            $("#6bilgilendirme").hide();
                        }
                        else{
                            $("#6siparisver").hide();
                            $("#6bilgilendirme").show();
                            $("#6bilgi").text("Fiyat hesaplanırken beklenmedik bir sorun oluştu.");
                        }
                    },
                    error: function(xhr) {
                        alert(xhr.responseText)
                        //$("#bilgi").text(xhr.responseText);
                        $("#6bilgilendirme").show();
                        $("#6bilgi").text("Fiyat hesaplanırken beklenmedik bir sorun oluştu.");
                    },
                });

            e.preventDefault(); // Default form submiti engelleme
            }

        });