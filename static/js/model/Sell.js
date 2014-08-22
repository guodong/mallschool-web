define([ 'backbone' ], function(Backbone) {
	return Backbone.Model.extend({
		url : API_URL + '/sell',
		defaults : {
			id : "",
			book_id : "",
			seller_id: '',
		},
		parse: function(d){
			if(d.result != undefined && d.data != undefined)
				return d.data;
			return d;
		}
	})
});
