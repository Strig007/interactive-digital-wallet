function getData(pForm)
{
    
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function()
    {
        if (this.status === 200)
        {
            document.getElementById("result").innerHTML = this.responseText;
        }
    }
    xhttp.open("GET", pForm.action + "?datetime=" + pForm.datetime.value, true);
    xhttp.send();
}