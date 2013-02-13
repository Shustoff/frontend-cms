/**  Роутер админки **/
define([
    'Backbone',
    'Helpers',

    './views/blocks/main',
    './models/mainPage',

    './views/blocks/settings',
    './models/settings',

    './views/pages/pages',
    './views/pages/addpage',
    './views/pages/editpage',
    './collections/pages',
    './models/page',

    './views/catalogs/catalogs',
    './views/catalogs/addcatalog',
    './views/catalogs/editcatalog',
    './collections/catalogs',
    './models/catalog',

    './views/modules/modules',
    './views/modules/addmodule',
    './views/modules/editmodule',
    './collections/modules',
    './models/module',

    './views/users/users',
    './views/users/adduser',
    './views/users/edituser',
    './collections/users',
    './models/user',

    './views/roles/roles',
    './views/roles/addrole',
    './views/roles/editrole',
    './collections/roles',
    './models/role',

    './views/trash/trash',
    './collections/trash',

    './views/blocks/email',
    './models/email',

    './views/blocks/stats',
    './models/stats'
], function (
    Backbone,
    Helpers,

    MainPageView,
    MainPageModel,

    SettingsView,
    SettingsModel,

    PagesView,
    AddPageView,
    EditPageView,
    PagesCollection,
    PageModel,

    CatalogsView,
    AddCatalogView,
    EditCatalogView,
    CatalogsCollection,
    CatalogModel,

    ModulesView,
    AddModuleView,
    EditModuleView,
    ModulesCollection,
    ModuleModel,

    UsersView,
    AddUserView,
    EditUserView,
    UsersCollection,
    UserModel,

    RolesView,
    AddRoleView,
    EditRoleView,
    RolesCollection,
    RoleModel,

    TrashView,
    TrashCollection,

    EmailView,
    EmailModel,

    StatsView,
    StatsModel
) {
    var AdminRouter = Backbone.Router.extend({
        routes :  {
            // Роут главной страницы
            '': 'mainPage',
            '/': 'mainPage',

            // Роут настроек
            '/settings': 'showSettings',
            'settings': 'showSettings',

            // Роут страниц
            '/pages': 'showPages',
            'pages': 'showPages',
                // Роут добавления страницы
                '/pages/addpage': 'addPage',
                'pages/addpage': 'addPage',
                // Роут поиска страниц
                '/pages/search/:pagename': 'showPages',
                'pages/search/:pagename': 'showPages',
                // Роут редактирования страницы
                '/pages/edit/:alias': 'editPage',
                'pages/edit/:alias': 'editPage',

            // Роут каталогов
            '/catalogs': 'showCatalogs',
            'catalogs': 'showCatalogs',
                // Роут добавления каталога
                '/catalogs/addcatalog': 'addCatalog',
                'catalogs/addcatalog': 'addCatalog',
                // Роут поиска каталогов
                '/catalogs/search/:catname': 'showCatalogs',
                'catalogs/search/:catname': 'showCatalogs',
                // Роут редактирования каталога
                '/catalogs/edit/:alias': 'editCatalog',
                'catalogs/edit/:alias': 'editCatalog',

             // Роут модулей
            '/modules': 'showModules',
            'modules': 'showModules',
                // Роут добавления модуля
                '/modules/addmodule': 'addModule',
                'modules/addmodule': 'addModule',
                // Роут поиска модулей
                '/modules/search/:modname': 'showModules',
                'modules/search/:modname': 'showModules',
                // Роут редактирования модуля
                '/modules/edit/:alias': 'editModule',
                'modules/edit/:alias': 'editModule',

            // Роут пользователей
            '/users': 'showUsers',
            'users': 'showUsers',
                // Роут добавления пользователя
                '/users/adduser': 'addUser',
                'users/adduser': 'addUser',
                // Роут поиска пользователей
                '/users/search/:username': 'showUsers',
                'users/search/:username': 'showUsers',
                // Роут редактирования пользователя
                '/users/edit/:username': 'editUser',
                'users/edit/:username': 'editUser',

            // Роут ролей
            '/roles': 'showRoles',
            'roles': 'showRoles',
                // Роут добавления роли
                '/roles/addrole': 'addRole',
                'roles/addrole': 'addRole',
                // Роут поиска роли
                '/roles/search/:name': 'showRoles',
                'roles/search/:name': 'showRoles',
                // Роут редактирования роли
                '/roles/edit/:alias': 'editRole',
                'roles/edit/:alias': 'editRole',

            // Роут корзины
            '/trash': 'showTrash',
            'trash': 'showTrash',

            // Роут емейла
            '/email': 'showEmail',
            'email': 'showEmail',

            // Роут статистики
            '/stats': 'showStats',
            'stats': 'showStats',

            // Роут информации о php
            '/info': 'showInfo',
            'info': 'showInfo',

            // Все неопределенные роуты - ошибки
            '*actions' : 'page404'
        },

        // Главная страница
        mainPage : function () {
            Helpers.showLoader();
            var mainPage = new MainPageModel();
            mainPage.fetch().done(function() {
                new MainPageView({ model: mainPage });
            });
        },

        // Настройки
        showSettings: function() {
            Helpers.showLoader();
            var settings = new SettingsModel();
            settings.fetch().done(function(){
                new SettingsView({ model: settings });
            });
        },

        // Страницы
        showPages: function(pagename) {
            Helpers.showLoader();
            var pages = new PagesCollection();
            pages.fetch({data: {itemname: pagename || null}}).done(function() {
               new PagesView({ collection: pages});
            });
        },
            // Добавить страницу
            addPage: function() {
                Helpers.showLoader();
                var page = new PageModel();
                page.fetch().done(function() {
                    new AddPageView({ model: page });
                });
            },
            // Редактировать страницу
            editPage: function(alias) {
                Helpers.showLoader();
                var page = new PageModel({ alias: alias });
                page.fetch().done(function() {
                    new EditPageView({ model: page });
                });
            },

        // Каталоги
        showCatalogs: function(catname) {
            Helpers.showLoader();
            var catalogs = new CatalogsCollection();
            catalogs.fetch({data: {itemname: catname || null}}).done(function() {
               new CatalogsView({ collection: catalogs});
            });
        },
            // Добавить каталог
            addCatalog: function() {
                Helpers.showLoader();
                var catalog = new CatalogModel();
                catalog.fetch().done(function() {
                    new AddCatalogView({ model: catalog });
                });
            },
            // Редактировать каталог
            editCatalog: function(alias) {
                Helpers.showLoader();
                var catalog = new CatalogModel({ alias: alias });
                catalog.fetch().done(function() {
                    new EditCatalogView({ model: catalog });
                });
            },

        // Модули
        showModules: function(modname) {
            Helpers.showLoader();
            var modules = new ModulesCollection();
            modules.fetch({data: {itemname: modname || null}}).done(function() {
               new ModulesView({ collection: modules});
            });
        },
            // Добавить модуль
            addModule: function() {
                Helpers.showLoader();
                var module = new ModuleModel();
                module.fetch().done(function() {
                    new AddModuleView({ model: module });
                });
            },
            // Редактировать модуль
            editModule: function(alias) {
                Helpers.showLoader();
                var module = new ModuleModel({ alias: alias });
                module.fetch().done(function() {
                    new EditModuleView({ model: module });
                });
            },

        // Пользователи
        showUsers: function(username) {
            Helpers.showLoader();
            var users = new UsersCollection();
            users.fetch({data: {itemname: username || null}}).done(function() {
                new UsersView({ collection: users});
            });
        },
            // Добавить пользователя
            addUser: function() {
                Helpers.showLoader();
                var user = new UserModel();
                user.fetch().done(function() {
                    new AddUserView({ model: user });
                });
            },
            // Редактировать пользователя
            editUser: function(username) {
                Helpers.showLoader();
                var user = new UserModel({ alias: username });
                user.fetch().done(function() {
                    new EditUserView({ model: user });
                });
            },

        // Роли
        showRoles: function(name) {
            Helpers.showLoader();
            var roles = new RolesCollection();
            roles.fetch({data: {itemname: name || null}}).done(function() {
                new RolesView({ collection: roles});
            });
        },
            // Добавить роль
            addRole: function() {
                Helpers.showLoader();
                var role = new RoleModel();
                role.fetch().done(function() {
                    new AddRoleView({ model: role });
                });
            },
            // Редактировать роль
            editRole: function(name) {
                Helpers.showLoader();
                var role = new RoleModel({ alias: name });
                role.fetch().done(function() {
                    new EditRoleView({ model: role });
                });
            },

        // Корзина
        showTrash: function() {
            Helpers.showLoader();
            var trash = new TrashCollection();
            trash.fetch().done(function() {
                new TrashView({ collection: trash});
            });
        },

        // Email
        showEmail: function() {
            Helpers.showLoader();
            var email = new EmailModel();
            email.fetch().done(function(){
                new EmailView({ model: email });
            });
        },

        // Статистика
        showStats: function() {
            Helpers.showLoader();
            var stats = new StatsModel();
            stats.fetch().done(function(){
                new StatsView({ model: stats });
            });
        },

        // Инфо о php
        showInfo: function() {
            Helpers.showLoader();
            $.post(Frontend.adminURL + '/info', function(data) {
                $('.main').html(data);
            });
        }
    });

    var initialize = function () {
        var admin = new AdminRouter();
        Backbone.history.start({pushState : true, root : Frontend.adminURL });
        return admin;
    };

    return {
        initialize : initialize
    };

});