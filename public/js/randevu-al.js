/**
 * Created by mehmet on 9.11.2016.
 */

$(function () {
    function loadDiv(durum){
        if(durum==1){
            $("#contentLoad").waitMe({
                effect: "rotation",
                text: "yükleniyor",
                bg: 'rgba(255,255,255,0.7)',
                color: '#de2154',
                onClose: function() {}
            });
        }else{
            $("#contentLoad").waitMe("hide");
        }
    }
    $("#randeveAraButon").click(function () {
        loadDiv(1);
        $.ajax({
            url: "/randevu-ara/listele",
            type: "post",
            data: "tarih="+$("input[name=tarih]").val()+"&personel_id="+$("input[name=personel_id]").val()+"&_token="+$('#token').val() ,
            success: function (response) {
                loadDiv(0);
                $(".randevu-liste-sonuc ").html(response);

                $(".rnd-al-saat").click(function () {

                    var saat = $(this).data("id");
                    $("#secilenRandevuKaydet").click(function () {
                        $.ajax({
                            url: "/randevu-ara/al",
                            type: "post",
                            data: "tarih="+$("input[name=tarih]").val()+"&k_id="+$("input[name=kuafor_id]").val()+"&personel_id="+$("input[name=personel_id]").val()+"&_token="+$('#token').val()+"&saat="+saat ,
                            success: function (response) {
                                console.log(response);
                                loadDiv(0);
                                $("#randevuSonuc").html(response);


                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                console.log(textStatus, errorThrown);
                                loadDiv(0);
                            }


                        });
                    });

                });



            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                loadDiv(0);
            }


        });

    });




});