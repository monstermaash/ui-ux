// Network Request : Handles Fetch API calls and data manipulation.

console.log("functions.js loaded");

/** display data section */
async function fetchClass(url) {
  const response = await fetch(url);
  const data = await response.json();
  displayData(data);
}

// Call function to fetch data
fetchClass('app/select.php');

function displayData(data) {
  // Select element from HTML where we'll put our class data
  const display = document.querySelector('#display');
  display.innerHTML = '';

  // Create an object to organize classes by program ID
  const classesByProgram = {};

  data.forEach((classes) => {
    const programID = classes.programID;
    if (!classesByProgram[programID]) {
      classesByProgram[programID] = [];
    }
    classesByProgram[programID].push(classes);
  });

  // Iterate through the organized data and display it
  for (const programID in classesByProgram) {
    const classesList = classesByProgram[programID];
    const programName = getProgramName(programID); // Define a function to get program names based on IDs
    display.innerHTML += `<h4>${programName}:</h4>`;
    
    const ul = document.createElement('ul');
    classesList.forEach((classes) => {
      const li = document.createElement('li');
      li.innerHTML = `${classes.className} by ${classes.instructorID}`;
      ul.appendChild(li);
    });
    display.appendChild(ul);
  }
}

// Define a function to get program names based on IDs
function getProgramName(programID) {
  switch (programID) {
    case "1":
      return "Front-end";
    case "2":
      return "Back-end";
    case "3":
      return "Fullstack";
    default:
      return "Unknown Program";
  }
}

// Call function to fetch data
fetchClass('app/select.php');


/** Insert section **/
function getFormData(event) {
  event.preventDefault();

  // Get the form data & call an async function
  const insertFormData = new FormData(document.querySelector('#input-form'));
  const url = 'app/insert_student.php';
  inserter(insertFormData, url);

  console.log("Form data:");
  console.log(insertFormData.get("studentName"));
  console.log(insertFormData.get("program"));
}

async function inserter(data, url) {
  const response = await fetch(url, {
      method: "POST",
      body: data
  });

  try {
      const result = await response.json();
      if (result.success) {
          // Registration was successful, display a confirmation message
          const confirmationMessage = document.querySelector('#confirmation-message');
          confirmationMessage.style.display = 'block';
        confirmationMessage.textContent = 'Registration successful!';
        
        console.log("JSON Response:", response);

      } else {
          console.error(result.error);
      }
  } catch (error) {
      console.error(error);
  }

  // Call function again to refresh the page
  fetchClass('app/select.php');
}



// Event listener for form submission
const inputForm = document.querySelector('#input-form');
inputForm.addEventListener('submit', getFormData);


