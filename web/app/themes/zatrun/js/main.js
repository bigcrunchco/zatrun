var swiper = new Swiper(".fast-news", {
    slidesPerView: 1,
    spaceBetween: 30,
    freeMode: false,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 24,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 24,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 24,
        },
    },
});


var swiper = new Swiper(".headlines", {
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
            renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

//Infinite

$('.posts').infiniteScroll({
    // options
    path: '.nav-next a',
    append: '.posts .post-list',
    scrollThreshold: 600,
    history: 'replace',
    historyTitle: true
});

$('.post').infiniteScroll({
    // options
    path: function() {
        return $(".pagination a:last").attr("href")
    },
    append: '.post',
    scrollThreshold: 600,
    history: 'replace',
    historyTitle: true
});

$('.open-search').click(function () {
    // Tüm div öğelerinden 'open' sınıfını kaldır
    $('div.open').removeClass('open');
    // Overlay aç
    $('.overlay').addClass('open');
    //Search aç
    $('.mobile-search').toggleClass('open');
    $('.mobile-search input').focus();
});

$('.open-menu').click(function () {
    // Tüm div öğelerinden 'open' sınıfını kaldır
    $('div.open').removeClass('open');
    // Overlay aç
    $('.overlay').addClass('open');
    //Search aç
    $('.mobile-menu').toggleClass('open');
});

$('.close-search').click(function () {
    // Tüm div öğelerinden 'open' sınıfını kaldır
    $('div.open').removeClass('open');
});

$('.overlay').click(function () {
    // Tüm div öğelerinden 'open' sınıfını kaldır
    $('div.open').removeClass('open');
});

$('.mobile-menu .menu-item-has-children a').click(function (event) {
    event.preventDefault(); // Sayfaya gitmeyi engelle
    var subMenu = $(this).siblings('.sub-menu');
    
    // Diğer alt menüleri kapat ve tıklanan alt menüyü aç
    $('.sub-menu').not(subMenu).slideUp();
    subMenu.slideToggle();

    // Alt menü içindeki linklere gitme işlemi
    subMenu.find('a').click(function(e) {
        var link = $(this).attr('href');
        if (link && link !== '#') {
            e.preventDefault(); // Alt menü linklerine tıklanınca sayfaya gitmeyi engelle
            setTimeout(function() {
                window.location.href = link;
            }, 300); // Alt menü animasyonu için biraz gecikme ekleyebilirsiniz
        }
    });
});

$(document).ready(function () {
    // Önbellekteki veriyi kontrol et
    const cachedData = localStorage.getItem('exchangeRatesData');

    if (cachedData) {
        const parsedData = JSON.parse(cachedData);
        updateExchangeRates(parsedData);
    }

    // API'den veriyi al ve önbelleğe al
    fetchAndUpdateData();
});

// Veriyi API'den alıp önbelleğe al ve güncelle
function fetchAndUpdateData() {
    $.get('https://valf.shepera.com/api/v1/exchange-rates')
        .done(function (data) {
            const cachedData = localStorage.getItem('exchangeRatesData');
            const parsedCachedData = cachedData ? JSON.parse(cachedData) : null;

            // Eğer önbellekteki veri yoksa veya değişiklik varsa
            if (!parsedCachedData || !isEqual(parsedCachedData, data)) {
                // Alınan veriyi önbelleğe al
                localStorage.setItem('exchangeRatesData', JSON.stringify(data));
                // Veriyi güncelle
                updateExchangeRates(data);
            }

            // Belirli bir süre sonra tekrar kontrol etmek için zamanlayıcı kullanabilirsiniz
            setTimeout(fetchAndUpdateData, 60000); // Örnekte her 1 dakikada bir kontrol ediliyor
        })
        .fail(function (error) {
            console.error('Error fetching exchange rates:', error);
        });
}

// İki nesnenin derinlemesine karşılaştırılması
function isEqual(obj1, obj2) {
    return JSON.stringify(obj1) === JSON.stringify(obj2);
}

// Ticker'ları güncelleme fonksiyonu
function updateExchangeRates(data) {
    // Veriyi döngüye al
    $.each(data.data, function (index, rate) {
        // Öğeleri güncelle
        updateTicker(rate.symbol, rate.value, '%' + rate.change_percentage);
    });
}

// Ticker'ı güncelleme fonksiyonu
function updateTicker(symbol, value, change) {
    const tickerElement = $(`.price[data-symbol="${symbol}"]`);

    if (tickerElement.length > 0) {
        // Alış fiyatını güncelle
        $('.price .loading').hide();
        tickerElement.find('.value').text(value);
        tickerElement.find('.change').text(change);
        // Diğer değerleri de güncellemek istiyorsanız, burada güncelleme işlemlerini yapabilirsiniz.
    }
}