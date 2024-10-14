// Array to store added clubs
let clubs = [];

// Function to add a new club
function addClub() {
    let clubName = prompt("Enter Club Name:");
    if (clubName) {
        // Add the club name to the clubs array
        clubs.push(clubName);

        // Display the club immediately
        viewAllClubs();
    }
}

// Function to add a new event
function addEvent() {
    let eventName = prompt("Enter Event Name:");
    if (eventName) {
        let eventSection = document.getElementById('event-section');
        let eventDiv = document.createElement('div');
        eventDiv.classList.add('item-container'); // Added class for styling
        eventDiv.innerHTML = `
        <div class="item-content">
          <h3>${eventName}</h3>
          <button class="edit-btn" onclick="editEvent(this)">Edit</button>
          <button class="delete-btn" onclick="deleteEvent(this)">Delete</button>
        </div>
      `;
        eventSection.appendChild(eventDiv);
    }
}

// Function to add a new tournament
function addTournament() {
    let tournamentName = prompt("Enter Tournament Name:");
    if (tournamentName) {
        let tournamentSection = document.getElementById('tournament-section');
        let tournamentDiv = document.createElement('div');
        tournamentDiv.classList.add('item-container'); // Added class for styling
        tournamentDiv.innerHTML = `
        <div class="item-content">
          <h3>${tournamentName}</h3>
          <button class="edit-btn" onclick="editTournament(this)">Edit</button>
          <button class="delete-btn" onclick="deleteTournament(this)">Delete</button>
        </div>
      `;
        tournamentSection.appendChild(tournamentDiv);
    }
}

// Function to view all added clubs
function viewAllClubs() {
    let clubSection = document.getElementById('club-section');
    clubSection.innerHTML = ''; // Clear previous content

    // Iterate through the clubs array and display each club
    clubs.forEach(clubName => {
        let clubDiv = document.createElement('div');
        clubDiv.classList.add('item-container'); // Added class for styling
        clubDiv.innerHTML = `
        <div class="item-content">
          <h3>${clubName}</h3>
          <button class="edit-btn" onclick="editClub(this)">Edit</button>
          <button class="delete-btn" onclick="deleteClub(this)">Delete</button>
        </div>
      `;
        clubSection.appendChild(clubDiv);
    });
}

// Function to edit a club
function editClub(element) {
    let newName = prompt("Edit Club Name:", element.parentElement.querySelector('h3').innerText);
    if (newName) {
        let oldName = element.parentElement.querySelector('h3').innerText;
        // Update the club name in the clubs array
        let index = clubs.indexOf(oldName);
        if (index !== -1) {
            clubs[index] = newName; // Update the array
            element.parentElement.querySelector('h3').innerText = newName; // Update display
        }
    }
}

// Function to delete a club
function deleteClub(element) {
    let clubName = element.parentElement.querySelector('h3').innerText;
    clubs = clubs.filter(club => club !== clubName); // Remove club from array
    element.parentElement.parentElement.remove(); // Remove club from display
}

// Function to edit an event
function editEvent(element) {
    let newName = prompt("Edit Event Name:", element.parentElement.querySelector('h3').innerText);
    if (newName) {
        element.parentElement.querySelector('h3').innerText = newName;
    }
}

// Function to delete an event
function deleteEvent(element) {
    element.parentElement.remove();
}

// Function to edit a tournament
function editTournament(element) {
    let newName = prompt("Edit Tournament Name:", element.parentElement.querySelector('h3').innerText);
    if (newName) {
        element.parentElement.querySelector('h3').innerText = newName;
    }
}

// Function to delete a tournament
function deleteTournament(element) {
    element.parentElement.remove();
}

// Function to approve a club
function approveClub(element) {
    let clubName = element.parentElement.querySelector('h3').innerText;
    alert(`${clubName} has been approved!`);
    element.parentElement.parentElement.remove(); // Remove club from list
}

// Function to reject a club
function rejectClub(element) {
    let clubName = element.parentElement.querySelector('h3').innerText;
    alert(`${clubName} has been rejected!`);
    element.parentElement.parentElement.remove(); // Remove club from list
}
