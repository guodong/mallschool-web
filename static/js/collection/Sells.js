define([ 'backbone', 'model/Sell' ], function(Backbone, mSell) {
	return Backbone.Collection.extend({
		model: mSell,
		url: API_URL+'/sells',
		parse: function(d){
			return d.data;
		},
		
	})
});
