console.log("added js");

function verify(){
    const inputPassword = document.querySelector('#inputPassword')
    const confirmPassword = document.querySelector('#confirmPassword')
    const passwordAlert = document.querySelector('#password')

    if(inputPassword.value !== confirmPassword.value){
        // console.log("Password match")
        passwordAlert.innerHTML="Password doesn't match"
        passwordAlert.style.display = "block"
    }else {
        // console.log("password doesn't match")
        passwordAlert.style.display = "None"
    }

}


let friuts = ["mango","apple","banana"]
    console.log(friuts)

    const details = [
        {
            name:"Nandan",
            role:"Students"
        },
        {
            name:"Prem",
            role:"Student"
        },
        {
            name:"Bharath",
            role:"Student"
        }
    ]
    console.log(details)

