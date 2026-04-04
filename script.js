

const brandName = "ROSE'S WOMEN CLOTHES";
let discount = 10;

const brandInfo = document.createElement("p");
brandInfo.innerHTML = "Welcome to " + brandName;

document.getElementById("mainHeading").appendChild(brandInfo);

const discountText = document.createElement("p");
discountText.innerHTML = "Current Discount: " + discount + "%";
document.getElementById("mainHeading").appendChild(discountText);

const offerButton = document.createElement("button");
offerButton.innerHTML = "Get Offer";
offerButton.style.padding = "10px";
offerButton.style.marginTop = "10px";
document.getElementById("mainHeading").appendChild(offerButton);

function updateDiscount(){
    discount = discount + 5;
    discountText.innerHTML = "Updated Discount: " + discount + "%";
}

function welcomeCustomer(name){
    document.querySelector("#mainHeading h2").innerHTML =
    "Welcome " + name + " to Rose's Women Clothes";
}

const showMessage = function(message){
    brandInfo.innerHTML = message;
};

const calculatePrice = (price) => {
    return price - (price * discount / 100);
};

const dress = {
    name: "Traditional Wear",
    price: 1999,
    status: "Available",

    updateStatus:function(newStatus){
        this.status = newStatus;
        return this.name + " is now " + this.status;
    }
};

offerButton.addEventListener("click", function(){

    updateDiscount();

    let userName = prompt("Enter your name:");

    if(userName !== null && userName !== ""){

        welcomeCustomer(userName);

        let finalPrice = calculatePrice(dress.price);

        let confirmOrder = confirm(
            "Price after discount: ₹" + finalPrice + "\nDo you want to buy Traditional Wear?"
        );

        if(confirmOrder){
            let result = dress.updateStatus("Booked");
            showMessage(result);
            alert("Order confirmed successfully!");
        }
        else{
            alert("Order cancelled.");
        }
    }
    else{
        alert("Please enter your name.");
    }
});

document.getElementById("searchBox").addEventListener("input", function(){
    brandInfo.innerHTML = "Searching for: " + this.value;
});

document.getElementById("searchBox").addEventListener("mouseover", function(){
    this.style.backgroundColor = "lightpink";
});

document.getElementById("searchBox").addEventListener("mouseout", function(){
    this.style.backgroundColor = "white";
});

document.getElementById("customerForm").addEventListener("submit", function(event){
    event.preventDefault();

    let name = document.getElementById("name").value;

    if(name === ""){
        alert("Please enter your name");
    }
    else{
        alert("Thank you " + name + ". Your details were submitted successfully!");
    }
});


