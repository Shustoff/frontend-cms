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

        // Сохранить настройки
        saveoptions: function() {
            $.post("/frontend/admin/options/save", $("#saveoptions").serialize(), function() {
                $('.btn-success').attr('disabled', 'disabled').val('Настройки сохранены');
                $('.sitename').text($('#sitename').val());
            });
        },

        // Опубликовать
        on: function(that) {
            var name = $(that).parent();
            $.post("/frontend/admin/pages/on", $(name).serialize(), function(){
                $(that).replaceWith("<a href='#' onclick='req.off(this); return false;'><img src='assets/img/published.png'>");
            });
        },

        // Не опубликовать
        off: function(that) {
            var name = $(that).parent();
            $.post("/frontend/admin/pages/off", $(name).serialize(), function(){
                $(that).replaceWith("<a href='#' onclick='req.on(this); return false;'><img src='assets/img/not-published.png'>");
            });
        },

        // Добавить в корзину
        intrash: function(table, that) {
            var name = $(that).parent();
            $.post("/frontend/admin/" + table + "/intrash", $(name).serialize(), function(){
                $(name).parents('tr').fadeOut(300);
            });
        },

        // Сортировка страниц
        sortPages: function(table) {
            // Сохраняет сортировку между запросами
            var sortby = $('#select1 option:selected').text();
            localStorage.setItem('sortby', sortby);
            // Сохраняем кол-во страниц при выводе между запросами
            var limit = $('#select2 option:selected').text();
            localStorage.setItem('limit', limit);

            $.post("/frontend/admin/" + table, $("#save").serialize(), function(data) {
                // Добавляем возвращаемые данные в документ
                $('.main').empty().append(data);
                 // Сохраняем значение выпадающего списка между переходами по страницам
                $('#select1 option').each(function() {
                    if ( $(this).text() === localStorage.getItem('sortby') ) {
                        $(this).attr('selected', 'selected');
                        localStorage.removeItem('sortby');
                    }
                });
                $('#select2 option').each(function() {
                    if ( $(this).text() === localStorage.getItem('limit') ) {
                        $(this).attr('selected', 'selected');
                        localStorage.removeItem('limit');
                    }
                });
            });
        },

        // Пагинация
        pagination: function(table, selfpage) {
            // Сохраняет сортировку между запросами
            var sortby = $('#select1 option:selected').text();
            localStorage.setItem('sortby', sortby);
            // Сохраняем кол-во страниц при выводе между запросами
            var limit = $('#select2 option:selected').text();
            localStorage.setItem('limit', limit);
            // Количество текущих отображаемых страниц
            var count = $('.pageedit').index() + 1;
            // Номер текущей страницы, начиная с нуля
            var thispage = $(selfpage).text() - 1;
            // Получаем номер откуда начинать вывод страниц
            var offset = thispage * parseInt( $('#select2 option:selected').text() );
            // Имя текущей формы для отправки
            var name = "#" + $(selfpage).parents('form').attr('id');
            // Устанавливаем значения скрытого поля в начальный номер вывода страниц
            $(name).children('input#offset').val(offset);
            // Устанавливаем значения скрытого поля в значение сортировки
            $(name).children('input#sortby').val( $('#select1 option:selected').val() );
            // Устанавливаем значение cкрытого поля в лимит страниц для вывода
            $(name).children('input#limit').val(localStorage.getItem('limit'));

            $.post("/frontend/admin/" + table, $(name).serialize(), function(data) {
                // Добавляем возвращаемые данные в документ
                $('.main').empty().append(data);
                // Сохраняем значение выпадающего списка между переходами по страницам
                $('#select1 option').each(function() {
                    if ( $(this).text() === localStorage.getItem('sortby') ) {
                        $(this).attr('selected', 'selected');
                        localStorage.removeItem('sortby');
                    }
                });
                $('#select2 option').each(function() {
                    if ( $(this).text() === localStorage.getItem('limit') ) {
                        $(this).attr('selected', 'selected');
                        localStorage.removeItem('limit');
                    }
                });
            });
        },

        // Восстановление из корзины
        recovery:  function(that) {
            var name = $(that).parent();
            $.post("/frontend/admin/trash/recovery", $(name).serialize(), function(){
                $(name).parents('tr').fadeOut(300);
            });
        },

        // Удаление из корзины
        deleteItem: function(that) {
            var name = $(that).parent();
            $.post("/frontend/admin/trash/delete", $(name).serialize(), function(){
                $(name).parents('tr').fadeOut(300);
            });
        },

        // Поиск
        searchItems: function(table) {
            $.post("/frontend/admin/" + table + "/search", $('#search' + table).serialize(), function(data){
                $('.main').empty().append(data);
            });
        },

        addItem: function(table) {
            $.post("/frontend/admin/" + table + "/add", $('#additem').serialize(), function(){
                $(".main").empty().load("/frontend/admin/" + table);
            });
        }
    };

    // Проверка измененных полей в настройках
    function checkOptions() {

        // Делаем кнопку активной
        function rem() {
            $('.btn-success').removeAttr('disabled').val('Сохранить настройки сайта');
        }

        // Проверяем внесены ли изменения в настройки
        $('input[type=text], textarea').live('keydown', rem);
        $('input[type=radio], select').live('change', rem);
    }
});