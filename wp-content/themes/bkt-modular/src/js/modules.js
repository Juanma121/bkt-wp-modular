jQuery(function($) {
    $('.mod-video').each(function() {
        var module = $(this);
        var video_wrapper = module.find('.video-wrapper');
        var bg_image = module.find('.bg-image');
        var play_icon = module.find('.play-icon');

        if (video_wrapper.hasClass('video-wrapper-iframe')) {
            var video_player = module.find('iframe');
            video_wrapper.on('click', function (e){
                bg_image.remove();
                play_icon.remove();
                //as noted in addendum, check for querystring exitence
                var symbol = video_player[0].src.indexOf("?") > -1 ? "&" : "?";
                //modify source to autoplay and start video
                video_player[0].src += symbol + "autoplay=1";
            });
        } else {
            var video_player = module.find('.video-player');
            video_wrapper.on('click', function (e){
                bg_image.remove();
                play_icon.remove();
                video_player.get(0).play();
            });
        }

    });
});
