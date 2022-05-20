var searchStyle = document.querySelector('.search_style');

document.querySelector('.search').addEventListener('input', function() {
	if (!this.value) {
		searchStyle.innerHTML = '';
		return;
	} else
		// todo: add dynamic searching & append random keystrokes ~!@#$%^*()_+
		searchStyle.innerHTML = '.searchable:not([data-index*=\'' + this.value.toLowerCase() + '\']) { display: none; }';
});