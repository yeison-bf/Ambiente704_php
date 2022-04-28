


function CapturarNombre(){
    let nombre = document.getElementById('inputDelNombre').value
    document.getElementById('NombreRegistrado').innerHTML = nombre
}



function CalculariIndiceMasaCorporal(){

    let peso = document.getElementById('peso').value
    let talla = document.getElementById('talla').value

    let masaMuscular =  (parseInt(talla) * parseInt(talla)) /parseInt(peso)  

    if(peso == ""){
        alert("lo sentimo no puede ir vacio el peso")
    }else{
        document.getElementById("NombreRegistrado").innerHTML= masaMuscular
        document.getElementById("MasaCorporal").innerHTML= masaMuscular
    }
  
  

}
