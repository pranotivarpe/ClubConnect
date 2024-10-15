// Arrays to store added clubs, events, and tournaments
let clubs = [];
let events = [];
let tournaments = [];

// Function to add a new club
function addClub() {
    let clubName = prompt("Enter Club Name:");
    if (clubName) {
        // Add the club name to the clubs array
        clubs.push(clubName);
        displayClubs();
    }
}

// Function to display all added clubs
function displayClubs() {
    let clubSection = document.getElementById('club-section');
    clubSection.innerHTML = ''; // Clear previous content

    // Iterate through the clubs array and display each club
    clubs.forEach((clubName, index) => {
        let clubDiv = document.createElement('div');
        clubDiv.classList.add('item-container');
        clubDiv.innerHTML = `
        <div class="item-content">
          <h3>${clubName}</h3>
          <button class="edit-btn" onclick="editClub(${index})">Edit</button>
          <button class="delete-btn" onclick="deleteClub(${index})">Delete</button>
        </div>
      `;
        clubSection.appendChild(clubDiv);
    });
}

// Function to edit a club
function editClub(index) {
    let newName = prompt("Edit Club Name:", clubs[index]);
    if (newName) {
        clubs[index] = newName;
        displayClubs(); // Refresh the displayed clubs
    }
}

// Function to delete a club
function deleteClub(index) {
    clubs.splice(index, 1); // Remove club from array
    displayClubs(); // Refresh the displayed clubs
}

// Function to add a new event
function addEvent() {
    let eventName = prompt("Enter Event Name:");
    if (eventName) {
        // Add the event name to the events array
        events.push(eventName);
        displayEvents();
    }
}

// Function to display all added events
function displayEvents() {
    let eventSection = document.getElementById('event-section');
    eventSection.innerHTML = ''; // Clear previous content

    // Iterate through the events array and display each event
    events.forEach((eventName, index) => {
        let eventDiv = document.createElement('div');
        eventDiv.classList.add('item-container');
        eventDiv.innerHTML = `
        <div class="item-content">
          <h3>${eventName}</h3>
          <button class="edit-btn" onclick="editEvent(${index})">Edit</button>
          <button class="delete-btn" onclick="deleteEvent(${index})">Delete</button>
        </div>
      `;
        eventSection.appendChild(eventDiv);
    });
}

// Function to edit an event
function editEvent(index) {
    let newName = prompt("Edit Event Name:", events[index]);
    if (newName) {
        events[index] = newName; // Update the event name in the array
        displayEvents(); // Refresh the displayed events
    }
}

// Function to delete an event
function deleteEvent(index) {
    events.splice(index, 1); // Remove event from array
    displayEvents(); // Refresh the displayed events
}

// Function to add a new tournament
function addTournament() {
    let tournamentName = prompt("Enter Tournament Name:");
    if (tournamentName) {
        tournaments.push(tournamentName);
        displayTournaments();
    }
}

// Function to display all added tournaments
function displayTournaments() {
    let tournamentSection = document.getElementById('tournament-section');
    tournamentSection.innerHTML = ''; // Clear previous content

    tournaments.forEach((tournamentName, index) => {
        let tournamentDiv = document.createElement('div');
        tournamentDiv.classList.add('item-container');
        tournamentDiv.innerHTML = `
        <div class="item-content">
          <h3>${tournamentName}</h3>
          <button class="edit-btn" onclick="editTournament(${index})">Edit</button>
          <button class="delete-btn" onclick="deleteTournament(${index})">Delete</button>
        </div>
      `;
        tournamentSection.appendChild(tournamentDiv);
    });
}

// Function to edit a tournament
function editTournament(index) {
    let newName = prompt("Edit Tournament Name:", tournaments[index]);
    if (newName) {
        tournaments[index] = newName;
        displayTournaments();
    }
}

// Function to delete a tournament
function deleteTournament(index) {
    tournaments.splice(index, 1);
    displayTournaments();
}

// Function to approve a club
function approveClub(element) {
    let clubName = element.parentElement.querySelector('h3').innerText;
    alert(`${clubName} has been approved!`);
    element.parentElement.parentElement.remove();
}

// Function to reject a club
function rejectClub(element) {
    let clubName = element.parentElement.querySelector('h3').innerText;
    alert(`${clubName} has been rejected!`);
    element.parentElement.parentElement.remove();
}


document.addEventListener('DOMContentLoaded', () => {
    // Assume these are fetched from a server or calculated from a database
    const totalClubs = 12;
    const totalMembers = 200;
    const pendingApprovals = 5;

    // Update the dashboard statistics
    document.getElementById('total-clubs').innerText = totalClubs;
    document.getElementById('total-members').innerText = totalMembers;
    document.getElementById('pending-approvals').innerText = pendingApprovals;
});
