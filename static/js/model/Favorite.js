define([ 'backbone' ], function(Backbone) {
	return Backbone.Model.extend({
		url: API_URL+'/user/favorite',
		defaults : {
			id : "",
			user_id : '',
			sell_id : ''
		}
	})
});
