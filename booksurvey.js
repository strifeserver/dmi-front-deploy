"use strict";
function handleFormSubmit(event) {
  event.preventDefault();

  const form = $(this)[0];
  const formData = new FormData(form);

  $.ajax({
    url: "http://127.0.0.1:8000/api/request_survey",
    type: "POST",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (response) {
      const requestedSchedule = $("#datepicker").val();
      if (response.status == "success") {
        Swal.fire({
          icon: "success",
          title: "Request Created",
          text: `Survey Date created ${requestedSchedule}. This is your Survey ID: ${response.result.survey_id} a copy of result id also sent to your email.`,
        });
      } else if (response.status == "error") {
        Swal.fire({
          icon: "error",
          title: "Date Unavailable",
          text: `The requested schedule ${requestedSchedule} is not available. Please select other dates.`,
        });
      }
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

function validateFormData(formData) {
  const date = formData.get("date");
  if (!date || !/^20[2-9]\d-[01]\d-[0-3]\d$/.test(date)) {
    return false;
  }
  const selectedDate = new Date(date);
  const today = new Date();
  today.setHours(0, 0, 0, 0);
  if (selectedDate < today) {
    return false;
  }
  return true;
}

$(document).ready(() => {
  $("#request_survey").submit(handleFormSubmit);

  $("#datepicker").datepicker({
    dateFormat: "yy-mm-dd",
    beforeShowDay: function (date) {
      return isDateAvailable(date) ? [true, ""] : false;
    },
  });
});

function isDateAvailable(date) {
  // TODO: Implement date availability logic
  return true;
}
let unavailableDates = [];

function isDateAvailable(date) {
  const formattedDate = $.datepicker.formatDate("yy-mm-dd", date);
  return !unavailableDates.includes(formattedDate);
}
function checkdates() {
  $.ajax({
    url: "http://127.0.0.1:8000/api/scheduled_dates",
    type: "GET",
    cache: false,
    contentType: false,
    processData: false,
    success: function (response) {
      const dates = response.result;
      for (let index = 0; index < dates.length; index++) {
        unavailableDates.push(response.result[index].date);
      }
      console.log(response.result);

      // handle successful response
    },
    error: function (xhr, status, error) {
      // handle error response
    },
  });
  return unavailableDates;
}
checkdates();
