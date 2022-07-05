var button = document.getElementById("button");
button.onclick = function() {
    var name_label = document.getElementById("name");
    var email_label = document.getElementById("email");
    var info_label = document.getElementById("info");
    if (name_label.value == "") {
        document.getElementById("warning_label").innerHTML="Input your name";
    }
    else if (email_label.value == "") {
        document.getElementById("warning_label").innerHTML="Input your e-mail";
    }
    else if (info_label.value == "") {
        document.getElementById("warning_label").innerHTML="Input information about your project";
    }
    else {
        document.getElementById("warning_label").innerHTML="Done";
    }    
}