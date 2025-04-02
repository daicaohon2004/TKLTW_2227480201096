function KiemTra(){
    var a=document.getElementsById("nd").value;
    if(a.length>200)
        {
            alert("Bạn đã gõ vượt quá số ký tự cho phép");
            return;
        }
    else{
        document.getElementsByName("Sokytu")[0].value=a.length;
    }

}