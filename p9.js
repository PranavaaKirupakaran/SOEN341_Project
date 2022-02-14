function deleteUser(delBtn){
    if(confirm("Do you really want to permatently delete a user?")){
    var table = delBtn.parentNode.parentNode.parentNode;
    var rowId = delBtn.parentNode.parentNode.rowIndex;
    table.deleteRow(rowId);}
}