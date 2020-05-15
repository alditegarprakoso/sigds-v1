function toggle(pilih) {
				checkboxes = $(document).find('.nisn');
			for(var i=0, n=checkboxes.length;i<n;i++) {
				checkboxes[i].checked = pilih.checked;
				}
			}
