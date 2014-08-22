define([ 'backbone' ], function(Backbone) {
	return Backbone.Model.extend({
		url : API_URL + '/user',
		defaults : {
			id : "",
			email : "",
		},
		parse: function(d){
			if(d.result != undefined && d.data != undefined)
				return d.data;
			return d;
		}
	})
});
