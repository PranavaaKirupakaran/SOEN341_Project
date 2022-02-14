function deleteRow(obj){
     var table = document.getElementById("ttt");
     var idx = obj.parentNode.parentNode.rowIndex;
     table.deleteRow(idx);
    
}