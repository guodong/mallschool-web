/**
 * Godjs: A module loader and a MVC javascript programming framework used for
 * large and modularized web applications
 * 
 * @author guodong
 * @email gd@tongjo.com
 * @see https://github.com/tongjo/god
 * 
 * @notice the loading order is described as follows: 1. execute script in
 *         loading file 2. execute callback such as onload callback and
 *         onreadystatechange callback
 * 
 * the register process is described as follows: 1. create context 2. define the
 * callback that check if module is ready 3. parse and load dependences and bind
 * callbacks 4. register to god.modules
 * 
 * @issues: there still exists some issues to be solved, here list them as
 *          follows: 1. the cycle dependence, optionally you can just use the
 *          god.exe method to call controller's action directly
 */
(function(window) {
	var version = 1;
	var doc = document;
	var head = doc.getElementsByTagName("head")[0];//doc.head;
	var STATUS = {
		DEFINED: 0,
		LOADED: 1,
		COMPLETE: 2
	}
	var basePath = "";
	function loadScript(id, url, callback) {
		var head = document.getElementsByTagName('head')[0];
		tag = document.createElement('script');
		tag.type = 'text/javascript';
		tag.async = false;
		tag.setAttribute('module-id', id);
		if (tag.attachEvent) {
			tag.attachEvent('onreadystatechange', callback);
		} else {
			tag.addEventListener('load', callback, false);
		}
		tag.src = url;
		head.appendChild(tag);
	}
	function getCurrentScript() {
		if (doc.currentScript) { // firefox 4+
			return doc.currentScript.src;
		}
		var stack;
		try {
			a.b.c();
		} catch (e) {
			stack = e.stack;
			if (!stack && window.opera) {
				stack = (String(e).match(/of linked script \S+/g) || [])
						.join(" ");
			}
		}
		if (stack) {
			stack = stack.split(/[@ ]/g).pop();// 取得最后一行,最后一个空格或@之后的部分
			stack = stack[0] == "(" ? stack.slice(1, -1) : stack;
			return stack.replace(/(:\d+)?:\d+$/i, "");// 去掉行号与或许存在的出错字符起始位置
		}
		var nodes = head.getElementsByTagName("script"); // 只在head标签中寻找
		for ( var i = 0, node; node = nodes[i++];) {
			if (node.readyState === "interactive") {
				return node.className = node.src;
			}
		}
	}
	var helper = {

		getCurrentModuleId: function() {
			var src = getCurrentScript();
			var tags = head.getElementsByTagName("script");
			for ( var i in tags) {
				if (tags[i].src == src) {
					return tags[i].getAttribute("module-id");
				}
			}
		},
		loadModule: function(id) {
			var uri, has = false;
			for ( var j in god.paths) {
				if (id.indexOf(j) === 0) {
					var cut = j.length + 1;
					uri = god.paths[j] + id.substr(cut) + '.js';
					has = true;
					break;
				}
			}
			if (!has) {
				uri = god.basePath + id + '.js';
			}
			uri += '?v=' + version + Math.random(0, 9999);
			loadScript(id, uri, function() {

			});
		}
	};
	function each(ary, func) {
		if (ary) {
			var i;
			for (i in ary) {
				if (ary[i] && func(ary[i], i, ary)) {
					break;
				}
			}
		}
	}
	function checkLoop() {
		each(god.modules, function(module, id) {
			if (module.status === STATUS.COMPLETE
					|| module.status === STATUS.DEFINED) {
				return false;
			}
			var ready = true;
			each(module.deps, function(dep) {
				if (god.modules[dep].status !== STATUS.COMPLETE) {
					ready = false;
					return true;
				}
			});
			if (ready) {
				var args = [];
				for ( var k in module.deps) {
					args.push(god.modules[module.deps[k]].content);
				}
				module.content = module.callback.apply(window, args);
				module.status = STATUS.COMPLETE;
				checkLoop();
			}
		});
	}
	function getBasePath() {
		var uri = getCurrentScript();
		var arr = uri.split("god.js");
		return arr[0];
	}
	function God(deps, callback) {

	}
	var seq = 0;
	God.prototype = {
		paths: [],
		appPath: '/',
		basePath: getBasePath(),
		modules: [],
		appConfig: {},
		config: function(obj) {
			this.appPath = obj.appPath ? obj.appPath : '/';
			this.paths = obj.paths ? obj.paths : {};
			this.appConfig = obj.appConfig ? obj.appConfig : {};
		},
		define: function(id, deps, callback) {
			if (arguments.length === 2) {
				if (typeof (id) === "string") {
					callback = deps;
					deps = [];
				} else if (typeof (id) === "object") {
					callback = deps;
					deps = id;
					id = helper.getCurrentModuleId();
				}
			} else if (arguments.length === 1) {
				callback = id;
				deps = [];
				id = helper.getCurrentModuleId();
			}
			console.log('define:' + id);

			this.modules[id].status = STATUS.LOADED;
			this.modules[id].deps = deps;
			this.modules[id].callback = callback;

			for ( var i in deps) {
				if (undefined === this.modules[deps[i]]) {
					this.modules[deps[i]] = {
						status: STATUS.DEFINED,
						deps: [],
						callback: null,
						content: null
					}
					helper.loadModule(deps[i]);
				}
			}
			checkLoop();
		},
		require: function(deps, callback) {
			var module = {
				status: STATUS.DEFINED,
				deps: [],
				callback: null,
				content: null
			};
			var s = seq++;
			this.modules[s] = module;
			this.define(s, deps, callback);
		},
		/**
		 * execute the controller's action, the arguments except first
		 * one(controller name and action name) will be transfered to the action
		 * For instance, god.exe('User.logout', 2);
		 * 
		 * @param action:
		 *            the controller and action string eg: 'User.logout' if the
		 *            action name do not exist, just return the instance, and
		 *            the init function will be execute.
		 * @returns {God} just for chain call
		 */
		exe: function(action) {
			var t = action.split('.'), controller_name = t[0], action_name = t[1];
			var args = [], i, length = arguments.length;
			for (i = 1; i < length; i++) {
				args.push(arguments[i]);
			}
			this.require(['controller/' + controller_name], function(ctrl) {
				if (action_name) {
					if (typeof (ctrl) === "function") {
						var str = "c = new ctrl; c." + action_name
								+ ".apply(c, args)";
					} else {
						var str = "ctrl." + action_name + ".apply(ctrl, args)";
					}
					eval(str);
				}

			});
			return this; // make chain
		},
		jump: function(url, blank) {
			if (blank) {
				window.open(url);
			} else {
				window.location.href = url;
			}
		},
		cookie: function(name, value, props) {
			var c = document.cookie, ret;
			if (arguments.length == 1) {
				var matches = c.match(new RegExp("(?:^|; )"
						+ this.escapeString(name) + "=([^;]*)"));
				ret = matches ? decodeURIComponent(matches[1]) : undefined;
			} else {
				props = props || {};

				var exp = props.expires;
				if (typeof exp == "number") {
					var d = new Date();
					d.setTime(d.getTime() + exp * 24 * 60 * 60 * 1000);
					exp = props.expires = d;
				}
				if (exp && exp.toUTCString) {
					props.expires = exp.toUTCString();
				}

				value = encodeURIComponent(value);
				var updatedCookie = name + "=" + value, propName;
				for (propName in props) {
					updatedCookie += "; " + propName;
					var propValue = props[propName];
					if (propValue !== true) {
						updatedCookie += "=" + propValue;
					}
				}
				document.cookie = updatedCookie + "; path=/";
			}
			return ret;
		},
		escapeString: function(str, except) {

			return str.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, function(ch) {
				if (except && except.indexOf(ch) != -1) {
					return ch;
				}
				return "\\" + ch;
			});
		},
		storage: function(key, val) {
			if (arguments.length == 1) {
				if(!god.cookie(key)){
					return null;
				}
				return JSON.parse(god.cookie(key)).data;
			} else {
				var d = {
					data: val
				};
				god.cookie(key, JSON.stringify(d));
			}
		},
		tpl: function(id, data) {
			return template(id, data);
		}
	};

	window.god = window.God = new God();
	function clone(myObj) {
		if (typeof (myObj) != 'object')
			return myObj;

		if (myObj == null)
			return myObj;

		var myNewObj = new Object();
		for ( var i in myObj)
			myNewObj[i] = clone(myObj[i]);
		return myNewObj;

	}
	God.prototype.extend = function(supper, source) {
		var s = source;
		var F = function(obj) {
			supper.call(this, obj);
			for ( var i in s) {
				if (typeof (s[i]) == 'object' || typeof (s[i]) == 'function') {
					this[i] = clone(s[i]);
				} else {
					this[i] = s[i];
				}
			}
		};

		F.prototype = supper.prototype;
		F.prototype.constructor = F;
		return F;
	};

	function Controller(obj) {
		for ( var i in obj) {
			this[i] = obj[i];
		}
		if (this.init) {
			this.init();
		}
	}

	function Model(obj) {
		/**
		 * the url to fetch model data, used by fetch, save, delete...
		 */
		this.fields = {};
		this.baseUrl = "";
		for ( var i in obj) {
			this[i] = obj[i];
		}
		if (this.init) {
			this.init();
		}
	}

	Model.prototype = {
		setConfig: function(obj) {

		},
		/**
		 * the url to fetch model data, used by fetch, save, delete...
		 */
		set: function(key, value) {
			this.fields[key] = value;
		},
		sets: function(obj) {
			for ( var i in obj) {
				this.set(i, obj[i]);
			}
		},
		get: function(key) {
			return this.fields[key];
		},
		gets: function() {
			return this.fields;
		},
		save: function() {
			Helper.ajax({
				url: this.baseUrl,
				data: this.fields,
				method: 'POST'
			});
		},
		/**
		 * fetch data from remote server, server response should be like:
		 * {"name": "guodong", "age": 18, "isVip": true}, it uses HTTP GET
		 * method
		 * 
		 * @param param
		 *            the param transfred to server using Get Method
		 */
		fetch: function(arg) {
			var arg = arg || {}, self = this;
			$.ajax({
				url: this.baseUrl,
				async: false,
				data: arg,
				dataType: 'json',
				success: function(d) {
					for ( var i in d) {
						self.fields[i] = d[i];
					}
				}
			});
			return self.fields;
		}
	};

	function Collection(obj) {
		this.model = null, /* the model class */
		this.baseUrl = '';
		this.data = [];
		for ( var i in obj) {
			this[i] = obj[i];
		}
		if (this.init) {
			this.init();
		}
	}
	Collection.prototype = {
		fetchAll: function(arg) {
			this.data = [];
			var arg = arg || {}, self = this;
			$.ajax({
				url: this.baseUrl,
				async: false,
				data: arg,
				dataType: 'json',
				success: function(d) {
					var tarr = [], t = [];
					for ( var i in d) {
						t[i] = new self.model;
						t[i].sets(d[i]);
						tarr.push(t[i]);
					}
					self.data = tarr;
				}
			});

			return self.data;
		}
	}

	function View(obj) {
		this.template = '';
		this.vars = {};
		this.templatePath = 'tpl';
		for ( var i in obj) {
			this[i] = obj[i];
		}
		if (this.init) {
			this.init();
		}
	}
	View.prototype = {
		set: function(key, value) {
			this.vars[key] = value;
		},
		/**
		 * render the view page and replace the <%=..%> with vars
		 * 
		 * @param dom:
		 *            the id of dom
		 */
		render: function(domId) {
			var self = this;
			if (this.templatePath === '')
				this.templatePath = this.id;
			var url = god.appPath + 'template/' + this.templatePath + ".js?v="
					+ version + Math.random(0, 9999);
			;
			this.template = Helper.load(url);

			var cache = {};

			var tmpl = function(str, data) {
				var fn = !/\W/.test(str) ? cache[str] = cache[str]
						|| function() {
							return str;
						} : new Function("obj",
						"var p=[],print=function(){p.push.apply(p,arguments);};"
								+ "with(obj){p.push('"
								+ str.replace(/[\r\t\n]/g, " ").split("<%")
										.join("\t").replace(/((^|%>)[^\t]*)'/g,
												"$1\r").replace(/\t=(.*?)%>/g,
												"',$1,'").split("\t").join(
												"');").split("%>").join(
												"p.push('").split("\r").join(
												"\\'")
								+ "');}return p.join('');");

				return fn(data);
			};

			if ($("#" + domId).length) {
				$("#" + domId).html(tmpl(this.template, this.vars));
			}

			if (this.initRender)
				this.initRender();
		}
	};

	God.prototype.mvc = {
		Controller: Controller,
		Model: Model,
		Collection: Collection,
		View: View
	};
	God.prototype.controller = new Controller();

	/*
	 * v1 = god.extend(god.mvc.View,{templatePath: '1'}); v2 =
	 * god.extend(god.mvc.View,{templatePath: '2'}); var t1 = new v1; var t2 =
	 * new v2; t2.templatePath = '3'; console.log(t1.templatePath)
	 */

	var Helper = {
		/**
		 * just load content without executing it in sync way. Used for View
		 * templates
		 * 
		 * @notice this method only can be used for same domain loading, thus
		 *         determine the View templates must be load under app domain
		 */
		load: function(path) {
			return this.ajax({
				url: path,
				async: false
			});
		},

		ajax: function(params, callback) {
			var url = params.url
			var method = params.method ? params.method.toUpperCase() : 'GET', async = (params.async === false) ? false
					: true;
			var t = [], data = params.data || {};
			for ( var i in data) {
				t[t.length] = i + '=' + data[i];
			}
			var argstr = t.join('&');
			if (method === 'GET' && argstr !== '') {
				url += '/?' + argstr;
			}
			var xmlHttp;
			if (window.XMLHttpRequest) {
				xmlHttp = new XMLHttpRequest();
			} else {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlHttp.open(method, url, async);
			if (method === 'GET') {
				xmlHttp.send(null);
			} else {
				xmlHttp.setRequestHeader("Content-Type",
						"application/x-www-form-urlencoded");

				xmlHttp.send(argstr);
			}
			if (undefined !== callback) {
				if (async) {
					xmlHttp.onreadystatechange = function() {
						if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
							callback(xmlHttp.responseText);
						}
					}
				} else {
					if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
						callback(xmlHttp.responseText);
					}
				}

			}
			/**
			 * if it isn't sync, load and return the response
			 */
			if (!async) {
				return xmlHttp.responseText;
			}
		}
	}
})(window);
(function(global) {
    "use strict";
    var template = function(id, content) {
        return template[typeof content == "string" ? "compile" : "render"].apply(template, arguments);
    };
    template.version = "2.0.2", template.openTag = "<%", template.closeTag = "%>", template.isEscape = !0, template.isCompress = !1, template.parser = null, template.render = function(id, data) {
        var cache = template.get(id) || _debug({
            "id": id,
            "name": "Render Error",
            "message": "No Template"
        });
        return cache(data);
    }, template.compile = function(id, source) {
        function render(data) {
            try {
                return new Render(data, id) + "";
            } catch (e) {
                return isDebug ? _debug(e)() : template.compile(id, source, !0)(data);
            }
        }
        var params = arguments, isDebug = params[2], anonymous = "anonymous";
        typeof source != "string" && (isDebug = params[1], source = params[0], id = anonymous);
        try {
            var Render = _compile(id, source, isDebug);
        } catch (e) {
            return e.id = id || source, e.name = "Syntax Error", _debug(e);
        }
        return render.prototype = Render.prototype, render.toString = function() {
            return Render.toString();
        }, id !== anonymous && (_cache[id] = render), render;
    };
    var _cache = template.cache = {}, _helpers = template.helpers = {
        "$include": template.render,
        "$string": function(value, type) {
            return typeof value != "string" && (type = typeof value, type === "number" ? value += "" : type === "function" ? value = _helpers.$string(value()) : value = ""), value;
        },
        "$escape": function(content) {
            var m = {
                "<": "&#60;",
                ">": "&#62;",
                '"': "&#34;",
                "'": "&#39;",
                "&": "&#38;"
            };
            return _helpers.$string(content).replace(/&(?![\w#]+;)|[<>"']/g, function(s) {
                return m[s];
            });
        },
        "$each": function(data, callback) {
            var isArray = Array.isArray || function(obj) {
                return {}.toString.call(obj) === "[object Array]";
            };
            if (isArray(data)) for (var i = 0, len = data.length; i < len; i++) callback.call(data, data[i], i, data); else for (i in data) callback.call(data, data[i], i);
        }
    };
    template.helper = function(name, helper) {
        _helpers[name] = helper;
    }, template.onerror = function(e) {
        var message = "Template Error\n\n";
        for (var name in e) message += "<" + name + ">\n" + e[name] + "\n\n";
        global.console && console.error(message);
    }, template.get = function(id) {
        var cache;
        if (_cache.hasOwnProperty(id)) cache = _cache[id]; else if ("document" in global) {
            var elem = document.getElementById(id);
            if (elem) {
                var source = elem.value || elem.innerHTML;
                cache = template.compile(id, source.replace(/^\s*|\s*$/g, ""));
            }
        }
        return cache;
    };
    var _debug = function(e) {
        return template.onerror(e), function() {
            return "{Template Error}";
        };
    }, _compile = function() {
        var forEach = _helpers.$each, KEYWORDS = "break,case,catch,continue,debugger,default,delete,do,else,false,finally,for,function,if,in,instanceof,new,null,return,switch,this,throw,true,try,typeof,var,void,while,with,abstract,boolean,byte,char,class,const,double,enum,export,extends,final,float,goto,implements,import,int,interface,long,native,package,private,protected,public,short,static,super,synchronized,throws,transient,volatile,arguments,let,yield,undefined", REMOVE_RE = /\/\*[\w\W]*?\*\/|\/\/[^\n]*\n|\/\/[^\n]*$|"(?:[^"\\]|\\[\w\W])*"|'(?:[^'\\]|\\[\w\W])*'|[\s\t\n]*\.[\s\t\n]*[$\w\.]+/g, SPLIT_RE = /[^\w$]+/g, KEYWORDS_RE = new RegExp([ "\\b" + KEYWORDS.replace(/,/g, "\\b|\\b") + "\\b" ].join("|"), "g"), NUMBER_RE = /^\d[^,]*|,\d[^,]*/g, BOUNDARY_RE = /^,+|,+$/g, getVariable = function(code) {
            return code.replace(REMOVE_RE, "").replace(SPLIT_RE, ",").replace(KEYWORDS_RE, "").replace(NUMBER_RE, "").replace(BOUNDARY_RE, "").split(/^$|,+/);
        };
        return function(id, source, isDebug) {
            function html(code) {
                return line += code.split(/\n/).length - 1, template.isCompress && (code = code.replace(/[\n\r\t\s]+/g, " ").replace(/<!--.*?-->/g, "")), code && (code = replaces[1] + stringify(code) + replaces[2] + "\n"), code;
            }
            function logic(code) {
                var thisLine = line;
                parser ? code = parser(code) : isDebug && (code = code.replace(/\n/g, function() {
                    return line++, "$line=" + line + ";";
                }));
                if (code.indexOf("=") === 0) {
                    var isEscape = code.indexOf("==") !== 0;
                    code = code.replace(/^=*|[\s;]*$/g, "");
                    if (isEscape && template.isEscape) {
                        var name = code.replace(/\s*\([^\)]+\)/, "");
                        !_helpers.hasOwnProperty(name) && !/^(include|print)$/.test(name) && (code = "$escape(" + code + ")");
                    } else code = "$string(" + code + ")";
                    code = replaces[1] + code + replaces[2];
                }
                return isDebug && (code = "$line=" + thisLine + ";" + code), getKey(code), code + "\n";
            }
            function getKey(code) {
                code = getVariable(code), forEach(code, function(name) {
                    uniq.hasOwnProperty(name) || (setValue(name), uniq[name] = !0);
                });
            }
            function setValue(name) {
                var value;
                name === "print" ? value = print : name === "include" ? (prototype.$include = _helpers.$include, value = include) : (value = "$data." + name, _helpers.hasOwnProperty(name) && (prototype[name] = _helpers[name], name.indexOf("$") === 0 ? value = "$helpers." + name : value = value + "===undefined?$helpers." + name + ":" + value)), variables += name + "=" + value + ",";
            }
            function stringify(code) {
                return "'" + code.replace(/('|\\)/g, "\\$1").replace(/\r/g, "\\r").replace(/\n/g, "\\n") + "'";
            }
            var openTag = template.openTag, closeTag = template.closeTag, parser = template.parser, code = source, tempCode = "", line = 1, uniq = {
                "$data": 1,
                "$id": 1,
                "$helpers": 1,
                "$out": 1,
                "$line": 1
            }, prototype = {}, variables = "var $helpers=this," + (isDebug ? "$line=0," : ""), isNewEngine = "".trim, replaces = isNewEngine ? [ "$out='';", "$out+=", ";", "$out" ] : [ "$out=[];", "$out.push(", ");", "$out.join('')" ], concat = isNewEngine ? "if(content!==undefined){$out+=content;return content;}" : "$out.push(content);", print = "function(content){" + concat + "}", include = "function(id,data){data=data||$data;var content=$helpers.$include(id,data,$id);" + concat + "}";
            forEach(code.split(openTag), function(code, i) {
                code = code.split(closeTag);
                var $0 = code[0], $1 = code[1];
                code.length === 1 ? tempCode += html($0) : (tempCode += logic($0), $1 && (tempCode += html($1)));
            }), code = tempCode, isDebug && (code = "try{" + code + "}catch(e){" + "throw {" + "id:$id," + "name:'Render Error'," + "message:e.message," + "line:$line," + "source:" + stringify(source) + ".split(/\\n/)[$line-1].replace(/^[\\s\\t]+/,'')" + "};" + "}"), code = variables + replaces[0] + code + "return new String(" + replaces[3] + ");";
            try {
                var Render = new Function("$data", "$id", code);
                return Render.prototype = prototype, Render;
            } catch (e) {
                throw e.temp = "function anonymous($data,$id) {" + code + "}", e;
            }
        };
    }();
    typeof define == "function" ? define(function() {
        return template;
    }) : typeof exports != "undefined" && (module.exports = template), global.template = template;
})(this);