function calculate1() {
    var s1 = parseInt(document.getElementById("s1").value);
    var seasonOnePrice = 17.00;
    var subtotal = s1 * seasonOnePrice;
    document.getElementById("s1Price").value = subtotal;
    document.getElementById("s1Price").innerHTML = "The subtotal for S1: $" + subtotal.toFixed(2);
    return subtotal;
}
function calculate2() {
    var s2 = parseInt(document.getElementById("s2").value);
    var price = 22.50;
    var subtotal = s2 * price;
    document.getElementById("s2Price").value = subtotal;
    document.getElementById("s2Price").innerHTML = "The subtotal for S2: $" + subtotal.toFixed(2);
    return subtotal;
}
function calculate3() {
    var s3 = parseInt(document.getElementById("s3").value);
    var price = 26.75;
    var subtotal = s3 * price;
    document.getElementById("s3Price").value = subtotal;
    document.getElementById("s3Price").innerHTML = "The subtotal for S3: $" + subtotal.toFixed(2);
    return subtotal;
}
function calculateTotal1() {
    var total = calculate1() + calculate2() + calculate3();
    document.getElementById("totalPrice").value = total;
    document.getElementById("totalPrice").innerHTML = "The total price is $" + total.toFixed(2);
    return total;
}
function validateTime(){
        var month = document.getElementById("month").value;
        var year = document.getElementById("year").value;
        var exdate = new Date();
        exdate.setFullYear(year,month - 1);
        var today = new Date();
        if(month !="" && month!=null && year !="" && year!=null){
            if(exdate > today){
                return true;
            }
            else{
                alert("Your credit card expired date is invalid");
                return false;
            }
        }
}
function manageStorage(){
    if (typeof(Storage) !== "undefined") {
        var option = document.getElementById("remember").value;
        var fn = document.getElementById("firstname").value;
        var ln = document.getElementById("lastname").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var address = document.getElementById("address").value;
        if(option == 1){
            localStorage.setItem("firstname",fn);
            localStorage.setItem("lastname",ln);
            localStorage.setItem("email",email);
            localStorage.setItem("phone",phone);
            localStorage.setItem("address",address);
        }
        if(option == 0){
            localStorage.clear();
        }
    } 
    else {
        alert("Your browser doesn't support Web Storage, your information is neither stored nor forgotten");
    }
}
function autoFill(){
        if(localStorage.firstname != null && localStorage.firstname !=""){
             document.getElementById("firstname").value = localStorage.firstname;
        }
        if(localStorage.lastname != null && localStorage.lastname !=""){
             document.getElementById("lastname").value = localStorage.lastname;
        }
        if(localStorage.email != null && localStorage.email !=""){
             document.getElementById("email").value = localStorage.email;
        }
        if(localStorage.phone != null && localStorage.phone !=""){
             document.getElementById("phone").value = localStorage.phone;
        }
        if(localStorage.address != null && localStorage.address !=""){
             document.getElementById("address").value = localStorage.address;
        }
}