/**
 * Created by Alex on 12.08.2016.
 */
"use strict";
$( document ).ready(function() {

    ///////////////////////////
    // otomatik şehir seç,



    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Home page
    // Updates from Subscriptions Hover
    $(".avatars .col-lg-1").hover( function() {
            $(this).find(".note").show();
        }, function(){
            $(this).find(".note").hide();
        }
    );

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Home page
    // Popular Channels Hover
    $(".b-chanel").hover( function() {
            $(this).find(".hover").show();
        }, function(){
            $(this).find(".hover").hide();
        }
    );


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Home page
    // Video block hover
    var $plus = $( '<div class="plus"><i class="cvicon-cv-plus" aria-hidden="true"></i></div>' );
    var $plusDetails = $( '<div class="plus-details">\
                                        <ul >\
                                            <li><a href="#"><i class="cvicon-cv-watch-later" aria-hidden="true"></i> Watch Later</a></li>\
                                            <li><a href="#"><i class="cvicon-cv-playlist" aria-hidden="true"></i> Add to Playlist</a></li>\
                                        </ul>\
                                    </div>' );

    $(".videolist .v-img").hover( function() {
            $(this).append($plus);
            $(".plus").hover( function() {
                    console.log("Plus hover");
                    $(this).parent().append($plusDetails);
                } , function(){

                }
            );

        } , function(){
            $(this).find(".plus").remove();
            $(this).find(".plus-details").remove();
        }
    );


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Header
    // Goto section
    $('[data-toggle="tooltip"]').tooltip();


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Header
    // Dropdown for "Pages" element on hover instead click.
    $('.pages').hover(function(){
        //$('.dropdown-toggle', this).trigger('click');
		//$('.dropdown-toggle', this).show();
	});


	$('.pages').hover(function() { $(this).addClass('open'); }, function() { $(this).removeClass('open'); });



    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Video Edit page
    // add color to checked checkboxes
    $('.edit-page input:checked').parent().css( "color", "#ea2c5a" );
    $('.edit-page input[type=checkbox]').on("click", function () {
       if ($(this).is(':checked')) {
        $(this).parent().css( "color", "#ea2c5a" );
       } else {
           $(this).parent().css( "color", "black" );
       }
    });

});