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

    });
});