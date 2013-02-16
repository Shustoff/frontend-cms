/* Вид главной страницы */
define([
    'Marionette',
    'Handlebars',
    'text!../../templates/blocks/main.hbs',
    'config'
], function(Marionette, Handlebars, MainPageTemplate) {
    return Frontend.Views.MainPageView = Backbone.Marionette.CompositeView.extend({

        initialize: function() {
            this.render();
            this.delegateEvents(this.event);
        },

        ui: {
            searchPage: '#searchPage',
            searchCatalog: '#searchCatalog',
            searchUser: '#searchUser',
            searchModule: '#searchModule'
        },

        events: {
            'click #searchPageBtn': 'searchPage',
            'click #searchCatalogBtn': 'searchCatalog',
            'click #searchUserBtn': 'searchUser',
            'click #searchModuleBtn': 'searchModule'
        },

        template: Handlebars.compile(MainPageTemplate),

        render: function() {
            this.$el.html( this.template( this.model.toJSON() ) );
            $('.main').html( this.el );
            return this;
        },

        searchPage: function() {
            var searchPageName = $( this.ui.searchPage ).val();
            if (searchPageName) {
                Frontend.Router.navigate('/pages/search/' + searchPageName, true);
            } else {
                Frontend.Router.navigate('/pages', true);
            }
        },

        searchCatalog: function() {
            var searchCatName = $( this.ui.searchCatalog ).val();
            if (searchCatName) {
                Frontend.Router.navigate('/catalogs/search/' + searchCatName, true);
            } else {
                Frontend.Router.navigate('/catalogs', true);
            }
        },

        searchUser: function() {
            var searchUserName = $( this.ui.searchUser ).val();
            if (searchUserName) {
                Frontend.Router.navigate('/users/search/' + searchUserName, true);
            } else {
                Frontend.Router.navigate('/users', true);
            }
        },

        searchModule: function() {
            var searchModName = $( this.ui.searchModule ).val();
            if (searchModName) {
                Frontend.Router.navigate('/modules/search/' + searchModName, true);
            } else {
                Frontend.Router.navigate('/modules', true);
            }
        }

    });
});