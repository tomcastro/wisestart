function generateReport(data, polygon, area, type, traffic){
	let modal = $('#modal1');

	modal.find('.title').text('Zona ' + data.name);
	modal.find('#type').text(type.find('option:selected').text());

	modal.openModal();
}