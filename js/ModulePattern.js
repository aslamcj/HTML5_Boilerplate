var Module = (function(){

	var _privateArray = [];

	var _privateMethod = function (message) {
		// private
		console.log(message);
	};

	var someMethod = function (text) {
		// public
		_privateMethod(text);
	};

	var anotherMethod = function (somethingOfInterest) {
		// public
		_privateArray.push(somethingOfInterest);
	};

	return {
	someMethod: someMethod,
	anotherMethod: anotherMethod
	};

})();

Module.someMethod('Hello!');
Module.anotherMethod('Hello!');