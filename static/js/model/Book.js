define([ 'backbone' ], function(Backbone) {
	return Backbone.Model.extend({
		url : API_URL + '/book',
		defaults : {
			id : "",
			name : "",
		},
		parse: function(d){
			return d.data;
		}
	})
});
