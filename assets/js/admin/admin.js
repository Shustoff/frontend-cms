$(function(){

    // Корень админки
    var baseURL = '/admin/';

    // Все что связано с Ajax-запросами
    req = {
        // Вид главной страницы
        index: function() {
            binds.showLoader();
            $(".main").load(baseURL + "home");
        },

        // Вид настроек
        options: function() {
            binds.showLoader();
            $(".main").load(baseURL + "options");
            binds.checkOptions();
        },

        // Вид страниц
        pages: function() {
            binds.showLoader();
            $(".main").load(baseURL + "pages");
        },

        // Вид каталогов
        catalogs: function() {
            binds.showLoader();
            $(".main").load(baseURL + "catalogs");
        },

        // Вид пользователей
        users: function() {
            binds.showLoader();
            $(".main").load(baseURL + "users");
        },

        // Вид ролей
        roles: function() {
            binds.showLoader();
            $(".main").load(baseURL + "roles");
        },

        // Вид модулей
        modules: function() {
            binds.showLoader();
            $(".main").load(baseURL + "modules");
        },

        // Загружает вид для создания материала
        addItem: function(table) {
            binds.showLoader();
            $(".main").load(baseURL +  table + "/add" + table, function() {
                binds.validFail();
            });
        },

        // Загружает вид для редактирование материала
        editItem: function(table, itemId) {
            binds.showLoader();
            $.post(baseURL + table + "/edit" + table + "/" + itemId, $('#edititem').serialize(), function(){
                $(".main").empty().load(baseURL + table + "/edit" + table + "/" + itemId);
            });
        },

        // Вид отправки сообщений
        email: function() {
            binds.showLoader();
            $(".main").load(baseURL + "email", function() {binds.validFail();});
        },

        // Вид статистики
        stats: function() {
            binds.showLoader();
            $(".main").load(baseURL + "stats");
        },

        // Вид информации о сайте
        info: function() {
            binds.showLoader();
            $(".main").load(baseURL + "info");
        },

        // Вид корзины
        trash: function() {
            binds.showLoader();
            $(".main").load(baseURL + "trash", function() {
                if ( ! $('tbody').has('tr').length) {
                    $('#deleteAll, select, .btn').attr('disabled', 'disabled');
                    $('.btn').attr('onclick', 'return false;');
                }
            });
        },

        // Поиск
        searchItems: function(table) {
            $.post(baseURL + table + "/search", $('#search' + table).serialize(), function(data){
                $('.main').empty().append(data);
            });
        },

        // Сохранить настройки
        saveoptions: function() {
            $.post(baseURL + "options/save", $("#saveoptions").serialize(), function() {
                $('.sitename').text( $('#sitename').val() );
                binds.completeSave();
                $('.alert-success').show().delay(3000).hide(100);
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
            var $select1 = $('#select1 option:selected');
            var $select2 = $('#select2 option:selected');
            localStorage.setItem('selfpage', '.' + $(selfpage).attr('class'));
            // Сохраняет сортировку между запросами
            var sortby = $select1.text();
            localStorage.setItem('sortby', sortby);
            // Сохраняем кол-во страниц при выводе между запросами
            var limit = $select2.text();
            localStorage.setItem('limit', limit);
            // Количество текущих отображаемых страниц
            var count = $('.pageedit').index() + 1;
            // Номер текущей страницы, начиная с нуля
            var thispage = $(selfpage).text() - 1;
            // Получаем номер откуда начинать вывод страниц
            var offset = thispage * parseInt( $select2.text() );
            // Имя текущей формы для отправки
            var name = "#" + $(selfpage).parents('form').attr('id');
            // Устанавливаем значения скрытого поля в начальный номер вывода страниц
            $(name).children('input#offset').val(offset);
            // Устанавливаем значения скрытого поля в значение сортировки
            $(name).children('input#sortby').val( $select1.val() );
            // Устанавливаем значение cкрытого поля в лимит страниц для вывода
            $(name).children('input#limit').val(localStorage.getItem('limit'));

            $.post(baseURL + table, $(name).serialize(), function(data) {
                // Добавляем возвращаемые данные в документ
                $('.main').empty().append(data);
                // Сохраняем значение выпадающего списка между переходами по страницам
                $('#select1 option').each(function() {
                    if ($(this).text() === localStorage.getItem('sortby')) {
                        $(this).attr('selected', 'selected');
                        localStorage.removeItem('sortby');
                    }
                });
                $('#select2 option').each(function() {
                    if ($(this).text() === localStorage.getItem('limit')) {
                        $(this).attr('selected', 'selected');
                        localStorage.removeItem('limit');
                    }
                });
                $(localStorage.getItem('selfpage')).addClass('hovered');
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

        // Очищаем корзину полностью
        deleteAll: function () {
            $.post(baseURL + "trash/deleteall", function() {
                $('.pageedit').fadeOut(300);
                binds.completeDelete();
            })
        },

        // Добавляем материал
        add: function (table) {
            $.post(baseURL + table + "/add", $('#additem').serialize(), function(data) {
                if (table == 'users' || table == 'roles') {
                    if (data != '') {
                        // Показываем ошибки
                        $('.alert-danger span').html(data);
                        $('.alert-danger').show().delay(3000).hide(100);
                    } else {
                        // Показываем success!
                        $('.alert-success').show().delay(3000).hide(100);
                        binds.completeSave();
                        $('button').removeClass('btn-success');
                    }
                } else {
                    if (data != '' && typeof(parseInt(data)) != 'number') {
                        // Показываем ошибки
                        $('.alert-danger span').html(data);
                        $('.alert-danger').show().delay(3000).hide(100);
                    } else {
                        $('#idItem').val(data);
                        // Показываем success!
                        $('.alert-success').show().delay(3000).hide(100);
                        $('.btncheck, .btn-success').attr("onclick", "binds.canEditItem('" + table + "');");
                        binds.completeSave();
                        $('form').attr('id', 'edititem');
                    }
                }
            });
        },

        // Обновляем материал
        edit: function (table) {
            $.post(baseURL + table + "/edit", $("#edititem").serialize(), function(data){
                if (data != '') {
                    $('.alert-danger span').html(data);
                    $('.alert-danger').show().delay(3000).hide(100);
                } else {
                    $('.alert-success').show().delay(3000).hide(100);
                    binds.completeSave();
                }
            });
        },

        // Проверяем уникальность названия страницы и валидацию формы
        checkPageName: function() {
            var el = '#pagename';
            if ( $(el).val() != '' ) {
                var parentForm = $(el).parents('form');
                $.post(baseURL + "pages/checkpagename", $(parentForm).serialize(), function(data){
                    $('.failpagename').text(data);
                    if (data || $('.failalias').text()) {
                        binds.validFail();
                    }
                });
            }
        },

        // Проверяем уникальность алиаса страницы и валидацию формы
        checkPageAlias: function() {
            var el = '#alias';
            if ( $(el).val() != '' ) {
                var parentForm = $(el).parents('form');
                $.post(baseURL + "pages/checkalias", $(parentForm).serialize(), function(data){
                    $('.failalias').text(data);
                    if (data || $('.failpagename').text()) {
                        binds.validFail();
                    }
                });
            }
        },

        // Проверяем уникальность названия каталога и валидацию формы
        checkCatName: function() {
            var el = '#catname';
            if ( $(el).val() != '' ) {
                var parentForm = $(el).parents('form');
                $.post(baseURL + "catalogs/checkcatname", $(parentForm).serialize(), function(data){
                    $('.failcatname').text(data);
                    if (data || $('.failalias').text()) {
                        binds.validFail();
                    }
                });
            }
        },

        // Проверяем уникальность алиаса каталога и валидацию формы
        checkCatAlias: function() {
            var el = '#alias';
            if ( $(el).val() != '' ) {
                var parentForm = $(el).parents('form');
                $.post(baseURL + "catalogs/checkalias", $(parentForm).serialize(), function(data){
                    $('.failalias').text(data);
                    if (data || $('.failcatname').text()) {
                        binds.validFail();
                    }
                });
            }
        },

        // Проверяем уникальность названия модуля и валидацию формы
        checkModuleName: function() {
            var el = '#name';
            if ( $(el).val() != '' ) {
                var parentForm = $(el).parents('form');
                $.post(baseURL + "modules/checkmodname", $(parentForm).serialize(), function(data){
                    $('.failmodname').text(data);
                    if (data || $('.failsystemname').text()) {
                        binds.validFail();
                    }
                });
            }
        },

        // Проверяем уникальность системного имя модуля и валидацию формы
        checkSystemName: function() {
            var el = '#systemname';
            if ( $(el).val() != '' ) {
                var parentForm = $(el).parents('form');
                $.post(baseURL + "modules/checksysname", $(parentForm).serialize(), function(data){
                    $('.failsystemname').text(data);
                    if (data || $('.failmodname').text()) {
                        binds.validFail();
                    }
                });
            }
        },

        // Проверяем уникальность логина и валидацию формы
        checkLogin: function() {
            var el = '#username';
            var $failName = $('.failusername');
            if ( $(el).val() != '' ) {
                var parentForm = $(el).parents('form');
                $.post(baseURL + "users/checklogin", $(parentForm).serialize(), function(data){
                    $failName.text(data);
                    if (data) binds.validFail();
                    if ( ! $failName.text() && ! $('.failemail').text() && $(parentForm).valid()) {
                        binds.canSave();
                    }
                });
            }
        },

        // Проверяем уникальность емейла и валидацию формы
        checkEmail: function() {
            var el = '#email';
            var $failEmail = $('.failemail');
            if ( $(el).val() != '' ) {
                var parentForm = $(el).parents('form');
                $.post(baseURL + "users/checkemail", $(parentForm).serialize(), function(data){
                    $failEmail.text(data);
                    if (data) binds.validFail();
                    if ( ! $('.failusername').text() && ! $failEmail.text() && $(parentForm).valid()) {
                        binds.canSave();
                    }
                });
            }
        },

        // Проверяем уникальность названия роли и валидацию формы
        checkRoleName: function() {
            var el = '#name';
            var $failRole = $('.failrole');
            if ( $(el).val() != '' ) {
                var parentForm = $(el).parents('form');
                $.post(baseURL + "roles/checkrole", $(parentForm).serialize(), function(data){
                    $failRole.text(data);
                    if (data) binds.validFail();
                    if ( ! $failRole.text() && $(parentForm).valid()) {
                        binds.canSave();
                    }
                });
            }
        },

        // Отправляем сообщение
        sendEmail: function() {
            if ( ! editor.getData()) {
                $('.editorfail').show().delay(3000).hide(100);
            } else {
                $('#content').val(editor.getData());
                $('#sendemailbtn').text('Сообщение отправляется...').attr('disabled', 'disabled');
                $.post(baseURL + "email/send", $('#email').serialize(), function() {
                    $('#sendemailbtn').text('Сообщение отправлено!');
                });
            }
        }
    };

    // Биндим события на элементы формы и методы проверки
    binds = {

        // Проверка измененных полей в настройках
        checkOptions: function() {
            $('#saveoptions input[type=text], #saveoptions textarea').live('keydown', function() {
                binds.canSave();
            });
            $('#saveoptions input[type=radio], #saveoptions select').live('change', function() {
                binds.canSave();
            });
        },

        // Тоже самое для отправки сообщения
        canSend: function(onclick) {
            $('.btncheck').removeAttr('disabled').attr('onclick', onclick).text('Отправить сообщение');
        },

        // Делаем кнопку сохранить не активной после сохранения материала, показываем успешное сохранение
        completeSave: function() {
            $('.btncheck, .btn-success')
                  .attr('disabled', 'disabled')
                  .text('Сохранено')
                  .removeClass('btncheck');
        },

        // Показываем сообщение удаления
        completeDelete : function () {
            $('.tooltips').show(100).delay(3000).hide(100);
        },

        // Делаем кнопку сохранить не активной если не пройдена валидация поля формы
        validFail: function() {
            $('.btn-success').attr('disabled', 'disabled');
        },

        // Делаем кнопку сохранить активной если вся форма валиднa
        canSave: function() {
            $('.btn-success').removeAttr('disabled').text('Сохранить');
        },

        // Проверяем можно ли сохранить материал + отсылаем html
        canSaveItem: function(table) {
            if ( ! editor.getData()) {
                $('.editorfail').show().delay(3000).hide(100);
            } else {
                $('#content').empty().val(editor.getData());
                req.add(table);
            }
        },

        // Проверяем можно ли отредактировать материал + отсылаем html
        canEditItem: function(table) {
            if ( ! editor.getData()) {
                $('.editorfail').show().delay(3000).hide(100);
            } else {
                $('#content').empty().val(editor.getData());
                req.edit(table);
            }
        },

        // Показываем иконку загрузки
        showLoader: function () {
            var loader = '<div id="floatingBarsG">' +
                            '<div class="blockG" id="rotateG_01"></div>' +
                            '<div class="blockG" id="rotateG_02"></div>' +
                            '<div class="blockG" id="rotateG_03"></div>' +
                            '<div class="blockG" id="rotateG_04"></div>' +
                            '<div class="blockG" id="rotateG_05"></div>' +
                            '<div class="blockG" id="rotateG_06"></div>' +
                            '<div class="blockG" id="rotateG_07"></div>' +
                            '<div class="blockG" id="rotateG_08"></div>' +
                         '</div>';

            $('.main').html(loader);
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