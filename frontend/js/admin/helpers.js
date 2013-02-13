define(['Handlebars'], function(Handlebars) {

    /*** Хелперы Handlebars ***/
    Handlebars.registerHelper('indexFollow', function(robots) {
        if (robots === 'index,follow')
            return 'selected';
    });

    Handlebars.registerHelper('indexNoFollow', function(robots) {
        if (robots === 'index,nofollow')
            return 'selected';
    });

    Handlebars.registerHelper('noIndexFollow', function(robots) {
        if (robots === 'noindex,follow')
            return 'selected';
    });

    Handlebars.registerHelper('noIndexNoFollow', function(robots) {
        if (robots === 'noindex,nofollow')
            return 'selected';
    });

    Handlebars.registerHelper('siteStatusOn', function(number) {
        if (number === '1')
            return 'checked';
    });

    Handlebars.registerHelper('siteStatusOff', function(number) {
        if (number === '0')
            return 'checked';
    });

    Handlebars.registerHelper('debugOn', function(number) {
        if (number === '1')
            return 'checked';
    });

    Handlebars.registerHelper('debugOff', function(number) {
        if (number === '0')
            return 'checked';
    });

    Handlebars.registerHelper('cacheOn', function(number) {
        if (number === '1')
            return 'checked';
    });

    Handlebars.registerHelper('cacheOff', function(number) {
        if (number === '0')
            return 'checked';
    });

    // Пагинация
    Handlebars.registerHelper('pagination', function(count) {
        var res = '';
        for (var i = 1; i <= count; i++ ) {
           res += "<li><a href='#' class='page" + i + "' data-item='" + i + "'>" + i + "</a></li>";
        }
        return res;
    });

    // Отображение статуса страницы
    Handlebars.registerHelper('statusPage', function(status) {
        var res = '';
        if (status === '1') {
            res += '<img class="unpublish" src="' + Frontend.siteURL + '/frontend/img/admin/published.png">';
        } else {
            res += '<img class="publish" src="' + Frontend.siteURL + '/frontend/img/admin/not-published.png">';
        }
        return res;
    });

    // Отображение текущего каталога страницы
    Handlebars.registerHelper('selectPageCatalog', function(catalogId, page) {
        if (catalogId === page.catalog_id) {
            return 'selected';
        }
    });

    // Отображение родительского каталога в каталогах
    Handlebars.registerHelper('parentCatalog', function(parentCatName) {
        if (parentCatName === null) return 'нет';
        return parentCatName;
    });

    // Отображение родительского каталога при редактировании
    Handlebars.registerHelper('parentCatalogs', function(catalogs, catalog) {
        var res = '';
        _.each(catalogs, function(item) {
            if (item.id === catalog.id) return false;
            if (item.id === catalog.parent_id) {
                res += $('<option>', {value: item.id, selected: 'selected', text: item.catname})[0].outerHTML;
            } else {
                res += $('<option>', {value: item.id, text: item.catname})[0].outerHTML;
            }
        });
        return res;
    });

    // Выделение HTML модуля
    Handlebars.registerHelper('selectHtmlModule', function(type) {
         if (type === 'HTML') return 'selected';
    });

    // Выделение JS модуля
    Handlebars.registerHelper('selectJsModule', function(type) {
         if (type === 'JS') return 'selected';
    });

    // Выделяем роль пользователя
    Handlebars.registerHelper('selectRole', function(roles, userrole) {
        var res = '';
        _.each(roles, function(role) {
            if (role.name === userrole) {
                res += $('<option>', {value: role.name, selected: 'selected', text: role.description})[0].outerHTML;
            } else {
                res += $('<option>', {value: role.name, text: role.description})[0].outerHTML;
            }
        });
        return res;
    });

    Handlebars.registerHelper('pagesOn', function(pages) {
        if (pages === '1') return 'checked';
    });

    Handlebars.registerHelper('pagesOff', function(pages) {
        if (pages === '0') return 'checked';
    });

    Handlebars.registerHelper('catsOn', function(cats) {
        if (cats === '1') return 'checked';
    });

    Handlebars.registerHelper('catsOff', function(cats) {
        if (cats === '0') return 'checked';
    });

    Handlebars.registerHelper('usersOn', function(users) {
        if (users === '1') return 'checked';
    });

    Handlebars.registerHelper('usersOff', function(users) {
        if (users === '0') return 'checked';
    });

    Handlebars.registerHelper('modsOn', function(mods) {
        if (mods === '1') return 'checked';
    });

    Handlebars.registerHelper('modsOff', function(mods) {
        if (mods === '0') return 'checked';
    });

    Handlebars.registerHelper('mailsOn', function(mails) {
        if (mails === '1') return 'checked';
    });

    Handlebars.registerHelper('mailsOff', function(mails) {
        if (mails === '0') return 'checked';
    });

    Handlebars.registerHelper('statsOn', function(stats) {
        if (stats === '1') return 'checked';
    });

    Handlebars.registerHelper('statsOff', function(stats) {
        if (stats === '0') return 'checked';
    });

    Handlebars.registerHelper('optsOn', function(opts) {
        if (opts === '1') return 'checked';
    });

    Handlebars.registerHelper('optsOff', function(opts) {
        if (opts === '0') return 'checked';
    });

    Handlebars.registerHelper('trashOn', function(trash) {
        if (trash === '1') return 'checked';
    });

    Handlebars.registerHelper('trashOff', function(trash) {
        if (trash === '0') return 'checked';
    });

    Handlebars.registerHelper('printTypeItem', function(type) {
        switch (type) {
            case 'pages':
                return 'Страницы';
                break;
            case 'catalogs':
                return 'Каталоги';
                break;
            case 'modules':
                return 'Модули';
                break;
            case 'users':
                return 'Пользователи';
                break;
            case 'roles':
                return 'Роли';
                break;
        }
    });

    Handlebars.registerHelper('toUsers', function(users, useremail) {
        var res = '';
        _.each(users, function(user) {
            if (user.email === useremail) return false;
            res += $('<option>', {value: user.email, text: user.email})[0].outerHTML;
        });
        return res;
    });


    /*** Кастомные хелперы ***/
    return {

        // Проверка содержимого корзины
        checkEmptyTrash: function() {
            if ( ! $('tbody').has('tr').length) {
                $('#deleteAll, select, .btn').attr('disabled', 'disabled');
            }
        },

        // Метод загрузки изображений
        uploadInit: function(thisView) {
            new AjaxUpload('upload_button', {
                action: 'upload',
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
                    var src = $('.imageName img').attr('src');
                    $('.imageName img').attr('src', src.replace(/([^\/]*)$/, response));
                    if (thisView.pageModel.isValid() || thisView.catModel.isValid() || thisView.moduleModel.isValid()) {
                        $('.btn-success').removeAttr('disabled');
                    }
                }
            });
        },

        // Показываем сообщение удаления
        completeDelete : function () {
            $('.tooltips').show(100).delay(3000).hide(100);
        },

        // Показываем сообщение сохранения
        completeSave: function() {
            $('.alert-success').show(100).delay(3000).hide(100);
            $('.btn-success').attr('disabled', 'disabled');
        },

        // Показываем сообщение ошибки
        errorSave: function() {
            $('.alert-danger').show(100).delay(3000).hide(100);
        },

        // Вставляем редактор
        initEditor: function(thisView) {
            var $savePage = $('#savePage');
            if (CKEDITOR.instances.editor) {
                CKEDITOR.instances.editor.destroy(true);
            }
            editor = CKEDITOR.replace('editor');
            editor.on('key', function() {
                if (typeof thisView.pageModel !== 'undefined') {
                    if (thisView.pageModel.isValid()) $savePage.removeAttr('disabled');
                }
                if (typeof thisView.catModel !== 'undefined') {
                    if (thisView.catModel.isValid()) $savePage.removeAttr('disabled');
                }
                if (typeof thisView.moduleModel !== 'undefined') {
                    if (thisView.moduleModel.isValid()) $savePage.removeAttr('disabled');
                }
                if (typeof thisView.emailModel !== 'undefined') {
                    if (thisView.emailModel.isValid()) $savePage.removeAttr('disabled');
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
        },

        // Вставляем дату в поле дата пикера
        today: function(el) {
            $(el).datepicker();
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