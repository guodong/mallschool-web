define([ 'backbone' ], function(Backbone) {
	return Backbone.Model.extend({
		url : API_URL + '/user',
		defaults : {
			id : "",
			email : "",
			nickname: "",
		},
		parse: function(d){
			if(d.result != undefined && d.data != undefined)
				return d.data;
			return d;
		},
		getFromSession: function(){
			this.fetch({
				url: '/session.php',
				data: {
					action: 'get'
				},
				async: false
			})
		}
	})
});
