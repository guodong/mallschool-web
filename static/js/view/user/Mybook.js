define([ 'backbone', 'text!tpl/mybook.html', 'model/Book', 'model/Sell', 'model/User' ],
		function(Backbone, tpl, mBook, mSell, mUser) {
			return Backbone.View.extend({
				tagName : "div",
				template : _.template(tpl),
				render : function() {
					var book = new mBook();
					book.fetch({
						data: {
							q: this.model.get("book_id"),
							type: 'id'
						},
						async : false
					});
					var data = new Object();
					data.book = book.toJSON();
					data.sell = this.model.toJSON();
					this.$el.html(this.template(data));
					return this;
				},
				initialize : function() {
					//this.listenTo(this.model, 'change', this.render);
				}
			})
		});
