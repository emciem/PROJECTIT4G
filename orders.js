async function getorders(){
const response = await fetch("http://localhost:8080/Orders");
const jsonData = await response.json();
console.log(jsonData); 
document.getElementById('residents').innerHTML=jsonData.Orders
}

function Orders(){
    getorders()

}
window.onload=Orders