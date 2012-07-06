// Чекаем форму
function checkForm (element, formname, onclick) {
    if ( ! $(element).valid()) {
        binds.validDisable();
    } else {
        if ( $(formname).valid() ) {
            binds.checkValidForm(onclick);
        }
    }
}

// Проверяем валидны ли Настройки
function validOptions() {
    $("#saveoptions").validate({
        onfocusout: function(element) {
            if ( ! $(element).valid()) binds.validDisable();
        },
        rules: {sitename: "required"},
        messages: {sitename: 'Пожалуйста заполните поле'}
    });
}

// Проверяем валидна ли форма добавления страницы
function validPages(formname, onclick) {
    $(formname).validate({
        onfocusout: function(element) {
            checkForm(element, formname, onclick)
        },
        rules: {
            pagename: "required",
            alias: "required"
        },
        messages: {
            pagename: 'Пожалуйста введите название страницы',
            alias: 'Пожалуйста введите алиас страницы'
        }
    });
}

// Проверяем валидна ли форма добавления каталога
function validCatalog(formname, onclick) {
    $(formname).validate({
        onfocusout: function(element) {
            checkForm(element, formname, onclick)
        },
        rules: {
            catname: "required",
            alias: "required"
        },
        messages: {
            catname: 'Пожалуйста введите название категории',
            alias: 'Пожалуйста введите алиас категории'
        }
    });
}

// Проверяем валидна ли форма добавления пользователя
function validUser(formname, onclick) {
    $(formname).validate({
        onfocusout: function(element) {
            checkForm(element, formname, onclick)
        },
        rules: {
            username: "required",
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
            username: 'Пожалуйста введите логин',
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
}

// Проверяем валидна ли форма добавления роли
function validRole(formname, onclick) {
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
}

// Проверяем валидна ли форма добавления модуля
function validModule(formname, onclick) {
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
}

// Проверяем валидна ли форма отправки емейла
function validSendEmail(formname, onclick) {
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
