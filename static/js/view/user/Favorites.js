define(
		[ 'backbone', 'model/Book', 'collection/Favorites',
				'view/user/Favorite', 'model/Sell' ], function(Backbone, mBook, cFavorates,
				vFavorite, mSell) {
			return Backbone.View.extend({
				addOne : function(fav) {
					var view = new vFavorite({
						model : fav
					});
					$("#fav-list").append(view.render().el);
				},
				initialize : function() {
					var favs = new cFavorates();
					this.listenTo(favs, 'add', this.addOne);
					favs.fetch({
						data : {
							user_id : "123456789012345678901234"
						},
						async: false
					});
				}
			})
		});
