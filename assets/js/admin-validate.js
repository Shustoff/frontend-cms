valid = {
    checkForm: function (element, formname, onclick) {
        if ( ! $(element).valid()) {
            binds.validFail();
        } else {
            if ($(formname).valid())  {
                binds.canSave(onclick);
            } else {
                binds.validFail();
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
                alias: {
                    required: true,
                    lettersonly: true
                }
            },
            messages: {
                pagename: 'Пожалуйста введите заголовок страницы',
                alias: {
                    required: 'Пожалуйста введите алиас страницы',
                    lettersonly: ' Допустимы только латинские символы'
                }
            }
        });
    },

    // Правила валидации формы добавления каталога
    validCatalog: function (formname, onclick) {
        $(formname).validate({
            onfocusout: function(element) {
                valid.checkForm(element, formname, onclick);
            },
            rules: {
                catname: "required",
                alias: {
                    required: true,
                    lettersonly: true
                }
            },
            messages: {
                catname: 'Пожалуйста введите название каталога',
                alias: {
                    required: 'Пожалуйста введите алиас каталога',
                    lettersonly: 'Допустимы только латинские символы'
                }
            }
        });
    },

    // Правила валидации формы добавления пользователя
    validUser: function (formname, onclick) {
        $('#username').bind('focusout', req.checkLogin);
        $('#email').bind('focusout', req.checkEmail);
        binds.validFail();
        $(formname).validate({
            onfocusout: function(element) {
                if ( $(formname).valid() && $(element).valid() ) {
                    binds.canSave(onclick);
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
    },

    // Правила валидации формы добавления роли
    validRole: function (formname, onclick) {
        $('input[type=radio], select').live('change', function() {
            if ( $(formname).valid() && $('.failrole').text() == '')
            {
                binds.canSave(onclick);
            }
        });
        $('#name').bind('focusout', req.checkRoleName);
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
                    lettersonly: true,
                    minlength: 4
                },
                description: "required"
            },
            messages: {
                name: {
                    required: 'Пожалуйста введите название роли (например admin)',
                    lettersonly: 'Допустимы только латинские символы',
                    minlength: 'Название роли должно быть минимум 4 символа'
                },
                description: 'Пожалуйста введите описание роли (например Администратор)'
            }
        });
    },

    // Правила валидации формы добавления модуля
    validModule: function (formname, onclick) {
        $('#systemname').bind('focusout', req.checkSystemName);
        binds.validFail();
        $(formname).validate({
            onfocusout: function(element) {
                if ( $(formname).valid() && $(element).valid() ) {
                    binds.canSave(onclick);
                }
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
                    required: 'Пожалуйста введите системное имя модуля (например menu)',
                    lettersonly: 'Допустимы только латинские символы'
                }
            }
        });
    },

    // Правила валидации формы отправки емейла
    validSendEmail: function (formname, onclick) {
        $(formname).validate({
            onfocusout: function(element) {
                if ( $(formname).valid() && $(element).valid() ) {
                    binds.canSave(onclick);
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