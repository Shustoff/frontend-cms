$(function(){

    // Настройки шаблонизатора
    _.templateSettings = {
        interpolate: /\{\{(.+?)\}\}/g
    };

    // Шаблонизатор
    var template = {
        topRender: (function() {
            var topTemplate = $('.top').html();
            var template = _.template(topTemplate);
            $('.top').html(template({
                    sitename: sitename,
                    ipadress: ipadress,
                    email: email
            }));
        })()
    };

    // Ajax-транспорт
    req = {
        index: function() {$(".main").load("/frontend/admin/home");},

        options: function() {
            $(".main").load("/frontend/admin/options");
            checkOptions();
        },

        pages: function() {$(".main").load("/frontend/admin/pages");},

        addpage: function() {$(".main").load("/frontend/admin/pages/addpage");},

        catalogs: function() {$(".main").load("/frontend/admin/catalogs");},

        addcatalog: function() {$(".main").load("/frontend/admin/catalogs/addcatalog");},

        users: function() {$(".main").load("/frontend/admin/users");},

        adduser: function() {$(".main").load("/frontend/admin/users/adduser");},

        modules: function() {$(".main").load("/frontend/admin/modules");},

        sendemail: function() {$(".main").load("/frontend/admin/email");},

        stats: function() {$(".main").load("/frontend/admin/stats")},

        addrss: function() {$(".main").load("/frontend/admin/rss");},

        info: function() {$(".main").load("/frontend/admin/info");},

        trash: function() {$(".main").load("/frontend/admin/trash");},

        saveoptions: function() {
            $.post("/frontend/admin/options/save", $("#saveoptions").serialize(), function() {
                $('.btn-success').attr('disabled', 'disabled').val('Настройки сохранены');
                $('.sitename').text($('#sitename').val());
            });
        },

        on: function(that) {
            var name = $(that).parent();
            $.post("/frontend/admin/pages/on", $(name).serialize(), function(){
                $(that).replaceWith("<a href='#' onclick='req.off(this);'><img src='assets/img/published.png'>");
            });
        },

        off: function(that) {
            var name = $(that).parent();
            $.post("/frontend/admin/pages/off", $(name).serialize(), function(){
                $(that).replaceWith("<a href='#' onclick='req.on(this);'><img src='assets/img/not-published.png'>");
            });
        }
    };

    // Проверка измененных полей в настройках
    function checkOptions() {

        function rem() {
            $('.btn-success').removeAttr('disabled').val('Сохранить настройки сайта');
        }

        $('input[type=text], textarea').live('keydown', rem);
        $('input[type=radio], select').live('change', rem);
    }
});