function save_data()
{
	var form_element = document.getElementsByClassName('form_data');

	var form_data = new FormData();

	for(var count = 0; count < form_element.length; count++)
	{
		form_data.append(form_element[count].name, form_element[count].value);
	}

	document.getElementById('submit').disabled = true;

	var ajax_request = new XMLHttpRequest();

	ajax_request.open('POST', '../forms/contact.php');

	ajax_request.send(form_data);

	ajax_request.onreadystatechange = function()
	{
		if(ajax_request.readyState == 4 && ajax_request.status == 200)
		{
			document.getElementById('submit').disabled = false;
            console.log(ajax_request);
			var response = JSON.parse(ajax_request.responseText);

			if(response.success != '')
			{
				document.getElementById('sample_form').reset();

				document.getElementById('message').innerHTML = response.success;

				setTimeout(function(){

					document.getElementById('message').innerHTML = '';

				}, 5000);

				document.getElementById('name_error').innerHTML = '';

				document.getElementById('email_error').innerHTML = '';

				document.getElementById('message_error').innerHTML = '';
				document.getElementById('subject_error').innerHTML = '';
			}
			else
			{
				//display validation error
				document.getElementById('name_error').innerHTML = response.name_error;
				document.getElementById('email_error').innerHTML = response.email_error;
				document.getElementById('message_error').innerHTML = response.message_error;
				document.getElementById('subject_error').innerHTML = response.subject_error;
			}

			
		}
	}
}
	