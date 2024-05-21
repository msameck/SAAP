(function() {
  "use strict";

  document.querySelectorAll('.php-email-form').forEach(function(form) {
    form.addEventListener('submit', function(event) {
      event.preventDefault();

      let thisForm = this;
      let actionUrl = thisForm.getAttribute('action');
      let recaptchaKey = thisForm.getAttribute('data-recaptcha-site-key');

      if (!actionUrl) {
        showError(thisForm, 'The form action property is not set!');
        return;
      }

      toggleLoadingState(thisForm, true);
      clearMessages(thisForm);

      let formData = new FormData(thisForm);

      if (recaptchaKey) {
        if (typeof grecaptcha !== "undefined") {
          grecaptcha.ready(function() {
            try {
              grecaptcha.execute(recaptchaKey, {action: 'php_email_form_submit'}).then(token => {
                formData.set('recaptcha-response', token);
                submitForm(thisForm, actionUrl, formData);
              });
            } catch (error) {
              showError(thisForm, error);
            }
          });
        } else {
          showError(thisForm, 'The reCaptcha javascript API url is not loaded!');
        }
      } else {
        submitForm(thisForm, actionUrl, formData);
      }
    });
  });

  function submitForm(form, actionUrl, formData) {
    fetch(actionUrl, {
      method: 'POST',
      body: formData,
      headers: {'X-Requested-With': 'XMLHttpRequest'}
    })
    .then(response => {
      if (response.ok) {
        return response.text();
      } else {
        throw new Error(`${response.status} ${response.statusText} ${response.url}`);
      }
    })
    .then(data => {
      toggleLoadingState(form, false);
      if (data.trim() === 'OK') {
        showSuccessMessage(form);
        form.reset();
      } else {
        throw new Error(data ? data : `Form submission failed and no error message returned from: ${actionUrl}`);
      }
    })
    .catch(error => {
      showError(form, error);
    });
  }

  function toggleLoadingState(form, isLoading) {
    form.querySelector('.loading').classList.toggle('d-block', isLoading);
  }

  function clearMessages(form) {
    form.querySelector('.error-message').classList.remove('d-block');
    form.querySelector('.sent-message').classList.remove('d-block');
  }

  function showSuccessMessage(form) {
    form.querySelector('.sent-message').classList.add('d-block');
  }

  function showError(form, error) {
    form.querySelector('.loading').classList.remove('d-block');
    form.querySelector('.error-message').textContent = error;
    form.querySelector('.error-message').classList.add('d-block');
  }

})();
