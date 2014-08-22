define([ 'backbone', 'model/Book' ], function(Backbone, mBook) {
	return Backbone.Collection.extend({
		model: mBook,
		url: API_URL+'/book',
		parse: function(d){
			return d.data;
		},
		
	})
});
