/**
 * Обертка Backbone для Require.js
 */
<<<<<<< HEAD
define(['libs/backbone/backbone'], function(){return Backbone;});
=======
define(['libs/backbone/backbone'], function(){
  _.noConflict();
  $.noConflict();
  return Backbone.noConflict();
});
>>>>>>> a7804172e69fadd9f9835184fda650d899d2dfff
