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
                if ( $(element).valid() && $(formname).valid() && !$('.failpagename').text() && !$('.failalias').text() ) {
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
                    required: 'Пожалуйста введите алиас страницы',
                    alphanumeric: 'Допустимы только латинские символы и цифры'
                }
            }
        });
        $("#pagename").bind('focusout', req.checkPageName);
        $("#alias").bind('focusout', req.checkPageAlias);
    },

    // Правила валидации формы добавления каталога
    validCatalog: function (formname, onclick) {
        binds.validFail();
        $(formname).validate({
            onfocusout: function(element) {
                if ( $(element).valid() && $(formname).valid() && !$('.failcatname').text() && !$('.failalias').text() ) {
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
                    alphanumeric: 'Допустимы только латинские символы и цифры'
                }
            }
        });
        $("#catname").bind('focusout', req.checkCatName);
        $("#alias").bind('focusout', req.checkCatAlias);
    },

    // Правила валидации формы добавления модуля
    validModule: function (formname, onclick) {
        binds.validFail();
        $(formname).validate({
            onfocusout: function(element) {
                if ($(element).valid() && $(formname).valid() && !$('.failmodname').text() && !$('.failsystemname').text()) {
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
                    required: 'Пожалуйста введите системное имя модуля (например menu)',
                    alphanumeric: 'Допустимы только латинские символы и цифры'
                }
            }
        });
        $('#name').bind('focusout', req.checkModuleName);
        $('#systemname').bind('focusout', req.checkSystemName);
    },

    // Правила валидации формы добавления пользователя
    validUser: function (formname, onclick) {
        binds.validFail();
        $(formname).validate({
            onfocusout: function(element) {
                if ($(formname).valid() && $(element).valid() && !$('.failusername').text() && !$('.failemail').text()) {
                    binds.canSave(onclick);
                } else {
                    binds.validFail();
                }
            },
            rules: {
                username: {
                    required: true,
                    lettersonly: true
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
                    lettersonly: 'Допустимы только латинские символы'
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
        $('#username').bind('focusout', req.checkLogin);
        $('#email').bind('focusout', req.checkEmail);
    },

    // Правила валидации формы добавления роли
    validRole: function (formname, onclick) {
        binds.validFail();
        $(formname).validate({
            onfocusout: function(element) {
                if ( $(formname).valid() && $(element).valid() ) {
                    binds.canSave(onclick);
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
                    alphanumeric: 'Допустимы только латинские символы и цифры',
                    minlength: 'Название роли должно быть минимум 4 символа'
                },
                description: 'Пожалуйста введите описание роли (например Администратор)'
            }
        });
        $('#name').bind('focusout', req.checkRoleName);
        $('input[type=radio], select').live('change', function() {
            if ( $(formname).valid() && !$('.failrole').text() )
            {
                binds.canSave(onclick);
            }
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