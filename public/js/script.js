
    var burger = document.querySelector('.burger');
    var nav = document.querySelector('#'+burger.dataset.target);
    burger.addEventListener('click', function() {
        burger.classList.toggle('is-active');
        nav.classList.toggle('is-active');
    });

$('.withslick').slick({
    
    slidesToShow: 6,
    infinite: true,
    prevArrow: '<a class="slick-prev button slick-btn is-hidden-mobile"><span class="icon is-small"><i class="fas fa-caret-left fa-2x"></i></span></a>',
    nextArrow: '<a class="slick-next button slick-btn is-hidden-mobile"><span class="icon is-small"><i class="fas fa-caret-right fa-2x"></i></span></a>',
});

$("#btnnewrelease").click(function(){
    showAllNewRelease();
})


function showAllNewRelease(){
    $('#newreleaseall').html('loading...');
    $.ajax({
        url: '/newrelease',
        data: {},
        success: function(data){
            $('#newreleaseall').html(data);
            $('#newreleaseslide').hide();
            $("#btnnewrelease").hide();
        },
        error: function(xhr){
            $('#newreleaseall').html('error!');
        }
    });
}

function showPayModal(id)
{
    $("#pay-modal"+id).addClass('is-active');
}

function hidePayModal(id)
{
    $("#pay-modal"+id).removeClass('is-active');
}

function showDetailBookModal(id)
{
    $("#detail-modal"+id).addClass('is-active');
}

function hideDetailBookModal(id)
{
    $("#detail-modal"+id).removeClass('is-active');
}
