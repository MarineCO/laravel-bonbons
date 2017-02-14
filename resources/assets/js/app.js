window.axios = require('axios');

console.log('hello');

(function() {

	'use strict';

	let app = {

		init: function() {
			this.listeners();
			this.getData();
		},

		listeners: function() {
			$('#less').on('click', this.ajaxLess);
			$('#more').on('click', this.ajaxMore);
		},

		getData: function() {
			axios.get('/api/')
				.then(response => {
					console.log(response.data);
				})
				.catch(function(error) {
					console.log(error);
				});
		},

		ajaxLess: function() {
			axios.put('/api/')
				.then(response => {
					console.log(response.data);
				})
				.catch(function(error) {
					console.log(error);
				});
		},

		ajaxMore: function() {
			console.log('click');
		}
	}

	app.init();

})();

