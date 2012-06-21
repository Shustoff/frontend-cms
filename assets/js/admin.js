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
                $(that).replaceWith("<a href='#' onclick='req.off(this); return false;'><img src='assets/img/published.png'>");
            });
        },

        off: function(that) {
            var name = $(that).parent();
            $.post("/frontend/admin/pages/off", $(name).serialize(), function(){
                $(that).replaceWith("<a href='#' onclick='req.on(this); return false;'><img src='assets/img/not-published.png'>");
            });
        },

        intrash: function(that) {
            var name = $(that).parent();
            $.post("/frontend/admin/pages/intrash", $(name).serialize(), function(){
                $(name).parents('tr').remove();
            });
        },

        // Сортировка страниц
        sortPages: function() {
            // Сохраняет сортировку между запросами
            var sortPages = $('#select1 option:selected').text();
            localStorage.setItem('sortPages', sortPages);
            // Сохраняем кол-во страниц при выводе между запросами
            var limitPages = $('#select2 option:selected').text();
            localStorage.setItem('limitPages', limitPages);

            $.post("/frontend/admin/pages/", $("#savepages").serialize(), function(data) {
                $('.main').empty().append(data);
                $('#select1 option').each(function() {
                    if ( $(this).text() === localStorage.getItem('sortPages') ) {
                        $(this).attr('selected', 'selected');
                        localStorage.removeItem('sortPages');
                    }
                });
                $('#select2 option').each(function() {
                    if ( $(this).text() === localStorage.getItem('limitPages') ) {
                        $(this).attr('selected', 'selected');
                        localStorage.removeItem('limitPages');
                    }
                });
            });
        },

        // Пагинация
        pagination: function(that) {
            // Сохраняет сортировку между запросами
            var sortPages = $('#select1 option:selected').text();
            localStorage.setItem('sortPages', sortPages);
            // Сохраняем кол-во страниц при выводе между запросами
            var limitPages = $('#select2 option:selected').text();
            localStorage.setItem('limitPages', limitPages);
            // Количество текущих отображаемых страниц
            var count = $('.pageedit').index() + 1;
            // Номер текущей страницы, начиная с нуля
            var thispage = $(that).text() - 1;
            // Получаем номер откуда начинать вывод страниц
            var offset = thispage * parseInt( $('#select2 option:selected').text() );
            // Имя текущей формы для отправки
            var name = "#" + $(that).parents('form').attr('id');
            // Устанавливаем значения скрытого поля в начальный номер вывода страниц
            $(name).children('input#offset').val(offset);
            // Устанавливаем значения скрытого поля в значение сортировки
            $(name).children('input#sortby').val( $('#select1 option:selected').val() );
            // Устанавливаем значение cкрытого поля в лимит страниц для вывода
            $(name).children('input#limitpages').val(localStorage.getItem('limitPages'));

            $.post("/frontend/admin/pages/", $(name).serialize(), function(data) {
                $('.main').empty().append(data);
                $('#select1 option').each(function() {
                    if ( $(this).text() === localStorage.getItem('sortPages') ) {
                        $(this).attr('selected', 'selected');
                        localStorage.removeItem('sortPages');
                    }
                });
                $('#select2 option').each(function() {
                    if ( $(this).text() === localStorage.getItem('limitPages') ) {
                        $(this).attr('selected', 'selected');
                        localStorage.removeItem('limitPages');
                    }
                });
            });
        }
    };

    // Проверка измененных полей в настройках
    function checkOptions() {

        function rem() {$('.btn-success').removeAttr('disabled').val('Сохранить настройки сайта');}

        $('input[type=text], textarea').live('keydown', rem);
        $('input[type=radio], select').live('change', rem);
    }
});