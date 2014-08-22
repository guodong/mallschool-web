define([ 'backbone' ], function(Backbone) {
	return Backbone.Model.extend({
		defaults : function() {
			return {
				title : "empty todo...",
				done : false
			};
		}
	})
});
