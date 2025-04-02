var total=0;
var state=" ";
document.getElementById("0").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 0;
})
document.getElementById("1").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 1;
})
document.getElementById("2").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 2;
})
document.getElementById("3").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 3;
})
document.getElementById("4").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 4;
})
document.getElementById("5").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 5;
})
document.getElementById("6").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 6;
})
document.getElementById("7").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 7;
})
document.getElementById("8").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 8;
})
document.getElementById("9").addEventListener("click",function(){
    document.getElementsByName("kq")[0].value+= 9;
})

document.getElementById("+").addEventListener("click",function(){
    total=parseFloat(document.getElementsByName("kq")[0].value);
    state='+';
    document.getElementsByName("kq")[0].value= '';
})
document.getElementById("-").addEventListener("click",function(){
    total=parseFloat(document.getElementsByName("kq")[0].value);
    state='-';
    document.getElementsByName("kq")[0].value= '';
})
document.getElementById("*").addEventListener("click",function(){
    total=parseFloat(document.getElementsByName("kq")[0].value);
    state='*';
    document.getElementsByName("kq")[0].value= '';
})
document.getElementById("/").addEventListener("click",function(){
    total=parseFloat(document.getElementsByName("kq")[0].value);
    state='/';
    document.getElementsByName("kq")[0].value= '';
})
document.getElementById("=").addEventListener("click",function(){
    switch(state){
        case '+': total+=parseFloat(document.getElementsByName("kq")[0].value);
    }
    document.getElementsByName("kq")[0].value=total;
    
})