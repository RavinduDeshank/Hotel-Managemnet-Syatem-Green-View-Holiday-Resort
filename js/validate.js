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
}