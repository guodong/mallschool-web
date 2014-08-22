require.config({
	paths : {
		jquery : '/static/js/jquery',
		backbone: '/static/js/backbone-min',
		underscore: '/static/js/underscore-min'
	},
	shim : {
		'backbone' : {
			deps : [ 'underscore' ],
			exports : 'Backbone'
		}
	}
});
require([ 'backbone'], function(B) {
	/**
	 * Model,Collection冗余处理
	 * backbone必须第一个require，覆盖prototype
	 */
//	B.Model.prototype.parse = function(d){
//		return d.data;
//	};
//	B.Collection.prototype.parse = function(d){
//		return d.data;
//	};
//	B.Model.prototype.url = function(url){
//		return API_URL + this.api;
//	};
});