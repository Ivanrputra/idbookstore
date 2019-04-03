
    var burger = document.querySelector('.burger');
    var nav = document.querySelector('#'+burger.dataset.target);
    burger.addEventListener('click', function() {
        burger.classList.toggle('is-active');
        nav.classList.toggle('is-active');
    });

const sliders = {
    1: {slider: '#slick-1', loading: '#load-slick-1'},
    2: {slider: '#slick-2', loading: '#load-slick-2'},
    3: {slider: '#slick-3', loading: '#load-slick-3'}
}



$.each(sliders, function() {
    
    $(this.slider).slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 6,
        responsive: [
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
            }
            
        ]
    });

    $(this.slider).delay(1000).css("visibility","visible");
    $(this.loading).hide();
})



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
