new Vue({
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
                        $.each(result, function(index, value) {
                            $('#vname').append('<option value="' + value.id + '">' + value.name + '</option>')
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
