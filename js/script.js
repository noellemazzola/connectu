// ...
window.addEventListener("load", init, false);

// initialization
function init() {
    let loginForm = document.getElementById("login_form");
    if (loginForm !== null) {
        let loginInputs = loginForm.elements;
        for (let i = 0; i < loginInputs.length; i++) {
            if (loginInputs[i].type !== "submit")
                loginInputs[i].addEventListener("blur", validateLoginInput, false);
        }
    }

    let studentForm = document.getElementById("register_student_form");
    if (studentForm !== null) {
        let studentInputs = studentForm.elements;
        for (let i = 0; i < studentInputs.length; i++) {
            if (studentInputs[i].type !== "submit")
                studentInputs[i].addEventListener("blur", validateStudentInput, false);
        }
    }

    let clubForm = document.getElementById("register_club_form");
    if (clubForm !== null) {
        let clubInputs = clubForm.elements;
        for (let i = 0; i < clubInputs.length; i++) {
            if (clubInputs[i].type !== "submit")
            clubInputs[i].addEventListener("blur", validateClubInput, false);
        }
    }

    // let createBtn = document.getElementById("student_create");
    // createBtn.addEventListener("click", submitForm, false);
}

// clears the content of the given element 
function clearElement(el) {
    while(el.hasChildNodes())
        el.removeChild(el.lastChild);
}

// enables submit if all input is properly formatted
function checkSpans(spanClassName, buttonIdName) {
    let formBtn = document.getElementById(buttonIdName);
    let spans = document.getElementsByClassName(spanClassName);
    let clearedSpans = 0;

    for (let i = 0; i < spans.length; i++) {
        if (!spans[i].hasChildNodes())
            clearedSpans++;
    }

    if (clearedSpans == spans.length)
        formBtn.disabled = false;
    else
        formBtn.disabled = true;

}

// validates the input in the form
function validateLoginInput(e) {
    let input = e.target;
    let inputID = input.getAttribute("id");

    let warningIcon = document.createElement("span");
    warningIcon.setAttribute("class", "bi bi-exclamation-triangle-fill");

    console.log("the input is " + input + " and the id is " + inputID);

    let spans = document.getElementsByClassName("input-warning-login");
    let warnings = [
        "Please enter only letters",
        "Please enter only letters"
    ];
    let myRe = [
        /^[A-Za-z]+$/,
        /^[A-Za-z]+$/
    ];

    console.log("second check for id: " + inputID);
    // checks first name
    if (inputID == "login_username") {
        clearElement(spans[0]);

        if (input.value == "") {
            let warningText = document.createTextNode("This field is required");
            spans[0].appendChild(warningIcon);
            spans[0].appendChild(warningText);
        }
        // else if (!input.value.match(myRe[0])) {
        //     let warningText = document.createTextNode(warnings[0]);
        //     spans[0].appendChild(warningIcon);
        //     spans[0].appendChild(warningText);
        // }

        checkSpans("input-warning-login", 'login-btn');
    }
    // checks last name
    else if (inputID == "login_password") {
        clearElement(spans[1]);

        if (input.value == "") {
            let warningText = document.createTextNode("This field is required");
            spans[1].appendChild(warningIcon);
            spans[1].appendChild(warningText);
        }
        // else if (!input.value.match(myRe[1])) {
        //     let warningText = document.createTextNode(warnings[1]);
        //     spans[1].appendChild(warningIcon);
        //     spans[1].appendChild(warningText);
        // }

        checkSpans("input-warning-login", "login-btn");
    }
}

