function validate()
{
    var name = document.myForm.name.value;
    var x = document.myForm.email.value;
    var price = document.myForm.price.value;

    var atposition = x.indexOf("@");
    var dotposition = x.lastPosition(".");

    if (name == null || name == "") {
        alert("Name can't be blank");
        return false;
    }
    else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
        alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
        return false;  
        }
    else if(isNaN(price)){
        document.getElementById("prc").innerHTML = "Enter numeric value only";
        return false;
    }
    else{
        return false;
    }
}