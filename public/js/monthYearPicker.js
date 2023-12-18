// Function to populate the month and year dropdown dynamically
function populateMonthYearDropdown() {
    var monthYearDropdown = document.getElementById("monthYear");
    var currentYear = new Date().getFullYear();
    var currentMonth = new Date().getMonth() + 1; // Note: January is 0 in JavaScript

    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    for (var year = currentYear - 10; year <= currentYear + 10; year++) {
      for (var month = 1; month <= 12; month++) {
        var option = document.createElement("option");
        option.value = year + '-' + (month < 10 ? '0' : '') + month;
        option.text = monthNames[month - 1] + ' ' + year;

        if (year === currentYear && month === currentMonth) {
          option.selected = true; // Set default selected option to current month and year
        }

        monthYearDropdown.add(option);
      }
    }
  }

  // Call the function to populate the month and year dropdown on page load
  populateMonthYearDropdown();

  function getSelectedDate() {
    var selectedMonthYear = document.getElementById("monthYear").value;
    
    // You can use selectedMonthYear as needed
    console.log("Selected Date: " + selectedMonthYear);
  }