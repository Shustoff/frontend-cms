// Правила валидации + привязка биндингов
valid = {
    validOptions: function () {
        var formname = '#' + $('form').attr('id'),
            startSiteName = $('#sitename').val(),
            startSiteDesc = $('#desc').html(),
            startSiteKeywords = $('#keywords').html(),
            startSiteEmail = $('#email').val(),
            startSiteAuthor = $('#sender').val(),
            startSiteCopyright = $('#copyright').html(),
            startSite404 = $('#page404').html(),
            startSiteStatus = $('.siteStatus:checked').val(),
            startSiteProfile = $('.siteProfile:checked').val(),
            startSiteCache = $('.siteCache:checked').val(),
            startSiteSession = $('#session').val();

        $(formname).validate({
            onfocusout: function(element) {
                $(element).valid();
            },
            rules: {sitename: "required"},
            messages: {sitename: 'Пожалуйста введите название сайта'}
        });

        function OptionModel() {
            this.siteName = ko.observable( startSiteName );
            this.siteDesc = ko.observable( startSiteDesc );
            this.siteKeywords = ko.observable( startSiteKeywords );
            this.siteRobots = ko.observable();
            this.siteEmail = ko.observable( startSiteEmail );
            this.siteAuthor = ko.observable( startSiteAuthor );
            this.siteCopyright = ko.observable( startSiteCopyright );
            this.site404 = ko.observable( startSite404 );
            this.siteStatus = ko.observable( startSiteStatus );
            this.siteProfile = ko.observable( startSiteProfile );
            this.siteCache = ko.observable( startSiteCache );
            this.siteSession = ko.observable( startSiteSession );
            this.isValid = ko.computed(function() {
                this.siteDesc();
                this.siteKeywords();
                this.siteRobots();
                this.siteEmail();
                this.siteAuthor();
                this.siteCopyright();
                this.site404();
                this.siteStatus();
                this.siteProfile();
                this.siteCache();
                this.siteSession();
                return this.siteName() && $(formname).valid();
            }, this);
        }
        ko.applyBindings(new OptionModel());

        binds.clickDisableButton();
    },

    validPages: function () {
        var startPageName = $('#pagename').val(),
            startPageAlias = $('#alias').val(),
            startPageMp3 = $('#mp3-link').val(),
            startPageDesc = $('#metadesc').html(),
            startPageKeywords = $('#keywords').html(),
            startPageDate = $('#datepicker').val(),
            startPageCatalog = $('#pagecatalog').val();

        $('form').validate({
            onfocusout: function(element) {
                $(element).valid();
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

        function PageModel() {
            this.pageName = ko.observable( startPageName );
            this.isPageNameValid = ko.computed(function() {
                return this.pageName() &&
                    (this.pageName() !== startPageName
                        ? req.checkPageName()
                        : (function() { $('.failpagename').empty(); return true; }()));
            }, this);
            this.pageAlias = ko.observable( startPageAlias );
            this.isPageAliasValid = ko.computed(function() {
                return this.pageAlias() &&
                    (this.pageAlias() !== startPageAlias
                        ? req.checkPageAlias()
                        : (function() { $('.failalias').empty(); return true; }()));
            }, this);
            this.pageMp3 = ko.observable( startPageMp3 );
            this.pageDesc = ko.observable( startPageDesc );
            this.pageKeywords = ko.observable( startPageKeywords );
            this.pageDate = ko.observable( startPageDate );
            this.pageCat = ko.observable( startPageCatalog );
            this.isValid = ko.computed(function() {
                this.pageMp3();
                this.pageDesc();
                this.pageKeywords();
                this.pageDate();
                this.pageCat();
                return this.isPageNameValid() && this.isPageAliasValid() && $('form').valid();
            }, this);
        }

        pageModel = new PageModel();
        ko.applyBindings(pageModel);
        binds.clickDisableButton();
    },

    validCatalog: function () {
        var startCatName = $('#catname').val(),
            startCatAlias = $('#alias').val(),
            startCatDate = $('#datepicker').val();

        $('form').validate({
            onfocusout: function(element) {
                $(element).valid()
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
                    required: 'Пожалуйста введите алиас каталога'
                }
            }
        });

        function CatModel() {
            this.catName = ko.observable( startCatName );
            this.catAlias = ko.observable( startCatAlias );
            this.isCatNameValid = ko.computed(function() {
                return this.catName() &&
                    (this.catName() !== startCatName
                        ? req.checkCatName()
                        : (function() { $('.failcatname').empty(); return true; }()));
            }, this);
            this.isCatAliasValid = ko.computed(function() {
                return this.catAlias() &&
                    (this.catAlias() !== startCatAlias
                        ? req.checkCatAlias()
                        : (function() { $('.failalias').empty(); return true; }()));
            }, this);
            this.catParent = ko.observable();
            this.catDate = ko.observable( startCatDate );
            this.isValid = ko.computed(function() {
                this.catParent();
                this.catDate();
                return this.isCatNameValid() && this.isCatAliasValid() && $('form').valid();
            }, this);
        }

        catModel = new CatModel();
        ko.applyBindings(catModel);
        binds.clickDisableButton();
    },

    validModule: function () {
        var startModName = $('#name').val(),
            startSysName = $('#systemname').val(),
            startModDate = $('#datepicker').val();

        $('form').validate({
            onfocusout: function(element) {
                $(element).valid();
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

        function ModModel() {
            this.modName = ko.observable( startModName );
            this.modSysName = ko.observable( startSysName );
            this.isModNameValid = ko.computed(function(){
                return this.modName() &&
                    (this.modName() !== startModName
                        ? req.checkModuleName()
                        : (function() { $('.failmodname').empty(); return true; }()));
            }, this);
            this.isModSysNameValid = ko.computed(function() {
                return this.modSysName() &&
                    (this.modSysName() !== startSysName
                        ? req.checkSystemName()
                        : (function() { $('.failsystemname').empty(); return true; }()));
            }, this);
            this.modType = ko.observable();
            this.modDate = ko.observable( startModDate );
            this.isValid = ko.computed(function() {
                this.modType();
                this.modDate();
                return this.isModNameValid() && this.isModSysNameValid() && $('form').valid();
            }, this);
        }

        modModel = new ModModel();
        ko.applyBindings(modModel);
        binds.clickDisableButton();
    },

    validUser: function () {
        var startUserName = $('#username').val(),
            startEmail = $('#email').val(),
            startFirstName = $('#firstname').val(),
            startLastName = $('#surname').val(),
            startDate = $('#datepicker').val();

        $('form').validate({
            onfocusout: function(element) {
                $(element).valid();
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

        function UserModel() {
            this.userName = ko.observable( startUserName );
            this.email = ko.observable( startEmail );
            this.password = ko.observable();
            this.passwordConfirm = ko.observable();
            this.equalsPassword = ko.computed(function() {
                return this.password() === this.passwordConfirm();
            }, this);
            this.isUserNameValid = ko.computed(function() {
                return this.userName() &&
                    (this.userName() !== startUserName
                        ? req.checkLogin()
                        : (function() {$('.failusername').empty(); return true;}()));
            }, this);
            this.isEmailValid = ko.computed(function() {
                return this.email() &&
                    (this.email() !== startEmail
                        ? req.checkEmail()
                        : (function() {$('.failemail').empty(); return true;}()));
            }, this);
            this.userFirstName = ko.observable( startFirstName );
            this.userLastName = ko.observable( startLastName );
            this.userRoleName = ko.observable();
            this.userDate = ko.observable( startDate );
            this.isValid = ko.computed(function() {
                this.userFirstName();
                this.userLastName();
                this.userRoleName();
                this.userDate();
                return this.isUserNameValid() && this.isEmailValid() && this.equalsPassword() && $('form').valid();
            }, this);
        }

        ko.applyBindings(new UserModel());
        binds.clickDisableButton();
    },

    validRole: function () {
        var startRoleName = $('#name').val(),
            startRoleDesc = $('#description').val(),
            startRolePages = $('.rolePages:checked').val(),
            startRoleCats = $('.roleCats:checked').val(),
            startRoleUsers = $('.roleUsers:checked').val(),
            startRoleMods = $('.roleMods:checked').val(),
            startRoleMails = $('.roleMails:checked').val(),
            startRoleStats = $('.roleStats:checked').val(),
            startRoleOpts = $('.roleOpts:checked').val(),
            startRoleTrash = $('.roleTrash:checked').val();

        $('form').validate({
            onfocusout: function(element) {
                $(element).valid();
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

        function RoleModel() {
            this.roleName = ko.observable( startRoleName );
            this.roleDesc = ko.observable( startRoleDesc );
            this.isRoleNameValid = ko.computed(function(){
                return this.roleName() &&
                    (this.roleName() !== startRoleName
                        ? req.checkRoleName()
                        : (function() {$('.failrole').empty(); return true;}()));
            }, this);
            this.rolePages = ko.observable( startRolePages );
            this.roleCats = ko.observable( startRoleCats );
            this.roleUsers = ko.observable( startRoleUsers );
            this.roleMods = ko.observable( startRoleMods );
            this.roleMails = ko.observable( startRoleMails );
            this.roleStats = ko.observable( startRoleStats );
            this.roleOpts = ko.observable( startRoleOpts );
            this.roleTrash = ko.observable( startRoleTrash );
            this.isValid = ko.computed(function() {
                this.rolePages();
                this.roleCats();
                this.roleUsers();
                this.roleMods();
                this.roleMails();
                this.roleStats();
                this.roleOpts();
                this.roleTrash();
                return this.isRoleNameValid() && this.roleDesc() && $('form').valid();
            }, this);
        }

        ko.applyBindings(new RoleModel());
        binds.clickDisableButton();
    },

    validSendEmail: function () {
        $('form').validate({
            onfocusout: function(element) {
                $(element).valid();
            },
            rules: {
                subject: "required"
            },
            messages: {
                subject: "Пожалуйста введите тему"
            }
        });

        function EmailModel() {
            this.subject = ko.observable();
            this.isValid = ko.computed(function() {
                return this.subject() && $('form').valid();
            }, this);
        }

        emailModel = new EmailModel();
        ko.applyBindings(emailModel);
        binds.clickDisableButton();
    }
};