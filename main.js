alert("Welcome");
let num1=0;
let num2=0;
let sum= num1 + num2;

console.log(sum);
const summation= () =>{
    const a= document.getElementById("num1");
    const b= document.getElementById("num2");
    const sum=parseFloat(a.value) + parseFloat(b.value)
    const output= document.getElementById("output");
    output.innerHTML=sum;
}

var values=[20,30,40,50];

let Product={
    name: "",
    price: '',
    qty: 5,
    delivery:200;
    total: function() {
        if (delivery===true) {
            return this.price* this.qty + this.delivery;
             }
    else{
        return this.price* this.qty;
        }
        
    }
}
//Button property
console.log(Product.total());
const sumBtn= document.getElementById("sum");
sumBtn.addEventListener("click",
    function () {
        summation()
        
    })

    function openSearch() {
        document.getElementById("myOverlay").style.display = "block";
        }

        // Close the full screen search box
        function closeSearch() {
        document.getElementById("myOverlay").style.display = "none";
        }
        