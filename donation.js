let u = "Even one rupee can save a life ....Please Donate "
function pop(){
alert(u);
}

function signup(){
    let result = confirm("Do u want to Re-Sign up ?");
    if (result) {
        window.open("signup.html", "_blank");
    }
    else{
        //window.open("lab2.html", "_parent");
    }
}



function confirmDonate() {
    let result = confirm("Do you want to proceed to donation?");
    if (result) {
        window.open("lab2.html", "_self");
    }
}

function loginpage() {
   alert("Successfully Logined in  >>>.Continue ")
}



