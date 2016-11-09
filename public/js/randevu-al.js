/**
 * Created by mehmet on 9.11.2016.
 */

$(function () {
    $("#personel_sec_buton").click(function () {
        var id = $(this).attr("data-id");
        console.log($("input[name=tarih]").val());
    });
})