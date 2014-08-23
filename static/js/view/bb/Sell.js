define([ 'backbone', 'text!tpl/sell.html', 'model/Book', 'model/Sell', 'model/User' ],
		function(Backbone, tpl, mBook, mSell, mUser) {
			return Backbone.View.extend({
				tagName : "div",
				template : _.template(tpl),
				render : function() {
					var user = new mUser();
					user.fetch({
						data : {
							id : this.model.get("seller_id"),
						},
						async : false
					});
					var book = new mBook();
					book.fetch({
						data: {
							q: this.model.get("book_id"),
							type: 'id'
						},
						async : false
					});
					if(!book.get("imgpath")){
						book.set("imgpath", "/static/images/book/defaultbook.png");
					}
					var data = new Object();
					data.book = book.toJSON();
					data.sell = this.model.toJSON();
					data.seller = user.toJSON();
					this.$el.html(this.template(data));
					return this;
				},
				initialize : function() {
					this.listenTo(this.model, 'change', this.render);
				}
			})
		});
