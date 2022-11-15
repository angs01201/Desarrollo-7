var fileobj;

function upload_file(e) {
	e.preventDefault();
	fileobj = e.dataTransfer.files[0];
	ajax_file_upload(fileobj);
}

function file_explorer(fileobj) {
	document.getElementById('selectfile').click();
	document.getElementById('selectfile').onchange = function() {
		fileobj = document.getElementById('selectfile').files[0];
		ajax_file_upload(fileobj);
	};
}

function ajax_file_upload(fileobj) {
	if(fileobj != undefined) {
		var form_data = new FormData();
		form_data.append('file',file_obj);
		var xhttp = new XMLHttpRequest();
		xhttp.open("POST","lab191.php",true);
		xhttp.onload = function(event) {
			oOutput = document.querySelector('.img-content');
			if(xhttp.status ==200) {
				oOutput.innerHTML = "<img src='" + this.responseText + "' alt='Imagen adjuntada'/>";
			}else {
				oOutput.innerHTML = "Error # " + xhttp.status + " ha ocurridoal intentar adjuntar la imagen.";
			}
		}
		xhttp.send(form_data);
	}
}