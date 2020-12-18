/* STRAWZ */

$(".siparisver").on('click', function() {
    var id = $(this).data('paket');
    var tutar = $(this).data('tutar');
    $('#paket').attr('value', id);
    $('#siparistutar').text(tutar+"₺");
});