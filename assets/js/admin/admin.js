$(function(){

    // Корень админки
    var baseURL = '/frontend/admin/';

    // Ajax-транспорт
    req = {
        index: function() {$(".main").load(baseURL + "home");},

        // Вид настроек
        options: function() {
            $(".main").load(baseURL + "options");
            binds.checkOptions();
        },

        // Вид страниц
        pages: function() {$(".main").load(baseURL + "pages");},

        // Вид каталогов
        catalogs: function() {$(".main").load(baseURL + "catalogs");},

        // Вид пользователей
        users: function() {$(".main").load(baseURL + "users");},

        // Вид ролей
        roles: function() {$(".main").load(baseURL + "roles");},

        // Вид модулей
        modules: function() {$(".main").load(baseURL + "modules");},

        // Вид отправки сообщений
        email: function() {
            $(".main").load(baseURL + "email", function() {
                binds.validFail();
            });
        },

        // Вид статистики
        stats: function() {$(".main").load(baseURL + "stats")},

        // Вид информации о сайте
        info: function() {$(".main").load(baseURL + "info");},

        // Вид корзины
        trash: function() {$(".main").load(baseURL + "trash");},

        // Сохранить настройки
        saveoptions: function() {
            $.post(baseURL + "options/save", $("#saveoptions").serialize(), function() {
                $('.sitename').text( $('#sitename').val() );
                binds.completeSave();
            });
        },

        // Опубликовать
        on: function(table, that) {
            var formname = $(that).parent();
            thisTable = table;
            $.post(baseURL + table + "/on", $(formname).serialize(), function(){
                $(that).replaceWith(
                    "<a href='#' onclick='req.off(thisTable, this); return false;'><img src='assets/img/admin/published.png'></a>"
                );
            });
        },

        // Не опубликовать
        off: function(table, that) {
            var formname = $(that).parent();
            thisTable = table;
            $.post(baseURL + table + "/off", $(formname).serialize(), function(){
                $(that).replaceWith(
                    "<a href='#' onclick='req.on(thisTable, this); return false;'><img src='assets/img/admin/not-published.png'></a>"
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
                binds.completeDelete();
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
            $.post(baseURL + table + "/add", $('#additem').serialize(), function(data) {
                if (data != '') {
                    $('.alert-danger').append(data);
                    $('.alert-danger').show().delay(3000).hide(100);
                } else {
                    $('.alert-success').show().delay(3000).hide(100);
                    binds.completeSave();
                }
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

        // Проверяем уникальность названия страницы и валидацию формы
        checkPageName: function() {
            if ( $(this).val() != '' ) {
                var parentForm = $(this).parents('form');
                $.post(baseURL + "pages/checkpagename", $(parentForm).serialize(), function(data){
                    $('.failpagename').text(data);
                    if (data || $('.failalias').text()) {
                        binds.validFail();
                    } else {
                        if ( $(parentForm).valid() ) {
                            if ( $(parentForm).attr('id') == 'additem' ) {
                                binds.canSave("binds.canSaveItem('pages');");
                            } else {
                                binds.canSave("binds.canEditItem('pages');");
                            }
                        }
                    }
                });
            }
        },

        // Проверяем уникальность алиаса страницы и валидацию формы
        checkPageAlias: function() {
            if ( $(this).val() != '' ) {
                var parentForm = $(this).parents('form');
                $.post(baseURL + "pages/checkalias", $(parentForm).serialize(), function(data){
                    $('.failalias').text(data);
                    if (data || $('.failpagename').text()) {
                        binds.validFail();
                    } else {
                        if ( $(parentForm).valid() ) {
                            if ( $(parentForm).attr('id') == 'additem' ) {
                                binds.canSave("binds.canSaveItem('pages');");
                            } else {
                                binds.canSave("binds.canEditItem('pages');");
                            }
                        }
                    }
                });
            }
        },

        // Проверяем уникальность названия каталога и валидацию формы
        checkCatName: function() {
            if ( $(this).val() != '' ) {
                var parentForm = $(this).parents('form');
                $.post(baseURL + "catalogs/checkcatname", $(parentForm).serialize(), function(data){
                    $('.failcatname').text(data);
                    if (data || $('.failalias').text()) {
                        binds.validFail();
                    } else {
                        if ( $(parentForm).valid() ) {
                            if ( $(parentForm).attr('id') == 'additem' ) {
                                binds.canSave("binds.canSaveItem('catalogs');");
                            } else {
                                binds.canSave("binds.canEditItem('catalogs');");
                            }
                        }
                    }
                });
            }
        },

        // Проверяем уникальность алиаса каталога и валидацию формы
        checkCatAlias: function() {
            if ( $(this).val() != '' ) {
                var parentForm = $(this).parents('form');
                $.post(baseURL + "catalogs/checkalias", $(parentForm).serialize(), function(data){
                    $('.failalias').text(data);
                    if (data || $('.failcatname').text()) {
                        binds.validFail();
                    } else {
                        if ( $(parentForm).valid() ) {
                            if ( $(parentForm).attr('id') == 'additem' ) {
                                binds.canSave("binds.canSaveItem('catalogs');");
                            } else {
                                binds.canSave("binds.canEditItem('catalogs');");
                            }
                        }
                    }
                });
            }
        },

        // Проверяем уникальность названия модуля и валидацию формы
        checkModuleName: function() {
            if ( $(this).val() != '' ) {
                var parentForm = $(this).parents('form');
                $.post(baseURL + "modules/checkmodname", $(parentForm).serialize(), function(data){
                    $('.failmodname').text(data);
                    if (data || $('.failsystemname').text()) {
                        binds.validFail();
                    } else {
                        if ( $(parentForm).valid() ) {
                            if ( $(parentForm).attr('id') == 'additem' ) {
                                binds.canSave("binds.canSaveItem('modules');");
                            } else {
                                binds.canSave("binds.canEditItem('modules');");
                            }
                        }
                    }
                });
            }
        },

        // Проверяем уникальность системного имя модуля и валидацию формы
        checkSystemName: function() {
            if ( $(this).val() != '' ) {
                var parentForm = $(this).parents('form');
                $.post(baseURL + "modules/checksysname", $(parentForm).serialize(), function(data){
                    $('.failsystemname').text(data);
                    if (data || $('.failmodname').text()) {
                        binds.validFail();
                    } else {
                        if ( $(parentForm).valid() ) {
                            if ( $(parentForm).attr('id') == 'additem' ) {
                                binds.canSave("binds.canSaveItem('modules');");
                            } else {
                                binds.canSave("binds.canEditItem('modules');");
                            }
                        }
                    }
                });
            }
        },

        // Проверяем уникальность логина и валидацию формы
        checkLogin: function() {
            if ( $(this).val() != '' ) {
                var parentForm = $(this).parents('form');
                $.post(baseURL + "users/checklogin", $(parentForm).serialize(), function(data){
                    $('.failusername').text(data);
                    if (data) binds.validFail();
                    if (!$('.failusername').text() && !$('.failemail').text() && $(parentForm).valid()) {
                        if ( $(parentForm).attr('id') == 'additem') {
                            binds.canSave("req.add('users');");
                        } else {
                            binds.canSave("req.edit('users');");
                        }
                    }
                });
            }
        },

        // Проверяем уникальность емейла и валидацию формы
        checkEmail: function() {
            if ( $(this).val() != '' ) {
                var parentForm = $(this).parents('form');
                $.post(baseURL + "users/checkemail", $(parentForm).serialize(), function(data){
                    $('.failemail').text(data);
                    if (data) binds.validFail();
                    if (!$('.failusername').text() && !$('.failemail').text() && $(parentForm).valid()) {
                        if ($(parentForm).attr('id') == 'additem') {
                            binds.canSave("req.add('users');");
                        } else {
                            binds.canSave("req.edit('users');");
                        }
                    }
                });
            }
        },

        // Проверяем уникальность названия роли и валидацию формы
        checkRoleName: function() {
            if ( $(this).val() != '' ) {
                var parentForm = $(this).parents('form');
                $.post(baseURL + "roles/checkrole", $(parentForm).serialize(), function(data){
                    $('.failrole').text(data);
                    if (data) binds.validFail();
                    if ( !$('.failrole').text() && $(parentForm).valid()) {
                        if ($(parentForm).attr('id') == 'additem') {
                            binds.canSave("req.add('roles');");
                        } else {
                            binds.canSave("req.edit('roles');");
                        }
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
                    binds.completeSave();
                });
            }
        }
    };

    // Биндим события на элементы формы
    binds = {
        // Проверка измененных полей в настройках
        checkOptions: function() {
            $('#saveoptions input[type=text], #saveoptions textarea').live('keydown', function() {
                binds.canSave('req.saveoptions();');
            });
            $('#saveoptions input[type=radio], #saveoptions select').live('change', function() {
                binds.canSave('req.saveoptions();');
            });
        },

        // Делаем кнопку сохранить активной если вся форма валиднa
        canSave: function(onclick) {
            $('.btncheck').removeAttr('disabled').attr('onclick', onclick).text('Сохранить');
        },

        // Тоже самое для отправки сообщения
        canSend: function(onclick) {
            $('.btncheck').removeAttr('disabled').attr('onclick', onclick).text('Отправить сообщение');
        },

        // Делаем кнопку сохранить не активной после сохранения материала, показываем успешное сохранение
        completeSave: function() {
            $('.btncheck').attr('disabled', 'disabled').attr('onclick', 'return false;').text('Сохранено');
            $('input, textarea, select').focusout(function(){return false;});
            $('input, select').change(function(){return false;});
        },

        // Показываем сообщение удаления
        completeDelete : function () {
            $('.tooltips').show(100).delay(3000).hide(100);
        },

        // Делаем кнопку сохранить не активной если не пройдена валидация поля формы
        validFail: function() {
            $('.btncheck').attr('disabled', 'disabled').attr('onclick', 'return false;');
        },

        // Проверяем можно ли сохранить материал + отсылаем html
        canSaveItem: function(table) {
            if (!editor.getData())
            {
                $('.editorfail').show().delay(3000).hide(100);
            }
            else
            {
                $('#content').empty().val(editor.getData());
                req.add(table);
            }
        },

        // Проверяем можно ли сохранить материал + отсылаем html
        canEditItem: function(table) {
            if (!editor.getData())
            {
                $('.editorfail').show().delay(3000).hide(100);
            }
            else
            {
                $('#content').empty().val(editor.getData());
                req.edit(table);
            }
        }
    };

    // Вставляем дату в поле дата пикера
    date = {
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