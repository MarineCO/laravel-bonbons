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
					this.data(response.data);
				})
				.catch(function(error) {
					console.log(error);
				});
		},

		data: function(res) {
			console.log(res);
			let len = res.length;
			for (let i = 0; i < len; i++) {
			
				$('#name').append('<tr><td>'+res[i].name+'</td></tr>');

				$('#qty').append('<tr>'
					+'<td><button id="more">+</button></td>'
					+'<td>'+res[i].qty+'</td>'
					+'<td><button id="less">-</button></td>'
					+'</tr>');
			}
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

