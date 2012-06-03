$(function(){

    // Настройки шаблонизатора
    _.templateSettings = {
        interpolate: /\{\{(.+?)\}\}/g
    };

    // Шаблонизатор
    var template = {
        topRender: function() {
            var topTemplate = $('.top').html();
            var template = _.template(topTemplate);
            $('.top').html(template({
                    sitename: "Просто сайт",
                    ipadress: ipadress,
                    email: email
            }));
        }
    };
    // Рендерим верхнюю строчку
    template.topRender();

    // Ajax-транспорт
    Ajax = {
        index: function() {
            $(".main").load("/frontend/admin/home");
        },

        options: function() {
            $(".main").load("/frontend/admin/options");
        },

        pages: function() {
            $(".main").load("/frontend/admin/pages");
        },

        addpage: function() {
            $(".main").load("/frontend/admin/pages/addpage");
        },

        catalogs: function() {
            $(".main").load("/frontend/admin/catalogs");
        },

        addcatalog: function() {
            $(".main").load("/frontend/admin/catalogs/addcatalog");
        },

        users: function() {
            $(".main").load("/frontend/admin/users");
        },

        adduser: function() {
            $(".main").load("/frontend/admin/users/adduser");
        },

        modules: function() {
            $(".main").load("/frontend/admin/modules");
        },

        sendemail: function() {
            $(".main").load("/frontend/admin/email");
        },

        stats: function() {
            $(".main").load("/frontend/admin/stats");
        },

        addrss: function() {
            $(".main").load("/frontend/admin/rss");
        },

        info: function() {
            $(".main").load("/frontend/admin/info");
        },

        trash: function() {
            $(".main").load("/frontend/admin/trash");
        }
    }
});