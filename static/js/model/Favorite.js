define([ 'backbone' ], function(Backbone) {
	return Backbone.Model.extend({
		defaults : function() {
			return {
				id : "",
				user_id : '',
				sell_id: ''
			};
		}
	})
});
