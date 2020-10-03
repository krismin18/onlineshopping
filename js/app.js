// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}
function validateReg()
{
    var uname = document.getElementById("user_name").value;
    console.log(uname);
    var email = document.getElementById("exampleInputEmail1").value;
    console.log(email);
    var pass = document.getElementById("exampleInputPassword1").value;
    console.log(pass);
    var mobile = document.getElementById("mnum").value;
    console.log(mobile);
    var gender = document.getElementsByName("gender");
    //var gender = document.rForm.gender.value;
    for(var i = 0; i < gender.length; i++)
    {
        if(gender[i].checked){
            console.log(gender[i].value);
        }
    }

     var unamErr = emailErr = passErr = mobileErr = genErr = true;

     //Validate form
     // Validate name
    if(uname == "") {
        printError("unamErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(uname) === false) {
            printError("unamErr", "Please enter a valid name");
        } else {
            printError("unamErr", "");
            unamErr = false;
        }
    }
    
    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }

    //validate password
    if(pass == ""){
        printError("passErr","Please Enter Password");
    }else{
        var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
        if(regex.test(pass) === false){
            printError("passErr", "Password length should be atleast 8 ");
        } else{
            printError("passErr", "");
            passErr = false;
        }
    }

    // Validate mobile number
    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid 10 digit mobile number");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }
    
     // Validate gender
     if(gender.checked == "") {
        printError("genErr", "Please select your gender");
    } else {
        printError("genErr", "");
        genErr = false;
    }

    if((unamErr || emailErr || passErr || mobileErr ||  genErr || checkErr) == true) {
        alert("Form not");
       // return false;
     } else {
         var dataPreview = "You've entered the following details: \n" +
                           "Full Name: " + uname + "\n" +
                           "Email Address: " + email + "\n" +
                           "Password: " + pass + "\n" +
                           "Mobile Number: " + mobile + "\n" +
                           "Gender: " + gender + "\n";
        
         alert(dataPreview);
     }
};


/* var logValidate = document.getElementById('btnsub');

logValidate.addEventListener('click',() =>{
    var email = document.getElementById("Email1").value;
    var password = document.getElementById("Password1").value;  
    if ( email == "Formget" && password == "abc"){
        alert ("Login successfully");
        window.location = "shap.html"; // Redirecting to other page.
        return false;
        }else{
        alert ("Login was unsuccessful, please check your username and password");
        return false;
    }

}); */



/*var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var email = document.getElementById("Email1").value;
var password = document.getElementById("Password1").value;
if ( email == "Formget" && password == "abc"){
alert ("Login successfully");
window.location = "success.html"; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
alert("You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("Email1").disabled = true;
document.getElementById("Password1").disabled = true;
document.getElementById("btnsub").disabled = true;
return false;
}
}
}*/

//                                       AJAX
//Create xmlhttprequest object
//open request
//set header(Data type )(optional part)
//check status
//send

// 0=Request initialization not completed

// 1=Connected
// 2=requestsent
// 3=processing
// 4=successful Data


function getData(){
    var xhr = new XMLHttpRequest();
    xhr.open('POST','fetchProduct.php',true);
    xhr.onreadystatechange = function(){
        if(this.readyState == 1){
            console.log("Connceted");
        }
        if(this.readyState == 2){
            console.log("Sent Request");
        } 
        if(this.readyState === 4 && this.status === 200){
            document.getElementById("pcon").innerHTML = this.responseText;
        }
    }
    xhr.send();
};
