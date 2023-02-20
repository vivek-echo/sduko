function errorAlert(name, sentense, ctrlId) {
	swal(name, sentense, "error").then(function(res) {
		if (res) {
			$('#' + ctrlId).css({
				'border-color': 'red',
				'box-shadow': '0px 0px 5px 2px #ff000045'
			});
			setTimeout(function() {
				$('#' + ctrlId).css({
					'border-color': '',
					'box-shadow': ''
				});
			}, 1000)
		}
	});
}