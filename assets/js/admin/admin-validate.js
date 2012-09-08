valid = {
    // Правила валидации настроек
    validOptions: function (formname, onclick) {
        $(formname).validate({
            onfocusout: function(element) {
                if ($(element).valid()) {
                    binds.canSave(onclick);
                } else {
                    binds.validFail();
                }
            },
            rules: {sitename: "required"},
            messages: {sitename: 'Пожалуйста заполните поле'}
        });
    },

    // Правила валидации формы добавления страницы
    validPages: function (formname, onclick) {
        binds.validFail();
        var editPageName = $('#pagename').val();
        var editPageAlias = $('#alias').val();
        $(formname).validate({
            onfocusout: function(element) {
                if ($(element).attr('id') === 'pagename') {
                    (editPageName !== $('#pagename').val()) ? req.checkPageName() : $('.failpagename').empty();
                }
                if ($(element).attr('id') === 'alias') {
                    (editPageAlias !== $('#alias').val()) ? req.checkPageAlias() : $('.failalias').empty();
                }
                if ($(element).valid() && !$('.failpagename').text() && !$('.failalias').text() && $(formname).valid()) {
                    binds.canSave(onclick);
                } else {
                    binds.validFail();
                }
            },
            rules: {
                pagename: "required",
                alias: {
                    required: true,
                    alphanumeric: true
                }
            },
            messages: {
                pagename: 'Пожалуйста введите заголовок страницы',
                alias: {
                    required: 'Пожалуйста введите алиас страницы'
                }
            }
        });
    },

    // Правила валидации формы добавления каталога
    validCatalog: function (formname, onclick) {
        binds.validFail();
        var editCatName = $('#catname').val();
        var editCatAlias = $('#alias').val();
        $(formname).validate({
            onfocusout: function(element) {
                if ($(element).attr('id') === 'catname') {
                    (editCatName !== $('#catname').val()) ? req.checkCatName() : $('.failcatname').empty();
                }
                if ($(element).attr('id') === 'alias') {
                    (editCatAlias !== $('#alias').val()) ? req.checkCatAlias() : $('.failalias').empty();
                }
                if ($(element).valid() && !$('.failcatname').text() && !$('.failalias').text() && $(formname).valid()) {
                    binds.canSave(onclick);
                } else {
                    binds.validFail();
                }
            },
            rules: {
                catname: "required",
                alias: {
                    required: true,
                    alphanumeric: true
                }
            },
            messages: {
                catname: 'Пожалуйста введите название каталога',
                alias: {
                    required: 'Пожалуйста введите алиас каталога',
                }
            }
        });

    },

    // Правила валидации формы добавления модуля
    validModule: function (formname, onclick) {
        binds.validFail();
        var editModName = $('#name').val();
        var editSystemName = $('#systemname').val();
        $(formname).validate({
            onfocusout: function(element) {
                if ($(element).attr('id') === 'name') {
                    (editModName !== $('#name').val()) ? req.checkModuleName() : $('.failmodname').empty();
                }
                if ($(element).attr('id') === 'systemname') {
                    (editSystemName !== $('#systemname').val()) ? req.checkSystemName() : $('.failsystemname').empty();
                }
                if ($(element).valid() && !$('.failmodname').text() && !$('.failsystemname').text() && $(formname).valid()) {
                    binds.canSave(onclick);
                } else {
                    binds.validFail();
                }
            },
            rules: {
                name: "required",
                systemname: {
                    required: true,
                    alphanumeric: true
                }
            },
            messages: {
                name: "Введите название модуля",
                systemname: {
                    required: 'Пожалуйста введите системное имя модуля (например menu)'
                }
            }
        });
    },

    // Правила валидации формы добавления пользователя
    validUser: function (formname, onclick) {
        binds.validFail();
        var editUserName = $('#username').val();
        var editEmail = $('#email').val();
        $(formname).validate({
            onfocusout: function(element) {
                if ($(element).attr('id') === 'username') {
                    (editUserName !== $('#username').val()) ? req.checkLogin() : $('.failusername').empty();
                }
                if ($(element).attr('id') === 'email') {
                    (editEmail !== $('#email').val()) ? req.checkEmail() : $('.failemail').empty();
                }
                if ($(element).valid() && $(formname).valid() && !$('.failusername').text() && !$('.failemail').text()) {
                    binds.canSave(onclick);
                } else {
                    binds.validFail();
                }
            },
            rules: {
                username: {
                    required: true,
                    alphanumeric: true,
                    minlength: 3
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 8
                },
                password_confirm: {
                    required: true,
                    equalTo: '#password'
                }
            },
            messages: {
                username: {
                    required: 'Пожалуйста введите логин',
                    minlength: 'Логин должен быть минимум 3 символа'
                },
                email: {
                    required: 'Пожалуйста введите email',
                    email: 'Email должен быть валидным'
                },
                password: {
                    required: "Пожалуйста введите пароль",
                    minlength: 'Пароль должен быть минимум 8 символов'
                },
                password_confirm: {
                    required: "Пожалуйста повторите пароль",
                    equalTo: "Пожалуйста повторите пароль"
                }
            }
        });
    },

    // Правила валидации формы добавления роли
    validRole: function (formname, onclick) {
        binds.validFail();
        var editRoleName = $('#name').val();
        $(formname).validate({
            onfocusout: function(element) {
                if ($(element).attr('id') === 'name') {
                    (editRoleName !== $('#name').val()) ? req.checkRoleName() : $('.failrole').empty();
                }
                if ($(element).valid() && !$('.failrole').text() && $(formname).valid()) {
                    binds.canSave(onclick);
                } else {
                    binds.validFail();
                }
            },
            rules: {
                name: {
                    required: true,
                    alphanumeric: true,
                    minlength: 4
                },
                description: "required"
            },
            messages: {
                name: {
                    required: 'Пожалуйста введите название роли (например admin)',
                    minlength: 'Название роли должно быть минимум 4 символа'
                },
                description: 'Пожалуйста введите описание роли (например Администратор)'
            }
        });
        $('input[type=radio], select').live('change', function() {
            if ( $(formname).valid() && !$('.failrole').text()) binds.canSave(onclick);
        });
    },

    // Правила валидации формы отправки емейла
    validSendEmail: function (formname, onclick) {
        binds.validFail();
        $(formname).validate({
            onfocusout: function(element) {
                if ($(formname).valid() && $(element).valid() && $(formname).valid()) {
                    binds.canSend(onclick);
                } else {
                    binds.validFail();
                }
            },
            rules: {
                subject: "required"
            },
            messages: {
                subject: "Пожалуйста введите тему"
            }
        });
    }
};