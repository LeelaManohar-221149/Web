
let studen_namet="manohar "
let gender="male"
let age=19
let is student=true;

console.log(student_name);
console.log(gender);
console.log(age)


function popup() {
    alert("WElcome !Please sign in ...");
}

/* =========================
   1. VARIABLES
========================= */

// const variable
const ngoName = "Manavaseva Madhavaseva Organisation";

// let variable (can change)
let donationCount = 100;

// display in console
console.log("NGO Name:", ngoName);
console.log("Initial Donations:", donationCount);

// update variable dynamically
donationCount += 10;
console.log("Updated Donations:", donationCount);

// try reassign const (will give error)
try {
    ngoName = "New NGO"; // ❌ not allowed
} catch (e) {
    console.log("Error: Cannot reassign const");
}

// display on webpage
const displayBox = document.createElement("div");
displayBox.innerHTML = `<h3>${ngoName}</h3><p>Total Donations: ${donationCount}</p>`;
displayBox.style.padding = "10px";
document.body.appendChild(displayBox);


/* =========================
   2. FUNCTIONS
========================= */

// function declaration
function showWelcome() {
    alert("Welcome to NGO Portal!");
}

// function expression
const updateDonation = function(amount) {
    donationCount += amount;
    return donationCount;
};

// arrow function
const multiplyDonation = (a, b) => a * b;

// function with parameters + return
function calculateTotal(a, b) {
    return a + b;
}

// call functions
console.log("Total:", calculateTotal(10, 20));
console.log("Multiply:", multiplyDonation(5, 2));

// reuse function
updateDonation(50);
updateDonation(20);


/* =========================
   3. OBJECTS
========================= */

let ngo = {
    name: "MM NGO",
    location: "India",
    services: "Food & Education"
};

// dot notation
console.log(ngo.name);

// bracket notation
console.log(ngo["location"]);

// update property
ngo.services = "Food, Education, Medical";

// display on webpage
const objBox = document.createElement("div");
objBox.innerHTML = `<p>Services: ${ngo.services}</p>`;
document.body.appendChild(objBox);

// log object
console.log("NGO Object:", ngo);


/* =========================
   4. METHODS
========================= */

let donor = {
    name: "Guest",
    amount: 0,

    donate: function(value) {
        this.amount += value;
        return this.amount;
    }
};

// method call
console.log(donor.donate(500));

// update UI using method
function donateNow() {
    let total = donor.donate(100);
    alert("Donation Successful! Total: " + total);
}


/* =========================
   5. POP-UP BOXES
========================= */

// alert
alert("Welcome to NGO Website!");

// confirm
let confirmDonate = confirm("Do you want to donate?");
console.log("Confirm Result:", confirmDonate);

// prompt
let userName = prompt("Enter your name:");
console.log("User Name:", userName);

// display response
const userBox = document.createElement("p");
userBox.innerText = "Hello " + userName;
document.body.appendChild(userBox);


/* =========================
   6. EVENTS & EVENT LISTENERS
========================= */

// select elements
const donateBtn = document.querySelector(".btn");
const searchInput = document.getElementById("search");
const header = document.querySelector("header");

// CLICK EVENT (content change)
if (donateBtn) {
    donateBtn.addEventListener("click", function() {
        alert("Thank you for clicking Donate!");
    });
}

// INPUT EVENT (live update)
if (searchInput) {
    searchInput.addEventListener("input", function() {
        console.log("Searching:", searchInput.value);
    });
}

// MOUSEOVER EVENT (style change)
if (header) {
    header.addEventListener("mouseover", function() {
        header.style.backgroundColor = "#e0f7ff";
    });

    header.addEventListener("mouseout", function() {
        header.style.backgroundColor = "white";
    });
}