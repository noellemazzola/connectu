// ...
window.addEventListener("load", init, false);

// initialization
function init() {
    var first = document.getElementById("fname");
    var last = document.getElementById("lname");
    var email = document.getElementById("email");

    first.addEventListener("blur", validateInput, false);
    last.addEventListener("blur", validateInput, false);
    email.addEventListener("blur", validateInput, false);
}

// clears the content of the given element 
function clearElement(el) {
    while(el.hasChildNodes()) {
        el.removeChild(el.lastChild);
    }
}

// enables submit if all input is properly formatted
function checkSpans() {
    var subscribe = document.getElementById("newsletter-submit");
    var spans = document.getElementsByClassName("input-warning");
    var clearedSpans = 0;

    for (var i = 0; i < spans.length; i++) {
        if (!spans[i].hasChildNodes())
            clearedSpans++;
    }

    if (clearedSpans == spans.length)
        subscribe.disabled = false;
    else
        subscribe.disabled = true;

}

// validates the input in the newsletter form
function validateInput(e) {
    var input = e.target;
    var inputID = input.getAttribute("id");

    var warningIcon = document.createElement("span");
    warningIcon.setAttribute("class", "iconify align-bottom");
    warningIcon.setAttribute("data-icon", "carbon:warning");
    warningIcon.setAttribute("style", "color: darkorange; padding: 0 5px 0 0;");
    warningIcon.setAttribute("data-width", "25");
    warningIcon.setAttribute("data-height", "25");

    console.log("the input is " + input + " and the id is " + inputID);

    var spans = document.getElementsByClassName("input-warning");
    var warnings = ["Please enter only letters", "Please enter only letters", "Please enter a vaild email address"];
    var myRe = [/^[A-Za-z]+$/, /^[A-Za-z]+$/, /^[A-Za-z0-9]+@[A-Za-z]+[\.A-Za-z]+$/];

    console.log("second check for id: " + inputID);
    // checks first name
    if (inputID == "fname") {
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
    else if (inputID == "lname") {
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
    // checks email
    else if (inputID == "email") {
        console.log("im checking email");
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
}
