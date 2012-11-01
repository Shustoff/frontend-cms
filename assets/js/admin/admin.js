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
            $(".main").load(baseURL +  table + "/add" + table);
        },

        // Загружает вид для редактирование материала
        editItem: function(table, itemId) {
            binds.showLoader();
            $.post(baseURL + table + "/edit" + table + "/" + itemId, $('#pageId').serialize(), function() {
                $(".main").empty().load(baseURL + table + "/edit" + table + "/" + itemId);
            });
        },

        // Вид отправки сообщений
        email: function() {
            binds.showLoader();
            $(".main").load(baseURL + "email");
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
                } else {
                    $('#deleteAll').click(function(){
                       $("#dialog-confirm").dialog({
                           resizable: false,
                           height:180,
                           modal: true,
                           buttons: {
                               "Очистить": function() {
                                   req.deleteAll();
                                   $( this ).dialog( "close" );
                               },
                               "Отмена": function() {
                                   $( this ).dialog( "close" );
                               }
                           }
                       });
                   });
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
                $('.alert-success').show().delay(3000).hide(100);
            });
        },

        // Опубликовать
        on: function(table, that) {
            globalTable = table;
            var pageId =  $(that).parents('tr').find('#pageId');
            $.post(baseURL + table + "/on", $(pageId).serialize(), function(){
                $(that).replaceWith(
                    "<a href='#' onclick='req.off(globalTable, this); return false;'><img src='assets/img/admin/published.png'></a>"
                );
            });
        },

        // Не опубликовать
        off: function(table, that) {
            globalTable = table;
            var pageId =  $(that).parents('tr').find('#pageId');
            $.post(baseURL + table + "/off", $(pageId).serialize(), function(){
                $(that).replaceWith(
                    "<a href='#' onclick='req.on(globalTable, this); return false;'><img src='assets/img/admin/not-published.png'></a>"
                );
            });
        },

        // Добавить в корзину
        intrash: function(table, that) {
            var pageId =  $(that).parents('tr').find('#pageId');
            $.post(baseURL + table + "/intrash", $(pageId).serialize(), function(){
                $(that).parents('tr').fadeOut(300);
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

            $.post(baseURL + table, $("#sort").serialize(), function(data) {
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
            // Запоминаем выбранное поле селекта
            var $select1 = $('#select1 option:selected');
            var $select2 = $('#select2 option:selected');
            localStorage.setItem('selfpage', '.' + $(selfpage).attr('class'));
            // Сохраняет сортировку между запросами
            var sortby = $select1.text();
            localStorage.setItem('sortby', sortby);
            // Сохраняем кол-во страниц при выводе между запросами
            var limit = $select2.text();
            localStorage.setItem('limit', limit);
            // Номер текущей страницы, начиная с нуля
            var thispage = $(selfpage).text() - 1;
            // Получаем номер откуда начинать вывод страниц
            var offset = thispage * parseInt( $select2.text() );

            $.post(baseURL + table, {offset: offset, sortby: $select1.val(), limit: localStorage.getItem('limit')},
                function(data) {
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
                    // Устанавливаем класс активной страницы
                    $(localStorage.getItem('selfpage')).addClass('hovered');
                }
            );
        },

        // Восстановление из корзины
        recovery:  function(that) {
            var pageId =  $(that).parents('tr').find('#pageId').val();
            var tableName = $(that).parents('tr').find('#tableName').val();
            $.post(baseURL + "trash/recovery", {id: pageId, tablename: tableName}, function(){
                $(that).parents('tr').fadeOut(300);
            });
        },

        // Удаление из корзины
        deleteItem: function(that) {
            var pageId =  $(that).parents('tr').find('#pageId').val();
            var tableName = $(that).parents('tr').find('#tableName').val();
            $.post(baseURL + "trash/delete", {id: pageId, tablename: tableName}, function(){
                $(that).parents('tr').fadeOut(300);
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
            var alertDanger = $('.alert-danger'),
                alertDangerSpan = $('.alert-danger span'),
                alertSuccess = $('.alert-success'),
                btnSuccess = $('.btn-success');

            $.post(baseURL + table + "/add", $('#additem').serialize(), function(data) {
                // Если что-то пришло с сервера и оно не айди добавленного материала
                if (( data !== '' ) && ( typeof( parseInt(data) ) !== 'number' )) {
                    // Показываем ошибки
                    alertDangerSpan.html(data);
                    alertDanger.show().delay(3000).hide(100);
                } else {
                    // Показываем success!
                    $('#idItem').val(data);
                    alertSuccess.show().delay(3000).hide(100);
                    // Меняем онклик для дальнейшего редактирования
                    if (table === 'users' || table === 'roles') {
                        btnSuccess.attr('onclick', "req.edit('" + table + "');");
                    } else {
                        btnSuccess.attr("onclick", "binds.checkContent('" + table + "');");
                    }
                    // Меняем форму для редактирования
                    $('form').attr('id', 'edititem');
                }
            });
        },

        // Обновляем материал
        edit: function (table) {
            $.post(baseURL + table + "/edit", $("#edititem").serialize(), function(data) {
                if (data !== '') {
                    $('.alert-danger span').html(data);
                    $('.alert-danger').show().delay(3000).hide(100);
                } else {
                    $('.alert-success').show().delay(3000).hide(100);
                }
            });
        },

        // Проверяем уникальность названия страницы
        checkPageName: function() {
            var isValid, parentForm = $('#pagename').parents('form');
            $.ajax({
                async: false,
                type: 'POST',
                url: baseURL + "pages/checkpagename",
                data: $(parentForm).serialize(),
                success: function(data) {
                    $('.failpagename').text(data);
                    data ? isValid = false : isValid = true;
                }
            });
            return isValid;
        },

        // Проверяем уникальность алиаса страницы
        checkPageAlias: function() {
            var isValid, parentForm = $('#alias').parents('form');
            $.ajax({
                async: false,
                type: 'POST',
                url: baseURL + "pages/checkalias",
                data: $(parentForm).serialize(),
                success: function(data) {
                    $('.failalias').text(data);
                    data ? isValid = false : isValid = true;
                }
            });
            return isValid;
        },

        // Проверяем уникальность названия каталога
        checkCatName: function() {
            var isValid, parentForm = $('#alias').parents('form');
            $.ajax({
                async: false,
                type: 'POST',
                url: baseURL + "catalogs/checkcatname",
                data: $(parentForm).serialize(),
                success: function(data) {
                    $('.failcatname').text(data);
                    data ? isValid = false : isValid = true;
                }
            });
            return isValid;
        },

        // Проверяем уникальность алиаса каталога
        checkCatAlias: function() {
            var isValid, parentForm = $('#alias').parents('form');
            $.ajax({
               async: false,
               type: 'POST',
               url: baseURL + "catalogs/checkalias",
               data: $(parentForm).serialize(),
               success: function(data) {
                   $('.failalias').text(data);
                   data ? isValid = false : isValid = true;
               }
            });
            return isValid;
        },

        // Проверяем уникальность названия модуля
        checkModuleName: function() {
            var isValid, parentForm = $('#name').parents('form');
            $.ajax({
               async: false,
               type: 'POST',
               url: baseURL + "modules/checkmodname",
               data: $(parentForm).serialize(),
               success: function(data) {
                   $('.failmodname').text(data);
                   data ? isValid = false : isValid = true;
               }
            });
            return isValid;
        },

        // Проверяем уникальность системного имя модуля
        checkSystemName: function() {
            var isValid, parentForm = $('#systemname').parents('form');
            $.ajax({
                async: false,
                type: 'POST',
                url: baseURL + "modules/checksysname",
                data: $(parentForm).serialize(),
                success: function(data) {
                    $('.failsystemname').text(data);
                    data ? isValid = false : isValid = true;
                }
            });
            return isValid;
        },

        // Проверяем уникальность логина
        checkLogin: function() {
            var isValid, parentForm = $('#username').parents('form');
            $.ajax({
                async: false,
                type: 'POST',
                url: baseURL + "users/checklogin",
                data: $(parentForm).serialize(),
                success: function(data) {
                    $('.failusername').text(data);
                    data ? isValid = false : isValid = true;
                }
            });
            return isValid;
        },

        // Проверяем уникальность емейла
        checkEmail: function() {
            var isValid, parentForm = $('#email').parents('form');
            $.ajax({
                async: false,
                type: 'POST',
                url: baseURL + "users/checkemail",
                data: $(parentForm).serialize(),
                success: function(data) {
                    $('.failemail').text(data);
                    data ? isValid = false : isValid = true;
                }
            });
            return isValid;
        },

        // Проверяем уникальность названия роли
        checkRoleName: function() {
            var isValid, parentForm = $('#name').parents('form');
            $.ajax({
               async: false,
               type: 'POST',
               url: baseURL + "roles/checkrole",
               data: $(parentForm).serialize(),
               success: function(data) {
                   $('.failrole').text(data);
                   data ? isValid = false : isValid = true;
               }
            });
            return isValid;
        },

        // Отправляем сообщение
        sendEmail: function() {
            if ( ! editor.getData()) {
                $('.editorfail').show().delay(3000).hide(100);
            } else {
                $('#content').val(editor.getData());
                $('#sendemailbtn')
                    .text('Сообщение отправляется...')
                    .attr('disabled', 'disabled')
                    .removeClass('btn-email')
                    .removeAttr('data-bind');

                $.post(baseURL + "email/send", $('#email').serialize(), function() {
                    $('#sendemailbtn').text('Сообщение отправлено!');
                });
            }
        },

        // Метод загрузки изображений
        upload: function() {
            new AjaxUpload('upload_button', {
                action: 'admin/pages/upload',
                name: 'image',
                autoSubmit: true,
                responseType: false,
                onSubmit: function(file, ext) {
                    if (!(ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
                        alert('Разрешены только изображения в формате jpg, png, gif');
                        return false;
                    }
                },
                onComplete: function(file, response) {
                    this.disable();
                    $('.imageName').text(response);
                    $('#imagePage').val(response);
                    if (pageModel.isValid() || catModel.isValid() || modModel.isValid()) {
                        $('.btn-success').removeAttr('disabled');
                    }
                }
            });
        }
    };

    // Биндим события на элементы формы и методы проверки
    binds = {
        // Проверяем можно ли сохранить материал + отсылаем html
        checkContent: function(table) {
            if ( ! editor.getData()) {
                $('.editorfail').show().delay(3000).hide(100);
            } else {
                $('#content').empty().val( editor.getData() );
                var idThisForm = $('form').attr('id');
                (idThisForm === 'edititem') ? req.edit(table) : req.add(table);
            }
        },

        // Показываем сообщение удаления
        completeDelete : function () {
            $('.tooltips').show(100).delay(3000).hide(100);
        },

        // Делаем кнопку неактивной после сохранения
        clickDisableButton: function() {
            $(document).on('click', '.btn-success', function() {
                $(this).attr('disabled', 'disabled');
            });
        },

        // Вставляем редактор
        initEditor: function() {
            if (CKEDITOR.instances.editor) {
                CKEDITOR.instances.editor.destroy(true);
            }
            editor = CKEDITOR.replace('editor');
            editor.on('key', function() {
                if (typeof pageModel !== 'undefined') {
                    if (pageModel.isValid()) $('.btn-page').removeAttr('disabled');
                }
                if (typeof catModel !== 'undefined') {
                    if (catModel.isValid()) $('.btn-cat').removeAttr('disabled');
                }
                if (typeof modModel !== 'undefined') {
                    if (modModel.isValid()) $('.btn-mod').removeAttr('disabled');
                }
                if (typeof emailModel !== 'undefined') {
                    if (emailModel.isValid()) $('.btn-email').removeAttr('disabled');
                }
            });
        },

        // Показываем загрузчик
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
    };

});