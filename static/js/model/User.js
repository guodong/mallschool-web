define([ 'backbone' ], function(Backbone) {
	return Backbone.Model.extend({
		url : API_URL + '/user',
		defaults : {
			id : "",
			email : "",
		},
		parse: function(d){
			return d.data;
		}
	})
});