function validateStudentInput(e) {
    let input = e.target;
    let inputID = input.getAttribute("id");

    let warningIcon = document.createElement("span");
    warningIcon.setAttribute("class", "bi bi-exclamation-triangle-fill");

    console.log("the input is " + input + " and the id is " + inputID);

    let spans = document.getElementsByClassName("input-warning-student");
    let warnings = [
        "Please enter only letters",
        "Please enter only letters",
        "Please enter term and year",
        "Please enter a vaild email address",
        "Username must be at least 3 characters",
        "Password must be at least 4 characters",
        "Passwords do not match"
    ];
    let myRe = [
        /^[A-Za-z]+$/,
        /^[A-Za-z]+$/,
        /^[A-Za-z]+ [0-9]{4}$/,
        /^[A-Za-z0-9]+@[A-Za-z]+[\.A-Za-z]+$/,
        /^[A-Za-z0-9]{3,}$/,
        /^[A-Za-z0-9]{4,}$/
    ];

    console.log("second check for id: " + inputID);
    // checks first name
    if (inputID == "student_fname") {
        console.log("im checking first name");
        clearElement(spans[0]);

        if (input.value == "") {
            let warningText = document.createTextNode("This field is required");
            spans[0].appendChild(warningIcon);
            spans[0].appendChild(warningText);
        }
        else if (!input.value.match(myRe[0])) {
            let warningText = document.createTextNode(warnings[0]);
            spans[0].appendChild(warningIcon);
            spans[0].appendChild(warningText);
        }

        checkSpans("input-warning-student", "student_create");
    }
    // checks last name
    else if (inputID == "student_lname") {
        console.log("im checking last name");
        clearElement(spans[1]);

        if (input.value == "") {
            let warningText = document.createTextNode("This field is required");
            spans[1].appendChild(warningIcon);
            spans[1].appendChild(warningText);
        }
        else if (!input.value.match(myRe[1])) {
            let warningText = document.createTextNode(warnings[1]);
            spans[1].appendChild(warningIcon);
            spans[1].appendChild(warningText);
        }

        checkSpans("input-warning-student","student_create");
    }
    else if (inputID == "student_gradyear") {
        // console.log("im checking last name");
        clearElement(spans[2]);

        if (input.value == "") {
            let warningText = document.createTextNode("This field is required");
            spans[2].appendChild(warningIcon);
            spans[2].appendChild(warningText);
        }
        else if (!input.value.match(myRe[2])) {
            let warningText = document.createTextNode(warnings[2]);
            spans[2].appendChild(warningIcon);
            spans[2].appendChild(warningText);
        }

        checkSpans("input-warning-student", "student_create");
    }
    // checks email
    else if (inputID == "student_email") {
        console.log("im checking email");
        clearElement(spans[3]);

        if (input.value == "") {
            let warningText = document.createTextNode("This field is required");
            spans[3].appendChild(warningIcon);
            spans[3].appendChild(warningText);
        }
        else if (!input.value.match(myRe[3])) {
            let warningText = document.createTextNode(warnings[3]);
            spans[3].appendChild(warningIcon);
            spans[3].appendChild(warningText);
        }

        checkSpans("input-warning-student", "student_create");
    }
    else if (inputID == "student_username") {
        console.log("im checking last name");
        clearElement(spans[4]);

        if (input.value == "") {
            let warningText = document.createTextNode("This field is required");
            spans[4].appendChild(warningIcon);
            spans[4].appendChild(warningText);
        }
        else if (!input.value.match(myRe[4])) {
            let warningText = document.createTextNode(warnings[4]);
            spans[4].appendChild(warningIcon);
            spans[4].appendChild(warningText);
        }

        checkSpans("input-warning-student", "student_create");
    }
    else if (inputID == "student_password") {
        console.log("im checking last name");
        clearElement(spans[5]);

        if (input.value == "") {
            let warningText = document.createTextNode("This field is required");
            spans[5].appendChild(warningIcon);
            spans[5].appendChild(warningText);
        }
        else if (!input.value.match(myRe[5])) {
            let warningText = document.createTextNode(warnings[5]);
            spans[5].appendChild(warningIcon);
            spans[5].appendChild(warningText);
        }

        checkSpans("input-warning-student", "student_create");
    }
    else if (inputID == "student_repeat_password") {
        console.log("im checking last name");
        clearElement(spans[6]);


        if (input.value == "") {
            let warningText = document.createTextNode("This field is required");
            spans[6].appendChild(warningIcon);
            spans[6].appendChild(warningText);
        }
        else if (input.value !== document.getElementById("student_password").value) {
            let warningText = document.createTextNode(warnings[6]);
            spans[6].appendChild(warningIcon);
            spans[6].appendChild(warningText);
        }

        checkSpans("input-warning-student", "student_create");
    }
}

