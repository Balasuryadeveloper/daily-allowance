function addfunc(){
    var sn,date,time,particular,debit,credit;
    sn=Number(document.getElementById("sn").value);
    date=document.getElementById("date").value;
    time=document.getElementById("time").value;
    particular=document.getElementById("particular").value;
    debit=document.getElementById("debit").value;
    credit=document.getElementById("credit").value;
    document.writeln("S.no :"+sn);
    document.writeln("<br>Date :"+date);
    document.writeln("<br>Time :"+time);
    document.writeln("<br>particular :"+particular);
    document.writeln("<br>debit :"+debit);
    document.writeln("<br>credit :"+credit);
}
function load(){
    var deb,cre,deb1,deb2,deb3,deb4,cre1,cre2,cre3,cre4,tab,te;
    deb1=Number(document.getElementById("d1").value);
    deb2=Number(document.getElementById("d2").value);
    deb3=Number(document.getElementById("d3").value);
    deb4=Number(document.getElementById("d4").value);
    deb=deb1+deb2+deb3+deb4;
    document.getElementById("tb").innerHTML=deb; //total debit
    cre1=Number(document.getElementById("c1").value);
    cre2=Number(document.getElementById("c2").value);
    cre3=Number(document.getElementById("c3").value);
    cre4=Number(document.getElementById("c4").value);
    cre=cre1+cre2+cre3+cre4;
    document.getElementById("tc").innerHTML=cre //total credit
    tab=cre-deb;
    document.getElementById("tab").innerHTML=tab; //total available balance
    te=deb;
    document.getElementById("te").innerHTML=te;  //total expenditure
}
