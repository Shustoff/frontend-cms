valid = {
    // Проверяем форму
    checkForm: function (element, formname, onclick) {
        if ( ! $(element).valid()) {
            binds.validFail();
        } else {
            if ($(formname).valid())  {
                binds.canSave(onclick);
            }
        }
    },

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
        $(formname).validate({
            onfocusout: function(element) {
                valid.checkForm(element, formname, onclick);
            },
            rules: {
                pagename: "required",
                alias: "required"
            },
            messages: {
                pagename: 'Пожалуйста введите заголовок страницы',
                alias: 'Пожалуйста введите алиас страницы'
            }
        });
    },

    // Правила валидации формы добавления каталога
    validCatalog: function (formname, onclick) {
        $(formname).validate({
            onfocusout: function(element) {
                valid.checkForm(element, formname, onclick)
            },
            rules: {
                catname: "required",
                alias: "required"
            },
            messages: {
                catname: 'Пожалуйста введите название каталога',
                alias: 'Пожалуйста введите алиас каталога'
            }
        });
    },

    // Правила валидации формы добавления пользователя
    validUser: function (formname, onclick) {
        $('#username').bind('focusout', req.checkLogin);
        $('#email').bind('focusout', req.checkEmail);

        $(formname).validate({
            onfocusout: function(element) {
                if ( ! $(element).valid()) binds.validFail();
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
    },

    // Правила валидации формы добавления роли
    validRole: function (formname, onclick) {
        $(formname).validate({
            onfocusout: function(element) {
                checkForm(element, formname, onclick)
            },
            rules: {
                name: {
                    required: true,
                    lettersonly: true
                },
                description: "required"
            },
            messages: {
                name: {
                    required: 'Пожалуйста введите название роли (например admin)',
                    lettersonly: 'Допустимы только латинские символы'
                },
                description: 'Пожалуйста введите описание роли (например Администратор)'
            }
        });
    },

    // Правила валидации формы добавления модуля
    validModule: function (formname, onclick) {
        $(formname).validate({
            onfocusout: function(element) {
                checkForm(element, formname, onclick)
            },
            rules: {
                name: "required",
                systemname: {
                    required: true,
                    lettersonly: true
                }
            },
            messages: {
                name: "Введите название модуля",
                systemname: {
                    required: 'Пожалуйста введите описание роли (например Администратор)',
                    lettersonly: 'Допустимы только латинские символы'
                }
            }
        });
    },

    // Правила валидации формы отправки емейла
    validSendEmail: function (formname, onclick) {
        $(formname).validate({
            onfocusout: function(element) {
                checkForm(element, formname, onclick)
            },
            rules: {
                subject: "required"
            },
            messages: {
                subject: "Пожалуйста введите тему"
            }
        });
    }
}