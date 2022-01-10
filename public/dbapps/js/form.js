var validate = new Bouncer("form", {
  fieldClass: "is-error", // Applied to fields with errors
  errorClass: "form-input-hint", // Applied to the error message for invalid fields

  messages: {
    missingValue: {
      checkbox: "This field is required.",
      radio: "Please select a value.",
      select: "Please select a value.",
      "select-multiple": "Please select at least one value.",
      number: "Please enter a number",
      default: "Form tidak boleh kosong",
    },
    patternMismatch: {
      email: "Please enter a valid email address.",
      url: "Please enter a URL.",
      number: "Please enter a number",
      color: "Please match the following format: #rrggbb",
      date: "Please use the YYYY-MM-DD format",
      time: "Please use the 24-hour time format. Ex. 23:00",
      month: "Please use the YYYY-MM format",
      default: "Please match the requested format.",
    },
  },
});
