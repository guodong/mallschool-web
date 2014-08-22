define([ 'backbone', 'text!tpl/favorite.html', 'collection/Sells',
		'model/Sell', 'collection/Books', 'view/user/Mybook' ], function(Backbone,
		tpl, cSells, mSell, cBooks, vMybook) {

	return Backbone.View.extend({
		addOne : function(sell) {
			var view = new vMybook({
				model : sell
			});
			if (sell.get("status") == 0) {
				$("#selling").append(view.render().el);
			} else {
				$("#selled").append(view.render().el);
			}
			view.$el.find("button").click(function(){
				if(sell.get("status") == 0){
					sell.set("status", 1);
					sell.save();
					view.$el.find("button").html("已出售");
				}else{
					sell.set("status", 0);
					sell.save();
					view.$el.find("button").html("未出售");
				}
			})
		},
		initialize : function() {
			var sells = new cSells();
			this.listenTo(sells, 'add', this.addOne);
			sells.fetch({
				data : $.param({
					type : 'uid',
					q : UID
				}),
				async : false
			})

		}

	})
});
