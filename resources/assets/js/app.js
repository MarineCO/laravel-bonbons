require('./bootstrap');

console.log('hello');

(function() {

	'use strict';

	let app = {

		init: function() {
			this.getData();
		},

		listeners: function() {
			$(".lessbtn").on('click', this.ajaxLess);
			$(".morebtn").on('click', this.ajaxMore);
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
			this.listeners();
		},

		ajaxLess: function() {
			let id = $(".lessbtn").data("id");
			
			axios.post('/api/less/' + id)
			.then(response => {
				$('.qty').html(response.data +' sweets');
			})
			.catch(function(error) {
				console.log('error ajaxLess');
			});
		},

		ajaxMore: function() {
			let id = $(".morebtn").data("id");

			axios.post('/api/more/' + id)
			.then(response => {
				$('.qty').html(response.data +' sweets');
			})
			.catch(function(error) {
				console.log('error ajaxMore');
			});
		}

	}

	app.init();

})();



