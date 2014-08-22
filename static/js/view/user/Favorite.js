define([ 'backbone', 'text!tpl/favorite.html', 'model/Book', 'model/Sell' ],
		function(Backbone, tpl, mBook, mSell) {
			return Backbone.View.extend({
				tagName : "div",
				template : _.template(tpl),
				render : function() {
					var sell = new mSell();
					sell.fetch({
						data : {
							id : this.model.get("sell_id")
						},
						async : false
					});
					var book = new mBook();
					book.fetch({
						data : {
							q : sell.get("book_id"),
							type : 'id'
						},
						async : false
					});
					var data = new Object();
					data.book = book.toJSON();
					data.sell = sell.toJSON();
					this.$el.html(this.template(data));
					return this;
				},
				initialize : function() {
					this.listenTo(this.model, 'change', this.render);
					this.listenTo(this.model, 'destroy', this.remove);
				},
				events : {
					"click .cancel" : "cancel"
				},
				cancel : function() {
					if(!confirm("确定要删除吗？")){
						return;
					}
					this.model.destroy({
						data : $.param({
							id : this.model.get("id")
						})
					});
				}
			})
		});
