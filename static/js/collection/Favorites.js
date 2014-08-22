define([ 'backbone', 'model/Favorite' ], function(Backbone, Favorite) {
	return Backbone.Collection.extend({
		model: Favorite,
		url: API_URL+'/user/favorites'
	})
});
