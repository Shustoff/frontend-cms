/**
 * Created by JetBrains PhpStorm.
 * User: dima
 * Date: 02.08.12
 * Time: 14:24
 * To change this template use File | Settings | File Templates.
 */
var Page = Backbone.Model.extend({

    defaults : {
        'pagename' : 'Пустая страница',
        'alias' : 'blank-page',
        'metadesc' : 'Мета-описание пустой страницы',
        'metakeywords' : 'Ключевые слова пустой страницы',
        'content' : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis elit sed augue mollis auctor. Vivamus tincidunt egestas erat, et imperdiet leo tempus quis. Donec fringilla est tellus, nec tempus sapien. Vestibulum eu lacinia nulla. Sed tristique pellentesque laoreet.',
        'catalog_id' : 0,
        'author_id' : 1,
        'date' : 2012-06-08,
        'status' : 1,
        'intrash' : 0
    },

    initialize : function () {
        alert('Модель создана !');
    },

    validate : function (attrs) {
        if (attrs.author_id < 1) {
            return 'ID автора не может быть нулевым';
        }
    }

});