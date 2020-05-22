<<<<<<< HEAD
function validate()
{
    var name = document.getElementById("employee_name").value;
    for(i=0;i<name.length;i++)
    {
        ch = name.charAt(i);
        if ((ch>='a' && ch<='z') &&  !(ch>='A' && ch<='Z') && !(ch == ' '))
        {
            alert("Invalid name type");
            return false;
        }
    }
    return true;
=======
function validate(inputtxt)
{
    var letter = /^[A-Za-z]+$/;
    if(inputtxt.value.match(letter))
    {
        return true;
    }
    else{
        alert("Please input alphabet characters only");
        return false;
    }
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
}