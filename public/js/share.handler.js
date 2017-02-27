$(document).on('submit', 'form#signUpForm', function(event) {
	event.preventDefault();
	if ($('form#signUpForm input[require]').val() == "") {
		swal('Sign up', 'Please fill in all required fields', 'error');
	}else{
		$('form#signUpForm input').attr('readonly', true);
		NProgress.start();
		var forms = document.querySelector('form#signUpForm');
		var request = new XMLHttpRequest();
		var formDatas = new FormData(forms);
		request.open('post','/addShareHelper');
		request.send(formDatas);

		request.onreadystatechange = function() {
			if (request.readyState === 4) {
				if (request.status === 200) {
					if (request.responseText == 'success') {
						NProgress.done();
						swal('Account Creation', 'You have successfully signed up. Please verify your email', 'success');
					}else{
						NProgress.done();
						$('form#signUpForm input').removeAttr('readonly');
						swal('Account Creation', request.responseText, 'error');
					};


				}else{
					NProgress.done();
					swal('Account Creation', 'An error occured. Please try again', 'error');
				}
			}
		}
	};
});