

function chk_in()
{   
    
        var todate=document.getElementById("checkout").value;
        var fromdate=document.getElementById("checkin").value;
        var frmdate=new Date(fromdate);
        if(new Date(frmdate).getTime() <= new Date().getTime())
        {
            document.getElementById("checkin").style.boxShadow = "1px 0 10px red";
        }
        else{
            document.getElementById("checkin").style.boxShadow = "none";
        }
    
}
function chk_out()
{
    var todate=document.getElementById("checkout").value;
    var fromdate=document.getElementById("checkin").value;
    var frmdate=new Date(fromdate); 
    if(todate<fromdate)
    {
        document.getElementById("checkout").style.boxShadow = "1px 0 10px red";
    }
    else{
        document.getElementById("checkout").style.boxShadow = "none";
    }
}
function chk_proof()
{
var tst=document.getElementById("prf1").value;//text box
var x=document.getElementById("proof").value;//select
if(x=="aadhaar")
{ 
    if(!tst.match(/[2-9]{1}[0-9]{3}\s[0-9]{4}\s[0-9]{4}/))
    {
        document.getElementById("prf1").style.boxShadow = "1px 0 10px red";
    }
    else{
        document.getElementById("prf1").style.boxShadow = "none";
    }

}
else if(x=="passport")
{
if(!tst.match(/[A-Z]{2}[0-9]{7}/))
{
    document.getElementById("prf1").style.boxShadow = "1px 0 10px red";
}
else
{
    document.getElementById("prf1").style.boxShadow = "none";
}
}
else
{
    document.getElementById("prf1").style.boxShadow = "1px 0 10px red";
}

}
function chk_nil()
{
    var a=document.getElementById("country").value;
    var b=document.getElementById("room").value;
    var c=document.getElementById("rtype").value;
    var d=document.getElementById("adults").value; 
    var e=document.getElementById("children").value;
    if(a=="nil")
    {
        document.getElementById("country").style.boxShadow = "1px 0 10px red";
    }
    else
    {
        document.getElementById("country").style.boxShadow = "none";
    }
    if(b=="nil")
    {
        document.getElementById("room").style.boxShadow = "1px 0 10px red";
    }
    else
    {
        document.getElementById("room").style.boxShadow = "none";
    }
    if(c=="nil")
    {
        document.getElementById("rtype").style.boxShadow = "1px 0 10px red";
    }
    else
    {
        document.getElementById("rtype").style.boxShadow = "none";
    }
    if(d=="nil")
    {
        document.getElementById("adults").style.boxShadow = "1px 0 10px red";
    }
    else
    {
        document.getElementById("adults").style.boxShadow = "none";
    }
    if(e=="nil")
    {
        document.getElementById("children").style.boxShadow = "1px 0 10px red";
    }
    else
    {
        document.getElementById("children").style.boxShadow = "none";
    }
    
}