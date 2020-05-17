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
}