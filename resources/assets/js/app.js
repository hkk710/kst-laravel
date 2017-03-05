
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    methods: {
        changeFunction: function(e) {
			if ($('#vtype option:selected').val() == 0) {
				$('#vname').empty();
				$('#vname').append('<option value="0">Select any Vazhipad Type</option>');
			}
			else {
                $('#vname').empty();
                $('#vname').append('<option value="0">Select any Prathishta</option>');
                $('#pra option:first').html('Select any');
                $('#pra option:first').attr('selected', 'selected');
			}
		},
        prathishta: function(e) {
            if ($('#vtype option:selected').val() != 0) {
                $.ajax({
                    url: "/online_vazhipad/ajax",
                    method: 'POST',
                    data: {
                        _token: $('form input[name="_token"]').val(),
                        prathishtas_id: e.target.value,
                        vtypes_id: $('#vtype option:selected').val()
                    },
                    success: function(result) {
                        $('#vname').empty();
                        $('#vname').append('<option value="0" price="0">Select any</option>');
                        $.each(result, function(index, value) {
                            $('#vname').append('<option value="' + value.id + '" price="' + value.price + '">' + value.name + '</option>');
                        });
                    }
                });
            }
            else {
                $('#pra option:first').removeAttr('selected');
                $('#pra option:first').html('Select any Vazhipad type');
                $('#pra option:first').attr('selected', 'selected');
            }
        },
		priceFunction: function(e) {
			$('#price').html($('#vname option:selected').attr('price'))
		},
		clearPrice: function() {
			$('#price').html(0);
            $('#vname').html('<option value="0">Select any Vazhipad Type</option>');
		}
    }
});
