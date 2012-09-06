valid = {
    // Правила валидации настроек
    validOptions: function () {
        $("#saveoptions").validate({
            onfocusout: function(element) {
                if ( ! $(element).valid()) binds.validFail();
            },
            rules: {sitename: "required"},
            messages: {sitename: 'Пожалуйста заполните поле'}
        });
    },

    // Правила валидации формы добавления страницы
    validPages: function (formname, onclick) {
        binds.validFail();
        $(formname).validate({
            onfocusout: function(element) {
                if ($(element).attr('id') === 'pagename') req.checkPageName();
                if ($(element).attr('id') === 'alias') req.checkPageAlias();
                if ( $(element).valid() && !$('.failpagename').text() && !$('.failalias').text() ) {
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
        $(formname).validate({
            onfocusout: function(element) {
                if ($(element).attr('id') === 'catname') req.checkCatName();
                if ($(element).attr('id') === 'alias') req.checkCatAlias();
                if ( $(element).valid() && !$('.failcatname').text() && !$('.failalias').text() ) {
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
        // binds.validFail();
        $(formname).validate({
            onfocusout: function(element) {
                if ($(element).attr('id') === 'name') req.checkModuleName();
                if ($(element).attr('id') === 'systemname') req.checkSystemName();
                if ($(element).valid() && !$('.failmodname').text() && !$('.failsystemname').text()) {
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
        $(formname).validate({
            onfocusout: function(element) {
                if ($(element).attr('id') === 'username') req.checkLogin();
                if ($(element).attr('id') === 'email') req.checkEmail();
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
        $(formname).validate({
            onfocusout: function(element) {
                if ( $(element).attr('id') === 'name') req.checkRoleName();
                if ( $(element).valid() && !$('.failrole').text() ) {
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
                if ( $(formname).valid() && $(element).valid() ) {
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