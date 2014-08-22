define([ 'backbone' ], function(Backbone) {
	return Backbone.Model.extend({
		url : API_URL + '/sell',
		defaults : {
			id : "",
			book_id : "",
			seller_id: '',
			status: 0
		},
		parse: function(d){
			if(d.result != undefined && d.data != undefined)
				return d.data;
			return d;
		}
	})
});
