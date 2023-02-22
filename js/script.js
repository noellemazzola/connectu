// ...
window.addEventListener("load", init, false);

// initialization
function init() {
    var studentInputs = document.getElementById("register_student_form").elements;
    for (let i = 0; i < studentInputs.length; i++) {
        if (studentInputs[i].type !== "submit")
            studentInputs[i].addEventListener("blur", validateInput, false);
    }

    var createBtn = document.getElementById("student_create");
    // createBtn.addEventListener("click", submitForm, false);
}

// clears the content of the given element 
function clearElement(el) {
    while(el.hasChildNodes())
        el.removeChild(el.lastChild);
}

// enables submit if all input is properly formatted
function checkSpans() {
    var createBtn = document.getElementById("student_create");
    var spans = document.getElementsByClassName("input-warning");
    var clearedSpans = 0;

    for (var i = 0; i < spans.length; i++) {
        if (!spans[i].hasChildNodes())
            clearedSpans++;
    }

    if (clearedSpans == spans.length)
        createBtn.disabled = false;
    else
        createBtn.disabled = true;

}

// validates the input in the form
function validateInput(e) {
    var input = e.target;
    var inputID = input.getAttribute("id");

    var warningIcon = document.createElement("span");
    warningIcon.setAttribute("class", "bi bi-exclamation-triangle-fill");

    console.log("the input is " + input + " and the id is " + inputID);

    var spans = document.getElementsByClassName("input-warning");
    var warnings = [
        "Please enter only letters",
        "Please enter only letters",
        "Please enter term and year",
        "Please enter a vaild email address",
        "Username must be at least 3 characters",
        "Password must be at least 4 characters",
        "Passwords do not match"
    ];
    var myRe = [
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
            var warningText = document.createTextNode("This field is required");
            spans[0].appendChild(warningIcon);
            spans[0].appendChild(warningText);
        }
        else if (!input.value.match(myRe[0])) {
            var warningText = document.createTextNode(warnings[0]);
            spans[0].appendChild(warningIcon);
            spans[0].appendChild(warningText);
        }

        checkSpans();
    }
    // checks last name
    else if (inputID == "student_lname") {
        console.log("im checking last name");
        clearElement(spans[1]);

        if (input.value == "") {
            var warningText = document.createTextNode("This field is required");
            spans[1].appendChild(warningIcon);
            spans[1].appendChild(warningText);
        }
        else if (!input.value.match(myRe[1])) {
            var warningText = document.createTextNode(warnings[1]);
            spans[1].appendChild(warningIcon);
            spans[1].appendChild(warningText);
        }

        checkSpans();
    }
    else if (inputID == "student_gradyear") {
        // console.log("im checking last name");
        clearElement(spans[2]);

        if (input.value == "") {
            var warningText = document.createTextNode("This field is required");
            spans[2].appendChild(warningIcon);
            spans[2].appendChild(warningText);
        }
        else if (!input.value.match(myRe[2])) {
            var warningText = document.createTextNode(warnings[2]);
            spans[2].appendChild(warningIcon);
            spans[2].appendChild(warningText);
        }

        checkSpans();
    }
    // checks email
    else if (inputID == "student_email") {
        console.log("im checking email");
        clearElement(spans[3]);

        if (input.value == "") {
            var warningText = document.createTextNode("This field is required");
            spans[3].appendChild(warningIcon);
            spans[3].appendChild(warningText);
        }
        else if (!input.value.match(myRe[3])) {
            var warningText = document.createTextNode(warnings[3]);
            spans[3].appendChild(warningIcon);
            spans[3].appendChild(warningText);
        }

        checkSpans();
    }
    else if (inputID == "student_username") {
        console.log("im checking last name");
        clearElement(spans[4]);

        if (input.value == "") {
            var warningText = document.createTextNode("This field is required");
            spans[4].appendChild(warningIcon);
            spans[4].appendChild(warningText);
        }
        else if (!input.value.match(myRe[4])) {
            var warningText = document.createTextNode(warnings[4]);
            spans[4].appendChild(warningIcon);
            spans[4].appendChild(warningText);
        }

        checkSpans();
    }
    else if (inputID == "student_password") {
        console.log("im checking last name");
        clearElement(spans[5]);

        if (input.value == "") {
            var warningText = document.createTextNode("This field is required");
            spans[5].appendChild(warningIcon);
            spans[5].appendChild(warningText);
        }
        else if (!input.value.match(myRe[5])) {
            var warningText = document.createTextNode(warnings[5]);
            spans[5].appendChild(warningIcon);
            spans[5].appendChild(warningText);
        }

        checkSpans();
    }
    else if (inputID == "student_repeat_password") {
        console.log("im checking last name");
        clearElement(spans[6]);


        if (input.value == "") {
            var warningText = document.createTextNode("This field is required");
            spans[6].appendChild(warningIcon);
            spans[6].appendChild(warningText);
        }
        else if (input.value !== document.getElementById("student_password").value) {
            var warningText = document.createTextNode(warnings[6]);
            spans[6].appendChild(warningIcon);
            spans[6].appendChild(warningText);
        }

        checkSpans();
    }
}

function submitForm(e) {
    e.preventDefault();
}
