require('./bootstrap');

console.log('hello');

(function() {

	'use strict';

	let app = {

		init: function() {
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
				this.data(response.data);
			})
			.catch(function(error) {
				console.log(error);
			});
		},

		data: function(res) {
			let len = res.length;
			for (let i = 0; i < len; i++) {

				$('#id').append('<tr><td>'+res[i].id+'</td></tr>');
				$('#name').append('<tr><td>'+res[i].name+'</td></tr>');
			}

			this.listeners();
		},

		ajaxLess: function() {
			let id = $('#less').data("id");
			
			axios.post('/api/less/' + id)
			.then(response => {
				$('#qty').html(response.data +' sweets');
			})
			.catch(function(error) {
				console.log('error ajaxLess');
			});
		},

		ajaxMore: function() {
			let id = $('#more').data("id");

			axios.post('/api/more/' + id)
			.then(response => {
				$('#qty').html(response.data +' sweets');
			})
			.catch(function(error) {
				console.log('error ajaxMore');
			});
		}

	}

	app.init();

})();



