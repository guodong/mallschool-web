define([ 'backbone', 'text!tpl/favorite.html', 'collection/Sells',
		'model/Sell', 'collection/Books', 'view/bb/Sell' ], function(Backbone, tpl, cSells, mSell,
		cBooks, vSell) {
	var i = 0;
	return Backbone.View.extend({
		addOne : function(sell) {
			var view = new vSell({
				model : sell
			});
			$("#book-list" + i).append(view.render().el);
			i++;
			i = i % 4;
			$("[attr=strlmt]").each(function(){
				var s = $(this).html();
				if(s.length > $(this).attr("max"))
					s = s.substr(0,$(this).attr("max"))+'...';
				$(this).html(s);
			});
			view.$el.find(".togo-icon").click(function(){
				$(this).parents(".media").siblings(".sellerinfo").toggle();
				$(this).toggleClass("glyphicon-chevron-down").toggleClass("glyphicon-chevron-up")
				
			})
		},
		resetAll: function(){
			for(var j = 0; j<4;j++)
				$("#book-list"+j).html("");
			i = 0;
		},
		initialize : function() {
			var sells = new cSells();
			this.listenTo(sells, 'add', this.addOne);
			this.listenTo(sells, 'reset', this.resetAll);
			$("#searchBook").click(function() {
				sells.reset();
				var str = $("#bookISBN").val().replace(/ /g, '#');
				sells.fetch({
					data : $.param({
						type : '123',
						q : str
					}),
					async : false
				})
			});

		}

	})
});
