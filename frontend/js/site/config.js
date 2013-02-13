// Настройки шаблона Underscore
var Site = Site || {};
Site.baseURL = '/';
Site.domainName = '';

_.templateSettings = {
    interpolate : /\{\{(.+?)\}\}/g
};

// Функция проигрывания музыки
function playMusic(url) {
    var audio = '#mainPlayer';
    if (typeof player !== 'object') {
        player = new MediaElementPlayer(audio, {
            audioHeight: 35,
            enableAutosize: true,
            startVolume: 1,
            flashName: '../../flash/flashmediaelement.swf',
            success: function (media) {
                media.pause();
                media.setSrc(url);
                media.load();
                media.play();
                media.addEventListener('play', function() {
                    $('.img-circle').addClass('rotator');
                }, false);
                media.addEventListener('pause', function() {
                    $('.img-circle').removeClass('rotator');
                }, false);
            }
        });
    } else {
        player.pause();
        player.setSrc(url);
        player.load();
        player.play();
    }
}