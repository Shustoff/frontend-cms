$(function(){
/*
// Настройки шаблонизатора
_.templateSettings = {
    interpolate: /\{\{(.+?)\}\}/g
};

// Шаблонизатор
var template = {
    topRender: (function() {
        var topTemplate = $('.top').html();
        var template = _.template(topTemplate);
        $('.top').html(
            template({
                sitename: sitename,
                ipadress: ipadress,
                email: email
            })
        );
    })()
};
*/

    // Корень админки
    var baseURL = '/frontend/admin/';

    // Ajax-транспорт
    req = {
        index: function() {$(".main").load(baseURL + "home");},

        options: function() {
            $(".main").load(baseURL + "options");
            binds.checkOptions();
        },

        pages: function() {$(".main").load(baseURL + "pages");},

        catalogs: function() {$(".main").load(baseURL + "catalogs");},

        users: function() {$(".main").load(baseURL + "users");},

        roles: function() {$(".main").load(baseURL + "roles");},

        modules: function() {$(".main").load(baseURL + "modules");},

        email: function() {
            $(".main").load(baseURL + "email", function() {
                binds.validFail();
            });
        },

        stats: function() {$(".main").load(baseURL + "stats")},

        info: function() {$(".main").load(baseURL + "info");},

        trash: function() {$(".main").load(baseURL + "trash");},

        // Сохранить настройки
        saveoptions: function() {
            $.post(baseURL + "options/save", $("#saveoptions").serialize(), function() {
                $('.sitename').text($('#sitename').val());
                binds.completeSave();
            });
        },

        // Опубликовать
        on: function(table, that) {
            var formname = $(that).parent();
            thisTable = table;
            $.post(baseURL + table + "/on", $(formname).serialize(), function(){
                $(that).replaceWith(
                    "<a href='#' onclick='req.off(thisTable, this); return false;'><img src='assets/img/published.png'></a>"
                );
            });
        },

        // Не опубликовать
        off: function(table, that) {
            var formname = $(that).parent();
            thisTable = table;
            $.post(baseURL + table + "/off", $(formname).serialize(), function(){
                $(that).replaceWith(
                    "<a href='#' onclick='req.on(thisTable, this); return false;'><img src='assets/img/not-published.png'></a>"
                );
            });
        },

        // Добавить в корзину
        intrash: function(table, that) {
            var name = $(that).parent();
            $.post(baseURL + table + "/intrash", $(name).serialize(), function(){
                $(name).parents('tr').fadeOut(300);
            });
        },

        // Сортировка страниц
        sortItems: function(table) {
            // Сохраняет сортировку между запросами
            var sortby = $('#select1 option:selected').text();
            localStorage.setItem('sortby', sortby);
            // Сохраняем кол-во страниц при выводе между запросами
            var limit = $('#select2 option:selected').text();
            localStorage.setItem('limit', limit);

            $.post(baseURL + table, $("#save").serialize(), function(data) {
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

            $.post(baseURL + table, $(name).serialize(), function(data) {
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
            $.post(baseURL + "trash/recovery", $(name).serialize(), function(){
                $(name).parents('tr').fadeOut(300);
            });
        },

        // Удаление из корзины
        deleteItem: function(that) {
            var name = $(that).parent();
            $.post(baseURL + "trash/delete", $(name).serialize(), function(){
                $(name).parents('tr').fadeOut(300);
            });
        },

        // Поиск
        searchItems: function(table) {
            $.post(baseURL + table + "/search", $('#search' + table).serialize(), function(data){
                $('.main').empty().append(data);
            });
        },

        // Загружает вид для создания материала
        addItem: function(table) {
            $(".main").load(baseURL +  table + "/add" + table, function() {
                binds.validFail();
            });
        },

        // Добавляем материал
        add: function(table) {
            $.post(baseURL + table + "/add", $('#additem').serialize(), function(){
                binds.completeSave();
            });
        },

        // Загружает вид для редактирование материала
        editItem: function(table, itemId) {
            $.post(baseURL + table + "/edit" + table + "/" + itemId, $('#edititem').serialize(), function(){
                $(".main").empty().load(baseURL + table + "/edit" + table + "/" + itemId);
            });
        },

        // Обновляем материал
        edit: function(table) {
            $.post(baseURL + table + "/edit", $("#edititem").serialize(), function(){
                binds.completeSave();
            });
        },

        // Проверяем уникальность логина
        checkLogin: function() {
            if ( $(this).val() != '' ) {
                var parentForm = $(this).parents('form');
                $.post(baseURL + "users/checklogin", $(parentForm).serialize(), function(data){
                    $('.failusername').text(data);
                    if (data) binds.validFail();
                    if ($('.failusername').text() == '' && $('.failemail').text() == '' && $(parentForm).valid()) {
                        if (parentForm == 'form#additem') {
                            binds.canSave("req.add('users');");
                        } else {
                            binds.canSave("req.edit('users');");
                        }
                    }
                });
            }
        },

        // Проверяем уникальность емейла
        checkEmail: function() {
            if ( $(this).val() != '' ) {
                var parentForm = $(this).parents('form');
                $.post(baseURL + "users/checkemail", $(parentForm).serialize(), function(data){
                    $('.failemail').text(data);
                    if (data) binds.validFail();
                    if ($('.failusername').text() == '' && $('.failemail').text() == '' && $(parentForm).valid()) {
                        if (parentForm == 'form#additem') {
                            binds.canSave("req.add('users');");
                        } else {
                            binds.canSave("req.edit('users');");
                        }
                    }
                });
            }
        },

        // Проверяем уникальность названия роли
        checkRoleName: function() {
            if ( $(this).val() != '' ) {
                var parentForm = $(this).parents('form');
                $.post(baseURL + "roles/checkrole", $(parentForm).serialize(), function(data){
                    $('.failrole').text(data);
                    if (data) binds.validFail();
                    if ( $('.failrole').text() == '' && $(parentForm).valid()) {
                        if (parentForm == 'form#additem') {
                            binds.canSave("req.add('roles');");
                        } else {
                            binds.canSave("req.edit('roles');");
                        }
                    }
                });
            }
        },

        // Проверяем уникальность системного имя модуля
        checkSystemName: function() {
            if ( $(this).val() != '' ) {
                var parentForm = $(this).parents('form');
                $.post(baseURL + "modules/checkname", $(parentForm).serialize(), function(data){
                    $('.failsystemname').text(data);
                    if (data) binds.validFail();
                    if ( $('.failsystemname').text() == '' && $(parentForm).valid()) {
                       binds.canSave("binds.canSaveItem('modules');");
                    }
                });
            }
        },

        // Отправляем сообщение
        sendEmail: function() {
            if (!editor.getData())
            {
                $('.editorfail').show().delay(3000).hide(100);
            }
            else {
                $('#content').val(editor.getData());
                $('#sendemailbtn').text('Сообщение отправляется...').attr('onclick', 'return false;').addClass('disabled');
                $.post(baseURL + "email/send", $('#email').serialize(), function() {
                    $('#sendemailbtn').text('Сообщение отправлено!');
                });
            }
        }
    };

    // Биндим события на элементы формы
    binds = {
        // Проверка измененных полей в настройках
        checkOptions: function() {
            // Делаем кнопку активной
            function rem() {$('#saveoptions .btncheck').removeAttr('disabled').attr('onclick', 'req.saveoptions();').text('Сохранить');}
            // Проверяем внесены ли изменения в настройки
            $('#saveoptions input[type=text], #saveoptions textarea').live('keydown', rem);
            $('#saveoptions input[type=radio], #saveoptions select').live('change', rem);
        },

        // Делаем кнопку сохранить активной если вся форма валидна
        canSave: function(onclick) {
            $('.btncheck').removeAttr('disabled').attr('onclick', onclick).text('Сохранить');
        },

        // Делаем кнопку сохранить не активной после сохранения
        completeSave: function() {
            $('.btncheck').attr('disabled', 'disabled').attr('onclick', 'return false;').text('Сохранено');
        },

        // Делаем кнопку сохранить не активной если не пройдена валидация поля
        validFail: function() {
            $('.btncheck').attr('disabled', 'disabled').attr('onclick', 'return false;');
        },

        // Проверяем можно ли сохранить материал
        canSaveItem: function(table) {
            if (!editor.getData())
            {
                $('.editorfail').show().delay(3000).hide(100);
            }
            else {
                $('#content').empty().val(editor.getData());
                req.add(table);
            }
        },

        // Проверяем можно ли сохранить материал
        canEditItem: function(table) {
            if (!editor.getData())
            {
                $('.editorfail').show().delay(3000).hide(100);
            }
            else {
                $('#content').empty().val(editor.getData());
                req.edit(table);
            }
        }
    };

    // Объект даты
    date = {
        // Вставляем дату в поле дата пикера
        today: function(el) {
            var dt = new Date();
            var month = dt.getMonth() + 1;
            if (month < 10) month = '0' + month;
            var day = dt.getDate();
            if (day < 10) day='0' + day;
            var year = dt.getFullYear();
            $(el).val(year + '-' + month + '-' + day);
        }
    }
});