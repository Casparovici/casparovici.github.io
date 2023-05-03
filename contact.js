// get the form element
const form = document.getElementById('contact-form');

// add event listener for form submit
form.addEventListener('submit', (event) => {
	event.preventDefault(); // prevent default form submission
	
	// get form data
	const formData = new FormData(form);
	
	// send form data to server
	fetch(form.action, {
		method: 'POST',
		body: formData
	})
	.then(response => {
		if (response.ok) {
			// show success message
			alert('Thank you for contacting us!');
			form.reset();
		} else {
			// show error message
			alert('There was an error sending');
        }
    })
})