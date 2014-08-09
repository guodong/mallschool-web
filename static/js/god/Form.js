/**
 * @author guodong
 * @email gd@tongjo.com
 */
define(['god/form/Element'], function(Element){

	function serializeObject(form){
		var o = {};
		var a = form.serializeArray();
		$.each(a, function() {
			if (o[this.name] !== undefined) {
				if (!o[this.name].push) {
					o[this.name] = [o[this.name]];
				}
				o[this.name].push(this.value || '');
			} else {
				o[this.name] = this.value || '';
			}
		});
		return o;
	}
	var Form = function(args){
		var self = this;
		this.elements = [];
		this.invalidElements = [];
		for(var i in args){
			eval("this."+i+' = args[i]');
		}
		var form = $("#"+this.id);
		self.form = form;
		form.find("[name]").each(function(){
			var element = new Element({
				name: $(this).attr("name"),
				formId: self.id
			});
			self.elements.push(element);
		});
		for(var i in self.elements){
			self.elements[i].invalidCallback = self.invalidElementCallback;
			self.elements[i].validCallback = self.validElementCallback;
		}
		self.isAjax = form.attr("isAjax")==="true" || false;
		self.url = this.action || form.attr("action");
		form.attr('action', self.url);
		self.method = form.attr("method");
		self.form.find("[type=submit]").click(function(e){
			e.preventDefault();
			if(self.onSubmit()) self.submit(self.submitCallback);
		});
		
	};
	
	Form.prototype = {
		isAjax: false,
		url: '',
		method: 'get',
		isValid: function(){
			var self = this;
			for(var i in self.elements){
				self.elements[i].value = this.elements[i].dom.val();
			}
			this.invalidElements = [];
			var valid = true;
			for(var i in self.elements){
				if(!self.elements[i].isValid()){ //alert(elements[i].getName());
					valid = false;
					self.invalidElements.push(this.elements[i]);
				}
			}
			return valid;
		},
		invalidCallback: function(){},
		invalidElementCallback: function(elem){},
		validElementCallback: function(elem){},
		onSubmit: function(){return true;},
		loadingStart: function(){},
		loadingEnd: function(){},
		submitCallback: function(){},
		submit: function(){
			this.loadingStart();
			var self = this;
			var result = self.onSubmit();
			if(!self.isValid()){
				this.loadingEnd();
				for(var i in this.invalidElements){
					self.invalidCallback(this.invalidElements[i]);
				}
				
				return false;
			}
			if(false === result) {
				this.loadingEnd();
				return;
			}
			if(self.isAjax){
				$.ajax({
					url: self.url,
					type: self.method,
					data: serializeObject(self.form),
					async: false,
					success: function(d){
						self.loadingEnd();
						self.submitCallback(d);
					}
				});
			}else{
				this.form.submit();	
			}
		},
		fill: function(data) {
			for(var i in data){
				for(var j in this.elements){
					if(i == this.elements[j].name){
						this.elements[j].dom.val(data[i]);
					}
				}
			}
		}
	};
	return Form;
});