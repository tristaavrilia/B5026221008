var heightInput = document.querySelector(".height");
var weightInput = document.querySelector(".weight");
var calculateButton = document.querySelector(".calculate");
var result = document.querySelector(".result");
var statement = document.querySelector(".statement");

var BMI, height, weight;

calculateButton.addEventListener("click", ()=>{
    
    height = heightInput.value/100;
    weight = weightInput.value;
    BMI = (weight/(height*height)).toFixed(2); 
    result.innerText = BMI;

    if(height==="" || isNaN(height)){
        result.innerHTML=""
        statement.innerHTML="Provide a valid height!" 
     } else if(weight==="" || isNaN(weight)){
        result.innerHTML=""
        statement.innerHTML="Provide a valid weight!"
     } else{
        if(BMI < 18.5){
            statement.innerText = "Your BMI falls within the underweight range";    
        }else if(BMI >= 18.5 && BMI < 25){
            statement.innerText = "Your BMI falls within the normal or healthy weight range";
        }else if((BMI >= 25) && (BMI < 30 )){
            statement.innerText = "Your BMI falls within the overweight range";
        }else{
            statement.innerText = "Your BMI falls within the obese range";
        }
     }
     
});


document.getElementById("myForm").addEventListener("submit", function (event) {
    event.preventDefault();

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;

    if (name !== "" && email !== "") {
        alert("Hooray validation successful! You will receive an verification email within a few seconds...");
    } else if(name !== "" && email === ""){
        alert("Sorry validation failed. Please fill the email field...");
    } else if(name === "" && email !== ""){
        alert("Sorry validation failed. Please fill the name field...");
    } else {
        alert("Sorry validation failed. Please fill all the fields...");
    }
});