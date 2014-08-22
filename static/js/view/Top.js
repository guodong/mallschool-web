define([ 'backbone', 'text!tpl/top.html', 'model/User'],
		function(Backbone, tpl, mUser) {
			return Backbone.View.extend({
				tagName : "div",
				template : _.template(tpl),
				render : function() {
					this.$el.html(this.template(this.user.toJSON()));
					$(".top").html(this.el);
					$("#dropmenu").hover(function(){
						$("#droplist").show();
					},function(){
						$("#droplist").hide();
					})
					if(this.user.get("id")){
						$(".noauth").hide();
						$(".auth").show();
					}else{
						$(".auth").hide();
						$(".noauth").show();
					}
					$("#logout").click(function(){
						$.ajax({
							url: '/session.php',
							success: function(){
								location.href="/";
							}
						})
					})
				},
				initialize : function() {
					this.user = new mUser();
					this.listenTo(this.user, 'change', this.render);
					this.user.getFromSession();
					this.render();
					window.user = this.user;
				}
			})
		});