function validateClubInput(e) {
    let input = e.target;
    let inputID = input.getAttribute("id");

    let warningIcon = document.createElement("span");
    warningIcon.setAttribute("class", "bi bi-exclamation-triangle-fill");

    console.log("the input is " + input + " and the id is " + inputID);

    let spans = document.getElementsByClassName("input-warning-club");
    let warnings = [
        "Please enter a club name",
        "Please enter only letters",
        "Please enter a vaild email address",
        "Phone number must be formatted as XXX-XXX-XXXX",
        "Username must be at least 3 characters",
        "Password must be at least 4 characters",
        "Passwords do not match"
    ];
    let myRe = [
        /^[A-Za-z0-9 ']+$/,
        /^[A-Za-z ]+$/,
        /^[A-Za-z0-9]+@[A-Za-z]+[\.A-Za-z]+$/,
        /^[0-9]{3}-[0-9]{3}-[0-9]{4}$/,
        /^[A-Za-z0-9]{3,}$/,
        /^[A-Za-z0-9]{4,}$/
    ];

    console.log("second check for id: " + inputID);
    // checks first name
    if (inputID == "club_name") {
        clearElement(spans[0]);

        if (input.value == "") {
            let warningText = document.createTextNode("This field is required");
            spans[0].appendChild(warningIcon);
            spans[0].appendChild(warningText);
        }
        else if (!input.value.match(myRe[0])) {
            let warningText = document.createTextNode(warnings[0]);
            spans[0].appendChild(warningIcon);
            spans[0].appendChild(warningText);
        }

        checkSpans("input-warning-club", "club_create");
    }
    // checks last name
    else if (inputID == "club_president") {
        clearElement(spans[1]);

        if (input.value == "") {
            let warningText = document.createTextNode("This field is required");
            spans[1].appendChild(warningIcon);
            spans[1].appendChild(warningText);
        }
        else if (!input.value.match(myRe[1])) {
            let warningText = document.createTextNode(warnings[1]);
            spans[1].appendChild(warningIcon);
            spans[1].appendChild(warningText);
        }

        checkSpans("input-warning-club", "club_create");
    }
    else if (inputID == "club_email") {
        clearElement(spans[2]);

        if (input.value == "") {
            let warningText = document.createTextNode("This field is required");
            spans[2].appendChild(warningIcon);
            spans[2].appendChild(warningText);
        }
        else if (!input.value.match(myRe[2])) {
            let warningText = document.createTextNode(warnings[2]);
            spans[2].appendChild(warningIcon);
            spans[2].appendChild(warningText);
        }

        checkSpans("input-warning-club", "club_create");
    }
    // checks email
    else if (inputID == "club_phone") {
        clearElement(spans[3]);

        if (input.value == "") {
            let warningText = document.createTextNode("This field is required");
            spans[3].appendChild(warningIcon);
            spans[3].appendChild(warningText);
        }
        else if (!input.value.match(myRe[3])) {
            let warningText = document.createTextNode(warnings[3]);
            spans[3].appendChild(warningIcon);
            spans[3].appendChild(warningText);
        }

        checkSpans("input-warning-club", "club_create");
    }
    else if (inputID == "club_username") {
        clearElement(spans[4]);

        if (input.value == "") {
            let warningText = document.createTextNode("This field is required");
            spans[4].appendChild(warningIcon);
            spans[4].appendChild(warningText);
        }
        else if (!input.value.match(myRe[4])) {
            let warningText = document.createTextNode(warnings[4]);
            spans[4].appendChild(warningIcon);
            spans[4].appendChild(warningText);
        }

        checkSpans("input-warning-club", "club_create");
    }
    else if (inputID == "club_password") {
        clearElement(spans[5]);

        if (input.value == "") {
            let warningText = document.createTextNode("This field is required");
            spans[5].appendChild(warningIcon);
            spans[5].appendChild(warningText);
        }
        else if (!input.value.match(myRe[5])) {
            let warningText = document.createTextNode(warnings[5]);
            spans[5].appendChild(warningIcon);
            spans[5].appendChild(warningText);
        }

        checkSpans("input-warning-club", "club_create");
    }
    else if (inputID == "club_password_repeat") {
        clearElement(spans[6]);

        if (input.value == "") {
            let warningText = document.createTextNode("This field is required");
            spans[6].appendChild(warningIcon);
            spans[6].appendChild(warningText);
        }
        else if (input.value !== document.getElementById("club_password").value) {
            let warningText = document.createTextNode(warnings[6]);
            spans[6].appendChild(warningIcon);
            spans[6].appendChild(warningText);
        }

        checkSpans("input-warning-club", "club_create");
    }
}

function submitForm(e) {
    e.preventDefault();
}
