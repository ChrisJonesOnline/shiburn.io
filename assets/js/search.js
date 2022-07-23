var searchStyle = document.querySelector('.search_style');

document.querySelector('.search').addEventListener('input', function() {
	if (!this.value) {
		searchStyle.innerHTML = '';
		return;
	} else
		searchStyle.innerHTML = '.searchable:not([data-index*=\'' + this.value.toLowerCase() + '\']) { display: none; }';
});
