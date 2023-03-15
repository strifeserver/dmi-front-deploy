function sendFormData(formData) {
  $.ajax({
    url: "http://127.0.0.1:8000/api/track_survey",
    type: "POST",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (response) {
      Swal.fire({
        icon: "success",
        title: "Survey retrieved",
      });
      $("#request_name").html(response.result.name);
      $("#address").html(response.result.address);
      $("#email_address").html(response.result.email_address);
      $("#mobile_number").html(response.result.mobile_number);
      $('#requested_schedule').html(response.result.schedule);
      $("#status").html(response.result.status);
    },
    error: function (xhr, status, error) {
      Swal.fire({
        icon: "error",
        title: "Server Error",
        text: "There was an error while submitting the form. Please try again later.",
      });
    },
  });
}

$("#track_survey_form").submit(handleTrackingFormSubmit);
function handleTrackingFormSubmit(event) {
  event.preventDefault();

  const form = $(this)[0];
  const formData = new FormData(form);

  sendFormData(formData);
}

function doTrack() {
  const params = new URLSearchParams(window.location.search);

  // get the value of the "survey_id" parameter
  const surveyId = params.get("survey_id");
  if (surveyId) {
    var formData = new FormData();
    formData.append('survey_id', surveyId);
    sendFormData(formData);
  }
}

doTrack();
