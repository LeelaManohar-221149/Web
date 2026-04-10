document.addEventListener("DOMContentLoaded", function () {
    let student_name = "manohar ";
    let gender = "male";
    let age = 19;
    let isStudent = true;

    console.log(student_name);
    console.log(gender);
    console.log(age);
    console.log(isStudent);

    function popup() {
        alert("Welcome! Please sign in...");
    }

    /* =========================
       1. VARIABLES
    ========================= */

    const ngoName = "Manavaseva Madhavaseva Organisation";
    let donationCount = 100;

    console.log("NGO Name:", ngoName);
    console.log("Initial Donations:", donationCount);

    donationCount += 10;
    console.log("Updated Donations:", donationCount);

    try {
        ngoName = "New NGO";
    } catch (e) {
        console.log("Error: Cannot reassign const");
    }

    const displayBox = document.createElement("div");
    displayBox.innerHTML = `<h3>${ngoName}</h3><p>Total Donations: ${donationCount}</p>`;
    displayBox.style.padding = "10px";
    displayBox.style.margin = "10px auto";
    displayBox.style.maxWidth = "1200px";
    displayBox.style.backgroundColor = "#eff6ff";
    displayBox.style.border = "1px solid #bfdbfe";
    displayBox.style.borderRadius = "8px";
    document.body.insertBefore(displayBox, document.body.firstChild);

    /* =========================
       2. FUNCTIONS
    ========================= */

    function showWelcome() {
        alert("Welcome to NGO Portal!");
    }

    const updateDonation = function (amount) {
        donationCount += amount;
        return donationCount;
    };

    const multiplyDonation = (a, b) => a * b;

    function calculateTotal(a, b) {
        return a + b;
    }

    console.log("Total:", calculateTotal(10, 20));
    console.log("Multiply:", multiplyDonation(5, 2));

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

    console.log(ngo.name);
    console.log(ngo["location"]);

    ngo.services = "Food, Education, Medical";

    const objBox = document.createElement("div");
    objBox.innerHTML = `<p>Services: ${ngo.services}</p>`;
    objBox.style.padding = "10px";
    objBox.style.margin = "10px auto";
    objBox.style.maxWidth = "1200px";
    objBox.style.backgroundColor = "#f9fafb";
    objBox.style.border = "1px solid #e5e7eb";
    objBox.style.borderRadius = "8px";
    document.body.insertBefore(objBox, displayBox.nextSibling);

    console.log("NGO Object:", ngo);

    /* =========================
       4. METHODS
    ========================= */

    let donor = {
        name: "Guest",
        amount: 0,

        donate: function (value) {
            this.amount += value;
            return this.amount;
        }
    };

    console.log(donor.donate(500));

    function donateNow() {
        let total = donor.donate(100);
        alert("Donation Successful! Total: " + total);
    }

    /* =========================
       5. POP-UP BOXES
    ========================= */

    popup();

    let confirmDonate = confirm("Do you want to donate?");
    console.log("Confirm Result:", confirmDonate);

    let userName = prompt("Enter your name:");
    console.log("User Name:", userName);

    const userBox = document.createElement("p");
    userBox.innerText = "Hello " + (userName || "Guest");
    userBox.style.padding = "10px";
    userBox.style.margin = "10px auto";
    userBox.style.maxWidth = "1200px";
    userBox.style.backgroundColor = "#ecfccb";
    userBox.style.border = "1px solid #84cc16";
    userBox.style.borderRadius = "8px";
    document.body.insertBefore(userBox, objBox.nextSibling);

    /* =========================
       6. EVENTS & EVENT LISTENERS
    ========================= */

    const donateBtn = document.querySelector(".btn-primary");
    const searchInput = document.getElementById("search");
    const header = document.querySelector("header");

    if (donateBtn) {
        donateBtn.addEventListener("click", function () {
            alert("Thank you for clicking Donate!");
            donateNow();
        });
    }

    if (searchInput) {
        searchInput.addEventListener("input", function () {
            console.log("Searching:", searchInput.value);
        });
    }

    if (header) {
        header.addEventListener("mouseover", function () {
            header.style.backgroundColor = "#e0f7ff";
        });

        header.addEventListener("mouseout", function () {
            header.style.backgroundColor = "";
        });
    }

    window.showWelcome = showWelcome;
    window.donateNow = donateNow;
    window.popup = popup;
});
