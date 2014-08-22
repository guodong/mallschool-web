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