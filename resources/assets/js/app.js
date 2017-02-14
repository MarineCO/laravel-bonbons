axios = require('axios');

(function() {

	'use strict';

	let app = {

		init: function() {
			this.listeners();
		},

		listeners: function() {
			$('#less').on('click', this.ajaxLess);
			$('#more').on('click', this.ajaxMore);
		},

		ajaxLess: function() {
			axios.get('/')
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
