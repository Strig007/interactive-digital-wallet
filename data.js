function isValid(pForm)
{
    var flag = true;

    var category = pForm.category.value;
    var to = pForm.to.value;
    var amount = Number(pForm.amount.value);

    document.getElementById("categoryError").innerHTML = "";
    document.getElementById("phoneError").innerHTML = "";
    document.getElementById("amountError").innerHTML = "";

    if (category === "")
    {
        document.getElementById("categoryError").innerHTML = "Category Cannot Be Empty!";
        flag = false;
    }

    if (to === "")
    {
        document.getElementById("phoneError").innerHTML = "Please write mobile number!";
        flag = false;
    }
    if (to.length < 11 || to.length > 11)
    {
        document.getElementById("phoneError").innerHTML = "Number is not valid";
        flag = false;
    }

    if (amount < 0)
    {
        document.getElementById("amountError").innerHTML = "Amount cannot be negative";
        flag = false;
    } 

    if (amount === "" || amount === 0)
    {
        document.getElementById("amountError").innerHTML = "Amount cannot be empty!";
        flag = false;
    }
    return flag;
}

function submitForm(pForm)
{
    var checkForm = isValid(pForm);
    if (checkForm)
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            if (this.status === 200)
            {
                document.getElementById("message").innerHTML = this.responseText;
            }
        }

        xhttp.open("POST", "sendDataServer.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("category="+pForm.category.value+"&to="+pForm.to.value+"&amount="+
        pForm.amount.value);
    }
}