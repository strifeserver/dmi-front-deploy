const form = document.querySelector('#track_survey');

form.addEventListener('submit', (e) => {
  e.preventDefault(); // prevent default form submission behavior

  const surveyId = form.elements['survey_id'].value; // get the survey id from the input field

  // redirect the user to the tracksurvey.php page with the survey_id parameter in the URL
  window.location.href = `tracksurvey.php?survey_id=${surveyId}`;
});
