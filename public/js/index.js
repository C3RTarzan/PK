account();
clickAccount();
function account(){
    const register = document.querySelector(".register");
    const login = document.querySelector(".login");
    const buttonDisplay = document.querySelectorAll(".button-display")
    for(let i = 0; i < buttonDisplay.length; i++){
        buttonDisplay[i].addEventListener("click", () =>{
            if(getComputedStyle(login).display == "none"){
                login.style.display = "block";
                register.style.display = "none";
            }else{
                login.style.display = "none";
                register.style.display = "block";  
            }
        })
    }
}
function clickAccount(){
    const iconify = document.querySelector(".options");
    iconify.addEventListener("click", () => {
        const scrollingElement = (document.scrollingElement || document.body);
        scrollingElement.scrollTop = scrollingElement.scrollHeight; 
    })
}