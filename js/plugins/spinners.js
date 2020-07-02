function mkSpinner(target, spnType) {

	$(target)
	.html('<i class="fa fa-'+ spnType +' fa-spin" area-hidden="true"></i>')
	.prop('disabled', 'disabled');

}

function btnStatus(btn, btnApp ,btnStat) {
	$(btn)
	.prop('disabled', btnApp)
	.html(btnStat);
}