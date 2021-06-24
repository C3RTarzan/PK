ipGerency();
function ipGerency(){
    
    const ipTrocarte = document.querySelectorAll(".IP span");
    const ipGerency = document.querySelectorAll(".IP-gerency");
    for(let i = 0; i < ipTrocarte.length; i++){
        let count = 0;
        ipTrocarte[i].addEventListener("click", () =>{
            if(count == 1){
                ipGerency[i].style.display = "none";
                count = 0;
            }else{
                ipGerency[i].style.display = "grid";
                count = 1;
            }
        })
    }
}