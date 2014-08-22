define([ 'backbone' ], function(Backbone) {
	return Backbone.Model.extend({
		url : API_URL + '/book',
		defaults : {
			id : "",
			name : "",
		},
		parse: function(d){
			if(d.result != undefined && d.data != undefined)
				return d.data;
			return d;
		}
	})
});
