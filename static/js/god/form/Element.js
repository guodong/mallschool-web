define(function(){
	var Element = function(args){
		var self = this;
		this.regex = '';
		this.name = '';
		this.value = '';
		for(var i in args){
			eval("this."+i+' = args[i]');
		}
		
		self.dom = $("#"+this.formId+" [name="+self.name+"]");
		self.invalidMessage = self.dom.attr("invalidMessage");
		self.value = self.dom.val();
		self.regex = self.dom.attr("regex");
		self.required = self.dom.attr("required")=="required"?true:false;
	};
	Element.prototype = {
		required: false,
		invalidMessage: '',
		isValid: function(){
			var self = this;
			var valid = true;
			if(self.required){
				var v = self.value;
				if(v.trim() === ''){
					valid = false;
				}
			}
			if(self.regex){
				var reg = new RegExp(this.regex);
				valid = reg.test(this.value);
			}
			if(!valid){
				self.invalidCallback(this);
			}else{
				self.validCallback(this);
			}
			return valid;
		},
		invalidCallback: function(elem){},
		validCallback: function(elem){	}
	};
	return Element;
});